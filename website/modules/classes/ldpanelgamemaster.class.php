<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldPanelGameMaster" ) == false ) {
	class ldPanelGameMaster extends ldMssql {
		public function __construct()
		{
			global $ldTpl;
			if($this->checkPermission() == false)
				return $ldTpl->open("templates/".TEMPLATE_DIR."/loginaccessdanied.tpl.php");
			if(isset($_SESSION['LOGIN']) == false)
				return $ldTpl->open("templates/".TEMPLATE_DIR."/loginerror.tpl.php");
			
			switch(strtoupper($_GET['option']))
			{
				case "MANAGER_BAN_ACCOUNT":
					ldPanelAdmin::optionLoadManagerBanAccounts();
					$ldTpl->open("templates/".TEMPLATE_DIR."/panelgamemaster[MANAGER_BAN_ACCOUNT].tpl.php");	
					break;
				case "MANAGER_BAN_CHARACTER":
					ldPanelAdmin::optionLoadManagerBanCharacters();
					$ldTpl->open("templates/".TEMPLATE_DIR."/panelgamemaster[MANAGER_BAN_CHARACTER].tpl.php");	
					break;
				case "COMPLAINTS":
					ldPanelAdmin::optionLoadManagerComplaints();
					$ldTpl->open("templates/".TEMPLATE_DIR."/panelgamemaster[COMPLAINTS].tpl.php");	
					break;
				case "TICKETS_OPERATION":
					ldPanelAdmin::optionLoadManagerTickets(0);
					$ldTpl->open("templates/".TEMPLATE_DIR."/panelgamemaster[TICKETS_OPERATION].tpl.php");	
					break;
				case "TICKETS_COMPLETING":
					ldPanelAdmin::optionLoadManagerTickets(1);
					$ldTpl->open("templates/".TEMPLATE_DIR."/panelgamemaster[TICKETS_COMPLETING].tpl.php");	
					break;
				default:
					ldPanelAdmin::optionLoadAdminCenter();
					$ldTpl->open("templates/".TEMPLATE_DIR."/panelgamemaster.tpl.php");	
					break;
			}				
		}
		private function checkPermission()
		{
			$SQL_Q = $this->query("SELECT previlegy FROM dbo.webPrevilegy WHERE username='". $_SESSION['LOGIN'] ."'");
			$SQL = mssql_fetch_object($SQL_Q);
			if($SQL->previlegy < 1) return false; else return true;	
		}
		
	}	
}
?>