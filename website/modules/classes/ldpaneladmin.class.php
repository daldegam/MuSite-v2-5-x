<?php            
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName && isset($_POST['request']) == false) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldPanelAdmin" ) == false ) {  
	new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldPanelAdmin extends ldMssql {   
        public function __construct($request = false)
        {
			global $ldTpl;
			if($this->checkPermission() == false)
				return $ldTpl->open("templates/".TEMPLATE_DIR."/loginaccessdanied.tpl.php");
			if(isset($_SESSION['LOGIN']) == false)
				return $ldTpl->open("templates/".TEMPLATE_DIR."/loginerror.tpl.php");
			
			switch(strtoupper($_GET['option']))
			{
				case "GERATE_BACKUPS":
					$this->optionLoadGerateBackup();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[GERATE_BACKUPS].tpl.php");	
					break;
				case "EDIT_ACCOUNT":
					$this->optionLoadEditAccount();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[EDIT_ACCOUNT].tpl.php");	
					break;
				case "DELETE_ACCOUNT":
					$this->optionLoadDeleteAccount();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[DELETE_ACCOUNT].tpl.php");	
					break;
				case "MANAGER_BAN_ACCOUNT":
					$this->optionLoadManagerBanAccounts();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[MANAGER_BAN_ACCOUNT].tpl.php");	
					break;
				case "EDIT_CHARACTER":
					$this->optionLoadEditCharacter();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[EDIT_CHARACTER].tpl.php");	
					break;
				case "DELETE_CHARACTER":
					$this->optionLoadDeleteCharacter();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[DELETE_CHARACTER].tpl.php");	
					break;
				case "MANAGER_BAN_CHARACTER":
					$this->optionLoadManagerBanCharacters();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[MANAGER_BAN_CHARACTER].tpl.php");	
					break;
				case "SINCRONIZE":
					$this->optionLoadSincronize($_GET['type']);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[SINCRONIZE].tpl.php");	
					break;
				case "ADD_VIP":
					$this->optionLoadManageVip(1);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[ADD_VIP].tpl.php");	
					break;
				case "DELETE_VIP":
					$this->optionLoadManageVip(2);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[DELETE_VIP].tpl.php");	
					break;
				case "TRANSFORM_VIP":
					$this->optionLoadManageVip(3);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[TRANSFORM_VIP].tpl.php");	
					break;
				case "ADD_NOTICE":
					$this->optionLoadAddNotice();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[ADD_NOTICE].tpl.php");	
					break;
				case "REMOVE_NOTICE":
					$this->optionLoadRemoveNotice();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[REMOVE_NOTICE].tpl.php");	
					break;
				case "MODIFY_NOTICE":
					$this->optionLoadModifyNotice();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[MODIFY_NOTICE].tpl.php");	
					break;
				case "ADD_CASH":
					$this->optionLoadAddCash(1);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[ADD_CASH].tpl.php");	
					break;
				case "REMOVE_CASH":
					$this->optionLoadAddCash(2);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[REMOVE_CASH].tpl.php");	
					break;
				case "DEPOSITS_IN_OPERATION":
					$this->optionLoadManagerDeposits(0);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[DEPOSITS_IN_OPERATION].tpl.php");	
					break;
				case "DEPOSITS_COMPLETING":
					$this->optionLoadManagerDeposits(1);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[DEPOSITS_COMPLETING].tpl.php");	
					break;
				case "DEPOSITS_FALSE":
					$this->optionLoadManagerDeposits(2);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[DEPOSITS_FALSE].tpl.php");	
					break;
				case "COMPLAINTS":
					$this->optionLoadManagerComplaints();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[COMPLAINTS].tpl.php");	
					break;
				case "TICKETS_OPERATION":
					$this->optionLoadManagerTickets(0);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[TICKETS_OPERATION].tpl.php");	
					break;
				case "TICKETS_COMPLETING":
					$this->optionLoadManagerTickets(1);
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[TICKETS_COMPLETING].tpl.php");	
					break;
                case "VERIFY_UPDATE":
                    $this->optionLoadVerifyUpdate();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[VERIFY_UPDATE].tpl.php");    
                    break;
                case "ADD_POLL":
                    $this->optionLoadManagerPoll(0);
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[ADD_POLL].tpl.php");    
                    break;
                case "REMOVE_POLL":
                    $this->optionLoadManagerPoll(1);
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[REMOVE_POLL].tpl.php");    
                    break;
                case "MODIFY_POLL":
                    $this->optionLoadManagerPoll(2);
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[MODIFY_POLL].tpl.php");    
                    break;
                case "GAME_DISCONNECT":
                    $this->optionLoadGameDisconnect();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[GAME_DISCONNECT].tpl.php");    
                    break;
                case "GAME_MSG_SPECIFIC":
                    $this->optionLoadGameMsgSpecific();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[GAME_MSG_SPECIFIC].tpl.php");    
                    break;
                case "GAME_MSG_ALL":
                    $this->optionLoadGameMsgAll();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[GAME_MSG_ALL].tpl.php");    
                    break;
                case "GAME_CHAT_SERVER":
                    $this->optionLoadGameChatServer();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[GAME_CHAT_SERVER].tpl.php");    
                    break;
                case "MANAGER_ACCOUNTS_TRANSFER_CASH":
                    $this->optionLoadManagerAccountsTransferCash();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[MANAGER_ACCOUNTS_TRANSFER_CASH].tpl.php");    
                    break;  
                case "GOLDEN_ARCHER":
                    $this->optionLoadGoldenArcher();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[GOLDEN_ARCHER].tpl.php");    
                    break; 
                case "ADD_AUCTIONS":
                    $this->optionLoadAuctionsAdd();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[ADD_AUCTIONS].tpl.php");    
                    break; 
                case "EDIT_AUCTIONS":
                    $this->optionLoadAuctionsEdit();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[EDIT_AUCTIONS].tpl.php");    
                    break;  
                case "DELETE_AUCTIONS":
                    $this->optionLoadAuctionsRemove();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[DELETE_AUCTIONS].tpl.php");    
                    break;
                case "CLOSE_AUCTIONS":
                    $this->optionLoadAuctionsClose();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin[CLOSE_AUCTIONS].tpl.php");    
                    break;
				default:
					$this->optionLoadAdminCenter();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneladmin.tpl.php");	
					break;
			}				
		}
		public function checkPermission()
		{
			$SQL_Q = $this->query("SELECT previlegy FROM dbo.webPrevilegy WHERE username='". $_SESSION['LOGIN'] ."'");
			$SQL = mssql_fetch_object($SQL_Q);
			if($SQL->previlegy < 2) return false; else return true;	
		}
		public function optionLoadAdminCenter()
		{
			global $ldTpl;
            
			$ldTpl->set("OS_DATAILS", $_ENV["OS"]);
			if(ldSerial::checkTrialVersion()) 
                $ldTpl->set("SOFTWARE_VERSION_DATAILS", $_SERVER["SERVER_SOFTWARE"]."<script>alert(\"/**\\n* @ Versão Trial\\n* @ Para adquirir a versão completa acesse:\\n*   www.daldegam.net ou www.daldegamserver.com\\n*   ldaldegam@hotmail.com\\n*   Telefone: (31) 8693-5000\\n* @ Site desenvolvido por Leandro Daldegam.\\n*/\");</script>");
            else
                $ldTpl->set("SOFTWARE_VERSION_DATAILS", $_SERVER["SERVER_SOFTWARE"]);
			$ldTpl->set("ADMIN_WEB_SERVER_EMAIL", $_SERVER["SERVER_ADMIN"]);			
		}
        public function writeLog($type, $account, $character, $extraText)
        {
            global $PANELADMIN_MODULE;
            if($PANELADMIN_MODULE['LOG']['Active'] == false) return;
            
            switch($type)
            {
                case 1: 
                    $args = array("GERATE_BACKUP", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_GERATE_BACKUP." [{$extraText}]\n");
                    break;
                case 2: 
                    $args = array("EDIT_ACCOUNT", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_EDIT_ACCOUNT." {$account}. [{$extraText}]\n");
                    break;
                case 3: 
                    $args = array("DELETE_ACCOUNT", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_DELETE_ACCOUNT." {$account}. [{$extraText}]\n");
                    break;
                case 4: 
                    $args = array("BAN_ACCOUNT", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_BAN_ACCOUNT." {$account}. [{$extraText}]\n");
                    break;
                case 5: 
                    $args = array("EDIT_CHARACTER", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_EDIT_CHARACTER." {$character}. [{$extraText}]\n");
                    break;
                case 6: 
                    $args = array("DELETE_CHARACTER", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_DELETE_CHARACTER." {$character}. [{$extraText}]\n");
                    break;
                case 7: 
                    $args = array("BAN_CHARACTER", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_BAN_CHARACTER." {$character}. [{$extraText}]\n");
                    break;
                case 8: 
                    $args = array("SINCRONIZE", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_SINCRONIZE." [{$extraText}]\n");
                    break;
                case 9: 
                    $args = array("MANAGER_VIPS", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_MANAGER_VIPS." [{$extraText}]\n");
                    break;
                case 10: 
                    $args = array("ADD_NOTICE", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_ADD_NOTICE." [{$extraText}]\n");
                    break;
                case 11: 
                    $args = array("REMOVE_NOTICE", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_REMOVE_NOTICE." [{$extraText}]\n");
                    break;
                case 12: 
                    $args = array("ALTER_NOTICE", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_ALTER_NOTICE." [{$extraText}]\n");
                    break;
                case 13: 
                    $args = array("MANAGER_CASH", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_MANAGER_CASH." [{$extraText}]\n");
                    break;
                case 14: 
                    $args = array("MANAGER_DEPOSITS", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_MANAGER_DEPOSITS." [{$extraText}]\n");
                    break;
                case 15: 
                    $args = array("MANAGER_COMPLAINTS", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_MANAGER_COMPLAINTS." [{$extraText}]\n");
                    break;
                case 16: 
                    $args = array("MANAGER_TICKETS", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_MANAGER_TICKETS." [{$extraText}]\n");
                    break;
                case 17: 
                    $args = array("MANAGER_POLL", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_MANAGER_POLL." [{$extraText}]\n");
                    break;
                case 18: 
                    $args = array("GAME_DISCONNECT", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_GAME_DISCONNECT." [{$extraText}]\n");
                    break;
                case 19: 
                    $args = array("GAME_MSG_ALL", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_GAME_MSG_ALL." [{$extraText}]\n");
                    break;
                case 20: 
                    $args = array("GAME_MSG_SPECIFIC", "[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_GAME_MSG_SPECIFIC." [{$extraText}]\n");
                    break;
                default: $args = array("error", sprintf("[".date("d/m/Y \a\s G:i:s")."][{$_SESSION['LOGIN']}] ".LDPA_LOG_TXT_NOT_FOUND." [{$extraText}]\n", $type));
            }
            $handle = fopen($PANELADMIN_MODULE['LOG']['DirLog']."/[".date("d-m-Y")."][".$args[0]."].log", "a");
            fwrite($handle, $args[1]);
            fclose($handle);  
        }
		private function optionLoadGerateBackup()
		{
			global $ldTpl;
			$findDatabasesQ = $this->query("exec sp_databases");
			while($findDatabases = mssql_fetch_row($findDatabasesQ))
			{
				$tempSelect .= "<option value=\"". $findDatabases[0] ."\">". $findDatabases[0] ."</option>";
			}
			$ldTpl->set("DATABASE_LIST", $tempSelect);	
			$ldTpl->set("FILE_NAME_SUGESTION", "%s ".date("m-d-Y g-i a").".bak");	
			
			if($_GET['Write'] == true)
			{
				if(ldSerial::checkTrialVersion())
                    return $ldTpl->set("RESULTTPL", "<div class='qdestaques'>".LDPA_DEMO_OPTION_NON_AVAILABLE."</div>");
                    
                $this->address = sprintf($_POST['dirname'].$_POST['filename'], $_POST['database']);
				if($this->query("BACKUP DATABASE [".$_POST['database']."] TO  DISK = N'".$this->address."' WITH NOFORMAT, NOINIT,  NAME = N'".$_POST['database']."-Full Database Backup', SKIP, NOREWIND, NOUNLOAD,  STATS = 10"))
					$tempResult .= "<div class=\"qdestaques2\">".LDPA_GENERATE_BACKUP_SUCCESS."<br /><em>".$this->address."</em></div>";
				else
					$tempResult .= "<div class=\"qdestaques\">".LDPA_GENERATE_BACKUP_ERROR."<br /><em>".$this->address."</em></div>";
                ldPanelAdmin::writeLog(1, '', '', $this->address);
			}
			$ldTpl->set("RESULTTPL", $tempResult);	
		}
		private function optionLoadEditAccount()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
			{
				if(empty($_POST['account']) == true) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_FILL_LOGIN."</div>");
				$findAccountQ = $this->query("SELECT * FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_POST['account'] ."'");
				if(mssql_num_rows($findAccountQ) == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_INVALID_LOGIN."</div>");
				else
				{
					$findAccount = mssql_fetch_object($findAccountQ);
					$tempTpl .= "<div class='quadros'>
									<form action=\"?page=paneladmin&amp;option=EDIT_ACCOUNT&amp;SubWrite=true&amp;account=". $_POST['account'] ."\" method=\"post\">
									<em>".LDPA_TEXT_LOGIN.":</em><br /><strong>". $_POST['account'] ."</strong><br />
									<em>".LDPA_TEXT_PASSWORD.":</em><br /><input type='text' name='memb__pwd' value='". (USE_MD5 == false ? $findAccount->memb__pwd : "") ."' /> (".LDPA_EDIT_ACCOUNT_TEXT_PASSWORD_FOR_ALTER.")<br />
									<em>".LDPA_TEXT_EMAIL.":</em><br /><input type='text' name='mail_addr' value='". $findAccount->mail_addr ."' /><br />
									<em>".LDPA_TEXT_NAME.":</em><br /><input type='text' name='memb_name' value='". $findAccount->memb_name ."' /><br />
									<em>".LDPA_TEXT_PHONE.":</em><br /><input type='text' name='tel__numb' value='". $findAccount->tel__numb ."' /><br />
									<em>".LDPA_TEXT_SECRET_QUESTION.":</em><br /><input type='text' name='fpas_ques' value='". $findAccount->fpas_ques ."' /><br />
									<em>".LDPA_TEXT_SECRET_ANSWER.":</em><br /><input type='text' name='fpas_answ' value='". $findAccount->fpas_answ ."' /><br />
									<em>".LDPA_EDIT_ACCOUNT_TEXT_CREATE_IN.":</em><br /><input type='text' name='data' value='". $findAccount->data ."' /><br />
									<em>".LDPA_EDIT_ACCOUNT_TEXT_BIRTHDAY.":</em><br /><input type='text' name='aniversario' value='". $findAccount->aniversario ."' /><br />
									<input type='submit' class='button' value='".LDPA_TEXT_ALTER_DATA_SUBMIT."' />
									</form>
								 </div>";
				
				}
			}
			elseif($_GET['SubWrite'] == true)		
			{
				$this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO SET mail_addr='".$_POST['mail_addr']."', memb_name='".$_POST['memb_name']."', tel__numb='".$_POST['tel__numb']."', fpas_ques='".$_POST['fpas_ques']."', fpas_answ='".$_POST['fpas_answ']."', data='".$_POST['data']."', aniversario='".$_POST['aniversario']."' WHERE memb___id='".$_GET['account']."'");
				if(empty($_POST['memb__pwd']) == false) 
				{
					if(USE_MD5 == true) $this->query('exec dbo.webPwdHashWrite "'.$_GET['account'].'", "'.$_POST['memb__pwd'].'"');
					else $this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO SET memb__pwd='".$_POST['memb__pwd']."' WHERE memb___id='".$_GET['account']."'");
				}
				$tempTpl .= "<div class='qdestaques2'>".LDPA_EDIT_ACCOUNT_TEXT_SECCESS."</div>";
                ldPanelAdmin::writeLog(2, $_GET['account'], '', print_r($_POST, true) );
			}
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		private function optionLoadDeleteAccount()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
			{
				if(ldSerial::checkTrialVersion())
                    return $ldTpl->set("RESULTTPL", "<div class='qdestaques'>".LDPA_DEMO_OPTION_NON_AVAILABLE."</div>");
                
                if(empty($_POST['account']) == true) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_FILL_LOGIN."</div>");
				$findAccountQ = $this->query("SELECT 1 FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_POST['account'] ."'");
				if(mssql_num_rows($findAccountQ) == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_INVALID_LOGIN."</div>");
				else
				{
					$this->query("DELETE FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_POST['account'] ."'");
					if(VI_CURR_INFO == true) $this->query("DELETE FROM ".DATABASE_ACCOUNTS.".dbo.VI_CURR_INFO WHERE memb___id='". $_POST['account'] ."'");
					$this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.AccountCharacter WHERE Id='". $_POST['account'] ."'");
                    $this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.warehouse WHERE AccountID='". $_POST['account'] ."'");
                    @$this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.ExtWarehouse WHERE AccountID='". $_POST['account'] ."'");
					
                    $this->query("DELETE FROM ".DATABASE.".dbo.webCash WHERE username='". $_POST['account'] ."'");
                    $this->query("DELETE FROM ".DATABASE.".dbo.webComplaints WHERE username='". $_POST['account'] ."'");
                    $this->query("DELETE FROM ".DATABASE.".dbo.webLogBuyCash WHERE username='". $_POST['account'] ."'");
                    $this->query("DELETE FROM ".DATABASE.".dbo.webLogBuyVips WHERE username='". $_POST['account'] ."'");
                    $this->query("DELETE FROM ".DATABASE.".dbo.webSendEmailLimit WHERE username='". $_POST['account'] ."'");
                    $this->query("DELETE FROM ".DATABASE.".dbo.webTickets WHERE username='". $_POST['account'] ."'");
                    $this->query("DELETE FROM ".DATABASE.".dbo.webVips WHERE username='". $_POST['account'] ."'");
                    $this->query("DELETE FROM ".DATABASE.".dbo.webBanneds WHERE name='". $_POST['account'] ."' and type = 1");
					
                    $findCharsQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_POST['account'] ."'");
					while($findChars = mssql_fetch_object($findCharsQ))
					{
						$findGuildMasterQ = $this->query("SELECT G_Name FROM ".DATABASE_CHARACTERS.".dbo.Guild WHERE G_Master = '".$findChars->Name."'");	
						if(mssql_num_rows($findGuildMasterQ) > 0)
						{
							$findGuildMaster = mssql_fetch_object($findGuildMasterQ);
							$this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.GuildMember WHERE G_Name='". $findGuildMaster->G_Name ."'");
							$this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.Guild WHERE G_Name='". $findGuildMaster->G_Name ."'");
						}
						else 
							$this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.GuildMember WHERE Name='". $findChars->Name ."'");
						$this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='". $findChars->Name ."'");
                        $this->query("DELETE FROM ".DATABASE.".dbo.webBanneds WHERE name='". $findChars->Name ."' and type = 2");
					}
					$tempTpl .= "<div class='qdestaques2'>".LDPA_DELETE_ACCOUNT_TEXT_SECCESS."</div>";	
                    ldPanelAdmin::writeLog(3, $_POST['account'], '', '');			
				}
			}
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		public function optionLoadManagerBanAccounts()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
			{
                if(empty($_POST['account']) == true && empty($_POST['character']) == true) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_MBAN_ACCOUNT_TEXT_FILL_ACCOUNT_OR_CHARACTER."</div>");
                if(empty($_POST['account']) == false && empty($_POST['character']) == false) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_MBAN_ACCOUNT_TEXT_FILL_ONLY_ACCOUNT_OR_CHARACTER."</div>");
				if(is_numeric($_POST['days']) == false) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_MBAN_ACCOUNT_TEXT_INVALID_DAYS."</div>");
				$findAccountQ = $this->query("SELECT 1 FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_POST['account'] ."'");
				if(mssql_num_rows($findAccountQ) == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_INVALID_LOGIN."</div>");
				else
				{
                    if(empty($_POST['account']) == true && empty($_POST['character']) == false)
                    {
                        $findAccount = $this->query("SELECT TOP 1 [AccountId] FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE [Name] = '".$_POST['character']."'");
                        if(mssql_num_rows($findAccount) == 0)
                        {
                            $tempTpl .= "<div class='qdestaques'>".LDPA_MBAN_ACCOUNT_TEXT_ACCOUNT_NOT_FOUND_BY_CHARACTER."</div>";
                            $ldTpl->set("RESULTTPL", $tempTpl);
                            return false;
                        }  
                        else
                        {
                            $_POST['account'] = mssql_fetch_object($findAccount)->AccountId;
                        }  
                            
                    }
					switch($_POST['action'])
					{
						case 1:
							$findNameQ = $this->query("SELECT memb_name FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_SESSION['LOGIN'] ."'");
                            $findName = mssql_fetch_object($findNameQ);
                            $this->query("UPDATE ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO SET bloc_code=1 WHERE memb___id='". $_POST['account'] ."'");
							$this->query("INSERT INTO dbo.webBanneds (name,datebegin,dateend,type,bannedBy,description) VALUES ('". $_POST['account'] ."','". time() ."','". strtotime("+ ". $_POST['days'] ." days") ."',1,'{$findName->memb_name}','{$_POST['description']}')");
							$tempTpl .= sprintf("<div class='qdestaques2'>".LDPA_MBAN_ACCOUNT_TEXT_SUCCESS."</div>", $_POST['days']);
                            ldPanelAdmin::writeLog(4, $_POST['account'], '', LDPA_MBAN_ACCOUNT_LOG_SUCCESS.' {'. print_r($_POST, true) .'}');    		
						break;
						case 2:
							$this->query("UPDATE ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO SET bloc_code=0 WHERE memb___id='". $_POST['account'] ."'");
							$this->query("DELETE FROM dbo.webBanneds WHERE name = '".$_POST['account'] ."' AND type = 1");
							$tempTpl .= "<div class='qdestaques2'>".LDPA_MBAN_ACCOUNT_TEXT_SUCCESS_UNBAN.".</div>";	
                            ldPanelAdmin::writeLog(4, $_POST['account'], '', LDPA_MBAN_ACCOUNT_LOG_SUCCESS_UNBAN.' {'. print_r($_POST, true) .'}');	
						break;					
					}
							
				}
			}
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		private function optionLoadEditCharacter()
		{
		 	global $ldTpl, $PANELUSER_MODULE, $CLASS_CHARACTERS;
			if($_GET['Write'] == true && empty($_POST['character']) == false)
			{
				$findCharacterQ = $this->query("SELECT * FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='". $_POST['character'] ."'");
				if(mssql_num_rows($findCharacterQ) == 0) return $ldTpl->set("RESULTTPL", "<div class='qdestaques'>".LDPA_EDIT_CHARACTER_CHAR_NOT_FOUND."</div>");
				else
				{
					$findCharacter = mssql_fetch_object($findCharacterQ);
					$this->ColumnResets = COLUMN_RESETS;
					switch(VESION_MUSERVER) {
					  case 0: //Season 1 ou Abaixo - Sem DL
					   $listClass ="<option value='".$CLASS_CHARACTERS['CLASSCODES']['DW'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DW'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['SM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['SM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DK'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['BK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BK'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['FE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['FE'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['ME'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['ME'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['MG'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['MG'][1]."</option>";
					  break;
					  case 1: //Season 1 ou Abaixo
					   $listClass ="<option value='".$CLASS_CHARACTERS['CLASSCODES']['DW'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DW'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['SM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['SM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DK'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['BK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BK'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['FE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['FE'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['ME'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['ME'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['MG'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['MG'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DL'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DL'][1]."</option>";
					  break;
					  case 2: //Season 2
					   $listClass ="<option value='".$CLASS_CHARACTERS['CLASSCODES']['DW'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DW'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['SM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['SM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DK'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['BK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BK'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['FE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['FE'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['ME'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['ME'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['MG'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['MG'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DL'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DL'][1]."</option>";
					  break;
					  case 3: //Season 3 Episodio 1
					   $listClass ="<option value='".$CLASS_CHARACTERS['CLASSCODES']['DW'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DW'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['SM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['SM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['GM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['GM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DK'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['BK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BK'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['BM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['FE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['FE'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['ME'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['ME'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['HE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['HE'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['MG'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['MG'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DMM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DMM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DL'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DL'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['LE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['LE'][1]."</option>";
					  break;
                      case 4: //Season 3 Episodio 2
                       $listClass ="<option value='".$CLASS_CHARACTERS['CLASSCODES']['DW'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DW'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['SM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['SM'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['GM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['GM'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['DK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DK'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['BK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BK'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['BM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BM'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['FE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['FE'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['ME'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['ME'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['HE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['HE'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['MG'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['MG'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['DMM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DMM'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['DL'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DL'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['LE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['LE'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['SU'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['SU'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['BS'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BS'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['DMS'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DMS'][1]."</option>";
                      break;
					  case 5: case 6: //Season 6
					   $listClass ="<option value='".$CLASS_CHARACTERS['CLASSCODES']['DW'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DW'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['SM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['SM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['GM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['GM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DK'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['BK'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BK'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['BM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['FE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['FE'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['ME'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['ME'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['HE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['HE'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['MG'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['MG'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DMM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DMM'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['DL'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DL'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['LE'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['LE'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['SU'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['SU'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['BS'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['BS'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['DMS'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['DMS'][1]."</option>
                                    <option value='".$CLASS_CHARACTERS['CLASSCODES']['RF'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['RF'][1]."</option>
									<option value='".$CLASS_CHARACTERS['CLASSCODES']['FM'][0]."'>".$CLASS_CHARACTERS['CLASSCODES']['FM'][1]."</option>";
					  break;
					}
					$tempTpl .= "<div class='quadros'>
					  				<form action='?page=paneladmin&amp;option=EDIT_CHARACTER&amp;Write=true&amp;character=". $_POST['character'] ."' method='post'>
									<em>".LDPA_TEXT_LOGIN.":</em><br /><strong>". $findCharacter->AccountID ."</strong> <br />
									<em>".LDPA_TEXT_CHARACTER.":</em><br /><strong>". $_POST['character'] ."</strong> <br />
									<em>".LDPA_TEXT_CLASS.":</em><br /><select name='Class'>".$listClass."</select> - <strong>Atual: ". ldPanelUser::classNameDefine($findCharacter->Class) ."</strong><br />
									<em>".LDPA_TEXT_LEVEL.":</em><br /><input name='cLevel' type='text' value='". $findCharacter->cLevel ."' /> <br />
								 	<em>".LDPA_TEXT_LEVEL_UP_POINTS.":</em><br /><input name='LevelUpPoint' type='text' value='". $findCharacter->LevelUpPoint ."' /> <br />
								 	<em>".LDPA_TEXT_EXPERIENCE.":</em><br /><input name='Experience' type='text' value='". $findCharacter->Experience ."' /> <br />
								 	<em>".LDPA_TEXT_STRENGTH.":</em><br /><input name='Strength' type='text' value='". $findCharacter->Strength ."' /> <br />
								 	<em>".LDPA_TEXT_DEXTERITY.":</em><br /><input name='Dexterity' type='text' value='". $findCharacter->Dexterity ."' /> <br />
								 	<em>".LDPA_TEXT_VITALITY.":</em><br /><input name='Vitality' type='text' value='". $findCharacter->Vitality ."' /> <br />
								 	<em>".LDPA_TEXT_ENERGY.":</em><br /><input name='Energy' type='text' value='". $findCharacter->Energy ."' /> <br />
								 	<em>".LDPA_TEXT_LEADERSHIP.":</em><br /><input name='Leadership' type='text' value='". $findCharacter->Leadership ."' /> <br />
								 	<em>".LDPA_TEXT_MONEY.":</em><br /><input name='Money' type='text' value='". $findCharacter->Money ."' /> <br />
								 	<em>".LDPA_TEXT_MAP_NUMBER.":</em><br /><select name='MapNumber'>"; foreach($PANELUSER_MODULE['MOVE_CHARACTER']['MAPS'] as $tempArray) $tempTpl .= "<option value='".$tempArray[0]."'>".$tempArray[1]."</option>"; $tempTpl .= "</select> <br />
								 	<em>".LDPA_TEXT_MAP_POS_X.":</em><br /><input name='MapPosX' type='text' value='". $findCharacter->MapPosX ."' /> <br />
								 	<em>".LDPA_TEXT_MAP_POS_Y.":</em><br /><input name='MapPosY' type='text' value='". $findCharacter->MapPosY ."' /> <br />
								 	<em>".LDPA_TEXT_PKCOUNT.":</em><br /><input name='PkCount' type='text' value='". $findCharacter->PkCount ."' /> <br />
								 	<em>".LDPA_TEXT_PKLEVEL.":</em><br /><input name='PkLevel' type='text' value='". $findCharacter->PkLevel ."' /> <br />
								 	<em>".LDPA_TEXT_PKTIME.":</em><br /><input name='PkTime' type='text' value='". $findCharacter->PkTime ."' /> <br />
								 	<em>".LDPA_TEXT_CTLCODE.":</em><br /><input name='CtlCode' type='text' value='". $findCharacter->CtlCode ."' /> ".LDPA_EDIT_CHARACTER_TEXT_CTLCODE_LEGEND."<br />
								 	<em>".LDPA_TEXT_RESETS.":</em><br /><input name='Resets' type='text' value='"; eval("\$tempTpl .= \$findCharacter->$this->ColumnResets; "); $tempTpl .="' /> <br />
									<input type='submit' value='".LDPA_TEXT_SAVE_SUBMIT."' class='button' />
									</form>
								 </div>";
				}
			}
			elseif($_GET['Write'] == true && empty($_GET['character']) == false)
			{
				if(ldSerial::checkTrialVersion())
                    return $ldTpl->set("RESULTTPL", "<div class='qdestaques'>".LDPA_DEMO_OPTION_NON_AVAILABLE."</div>");
                
                $this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET Class = ". $_POST['Class'] .", cLevel = ". $_POST['cLevel'] .", LevelUpPoint = ". $_POST['LevelUpPoint'] .", Experience = ". $_POST['Experience'] .", Strength = ". $_POST['Strength'] .", Dexterity = ". $_POST['Dexterity'] .", Vitality = ". $_POST['Vitality'] .", Energy = ". $_POST['Energy'] .", Leadership = ". $_POST['Leadership'] .", Money = ". $_POST['Money'] .", MapNumber = ". $_POST['MapNumber'] .", MapPosX = ". $_POST['MapPosX'] .", MapPosY = ". $_POST['MapPosY'] .", PkCount = ". $_POST['PkCount'] .", PkLevel = ". $_POST['PkLevel'] .", PkTime = ". $_POST['PkTime'] .", CtlCode = ". $_POST['CtlCode'] .", ".COLUMN_RESETS." = ". $_POST['Resets'] ." WHERE Name='".$_GET['character']."'");
				$tempTpl .= "<div class='qdestaques2'>".LDPA_EDIT_CHARACTER_TEXT_SUCCESS."</div>";
                ldPanelAdmin::writeLog(5, '', $_GET['character'], print_r($_POST, true));
			}			
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		private function optionLoadDeleteCharacter()
		{
		 	global $ldTpl;
			if($_GET['Write'] == true && empty($_POST['character']) == false)
			{
				if(ldSerial::checkTrialVersion())
                    return $ldTpl->set("RESULTTPL", "<div class='qdestaques'>".LDPA_DEMO_OPTION_NON_AVAILABLE."</div>");
                
                $findCharacterQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='". $_POST['character'] ."'");
				if(mssql_num_rows($findCharacterQ) == 0) return $ldTpl->set("RESULTTPL", "<div class='qdestaques'>".LDPA_DELETE_CHARACTER_CHAR_NOT_FOUND."</div>");
				else
				{
					$findChars = mssql_fetch_object($findCharacterQ);
					
					$findGuildMasterQ = $this->query("SELECT G_Name FROM ".DATABASE_CHARACTERS.".dbo.Guild WHERE G_Master = '".$findChars->Name."'");	
					if(mssql_num_rows($findGuildMasterQ) > 0)
					{
						$findGuildMaster = mssql_fetch_object($findGuildMasterQ);
						$this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.GuildMember WHERE G_Name='". $findGuildMaster->G_Name ."'");
						$this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.Guild WHERE G_Name='". $findGuildMaster->G_Name ."'");
					}
					else 
						$this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.GuildMember WHERE Name='". $findChars->Name ."'");
					$this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='". $findChars->Name ."'");
					$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.AccountCharacter SET GameID1 = NULL WHERE GameID1='". $findChars->Name ."'");
					$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.AccountCharacter SET GameID2 = NULL WHERE GameID2='". $findChars->Name ."'");
					$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.AccountCharacter SET GameID3 = NULL WHERE GameID3='". $findChars->Name ."'");
					$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.AccountCharacter SET GameID4 = NULL WHERE GameID4='". $findChars->Name ."'");
					$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.AccountCharacter SET GameID5 = NULL WHERE GameID5='". $findChars->Name ."'");
					$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.AccountCharacter SET GameIDC = NULL WHERE GameIDC='". $findChars->Name ."'");
				
					$tempTpl .= "<div class='qdestaques2'>".LDPA_DELETE_CHARACTER_TEXT_SUCCESS."</div>";
                    ldPanelAdmin::writeLog(6, '', $_POST['character'], '');
				}
			}
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		public function optionLoadManagerBanCharacters()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
			{
				if(empty($_POST['character']) == true) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_FILL_CHARACTER."</div>");
				if(is_numeric($_POST['days']) == false) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_MBAN_CHARACTERS_TEXT_INVALID_DAYS."</div>");
				$findCharacterQ = $this->query("SELECT 1 FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='". $_POST['character'] ."'");
				if(mssql_num_rows($findCharacterQ) == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_INVALID_CHARACTER."</div>");
				else
				{
					switch($_POST['action'])
					{
						case 1:
							$findNameQ = $this->query("SELECT memb_name FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_SESSION['LOGIN'] ."'");
                            $findName = mssql_fetch_object($findNameQ);
                            $this->query("UPDATE ". DATABASE_CHARACTERS .".dbo.Character SET CtlCode=1 WHERE Name='". $_POST['character'] ."'");                                                                                   
                            $this->query("INSERT INTO dbo.webBanneds (name,datebegin,dateend,type,bannedBy,description) VALUES ('". $_POST['character'] ."','". time() ."','". strtotime("+ ". $_POST['days'] ." days") ."',2,'{$findName->memb_name}','{$_POST['description']}')");
							$tempTpl .= sprintf("<div class='qdestaques2'>".LDPA_MBAN_CHARACTERS_TEXT_SUCCESS."</div>", $_POST['days']);
                            ldPanelAdmin::writeLog(7, '', $_POST['character'], LDPA_MBAN_CHARACTERS_LOG_SUCCESS.' {'. print_r($_POST, true) .'}');		
						break;
						case 2:
							$this->query("UPDATE ". DATABASE_CHARACTERS .".dbo.Character SET CtlCode=0 WHERE Name='". $_POST['character'] ."'");
							$this->query("DELETE FROM dbo.webBanneds WHERE name = '".$_POST['character'] ."' AND type = 2");
							$tempTpl .= "<div class='qdestaques2'>".LDPA_MBAN_CHARACTERS_TEXT_SUCCESS_UNBAN."</div>";
                            ldPanelAdmin::writeLog(7, '', $_POST['character'], LDPA_MBAN_CHARACTERS_LOG_SUCCESS_UNBAN.' {'. print_r($_POST, true) .'}');		
						break;					
					}
							
				}
			}
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		private function optionLoadSincronize($type)
		{
			global $ldTpl, $TABLES_CONFIGS;
            set_time_limit(0);
			switch($type)
			{
				case 1:
					$tempResult .= "<div class='qdestaques2'>";
					$findVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']." as username, ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']." as dateend FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnType']." > 0");
					while($findVip = mssql_fetch_object($findVipQ))
					{
						if(time() > $findVip->dateend) 
						{
							$tempResult .= sprintf(LDPA_SINCRONIZE_TEXT_VIP_LOGIN."<br />", $findVip->username);
							$this->query("UPDATE ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." SET ".$TABLES_CONFIGS['WEBVIPS']['columnType']."=0 WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $findVip->username ."'");		
						} 
					}
					$tempResult .= "<br /><strong>".LDPA_SINCRONIZE_TEXT_SUCCESS."</strong></div>";
                    ldPanelAdmin::writeLog(8, '', '', LDPA_SINCRONIZE_LOG_VIPS);
				break;
				case 2:
					$tempResult .= "<div class='qdestaques2'>";
					$findBanQ = $this->query("SELECT name,type,dateend FROM dbo.webBanneds");
					while($findBan = mssql_fetch_object($findBanQ))
					{
						if(time() > $findBan->dateend) 
						{
							switch($findBan->type)
							{
								case 1:
									$tempResult .= sprintf(LDPA_SINCRONIZE_TEXT_BAN_LOGIN." <br />", $findBan->name);
									$this->query("UPDATE ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO SET bloc_code=0 WHERE memb___id='". $findBan->name ."'");
									$this->query("DELETE FROM dbo.webBanneds WHERE name = '". $findBan->name ."' AND type=1");								
								break;
								case 2:
									$tempResult .= sprintf(LDPA_SINCRONIZE_TEXT_BAN_CHARACTER." <br />", $findBan->name);
									$this->query("UPDATE ". DATABASE_CHARACTERS .".dbo.Character SET CtlCode=0 WHERE Name='". $findBan->name ."'");
									$this->query("DELETE FROM dbo.webBanneds WHERE name = '". $findBan->name ."' AND type=2");								
								break;
							}
						} 
					}
					$tempResult .= "<br /><strong>".LDPA_SINCRONIZE_TEXT_SUCCESS."</strong></div>";
                    ldPanelAdmin::writeLog(8, '', '', LDPA_SINCRONIZE_LOG_BAN);
				break;
			}
			$ldTpl->set("RESULT", $tempResult);
		}
		private function optionLoadManageVip($type)
		{
			global $ldTpl, $TABLES_CONFIGS, $PANELUSER_MODULE;
			switch($type)
			{
				case 1:
					if($_GET['Write'] == true)
					{
						if(empty($_POST['account']) == true) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_FILL_LOGIN."</div>");
						if(is_numeric($_POST['days']) == false) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_MVIPS_TEXT_INVALID_DAYS."</div>");
						$findAccountQ = $this->query("SELECT 1 FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_POST['account'] ."'");
						$findAccountVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_POST['account'] ."'");
						$findAccountVip = mssql_fetch_object($findAccountVipQ);
                        if(mssql_num_rows($findAccountQ) == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_INVALID_LOGIN."</div>");
						elseif((int)$findAccountVip->type > 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_MVIPS_TEXT_ALREADY_HAVE_VIP."</div>");
						else
						{
							$timeStampBegin = strtotime("now");
							$timeStampEnd = strtotime("+ ".$_POST['days'] ." days");
							$this->query("UPDATE ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." SET ".$TABLES_CONFIGS['WEBVIPS']['columnType']." = ".$_POST['flat'].", ".$TABLES_CONFIGS['WEBVIPS']['columnDateBegin']." = '".$timeStampBegin."', ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']." = '".$timeStampEnd."' WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']." = '".$_POST['account']."'");
                            //$this->query("INSERT INTO dbo.webVips (username,type,datebegin,dateend) VALUES ('".$_POST['account']."',".$_POST['flat'].",'".$timeStampBegin."','".$timeStampEnd."')");
							$tempTpl .= sprintf("<div class='qdestaques2'>".LDPA_MVIPS_TEXT_ADD_SUCCESS."</div>", $_POST['days']);	
                            ldPanelAdmin::writeLog(9, $_POST['account'], '', LDPA_MVIPS_LOG_ADD_SUCCESS.' ['. print_r($_POST, true) .']');			
						}
					}
					break;
				case 2:
					if($_GET['Write'] == true)
					{
						if(empty($_POST['account']) == true) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_FILL_LOGIN."</div>");
						$findAccountQ = $this->query("SELECT 1 FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_POST['account'] ."'");
						$findAccountVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_POST['account'] ."'");
                        $findAccountVip = mssql_fetch_object($findAccountVipQ);
                        if(mssql_num_rows($findAccountQ) == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_INVALID_LOGIN."</div>");
						elseif((int)$findAccountVip->type == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_MVIPS_TEXT_NOT_HAVE_VIP."</div>");
						else
						{
							$this->query("UPDATE ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." SET ".$TABLES_CONFIGS['WEBVIPS']['columnType']." = 0 WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']." = '".$_POST['account']."'");
                            //$this->query("DELETE FROM dbo.webVips WHERE username='".$_POST['account']."'");
							$tempTpl .= "<div class='qdestaques2'>".LDPA_MVIPS_TEXT_REMOVE_SUCCESS."</div>";
                            ldPanelAdmin::writeLog(9, $_POST['account'], '', LDPA_MVIPS_LOG_REMOVE_SUCCESS.' ['. print_r($_POST, true) .']');				
						}
					}
					break;
				case 3:
					if($_GET['Write'] == true)
					{
						if(empty($_POST['account']) == true) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_FILL_LOGIN."</div>");
						$findAccountQ = $this->query("SELECT 1 FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_POST['account'] ."'");
						$findAccountVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type, ".$TABLES_CONFIGS['WEBVIPS']['columnDateBegin']." as dateBegin, ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']." as dateEnd FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_POST['account'] ."'");
                        $findAccountVip = mssql_fetch_object($findAccountVipQ);
                        if(mssql_num_rows($findAccountQ) == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_INVALID_LOGIN."</div>");
						elseif((int)$findAccountVip->type == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_MVIPS_TEXT_NOT_HAVE_VIP."</div>");
						else
						{
                            if($_GET['subWrite'] == false)
                            {
                                
                                $dateBeginArgs = array(
                                                    "day" => date("j", $findAccountVip->dateBegin),
                                                    "month" => date("n", $findAccountVip->dateBegin),
                                                    "year" => date("Y", $findAccountVip->dateBegin),
                                                    "hour" => date("h", $findAccountVip->dateBegin),
                                                    "minutes" => date("i", $findAccountVip->dateBegin),
                                                    "seconds" => date("s", $findAccountVip->dateBegin)
                                                    );
                                $dateEndArgs   = array(
                                                    "day" => date("j", $findAccountVip->dateEnd),
                                                    "month" => date("n", $findAccountVip->dateEnd),
                                                    "year" => date("Y", $findAccountVip->dateEnd),
                                                    "hour" => date("h", $findAccountVip->dateEnd),
                                                    "minutes" => date("i", $findAccountVip->dateEnd),
                                                    "seconds" => date("s", $findAccountVip->dateEnd)
                                                    );  
                                
                                for($i = 1; $i <= 31; $i++)
                                    $tmpBeginOptionsDay .= "<option value='{$i}' ". ( $i == $dateBeginArgs['day'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                                for($i = 1; $i <= 12; $i++)
                                    $tmpBeginOptionsMonth .= "<option value='{$i}' ". ( $i == $dateBeginArgs['month'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                                for($i = (date("Y")-1); $i < (date("Y")+10); $i++)
                                    $tmpBeginOptionsYear .= "<option value='{$i}' ". ( $i == $dateBeginArgs['year'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                                for($i = 1; $i < 24; $i++)
                                    $tmpBeginOptionsHour .= "<option value='{$i}' ". ( $i == $dateBeginArgs['hour'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                                for($i = 1; $i <= 60; $i++)
                                    $tmpBeginOptionsMinutes .= "<option value='{$i}' ". ( $i == $dateBeginArgs['minutes'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                                for($i = 1; $i <= 60; $i++)
                                    $tmpBeginOptionsSeconds .= "<option value='{$i}' ". ( $i == $dateBeginArgs['seconds'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                               
                                for($i = 1; $i <= 31; $i++)
                                    $tmpEndOptionsDay .= "<option value='{$i}' ". ( $i == $dateEndArgs['day'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                                for($i = 1; $i <= 12; $i++)
                                    $tmpEndOptionsMonth .= "<option value='{$i}' ". ( $i == $dateEndArgs['month'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                                for($i = (date("Y")-1); $i < (date("Y")+10); $i++)
                                    $tmpEndOptionsYear .= "<option value='{$i}' ". ( $i == $dateEndArgs['year'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                                for($i = 1; $i < 24; $i++)
                                    $tmpEndOptionsHour .= "<option value='{$i}' ". ( $i == $dateEndArgs['hour'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                                for($i = 1; $i <= 60; $i++)
                                    $tmpEndOptionsMinutes .= "<option value='{$i}' ". ( $i == $dateEndArgs['minutes'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                                for($i = 1; $i <= 60; $i++)
                                    $tmpEndOptionsSeconds .= "<option value='{$i}' ". ( $i == $dateEndArgs['seconds'] ? 'selected=\"selected\"' : '' ) .">{$i}</option>";   
                               
                                                     
                                $tempTpl .= "<form action='?page=paneladmin&amp;option=TRANSFORM_VIP&amp;Write=true&subWrite=true' method='post' class='quadros'>";
                                $tempTpl .= "<strong>".LDPA_MVIPS_ALTER_TEXT_CONFIG_DATES."</strong>";
                                $tempTpl .= "<br /><br />";
                                $tempTpl .= "<strong>".LDPA_MVIPS_ALTER_TEXT_BEGIN."</strong> ";
                                $tempTpl .= "<select name='beginDay'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_DAY."</option>{$tmpBeginOptionsDay}</select> /";
                                $tempTpl .= "<select name='beginMonth'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_MONTH."</option>{$tmpBeginOptionsMonth}</select> /";
                                $tempTpl .= "<select name='beginYear'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_YEAR."</option>{$tmpBeginOptionsYear}</select> ".LDPA_MVIPS_ALTER_TEXT_SELECT_THE." ";
                                $tempTpl .= "<select name='beginHour'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_HOUR."</option>{$tmpBeginOptionsHour}</select> : ";
                                $tempTpl .= "<select name='beginMinutes'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_MINUTE."</option>{$tmpBeginOptionsMinutes}</select> : ";     
                                $tempTpl .= "<select name='beginSeconds'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_SECOND."</option>{$tmpBeginOptionsSeconds}</select>";
                                $tempTpl .= "<br />";
                                $tempTpl .= "<strong>".LDPA_MVIPS_ALTER_TEXT_END."</strong> ";
                                $tempTpl .= "<select name='endDay'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_DAY."</option>{$tmpEndOptionsDay}</select> /";
                                $tempTpl .= "<select name='endMonth'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_MONTH."</option>{$tmpEndOptionsMonth}</select> /";
                                $tempTpl .= "<select name='endYear'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_YEAR."</option>{$tmpEndOptionsYear}</select> ".LDPA_MVIPS_ALTER_TEXT_SELECT_THE." ";
                                $tempTpl .= "<select name='endHour'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_HOUR."</option>{$tmpEndOptionsHour}</select> : ";
                                $tempTpl .= "<select name='endMinutes'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_MINUTE."</option>{$tmpEndOptionsMinutes}</select> : ";     
                                $tempTpl .= "<select name='endSeconds'><option disabled='disabled'>".LDPA_MVIPS_ALTER_TEXT_SELECT_SECOND."</option>{$tmpEndOptionsSeconds}</select>";
                                $tempTpl .= "<br /><br />";
                                $tempTpl .= "<em>".LDPA_MVIPS_ALTER_TEXT_SELECT_WARNING."</em>";
                                $tempTpl .= "<br /><br />";
                                $tempTpl .= "<strong>".LDPA_MVIPS_ALTER_TEXT_SELECT_FLAT."</strong> <select name='flat'>";
                                if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]) $tempTpl .= "<option value='1' ". ( $findAccountVip->type == 1 ? 'selected=\"selected\"' : '' ) .">".$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][1]."</option>";
                                if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]) $tempTpl .= "<option value='2' ". ( $findAccountVip->type == 2 ? 'selected=\"selected\"' : '' ) .">".$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][2]."</option>";
                                if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]) $tempTpl .= "<option value='3' ". ( $findAccountVip->type == 3 ? 'selected=\"selected\"' : '' ) .">".$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][3]."</option>";
                                if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]) $tempTpl .= "<option value='4' ". ( $findAccountVip->type == 4 ? 'selected=\"selected\"' : '' ) .">".$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][4]."</option>";
                                if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]) $tempTpl .= "<option value='5' ". ( $findAccountVip->type == 5 ? 'selected=\"selected\"' : '' ) .">".$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][5]."</option>";
                                $tempTpl .= "</select>";
                                $tempTpl .= "<br /><br />";
                                $tempTpl .= "<input type='hidden' name='account' value='{$_POST['account']}' />";
                                $tempTpl .= "<input type='submit' value='".LDPA_TEXT_SAVE_SUBMIT."' class='button' />";
                                $tempTpl .= "</form>";
							}
                            else
                            {
                                if(ldSerial::checkTrialVersion())
                                    return $ldTpl->set("RESULTTPL", "<div class='qdestaques'>".LDPA_DEMO_OPTION_NON_AVAILABLE."</div>");
                
                                $tmpTimestampBegin = mktime($_POST['beginHour'],$_POST['beginMinutes'],$_POST['beginSeconds'],$_POST['beginMonth'],$_POST['beginDay'],$_POST['beginYear']); 
                                $tmpTimestampEnd = mktime($_POST['endHour'],$_POST['endMinutes'],$_POST['endSeconds'],$_POST['endMonth'],$_POST['endDay'],$_POST['endYear']);
                                $this->query("UPDATE ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." SET ".$TABLES_CONFIGS['WEBVIPS']['columnType']." = ".$_POST['flat'].", ".$TABLES_CONFIGS['WEBVIPS']['columnDateBegin']." = '{$tmpTimestampBegin}', ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']." = '{$tmpTimestampEnd}'  WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']." = '".$_POST['account']."'");
                                $tempTpl .= "<div class='qdestaques2'>".LDPA_MVIPS_ALTER_TEXT_SUCCESS."</div>";
                                ldPanelAdmin::writeLog(9, $_POST['account'], '', LDPA_MVIPS_ALTER_LOG_SUCCESS.' ['. print_r($_POST, true) .']');
                            }		    
						}
					}
					break;
			}
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		private function optionLoadAddNotice()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
			{
				if(empty($_POST['subject']) == true || empty($_POST['content']) == true) return $ldTpl->set("RESULTTPL", "<div class='qdestaques'>".LDPA_FILL_ALL_INPUTS."</div>");
				$newContent = str_replace("<?","", base64_decode($_POST['content']));
				$newContent = str_replace("?>","", $newContent);
				$this->query("INSERT INTO dbo.webNotices (subject,content,date) VALUES ('". $_POST['subject'] ."','". base64_encode($newContent) ."','". time() ."')");
				$tempTpl = "<div class='qdestaques2'>".LDPA_NOTICE_ADD_TEXT_SUCCESS."</div>";
                ldPanelAdmin::writeLog(10, '', '', $_POST['subject']);
			}
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		private function optionLoadRemoveNotice()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
			{
				$this->query("DELETE FROM dbo.webNotices WHERE id=".(int)$_POST['id']);
				$tempTpl = "<div class='qdestaques2'>".LDPA_NOTICE_REMOVE_TEXT_SUCCESS."</div>";
                ldPanelAdmin::writeLog(11, '', '', LDPA_NOTICE_REMOVE_LOG_SUCCESS.' '.$_POST['id']);
			}
			$findNoticesQ = $this->query("SELECT id,subject FROM dbo.webNotices ORDER BY id DESC");
			while($findNotices = mssql_fetch_object($findNoticesQ))
			{
				$tempOptionList .= "<option value=\"". $findNotices->id ."\">". $findNotices->subject ."</option>";
			}
			$ldTpl->set("OPTIONS_ID_SELECT", $tempOptionList);
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		private function optionLoadModifyNotice()
		{
			global $ldTpl;
			$findNoticesQ = $this->query("SELECT id,subject FROM dbo.webNotices ORDER BY id DESC");
			while($findNotices = mssql_fetch_object($findNoticesQ))
			{
				$tempOptionList .= "<option value=\"". $findNotices->id ."\">". $findNotices->subject ."</option>";
			}
			if($_GET['Write'] == true)
			{
				$findNoticeDetailsQ = $this->query("SELECT * FROM dbo.webNotices WHERE id=".(int)$_POST['id']);
				$findNoticeDetails = mssql_fetch_object($findNoticeDetailsQ);
				$tempTpl .= "<form action=\"?page=paneladmin&amp;option=MODIFY_NOTICE&amp;SubWrite=true&amp;id=". $findNoticeDetails->id ."\" method=\"post\" name=\"noticeFrom\">
								<em>".LDPA_NOTICE_ALTER_TEXT_TITLE.":</em><br /><input name=\"subject\" type=\"text\" value=\"". $findNoticeDetails->subject ."\" maxlength=\"50\" /> <br />
								<em>".LDPA_NOTICE_ALTER_TEXT_NOTICE.":</em><br /><textarea name=\"content\" id=\"content\">". base64_decode($findNoticeDetails->content) ."</textarea><br />
								<input type=\"submit\" value=\"".LDPA_NOTICE_ALTER_TEXT_SUBMIT."\" class=\"button\" onclick=\"noticeFrom.content.value = base64Encode(noticeFrom.content.value);\" />
							  </form>";
			
			}
			if($_GET['SubWrite'] == true && is_numeric($_GET['id']) == true)
			{
				$newContent = str_replace("<?","", base64_decode($_POST['content']));
				$newContent = str_replace("?>","", $newContent);
				$this->query("UPDATE dbo.webNotices SET subject='". $_POST['subject'] ."', content='". base64_encode($newContent) ."', date=". time() ." WHERE id=".(int)$_GET['id']);
				$tempTpl .= "<div class='qdestaques2'>".LDPA_NOTICE_ALTER_TEXT_SUCCESS."</div>";
                ldPanelAdmin::writeLog(12, '', '', $_POST['subject']); 
			}
			
			$ldTpl->set("OPTIONS_ID_SELECT", $tempOptionList);
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		private function optionLoadAddCash($type)
		{
			global $ldTpl, $TABLES_CONFIGS;
			if($_GET['Write'] == true)
			{
				switch($type)
				{
					case 1:
						if(empty($_POST['account']) == true) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_FILL_LOGIN."</div>");
						if(is_numeric($_POST['amount']) == false) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_ADD_CASH_TEXT_INVALID_AMOUNT."</div>");
                        if($_POST['type'] != 1 && $_POST['type'] != 2 && $_POST['type'] != 3) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_ADD_CASH_TEXT_INVALID_TYPE."</div>");
						$findAccountQ = $this->query("SELECT 1 FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_POST['account'] ."'");
						//$findAccountCashQ = $this->query("SELECT 1 FROM dbo.webCash WHERE username='". $_POST['account'] ."'");                              
						if(mssql_num_rows($findAccountQ) == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_INVALID_LOGIN."</div>");
						else
						{
                            if($_POST['type'] == 1) { $currency = $TABLES_CONFIGS['WEBCASH']['columnAmount']; $currencyName = CASH_NAME; }
                            elseif($_POST['type'] == 2) { $currency = $TABLES_CONFIGS['WEBCASH']['columnAmount2']; $currencyName = CASH_NAME2; }
                            elseif($_POST['type'] == 3) { $currency = $TABLES_CONFIGS['WEBCASH']['columnPoints']; $currencyName = POINTS_NAME; }
                            
							$this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." SET ".$currency."=".$currency."+". $_POST['amount'] ." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $_POST['account'] ."'");
							$tempTpl .= sprintf("<div class='qdestaques2'>".LDPA_ADD_CASH_TEXT_ADD_SUCCESS."</div>", $_POST['amount'], $currencyName);	
                            ldPanelAdmin::writeLog(13, '', '', LDPA_ADD_CASH_LOG_ADD_SUCCESS.' '.$currencyName.'. ['.print_r($_POST, true).']');			
						}
						break;
					case 2:
						if(empty($_POST['account']) == true) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_FILL_LOGIN."</div>");
						if(is_numeric($_POST['amount']) == false) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_ADD_CASH_TEXT_INVALID_AMOUNT."</div>");
						if($_POST['type'] != 1 && $_POST['type'] != 2 && $_POST['type'] != 3) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_ADD_CASH_TEXT_INVALID_TYPE."</div>");
                        $findAccountQ = $this->query("SELECT 1 FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_POST['account'] ."'");
						$findAccountCashQ = $this->query("SELECT 1 FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $_POST['account'] ."'");
						if(mssql_num_rows($findAccountQ) == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_INVALID_LOGIN."</div>");
						elseif(mssql_num_rows($findAccountCashQ) == 0) return $ldTpl->set("RESULTTPL", "<div class=\"qdestaques\">".LDPA_ADD_CASH_TEXT_REMOVE_NEVER_HAVE_CASH." ".CASH_NAME."</div>");
						else
						{
							if($_POST['type'] == 1) { $currency = $TABLES_CONFIGS['WEBCASH']['columnAmount']; $currencyName = CASH_NAME; }
                            elseif($_POST['type'] == 2) { $currency = $TABLES_CONFIGS['WEBCASH']['columnAmount2']; $currencyName = CASH_NAME2; }
                            elseif($_POST['type'] == 3) { $currency = $TABLES_CONFIGS['WEBCASH']['columnPoints']; $currencyName = POINTS_NAME; }
                            
                            $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." SET ".$currency."=".$currency."-". $_POST['amount'] ." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $_POST['account'] ."'");
                            $tempTpl .= sprintf("<div class='qdestaques2'>".LDPA_ADD_CASH_TEXT_REMOVE_SUCCESS."</div>", $_POST['amount'], $currencyName);
                            ldPanelAdmin::writeLog(13, '', '', LDPA_ADD_CASH_LOG_REMOVE_SUCCESS.' '.$currencyName.'. ['.print_r($_POST, true).']');    				
						}
						break;
				}
			}
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		private function optionLoadManagerDepositsModifyStats()
		{
			global $ldTpl, $TABLES_CONFIGS;
			$Id =(int) $_GET['Id'];
			$login = $_POST['login'];
			$cash = (int)$_POST['cash'];
			$comentario_adm = $_POST['comentario_adm'];
			$status = (int)$_POST['status'];
			switch($status)
			{
				case 0:
					$this->query("UPDATE dbo.webLogBuyCash SET comentario_adm = '". base64_encode($comentario_adm) ."', status = 0 WHERE id = ". $Id);
                    ldPanelAdmin::writeLog(14, '', '', sprintf(LDPA_MDEPOSITS_MSTATS_LOG_IN_PROGRESS, $login, $Id));
				break;
				case 1:
					$this->query("UPDATE dbo.webLogBuyCash SET comentario_adm = '". base64_encode($comentario_adm) ."', status = 1 WHERE id = ". $Id);
					$this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." SET ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." = ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." + ". $cash ." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']." = '". $login ."'");
                    ldPanelAdmin::writeLog(14, '', '', sprintf(LDPA_MDEPOSITS_MSTATS_LOG_COMPLETED, $login, $cash, $Id));
				break;
				case 2:
					$this->query("UPDATE dbo.webLogBuyCash SET comentario_adm = '". base64_encode($comentario_adm) ."', status = 2 WHERE id = ". $Id);
                    ldPanelAdmin::writeLog(14, '', '', sprintf(LDPA_MDEPOSITS_MSTATS_LOG_REJECTED, $login, $Id));
				break;
				case 3:
					$this->query("UPDATE dbo.webLogBuyCash SET comentario_adm = '". base64_encode($comentario_adm) ."', status = 2 WHERE id = ". $Id);
				    $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." SET ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." = ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." - ". $cash ." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']." = '". $login ."'");
                    ldPanelAdmin::writeLog(14, '', '', sprintf(LDPA_MDEPOSITS_MSTATS_LOG_REJECTED_AND_REMOVE, $login, $cash, $Id)); 
                break;
			}
			switch($status)
			{
				case 0: $status = LDPA_MDEPOSITS_STAT_IN_PROGRESS; break;
				case 1: $status = LDPA_MDEPOSITS_STAT_COMPLETED; break;
				case 2: $status = LDPA_MDEPOSITS_STAT_REJECTED; break;
				case 3: $status = LDPA_MDEPOSITS_STAT_REJECTED_AND_REMOVE." ". $cash . "&nbsp;". CASH_NAME; break;
			}
			$this->ResultTplDeposits = sprintf("<div class=\"qdestaques\">".LDPA_MDEPOSITS_TEXT_SUCCESS." <em>". $status ."</em>.<br />". CASH_NAME .": ". $cash .".</div>", $Id);
		}
		private function optionLoadManagerDeposits($type)
		{
			global $ldTpl;
			if($_GET['Write'] == true) $this->optionLoadManagerDepositsModifyStats();
			
			$findDepositsQ = $this->query("SELECT * FROM dbo.webLogBuyCash WHERE status=".(int)$type." ORDER BY id DESC");
			while($findDeposits = mssql_fetch_object($findDepositsQ))
			{
				$findDeposits->valor = str_replace("R$", "", $findDeposits->valor);
				$findDeposits->valor = str_replace(" ", "", $findDeposits->valor);
				$findDeposits->valor = str_replace(",", ".", $findDeposits->valor);
				$tempTpl .= "<form action=\"?page=paneladmin&amp;option=". $_GET['option'] ."&amp;Write=true&amp;Id=". $findDeposits->id ."\" method=\"post\" class=\"quadros\">
								<em>".LDPA_MDEPOSITS_TEXT_ID.":</em> <strong>". $findDeposits->id ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_LOGIN.":</em> <input name=\"login\" type=\"text\" value=\"". $findDeposits->username ."\" /><br />
								<em>".LDPA_MDEPOSITS_TEXT_TOTAL_CASH." ". CASH_NAME .":</em> <input name=\"cash\" type=\"text\" value=\"". $findDeposits->cash ."\" /><br />
								<em>".LDPA_MDEPOSITS_TEXT_BANK.":</em> <strong>". $findDeposits->banco ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_TERMINAL_NUMBER.":</em> <strong>". $findDeposits->nterminal ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_TRASNFER_NUMBER.":</em> <strong>". $findDeposits->ntransferencia ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_AGENCY_HOST.":</em> <strong>". $findDeposits->agencia_acolhedora ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_NUMBER_SEQ.":</em> <strong>". $findDeposits->nsequencia ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_CTR.":</em> <strong>". $findDeposits->ctr ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_CASH_MACHINE.":</em> <strong>". $findDeposits->caixa_eletronico ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_ENVELOPE_NUMBER.":</em> <strong>". $findDeposits->nenvelope ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_DOC_NUMBER.":</em> <strong>". $findDeposits->ndocumento ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_CONTROL_NUMBER.":</em> <strong>". $findDeposits->ncontrole ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_OPERATOR_NUMBER.":</em> <strong>". $findDeposits->noperador ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_DATE.":</em> <strong>". $findDeposits->data ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_HOUR.":</em> <strong>". $findDeposits->hora ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_PAY_IN.":</em> <strong>". $findDeposits->pago_em ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_ANNEX.":</em> <strong>". (strlen($findDeposits->anexo) < 2 ? LDPA_MDEPOSITS_TEXT_ANNEX_NOT_SEND:"<a href='". $findDeposits->anexo ."' target=\"_blank\">".LDPA_MDEPOSITS_TEXT_ANNEX_SEND."</a>") ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_COMMENT.":</em> <strong>". nl2br(base64_decode($findDeposits->comentario)) ."</strong><br />
								<em>".LDPA_MDEPOSITS_TEXT_VALUE.":</em> <input name=\"valor\" type=\"text\" value=\"". $findDeposits->valor ."\" />". ($findDeposits->valor < 1 ? "&nbsp;<strong style=\"color:red;\">".LDPA_MDEPOSITS_TEXT_VALUE_WARNING."</strong>":"") ."<br />
								<em>".LDPA_MDEPOSITS_TEXT_COMMENT_ADM.":</em> <textarea name=\"comentario_adm\">". nl2br(base64_decode($findDeposits->comentario_adm)) ."</textarea><br />
								<em>".LDPA_MDEPOSITS_TEXT_NEW_STATUS.":</em> <select name=\"status\"><option value=\"0\">".LDPA_MDEPOSITS_STAT_IN_PROGRESS."</option><option value=\"1\">".LDPA_MDEPOSITS_STAT_COMPLETED."</option><option value=\"2\">".LDPA_MDEPOSITS_STAT_REJECTED."</option><option value=\"3\">".LDPA_MDEPOSITS_STAT_REJECTED_AND_REMOVE." X ". CASH_NAME ."</option></select>
								<input type=\"submit\" value=\"".LDPA_TEXT_SAVE_SUBMIT."\" class=\"button\" />
							 </form>";
			}   
			
			$ldTpl->set("RESULTTPL", $this->ResultTplDeposits.$tempTpl);
		}
		public function optionLoadManagerComplaints()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
			{
				$findComplaintsImageQ = $this->query("SELECT * FROM dbo.webComplaints WHERE id=".(int)$_GET['id']);
				$findComplaintsImage = mssql_fetch_object($findComplaintsImageQ);
				@unlink($findComplaintsImage->image);
				$this->query("DELETE FROM dbo.webComplaints WHERE id=".(int)$_GET['id']);
				$tempTpl .= "<div class='qdestaques2'>".LDPA_MCOMPLAINTS_TEXT_DELETE_SUCCESS."</div>";
                ldPanelAdmin::writeLog(15, '', '', LDPA_MCOMPLAINTS_LOG_DELETE_SUCCESS.': '. $_GET['id']);
			}			
			$findComplaintsQ = $this->query("SELECT * FROM dbo.webComplaints ORDER BY id DESC");
			while($findComplaints = mssql_fetch_object($findComplaintsQ))
			{
				$tempTpl .= "<div class='quadros'>
								<em>".LDPA_MCOMPLAINTS_TEXT_ID."</em>: ".$findComplaints->id." <br />
								<em>".LDPA_MCOMPLAINTS_TEXT_LOGIN."</em>: <strong>".$findComplaints->username."</strong> <br />
								<em>".LDPA_MCOMPLAINTS_TEXT_IMAGE."</em>: <a href='".$findComplaints->image."' target='_blank'>[Ver Foto]</a> <br />
								<em>".LDPA_MCOMPLAINTS_TEXT_DESCRIPTION."</em>: <strong>".nl2br(base64_decode($findComplaints->description))."</strong> <br />
								<em>".LDPA_MCOMPLAINTS_TEXT_IP."</em>: ".$findComplaints->ip." <br />
								<em>".LDPA_MCOMPLAINTS_TEXT_DATE."</em>: ".date("d/m/Y g:i a", $findComplaints->date)." <br />
								<div style='text-align:right;'><input type='button' value='".LDPA_MCOMPLAINTS_TEXT_DELETE_NOTICE."' class='button' onclick=\"window.location='?page=".$_GET['page']."&amp;option=COMPLAINTS&amp;Write=true&id=".$findComplaints->id."';\" /></div>
							</div>";
			}
			$ldTpl->set("RESULTTPL", $tempTpl);
		}
		public function optionLoadManagerTickets($type)
		{
			global $ldTpl;
			if(isset($_GET['Ticket']) == false)
			{
				$sqlQ = $this->query("SELECT id,subject,date,status FROM dbo.webTickets WHERE status=".(int)$type." ORDER By id DESC");
				while($sql = mssql_fetch_object($sqlQ))
				{
                    $lastResponse = $this->query("SELECT TOP 1 [answerBy] FROM [dbo].[webTicketsAnswers] WHERE [id] = {$sql->id} ORDER BY [date] DESC");
                    if(mssql_num_rows($lastResponse) > 0)
                    {
                        $lastResponse = mssql_fetch_object($lastResponse);
                        if($lastResponse->answerBy != "Suporte")
                            $styleDiv = "style='border-color: red;'";
                    }
					$tempResult .= "<div class='quadros' {$styleDiv}><em>".LDPA_MTICKETS_TEXT_ID."</em>: <strong>".$sql->id."</strong><br /><em>".LDPA_MTICKETS_TEXT_SUBJECT."</em>: <strong>".base64_decode($sql->subject)."</strong><br /><em>".LDPA_MTICKETS_TEXT_DATE."</em>: <strong>".date("d/m/Y g:i a",$sql->date)."</strong><br /><em>".LDPA_MTICKETS_TEXT_STATUS."</em>: <strong>".($sql->status == 0 ? LDPA_MTICKETS_TEXT_STATUS_OPEN : LDPA_MTICKETS_TEXT_STATUS_CLOSE)."</strong><br /><a href='?page=".$_GET['page']."&amp;option=".$_GET['option']."&amp;Ticket=".$sql->id."'>".LDPA_MTICKETS_TEXT_VIEW_TICKET."</a></div>";
                    unset($styleDiv);
				}
			}
			else
			{
				if($_GET['SubWrite'] == true) $this->query("UPDATE dbo.webTickets SET status=".(int)$_GET['newStatusTicket']." WHERE id=".(int)$_GET['Ticket']);
				$sqlQ = $this->query("SELECT id,username,character,sector,subject,description,date,status FROM dbo.webTickets WHERE id=".(int)$_GET['Ticket']." ORDER By id DESC");
				$sql = mssql_fetch_object($sqlQ);
				$ticketStatus = $sql->status;
				if($_GET['Write'] == true && empty($_POST['answer']) == false && $sql->status == 0)
                {
                    $this->query("INSERT INTO dbo.webTicketsAnswers (id,description,answerBy,date) VALUES (".(int)$_GET['Ticket'].",'".base64_encode($_POST['answer'])."','Suporte','".time()."');");
                    ldPanelAdmin::writeLog(16, '', '', LDPA_MTICKETS_LOG_RESPONSE.': '. $_GET['Ticket']);
                }
				if(mssql_num_rows($sqlQ) == 0) $tempResult .= LDPA_MTICKETS_TEXT_NOT_FOUND;
				else
				{
					$tempResult .= "<em>".LDPA_MTICKETS_TEXT_ID."</em>: <strong>".$_GET['Ticket']."</strong><br />
									<em>".LDPA_MTICKETS_TEXT_LOGIN."</em>: <strong>".$sql->username."</strong><br />
									<em>".LDPA_MTICKETS_TEXT_CHARACTER."</em>: <strong>".$sql->character."</strong><br />
									<em>".LDPA_MTICKETS_TEXT_SECTOR."</em>: <strong>".$sql->sector."</strong><br />
									<em>".LDPA_MTICKETS_TEXT_SUBJECT."</em>: <strong>".base64_decode($sql->subject)."</strong><br />
									<em>".LDPA_MTICKETS_TEXT_DESCRIPTION."</em>: <strong>".nl2br(base64_decode($sql->description))."</strong><br />
									<em>".LDPA_MTICKETS_TEXT_STATUS."</em>: ".($sql->status == 0 ? "<strong>".LDPA_MTICKETS_TEXT_STATUS_OPEN."</strong>":"<strong>".LDPA_MTICKETS_TEXT_STATUS_CLOSE."</strong>");	
					$tempResult .= "<h1>".LDPA_MTICKETS_TEXT_HISTORY."</h1>";
					$sqlQ = $this->query("SELECT * FROM dbo.webTicketsAnswers WHERE id='".$_GET['Ticket']."' ORDER BY date DESC");
					if(mssql_num_rows($sqlQ) == 0) $tempResult .= "<div class='quadros'>".LDPA_MTICKETS_TEXT_NOT_HAVE_HISTORY."</div>";
					while($sql = mssql_fetch_object($sqlQ))
					{
						$tempResult .= "<div class='quadros'><em>".LDPA_MTICKETS_TEXT_H_REPONSE_BY."</em>: <strong>".$sql->answerBy."</strong><br /><em>".LDPA_MTICKETS_TEXT_DATE."</em>: <strong>".date("d/m/Y g:i a",$sql->date)."</strong><br /><em>".LDPA_MTICKETS_TEXT_DESCRIPTION."</em>: <strong>".nl2br(base64_decode($sql->description))."</strong><br /></div>";
					}
					if($sql->status == 0) $tempResult .= "<form action='?page=".$_GET['page']."&amp;option=".$_GET['option']."&amp;Ticket=".$_GET['Ticket']."&amp;Write=true' method='post'><em>".LDPA_MTICKETS_TEXT_SEND_REPONSE.":</em><textarea name='answer'></textarea><input type='submit' class='button' value='".LDPA_MTICKETS_TEXT_SEND_SUBMIT."' />". ($ticketStatus == 0 ? "<input type='button' class='button' value='".LDPA_MTICKETS_TEXT_SEND_CLOSE."' onclick=\"window.location='?page=".$_GET['page']."&amp;option=".$_GET['option']."&amp;Ticket=".$_GET['Ticket']."&amp;SubWrite=true&amp;newStatusTicket=1';\" />":"<input type='button' class='button' value='".LDPA_MTICKETS_TEXT_SEND_OPEN."' onclick=\"window.location='?page=".$_GET['page']."&amp;option=".$_GET['option']."&amp;Ticket=".$_GET['Ticket']."&amp;SubWrite=true&amp;newStatusTicket=0';\" />") ."</form>";
				}
			}
			$ldTpl->set("RESULTTPL", $tempResult);
		}
		private function optionLoadVerifyUpdate()
		{
			global $ldTpl;
			$contentFileUpdate = @file_get_contents("http://". PASSWORD_UPDATE ."@daldegamserver.com/muSiteUpdate1_3/updateList.dat");
			if(empty($contentFileUpdate) == false)
			{
				$contentFileUpdate = explode("\n", $contentFileUpdate);
				for($i = 0, $x = sizeof($contentFileUpdate); $i < $x; $i++)
				{
					$fileUpdate = explode("{*.*}", $contentFileUpdate[$i]);
					if(@md5_file($fileUpdate[0]) != $fileUpdate[1]) 
					{
						$Result .= "<em>".LDPA_VERIFY_UPDATE_AVAILABLE.":</em> <strong>".$fileUpdate[0]."</strong><br />";
						if($_GET['Download'] == true)
						{
							$extensionFile = substr($fileUpdate[0], strlen($fileUpdate[0])-4);
							$fileHostName = substr($fileUpdate[0], 0, strlen($fileUpdate[0])-4);
							$bool = copy("http://". PASSWORD_UPDATE ."@daldegamserver.com/muSiteUpdate1_3/".$fileHostName.".updateFile", $fileHostName.$extensionFile);
							$Result .= "<div class='qdestaques'>".LDPA_VERIFY_UPDATE_DOWNLOADING.": ".$fileUpdate[0]." - ". ($bool == true ? LDPA_VERIFY_UPDATE_DOWNLOADING_OK : LDPA_VERIFY_UPDATE_DOWNLOADING_ERROR) ." </div>";
						}
					}
					//var_dump($fileUpdate);
				}
			}
			if(empty($Result) == true) $Result = "<em><strong>".LDPA_VERIFY_UPDATE_NOT_AVAILABLE."</strong></em>";
			else $Result .= "<br /><input type='button' class='button' value='".LDPA_VERIFY_UPDATE_DOWNLOAD_AND_INSTALL."' onclick=\"window.location='?page=paneladmin&amp;option=VERIFY_UPDATE&amp;Download=true';\" />";
			$ldTpl->set("RESULT", "<div class='qdestaques2'>". $Result ."</div>");
		}
        private function optionLoadManagerPoll($type)
        {
            global $ldTpl;
            switch($type)
            {
                case 0:
                    if($_GET['action'] == "insert")
                    {
                        if(empty($_POST['question']) == true) $tplResult = "<div class=\"qdestaques\">".LDPA_MPOLL_INSERT_FILL_QUESTION."</div>"; 
                        elseif($this->query("INSERT INTO dbo.webPollQuestions (question,active) VALUES ('{$_POST['question']}',1)") == false) $tplResult = "<div class=\"qdestaques\">".LDPA_MPOLL_INSERT_QUESTION_ERROR."</div>";   
                        else 
                        {
                            $findLastIdQ = $this->query("SELECT max(id) as lastNumber FROM dbo.webPollQuestions");
                            $findLastId = mssql_fetch_object($findLastIdQ);
                            foreach($_POST['answer'] as $answer)
                            {
                                if(empty($answer) == false)
                                    $this->query("INSERT INTO dbo.webPollAnswers (idPoll,answer,votes) VALUES ({$findLastId->lastNumber}, '{$answer}', 0)");    
                            }
                            $tplResult = "<div class=\"qdestaques2\">".LDPA_MPOLL_INSERT_QUESTION_SUCCESS."</div>";
                        }
                        ldPanelAdmin::writeLog(17, '', '', LDPA_MPOLL_INSERT_QUESTION_SUCCESS_LOG.' ['. print_r($_POST, true) .']'); 
                    }
                    break;
                case 1:
                    if($_GET['action'] == "remove" && is_numeric($_GET['idPoll']) == true)
                    {
                        $this->query("DELETE FROM dbo.webPollQuestions WHERE id = ".(int)$_GET['idPoll']);
                        $this->query("DELETE FROM dbo.webPollAnswers WHERE idPoll = ".(int)$_GET['idPoll']);
                        $tplResult .= sprintf("<div class=\"qdestaques2\">".LDPA_MPOLL_REMOVE_QUESTION_SUCCESS."</div>", $_GET['idPoll']);
                        ldPanelAdmin::writeLog(17, '', '', LDPA_MPOLL_REMOVE_QUESTION_SUCCESS_LOG.' ['. print_r($_POST, true) .']');
                    }
                    $findPollsQ = $this->query("SELECT id, question, active FROM dbo.webPollQuestions ORDER BY id DESC");
                    while($findPolls = mssql_fetch_object($findPollsQ))
                    {
                        $tplResult .= "<div class=\"quadros\">".LDPA_MPOLL_REMOVE_QUESTION_TEXT_QUESTION.": {$findPolls->question}<br />".LDPA_MPOLL_REMOVE_QUESTION_TEXT_ACTIVE.": ".($findPolls->active == 1 ? LDPA_MPOLL_REMOVE_QUESTION_TEXT_ACTIVE_YES : LDPA_MPOLL_REMOVE_QUESTION_TEXT_ACTIVE_NOT)."<br /><input type=\"button\" class=\"button\" value=\"".LDPA_MPOLL_REMOVE_QUESTION_TEXT_SUBMIT."\" onclick=\"javascript: if(confirm('".LDPA_MPOLL_REMOVE_QUESTION_TEXT_SUBMIT_SURE."') == true) window.location='?page=paneladmin&amp;option=REMOVE_POLL&amp;action=remove&amp;idPoll={$findPolls->id}'; \" /></div>";
                    }
                    break;
                case 2:
                    if($_GET['action'] == "modify" && is_numeric($_GET['idPoll']) == true)
                    {
                        switch($_GET['subAction'])
                        {
                            case "insert":
                                if(empty($_POST['answer']) == false)
                                {
                                    $this->query("INSERT INTO dbo.webPollAnswers (idPoll,answer,votes) VALUES ({$_GET['idPoll']}, '{$_POST['answer']}', 0)");
                                    ldPanelAdmin::writeLog(17, '', '', LDPA_MPOLL_MODIFY_LOG_QUESTION_ADD.' ['. print_r($_POST, true) .']');
                                }
                                break;
                            case "remove":
                                if(empty($_GET['idAnswer']) == false)
                                {
                                    $this->query("DELETE FROM dbo.webPollAnswers WHERE idPoll = {$_GET['idPoll']} AND idAnswer = ".$_GET['idAnswer']);
                                    ldPanelAdmin::writeLog(17, '', '', LDPA_MPOLL_MODIFY_LOG_QUESTION_REMOVE.' ['. print_r($_POST, true) .']');
                                }
                                break;
                        }
                        
                        $findPollQ = $this->query("SELECT * FROM dbo.webPollQuestions WHERE id = ".$_GET['idPoll']);    
                        $findPoll = mssql_fetch_object($findPollQ);
                        $tplResult .= "<div class=\"quadros\">".LDPA_MPOLL_REMOVE_QUESTION_TEXT_QUESTION.": {$findPoll->question}<br />".LDPA_MPOLL_REMOVE_QUESTION_TEXT_ACTIVE.": ".($findPoll->active == 1 ? LDPA_MPOLL_REMOVE_QUESTION_TEXT_ACTIVE_YES : LDPA_MPOLL_REMOVE_QUESTION_TEXT_ACTIVE_NOT)."<br /><br />";
                        $tplResult .= "<form action=\"?page=paneladmin&option=MODIFY_POLL&amp;action=modify&amp;idPoll={$_GET['idPoll']}&amp;subAction=insert\" method=\"post\" class=\"quadros\">".LDPA_MPOLL_MODIFY_TEXT_QUESTION_ADD.": <br /><input name=\"answer\" type=\"text\" value=\"\" maxlength=\"50\" /><input type=\"submit\" class=\"button\" value=\"".LDPA_MPOLL_MODIFY_TEXT_QUESTION_SUBMIT."\" /></form>";
                        $tplResult .= "<div class=\"quadros\">".LDPA_MPOLL_MODIFY_TEXT_ANSWERS.":";
                            $findAnswerQ = $this->query("SELECT idAnswer,answer,votes FROM dbo.webPollAnswers WHERE idPoll = ".$_GET['idPoll']);
                            while($findAnswer = mssql_fetch_object($findAnswerQ))
                            {
                                 $tplResult .= "<div class=\"quadros\">".LDPA_MPOLL_MODIFY_TEXT_ANSWER.": {$findAnswer->answer}<br />".LDPA_MPOLL_MODIFY_TEXT_ANSWER_VOTES.": {$findAnswer->votes}<br /><input type=\"button\" class=\"button\" value=\"".LDPA_MPOLL_REMOVE_QUESTION_TEXT_SUBMIT."\" onclick=\"javascript: if(confirm('".LDPA_MPOLL_MODIFY_TEXT_ANSWER_REMOVE."') == true) window.location='?page=paneladmin&amp;option=MODIFY_POLL&amp;action=modify&amp;subAction=remove&amp;idPoll={$_GET['idPoll']}&amp;idAnswer={$findAnswer->idAnswer}'; \" /></div>";
                            }   
                        $tplResult .= "</div></div>";
                            
                    }
                    else
                    {
                        $findPollsQ = $this->query("SELECT id, question, active FROM dbo.webPollQuestions ORDER BY id DESC");
                        while($findPolls = mssql_fetch_object($findPollsQ))
                        {
                            $tplResult .= "<div class=\"quadros\">".LDPA_MPOLL_REMOVE_QUESTION_TEXT_QUESTION.": {$findPolls->question}<br />".LDPA_MPOLL_REMOVE_QUESTION_TEXT_ACTIVE.": ".($findPolls->active == 1 ? LDPA_MPOLL_REMOVE_QUESTION_TEXT_ACTIVE_YES : LDPA_MPOLL_REMOVE_QUESTION_TEXT_ACTIVE_NOT)."<br /><input type=\"button\" class=\"button\" value=\"".LDPA_MPOLL_MODIFY_TEXT_ANSWER_ALTER_SUBMIT."\" onclick=\"javascript: window.location='?page=paneladmin&amp;option=MODIFY_POLL&amp;action=modify&amp;idPoll={$findPolls->id}'; \" /></div>";
                        }
                    }
                    break;
            }
            $ldTpl->set("POLL_RESULT_ADMIN", $tplResult);
            unset($tplResult);  
        }
        private function optionLoadManagerAccountsTransferCash()
        {
            global $ldTpl, $TABLES_CONFIGS, $PANELADMIN_MODULE;
            if($_GET['action'] == "add")                                                                                      
            {
                if(mssql_num_rows($this->query("SELECT 1 FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='{$_POST['memb___id']}'")) == 0)
                    $tempTpl .= "<script> alert('".LDPA_MACCOUNT_TRANSFCASH_INCORRECT_LOGIN."'); </script>";
                else
                    $this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO SET resale = 1 WHERE memb___id='{$_POST['memb___id']}'");
            }
            elseif($_GET['action'] == "remove")
            {
                $this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO SET resale = 0 WHERE memb___id='{$_GET['memb___id']}'");
            }

            $tempTpl .= "<table border='0' width='100%'>
                          <tr>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_MACCOUNT_TRANSFCASH_LOGIN."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_MACCOUNT_TRANSFCASH_EMAIL."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_MACCOUNT_TRANSFCASH_ACTION."</strong></td>
                          </tr>";
            $findAccountsQ = $this->query("SELECT memb___id, mail_addr FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE resale = 1");          
            while($findAccounts = mssql_fetch_object($findAccountsQ))
            {
                $tempTpl .= "<tr id='rowDc{$i}'>
                              <td align='center' bgcolor='#EDEBDC'><strong>".$findAccounts->memb___id."</strong></td>
                              <td align='center' bgcolor='#EDEBDC'>".$findAccounts->mail_addr."</td>
                              <td align='center' bgcolor='#EDEBDC'><a href='?page=paneladmin&amp;option=MANAGER_ACCOUNTS_TRANSFER_CASH&amp;action=remove&amp;memb___id={$findAccounts->memb___id}'>Remover</a></td>
                            </tr>";
            }          
            $tempTpl .= "<tr>
                          <td colspan=\"3\">
                          <form action='?page=paneladmin&option=MANAGER_ACCOUNTS_TRANSFER_CASH&action=add' method='post'>
                          <em>".LDPA_MACCOUNT_TRANSFCASH_ADD_LOGIN.": </em><input type=\"text\" name=\"memb___id\" value=\"\" maxlength=\"10\" />
                          <input type=\"submit\" value=\"".LDPA_MACCOUNT_TRANSFCASH_ADD_SUBMIT."\" class=\"button\" />
                          </form>
                          </td>
                         </tr>
                         </table>";
            
            $ldTpl->set("RESULTTPL", $tempTpl);  
        }
        private function optionLoadGameDisconnect()
        {
            global $ldTpl, $TABLES_CONFIGS, $PANELADMIN_MODULE;
            if($_GET['action'] == "disconnect")
            {
                require("modules/classes/ldnetwork.class.php");
                require("modules/classes/ldgame.class.php");
                
                $ldGame = new ldGame($PANELADMIN_MODULE['JOINSERVER']['IP'], $PANELADMIN_MODULE['JOINSERVER']['PORT']);
                 
                $tempTpl .= "<script type=\"text/javascript\"> alert(\"".$ldGame->disconnectPlayer($_GET['memb___id'])."\"); </script>";
                 
                $this->writeLog(18, "", "", LDPA_GAME_DISCONNECT_TEXT_DISCONNECTED.": ". $_POST['message']);
            }

            $tempTpl .= "<table border='0' width='100%'>
                          <tr>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_GAME_DISCONNECT_TEXT_LOGIN."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_GAME_DISCONNECT_TEXT_CHARACTER."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_GAME_DISCONNECT_TEXT_CONNECT_TM."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_GAME_DISCONNECT_TEXT_SERVER."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_GAME_DISCONNECT_TEXT_ACTION."</strong></td>
                          </tr>";
            $findAccountsOnlineQ = $this->query("Use ".DATABASE_ACCOUNTS."; SELECT MEMB_STAT.memb___id, MEMB_STAT.ConnectTM, MEMB_STAT.ServerName, AccountCharacter.GameIDC FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT JOIN ".DATABASE_CHARACTERS.".dbo.AccountCharacter ON (MEMB_STAT.memb___id = AccountCharacter.Id) WHERE MEMB_STAT.ConnectStat = 1 ");          
            while($findAccountsOnline = mssql_fetch_object($findAccountsOnlineQ))
            {
                ++$i;
                $checkVipQ = $this->query("Use ".DATABASE."; SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $findAccountsOnline->memb___id ."'");
                $checkVip = mssql_fetch_object($checkVipQ);
                
                $tempTpl .= "<tr id='rowDc{$i}'>
                              <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->memb___id."</td>
                              <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->GameIDC."</td>
                              <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->ConnectTM."</td>
                              <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->ServerName."</td>
                              <td align='center' bgcolor='#EDEBDC'><a href='?page=paneladmin&amp;option=GAME_DISCONNECT&amp;action=disconnect&amp;memb___id={$findAccountsOnline->memb___id}'>".LDPA_GAME_DISCONNECT_TEXT_DISCONNECT."</a></td>
                            </tr>";
            }          
            $tempTpl .= "<tr><td colspan='5'><em><strong>".LDPA_GAME_DISCONNECT_TEXT_TOTAL_ONLINES.": ".(int)$i." </strong></em></td></tr></table>";
            
            $ldTpl->set("RESULTTPL", $tempTpl);  
        }
        private function optionLoadGameMsgSpecific()
        {
            global $ldTpl, $TABLES_CONFIGS, $PANELADMIN_MODULE;
            if($_GET['action'] == "sendMsg")
            {
                require("modules/classes/ldnetwork.class.php");
                require("modules/classes/ldgame.class.php");
                if(isset($_POST['usernames']) == false)
                    $tempTpl .= "<script type=\"text/javascript\"> alert(\"".LDPA_GAME_MSG_SPECIFIC_SELECT_ANY_USER."\"); </script>";
                elseif(empty($_POST['message']) == true || strlen($_POST['message']) > 60)
                    $tempTpl .= "<script type=\"text/javascript\"> alert(\"".LDPA_GAME_MSG_SPECIFIC_INVALID_SIZE_TEXT."\"); </script>";
                else
                {    
                    $ldGame = new ldGame($PANELADMIN_MODULE['JOINSERVER']['IP'], $PANELADMIN_MODULE['JOINSERVER']['PORT']);               
                    foreach($_POST['usernames'] as $username)
                    {
                        $ldGame->sendMessage($username, $_POST['message']);
                    }             
                    $tempTpl .= "<script type=\"text/javascript\"> alert(\"".LDPA_GAME_MSG_SPECIFIC_TEXT_SEND_SUCCESS."\"); </script>"; 
                    $this->writeLog(20, "", "", LDPA_GAME_MSG_SPECIFIC_LOG_SEND_SUCCESS.": ". $_POST['message']);
                }
                
            }

            $tempTpl .= "<form action='?page=paneladmin&option=GAME_MSG_SPECIFIC&action=sendMsg' method='post'>
                         <table border='0' width='100%'>
                          <tr>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_GAME_MSG_SPECIFIC_TEXT_LOGIN."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_GAME_MSG_SPECIFIC_TEXT_CHARACTER."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_GAME_MSG_SPECIFIC_TEXT_CONNECT_TM."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_GAME_MSG_SPECIFIC_TEXT_SERVER."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_GAME_MSG_SPECIFIC_TEXT_SEND."</strong></td>
                          </tr>";
            $findAccountsOnlineQ = $this->query("Use ".DATABASE_ACCOUNTS."; SELECT MEMB_STAT.memb___id, MEMB_STAT.ConnectTM, MEMB_STAT.ServerName, AccountCharacter.GameIDC FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT JOIN ".DATABASE_CHARACTERS.".dbo.AccountCharacter ON (MEMB_STAT.memb___id = AccountCharacter.Id) WHERE MEMB_STAT.ConnectStat = 1 ");          
            while($findAccountsOnline = mssql_fetch_object($findAccountsOnlineQ))
            {
                ++$i;
                $checkVipQ = $this->query("Use ".DATABASE."; SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $findAccountsOnline->memb___id ."'");
                $checkVip = mssql_fetch_object($checkVipQ);
                
                $tempTpl .= "<tr id='rowDc{$i}'>
                              <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->memb___id."</td>
                              <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->GameIDC."</td>
                              <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->ConnectTM."</td>
                              <td align='center' bgcolor='#EDEBDC'>".$findAccountsOnline->ServerName."</td>
                              <td align='center' bgcolor='#EDEBDC'><input type=\"checkbox\" name=\"usernames[]\" value=\"{$findAccountsOnline->memb___id}\" /></td>
                            </tr>";
            }          
            $tempTpl .= "<tr><td colspan='5'><em><strong>".LDPA_GAME_MSG_SPECIFIC_TEXT_TOTAL_ONLINES.": ".(int)$i." </strong></em></td></tr>";
            $tempTpl .= "<tr><td colspan='5'><em><strong>".LDPA_GAME_MSG_SPECIFIC_TEXT_MESSAGE.": </strong></em><input type=\"text\" name=\"message\" value=\"".LDPA_GAME_MSG_SPECIFIC_TEXT_MESSAGE."\" maxlength=\"60\" /><input type=\"submit\" value=\"".LDPA_GAME_MSG_SPECIFIC_TEXT_SUBMIT."\" class=\"button\" /></td></tr></table></form>";
            
            $ldTpl->set("RESULTTPL", $tempTpl);  
        }
        private function optionLoadGameMsgAll()
        {
            global $ldTpl, $TABLES_CONFIGS, $PANELADMIN_MODULE;
            if($_GET['action'] == "sendMsg")
            {
                require("modules/classes/ldnetwork.class.php");
                require("modules/classes/ldgame.class.php");
                
                if(empty($_POST['message']) == true || strlen($_POST['message']) > 60)
                    $tempTpl .= "<script type=\"text/javascript\"> alert(\"".LDPA_GAME_MSG_SPECIFIC_INVALID_SIZE_TEXT."\"); </script>";
                else
                {    
                    $ldGame = new ldGame($PANELADMIN_MODULE['JOINSERVER']['IP'], $PANELADMIN_MODULE['JOINSERVER']['PORT']);               
                    if($ldGame->sendMessageToAll($_POST['message']) == true)
                        $tempTpl .= "<script type=\"text/javascript\"> alert(\"".LDPA_GAME_MSG_ALL_TEXT_SEND_SUCCESS."\"); </script>";
                    else
                        $tempTpl .= "<script type=\"text/javascript\"> alert(\"".LDPA_GAME_MSG_ALL_TEXT_SEND_ERROR."\"); </script>"; 
                        
                    $this->writeLog(19, "", "", LDPA_GAME_MSG_ALL_LOG_SEND_SUCCESS.": ". $_POST['message']);
                }
            }

            $tempTpl .= "<form action='?page=paneladmin&option=GAME_MSG_ALL&action=sendMsg' method='post'>
                         <table border='0' width='100%'>
                         <tr><td>
                            <em><strong>".LDPA_GAME_MSG_SPECIFIC_TEXT_MESSAGE.": </strong></em>
                            <input type=\"text\" name=\"message\" value=\"".LDPA_GAME_MSG_SPECIFIC_TEXT_MESSAGE."\" maxlength=\"60\" />
                            <input type=\"submit\" value=\"".LDPA_GAME_MSG_SPECIFIC_TEXT_SUBMIT."\" class=\"button\" />
                         </td></tr>
                         </table></form>";
            
            $ldTpl->set("RESULTTPL", $tempTpl);  
        } 
        public function getChatText($str, $hash)
        {
            $newStr = NULL;
            $str = base64_decode($str);
            for($i = 0, $y = strlen($str); $i < $y; $i++)
            {
                $newStr .= $str{$i} ^ $hash{ ( $i % strlen($hash) ) };
            }
            return $newStr;   
        } 
        private function optionLoadGameChatServer()
        {
            global $ldTpl, $TABLES_CONFIGS, $PANELADMIN_MODULE;
            if($_GET['action'] == "clearLog")
            {
                 $this->query("TRUNCATE TABLE [dbo].[webChatServer]");
                 $tempTpl .= "<script> alert('".LDPA_CHAT_SERVER_TEXT_TRUNCATE_LOG."'); </script>";
            }

            $tempTpl .= "<table border='0' width='100%'>
                          <tr>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_CHAT_SERVER_TEXT_DATA."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_CHAT_SERVER_TEXT_TYPE."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_CHAT_SERVER_TEXT_NAME."</strong></td>
                           <td align='center' bgcolor='#E2DEC5'><strong>".LDPA_CHAT_SERVER_TEXT_MESSAGE."</strong></td>
                          </tr>";
            if(isset($_GET['loadLasts']) == false)
                $loadTop = 50;
            else
                $loadTop = (int) $_GET['loadLasts'];
                
            $findChatsQ = $this->query("SELECT TOP {$loadTop} [id],CONVERT(varchar, [dateSay], 103) [dateSayDay],CONVERT(varchar, [dateSay], 108) [dateSayHour],[server],[type],[name],[message],[destiny],DATEDIFF(minute, [dateSay], getDate()) [sayTime] FROM [dbo].[webChatServer] ORDER BY [id] DESC");          
            while($findChats = mssql_fetch_object($findChatsQ))
            {
                switch($findChats->type)
                {
                    case 0: $findChats->type = LDPA_CHAT_MSG_TYPE_CHAT; break;   
                    case 1: $findChats->type = LDPA_CHAT_MSG_TYPE_PARTY; break;   
                    case 2: $findChats->type = LDPA_CHAT_MSG_TYPE_GUILD; break;   
                    case 3: $findChats->type = LDPA_CHAT_MSG_TYPE_GLOBAL; break;   
                    case 4: $findChats->type = LDPA_CHAT_MSG_TYPE_ANUNGUILD; break;   
                    case 5: $findChats->type = LDPA_CHAT_MSG_TYPE_WHISPER; break;   
                    case 6: $findChats->type = LDPA_CHAT_MSG_TYPE_ALlIANCE; break;   
                    case 7: $findChats->type = LDPA_CHAT_MSG_TYPE_GM; break;   
                    case 8: $findChats->type = LDPA_CHAT_MSG_TYPE_POST; break;   
                }
                $tempTpl .= "<tr>
                              <td align='center' bgcolor='#EDEBDC'>".$findChats->dateSayDay." ".$findChats->dateSayHour."</td>
                              <td align='center' bgcolor='#EDEBDC'>".$findChats->type."</td>
                              <td align='center' bgcolor='#EDEBDC'>".$findChats->name."</td>
                              <td bgcolor='#EDEBDC'>".$this->getChatText($findChats->message, "c5ad7c480a66d30ef7b3ce0d3162d3ef")."</td>
                            </tr>";
            }          
            $tempTpl .= "</table></form>";
            
            $ldTpl->set("RESULTTPL", $tempTpl);  
        }
        private function createHashSerial() 
        { 
            return strtoupper(substr(md5(rand(0,10000)),0,4)); 
        }
        private function checkExistHash()
        {                                 
            $checkExistsQ = $this->query("SELECT 1 FROM [dbo].[webGoldenArcher] WHERE [pserial1] = '". $this->SerialPart1 ."' AND [pserial2] = '". $this->SerialPart2 ."' AND [pserial3] = '". $this->SerialPart3 ."'");
            return mssql_num_rows($checkExistsQ);
        }
        private function createSerial() 
        {
            $cond = 1; 
            while($cond <> 0) 
            {             
                $this->SerialPart1 = $this->createHashSerial(); 
                                                                 
                $this->SerialPart2 = $this->createHashSerial();
                                                                 
                $this->SerialPart3 = $this->createHashSerial(); 
                
                $cond = $this->checkExistHash();
            }
            return array($this->SerialPart1, $this->SerialPart2, $this->SerialPart3);
        }
        private function optionLoadGoldenArcher()
        {
            global $ldTpl;
            $tmpResponse = null;
            
            if($_GET['action'] == "createSerial")
            {
                
                require_once("ldItemClass/ldItemOptionsDatabase.class.php");
                require_once("ldItemClass/ldItemDatabase.class.php");
                require_once("ldItemClass/ldItemMake.class.php");

                // Gerar / Carregar banco de dados
                ldItemDatabase::setDatabases("modules/", "item.txt", "classes/ldItemClass/data/item.serialize.txt");
                if(ldItemDatabase::checkDatabaseExists() == false)
                {
                    ldItemDatabase::createDatabase();   
                }
                if(ldItemDatabase::checkDatabaseExists() == false)
                {
                    exit(LDPU_VIRTUAL_VAULT_CANT_LOAD_DB);   
                }
                //var_dump(ldItemDatabase::$dbItem);
                
                $tmpResponse .= "<div style='padding: 10px;'>";
                $tmpResponse .= "<ul><li>Digite abaixo os dados do item que você deseja gerar.</li></ul><br />";
                $tmpResponse .= "<form action='?page=paneladmin&option=GOLDEN_ARCHER&action=createSerialWrite' method='post'>";
                $tmpResponse .= "<table style='width: 100%;'>";
                $tmpResponse .= "<tr><td style='width: 150px;'><strong>O serial equivale ao item:</strong></td><td><select name='item'>";
                foreach(ldItemDatabase::$dbItem as $indexCategorie => $categorie)
                {
                    if(is_array($categorie) == false) continue;
                    foreach($categorie as $indexItem => $item)
                    {
                        $tmpResponse .= "<option value='".$indexCategorie.",".$indexItem."'>".$item["Name"]."</option>\n";
                    }
                }
                $tmpResponse .= "</select></td></tr>";
                $tmpResponse .= "<tr><td style='width: 150px;'><strong>Level:</strong></td><td><select name='itemLevel'>";
                for($iLevel = 0; $iLevel < 16; $iLevel++) $tmpResponse .= "<option value='".$iLevel."'>+".$iLevel."</option>\n";
                $tmpResponse .= "</select></td></tr>";
                $tmpResponse .= "<tr><td style='width: 150px;'><strong>Adicional:</strong></td><td><select name='itemOption'>";
                for($iOption = 0; $iOption < 8; $iOption++) $tmpResponse .= "<option value='".$iOption."'>+".($iOption * 4)."</option>\n";
                $tmpResponse .= "</select></td></tr>";
                $tmpResponse .= "<tr><td style='width: 150px;'><strong>Skill:</strong></td><td><input name='itemSkill' type='checkbox' value='1'></td></tr>";
                $tmpResponse .= "<tr><td style='width: 150px;'><strong>Luck:</strong></td><td><input name='itemLuck' type='checkbox' value='1'></td></tr>";
                $tmpResponse .= "<tr>
                                    <td style='width: 150px;'><strong>Excelente:</strong></td><td>
                                        <input name='excellent1' type='checkbox' value='1'> Opção excelente 1<br />
                                        <input name='excellent2' type='checkbox' value='1'> Opção excelente 2<br />
                                        <input name='excellent3' type='checkbox' value='1'> Opção excelente 3<br />
                                        <input name='excellent4' type='checkbox' value='1'> Opção excelente 4<br />
                                        <input name='excellent5' type='checkbox' value='1'> Opção excelente 5<br />
                                        <input name='excellent6' type='checkbox' value='1'> Opção excelente 6
                                    </td>
                                 </tr>";
                $tmpResponse .= "<tr>
                                    <td style='width: 150px;'><strong>Anciente:</strong></td><td>
                                        <select name='ancient'>
                                            <option value='0'>Não</option>
                                            <option value='1'>Ancient 1</option>
                                            <option value='2'>Ancient 2</option>
                                        </select>
                                    </td>
                                 </tr>";
                $tmpResponse .= "<tr><td style='width: 150px;'><strong>Refine:</strong></td><td><input name='refine' type='checkbox' value='1'></td></tr>";
                $tmpResponse .= "<tr><td style='width: 150px;'><strong>Harmony:</strong></td><td><select name='harmony'>";
                for($iHarmonyFamily = 1; $iHarmonyFamily < 4; $iHarmonyFamily++)
                {
                    for($iHarmonyType = 0; $iHarmonyType < 16; $iHarmonyType++)
                    {
                        for($iHarmonyLevel = 0; $iHarmonyLevel < 16; $iHarmonyLevel++)
                        {
                            $tmpResponse .= "<option value='".$iHarmonyType.",".$iHarmonyLevel."'>". ldItemOptionsDatabase::getHarmony($iHarmonyFamily, $iHarmonyType, $iHarmonyLevel) ."</option>\n";
                        }
                    }
                }
                $tmpResponse .= "</select>(Atenção para não selecionar uma opção não suportada pelo item)</td></tr>";
                $socketOptions = ldItemOptionsDatabase::getSocket();
                foreach($socketOptions["socketTypeNumber"] as $socketType => $socket)
                {
                    for($socketArgs = 1; $socketArgs <= 5; $socketArgs++)
                    {
                        if($socketOptions["socketTypeNumber"][$socketType]["socketTypeName"] == "No socket" || $socketOptions["socketTypeNumber"][$socketType]["socketTypeName"] == "Empty socket") continue;
                        
                        $tmpSocket[$socketArgs] .= "<option value='". ($socketType + (($socketArgs-1)*50)) ."'>".$socketOptions["socketTypeNumber"][$socketType]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][$socketType]["socketName"] ." + ".$socketOptions["socketTypeNumber"][$socketType]["socketsArgs"][$socketArgs]."</option>\n";
                    }
                }
                $tmpResponse .= "<tr>
                                    <td style='width: 150px;'><strong>Sockets:</strong></td>
                                    <td>
                                        Socket 1: <select name='socket1'><option value='".$socketOptions["notSocket"]."'>No Socket</option><option value='".$socketOptions["emptySocket"]."'>Empty Socket</option>{$tmpSocket[1]}</select><br />
                                        Socket 2: <select name='socket2'><option value='".$socketOptions["notSocket"]."'>No Socket</option><option value='".$socketOptions["emptySocket"]."'>Empty Socket</option>{$tmpSocket[2]}</select><br />
                                        Socket 3: <select name='socket3'><option value='".$socketOptions["notSocket"]."'>No Socket</option><option value='".$socketOptions["emptySocket"]."'>Empty Socket</option>{$tmpSocket[3]}</select><br />
                                        Socket 4: <select name='socket4'><option value='".$socketOptions["notSocket"]."'>No Socket</option><option value='".$socketOptions["emptySocket"]."'>Empty Socket</option>{$tmpSocket[4]}</select><br />
                                        Socket 5: <select name='socket5'><option value='".$socketOptions["notSocket"]."'>No Socket</option><option value='".$socketOptions["emptySocket"]."'>Empty Socket</option>{$tmpSocket[5]}</select><br />
                                    </td>
                                 </tr>";
                $tmpResponse .= "<tr><td colspan='2'><strong>Tenha bastante atenção ao selecionar as opções acima para não selecionar alguma opção que o item desejado não tenha suporte para a mesma dentro do jogo.</strong></td></tr>";
                $tmpResponse .= "<tr><td style='width: 150px;'><strong>Login contemplado:</strong></td><td><input name='memb___id' type='text' value='' maxlength='10'></td></tr>";
                $tmpResponse .= "<tr><td colspan='2'><input type='submit' value='Criar serial' class='button' /></td></tr>";
                $tmpResponse .= "</table>";
                $tmpResponse .= "</form>";
                $tmpResponse .= "</div>";
                
            }
            elseif($_GET['action'] == "createSerialWrite")
            {
                if(empty($_POST['memb___id']) == true)
                {
                    $tmpResponse .= "<div style='padding: 10px;'>";
                    $tmpResponse .= "<ul>";
                    $tmpResponse .= "<li><strong>Preencha o login corretamente!</strong></li>";
                    $tmpResponse .= "</ul>";
                    $tmpResponse .= "</div>";
                }
                else
                {
                    $_POST['item'] = explode(",", $_POST['item']);
                    $_POST['harmony'] = explode(",", $_POST['harmony']);
                    
                    $serialFinal = $this->createSerial();
                    
                    $this->query("INSERT INTO [dbo].[webGoldenArcher] ([username],[pserial1],[pserial2],[pserial3],[status],[itemCategorie],[itemIndex],[itemLevel],[itemOption],[itemSkill],[itemLuck],[excellent1],[excellent2],[excellent3],[excellent4],[excellent5],[excellent6],[ancient],[refine],[harmonyType],[harmonyLevel],[socketOp1],[socketOp2],[socketOp3],[socketOp4],[socketOp5])
                                  VALUES
                                       ('".$_POST['memb___id']."'
                                       ,'".$serialFinal[0]."'
                                       ,'".$serialFinal[1]."'
                                       ,'".$serialFinal[2]."'
                                       ,0
                                       ,". (int)$_POST['item'][0] ."
                                       ,". (int)$_POST['item'][1] ."
                                       ,". (int)$_POST['itemLevel'] ."
                                       ,". (int)$_POST['itemOption'] ."
                                       ,". (int)$_POST['itemSkill'] ."
                                       ,". (int)$_POST['itemLuck'] ."
                                       ,". (int)$_POST['excellent1'] ."
                                       ,". (int)$_POST['excellent2'] ."
                                       ,". (int)$_POST['excellent3'] ."
                                       ,". (int)$_POST['excellent4'] ."
                                       ,". (int)$_POST['excellent5'] ."
                                       ,". (int)$_POST['excellent6'] ."
                                       ,". (int)$_POST['ancient'] ."
                                       ,". (int)$_POST['refine'] ."
                                       ,". (int)$_POST['harmony'][0] ."
                                       ,". (int)$_POST['harmony'][1] ."
                                       ,". (int)$_POST['socket1'] ."
                                       ,". (int)$_POST['socket2'] ."
                                       ,". (int)$_POST['socket3'] ."
                                       ,". (int)$_POST['socket4'] ."
                                       ,". (int)$_POST['socket5'] .")");
                                       
                    $tmpResponse .= "<div style='padding: 10px;'>";
                    $tmpResponse .= "<ul>";
                    $tmpResponse .= "<li><strong>Serial gerado com sucesso!</strong></li>";
                    $tmpResponse .= "<li>Serial: <strong>".$serialFinal[0]."-".$serialFinal[1]."-".$serialFinal[2]."</strong></li>";
                    $tmpResponse .= "</ul>";
                    $tmpResponse .= "</div>";
                }
            }
                        
            $ldTpl->set("RESPONSE_WRITE", $tmpResponse);
        }
        
        
        private function uploadPicture(array $file, $width, $height, $path, $name = false)
        {
            require("dlimage.class.php");
            $dlImage = new DLImage();
            if($dlImage->uploadImage($file, true, $path) == true)
            {
                 if($dlImage->info['width'] > $width)
                    $common = $dlImage->resizeAndSave($width,0, false, true, false, $path, "jpg", false, 'large', $name);
                 else
                 {
                    $dlImage->saveImage(false, $path, 'jpg', 'large', $name);
                    $common = array(0 => NULL, $width, $height);
                 }
                 $small = $dlImage->resizeAndSave(150, 150, false, true, false, $path, "jpg", false, 'small', $name);
                 $dlImage->deleteBufferImage();
                 
                 return true;
            }
            return false;
        }
        
        private function optionLoadAuctionsAdd()
        {
            global $ldTpl;
            $tempResponse = null;
            $tempForm = "<form action=\"?page=paneladmin&amp;option=ADD_AUCTIONS&amp;Write=true\" method=\"post\" enctype=\"multipart/form-data\">        
                            <em>".LDPA_AUCTIONS_ADD_NAME_AUCTION.":</em><br /><input name=\"name\" type=\"text\" class=\"inputbox\" value=\"{$_POST['name']}\" /> <br />
                            <em>".LDPA_AUCTIONS_ADD_PREMIUM.":</em><br /><input name=\"premium\" type=\"text\" class=\"inputbox\" value=\"{$_POST['premium']}\" /> <br />
                            <em>".LDPA_AUCTIONS_ADD_PHOTO.":</em><br /><input name=\"photo\" type=\"file\" class=\"inputbox\" /> <br />
                            <em>".LDPA_AUCTIONS_ADD_DATE_BEGIN.":</em><br /><input name=\"startDate\" type=\"text\" class=\"inputbox\" value=\"{$_POST['startDate']}\" /> ".LDPA_AUCTIONS_ADD_SAMPLE1." <br />
                            <em>".LDPA_AUCTIONS_ADD_DATE_END.":</em><br /><input name=\"endDate\" type=\"text\" class=\"inputbox\" value=\"{$_POST['endDate']}\" /> ".LDPA_AUCTIONS_ADD_SAMPLE2." <br />
                            <em>".LDPA_AUCTIONS_ADD_ACTIVE.":</em><input name=\"active\" type=\"checkbox\" class=\"inputbox\" value=\"1\" ".($_POST['active'] == 1 ? "checked=\"checked\"" : null)." /> <br />
                            <em>".LDPA_AUCTIONS_ADD_MIN_BID.":</em><br /><input name=\"minimumBid\" type=\"text\" class=\"inputbox\" value=\"{$_POST['minimumBid']}\" /> <br /> 
                            <input type=\"submit\" value=\"".LDPA_AUCTIONS_ADD_SUBMIT."\" class=\"button\" style=\"margin-top: 6px;\" />
                         </form>";
            if($_GET['Write'] == "true")
            {
                try                                   
                {                                
                    if(empty($_POST['name']) == true)
                        throw new Exception(LDPA_AUCTIONS_ADD_FILL_NAME, 1);
                    if(empty($_POST['premium']) == true)
                        throw new Exception(LDPA_AUCTIONS_ADD_FILL_PREMIUM, 1);
                    if($_FILES["photo"]["error"] == 4)
                        throw new Exception(LDPA_AUCTIONS_ADD_FILL_PHOTO, 1);
                    if(empty($_POST['startDate']) == true)
                        throw new Exception(LDPA_AUCTIONS_ADD_FILL_DATE_BEGIN, 1);  
                    if(empty($_POST['endDate']) == true)
                        throw new Exception(LDPA_AUCTIONS_ADD_FILL_DATE_END, 1); 
                    if(empty($_POST['minimumBid']) == true)
                        throw new Exception(LDPA_AUCTIONS_ADD_FILL_MIN_BID, 1);
                    if(is_numeric($_POST['minimumBid']) == false || $_POST['minimumBid'] <= 0)
                        throw new Exception(LDPA_AUCTIONS_ADD_FILL_BID_VALID_NUMBER, 1);
                    
                    $increment = $this->query("SELECT IDENT_CURRENT('webAuctions') [increment]");
                    $increment = mssql_fetch_object($increment)->increment + 1;
                    
                    if($this->uploadPicture($_FILES['photo'], 800, 600, "modules/uploads/auctions/", $increment) == false)
                        throw new Exception(LDPA_AUCTIONS_ADD_ERROR_SEND_PHOTO, 1);
                        
                    $startDate = explode(" ", $_POST['startDate']);
                    $startDate[0] = explode("/", $startDate[0]);
                    $startDate[1] = explode(":", $startDate[1]);
                    $startDate = mktime($startDate[1][0], $startDate[1][1], $startDate[1][2], $startDate[0][1], $startDate[0][0], $startDate[0][2]);
                    
                    $endDate = explode(" ", $_POST['endDate']);
                    $endDate[0] = explode("/", $endDate[0]);
                    $endDate[1] = explode(":", $endDate[1]);
                    $endDate = mktime($endDate[1][0], $endDate[1][1], $endDate[1][2], $endDate[0][1], $endDate[0][0], $endDate[0][2]);
                                                                      
                    
                    if($this->query("INSERT INTO [dbo].[webAuctions]
                                       ([name]
                                       ,[premium]
                                       ,[startDate]
                                       ,[endDate]
                                       ,[active]
                                       ,[minimumBid]
                                       ,[closed])
                                 VALUES
                                       ('".$_POST['name']."'
                                       ,'".$_POST['premium']."'
                                       ,".$startDate."
                                       ,".$endDate."
                                       ,".(int)$_POST['active']."
                                       ,".$_POST['minimumBid']."
                                       ,0)") == true)
                                       {
                                           throw new Exception(LDPA_AUCTIONS_ADD_AUCTION_ADD_SUCCESS, 2);
                                       }
                                       else
                                       {    
                                           throw new Exception(LDPA_AUCTIONS_ADD_AUCTION_ADD_ERROR, 1);
                                       }  
                }
                catch(Exception $msg)
                {                                                                                  
                    if($msg->getCode() == 1)
                    {
                        
                        $tempResponse = $tempForm . "<div class=\"qdestaques\">".$msg->getMessage()."</div>";
                    }
                    if($msg->getCode() == 2)
                    {
                        $tempResponse = "<div class=\"qdestaques2\">".$msg->getMessage()."</div>";
                    }
                }
            }
            else
                $tempResponse = $tempForm;
            
            $ldTpl->set("RESULTTPL", $tempResponse);
        }
        private function optionLoadAuctionsEdit()
        {
            global $ldTpl;
            $tempResponse = null;
            if($_GET['action'] == "load")
            {
                try
                {    
                    if($_POST['Write'] == "true")
                    {
                        if(empty($_POST['name']) == true)
                            throw new Exception(LDPA_AUCTIONS_EDIT_FILL_ACTION_NAME, 1);
                        if(empty($_POST['premium']) == true)
                            throw new Exception(LDPA_AUCTIONS_EDIT_PREMIUM, 1);         
                        if(empty($_POST['startDate']) == true)
                            throw new Exception(LDPA_AUCTIONS_EDIT_FILL_DATE_BEGIN, 1);  
                        if(empty($_POST['endDate']) == true)
                            throw new Exception(LDPA_AUCTIONS_EDIT_FILL_DATE_END, 1); 
                        if(empty($_POST['minimumBid']) == true)
                            throw new Exception(LDPA_AUCTIONS_EDIT_FILL_MIN_BID, 1);
                        if(is_numeric($_POST['minimumBid']) == false || $_POST['minimumBid'] <= 0)
                            throw new Exception(LDPA_AUCTIONS_EDIT_FILL_BID_VALID_NUMBER, 1);
                        
                        $startDate = explode(" ", $_POST['startDate']);
                        $startDate[0] = explode("/", $startDate[0]);
                        $startDate[1] = explode(":", $startDate[1]);
                        $startDate = mktime($startDate[1][0], $startDate[1][1], $startDate[1][2], $startDate[0][1], $startDate[0][0], $startDate[0][2]);
                        
                        $endDate = explode(" ", $_POST['endDate']);
                        $endDate[0] = explode("/", $endDate[0]);
                        $endDate[1] = explode(":", $endDate[1]);
                        $endDate = mktime($endDate[1][0], $endDate[1][1], $endDate[1][2], $endDate[0][1], $endDate[0][0], $endDate[0][2]);
                        
                        $this->query("UPDATE [dbo].[webAuctions]
                                       SET [name] = '".$_POST['name']."'
                                          ,[premium] = '".$_POST['premium']."'
                                          ,[startDate] = ".$startDate."
                                          ,[endDate] = ".$endDate."
                                          ,[active] = ".(int)$_POST['active']."
                                          ,[minimumBid] = ".$_POST['minimumBid']."
                                     WHERE [id] = ". (int) $_POST['auction']);
                                     
                        if($_FILES["photo"]["error"] != 4)
                        {
                            if($this->uploadPicture($_FILES['photo'], 800, 600, "modules/uploads/auctions/", (int)$_POST['auction']) == false)
                                throw new Exception(LDPA_AUCTIONS_EDIT_ERROR_SEND_PHOTO, 1);
                        }
                                     
                        throw new Exception(LDPA_AUCTIONS_EDIT_SUCCESS_EDIT, 2);
                        
                    }
                    $getAuction = $this->query("SELECT [name]
                                                      ,[premium]
                                                      ,[startDate]
                                                      ,[endDate]
                                                      ,[active]
                                                      ,[minimumBid]
                                                      ,[closed]
                                                FROM [dbo].[webAuctions] WHERE [id] = ". (int) $_POST['auction']);
                    if(mssql_num_rows($getAuction) == 0)
                        throw new Exception(LDPA_AUCTIONS_EDIT_AUCTION_NOT_FOUND, 3);
                    
                    $getAuction = mssql_fetch_object($getAuction);
                        
                    $tempForm = "<form action=\"?page=paneladmin&amp;option=EDIT_AUCTIONS&amp;action=load&amp;Write=true\" method=\"post\" enctype=\"multipart/form-data\">        
                                    <em>".LDPA_AUCTIONS_ADD_NAME_AUCTION.":</em><br /><input name=\"name\" type=\"text\" class=\"inputbox\" value=\"{$getAuction->name}\" /> <br />
                                    <em>".LDPA_AUCTIONS_ADD_PREMIUM.":</em><br /><input name=\"premium\" type=\"text\" class=\"inputbox\" value=\"{$getAuction->premium}\" /> <br />
                                    <em>".LDPA_AUCTIONS_ADD_PHOTO.":</em><br /><img src=\"modules/uploads/auctions/{$_POST['auction']}.small.jpg\" /><br /><input name=\"photo\" type=\"file\" class=\"inputbox\" /> <br />
                                    <em>".LDPA_AUCTIONS_ADD_DATE_BEGIN.":</em><br /><input name=\"startDate\" type=\"text\" class=\"inputbox\" value=\"".date("d/m/Y G:i:s", $getAuction->startDate)."\" /> ".LDPA_AUCTIONS_ADD_SAMPLE1." <br />
                                    <em>".LDPA_AUCTIONS_ADD_DATE_END.":</em><br /><input name=\"endDate\" type=\"text\" class=\"inputbox\" value=\"".date("d/m/Y G:i:s", $getAuction->endDate)."\" /> ".LDPA_AUCTIONS_ADD_SAMPLE2." <br />
                                    <em>".LDPA_AUCTIONS_ADD_ACTIVE.":</em><input name=\"active\" type=\"checkbox\" class=\"inputbox\" value=\"1\" ".($getAuction->active == 1 ? "checked=\"checked\"" : null)." /> <br />
                                    <em>".LDPA_AUCTIONS_ADD_MIN_BID.":</em><br /><input name=\"minimumBid\" type=\"text\" class=\"inputbox\" value=\"{$getAuction->minimumBid}\" /> <br /> 
                                    <input name=\"auction\" type=\"hidden\" value=\"{$_POST['auction']}\" />
                                    <input name=\"Write\" type=\"hidden\" value=\"true\" />
                                    <input type=\"submit\" value=\"".LDPA_AUCTIONS_EDIT_EDIT_SUBMIT."\" class=\"button\" style=\"margin-top: 6px;\" />
                                 </form>";
                    throw new Exception("", 0);
                }
                catch(Exception $msg)
                {                                                                                  
                    if($msg->getCode() == 1)
                        $tempResponse = $tempForm."<div class=\"qdestaques\">".$msg->getMessage()."</div>";   
                    if($msg->getCode() == 2)
                        $tempResponse = $tempForm."<div class=\"qdestaques2\">".$msg->getMessage()."</div>";
                    if($msg->getCode() == 3)
                        $tempResponse = "<div class=\"qdestaques\">".$msg->getMessage()."</div>";
                    if($msg->getCode() == 0)
                        $tempResponse = $tempForm;
                }
            }
            else
            {
                $tempList = null;
                $list = $this->query("SELECT [id], [name] FROM [dbo].[webAuctions] ORDER BY [id] DESC");
                while($listReader = mssql_fetch_object($list))
                {
                    $tempList .= "<option value='{$listReader->id}'>{$listReader->name}</option>";
                }
                $tempResponse = "<form action=\"?page=paneladmin&amp;option=EDIT_AUCTIONS&amp;action=load\" method=\"post\">        
                                    ".LDPA_AUCTIONS_EDIT_SELECT_AUCTION_FOR_EDIT.":<br />
                                    <select name=\"auction\">
                                        {$tempList}  
                                    </select>
                                    <input type=\"submit\" value=\"".LDPA_AUCTIONS_EDIT_SUBMIT_LOAD."\" class=\"button\" style=\"margin-top: 6px;\" />
                                 </form> ";   
            }                                        
            
            $ldTpl->set("RESULTTPL", $tempResponse);
        }
        private function optionLoadAuctionsRemove()
        {
            global $ldTpl;
            $tempResponse = null;
            if($_GET['action'] == "remove")
            {
                try
                {    
                    
                    $getAuction = $this->query("SELECT 1 FROM [dbo].[webAuctions] WHERE [id] = ". (int) $_POST['auction']);
                    if(mssql_num_rows($getAuction) == 0)
                        throw new Exception(LDPA_AUCTIONS_REMOVE_NOT_FOUND, 1);
                                                                                                                       
                    $delete = $this->query("DELETE FROM [dbo].[webAuctions] WHERE [id] = ". (int) $_POST['auction']);
                    $delete = $this->query("DELETE FROM [dbo].[webAuctionsBids] WHERE [auction] = ". (int) $_POST['auction']);
                                                                                             
                    @unlink("modules/uploads/auctions/".(int) $_POST['auction'].".large.jpg");
                    @unlink("modules/uploads/auctions/".(int) $_POST['auction'].".small.jpg");
                    
                    throw new Exception(LDPA_AUCTIONS_REMOVE_SUCCESS_REMOVE, 2);
                }
                catch(Exception $msg)
                {                                                                                  
                    if($msg->getCode() == 1)
                        $tempResponse = "<div class=\"qdestaques\">".$msg->getMessage()."</div>";
                    if($msg->getCode() == 2)       
                        $tempResponse = "<div class=\"qdestaques2\">".$msg->getMessage()."</div>";
                }
            }
            else
            {
                $tempList = null;
                $list = $this->query("SELECT [id], [name] FROM [dbo].[webAuctions] ORDER BY [id] DESC");
                while($listReader = mssql_fetch_object($list))
                {
                    $tempList .= "<option value='{$listReader->id}'>{$listReader->name}</option>";
                }
                $tempResponse = "<form action=\"?page=paneladmin&amp;option=DELETE_AUCTIONS&amp;action=remove\" method=\"post\">        
                                    ".LDPA_AUCTIONS_REMOVE_SELECT_AUCTION_FOR_REMOVE.":<br />
                                    <select name=\"auction\">
                                        {$tempList}  
                                    </select>
                                    <input type=\"submit\" value=\"".LDPA_AUCTIONS_REMOVE_SUBMIT_REMOVE."\" class=\"button\" style=\"margin-top: 6px;\" />
                                 </form> ";   
            }                                        
            
            $ldTpl->set("RESULTTPL", $tempResponse);
        }
        private function optionLoadAuctionsClose()
        {
            global $ldTpl, $TABLES_CONFIGS;
            $tempResponse = null;
            if($_GET['action'] == "close")
            {
                try
                {
                    $getAuction = $this->query("SELECT [id]
                                                  ,[name]
                                                  ,[premium]
                                                  ,[startDate]
                                                  ,[endDate]
                                                  ,[active]
                                                  ,[minimumBid]
                                                  ,[closed]
                                              FROM [dbo].[webAuctions] WHERE [id] = ". (int) $_POST['auction']);
                    if(mssql_num_rows($getAuction) == 0)
                        throw new Exception(LDPA_AUCTIONS_NOT_FOUND, 1);
                        
                    $getAuction = mssql_fetch_object($getAuction);
                        
                    if($getAuctions->closed == 1) $status = LDPA_AUCTIONS_STATUS_END;
                    elseif($getAuctions->startDate > time()) $status = LDPA_AUCTIONS_STATUS_WAIT_BEGIN;
                    elseif($getAuctions->startDate < time() && $getAuctions->endDate > time()) $status = LDPA_AUCTIONS_STATUS_IN_PROGRESS;
                    elseif($getAuctions->endDate < time()) $status = LDPA_AUCTIONS_STATUS_WAIT_PREMIUM;
                    else $status = LDPA_AUCTIONS_STATUS_ERROR; 
                    
                                                                                            
                             
                    $getAuctionBidTopsQ = $this->query("SELECT [id],[username],[amount],CONVERT(varchar, [lastBid], 103) [lastBidDay],CONVERT(varchar, [lastBid], 108) [lastBidHour] FROM [dbo].[webAuctionsBids] WHERE [auction] = ". (int) $_POST['auction'] ." ORDER BY [amount] DESC");
                    while($getAuctionBidTops = mssql_fetch_object($getAuctionBidTopsQ))
                    {
                        $findAccountPointsQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBCASH']['columnPoints']." as amount FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $getAuctionBidTops->username ."'");
                        $findAccountPoints = mssql_fetch_object($findAccountPointsQ);
                        if($findAccountPoints->amount < $getAuctionBidTops->amount)
                        {
                            $this->query("DELETE FROM [dbo].[webAuctionsBids] WHERE [auction] = ". (int) $_POST['auction'] ." AND [id] = ".(int)$getAuctionBidTops->id);
                            continue;
                        }
                        $tempTrTop .= "<tr><td>{$getAuctionBidTops->username}</td><td>{$getAuctionBidTops->amount}</td><td>{$getAuctionBidTops->lastBidDay} {$getAuctionBidTops->lastBidHour}</td></tr>";
                    }
                    
                    $getAuctionBidCount = $this->query("SELECT count(1) [count] FROM [dbo].[webAuctionsBids] WHERE [auction] = ". (int) $_POST['auction']);
                    $getAuctionBidCount = mssql_fetch_object($getAuctionBidCount)->count;
                                                                         
                    $getAuctionBidLast = $this->query("SELECT TOP 1 [username],[amount] FROM [dbo].[webAuctionsBids] WHERE [auction] = ". (int) $_POST['auction'] ." ORDER BY [amount] DESC");
                    $getAuctionBidLast = mssql_fetch_object($getAuctionBidLast);
                    
                    
                    $RespostWrite = "<table style='width: 100%;'>".
                                    "<tr><td style='width: 150px;'>".LDPA_AUCTIONS_CLOSE_ID.":</td><td><strong>{$getAuction->id}</strong></td></tr>".
                                    "<tr><td>".LDPA_AUCTIONS_CLOSE_NAME.":</td><td><strong>{$getAuction->name}</strong></td></tr>".
                                    "<tr><td>".LDPA_AUCTIONS_CLOSE_STATUS.":</td><td><strong>{$status}</strong></td></tr>".
                                    "<tr><td>".LDPA_AUCTIONS_CLOSE_DATE_BEGIN.":</td><td><strong>".date("d/m/Y G:i:s", $getAuction->startDate)."</strong></td></tr>".
                                    "<tr><td>".LDPA_AUCTIONS_CLOSE_DATE_END.":</td><td><strong>".date("d/m/Y G:i:s", $getAuction->endDate)."</strong></td></tr>".
                                    "<tr><td>".LDPA_AUCTIONS_CLOSE_MIN_BID.":</td><td><strong>{$getAuction->minimumBid} ".constant("POINTS_NAME")."</strong></td></tr>".
                                    "<tr><td>".LDPA_AUCTIONS_CLOSE_PREMIUM.":</td><td><strong>{$getAuction->premium}</strong></td></tr>".
                                    "<tr><td>".LDPA_AUCTIONS_CLOSE_PHOTO.":</td><td><a href=\"modules/uploads/auctions/{$getAuction->id}.large.jpg\" id=\"photoLarge_{$getAuction->id}\">
                                       <img src='modules/uploads/auctions/{$getAuction->id}.small.jpg' /></a>
                                       <script> \$(\"a#photoLarge_{$getAuction->id}\").fancybox();</script></td></tr>".
                                    "</table>".
                                    "<br/>".
                                    "<table style='width: 100%;'>".
                                    "<tr><td style='width: 150px;'>".LDPA_AUCTIONS_CLOSE_TOTAL_PLAYERS.":</td><td><strong>{$getAuctionBidCount}</strong></td></tr>".
                                    "<tr><td style='width: 150px;'>".LDPA_AUCTIONS_CLOSE_MAX_BID.":</td><td><strong>{$getAuctionBidLast->username} - {$getAuctionBidLast->amount} ".constant("POINTS_NAME")."</strong></td></tr>".
                                    "</table>".
                                    "<br/>".
                                    "<table style='width: 100%; text-align: center;'>".
                                    "<tr><td colspan='3' style=''><strong>".LDPA_AUCTIONS_CLOSE_TOP_10_BID."</strong></td></tr>".
                                    "<tr><td style='width: 150px;'>".LDPA_AUCTIONS_CLOSE_USERNAME."</td><td>".LDPA_AUCTIONS_CLOSE_BID_IN." ".constant("POINTS_NAME")."</td><td>".LDPA_AUCTIONS_CLOSE_DATE_HOUR."</td></tr>".
                                    $tempTrTop.
                                    "</table>".
                                    "<br/>".
                                    "<form action='?page=paneladmin&option=CLOSE_AUCTIONS&action=save' method='post'>".
                                    "<table style='width: 100%; text-align: center;'>".
                                    "<tr><td><strong>".LDPA_AUCTIONS_CLOSE_TEXT_WINNER.":</strong></td><td><input type='text' class='inputbox' name='textPlayer' value='' style='width: 480px;' /></td></tr>".
                                    "<tr><td colspan='2'>
                                        <input name='auction' type='hidden' value='{$getAuction->id}' />
                                        <input name='winner' type='hidden' value='{$getAuctionBidLast->username}' />
                                        <input name='winnerAmount' type='hidden' value='{$getAuctionBidLast->amount}' />
                                        <input class='button' type='submit' value='".LDPA_AUCTIONS_CLOSE_CLOSE_SAVE."'/></td></tr>".
                                    "</table>";
                                    "</form>";
                    throw new Exception($RespostWrite, 0);
                }
                catch(Exception $msg)
                {                                                                     
                    switch($msg->getCode())
                    {
                        case 0:
                            $tempResponse = $msg->getMessage();
                            break;
                        case 1:
                            $tempResponse = "<div class=\"qdestaques\">".$msg->getMessage()."</div>";
                            break;
                    }
                }
            }
            elseif($_GET['action'] == "save")
            {
                try
                {
                    $getAuction = $this->query("SELECT 1 FROM [dbo].[webAuctions] WHERE [closed] = 0 AND [id] = ". (int) $_POST['auction']);
                    if(mssql_num_rows($getAuction) == 0)
                        throw new Exception(LDPA_AUCTIONS_CLOSE_NOT_FOUND_OR_CLOSED, 1);
                    
                    $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." SET ".$TABLES_CONFIGS['WEBCASH']['columnPoints']." = ".$TABLES_CONFIGS['WEBCASH']['columnPoints']." - ".(int) $_POST['winnerAmount']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $_POST['winner'] ."'");
                        
                    
                    $this->query("UPDATE [dbo].[webAuctions] SET [winner] = '".$_POST['winner']."', [winnerText] = '".$_POST['textPlayer']."', [closed] = 1 WHERE [id] = ". (int) $_POST['auction']);
                    
                    throw new Exception(LDPA_AUCTIONS_CLOSE_SUCCESS_CLOSED, 0);
                }
                catch(Exception $msg)
                {                                                                     
                    switch($msg->getCode())
                    {
                        case 0:                                  
                            $tempResponse = "<div class=\"qdestaques2\">".$msg->getMessage()."</div>";
                            break;
                        case 1:
                            $tempResponse = "<div class=\"qdestaques\">".$msg->getMessage()."</div>";
                            break;
                    }
                }
            }
            else
            {
                $tempList = null;
                $list = $this->query("SELECT [id], [name] FROM [dbo].[webAuctions] WHERE [closed] = 0 ORDER BY [id] DESC");
                while($listReader = mssql_fetch_object($list))
                {
                    $tempList .= "<option value='{$listReader->id}'>{$listReader->name}</option>";
                }
                $tempResponse = "<form action=\"?page=paneladmin&amp;option=CLOSE_AUCTIONS&amp;action=close\" method=\"post\">        
                                    ".LDPA_AUCTIONS_CLOSE_SELECT_AUCTION_FOR_CLOSE.":<br />
                                    <select name=\"auction\">
                                        {$tempList}  
                                    </select>
                                    <input type=\"submit\" value=\"".LDPA_AUCTIONS_CLOSE_INPUT_SELECT_CLOSE."\" class=\"button\" style=\"margin-top: 6px;\" />
                                 </form> ";   
            }                                        
            
            $ldTpl->set("RESULTTPL", $tempResponse);
        }
	}
}
?>