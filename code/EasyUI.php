<?php

class EasyUI {

    /**
     * Possible values:
     * - black
     * - bootstrap
     * - default
     * - {$this->theme}
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
     * - jquery-easyui-color
     * - jquery-easyui-pivotgrid
     * - jquery-easyui-ribbon
     * - jquery-easyui-texteditor
     * - jquery-easyui-datagridview
     * @var array 
     */
    protected $extensions = array();

    /**
     * value to be changed at each new release
     * @var string 
     */
    protected $sessionload = "2018010201";

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
        echo "<link href = \"vendor/fgendorf/phpeasyui/themes/{$this->theme}/easyui.css\" rel = \"stylesheet\" type = \"text/css\"/>";
        echo "<link href = \"vendor/fgendorf/phpeasyui/themes/icon.css\" rel = \"stylesheet\" type = \"text/css\"/>";
        echo "<link href = \"vendor/fgendorf/phpeasyui/themes/{$this->theme}/linkbutton.css\" rel = \"stylesheet\" type = \"text/css\"/>";
        echo "<link href = \"vendor/fgendorf/phpeasyui/themes/{$this->theme}/menubutton.css\" rel = \"stylesheet\" type = \"text/css\"/>";
        echo "<link href = \"vendor/fgendorf/phpeasyui/themes/{$this->theme}/tooltip.css\" rel = \"stylesheet\" type = \"text/css\"/>";
        echo "<script type = \"text/javascript\" src = \"vendor/fgendorf/phpeasyui/jquery.min.js\"></script>";
        echo "<script type=\"text/javascript\" src=\"vendor/fgendorf/phpeasyui/jquery.easyui.min.js\"></script>";
        for($x=0;sizeof($this->extensions)>$x;++$x){
            echo "<script type=\"text/javascript\" src=\"vendor/fgendorf/phpeasyui/extensions/{$this->extensions[$x]}/{$this->extensions[$x]}.js\"></script>";
        }
    }

}
