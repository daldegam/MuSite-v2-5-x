<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

class ldLanguage
{
    public function __construct($module, $autoComplete = true, $prefix = "")
    {    
        /*
        $this->languageBrowser = explode(",", $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
        
        $language = strtolower($this->languageBrowser[0]);
        switch($language)
        {
            case "en-us": case "en": $language = "en"; break; 
        }
        
        $fileLanguage = "languages/".$language."/".$module. ($autoComplete == true ? ".lang.php" : NULL);
        */ 
        
        if(defined("LANGUAGE_PATH") == false)
            exit("Error: The constant: LANGUAGE_PATH not exists in settings.php!");
        
        $fileLanguage = $prefix."languages/".constant("LANGUAGE_PATH")."/".$module. ($autoComplete == true ? ".lang.php" : NULL);
        
        try {
            if(file_exists($fileLanguage)) 
                return require($fileLanguage); 
            else
                throw new Exception($fileLanguage);
        } catch(Exception $e) {
            die("Error: Language file <strong>". $e->getMessage() ."</strong> not found.");
        } 
        
    }
}
/**
* Inserir nas páginas das classes antes de iniciar a definição da classe: 
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    depois apenas chamar pela constante no lugar desejado
*/
?>