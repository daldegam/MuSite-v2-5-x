<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldVersion" ) == false ) {
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
	class ldVersion {
        public $version = NULL;
		public function __construct(){}
        
        public function setCurrentVersion($version)
        {
            $this->version = $version;  
        }
        
        public function getCurrentVersion()
        {
            return $this->version;  
        }
        
        public function getEncodeCurrentVersion()
        {
            return "0x".strtoupper(dechex(crc32( $this->version )));  
        }
        
        public function getMessageUpdateNotDefined()
        {                                                                                
            if($_GET['updateKey'] == "show")
                exit("Update key for Changelog.html: ". $this->getEncodeCurrentVersion());                                                                                                          
            echo("<h1>".SITE_UNDER_MAINTENANCE."</h1><hr />");
            echo("<h3>".MESSAGE_TO_ADMIN."</h3>");
            echo(OLD_VERSION_EXPLICATION1."<br /><br />");
            echo(OLD_VERSION_EXPLICATION2."<br />");
            echo(OLD_VERSION_EXPLICATION3."<br /><br />");
            echo(STEPS_TO_REMOVE_MSG."<br /><br />");
            echo(OLD_VERSION_INSTALL_VERSION." ".$this->getCurrentVersion().".");
            exit();
        }
        
        public function getMessageUpdateWrong()
        {                     
            if($_GET['updateKey'] == "show")
                exit("Update key for Changelog.html: ". $this->getEncodeCurrentVersion());                                                                                                          
            echo("<h1>".SITE_UNDER_MAINTENANCE."</h1><hr />");
            echo("<h3>".MESSAGE_TO_ADMIN."</h3>");
            printf(NEW_VERSION_EXPLICATION1."<br /><br />", $this->getCurrentVersion());
            echo(STEPS_TO_REMOVE_MSG);
            exit();
        }
        
        public function compareCurrentVersion()
        {
            if( defined("updateKeyChangelog") == false )
                $this->getMessageUpdateNotDefined();
            if( constant("updateKeyChangelog") != $this->getEncodeCurrentVersion() )
                $this->getMessageUpdateWrong();
        }
	}
}
?>
