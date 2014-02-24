<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldBanned" ) == false ) {
	new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldBanned extends ldMssql {
		public function __construct()
		{
            global $ldTpl; 
            switch($_GET['type'])
            {
                case "characters": $this->loadBanned(2); $ldTpl->set("BannedTitle", BANNED_CHARACTERS); break;
                case "accounts": $this->loadBanned(1); $ldTpl->set("BannedTitle", BANNED_ACCOUNTS); break;
                default: $this->loadBanned(2); $ldTpl->set("BannedTitle", BANNED_CHARACTERS); break;
            }
		}
		private function loadBanned($type)
		{                    
            global $ldTpl;
			$findBannedQ = $this->query("SELECT * FROM ".DATABASE.".dbo.webBanneds WHERE type = {$type} ORDER BY name DESC");
			if(mssql_num_rows($findBannedQ) == 0)
                $tempTpl = "<tr><td align='center' bgcolor='#EDEBDC' colspan='4'>".BANNED_NO_USERS."</td></tr>";
            else
            {
                while($findBanned = mssql_fetch_object($findBannedQ))
                {
                    $tempTpl .= "<tr>
                                  <td align='center' bgcolor='#EDEBDC'>".$findBanned->name."</td>
                                  <td align='center' bgcolor='#EDEBDC'>".date("d/m/Y G:i", $findBanned->dateend)."</td>
                                  <td align='center' bgcolor='#EDEBDC'>".$findBanned->bannedBy."</td>
                                  <td align='center' bgcolor='#EDEBDC'>".$findBanned->description."</td>                           
                                </tr>";
                }   
            }
            $ldTpl->set("BANNED_RESULT", $tempTpl);
			unset($tempTpl);
		}
	}	
}

?>