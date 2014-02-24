<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldOnlines" ) == false ) {
	new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldOnlines extends ldMssql {
		public function __construct()
		{
			global $ldTpl, $TABLES_CONFIGS, $PANELUSER_MODULE;
			$tempTpl .= "<table border='0' width='100%'>
						  <tr>
						   <td align='center' bgcolor='#E2DEC5'><strong>".ONLINES_CHARACTER."</strong></td>
						   <td align='center' bgcolor='#E2DEC5'><strong>".ONLINES_CONNECT_IN."</strong></td>
						   <td align='center' bgcolor='#E2DEC5'><strong>".ONLINES_RESETS."</strong></td>
						   <td align='center' bgcolor='#E2DEC5'><strong>".ONLINES_ACCOUNT_TYPE."</strong></td>
						   <td align='center' bgcolor='#E2DEC5'><strong>".ONLINES_SERVER."</strong></td>
						  </tr>";
				if(empty($_GET['room']) == false && $_GET['room'] != "all") $queryRoom = "AND MEMB_STAT.ServerName = '".$_GET['room']."'";
				$findAccountsOnlineQ = $this->query("Use ".DATABASE_ACCOUNTS."; SELECT MEMB_STAT.memb___id, MEMB_STAT.ConnectTM, MEMB_STAT.ServerName, AccountCharacter.GameIDC, Character.".COLUMN_RESETS." as Resets FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT JOIN ".DATABASE_CHARACTERS.".dbo.AccountCharacter ON (MEMB_STAT.memb___id = AccountCharacter.Id) JOIN ".DATABASE_CHARACTERS.".dbo.Character ON (AccountCharacter.GameIDC = Character.Name) WHERE MEMB_STAT.ConnectStat = 1 ".$queryRoom);		  
				while($findAccountsOnline = mssql_fetch_object($findAccountsOnlineQ))
				{
					++$i;
					$checkVipQ = $this->query("Use ".DATABASE."; SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $findAccountsOnline->memb___id ."'");
					$checkVip = mssql_fetch_object($checkVipQ);
					
                    $tempTpl .= "<tr>
								  <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->GameIDC."</td>
								  <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->ConnectTM."</td>
								  <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->Resets."</td>
								  <td align='center' bgcolor='#EDEBDC'>".$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][(int)$checkVip->type]."</td>
								  <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->ServerName."</td>
								</tr>";
				}		  
			$tempTpl .= "<tr><td colspan='5'><em><strong>".ONLINES_TOTAL_ONLINE." ".(int)$i." </strong></em></td></tr></table>";
			$ldTpl->set("ONLINES_ROWS", $tempTpl);
		}
	}	
}

?>