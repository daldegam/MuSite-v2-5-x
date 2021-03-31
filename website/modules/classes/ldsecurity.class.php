<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldSecurity" ) == false ) {

    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
	class ldSecurity {
		public function __construct()
		{                           
			foreach($_POST as $Vars) $this->Check($Vars);
			foreach($_GET as $Vars) $this->Check($Vars);
		}
		public function inject($value) {
			$data = date('d/m/Y G:i');
			$navegador = $_SERVER['HTTP_USER_AGENT'];
			$solicitada = $_SERVER['REQUEST_URI'];
			$metodo = $_SERVER['REQUEST_METHOD'];
			$ip = $_SERVER['REMOTE_ADDR'];
			$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$log = STRING_LOG_IP.": $ip \r\n";
			$log .= STRING_LOG_IP_REVERSE.": $host \r\n";
			$log .= STRING_LOG_DATE.": $data \r\n";
			$log .= STRING_LOG_BROWSER.": $navegador \r\n";
			$log .= STRING_LOG_PAGE.": $solicitada \r\n";
			$log .= STRING_LOG_METHOD.": $metodo \r\n\r\n";
			$log .= STRING_LOG_VALUE.": $value \r\n\r\n";
			$log .= "--------------------\r\n\r\n";
			$fp=@fopen("logs/injects.txt", "a");
			@fwrite($fp, $log);
			@fclose($fp);
			die("<script>window.alert('".SPECIAL_CHARACTERS_FOUND."'); history.go(-1);</script>");
		}	
		public function Check($string) 
		{
		    if ( substr_count( $string, "'" ) > 0 )
		    {
			$this->inject($string);
		    }
		    if ( substr_count( $string, ";" ) > 0 )
		    {
			$this->inject($string);
		    }
		    if ( substr_count( $string, "\"" ) > 0 )
		    {
			$this->inject($string);
		    }
		    if ( substr_count( $string, "--" ) > 0 )
		    {
		     	$this->inject($string);
		    }
		    if ( substr_count( $string, "<?" ) > 0 )
		    {
			$this->inject($string);
		    }
		    if ( substr_count( $string, "<%" ) > 0 )
		    {
			$this->inject($string);
		    }
		  return $string;
		}
	}
	
}

?>
