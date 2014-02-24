<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldDownloads" ) == false ) {
	class ldDownloads {
		public function __construct()
		{
			global $ldTpl;
			$ldTpl->set("DOWNLOAD_GAMEFULL_LINK",DOWNLOAD_GAMEFULL_LINK);
			$ldTpl->set("DOWNLOAD_GAMEFULL_MB",DOWNLOAD_GAMEFULL_MB);
			$ldTpl->set("DOWNLOAD_PATCH_LINK",DOWNLOAD_PATCH_LINK);
			$ldTpl->set("DOWNLOAD_PATCH_MB",DOWNLOAD_PATCH_MB);
		}
	}	
}

?>