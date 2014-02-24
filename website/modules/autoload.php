<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

/*
	@Function autoload class;
*/
function __autoload($class_name)
{
	switch($class_name)
	{
		default: require_once("modules/classes/". strtolower($class_name) .".class.php"); break;
	}	
}
?>