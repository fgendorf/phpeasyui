<?php

class EasyUI {

    /**
     * Possible values:
     * - black
     * - bootstrap
     * - default
     * - gray
     * - material
     * - metro
     * 
     * @var string 
     */
    protected $theme = "gray";

    /**
     * load additional extensions
     * - columns-ext
     * - datagrid-cellediting
     * - datagrid-filter
     * - datagrid-bufferview
     * - datagrid-detailview
     * - datagrid-groupview
     * - datagrid-scrollview
     * - jquery-easyui-color
     * - jquery-easyui-pivotgrid
     * - jquery-easyui-ribbon
     * - jquery-easyui-texteditor
     * @var array 
     */
    protected $extensions = array();

    /**
     * value to be changed at each new release
     * @var string 
     */
    protected $sessionload;

    public function __construct() {
        $this->sessionload = "2018011201";
    }

    /**
     * set the theme to be used
     * @param string $theme
     */
    public function setTheme($theme) {
        $this->theme = $theme;
    }

    /**
     * Add extensions to be used in project
     * @param array $extensions
     */
    public function useExtensions(array $extensions) {
        $this->extensions = $extensions;
    }

    public function writeHeaders() {
        echo "<link href = \"vendor/fgendorf/phpeasyui/themes/{$this->theme}/easyui.css?s={$this->sessionload}\" rel = \"stylesheet\" type = \"text/css\"/>";
        echo "<link href = \"vendor/fgendorf/phpeasyui/themes/icon.css\" rel = \"stylesheet\" type = \"text/css\"/>";
        echo "<link href = \"vendor/fgendorf/phpeasyui/themes/{$this->theme}/linkbutton.css\" rel = \"stylesheet\" type = \"text/css\"/>";
        echo "<link href = \"vendor/fgendorf/phpeasyui/themes/{$this->theme}/menubutton.css\" rel = \"stylesheet\" type = \"text/css\"/>";
        echo "<link href = \"vendor/fgendorf/phpeasyui/themes/{$this->theme}/tooltip.css\" rel = \"stylesheet\" type = \"text/css\"/>";
        echo "<script type = \"text/javascript\" src = \"vendor/fgendorf/phpeasyui/jquery.min.js?s={$this->sessionload}\"></script>";
        echo "<script type=\"text/javascript\" src=\"vendor/fgendorf/phpeasyui/jquery.easyui.min.js?s={$this->sessionload}\"></script>";
        if (in_array("jquery-easyui-texteditor", $this->extensions)) {
            echo "<link href = \"vendor/fgendorf/phpeasyui/extensions/jquery-easyui-texteditor/texteditor.css\" rel = \"stylesheet\" type = \"text/css\"/>";
        }
        $datagridview = array('datagrid-groupview', 'datagrid-bufferview', 'datagrid-detailview', 'datagrid-scrollview');
        for ($x = 0; sizeof($this->extensions) > $x; ++$x) {
            if (!in_array($this->extensions[$x], $datagridview)) {
                echo "<script type=\"text/javascript\" src=\"vendor/fgendorf/phpeasyui/extensions/{$this->extensions[$x]}/{$this->extensions[$x]}.js?s={$this->sessionload}\"></script>";
            } else {
                echo "<script type=\"text/javascript\" src=\"vendor/fgendorf/phpeasyui/extensions/jquery-easyui-datagridview/{$this->extensions[$x]}.js?s={$this->sessionload}\"></script>";
            }
        }
    }

}
