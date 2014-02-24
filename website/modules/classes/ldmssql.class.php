<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldMssql" ) == false ) {

    if(defined("LANGUAGE_MSSQL_LANG_CRONJOB") == true) new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false , "../../");
    else new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    
	class ldMssql {
		var $connection;
		var $database;
		var $cmd;
		var $sql_log = false;
		var $sql_debug = true;
        var $cronjob = false;
		public function __construct() 
		{
			$this->connect();
		}
		
		public function connect() 
		{
		  if(extension_loaded("mssql") == false) dl("php_mssql.dll");
          if(constant("PERSISTENT_CONNECTION") === true) $this->connection = @mssql_pconnect( @HOST , @USER , @PWD );
          else $this->connection = @mssql_connect( @HOST , @USER , @PWD );
		   $this->database = @mssql_select_db( @DATABASE , @$this->connection );
		   if( !$this->connection || !$this->database ) {
		     exit("<br>".ERROR_CONNECT_DB);
		   }
		} 
		
		public function query($cmd) 
		{
		     if($this->sql_log == true) 
             {
			     $Security_Logs = fopen("logs/sql_".date('d-m-Y').".txt", "a");
			     @fwrite($Security_Logs, date('d/m/Y G:i')." | ".$cmd."\r\n");
			     @fclose($Security_Logs);
		     }
             
             if($this->cronjob == true) { 
                $query = @mssql_query($cmd);                                                                    
             }
             elseif($this->sql_debug == true) 
             { 
                $query = mssql_query($cmd);
                if($query == false) echo ERROR_QUERY." ".$cmd; 
             } 
             else 
             {
			    $query = @mssql_query($cmd);
			    if($query == false) echo ERROR_QUERY." ".$cmd; 
		     }
		 return $query;
		} 
		
		public function disconnect() 
		{
		   @mssql_close( @$this->connection );
		} 

	}
	
}

?>