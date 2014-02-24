<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldTime" ) == false ) {
	class ldTime {
		public $Start_time;
		public $End_time;
		public function __construct() {
			$this->Start();
		}
		public function Start()
		{
			$this->Start_time = explode(" ", microtime());
			$this->Start_time = $this->Start_time[1]+$this->Start_time[0];
		}
		public function End()
		{
			$this->End_time = explode(" ", microtime());
			$this->End_time = $this->End_time[1]+$this->End_time[0];
		}
		public function Result_Time()
		{
			$this->End();
			return (real) substr(($this->End_time - $this->Start_time),0,5);
		}
	}
}
?>