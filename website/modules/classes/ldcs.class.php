<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldCS" ) == false ) 
{
	new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldCS {
		public $socket = NULL;
		public $cs_online = FALSE;
		public $rooms_number = 0;
		public $servers;
		public function __construct($host = '127.0.0.1', $port = 44405, $timelimit = 10, $version) 
		{
			set_time_limit(0);
			if($version != 1 && $version != 2) exit(CONNECT_SERVER_INVALID_VERSION);
			$this->socket = @fsockopen($host,$port,$erro,$msg,$timelimit);
			
			if($this->socket <> false) 
			{
				$this->cs_online = true;
				$timeStart = time();
				$time = 0;
				while($temp = fread($this->socket,4096)) 
				{
					$tempTimer = (time() - $timeStart);
					if($tempTimer != $time)
					{
						$time = (time() - $timeStart);
						if($time >= $timelimit) 
						{
							//echo "<!-- Ld_Error: Tempo de vida expirado na conexão com o ConnectServer. -->\n";
							break;
						}
					}
					
					$ContentHex = strtoupper(bin2hex($temp));
					//echo $ContentHex."<br/><br/>";
					if($ContentHex == "C1040001") 
					{	
						fwrite($this->socket, "\xC1\x04\xF4".($version == 1 ? "\x02":"\x06"), 4);
						continue;
					} 
					if(substr($ContentHex, 0, 2) == "C2") 
					{
						$this->rooms_number = hexdec(substr($ContentHex,10,($version == 1 ? 2:4)));
						for($count = 0; $count < $this->rooms_number; $count++) 
						{
							$server_string = substr($ContentHex, ($count*8) + ($version == 1 ? 12:14), 8);
							$this->servers[$count]['id_low']	= substr($server_string, 0, 2);
							$this->servers[$count]['id_high']	= substr($server_string, 2, 2);
							$this->servers[$count]['id'] 		= hexdec($this->servers[$count]['id_high'] . $this->servers[$count]['id_low']);
							$this->servers[$count]['users'] 	= hexdec(substr($server_string, 4, 2));
						}
						break;
					}
					fclose($this->socket);
				}
			}
			else
			{
				//echo "<!-- Ld_Error: Falha na conexão com o ConnectServer. -->\n";
			}
		}
	}	
}
?>
