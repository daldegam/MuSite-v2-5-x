<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

interface InterfaceModules
{
    public function settings();
    public function loadTemplate($name);
    public function registerVariable($tag, $value);
    public function checkLogin();
}

new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
class ldModules
{
    public $module = NULL, $physicalAddress = NULL;
    public function __construct($module)
    {
        global $MODULES;
        
        try
        {
            if(empty($module))  
                throw new Exception(MODULE_REPORT_MODULE);
            elseif(in_array($module, $MODULES['REGISTER']) == true)
            {
                $this->module = $module;   
            }
            else
                throw new Exception(MODULE_NOT_IN_SETTINGSPHP);
                
            $this->physicalAddress = "modules/classes/modules/".$this->module.".module.php";
            
            if(file_exists($this->physicalAddress) == false)
            {
                throw new Exception(printf(MODULE_NOT_FOUND, $this->physicalAddress)); 
            }
            require($this->physicalAddress);
        } 
        catch (Exception $e)
        {
            exit($e->getMessage());
        }
    }
}


?>