<?php            
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldPanelUser" ) == false ) {
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldPanelUser extends ldMssql {
		public function __construct()
		{
            global $ldTpl, $PANELUSER_PREMISSIONS;
			if(isset($_SESSION['LOGIN']) == false)
				return $ldTpl->open("templates/".TEMPLATE_DIR."/loginerror.tpl.php");
			
			$this->checkVipDate();
			$this->setPermissions();
			switch(strtoupper($_GET['option']))
			{
				case "MODIFY_DATA":
					if($PANELUSER_PREMISSIONS['MODIFY_DATA'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("MODIFY_DATA") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsModifyData();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[MODIFY_DATA].tpl.php");	
					break;
				case "CLEAN_VAULT":
					if($PANELUSER_PREMISSIONS['CLEAN_VAULT'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("CLEAN_VAULT") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsCleanVault();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[CLEAN_VAULT].tpl.php");	
					break;
                case "DOUBLE_VAULT":
                    if($PANELUSER_PREMISSIONS['DOUBLE_VAULT'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
                    if($this->checkPermissionModule("DOUBLE_VAULT") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");    
                    $this->loadOptionsDoubleVault();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DOUBLE_VAULT].tpl.php");    
                    break;
                case "VIRTUAL_VAULT":
                    if($PANELUSER_PREMISSIONS['VIRTUAL_VAULT'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
                    if($this->checkPermissionModule("VIRTUAL_VAULT") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");    
                    $this->loadOptionsVirtualVault();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[VIRTUAL_VAULT].tpl.php");    
                    break;
                case "GAME_DISCONNECT":
                    if($PANELUSER_PREMISSIONS['GAME_DISCONNECT'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
                    if($this->checkPermissionModule("GAME_DISCONNECT") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");    
                    $this->loadOptionsGameDisconnect();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[GAME_DISCONNECT].tpl.php");    
                    break;
                case "GOLDEN_ARCHER":
                    if($PANELUSER_PREMISSIONS['GOLDEN_ARCHER'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
                    if($this->checkPermissionModule("GOLDEN_ARCHER") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");    
                    $this->loadOptionsGoldenArcher();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[GOLDEN_ARCHER].tpl.php");    
                    break;
                case "COLLECTOR_POINTS":
                    if($PANELUSER_PREMISSIONS['COLLECTOR_POINTS'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
                    if($this->checkPermissionModule("COLLECTOR_POINTS") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");    
                    $this->loadOptionsCollectorPoints();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[COLLECTOR_POINTS].tpl.php");    
                    break;
                case "AUCTIONS":
                    if($PANELUSER_PREMISSIONS['AUCTIONS'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
                    if($this->checkPermissionModule("AUCTIONS") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");    
                    $this->loadOptionsAuctions();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[AUCTIONS].tpl.php");    
                    break;
                case "QUESTIONS_EVENT":
                    $this->loadOptionsQuestionsEvent();
                    exit(); //prevent check again
                    break;
				case "TRANSFER_CASH":
					$this->loadOptionsTransferCash();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[TRANSFER_CASH].tpl.php");	
					break;
				case "LOG_BUYS":
					if($PANELUSER_PREMISSIONS['LOG_BUYS'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("LOG_BUYS") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsLogBuys();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[LOG_BUYS].tpl.php");	
					break;
				case "MODIFY_PERSONALID":
					if($PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("MODIFY_PERSONALID") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsModifyPersonalID();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[MODIFY_PERSONALID].tpl.php");	
					break;   
                case "RESET":
                    if($PANELUSER_PREMISSIONS['RESET'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
                    if($this->checkPermissionModule("RESET") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");    
                    $this->loadOptionsReset();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[RESET].tpl.php");    
                    break;
                case "MASTER_RESET":
                    if($PANELUSER_PREMISSIONS['MASTER_RESET'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
                    if($this->checkPermissionModule("MASTER_RESET") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");    
                    $this->loadOptionsMasterReset();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[MASTER_RESET].tpl.php");    
                    break;
				case "RESET_TRANSFER":
					if($PANELUSER_PREMISSIONS['RESET_TRANSFER'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("RESET_TRANSFER") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsResetTransfer();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[RESET_TRANSFER].tpl.php");	
					break;
				case "CLEAN_PK":
					if($PANELUSER_PREMISSIONS['CLEAN_PK'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("CLEAN_PK") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsCleanPk();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[CLEAN_PK].tpl.php");	
					break;
				case "DISTRIBUTE_POINTS":
					if($PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("DISTRIBUTE_POINTS") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsDistributePoints();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DISTRIBUTE_POINTS].tpl.php");	
					break;
				case "MOVE_CHARACTER":
					if($PANELUSER_PREMISSIONS['MOVE_CHARACTER'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("MOVE_CHARACTER") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsMoveCharacter();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[MOVE_CHARACTER].tpl.php");	
					break;
				case "CHANGE_NICK":
					if($PANELUSER_PREMISSIONS['CHANGE_NICK'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("CHANGE_NICK") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsChangeNick();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[CHANGE_NICK].tpl.php");	
					break;
				case "CHANGE_CLASS":
					if($PANELUSER_PREMISSIONS['CHANGE_CLASS'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("CHANGE_CLASS") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsChangeClass();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[CHANGE_CLASS].tpl.php");	
					break;
				case "REDISTRIBUTE_POINTS":
					if($PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("REDISTRIBUTE_POINTS") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsRedistributePoints();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[REDISTRIBUTE_POINTS].tpl.php");	
					break;
                case "CLEAN_INVENTORY":
                    if($PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
                    if($this->checkPermissionModule("CLEAN_INVENTORY") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");    
                    $this->loadOptionsCleanInventory();
                    $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[CLEAN_INVENTORY].tpl.php");    
                    break;
				case "MANAGER_PHOTO":
					if($PANELUSER_PREMISSIONS['MANAGER_PHOTO'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("MANAGER_PHOTO") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsManagerPhoto();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[MANAGER_PHOTO].tpl.php");	
					break;
				case "BUY_VIPS":
					if($PANELUSER_PREMISSIONS['BUY_VIPS'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("BUY_VIPS") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsBuyVips();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[BUY_VIPS].tpl.php");	
					break;
				case "CONFIRM_PAYMENT":
					if($PANELUSER_PREMISSIONS['CONFIRM_PAYMENT'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("CONFIRM_PAYMENT") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsConfirmPayment();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[CONFIRM_PAYMENT].tpl.php");	
					break;
				case "OPEN_COMPLAINTS":
					if($PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("OPEN_COMPLAINTS") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsOpenComplaints();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[OPEN_COMPLAINTS].tpl.php");	
					break;
				case "OPEN_TICKET":
					if($PANELUSER_PREMISSIONS['OPEN_TICKET'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("OPEN_TICKET") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsOpenTicket();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[OPEN_TICKET].tpl.php");	
					break;
				case "READ_TICKET":
					if($PANELUSER_PREMISSIONS['READ_TICKET'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("READ_TICKET") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsReadTicket();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[READ_TICKET].tpl.php");	
					break;
				case "SEND_SMS":
					if($PANELUSER_PREMISSIONS['SEND_SMS'][0] == 0) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[DESACTIVE].tpl.php");
					if($this->checkPermissionModule("SEND_SMS") == false) return $ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[ACCESSDANIED].tpl.php");	
					$this->loadOptionsSendSMS();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser[SEND_SMS].tpl.php");	
					break;
				default:
					$this->loadOptionsDefault();
					$ldTpl->open("templates/".TEMPLATE_DIR."/paneluser.tpl.php");	
					break;
			}
            $this->questionsEventCheck();				
		}
		private function checkBanAccount()
		{
			$findAccountBanQ = $this->query("SELECT dateend FROM dbo.webBanneds WHERE name='". $_SESSION['LOGIN'] ."' AND type=1");
			$findAccountBan = mssql_fetch_object($findAccountBanQ);
			if(time() > $findAccountBan->dateend) 
			{
				$this->query("UPDATE ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO SET bloc_code=0 WHERE memb___id='". $_SESSION['LOGIN'] ."'");
				$this->query("DELETE FROM dbo.webBanneds WHERE name = '". $_SESSION['LOGIN'] ."' AND type=1");	
			} 
			return $findAccountBan->dateend;
		}
		private function checkBanCharacter($name)
		{
			$findCharacterBanQ = $this->query("SELECT dateend FROM dbo.webBanneds WHERE name='". $name ."' AND type=2");
			$findCharacterBan = mssql_fetch_object($findCharacterBanQ);
			if(time() > $findCharacterBan->dateend) 
			{
				$this->query("UPDATE ". DATABASE_CHARACTERS .".dbo.Character SET CtlCode=0 WHERE Name='". $name ."'");
				$this->query("DELETE FROM dbo.webBanneds WHERE name = '". $name ."' AND type=2");	
			} 
			return $findCharacterBan->dateend;
		}
		private function checkVipDate()
		{
            global $TABLES_CONFIGS;
			$findAccountVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']." as dateend FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
			$findAccountVip = mssql_fetch_object($findAccountVipQ);
			if(time() > $findAccountVip->dateend) 
				$this->query("UPDATE ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." SET ".$TABLES_CONFIGS['WEBVIPS']['columnType']."=0 WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_SESSION['LOGIN'] ."'");			
		}
		private function checkPermissionModule($module)
		{
			global $PANELUSER_PREMISSIONS, $TABLES_CONFIGS;
			$findAccountVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
			$findAccountVip = mssql_fetch_object($findAccountVipQ);			
			if($PANELUSER_PREMISSIONS[$module][(int)$findAccountVip->type + 1] == 1) return true;
			else return false;
		}
        public function writeLog($type, $account, $character, $extraText)
        {
            global $PANELUSER_MODULE;
            if($PANELUSER_MODULE['LOG']['Active'] == false) return;
            
            switch($type)
            {
                case 1: 
                    $args = array("MODIFY_DATA", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_MODIFY_DATA." [{$extraText}]\n");
                    break;
                case 2: 
                    $args = array("CLEAN_VAULT", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_CLEAN_VAULT." [{$extraText}]\n");
                    break;
                case 3: 
                    $args = array("DOUBLE_VAULT", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_DOUBLE_VAULT." [{$extraText}]\n");
                    break;
                case 4: 
                    $args = array("MODIFY_PERSONALID", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_MODIFY_PERSONALID." [{$extraText}]\n");
                    break;
                case 5: 
                    $args = array("RESET", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_RESET." [{$extraText}]\n");
                    break;
                case 6: 
                    $args = array("MASTER_RESET", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_MASTER_RESET." [{$extraText}]\n");
                    break;
                case 7: 
                    $args = array("RESET_TRANSFER", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_RESET_TRANSFER." [{$extraText}]\n");
                    break;
                case 8: 
                    $args = array("CLEAN_PK", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_CLEAN_PK." [{$extraText}]\n");
                    break;
                case 9: 
                    $args = array("DISTRIBUTE_POINTS", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_DISTRIBUTE_POINTS." [{$extraText}]\n");
                    break;
                case 10: 
                    $args = array("MOVE_CHARACTER", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_MOVE_CHARACTER." [{$extraText}]\n");
                    break;
                case 11: 
                    $args = array("CHANGE_NICK", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_CHANGE_NICK." [{$extraText}]\n");
                    break;
                case 12: 
                    $args = array("CHANGE_CLASS", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_CHANGE_CLASS." [{$extraText}]\n");
                    break;
                case 13: 
                    $args = array("REDISTRIBUTE_POINTS", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_REDISTRIBUTE_POINTS." [{$extraText}]\n");
                    break;
                case 14: 
                    $args = array("CLEAN_INVENTORY", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_CLEAN_INVENTORY." [{$extraText}]\n");
                    break;
                case 15: 
                    $args = array("SEND_SMS", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_SEND_SMS." [{$extraText}]\n");
                    break;
                case 16: 
                    $args = array("GAME_DISCONNECT", "[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_GAME_DISCONNECT." [{$extraText}]\n");
                    break;
                case 17: 
                    $args = array("TRANSFER_CASH", "[".date("d/m/Y \a\s G:i:s")."][{$account}] ".LDPU_LOG_TXT_TRANSFER_CASH." [{$extraText}]\n");
                    break;
                case 18: 
                    $args = array("COLLECTOR_POINTS", "[".date("d/m/Y \a\s G:i:s")."][{$account}] ".LDPU_LOG_TXT_COLLECTOR_POINTS." [{$extraText}]\n");
                    break;
                default: $args = array("error", sprintf("[".date("d/m/Y \a\s G:i:s")."][{$account} | {$character}] ".LDPU_LOG_TXT_NOT_FOUND." [{$extraText}]\n", $type));
            }
            $handle = fopen($PANELUSER_MODULE['LOG']['DirLog']."/[".date("d-m-Y")."][".$args[0]."].log", "a");
            fwrite($handle, $args[1]);
            fclose($handle);  
        }
		public function classNameDefine($numberClass)
		{
			global $CLASS_CHARACTERS;
			switch($numberClass) {
				case $CLASS_CHARACTERS['CLASSCODES']['DW'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DW'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['SM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['SM'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['GM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['GM'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['DK'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DK'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['BK'][0] : return $CLASS_CHARACTERS['CLASSCODES']['BK'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['BM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['BM'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['FE'][0] : return $CLASS_CHARACTERS['CLASSCODES']['FE'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['ME'][0] : return $CLASS_CHARACTERS['CLASSCODES']['ME'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['HE'][0] : return $CLASS_CHARACTERS['CLASSCODES']['HE'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['MG'][0] : return $CLASS_CHARACTERS['CLASSCODES']['MG'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['DMM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DMM'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['DL'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DL'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['LE'][0] : return $CLASS_CHARACTERS['CLASSCODES']['LE'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['SU'][0] : return $CLASS_CHARACTERS['CLASSCODES']['SU'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['BS'][0] : return $CLASS_CHARACTERS['CLASSCODES']['BS'][1]; break;
                case $CLASS_CHARACTERS['CLASSCODES']['DMS'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DMS'][1]; break;
                case $CLASS_CHARACTERS['CLASSCODES']['RF'][0] : return $CLASS_CHARACTERS['CLASSCODES']['RF'][1]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['FM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['FM'][1]; break;
			}
		}
		public function resetClassCode($class)
		{
			global $CLASS_CHARACTERS;
			switch($class)
			{
				case $CLASS_CHARACTERS['CLASSCODES']['DW'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DW'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['SM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DW'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['GM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DW'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['DK'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DK'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['BK'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DK'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['BM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DK'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['FE'][0] : return $CLASS_CHARACTERS['CLASSCODES']['FE'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['ME'][0] : return $CLASS_CHARACTERS['CLASSCODES']['FE'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['HE'][0] : return $CLASS_CHARACTERS['CLASSCODES']['FE'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['MG'][0] : return $CLASS_CHARACTERS['CLASSCODES']['MG'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['DMM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['MG'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['DL'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DL'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['LE'][0] : return $CLASS_CHARACTERS['CLASSCODES']['DL'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['SU'][0] : return $CLASS_CHARACTERS['CLASSCODES']['SU'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['BS'][0] : return $CLASS_CHARACTERS['CLASSCODES']['SU'][0]; break;
                case $CLASS_CHARACTERS['CLASSCODES']['DMM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['SU'][0]; break;
                case $CLASS_CHARACTERS['CLASSCODES']['RF'][0] : return $CLASS_CHARACTERS['CLASSCODES']['RF'][0]; break;
				case $CLASS_CHARACTERS['CLASSCODES']['FM'][0] : return $CLASS_CHARACTERS['CLASSCODES']['RF'][0]; break;
			}
		}
		public function checkOnlineAccount($account)
		{
			$findAccountOnlineQ = $this->query("SELECT ConnectStat FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT WHERE memb___id='". $account ."'");
			$findAccountOnlineQ = mssql_fetch_object($findAccountOnlineQ);
			return $findAccountOnlineQ->ConnectStat;
		}
		private function loadOptionsDefault()
		{
			global $ldTpl, $TABLES_CONFIGS, $PANELUSER_MODULE;
			$findAccountBanQ = $this->query("SELECT bloc_code, hashActivate FROM ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO WHERE memb___id='". $_SESSION['LOGIN'] ."'");
			$findAccountBan = mssql_fetch_object($findAccountBanQ);   
            if($findAccountBan->bloc_code == 1 && $findAccountBan->hashActivate == null)
            {
                $timestamp = $this->checkBanAccount();
                $tempBanTpl = sprintf("<div class='qdestaques'>".LDPU_OPTIONS_DEFAULT_BANNED_ACCOUNT."</div>", date("d/m/Y g:i a",$timestamp));
            }
            elseif($findAccountBan->hashActivate != null)
            {
                $tempBanTpl = sprintf("<div class='qdestaques'>".LDPU_OPTIONS_DEFAULT_NOT_ACTIVE_ACCOUNT."</div>", $_SESSION['LOGIN']);
            }
			$ldTpl->set("BAN_ACCOUNT_DATAILS", $tempBanTpl);
			
			$findAccountVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type, ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']." as dateend FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
			$findAccountVip = mssql_fetch_object($findAccountVipQ);
            $ldTpl->set("ACCOUNT_PLAN_DATAILS", $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][ $findAccountVip->type ] . ($findAccountVip->type > 0  ? ", ".LDPU_OPTIONS_DEFAULT_FLAT_EXPIRE.": ".date("d/m/Y g:i a",$findAccountVip->dateend) : NULL ));
			//$ldTpl->set("ACCOUNT_PLAN_DATAILS", ($findAccountVip->type == 0 ? $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][0] : ($findAccountVip->type == 1 ? $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][1].", ".LDPU_OPTIONS_DEFAULT_FLAT_EXPIRE.": ".date("d/m/Y g:i a",$findAccountVip->dateend) : ($findAccountVip->type == 2 ? $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][2].", ".LDPU_OPTIONS_DEFAULT_FLAT_EXPIRE.": ".date("d/m/Y g:i a",$findAccountVip->dateend) : LDPU_OPTIONS_DEFAULT_FLAT_ERROR))));
			
			$findAccountCashQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." as amount FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
            $findAccountCash = mssql_fetch_object($findAccountCashQ);
            $ldTpl->set("ACCOUNT_CASH", (int)$findAccountCash->amount);
        
            $findAccountCashQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBCASH']['columnAmount2']." as amount FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
            $findAccountCash = mssql_fetch_object($findAccountCashQ);
            $ldTpl->set("ACCOUNT_CASH2", (int)$findAccountCash->amount);
        
            $findAccountPointsQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBCASH']['columnPoints']." as amount FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
			$findAccountPoints = mssql_fetch_object($findAccountPointsQ);
			$ldTpl->set("ACCOUNT_POINTS", (int)$findAccountPoints->amount);
		
			$findLastConnectionQ = $this->query("SELECT ConnectTM,IP,ServerName FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT WHERE memb___id='". $_SESSION['LOGIN'] ."'");
			$findLastConnection = mssql_fetch_object($findLastConnectionQ);
			$ldTpl->set("LAST_CONNECTION_DETAILS", $findLastConnection->ConnectTM." ".LDPU_OPTIONS_DEFAULT_LAST_CONNECTION." ". $findLastConnection->ServerName );
			$ldTpl->set("LAST_CONNECTION_DETAILS_IP", $findLastConnection->IP );
			
			$findLastCharactersQ = $this->query("SELECT Name,Class,".COLUMN_RESETS.",PkCount,CtlCode FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
			if(mssql_num_rows($findLastCharactersQ) == 0) $ldTpl->set("CHARACTER_DETAILS","<tr><td colspan='4' align='center'>".LDPU_OPTIONS_DEFAULT_YOU_NOT_HAVE_CHARACTERS."</td></tr>");
			else
			{
				while($findLastCharacters = mssql_fetch_row($findLastCharactersQ))
				{
					$tmpChars .= "<tr><td>". $findLastCharacters[0] ."</td><td>". $this->classNameDefine($findLastCharacters[1]) ."</td><td>". $findLastCharacters[2] ."</td><td>". ($findLastCharacters[3] > 0 ? "Sim":"Não") ."</td></tr>";
					if($findLastCharacters[4] == 1) $tmpBanChars .= sprintf("<div class='qdestaques'>".LDPU_OPTIONS_DEFAULT_BANNED_CHARACTER."</div>", $findLastCharacters[0], date("d/m/Y g:i a",$this->checkBanCharacter($findLastCharacters[0])));
				}
				$ldTpl->set("CHARACTER_DETAILS", $tmpChars);
			}
			$ldTpl->set("BAN_CHARACETERS_DATAILS", $tmpBanChars);
		}
		private function loadOptionsModifyData()
		{
			global $ldTpl;									
			switch($_GET['Write'])
			{
				case 1:
					if(empty($_POST['userName']) == true) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_FILL_NAME."</div>";
					elseif(empty($_POST['userTel']) == true) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_FILL_PHONE."</div>";
					elseif(strlen($_POST['userName']) > 10) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_INVALID_SIZE_NAME."</div>";
					elseif(strlen($_POST['userTel']) > 15) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_INVALID_SIZE_PHONE."</div>";
					else {
						if($this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO SET memb_name = '". $_POST['userName'] ."', tel__numb = '". $_POST['userTel'] ."' WHERE memb___id='". $_SESSION['LOGIN'] ."'"))
						{
                        	$tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_SUCCESS_ALTER."</div>";
                            $this->writeLog(1, $_SESSION['LOGIN'], "", "");
                        }
						else
							$tempRepost .= "<div class='qdestaques'>".LDPU_MODIFY_DATA_ERROR_ALTER."</div>";
					}
					break;
				case 2:
					$Search_data_q = $this->query("SELECT fpas_answ FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_SESSION['LOGIN'] ."'");
					$Search_data_q = mssql_fetch_object($Search_data_q);
					$checkPwdQ = $this->query('exec dbo.webVerifyLogin "'. $_SESSION['LOGIN'] .'","'. $_POST['userPwd'] .'","'. USE_MD5 .'"');
					$checkPwd = mssql_fetch_row($checkPwdQ);
					if(empty($_POST['userPwd']) == true) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_FILL_PASSWORD."</div>";
					elseif(empty($_POST['userPwdNew']) == true || empty($_POST['userPwdNewRe']) == true) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_FILL_NEW_PASSWORD."</div>";
					elseif(empty($_POST['userAnswer']) == true) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_FILL_SECRET_ANSWER."</div>";
					elseif(strlen($_POST['userPwdNew']) > 10 || strlen($_POST['userPwdNewRe']) > 10) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_INVALID_SIZE_PASSWORD."</div>";
					elseif($_POST['userPwdNew'] <> $_POST['userPwdNewRe']) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_PASSWORDS_MUST_BE_IDENTICAL."</div>";
					elseif($_POST['userAnswer'] <> $Search_data_q->fpas_answ) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_INVALID_SECRET_ANSWER."</div>";
					elseif($checkPwd[0] == 0) $tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_INVALID_PASSWORD."</div>";
					else {
						if(USE_MD5 == false) $result = $this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO SET memb__pwd = '". $_POST['userPwdNew'] ."' WHERE memb___id='". $_SESSION['LOGIN'] ."'");
						if(USE_MD5 == true) $result = $this->query("exec dbo.webPwdHashWrite '". $_SESSION['LOGIN'] ."', '". $_POST['userPwdNew'] ."'");
						if($result)
                        {
							$tempRepost .= "<div class='qdestaques2'>".LDPU_MODIFY_DATA_SUCCESS_ALTER."</div>";
                            $this->writeLog(1, $_SESSION['LOGIN'], "", LDPU_MODIFY_DATA_LOG_PASSWORD_ALTER);
                        }
						else
							$tempRepost .= "<div class='qdestaques'>".LDPU_MODIFY_DATA_ERROR_ALTER.".</div>";
					}
					break;
			}
			$ldTpl->set("RespostWrite", $tempRepost);
			
			$SQL_Q = $this->query("SELECT tel__numb,mail_addr,fpas_ques FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_SESSION['LOGIN'] ."'");
			$SQL = mssql_fetch_object($SQL_Q);
			$ldTpl->set("TEL__NUMB", $SQL->tel__numb);
			$ldTpl->set("MAIL_ADDR", $SQL->mail_addr);
			$ldTpl->set("USER_FQUEST", $SQL->fpas_ques);
		}	
		private function loadOptionsCleanVault()
		{
			global $ldTpl;	
			if($_GET['Write'] == true)
			{		
				$vault_check = $this->query("SELECT 1 FROM ".DATABASE_ACCOUNTS.".dbo.warehouse WHERE AccountID='". $_SESSION['LOGIN'] ."'");
				$vault_check = mssql_num_rows($vault_check);		
				if($vault_check == 0) $tempRepost .= "<div class='quadros'><strong>".LDPU_CLEAN_VAULT_NOT_HAVE_VAULT."</strong></div>";
				else
				{
					$checkPwdQ = $this->query('exec dbo.webVerifyLogin "'. $_SESSION['LOGIN'] .'","'. $_POST['Pwd'] .'","'. USE_MD5 .'"');
					$checkPwd = mssql_fetch_row($checkPwdQ);
					if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
					elseif(empty($_POST['Pwd']) == true) $tempRepost .= "<div class='qdestaques2'>".LDPU_CLEAN_VAULT_FILL_PASSWORD."</div>";
					elseif($_POST['Vault1'] == 0 && $_POST['Vault2'] == 0 && $_POST['Zen'] == 0) $tempRepost .= "<div class='qdestaques2'>".LDPU_CLEAN_VAULT_CHOOSE_TASK."</div>";
					elseif($checkPwd[0] == 0) $tempRepost .= "<div class='qdestaques2'>".LDPU_CLEAN_VAULT_INVALID_PASSWORD."</div>";
					else {
                            switch(VESION_MUSERVER)
                            {                                      
                                case 0: case 1:
                                    $number_multiply = 2400; break; 
                                case 2: case 3: case 4: case 5:
                                    $number_multiply = 3840; break;
                                case 6:
                                    $number_multiply = 7680; break;
                            }
							$tempRepost .= "<div class='qdestaques2'>";
							if ($_POST['Vault1'] == 1) {
								$hex_empty = str_pad($hex_empty, $number_multiply, "F");
								$this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.warehouse SET Items=0x$hex_empty WHERE AccountID='". $_SESSION['LOGIN'] ."'");
								$this->writeLog(2, $_SESSION['LOGIN'], "", LDPU_CLEAN_VAULT_1_LOG_SUCCESS); 
								$tempRepost .= LDPU_CLEAN_VAULT_1_TEXT_SUCCESS."<br/>";
							}
							if ($_POST['Vault2'] == 1) {
								$hex_empty = str_pad($hex_empty, $number_multiply, "F");                            
                                $this->writeLog(2, $_SESSION['LOGIN'], "", LDPU_CLEAN_VAULT_2_LOG_SUCCESS);
								$this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.warehouse SET Items2=0x$hex_empty WHERE AccountID='". $_SESSION['LOGIN'] ."'");
								$tempRepost .= LDPU_CLEAN_VAULT_2_TEXT_SUCCESS."<br/>";
							}
							if ($_POST['Zen'] == 1) {
                                $this->writeLog(2, $_SESSION['LOGIN'], "", LDPU_CLEAN_VAULT_ZEN_LOG_SUCCESS);
								$this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.warehouse SET Money=0 WHERE AccountID='". $_SESSION['LOGIN'] ."'");
								$tempRepost .= LDPU_CLEAN_VAULT_ZEN_TEXT_SUCCESS;
							}
							$tempRepost .= "</div>";
                            $this->query("EXEC [dbo].[webPanelAction_CleanVault] '". $_SESSION['LOGIN'] ."', ''");
						}
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}       
        private function questionsEventCheck()
        {
            global $ldTpl, $GAME_QUESTION;
            $responseFinal = NULL;     
              
            if($GAME_QUESTION['ENABLE'] == false) { $ldTpl->set("questionResponse","<!-- disabled event -->"); return false; }
            if($_SESSION['GAME_QUESTION_LAST_LUCK'] > time()) { $ldTpl->set("questionResponse","<!-- wait time -->"); return false; }
            //if($_SESSION['GAME_QUESTION_ENABLE'] == true) { $ldTpl->set("questionResponse","<!-- you have one opened answer -->"); return false; }
            $luckNow = rand($GAME_QUESTION['LUCK'][0], $GAME_QUESTION['LUCK'][1]);
            if($luckNow >= $GAME_QUESTION['LUCK'][2])
            {                                                                              
                $questionQ = $this->query("SELECT TOP 1 [number],[question],[answer1],[answer2],[answer3],[answer4] FROM [dbo].[webQuestions] ORDER BY NEWID()");
                if(mssql_num_rows($questionQ) == 0)
                {
                    $ldTpl->set("questionResponse","<!-- empty table -->");
                    return false; // jogo interrompido por nao ter perguntas na tabela 
                } 
                $question = mssql_fetch_object($questionQ);
                
                $responseFinal = "<div id=\"stringQuestion\">".$question->question."</div>
                <div id=\"stringsAnswer\">
                    <input type=\"hidden\" value=\"0\" name=\"answerFinal\" id=\"answerFinal\" />
                    <input type=\"radio\" name=\"asnwer\" id=\"asnwer\" value=\"1\" onclick=\"jQuery('#answerFinal').val(1);\" /> ".$question->answer1."<br />
                    <input type=\"radio\" name=\"asnwer\" id=\"asnwer\" value=\"2\" onclick=\"jQuery('#answerFinal').val(2);\" /> ".$question->answer2."<br />
                    <input type=\"radio\" name=\"asnwer\" id=\"asnwer\" value=\"3\" onclick=\"jQuery('#answerFinal').val(3);\" /> ".$question->answer3."<br />
                    <input type=\"radio\" name=\"asnwer\" id=\"asnwer\" value=\"4\" onclick=\"jQuery('#answerFinal').val(4);\" /> ".$question->answer4."<br />
                </div>
                <div id=\"buttonSubmit\"><input type=\"button\" value=\"".LDPU_QUESTION_EVENT_INPUT_RESPONSE."\" onclick=\"javascript: Verify ('?page=paneluser&option=QUESTIONS_EVENT&answer='+ jQuery('#answerFinal').val(), 'reponseSubmit', 'get');\"></div>
                <script type=\"text/javascript\">
                jQuery(document).ready(function(){
                    jQuery(\"#questionsEvent\").css(\"display\", \"block\");
                    jQuery.fancybox({content: jQuery(\"#questionsEvent\") });
                    interval = setInterval(\"timerDecrement();\", 1000);
                });
                </script>";
                
                $_SESSION['GAME_QUESTION_ENABLE'] = true;  
                $_SESSION['GAME_QUESTION_LAST_LUCK'] = ( time() + $GAME_QUESTION['WAIT'] );
                $_SESSION['GAME_QUESTION_NUMBER'] = $question->number;
                $_SESSION['GAME_QUESTION_TIME'] = time()+60;    
            }
            
            $ldTpl->set("questionResponse", $responseFinal);
        }
        private function loadOptionsQuestionsEvent()
        {
            global $ldTpl, $GAME_QUESTION;
            $responseFinal = NULL;     
              
            if($GAME_QUESTION['ENABLE'] == false) { return false; }
            if($_SESSION['GAME_QUESTION_ENABLE'] == false)
            {
                echo "<p class=\"incorrectResponse\">".LDPU_QUESTION_EVENT_ALREADY_ANSWERED."</p>";
                return false;
            } 
            
            if($_GET['answer'] == 0)
            {
                echo "<p class=\"incorrectResponse\">".LDPU_QUESTION_EVENT_SELECT_ANSWER."</p>";
                return false;
            } 
            
            $_SESSION['GAME_QUESTION_ENABLE'] = false; //libera o sistema para novas perguntas
            
            if($_SESSION['GAME_QUESTION_TIME'] < time())
            {
                echo "<p class=\"incorrectResponse\">".LDPU_QUESTION_EVENT_TIME_END."</p>";
                return false;
            } 
            
            $questionQ = $this->query("SELECT TOP 1 [number],[question],[answer1],[answer2],[answer3],[answer4],[correct],[type],[drawn],[matter] FROM [dbo].[webQuestions] WHERE [number] = '".(int)$_SESSION['GAME_QUESTION_NUMBER']."'");
            $question = mssql_fetch_object($questionQ); 
            
            if($_GET['answer'] == $question->correct)
            {
                
                require_once("ldItemClass/ldItemDatabase.class.php");

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
                
                switch($question->type)
                {
                    case "A":
                        shuffle($GAME_QUESTION['PREMIUM']["A"]);
                        $itemPremium = $GAME_QUESTION['PREMIUM']["A"][0];
                        break;
                    case "B":
                        shuffle($GAME_QUESTION['PREMIUM']["B"]);
                        $itemPremium = $GAME_QUESTION['PREMIUM']["B"][0];
                        break;
                    case "C":
                        shuffle($GAME_QUESTION['PREMIUM']["C"]);
                        $itemPremium = $GAME_QUESTION['PREMIUM']["C"][0];
                        break;
                    case "D":
                        shuffle($GAME_QUESTION['PREMIUM']["D"]);
                        $itemPremium = $GAME_QUESTION['PREMIUM']["D"][0];
                        break;
                    default:
                        shuffle($GAME_QUESTION['PREMIUM']["A"]);
                        $itemPremium = $GAME_QUESTION['PREMIUM']["A"][0];
                        break;
                }
                
                $serialFinal = $this->createSerial();
                
                $this->query("INSERT INTO [dbo].[webGoldenArcher] ([username],[pserial1],[pserial2],[pserial3],[status],[itemCategorie],[itemIndex],[itemLevel],[itemOption],[itemSkill],[itemLuck],[excellent1],[excellent2],[excellent3],[excellent4],[excellent5],[excellent6],[ancient],[refine],[harmonyType],[harmonyLevel],[socketOp1],[socketOp2],[socketOp3],[socketOp4],[socketOp5])
                              VALUES
                                   ('".$_SESSION['LOGIN']."'
                                   ,'".$serialFinal[0]."'
                                   ,'".$serialFinal[1]."'
                                   ,'".$serialFinal[2]."'
                                   ,0
                                   ,". (int)$itemPremium['idCategorie'] ."
                                   ,". (int)$itemPremium['idItem'] ."
                                   ,". (int)$itemPremium['options']['Level'] ."
                                   ,". (int)$itemPremium['options']['Option'] ."
                                   ,". (int)$itemPremium['options']['Skill'] ."
                                   ,". (int)$itemPremium['options']['Luck'] ."
                                   ,". (int)$itemPremium['options']['Excellent'][0] ."
                                   ,". (int)$itemPremium['options']['Excellent'][1] ."
                                   ,". (int)$itemPremium['options']['Excellent'][2] ."
                                   ,". (int)$itemPremium['options']['Excellent'][3] ."
                                   ,". (int)$itemPremium['options']['Excellent'][4] ."
                                   ,". (int)$itemPremium['options']['Excellent'][5] ."
                                   ,". (int)$itemPremium['options']['Ancient'] ."
                                   ,". (int)$itemPremium['options']['Refine'] ."
                                   ,". (int)$itemPremium['options']['HarmonyType'] ."
                                   ,". (int)$itemPremium['options']['HarmonyLevel'] ."
                                   ,". (int)$itemPremium['options']['SocketOption'][0] ."
                                   ,". (int)$itemPremium['options']['SocketOption'][1] ."
                                   ,". (int)$itemPremium['options']['SocketOption'][2] ."
                                   ,". (int)$itemPremium['options']['SocketOption'][3] ."
                                   ,". (int)$itemPremium['options']['SocketOption'][4] .")");
                
                echo "<p class=\"correctResponse\">".LDPU_QUESTION_EVENT_RESPONSE_CORRECT."</p>"; 
                echo "<p>&nbsp;</p>";  
                printf("<p>".LDPU_QUESTION_EVENT_RESPONSE_CORRECT_RECEIVER_ITEM."</p>", utf8_encode(ldItemDatabase::$dbItem[ $itemPremium['idCategorie'] ][ $itemPremium['idItem'] ]["Name"]));
                echo "<p>&nbsp;</p>";
                echo "<p class=\"serial\">".$serialFinal[0]."-".$serialFinal[1]."-".$serialFinal[2]."</p>";
            }
            else
            {
                echo "<p class=\"incorrectResponse\">".LDPU_QUESTION_EVENT_RESPONSE_INCORRECT."</p>";
            }
            echo "<script> jQuery('#timerString').css(\"display\", \"none\"); </script>";
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
        private function loadOptionsGoldenArcher()
        {
            if($_GET['action'] == "check")
            {
                try
                {
                    if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1)
                        throw new Exception(LDPU_YOU_MUST_BE_OFFLINE, 1);
                    
                    if(empty($_GET['serial']) == true)
                        throw new Exception(LDPU_GOLDEN_ARCHER_FILL_SERIAL, 1);
                    
                    $this->serial = $_GET['serial'];
                    $this->serial = str_replace("-", "", $this->serial);
                    if(strlen($this->serial) != 12)
                        throw new Exception(LDPU_GOLDEN_ARCHER_INVALID_SERIAL, 1);
                    
                    $this->serial = array( substr($this->serial, 0, 4),  substr($this->serial, 4, 4),  substr($this->serial, 8, 4) );
                    
                    $itemSerial = $this->query("SELECT [id],[username],[status],[itemCategorie],[itemIndex],[itemLevel],[itemOption],[itemSkill],[itemLuck],[excellent1],[excellent2],[excellent3],[excellent4],[excellent5],[excellent6],[ancient],[refine],[harmonyType],[harmonyLevel],[socketOp1],[socketOp2],[socketOp3],[socketOp4],[socketOp5] FROM [dbo].[webGoldenArcher] WHERE [pserial1] = '".$this->serial[0]."' AND [pserial2] = '".$this->serial[1]."' AND [pserial3] = '".$this->serial[2]."'");
                    if(mssql_num_rows($itemSerial) == 0)
                        throw new Exception(LDPU_GOLDEN_ARCHER_INVALID_SERIAL, 1);
                    
                    $itemSerial = mssql_fetch_object($itemSerial);
                    if($itemSerial->username != $_SESSION['LOGIN'])
                        throw new Exception(LDPU_GOLDEN_ARCHER_SERIAL_NOT_BELONG, 1);
                    
                    if($itemSerial->status == 1)
                        throw new Exception(LDPU_GOLDEN_ARCHER_SERIAL_IS_ACTIVE, 1);
                    
                    require_once("ldItemClass/ldItemDatabase.class.php");
                    require_once("ldItemClass/ldItemMake.class.php");
                    require_once("ldItemClass/ldItemParse.class.php");  
                    require_once("ldItemClass/ldVault.class.php");

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
                    
                    if(isset(ldItemDatabase::$dbItem[ $itemSerial->itemCategorie ][ $itemSerial->itemIndex ]) == false)
                        throw new Exception(LDPU_GOLDEN_ARCHER_ITEM_NOT_EXISTS, 1);
                    
                    $dbVersion = $this->query("SELECT [DbVersion] FROM [".DATABASE_CHARACTERS."].[dbo].[warehouse] WHERE [AccountId] = '". $_SESSION['LOGIN'] ."'");
                    if(mssql_num_rows($dbVersion) == 0)
                        throw new Exception(LDPU_GOLDEN_ARCHER_ACCOUNT_NOT_VAULT, 1);
                    $dbVersion = mssql_fetch_object($dbVersion)->DbVersion;
                    
                    $HexItem = NULL;
                    $optionsItem = array("Level" => $itemSerial->itemLevel, "Option" => $itemSerial->itemOption, "Skill" => $itemSerial->itemSkill, "Luck" => $itemSerial->itemLuck, "Serial" => true, "Excellent" => array($itemSerial->excellent1, $itemSerial->excellent2, $itemSerial->excellent3, $itemSerial->excellent4, $itemSerial->excellent5, $itemSerial->excellent6), "Ancient" => $itemSerial->ancient, "Refine" => $itemSerial->refine, "HarmonyType" => $itemSerial->harmonyType, "HarmonyLevel" => $itemSerial->harmonyLevel, "SocketOption" => array($itemSerial->socketOp1, $itemSerial->socketOp2, $itemSerial->socketOp3, $itemSerial->socketOp4, $itemSerial->socketOp5));
                    if(ldItemMake::makeHexItem($HexItem, $itemSerial->itemIndex, $itemSerial->itemCategorie, $dbVersion, $optionsItem) == true)
                    {
                        $ldVault = new ldVault($_SESSION['LOGIN'], $dbVersion);
                        $ldVault->getVault();   
                        $ldVault->cutCode();  
                        $ldVault->structureVault(); 

                        ldItemParse::parseHexItem($HexItem, $dbVersion);
                        $slot = $ldVault->searchSlotsInVault(ldItemParse::$dumpTemp['Item']['X'], ldItemParse::$dumpTemp['Item']['Y']);
                        if($slot != -1)
                            $ldVault->insertItemInSlot($HexItem, $slot);
                        else
                            throw new Exception(LDPU_GOLDEN_ARCHER_VAULT_NOT_SPACE, 1);
                            
                        $ldVault->structureVault();
                        $ldVault->writeVault(true);
                        unset($ldVault);
                    } 
                    else 
                        throw new Exception(LDPU_GOLDEN_ARCHER_ERROR_MAKE_ITEM, 1);
                        
                    unset($HexItem);
                    
                    $updateStatus = $this->query("UPDATE [dbo].[webGoldenArcher] SET [status] = 1 WHERE [id] = '".$itemSerial->id."'");
                    
                    throw new Exception(ldItemDatabase::$dbItem[ $itemSerial->itemCategorie ][ $itemSerial->itemIndex ]["Name"], 0);
                }
                catch(Exception $e)
                {
                    switch($e->getCode())
                    {
                        case 1: echo "<p class=\"white\">".$e->getMessage()."</p>"; break;
                        case 0: echo "<p class=\"yellow\">".LDPU_GOLDEN_ARCHER_REGISTER_SUCCESS."</p><p class=\"yellow\">".LDPU_GOLDEN_ARCHER_ITEM_RECEIVER.": ".$e->getMessage()."</p>"; break;
                    }
                }
                exit();
            }
        } 
        private function loadOptionsCollectorPoints()
        {
            global $ldTpl, $PANELUSER_MODULE, $TABLES_CONFIGS;
            $responseWrite = NULL;
            
            require_once("ldItemClass/ldItemDatabase.class.php");
            require_once("ldItemClass/ldItemOptionsDatabase.class.php");
            require_once("ldItemClass/ldItemMake.class.php");
            require_once("ldItemClass/ldItemParse.class.php");     
            require_once("ldItemClass/ldVault.class.php");
            require_once("ldItemClass/ldInventory.class.php");
            ldItemDatabase::setDatabases("modules/", "item.txt", "classes/ldItemClass/data/item.serialize.txt");
            if(ldItemDatabase::checkDatabaseExists() == false)
            {
                ldItemDatabase::createDatabase();   
            }
            if(ldItemDatabase::checkDatabaseExists() == false)
            {
                exit(LDPU_VIRTUAL_VAULT_CANT_LOAD_DB);   
            } 
            
            $ldTpl->set("POINTS_PER_ITEM", $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['premiumInPoints'] );
            $ldTpl->set("ITEM_NAME", ldItemDatabase::$dbItem[ $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['idCategorie'] ][ $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['idItem'] ]["Name"] );
            
            if($_GET['action'] == "collect")
            {
                if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1)
                { 
                    $responseWrite = "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
                    return false;
                }
                        
                $itemsCollects = 0;
                $this->ldVault = new ldVault($_SESSION['LOGIN']);
                $this->ldVault->getVault();   
                $this->ldVault->cutCode();  
                $this->ldVault->structureVault();
                for($i = 0; $i < 120; $i++)
                {
                    $shortcut = $this->ldVault->codeGroup[$i];
                    if($shortcut['Details']['IsItem'] == false) continue;
                    
                    if($shortcut['Details']['ItemIdIndex'] == $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['idItem'] && $shortcut['Details']["ItemIdSection"] == $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['idCategorie'])
                    {
                        $itemsCollects++;
                        $this->ldVault->insertItemInSlot( ($this->ldVault->dbVersion > 2 ? str_repeat("F", 32) : str_repeat("F", 20)) , $i);
                    }
                }
                if($itemsCollects > 0)
                {
                    $pointsToAdd = $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['premiumInPoints'] * $itemsCollects;
                            
                    $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." SET ".$TABLES_CONFIGS['WEBCASH']['columnPoints']."=".$TABLES_CONFIGS['WEBCASH']['columnPoints']."+". $pointsToAdd ." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
                            
                    $this->ldVault->writeVault(true);
                    
                    $responseWrite = sprintf("<div class=\"qdestaques2\">".LDPU_COLLECTOR_POINTS_SUCCESS."</div>", $itemsCollects, ldItemDatabase::$dbItem[ $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['idCategorie'] ][ $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['idItem'] ]["Name"], $pointsToAdd); 
                    
                    $this->writeLog(18, $_SESSION['LOGIN'], "", sprintf(LDPU_COLLECTOR_POINTS_SUCCESS_LOG, $itemsCollects, ldItemDatabase::$dbItem[ $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['idCategorie'] ][ $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['idItem'] ]["Name"], $pointsToAdd));
                }
                else
                {
                    $responseWrite = sprintf("<div class=\"qdestaques\">".LDPU_COLLECTOR_POINTS_ERROR."</div>", ldItemDatabase::$dbItem[ $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['idCategorie'] ][ $PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE']['idItem'] ]["Name"]);
                }
                
            }
            
            $ldTpl->set("RESPONSE_WRITE", $responseWrite );
        }
        private function loadOptionsAuctions()
        {
            global $ldTpl, $TABLES_CONFIGS;
            
            $RespostWrite = NULL;
            
            if($_GET['action'] == "showDetailsAuction")
            {
                $getAuctions = $this->query("SELECT [id],[name],[premium],[startDate],[endDate],[active],[minimumBid],[closed],[winner],[winnerText] FROM [dbo].[webAuctions] WHERE [active] = 1 AND [id] = ".(int) $_GET['id']." ORDER BY [id] DESC");
                if(mssql_num_rows($getAuctions) == 0)
                {                                
                    $RespostWrite = "<table style='width: 100%;'>".
                                     "<tr><td style='text-align: center;' colspan='4'>".LDPU_AUCTIONS_NOT_FOUND."</td></tr>".
                                     "</table>";
                }
                else
                {
                    $getAuctions = mssql_fetch_object($getAuctions);
                    
                    if($getAuctions->closed == 1) $status = LDPU_AUCTIONS_STATUS_END;
                    elseif($getAuctions->startDate > time()) $status = LDPU_AUCTIONS_STATUS_WAIT_BEGIN;
                    elseif($getAuctions->startDate < time() && $getAuctions->endDate > time()) $status = LDPU_AUCTIONS_STATUS_IN_PROGRESS;
                    elseif($getAuctions->endDate < time()) $status = LDPU_AUCTIONS_STATUS_WAIT_PREMIUM;
                    else $status = "Status desconhecido."; 
                    
                    $searchLastBid = $this->query("SELECT TOP 1 [username],[amount],CONVERT(varchar, [lastBid], 103) [lastBidDay],CONVERT(varchar, [lastBid], 108) [lastBidHour] FROM [dbo].[webAuctionsBids] WHERE [auction] = ". (int) $getAuctions->id ." ORDER BY [amount] DESC");
                    if(mssql_num_rows($searchLastBid) == 0)
                    {
                        $lastUserBid = LDPU_AUCTIONS_TAKE_FRIST_BID;
                        $lastValueBid = $getAuctions->minimumBid;
                    }
                    else
                    {
                        $searchLastBid = mssql_fetch_object($searchLastBid);
                        $lastUserBid = $searchLastBid->username.", ".$searchLastBid->lastBidDay." ".$searchLastBid->lastBidHour;
                        $lastValueBid = $searchLastBid->amount;
                    }
                    
                    $findAccountPointsQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBCASH']['columnPoints']." as amount FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
                    $findAccountPoints = mssql_fetch_object($findAccountPointsQ); 
                    
                    $searchIfHaveBid = $this->query("SELECT [amount] FROM [dbo].[webAuctionsBids] WHERE [auction] = ". (int) $getAuctions->id ." AND [username] = '".$_SESSION['LOGIN']."'");
                      
                    
                    $RespostWrite = "<table style='width: 100%;'>".
                                    "<tr><td style='width: 150px;'>".LDPU_AUCTIONS_ID.":</td><td><strong>{$getAuctions->id}</strong></td></tr>".
                                    "<tr><td>".LDPU_AUCTIONS_NAME.":</td><td><strong>{$getAuctions->name}</strong></td></tr>".
                                    "<tr><td>".LDPU_AUCTIONS_STATUS.":</td><td><strong>{$status}</strong></td></tr>".
                                    "<tr><td>".LDPU_AUCTIONS_DATE_BEGIN.":</td><td><strong>".date("d/m/Y G:i:s", $getAuctions->startDate)."</strong></td></tr>".
                                    "<tr><td>".LDPU_AUCTIONS_DATE_END.":</td><td><strong>".date("d/m/Y G:i:s", $getAuctions->endDate)."</strong></td></tr>".
                                    "<tr><td>".LDPU_AUCTIONS_MIN_BID.":</td><td><strong>{$getAuctions->minimumBid} ".constant("POINTS_NAME")."</strong></td></tr>".
                                    "<tr><td>".LDPU_AUCTIONS_PREMIUM.":</td><td><strong>{$getAuctions->premium}</strong></td></tr>".
                                    "<tr><td>".LDPU_AUCTIONS_PHOTO.":</td><td><a href=\"modules/uploads/auctions/{$getAuctions->id}.large.jpg\" id=\"photoLarge_{$getAuctions->id}\">
                                       <img src='modules/uploads/auctions/{$getAuctions->id}.small.jpg' /></a>
                                       <script> jQuery(\"a#photoLarge_{$getAuctions->id}\").fancybox();</script></td></tr>".
                                    "</table>".
                                    "<br/>".
                                    "<table style='width: 100%;'>".
                                    "<tr><td style='width: 150px;'>".LDPU_AUCTIONS_LAST_PUT_BID."</td><td><strong>{$lastUserBid}</strong> - <a href='?page=paneluser&option=AUCTIONS&action=showDetailsAuction&id={$getAuctions->id}'>[".LDPU_AUCTIONS_REFRESH."]</a></td></tr>".
                                    "<tr><td>".LDPU_AUCTIONS_AUCTION_VALUE.":</td><td><strong>{$lastValueBid} ".constant("POINTS_NAME")."</strong></td></tr>".
                                    "<tr><td>".LDPU_AUCTIONS_YOUR_LAST_BID.":</td><td><strong>".(int) mssql_fetch_object($searchIfHaveBid)->amount." ".constant("POINTS_NAME")."</strong></td></tr>".
                                    "<tr>
                                        <td>".LDPU_AUCTIONS_PUT_TOUR_BID.":</td>
                                        <td>
                                            <input type='text' class='inputbox' value='".($lastValueBid+1)."' style='width: 50px;' id='valueToBid'>&nbsp;
                                            <input type='button' class='button' value='".LDPU_AUCTIONS_INTPUT_PUT_BID."' onclick=\"window.location = '?page=paneluser&option=AUCTIONS&action=bid&id={$getAuctions->id}&points='+jQuery('#valueToBid').val()\" />&nbsp;
                                            (".LDPU_AUCTIONS_YOU_HAVE.": {$findAccountPoints->amount} ".constant("POINTS_NAME").")</td></tr>".
                                    "</table>";
                                    
                    if($getAuctions->winner == $_SESSION['LOGIN'])
                    {
                        $RespostWrite .= "<table style='width: 100%; text-align: center;'>".
                                         "<tr><td style='padding: 20px;'><strong>".LDPU_AUCTIONS_YOU_WINNER."<br /><br />{$getAuctions->winnerText}</strong></td></tr>".
                                         "</table>";
                    }
                } 
            }
            elseif($_GET['action'] == "bid")
            {
                try
                {
                    if(is_numeric($_GET['points']) == false || $_GET['points'] <= 0)
                        throw new Exception(sprintf(LDPU_AUCTIONS_FILL_NUMBER_POSITIVE, constant("POINTS_NAME")), 1);
                        
                    if(is_numeric($_GET['id']) == false)
                        throw new Exception(LDPU_AUCTIONS_INVALID_AUCTION, 1);
                        
                    $getAuctions = $this->query("SELECT [id],[startDate],[endDate],[active],[minimumBid],[closed] FROM [dbo].[webAuctions] WHERE [active] = 1 AND [id] = ".(int) $_GET['id']." ORDER BY [id] DESC");
                    if(mssql_num_rows($getAuctions) == 0)
                        throw new Exception(LDPU_AUCTIONS_INVALID_AUCTION_OR_NOT_ACTIVE, 1);
                        
                    $getAuctions = mssql_fetch_object($getAuctions);
                    if($getAuctions->closed == 1) throw new Exception(LDPU_AUCTIONS_STATUS_END, 1);
                    elseif($getAuctions->startDate > time()) throw new Exception(LDPU_AUCTIONS_STATUS_WAIT_BEGIN, 1);
                    elseif($getAuctions->endDate < time()) throw new Exception(LDPU_AUCTIONS_STATUS_WAIT_PREMIUM, 1);
                    
                    if($getAuctions->minimumBid > $_GET['points'])
                        throw new Exception(LDPU_AUCTIONS_YOU_NEED_BID_MORE." ".$getAuctions->minimumBid.".", 1);
                    
                    $searchLastBid = $this->query("SELECT TOP 1 [amount] FROM [dbo].[webAuctionsBids] WHERE [auction] = ". (int) $getAuctions->id ." ORDER BY [amount] DESC");
                    if(mssql_num_rows($searchLastBid) > 0)
                    {
                        $searchLastBid = mssql_fetch_object($searchLastBid);
                        if($searchLastBid->amount >= $_GET['points'])
                            throw new Exception(LDPU_AUCTIONS_YOU_NEED_BID_MORE." ".$_GET['points'].".", 1);
                    }
                    
                    $findAccountPointsQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBCASH']['columnPoints']." as amount FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
                    $findAccountPoints = mssql_fetch_object($findAccountPointsQ); 
                    if($findAccountPoints->amount < $_GET['points'])
                        throw new Exception(LDPU_AUCTIONS_YOU_NOT_HAVE_POINTS." ".constant("POINTS_NAME").".", 1);
                    /*
                    $remove = $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                                     SET ".$TABLES_CONFIGS['WEBCASH']['columnPoints']."=".$TABLES_CONFIGS['WEBCASH']['columnPoints']."-".(int)$_GET['points']." 
                                                    WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."' AND ".$TABLES_CONFIGS['WEBCASH']['columnPoints']." > ".(int)$_GET['points']."; 
                                                    SELECT @@ROWCOUNT [count];");
                    if(mssql_fetch_object($remove)->count == 0)
                        throw new Exception("Você não possui essa quantidade de ".constant("POINTS_NAME").".", 1);
                    */
                    
                    $searchIfHaveBid = $this->query("SELECT 1 FROM [dbo].[webAuctionsBids] WHERE [auction] = ". (int) $getAuctions->id ." AND [username] = '".$_SESSION['LOGIN']."'");
                    if(mssql_num_rows($searchIfHaveBid) > 0)
                    {
                        $this->query("UPDATE [dbo].[webAuctionsBids] SET [amount] = ".(int)$_GET['points']." WHERE [auction] = ". (int) $getAuctions->id ." AND [username] = '".$_SESSION['LOGIN']."'");
                        throw new Exception(LDPU_AUCTIONS_BID_SUCCESS_REGISTER, 0);
                    }
                    else
                    {
                        $this->query("INSERT INTO [dbo].[webAuctionsBids] ([auction],[amount],[username],[lastBid]) VALUES (".(int) $getAuctions->id.", ".(int) $_GET['points'].", '".$_SESSION['LOGIN']."', getDate());");
                        throw new Exception(LDPU_AUCTIONS_BID_SUCCESS_REGISTER, 0);
                    }
                    
                }
                catch( Exception $e )
                {
                    switch($e->getCode())
                    {
                        case 0:
                            echo "<script>alert('".$e->getMessage()."'); window.location = '?page=paneluser&option=AUCTIONS&action=showDetailsAuction&id=".(int) $getAuctions->id."';</script>";
                            break;
                        case 1:
                            echo "<script>alert('".$e->getMessage()."'); history.go(-1);</script>";
                            break;
                    }
                }
                exit();
            }
            else
            {
                $getAuctions = $this->query("SELECT [id],[name],[premium],[startDate],[endDate],[closed] FROM [dbo].[webAuctions] WHERE [active] = 1 ORDER BY [id] DESC");
                if(mssql_num_rows($getAuctions) == 0)
                {                                
                    $RespostWrite = "<table style='width: 100%;'>".
                                     "<tr><td style='width: 27px;'>#</td><td>".LDPU_AUCTIONS_NAME."</td><td>".LDPU_AUCTIONS_PREMIUM."</td><td style='width: 100px;'>".LDPU_AUCTIONS_STATUS."</td></tr>".
                                     "<tr><td style='text-align: center;' colspan='4'>".LDPU_AUCTIONS_NOT_HAVE_AUCTIONS."</td></tr>".
                                     "</table>";
                }
                else
                {
                    while($auction = mssql_fetch_object($getAuctions))
                    {
                        if($auction->closed == 1) $status = LDPU_AUCTIONS_STATUS_END;
                        elseif($auction->startDate > time()) $status = LDPU_AUCTIONS_STATUS_WAIT_BEGIN;
                        elseif($auction->startDate < time() && $auction->endDate > time()) $status = LDPU_AUCTIONS_STATUS_IN_PROGRESS;
                        elseif($auction->endDate < time()) $status = LDPU_AUCTIONS_STATUS_WAIT_PREMIUM;
                        else $status = LDPU_AUCTIONS_STATUS_ERROR;

                        $tmpList .= "<tr>
                                        <td><a href='?page=paneluser&option=AUCTIONS&action=showDetailsAuction&id={$auction->id}'>{$auction->id}</a></td>
                                        <td><a href='?page=paneluser&option=AUCTIONS&action=showDetailsAuction&id={$auction->id}'>{$auction->name}</a></td>
                                        <td><a href='?page=paneluser&option=AUCTIONS&action=showDetailsAuction&id={$auction->id}'>".substr($auction->premium, 0, 40).(strlen($auction->premium) > 40 ? "..." : NULL)."</a></td>
                                        <td><a href='?page=paneluser&option=AUCTIONS&action=showDetailsAuction&id={$auction->id}'>{$status}</a></td>
                                   </tr>";
                        
                    }
                    $RespostWrite = "<table style='width: 100%;'>".
                                     "<tr><td style='width: 27px;'>#</td><td>".LDPU_AUCTIONS_NAME."</td><td>".LDPU_AUCTIONS_PREMIUM."</td><td style='width: 150px;'>".LDPU_AUCTIONS_STATUS."</td></tr>".
                                     $tmpList.
                                     "</table>";
                }
            }
            $ldTpl->set("RespostWrite", $RespostWrite);
        }
        private function loadOptionsVirtualVault()
        {
            global $ldTpl, $VIRTUAL_VAULT;
            
            /**
            * Find serial query:
            * SELECT * FROM [MuOnline_DKT].[dbo].[ExtWareHouseVirtual] WHERE (CHARINDEX (0x375F9300, Item) = 4)
            */
            
            require_once("ldItemClass/ldItemDatabase.class.php");
            require_once("ldItemClass/ldItemOptionsDatabase.class.php");
            require_once("ldItemClass/ldItemMake.class.php");
            require_once("ldItemClass/ldItemParse.class.php");     
            require_once("ldItemClass/ldVault.class.php");
            require_once("ldItemClass/ldInventory.class.php");
            ldItemDatabase::setDatabases("modules/", "item.txt", "classes/ldItemClass/data/item.serialize.txt");
            if(ldItemDatabase::checkDatabaseExists() == false)
            {
                ldItemDatabase::createDatabase();   
            }
            if(ldItemDatabase::checkDatabaseExists() == false)
            {
                exit(LDPU_VIRTUAL_VAULT_CANT_LOAD_DB);   
            }
            
            if($_GET['action'] == "details")
            {   
                try
                {
                    switch($_GET['vault'])
                    {
                        case "game":
                            if($_GET['key'] < 0 || $_GET['key'] > 120)
                                throw new Exception("loadOptionsVirtualVault() :: Invalid key");
                                
                            $this->ldVault = new ldVault($_SESSION['LOGIN']);
                            $this->ldVault->getVault();   
                            $this->ldVault->cutCode();  
                            $this->ldVault->structureVault();
                            $shortcut = $this->ldVault->codeGroup[$_GET['key']];
                            if($shortcut['Details']['IsItem'] == false)
                                throw new Exception(LDPU_VIRTUAL_VAULT_ITEM_NOT_FOUND); 
                                
                            $response .= "<table style=\"width: 100%\">";
                            $response .= "<tr>";
                            $response .= "<td>";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_ITEM.":</em> <strong>{$shortcut['Details']['ItemName']}</strong><br />";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_LEVEL.":</em> <strong>+{$shortcut['Details']['ItemLevel']}</strong><br />";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_OPTION.":</em> <strong>+".($shortcut['Details']['ItemOption']*4)."</strong><br />";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_LUCK.":</em> <strong>".($shortcut['Details']['ItemLuck'] == true ? LDPU_YES : LDPU_NOT)."</strong><br />";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_SKILL.":</em> <strong>".($shortcut['Details']['ItemSkill'] == true ? LDPU_YES : LDPU_NOT)."</strong><br />";
                            if($this->ldVault->dbVersion > 1) $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_ANCIENT.":</em> <strong>".($shortcut['Details']['ItemAncient'] > 0 ? LDPU_YES : LDPU_NOT)."</strong><br />";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_DURABILITY.":</em> <strong>".$shortcut['Details']['ItemDurability']."</strong><br />";
                            if($VIRTUAL_VAULT['SHOW_SERIAL'] == true) $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_SERIAL.":</em> <strong>0x".$shortcut['Details']['ItemSerial']."</strong><br />";
                            if($shortcut['Details']['ItemExcellents'][6] == 0)
                                $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_EXCELLENT.":</em> <strong>".LDPU_NOT."</strong><br />";
                            else
                            {
                                $response .= "<br /><em>".LDPU_VIRTUAL_VAULT_TEXT_EXCELLENT.":</em><strong><br />";
                                if($shortcut['Details']['ItemExcellents'][0] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents($shortcut['Details']['ItemIdSection'], $shortcut['Details']['ItemIdIndex'])->opt0 ."</em><br />"; 
                                if($shortcut['Details']['ItemExcellents'][1] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents($shortcut['Details']['ItemIdSection'], $shortcut['Details']['ItemIdIndex'])->opt1 ."</em><br />"; 
                                if($shortcut['Details']['ItemExcellents'][2] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents($shortcut['Details']['ItemIdSection'], $shortcut['Details']['ItemIdIndex'])->opt2 ."</em><br />"; 
                                if($shortcut['Details']['ItemExcellents'][3] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents($shortcut['Details']['ItemIdSection'], $shortcut['Details']['ItemIdIndex'])->opt3 ."</em><br />"; 
                                if($shortcut['Details']['ItemExcellents'][4] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents($shortcut['Details']['ItemIdSection'], $shortcut['Details']['ItemIdIndex'])->opt4 ."</em><br />"; 
                                if($shortcut['Details']['ItemExcellents'][5] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents($shortcut['Details']['ItemIdSection'], $shortcut['Details']['ItemIdIndex'])->opt5 ."</em><br />"; 
                                $response .= "</strong>";
                            }
                            if($this->ldVault->dbVersion > 2) $response .= "<br /><em>".LDPU_VIRTUAL_VAULT_TEXT_REFINE.":</em> <strong>".($shortcut['Details']['ItemRefine'] > 0 ? ldItemOptionsDatabase::getRefine($shortcut['Details']['ItemIdSection'], $shortcut['Details']['ItemIdIndex'])->opt0.", ".ldItemOptionsDatabase::getRefine($shortcut['Details']['ItemIdSection'], $shortcut['Details']['ItemIdIndex'])->opt1 : LDPU_NOT)."</strong><br />";
                            if($this->ldVault->dbVersion > 2) $response .= "<br /><em>".LDPU_VIRTUAL_VAULT_TEXT_HARMONY.":</em> <strong>".($shortcut['Details']['HarmonyType'] > 0 ? ldItemOptionsDatabase::getHarmony($shortcut['Details']['ItemIdSection'], $shortcut['Details']['HarmonyType'], $shortcut['Details']['HarmonyLevel']) : LDPU_NOT)."</strong><br />";
                            if($this->ldVault->dbVersion > 2 && $VIRTUAL_VAULT['SOCKET_OPTIONS'] == true) 
                            {
                                $response .= "<br /><em>".LDPU_VIRTUAL_VAULT_TEXT_SOCKET.":</em><br />";
                                $socketOptions = ldItemOptionsDatabase::getSocket();
                                if($VIRTUAL_VAULT['MUSERVER_MANUFACTURER'] == 1)
                                    foreach( $shortcut['Details']['Sockect'] as &$socket )
                                        if($socket != $socketOptions["notSocket"] && $socket != $socketOptions["emptySocket"]) $socket++;
                                
                                if($shortcut['Details']['Sockect'][0] == $socketOptions["notSocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 1: ". $socketOptions["socketTypeNumber"][$socketOptions["notSocket"]]["socketName"] ."<br />";
                                elseif($shortcut['Details']['Sockect'][0] == $socketOptions["emptySocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 1: ". $socketOptions["socketTypeNumber"][$socketOptions["emptySocket"]]["socketName"] ."<br />";
                                else
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 1: <strong>". $socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][0] % 0x32]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][0] % 0x32]["socketName"] ." + ".$socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][0] % 0x32]["socketsArgs"][1]."</strong><br />";
                                
                                if($shortcut['Details']['Sockect'][1] == $socketOptions["notSocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 2: ". $socketOptions["socketTypeNumber"][$socketOptions["notSocket"]]["socketName"] ."<br />";
                                elseif($shortcut['Details']['Sockect'][1] == $socketOptions["emptySocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 2: ". $socketOptions["socketTypeNumber"][$socketOptions["emptySocket"]]["socketName"] ."<br />";
                                else
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 2: <strong>". $socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][1] % 0x32]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][1] % 0x32]["socketName"] ." + ".$socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][1] % 0x32]["socketsArgs"][2]."</strong><br />";
                                
                                if($shortcut['Details']['Sockect'][2] == $socketOptions["notSocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 3: ". $socketOptions["socketTypeNumber"][$socketOptions["notSocket"]]["socketName"] ."<br />";
                                elseif($shortcut['Details']['Sockect'][2] == $socketOptions["emptySocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 3: ". $socketOptions["socketTypeNumber"][$socketOptions["emptySocket"]]["socketName"] ."<br />";
                                else
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 3: <strong>". $socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][2] % 0x32]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][2] % 0x32]["socketName"] ." + ".$socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][2] % 0x32]["socketsArgs"][3]."</strong><br />";
                                
                                if($shortcut['Details']['Sockect'][3] == $socketOptions["notSocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 4: ". $socketOptions["socketTypeNumber"][$socketOptions["notSocket"]]["socketName"] ."<br />";
                                elseif($shortcut['Details']['Sockect'][3] == $socketOptions["emptySocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 4: ". $socketOptions["socketTypeNumber"][$socketOptions["emptySocket"]]["socketName"] ."<br />";
                                else
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 4: <strong>". $socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][3] % 0x32]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][3] % 0x32]["socketName"] ." + ".$socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][3] % 0x32]["socketsArgs"][4]."</strong><br />";
                                
                                if($shortcut['Details']['Sockect'][4] == $socketOptions["notSocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 5: ". $socketOptions["socketTypeNumber"][$socketOptions["notSocket"]]["socketName"] ."<br />";
                                elseif($shortcut['Details']['Sockect'][4] == $socketOptions["emptySocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 5: ". $socketOptions["socketTypeNumber"][$socketOptions["emptySocket"]]["socketName"] ."<br />";
                                else
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 5: <strong>". $socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][4] % 0x32]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][4] % 0x32]["socketName"] ." + ".$socketOptions["socketTypeNumber"][$shortcut['Details']['Sockect'][4] % 0x32]["socketsArgs"][5]."</strong><br />";
                            }
                            $response .= "</td>";
                            $response .= "<td align=\"right\" valign=\"top\">";
                            $response .= "<input type=\"button\" class=\"button\" value=\"".LDPU_VIRTUAL_VAULT_TEXT_SEND_TO_VAULT_VIRTUAL."\" onclick=\"jQuery.post('?page=paneluser&option=VIRTUAL_VAULT&action=send&to=virtual&key={$_GET['key']}', function(response) { jQuery('#detailsVault').html( response ); }, 'html');\" />";
                            $response .= "</td>";
                            $response .= "</tr>";
                            $response .= "</table>";
                            break;
                        case "virtual":
                            if(is_numeric($_GET['key']) == false)
                                throw new Exception("loadOptionsVirtualVault() :: Invalid key");
                            
                            $getItemQ = $this->query("SELECT [Number],[Item],[dbVersion] FROM [".DATABASE_ACCOUNTS."].[dbo].[ExtWareHouseVirtual] WHERE [AccountId] = '{$_SESSION['LOGIN']}' AND [Number] = ".(int)$_GET['key']);
                            if(mssql_num_rows($getItemQ) == 0)
                                throw new Exception(LDPU_VIRTUAL_VAULT_ITEM_NOT_FOUND);
                            
                            $getItem = mssql_fetch_object($getItemQ); 
                            
                            ldItemParse::parseHexItem(bin2hex($getItem->Item), $getItem->dbVersion);
                            
                            $response .= "<table style=\"width: 100%\">";
                            $response .= "<tr>";
                            $response .= "<td>";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_ITEM.":</em> <strong>".ldItemParse::$dumpTemp['ItemName']."</strong><br />";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_LEVEL.":</em> <strong>+".ldItemParse::$dumpTemp['ItemLevel']."</strong><br />";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_OPTION.":</em> <strong>+".(ldItemParse::$dumpTemp['ItemOption']*4)."</strong><br />";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_LUCK.":</em> <strong>".(ldItemParse::$dumpTemp['ItemLuck'] == true ? LDPU_YES : LDPU_NOT)."</strong><br />";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_SKILL.":</em> <strong>".(ldItemParse::$dumpTemp['ItemSkill'] == true ? LDPU_YES : LDPU_NOT)."</strong><br />";
                            if($getItem->dbVersion > 1) $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_ANCIENT.":</em> <strong>".(ldItemParse::$dumpTemp['ItemAncient'] > 0 ? LDPU_YES : LDPU_NOT)."</strong><br />";
                            $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_DURABILITY.":</em> <strong>".ldItemParse::$dumpTemp['ItemDurability']."</strong><br />";
                            if($VIRTUAL_VAULT['SHOW_SERIAL'] == true) $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_SERIAL.":</em> <strong>0x".strtoupper(ldItemParse::$dumpTemp['ItemSerial'])."</strong><br />";
                            if(ldItemParse::$dumpTemp['ItemExcellents'][6] == 0)
                                $response .= "<em>".LDPU_VIRTUAL_VAULT_TEXT_EXCELLENT.":</em> <strong>".LDPU_NOT."</strong><br />";
                            else
                            {
                                $response .= "<br /><em>".LDPU_VIRTUAL_VAULT_TEXT_EXCELLENT.":</em><strong><br />";
                                if(ldItemParse::$dumpTemp['ItemExcellents'][0] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents(ldItemParse::$dumpTemp['ItemIdSection'], ldItemParse::$dumpTemp['ItemIdIndex'])->opt0 ."</em><br />"; 
                                if(ldItemParse::$dumpTemp['ItemExcellents'][1] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents(ldItemParse::$dumpTemp['ItemIdSection'], ldItemParse::$dumpTemp['ItemIdIndex'])->opt1 ."</em><br />"; 
                                if(ldItemParse::$dumpTemp['ItemExcellents'][2] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents(ldItemParse::$dumpTemp['ItemIdSection'], ldItemParse::$dumpTemp['ItemIdIndex'])->opt2 ."</em><br />"; 
                                if(ldItemParse::$dumpTemp['ItemExcellents'][3] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents(ldItemParse::$dumpTemp['ItemIdSection'], ldItemParse::$dumpTemp['ItemIdIndex'])->opt3 ."</em><br />"; 
                                if(ldItemParse::$dumpTemp['ItemExcellents'][4] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents(ldItemParse::$dumpTemp['ItemIdSection'], ldItemParse::$dumpTemp['ItemIdIndex'])->opt4 ."</em><br />"; 
                                if(ldItemParse::$dumpTemp['ItemExcellents'][5] == true)
                                    $response .= "<em> - ". ldItemOptionsDatabase::getExcellents(ldItemParse::$dumpTemp['ItemIdSection'], ldItemParse::$dumpTemp['ItemIdIndex'])->opt5 ."</em><br />"; 
                                $response .= "</strong>";
                            }
                            if($getItem->dbVersion > 2) $response .= "<br /><em>".LDPU_VIRTUAL_VAULT_TEXT_REFINE.":</em> <strong>".(ldItemParse::$dumpTemp['ItemRefine'] > 0 ? ldItemOptionsDatabase::getRefine(ldItemParse::$dumpTemp['ItemIdSection'], ldItemParse::$dumpTemp['ItemIdIndex'])->opt0." ,".ldItemOptionsDatabase::getRefine(ldItemParse::$dumpTemp['ItemIdSection'], ldItemParse::$dumpTemp['ItemIdIndex'])->opt1 : LDPU_NOT)."</strong><br />";
                            if($getItem->dbVersion > 2) $response .= "<br /><em>".LDPU_VIRTUAL_VAULT_TEXT_HARMONY.":</em> <strong>".(ldItemParse::$dumpTemp['HarmonyType'] > 0 ? ldItemOptionsDatabase::getHarmony(ldItemParse::$dumpTemp['ItemIdSection'], ldItemParse::$dumpTemp['HarmonyType'], ldItemParse::$dumpTemp['HarmonyLevel']) : LDPU_NOT)."</strong><br />";
                            if($getItem->dbVersion > 2 && $VIRTUAL_VAULT['SOCKET_OPTIONS'] == true) 
                            {
                                $response .= "<br /><em>".LDPU_VIRTUAL_VAULT_TEXT_SOCKET.":</em><br />";
                                $socketOptions = ldItemOptionsDatabase::getSocket();
                                if($VIRTUAL_VAULT['MUSERVER_MANUFACTURER'] == 1)
                                    foreach( ldItemParse::$dumpTemp['Sockect'] as &$socket )
                                        if($socket != $socketOptions["notSocket"] && $socket != $socketOptions["emptySocket"]) $socket++;
                                
                                if(ldItemParse::$dumpTemp['Sockect'][0] == $socketOptions["notSocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 1: ". $socketOptions["socketTypeNumber"][$socketOptions["notSocket"]]["socketName"] ."<br />";
                                elseif(ldItemParse::$dumpTemp['Sockect'][0] == $socketOptions["emptySocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 1: ". $socketOptions["socketTypeNumber"][$socketOptions["emptySocket"]]["socketName"] ."<br />";
                                else
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 1: <strong>". $socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][0] % 0x32]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][0] % 0x32]["socketName"] ." + ".$socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][0] % 0x32]["socketsArgs"][1]."</strong><br />";
                                
                                if(ldItemParse::$dumpTemp['Sockect'][1] == $socketOptions["notSocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 2: ". $socketOptions["socketTypeNumber"][$socketOptions["notSocket"]]["socketName"] ."<br />";
                                elseif(ldItemParse::$dumpTemp['Sockect'][1] == $socketOptions["emptySocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 2: ". $socketOptions["socketTypeNumber"][$socketOptions["emptySocket"]]["socketName"] ."<br />";
                                else
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 2: <strong>". $socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][1] % 0x32]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][1] % 0x32]["socketName"] ." + ".$socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][1] % 0x32]["socketsArgs"][2]."</strong><br />";
                                
                                if(ldItemParse::$dumpTemp['Sockect'][2] == $socketOptions["notSocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 3: ". $socketOptions["socketTypeNumber"][$socketOptions["notSocket"]]["socketName"] ."<br />";
                                elseif(ldItemParse::$dumpTemp['Sockect'][2] == $socketOptions["emptySocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 3: ". $socketOptions["socketTypeNumber"][$socketOptions["emptySocket"]]["socketName"] ."<br />";
                                else
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 3: <strong>". $socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][2] % 0x32]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][2] % 0x32]["socketName"] ." + ".$socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][2] % 0x32]["socketsArgs"][3]."</strong><br />";
                                
                                if(ldItemParse::$dumpTemp['Sockect'][3] == $socketOptions["notSocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 4: ". $socketOptions["socketTypeNumber"][$socketOptions["notSocket"]]["socketName"] ."<br />";
                                elseif(ldItemParse::$dumpTemp['Sockect'][3] == $socketOptions["emptySocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 4: ". $socketOptions["socketTypeNumber"][$socketOptions["emptySocket"]]["socketName"] ."<br />";
                                else
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 4: <strong>". $socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][3] % 0x32]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][3] % 0x32]["socketName"] ." + ".$socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][3] % 0x32]["socketsArgs"][4]."</strong><br />";
                                
                                if(ldItemParse::$dumpTemp['Sockect'][4] == $socketOptions["notSocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 5: ". $socketOptions["socketTypeNumber"][$socketOptions["notSocket"]]["socketName"] ."<br />";
                                elseif(ldItemParse::$dumpTemp['Sockect'][4] == $socketOptions["emptySocket"])
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 5: ". $socketOptions["socketTypeNumber"][$socketOptions["emptySocket"]]["socketName"] ."<br />";
                                else
                                    $response .= "<em> - ".LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME." 5: <strong>". $socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][4] % 0x32]["socketTypeName"] .": ". $socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][4] % 0x32]["socketName"] ." + ".$socketOptions["socketTypeNumber"][ldItemParse::$dumpTemp['Sockect'][4] % 0x32]["socketsArgs"][5]."</strong><br />";
                            }
                            
                            $response .= "</td>"; 
                            $response .= "<td align=\"right\" valign=\"top\">";
                            $response .= "<input type=\"button\" class=\"button\" value=\"".LDPU_VIRTUAL_VAULT_TEXT_SEND_TO_VAULT_GAME."\" onclick=\"jQuery.post('?page=paneluser&option=VIRTUAL_VAULT&action=send&to=game&key={$_GET['key']}', function(response) { jQuery('#detailsVault').html( response ); }, 'html');\" /><br />";
                            //$response .= "<input type=\"button\" class=\"button\" value=\"Anunciar item\" onclick=\"jQuery.post('?page=paneluser&option=VIRTUAL_VAULT&action=sell&key={$_GET['key']}', function(response) { jQuery('#detailsVault').html( response ); }, 'html');\" />";
                            $response .= "</td>";
                            $response .= "</tr>";
                            $response .= "</table>";
                            break;
                    }
                    throw new Exception($response);  
                } 
                catch(Exception $e)
                {
                    exit($e->getMessage());
                }
            }
            elseif($_GET['action'] == "send")
            {
                try
                {   
                    if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) 
                        throw new Exception("<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>");
                    
                    switch($_GET['to'])
                    {
                        case "virtual":
                            if($_GET['key'] < 0 || $_GET['key'] > 120)
                                throw new Exception("loadOptionsVirtualVault() :: Invalid key");
                                
                            $this->ldVault = new ldVault($_SESSION['LOGIN']);
                            $this->ldVault->getVault();   
                            $this->ldVault->cutCode();  
                            $this->ldVault->structureVault();
                            if($this->ldVault->codeGroup[$_GET['key']]['Details']['IsItem'] == false)
                                throw new Exception(LDPU_VIRTUAL_VAULT_ITEM_NOT_FOUND); 
                            
                            $insert = $this->query("INSERT INTO [".DATABASE_ACCOUNTS."].[dbo].[ExtWareHouseVirtual] ([AccountId] ,[Item], [dbVersion]) VALUES ('{$_SESSION['LOGIN']}', 0x{$this->ldVault->codeGroup[$_GET['key']]['Code']}, {$this->ldVault->dbVersion}); SELECT IDENT_CURRENT('[".DATABASE_ACCOUNTS."].[dbo].[ExtWareHouseVirtual]') as [Number];");
                            if($insert == true)
                            {
                                $insert = mssql_fetch_object($insert);
                                $insert = (int)$insert->Number;
                                
                                $jqueryTmp = "jQuery('#itemsVaultGame li#liItemVaultGame_{$_GET['key']}').fadeOut('slow', function() { jQuery(this).remove(); } );
                                              jQuery('#itemsVaultVirtual').fadeIn('slow').prepend('<li id=\"liItemVaultVirtual_{$insert}\" onclick=\"Verify(\'?page=paneluser&option=VIRTUAL_VAULT&action=details&vault=virtual&key={$insert}\', \'detailsVault\', \'get\');\">{$this->ldVault->codeGroup[$_GET['key']]['Details']['ItemName']} +{$this->ldVault->codeGroup[$_GET['key']]['Details']['ItemLevel']} +".($this->ldVault->codeGroup[$_GET['key']]['Details']['ItemOption']*4)."</li>');";
                                $this->ldVault->insertItemInSlot( ($this->ldVault->dbVersion > 2 ? str_repeat("F", 32) : str_repeat("F", 20)) , $_GET['key']);
                                $this->ldVault->writeVault(true);
                                throw new Exception("<script type=\"text/javascript\">
                                                     jQuery(document).ready(function(){
                                                        {$jqueryTmp} 
                                                     });
                                                     </script>");
                            }
                            else
                            {
                                throw new Exception(LDPU_VIRTUAL_VAULT_TEXT_SEND_ERROR);
                            }
                            break;
                        case "game":
                            if(is_numeric($_GET['key']) == false)
                                throw new Exception("loadOptionsVirtualVault() :: Invalid key");
                            
                            $getItemQ = $this->query("SELECT [Number],[Item],[dbVersion] FROM [".DATABASE_ACCOUNTS."].[dbo].[ExtWareHouseVirtual] WHERE [AccountId] = '{$_SESSION['LOGIN']}' AND [Number] = ".(int)$_GET['key']);
                            if(mssql_num_rows($getItemQ) == 0)
                                throw new Exception(LDPU_VIRTUAL_VAULT_ITEM_NOT_FOUND); 
                            
                            $getItem = mssql_fetch_object($getItemQ);
                            
                            $this->ldVault = new ldVault($_SESSION['LOGIN']);
                            $this->ldVault->getVault();   
                            $this->ldVault->cutCode();  
                            $this->ldVault->structureVault();
                            
                            ldItemParse::parseHexItem(bin2hex($getItem->Item), $getItem->dbVersion);
                            
                            $slotFree = $this->ldVault->searchSlotsInVault(ldItemParse::$dumpTemp['Item']['X'], ldItemParse::$dumpTemp['Item']['Y']);
                            
                            if($slotFree > -1)
                            {
                                $this->ldVault->insertItemInSlot(bin2hex($getItem->Item), $slotFree);
                                if($this->ldVault->writeVault(true) == true)
                                {
                                    $this->query("DELETE FROM [".DATABASE_ACCOUNTS."].[dbo].[ExtWareHouseVirtual] WHERE [AccountId] = '{$_SESSION['LOGIN']}' AND [Number] = ".(int)$_GET['key']); 
                                    throw new Exception("<script type=\"text/javascript\">
                                                         jQuery(document).ready(function(){
                                                            jQuery('#liItemVaultVirtual_{$_GET['key']}').fadeOut('slow', function() { jQuery(this).remove(); } );
                                                            jQuery('#itemsVaultGame').fadeIn('slow').prepend('<li id=\"liItemVaultGame_{$slotFree}\" onclick=\"Verify(\'?page=paneluser&option=VIRTUAL_VAULT&action=details&vault=game&key={$slotFree}\', \'detailsVault\', \'get\');\">".ldItemParse::$dumpTemp['ItemName']." +".ldItemParse::$dumpTemp['ItemLevel']." +".(ldItemParse::$dumpTemp['ItemOption']*4)."</li>');
                                                         });
                                                         </script>");
                                }
                            }
                            else
                            {
                                throw new Exception("<div class='qdestaques'>".LDPU_VIRTUAL_VAULT_TEXT_SEND_ERROR_NO_SPACE."</div>");
                            }
                            break;
                    }                       
                    throw new Exception("");  
                } 
                catch(Exception $e)
                {
                    exit($e->getMessage());
                }  
            }
            else
            {
                $this->ldVault = new ldVault($_SESSION['LOGIN']);
                $this->ldVault->getVault();   
                $this->ldVault->cutCode();  
                $this->ldVault->structureVault();
                foreach($this->ldVault->codeGroup as $key => $item)
                {   
                    if($item['Details']['IsItem'] == true)
                    {
                        $liItemsVaultGame .= "<li id=\"liItemVaultGame_{$key}\" onclick=\"Verify('?page=paneluser&option=VIRTUAL_VAULT&action=details&vault=game&key={$key}', 'detailsVault', 'get');\">{$item['Details']['ItemName']} +{$item['Details']['ItemLevel']} +".($item['Details']['ItemOption']*4)."</li>\n";    
                    }
                }
                
                $getVirtualVaultQ = $this->query("SELECT [Number],[Item],[dbVersion] FROM [".DATABASE_ACCOUNTS."].[dbo].[ExtWareHouseVirtual] WHERE [AccountId] = '{$_SESSION['LOGIN']}' ORDER BY [Number] DESC");
                while($getVirtualVault = mssql_fetch_object($getVirtualVaultQ))
                {
                    ldItemParse::parseHexItem(bin2hex($getVirtualVault->Item), $getVirtualVault->dbVersion);
                    $liItemsVaultVirtual .= "<li id=\"liItemVaultVirtual_{$getVirtualVault->Number}\" onclick=\"Verify('?page=paneluser&option=VIRTUAL_VAULT&action=details&vault=virtual&key={$getVirtualVault->Number}', 'detailsVault', 'get');\">".ldItemParse::$dumpTemp['ItemName']." +".ldItemParse::$dumpTemp['ItemLevel']." +".(ldItemParse::$dumpTemp['ItemOption']*4)."</li>\n";
                }
                 
            }
            $ldTpl->set("liItemsVaultVirtual", $liItemsVaultVirtual);
            $ldTpl->set("liItemsVaultGame", $liItemsVaultGame);
        }		
		private function loadOptionsDoubleVault()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
			{		
				$vault_check = $this->query("SELECT 1 FROM ".DATABASE_ACCOUNTS.".dbo.warehouse WHERE AccountID='". $_SESSION['LOGIN'] ."'");
				$vault_check = mssql_num_rows($vault_check);		
				if($vault_check == 0) $tempRepost .= "<div class='quadros'><strong>".LDPU_DOUBLE_VAULT_NOT_HAVE_VAULT."</strong></div>";
				else
				{
					$checkPwdQ = $this->query('exec dbo.webVerifyLogin "'. $_SESSION['LOGIN'] .'","'. $_POST['userPwd'] .'","'. USE_MD5 .'"');
					$checkPwd = mssql_fetch_row($checkPwdQ);
					if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
					elseif(empty($_POST['userPwd']) == true) $tempRepost .= "<div class='qdestaques2'>".LDPU_DOUBLE_VAULT_FILL_PASSWORD."</div>";
					elseif(strlen($_POST['userPwd']) > 10) $tempRepost .= "<div class='qdestaques2'>".LDPU_DOUBLE_VAULT_INVALID_SIZE_PASSWORD."</div>";
					elseif($checkPwd[0] == 0) $tempRepost .= "<div class='qdestaques2'>".LDPU_DOUBLE_VAULT_INVALID_PASSWORD."</div>";
					else {
                        if($this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.warehouse SET items = items2, items2 = items WHERE AccountID='".$_SESSION['LOGIN']."'"))
                        {
							$tempRepost .= "<div class='qdestaques2'>".LDPU_DOUBLE_VAULT_SUCCESS_ALTER."</div>";
                            $this->writeLog(3, $_SESSION['LOGIN'], "", ""); 
                            $this->query("EXEC [dbo].[webPanelAction_DoubleVault] '". $_SESSION['LOGIN'] ."', ''"); 
                        }
						else
							$tempRepost .= "<div class='qdestaques'>".LDPU_DOUBLE_VAULT_ERROR_ALTER."</div>";
					}
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}
        private function loadOptionsTransferCash()
        {
            global $ldTpl, $TABLES_CONFIGS;                   
            try
            {
                if($_GET['action'] == "transfer")
                {
                    if(empty($_POST['usernameDestine']) == true)
                        throw new Exception(LDPU_TRANSFER_CASH_FILL_LOGIN_DESTINY, 2);
                        
                    if(is_numeric($_POST['amount']) == false || $_POST['amount'] < 1) 
                        throw new Exception(LDPU_TRANSFER_CASH_INVALID_AMOUNT, 2);
                        
                    if($_POST['typeCash'] != 1 && $_POST['typeCash'] != 2)
                        throw new Exception(LDPU_TRANSFER_CASH_INVALID_TYPE, 2);
                    
                    if(mssql_num_rows($this->query("SELECT memb___id FROM ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO WHERE memb___id='".$_POST['usernameDestine']."'")) == 0)
                        throw new Exception(sprintf(LDPU_TRANSFER_CASH_LOGIN_NOT_FOUND, $_POST['usernameDestine']), 2);
                    
                    if($_POST['usernameDestine'] == $_SESSION['LOGIN'])
                        throw new Exception(LDPU_TRANSFER_CASH_CANT_TRANSF_TO_YOU_LOGIN, 2);
                    
                    $checkPermission = $this->query("SELECT resale FROM ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO WHERE memb___id='".$_SESSION['LOGIN']."'");    
                    if(mssql_fetch_object($checkPermission)->resale == 0)
                        throw new Exception(LDPU_TRANSFER_CASH_NOT_HAVE_PREVILEGY, 2);
                    
                        
                    switch((int)$_POST['typeCash'])
                    {
                        case 1:
                            $findAmountCashQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." as amount FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."'");
                            $findAmountCash = mssql_fetch_object($findAmountCashQ)->amount;
                            if($findAmountCash < $_POST['amount'])
                                throw new Exception(sprintf(LDPU_TRANSFER_CASH_NOT_HAVE_THIS_AMOUNT, constant("CASH_NAME")), 2);
                            
                            $remove = $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                                     SET ".$TABLES_CONFIGS['WEBCASH']['columnAmount']."=".$TABLES_CONFIGS['WEBCASH']['columnAmount']."-".$_POST['amount']." 
                                                    WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."' AND ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." > ".$_POST['amount']."; 
                                                    SELECT @@ROWCOUNT [count];");
                            if(mssql_fetch_object($remove)->count == 0)                                                                         
                                throw new Exception(sprintf(LDPU_TRANSFER_CASH_NOT_HAVE_THIS_AMOUNT, constant("CASH_NAME")), 2);
                            
                            $insert = $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                                     SET ".$TABLES_CONFIGS['WEBCASH']['columnAmount']."=".$TABLES_CONFIGS['WEBCASH']['columnAmount']."+".$_POST['amount']." 
                                                    WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_POST['usernameDestine']."';
                                                    SELECT @@ROWCOUNT [count];");
                            if(mssql_fetch_object($insert)->count == 0)
                            {
                                $remove = $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                                         SET ".$TABLES_CONFIGS['WEBCASH']['columnAmount']."=".$TABLES_CONFIGS['WEBCASH']['columnAmount']."+".$_POST['amount']." 
                                                        WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."'");
                                
                                throw new Exception(sprintf(LDPU_TRANSFER_CASH_ERROR, constant("CASH_NAME")), 2);
                            }                                                                                                                                        
                            $this->writeLog(17, $_SESSION['LOGIN'], "", sprintf(LDPU_TRANSFER_CASH_LOG_SUCCESS, $_POST['usernameDestine'], $_POST['amount'], constant("CASH_NAME")));
                            throw new Exception(sprintf(LDPU_TRANSFER_CASH_TEXT_SUCCESS, $_POST['amount'], constant("CASH_NAME"), $_POST['usernameDestine']), 1);
                            break;
                        case 2:
                            $findAmountCashQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBCASH']['columnAmount2']." as amount FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."'");
                            $findAmountCash = mssql_fetch_object($findAmountCashQ)->amount;
                            if($findAmountCash < $_POST['amount'])
                                throw new Exception(sprintf(LDPU_TRANSFER_CASH_NOT_HAVE_THIS_AMOUNT, constant("CASH_NAME2")), 2);
                            
                            $remove = $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                                     SET ".$TABLES_CONFIGS['WEBCASH']['columnAmount2']."=".$TABLES_CONFIGS['WEBCASH']['columnAmount2']."-".$_POST['amount']." 
                                                    WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."' AND ".$TABLES_CONFIGS['WEBCASH']['columnAmount2']." > ".$_POST['amount']."; 
                                                    SELECT @@ROWCOUNT [count];");
                            if(mssql_fetch_object($remove)->count == 0)
                                throw new Exception(sprintf(LDPU_TRANSFER_CASH_NOT_HAVE_THIS_AMOUNT, constant("CASH_NAME2")), 2);
                            
                            $insert = $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                                     SET ".$TABLES_CONFIGS['WEBCASH']['columnAmount2']."=".$TABLES_CONFIGS['WEBCASH']['columnAmount2']."+".$_POST['amount']." 
                                                    WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_POST['usernameDestine']."';
                                                    SELECT @@ROWCOUNT [count];");
                            if(mssql_fetch_object($insert)->count == 0)
                            {
                                $remove = $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                                         SET ".$TABLES_CONFIGS['WEBCASH']['columnAmount2']."=".$TABLES_CONFIGS['WEBCASH']['columnAmount2']."+".$_POST['amount']." 
                                                        WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."'");
                                
                                throw new Exception(sprintf(LDPU_TRANSFER_CASH_ERROR, constant("CASH_NAME2")), 2);
                            }
                            $this->writeLog(17, $_SESSION['LOGIN'], "", sprintf(LDPU_TRANSFER_CASH_LOG_SUCCESS, $_POST['usernameDestine'], $_POST['amount'], constant("CASH_NAME2")));
                            throw new Exception(sprintf(LDPU_TRANSFER_CASH_TEXT_SUCCESS, $_POST['amount'], constant("CASH_NAME2"), $_POST['usernameDestine']), 1);
                            break;
                    }
                } 
                throw new Exception("", 0);                                 
            }
            catch (Exception $e)
            {
            
                $findAmountCashQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." as amount, ".$TABLES_CONFIGS['WEBCASH']['columnAmount2']." as amount2 FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."'");
                $findAmountCash = mssql_fetch_object($findAmountCashQ);
                $ldTpl->set("MEMB___ID", $_SESSION['LOGIN']);
                $ldTpl->set("CASH_AMOUNT", $findAmountCash->amount);
                $ldTpl->set("CASH_AMOUNT2", $findAmountCash->amount2);
                
                if($e->getCode() == 2) //Quadro vermelho
                    $ldTpl->set("RespostWrite", "<div class='qdestaques'>".$e->getMessage()."</div>");
                elseif($e->getCode() == 1)  // quadro azul
                    $ldTpl->set("RespostWrite", "<div class='qdestaques2'>".$e->getMessage()."</div>");
                else
                    $ldTpl->set("RespostWrite", $e->getMessage());
            }
        }   
        private function loadOptionsGameDisconnect()
        {
            global $ldTpl, $PANELUSER_MODULE, $PANELADMIN_MODULE;
            if($_GET['Write'] == true)
            {        
                $checkPwdQ = $this->query('exec dbo.webVerifyLogin "'. $_SESSION['LOGIN'] .'","'. $_POST['password'] .'","'. USE_MD5 .'"');
                $checkPwd = mssql_fetch_row($checkPwdQ);
                if($this->checkOnlineAccount($_SESSION['LOGIN']) == 0) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
                elseif($checkPwd[0] == 0) $tempRepost .= "<div class='qdestaques2'>".LDPU_GAME_DISCONNECT_INVALID_PASSWORD."</div>";
                else 
                {
                    $ldGame = new ldGame($PANELADMIN_MODULE['JOINSERVER']['IP'], $PANELADMIN_MODULE['JOINSERVER']['PORT']);
                    $tempRepost .= "<div class='qdestaques2'>".str_replace("\\n", "<br />", $ldGame->disconnectPlayer($_SESSION['LOGIN']))."</div>";
                    $this->writeLog(16, $_SESSION['LOGIN'], "", "");
                }
            }
            $ldTpl->set("RespostWrite", $tempRepost);
        }
		private function loadOptionsLogBuys()
		{
			global $ldTpl, $PANELUSER_MODULE;
			switch($_GET['Write'])
			{
				case 1:
					$findLogQ = $this->query("SELECT * FROM dbo.webLogBuyCash WHERE username='". $_SESSION['LOGIN'] ."'");
					while($findLog = mssql_fetch_object($findLogQ))
					{
						$tempRepost .= "<div class=\"quadros\"><em>".LDPU_LOG_BUY_TEXT_ID.":</em> <strong>".$findLog->id."</strong><br /><em>".LDPU_LOG_BUY_TEXT_AMOUNT.":</em> <strong>".$findLog->cash."</strong><br /><em>".LDPU_LOG_BUY_TEXT_DATE.":</em> <strong>".$findLog->data."</strong><br /><em>".LDPU_LOG_BUY_TEXT_HOUR.":</em> <strong>".$findLog->hora."</strong><br /><em>".LDPU_LOG_BUY_TEXT_COMMENT.":</em> <strong>".nl2br(base64_decode($findLog->comentario))."</strong><br /><em>".LDPU_LOG_BUY_TEXT_COMMENT_ADM.":</em> <strong>".nl2br(base64_decode($findLog->comentario_adm))."</strong><br /><em>".LDPU_LOG_BUY_TEXT_STATUS.":</em> <strong>". ($findLog->status == 0 ? LDPU_LOG_BUY_TEXT_IN_PROGRESS : ($findLog->status == 1 ? LDPU_LOG_BUY_TEXT_COMPLETED : ($findLog->status == 0 ? LDPU_LOG_BUY_TEXT_REJECTED : LDPU_LOG_BUY_TEXT_STATUS_ERROR))) ."</strong><br /></div>";
					}
					break;
				case 2:
					$findLogQ = $this->query("SELECT * FROM dbo.webLogBuyVips WHERE username='". $_SESSION['LOGIN'] ."'");
					while($findLog = mssql_fetch_object($findLogQ))
					{
						$tempRepost .= "<div class=\"quadros\"><em>".LDPU_LOG_BUY_TEXT_ID.":</em> <strong>".$findLog->id."</strong><br /><em>".LDPU_LOG_BUY_TEXT_TYPE.":</em> <strong>". ($PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][$findLog->type])."</strong><br /><em>".LDPU_LOG_BUY_TEXT_DAYS.":</em> <strong>".$findLog->days."</strong><br /><em>".LDPU_LOG_BUY_TEXT_VALUE_BY.":</em> <strong>".$findLog->cashAmount."</strong><br /><em>".LDPU_LOG_BUY_TEXT_DATE.":</em> <strong>". date("d/m/Y g:i a",$findLog->date) ."</strong><br /></div>";
					}
					break;
			}			
			$ldTpl->set("RespostWrite", $tempRepost);
		}
		private function loadOptionsModifyPersonalID()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
			{
				$checkPwdQ = $this->query('exec dbo.webVerifyLogin "'. $_SESSION['LOGIN'] .'","'. $_POST['pwd'] .'","'. USE_MD5 .'"');
				$checkPwd = mssql_fetch_row($checkPwdQ);
				if(is_numeric($_POST['pid']) == false) $tempRepost .= "<div class='qdestaques'><strong style='color:red;'>".LDPU_MODIFY_PID_FILL_ONLY_NUMBERS."</strong></div>";
				elseif(strlen($_POST['pid']) != 7) $tempRepost .= "<div class='qdestaques'><strong style='color:red;'>".LDPU_MODIFY_PID_INVALID_SIZE."</strong></div>";
				elseif($checkPwd[0] == 0) $tempRepost .= "<div class='qdestaques'><strong style='color:red;'>".LDPU_MODIFY_PID_INVALID_PASSWORD."</strong></div>";
				else {
                    $this->writeLog(4, $_SESSION['LOGIN'], "", ""); 
					$this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO SET sno__numb = 111111".$_POST['pid']." WHERE memb___id='".$_SESSION['LOGIN']."'");
					$tempRepost .= "<div class='quadros'><strong style='color:blue;'>".LDPU_MODIFY_PID_SUCCESS."</strong></div>";		
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}  
        private function loadOptionsReset()
        {
            global $ldTpl, $PANELUSER_MODULE, $TABLES_CONFIGS, $CLASS_CHARACTERS; 
            $findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
            while($findCharacters = mssql_fetch_object($findCharactersQ)){
                $tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
            }
            $ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
            unset($tempOption);
            
            if(empty($_GET['character']) == false)
            {
                $findCharactersQ = $this->query("SELECT ".COLUMN_RESETS.", Class, Money, cLevel  FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'");
                if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
                elseif(mssql_num_rows($findCharactersQ) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
                else
                {
                    $findCharacters = mssql_fetch_row($findCharactersQ);
                    $findTypeAccountQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
                    $findTypeAccount = mssql_fetch_object($findTypeAccountQ);
                    $findCharacters[0]++;
                    switch($PANELUSER_MODULE['RESET']['RESET_MODE'])
                    {
                        case 1:
                            $this->LevelReset  = $PANELUSER_MODULE['RESET']['0-10']['LevelReset'][(int)$findTypeAccount->type];
                            $this->LevelAfter  = $PANELUSER_MODULE['RESET']['0-10']['LevelAfter'][(int)$findTypeAccount->type];
                            $this->ZenRequire  = $PANELUSER_MODULE['RESET']['0-10']['ZenRequire'][(int)$findTypeAccount->type];
                            $this->Points      = $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type];
                            $this->CleanItens  = $PANELUSER_MODULE['RESET']['0-10']['CleanItens'][(int)$findTypeAccount->type];
                            $this->CleanMagics = $PANELUSER_MODULE['RESET']['0-10']['CleanMagics'][(int)$findTypeAccount->type];
                            $this->CleanQuests = $PANELUSER_MODULE['RESET']['0-10']['CleanQuests'][(int)$findTypeAccount->type];
                            $this->LimitResets = $PANELUSER_MODULE['RESET']['LimitResets'][(int)$findTypeAccount->type];
                            $this->ResetPoints = true;
                            break;
                        case 2: 
                            if($findCharacters[0] >= 0 && $findCharacters[0] <= 10) $this->intervalResets = '0-10';
                            elseif($findCharacters[0] >= 11 && $findCharacters[0] <= 50) $this->intervalResets = '11-50';
                            elseif($findCharacters[0] >= 51 && $findCharacters[0] <= 100) $this->intervalResets = '51-100';
                            elseif($findCharacters[0] >= 101 && $findCharacters[0] <= 150) $this->intervalResets = '101-150';
                            elseif($findCharacters[0] >= 151 && $findCharacters[0] <= 200) $this->intervalResets = '151-200';
                            elseif($findCharacters[0] >= 201 && $findCharacters[0] <= 300) $this->intervalResets = '201-300';
                            elseif($findCharacters[0] >= 301) $this->intervalResets = '301-XXX';
                            $this->LevelReset  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['LevelReset'][(int)$findTypeAccount->type];
                            $this->LevelAfter  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['LevelAfter'][(int)$findTypeAccount->type];
                            $this->ZenRequire  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['ZenRequire'][(int)$findTypeAccount->type];
                            $this->Points      = $PANELUSER_MODULE['RESET'][$this->intervalResets]['Points'][(int)$findTypeAccount->type];
                            $this->CleanItens  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanItens'][(int)$findTypeAccount->type];
                            $this->CleanMagics = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanMagics'][(int)$findTypeAccount->type];
                            $this->CleanQuests = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanQuests'][(int)$findTypeAccount->type];
                            $this->LimitResets = $PANELUSER_MODULE['RESET']['LimitResets'][(int)$findTypeAccount->type];
                            $this->ResetPoints = true;
                            break;
                        case 3: 
                            $this->LevelReset  = $PANELUSER_MODULE['RESET']['0-10']['LevelReset'][(int)$findTypeAccount->type];
                            $this->LevelAfter  = $PANELUSER_MODULE['RESET']['0-10']['LevelAfter'][(int)$findTypeAccount->type];
                            $this->ZenRequire  = $PANELUSER_MODULE['RESET']['0-10']['ZenRequire'][(int)$findTypeAccount->type];
                            $this->Points      = $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type];
                            $this->CleanItens  = $PANELUSER_MODULE['RESET']['0-10']['CleanItens'][(int)$findTypeAccount->type];
                            $this->CleanMagics = $PANELUSER_MODULE['RESET']['0-10']['CleanMagics'][(int)$findTypeAccount->type];
                            $this->CleanQuests = $PANELUSER_MODULE['RESET']['0-10']['CleanQuests'][(int)$findTypeAccount->type];
                            $this->LimitResets = $PANELUSER_MODULE['RESET']['LimitResets'][(int)$findTypeAccount->type];
                            $this->ResetPoints = false;
                            break;
                        case 4: 
                            if($findCharacters[0] >= 0 && $findCharacters[0] <= 10) $this->intervalResets = '0-10';
                            elseif($findCharacters[0] >= 11 && $findCharacters[0] <= 50) $this->intervalResets = '11-50';
                            elseif($findCharacters[0] >= 51 && $findCharacters[0] <= 100) $this->intervalResets = '51-100';
                            elseif($findCharacters[0] >= 101 && $findCharacters[0] <= 150) $this->intervalResets = '101-150';
                            elseif($findCharacters[0] >= 151 && $findCharacters[0] <= 200) $this->intervalResets = '151-200';
                            elseif($findCharacters[0] >= 201 && $findCharacters[0] <= 300) $this->intervalResets = '201-300';
                            elseif($findCharacters[0] >= 301) $this->intervalResets = '301-XXX';
                            
                            $this->LevelReset  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['LevelReset'][(int)$findTypeAccount->type];
                            $this->LevelAfter  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['LevelAfter'][(int)$findTypeAccount->type];
                            $this->ZenRequire  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['ZenRequire'][(int)$findTypeAccount->type];
                            $this->CleanItens  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanItens'][(int)$findTypeAccount->type];
                            $this->CleanMagics = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanMagics'][(int)$findTypeAccount->type];
                            $this->CleanQuests = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanQuests'][(int)$findTypeAccount->type];
                            $this->LimitResets = $PANELUSER_MODULE['RESET']['LimitResets'][(int)$findTypeAccount->type];
                            $this->ResetPoints = true;
                            
                            if($findCharacters[0] >= 0 && $findCharacters[0] <= 10) 
                            {
                                $this->Points = (int) ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] )
                                ;
                            }
                            elseif($findCharacters[0] >= 11 && $findCharacters[0] <= 50) 
                            {
                                $this->Points = (int)(( $findCharacters[0] * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            elseif($findCharacters[0] >= 51 && $findCharacters[0] <= 100)
                            {
                                $this->Points = (int)(( $findCharacters[0] * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['51-100']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            elseif($findCharacters[0] >= 101 && $findCharacters[0] <= 150) 
                            {
                                $this->Points = (int)(( $findCharacters[0] * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['51-100']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['101-150']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            elseif($findCharacters[0] >= 151 && $findCharacters[0] <= 200) 
                            {
                                $this->Points = (int)(( $findCharacters[0] * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['51-100']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['101-150']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['151-200']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            elseif($findCharacters[0] >= 201 && $findCharacters[0] <= 300) 
                            {   
                                $this->Points = (int)(( $findCharacters[0] * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['51-100']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['101-150']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['151-200']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['201-300']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            elseif($findCharacters[0] >= 301) 
                            {
                                $this->Points = (int)(( $findCharacters[0] * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['51-100']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['101-150']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['151-200']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['201-300']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $findCharacters[0] * $PANELUSER_MODULE['RESET']['301-XXX']['Points'][(int)$findTypeAccount->type] )
                                );
                            } 
                            break;
                    }
                    if($_GET['reset'] == false)
                    {
                        if($findCharacters[3] < $this->LevelReset) $errorReset .= "<strong style='color:#FF0000'>".LDPU_RESET_NOT_HAVE_LEVEL."</strong><br />";
                        if($findCharacters[2] < $this->ZenRequire) $errorReset .= "<strong style='color:#FF0000'>".LDPU_RESET_NOT_HAVE_ZEN."</strong><br />";
                        if($findCharacters[0] >= $this->LimitResets && $this->LimitResets != 0) $errorReset .= "<strong style='color:#FF0000'>".LDPU_RESET_LIMIT_RESETS."</strong><br />";
                        $tempRepost .= "<div class='quadros'>
                                            <em>".LDPU_RESET_TEXT_CHARACTER_SELECTED.":</em> <strong>". $_GET['character'] ."</strong><br />
                                            <strong><em>".LDPU_RESET_TEXT_YOU_NEED_TO_RESET.":</em></strong><br />                        
                                            <em>".LDPU_RESET_TEXT_LEVEL.":</em> <strong>". $this->LevelReset ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_ZEN.":</em> <strong>". $this->ZenRequire ."</strong><br /><br />
                                            <strong><em>".LDPU_RESET_TEXT_STATUS_BEFORE_RESET.":</em></strong><br />
                                            <em>".LDPU_RESET_TEXT_RESETS.":</em> <strong>". (int)($findCharacters[0]-1) ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_LEVEL.":</em> <strong>". $findCharacters[3] ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_ZEN.":</em> <strong>". $findCharacters[2] ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_CLASS.":</em> <strong>". $this->classNameDefine($findCharacters[1]) ."</strong><br /><br />
                                            <strong><em>".LDPU_RESET_TEXT_STATUS_AFTER_RESET.":</em></strong><br />
                                            <em>".LDPU_RESET_TEXT_RESETS.":</em> <strong>". ($findCharacters[0]) ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_LEVEL.":</em> <strong>". $this->LevelAfter ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_ZEN.":</em> <strong>". (int)($findCharacters[2]-$this->ZenRequire) ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_CLASS.":</em> <strong>". ($this->CleanQuests == true ? $this->classNameDefine($this->resetClassCode($findCharacters[1])) : $this->classNameDefine($findCharacters[1])) ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_MAGICS.":</em> ". ($this->CleanMagics == true ? "<strong style='color:#FF0000'>".LDPU_RESET_TEXT_MAGICS_ERASE."</strong>":"<strong>".LDPU_RESET_TEXT_MAGICS_NOT_ERASE."</strong>") ."<br />
                                            <em>".LDPU_RESET_TEXT_ITEMS.":</em> ". ($this->CleanItens == true ? "<strong style='color:#FF0000'>".LDPU_RESET_TEXT_ITEMS_ERASE."</strong>":"<strong>".LDPU_RESET_TEXT_ITEMS_NOT_ERASE."</strong>") ."<br />
                                            <em>".LDPU_RESET_TEXT_QUESTS.":</em> ". ($this->CleanQuests == true ? "<strong style='color:#FF0000'>".LDPU_RESET_TEXT_QUESTS_ERASE."</strong>":"<strong>".LDPU_RESET_TEXT_QUESTS_NOT_ERASE."</strong>") ."<br /><br />";
                                            if(isset($errorReset)) $tempRepost .= $errorReset; else $tempRepost .= "<input type='button' class='button' value='".LDPU_RESET_TEXT_SUBMIT."' onclick=\"javascript:window.location='?page=paneluser&amp;option=RESET&amp;character=".urlencode($_GET['character'])."&amp;reset=true';\" />";
                        $tempRepost .= "</div>";
                    } 
                    else
                    {
                        if($findCharacters[3] < $this->LevelReset) $errorReset .= "<strong style='color:#FF0000'>".LDPU_RESET_NOT_HAVE_LEVEL."</strong><br />";
                        if($findCharacters[2] < $this->ZenRequire) $errorReset .= "<strong style='color:#FF0000'>".LDPU_RESET_NOT_HAVE_ZEN."</strong><br />";
                        if($findCharacters[0] >= $this->LimitResets && $this->LimitResets != 0) $errorReset .= "<strong style='color:#FF0000'>".LDPU_RESET_LIMIT_RESETS."</strong><br />";
                        
                        if(isset($errorReset)) $tempRepost .= "<div class='qdestaques'>".$errorReset."</div>";
                        else
                        {
                            $this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET 
                                            Experience = 0 ,
                                            ".COLUMN_RESETS." = ".COLUMN_RESETS." + 1 , 
                                            ".COLUMN_RESETS_WEEK." = ".COLUMN_RESETS_WEEK." + 1,
                                            ".COLUMN_RESETS_MONTH." = ".COLUMN_RESETS_MONTH." + 1,
                                            cLevel = ".$this->LevelAfter." , 
                                            MapNumber = ".($findCharacters[1] >= $CLASS_CHARACTERS['CLASSCODES']['FE'][0] && $findCharacters[1] <= $CLASS_CHARACTERS['CLASSCODES']['HE'][0] ? 3 : 0)." ,
                                            MapPosX = ".($findCharacters[1] >= $CLASS_CHARACTERS['CLASSCODES']['FE'][0] && $findCharacters[1] <= $CLASS_CHARACTERS['CLASSCODES']['HE'][0] ? 174 : 125)." , 
                                            MapPosY = ".($findCharacters[1] >= $CLASS_CHARACTERS['CLASSCODES']['FE'][0] && $findCharacters[1] <= $CLASS_CHARACTERS['CLASSCODES']['HE'][0] ? 111 : 125)." ,
                                            Money = Money - ".$this->ZenRequire." ,
                                            ". ($this->CleanItens == true ? "Inventory = NULL,":"") ."
                                            ". ($this->CleanMagics == true ? "MagicList = NULL,":"") ."
                                            ". ($this->CleanQuests == true ? "Quest = NULL, class = ".$this->resetClassCode($findCharacters[1]).",":"") ."                            
                                            ". ($this->ResetPoints == true ? "Strength = 30 , Dexterity = 30 , Energy = 30 , Vitality = 30, LeaderShip = 30 ,":"") ."
                                            LevelUpPoint = ". ($this->ResetPoints == false ? "LevelUpPoint + ":"").($PANELUSER_MODULE['RESET']['RESET_MODE'] == 4 ? $this->Points : ($findCharacters[0]*$this->Points)) ." 
                                            WHERE Name = '".$_GET['character']."'");
                            
                            $this->writeLog(5, $_SESSION['LOGIN'], $_GET['character'], ($this->CleanItens == true ? LDPU_RESET_LOG_SUBMIT_ERASED_ITEMS:""));                 
                            $tempRepost .= "<div class='qdestaques2'>".LDPU_RESET_TEXT_SUCCESS."</div>";
                            $this->query("EXEC [dbo].[webPanelAction_Reset] '". $_SESSION['LOGIN'] ."', '".$_GET['character']."'"); 
                        }   
                    }
                }
            }
            $ldTpl->set("RespostWrite", $tempRepost);
        }
        private function loadOptionsMasterReset()
        {
            global $ldTpl, $PANELUSER_MODULE, $TABLES_CONFIGS, $CLASS_CHARACTERS; 
            $findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
            while($findCharacters = mssql_fetch_object($findCharactersQ)){
                $tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
            }
            $ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
            unset($tempOption);
            
            if(empty($_GET['character']) == false)
            {
                $findCharactersQ = $this->query("SELECT ".COLUMN_RESETS.", Class, Money, cLevel, ".COLUMN_MASTER_RESETS.", Strength, Dexterity, Energy, Vitality, LeaderShip  FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'");
                if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
                elseif(mssql_num_rows($findCharactersQ) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
                else
                {
                    $findCharacters = mssql_fetch_row($findCharactersQ);
                    $findTypeAccountQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
                    $findTypeAccount = mssql_fetch_object($findTypeAccountQ);
                    $findCharacters[0]++;
                    $this->masterResetRequireResets = $PANELUSER_MODULE['MASTER_RESET']['ResetsRequire'][(int)$findTypeAccount->type];
                    switch($PANELUSER_MODULE['RESET']['RESET_MODE'])
                    {
                        case 1:
                            $this->LevelReset  = $PANELUSER_MODULE['RESET']['0-10']['LevelReset'][(int)$findTypeAccount->type];
                            $this->LevelAfter  = $PANELUSER_MODULE['RESET']['0-10']['LevelAfter'][(int)$findTypeAccount->type];
                            $this->ZenRequire  = $PANELUSER_MODULE['RESET']['0-10']['ZenRequire'][(int)$findTypeAccount->type];
                            $this->Points      = $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type];
                            $this->CleanItens  = $PANELUSER_MODULE['RESET']['0-10']['CleanItens'][(int)$findTypeAccount->type];
                            $this->CleanMagics = $PANELUSER_MODULE['RESET']['0-10']['CleanMagics'][(int)$findTypeAccount->type];
                            $this->CleanQuests = $PANELUSER_MODULE['RESET']['0-10']['CleanQuests'][(int)$findTypeAccount->type];
                            $this->ResetPoints = true;
                            break;
                        case 2: 
                            if($findCharacters[0] >= 0 && $findCharacters[0] <= 10) $this->intervalResets = '0-10';
                            elseif($findCharacters[0] >= 11 && $findCharacters[0] <= 50) $this->intervalResets = '11-50';
                            elseif($findCharacters[0] >= 51 && $findCharacters[0] <= 100) $this->intervalResets = '51-100';
                            elseif($findCharacters[0] >= 101 && $findCharacters[0] <= 150) $this->intervalResets = '101-150';
                            elseif($findCharacters[0] >= 151 && $findCharacters[0] <= 200) $this->intervalResets = '151-200';
                            elseif($findCharacters[0] >= 201 && $findCharacters[0] <= 300) $this->intervalResets = '201-300';
                            elseif($findCharacters[0] >= 301) $this->intervalResets = '301-XXX';
                            $this->LevelReset  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['LevelReset'][(int)$findTypeAccount->type];
                            $this->LevelAfter  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['LevelAfter'][(int)$findTypeAccount->type];
                            $this->ZenRequire  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['ZenRequire'][(int)$findTypeAccount->type];
                            $this->Points      = $PANELUSER_MODULE['RESET'][$this->intervalResets]['Points'][(int)$findTypeAccount->type];
                            $this->CleanItens  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanItens'][(int)$findTypeAccount->type];
                            $this->CleanMagics = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanMagics'][(int)$findTypeAccount->type];
                            $this->CleanQuests = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanQuests'][(int)$findTypeAccount->type];
                            $this->ResetPoints = true;
                            break;
                        case 3: 
                            $this->LevelReset  = $PANELUSER_MODULE['RESET']['0-10']['LevelReset'][(int)$findTypeAccount->type];
                            $this->LevelAfter  = $PANELUSER_MODULE['RESET']['0-10']['LevelAfter'][(int)$findTypeAccount->type];
                            $this->ZenRequire  = $PANELUSER_MODULE['RESET']['0-10']['ZenRequire'][(int)$findTypeAccount->type];
                            $this->Points      = $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type];
                            $this->CleanItens  = $PANELUSER_MODULE['RESET']['0-10']['CleanItens'][(int)$findTypeAccount->type];
                            $this->CleanMagics = $PANELUSER_MODULE['RESET']['0-10']['CleanMagics'][(int)$findTypeAccount->type];
                            $this->CleanQuests = $PANELUSER_MODULE['RESET']['0-10']['CleanQuests'][(int)$findTypeAccount->type];
                            $this->ResetPoints = true;
                            break;
                        case 4: 
                             if($findCharacters[0] >= 0 && $findCharacters[0] <= 10) $this->intervalResets = '0-10';
                            elseif($findCharacters[0] >= 11 && $findCharacters[0] <= 50) $this->intervalResets = '11-50';
                            elseif($findCharacters[0] >= 51 && $findCharacters[0] <= 100) $this->intervalResets = '51-100';
                            elseif($findCharacters[0] >= 101 && $findCharacters[0] <= 150) $this->intervalResets = '101-150';
                            elseif($findCharacters[0] >= 151 && $findCharacters[0] <= 200) $this->intervalResets = '151-200';
                            elseif($findCharacters[0] >= 201 && $findCharacters[0] <= 300) $this->intervalResets = '201-300';
                            elseif($findCharacters[0] >= 301) $this->intervalResets = '301-XXX';
                            
                            $this->LevelReset  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['LevelReset'][(int)$findTypeAccount->type];
                            $this->LevelAfter  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['LevelAfter'][(int)$findTypeAccount->type];
                            $this->ZenRequire  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['ZenRequire'][(int)$findTypeAccount->type];
                            $this->CleanItens  = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanItens'][(int)$findTypeAccount->type];
                            $this->CleanMagics = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanMagics'][(int)$findTypeAccount->type];
                            $this->CleanQuests = $PANELUSER_MODULE['RESET'][$this->intervalResets]['CleanQuests'][(int)$findTypeAccount->type];
                            $this->ResetPoints = true;
                            
                            $newResetsDump = ($findCharacters[0] - $this->masterResetRequireResets);
                            if($newResetsDump >= 0 && $newResetsDump <= 10) 
                            {
                                $this->Points = (int) ( ($newResetsDump) * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] )
                                ;
                            }
                            elseif($newResetsDump >= 11 && $newResetsDump <= 50) 
                            {
                                $this->Points = (int)(( $newResetsDump * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            elseif($newResetsDump >= 51 && $newResetsDump <= 100)
                            {
                                $this->Points = (int)(( $newResetsDump * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['51-100']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            elseif($newResetsDump >= 101 && $newResetsDump <= 150) 
                            {
                                $this->Points = (int)(( $newResetsDump * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['51-100']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['101-150']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            elseif($newResetsDump >= 151 && $newResetsDump <= 200) 
                            {
                                $this->Points = (int)(( $newResetsDump * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['51-100']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['101-150']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['151-200']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            elseif($newResetsDump >= 201 && $newResetsDump <= 300) 
                            {   
                                $this->Points = (int)(( $newResetsDump * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['51-100']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['101-150']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['151-200']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['201-300']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            elseif($newResetsDump >= 301) 
                            {
                                $this->Points = (int)(( $newResetsDump * $PANELUSER_MODULE['RESET']['0-10']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['11-50']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['51-100']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['101-150']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['151-200']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['201-300']['Points'][(int)$findTypeAccount->type] ) +
                                                      ( $newResetsDump * $PANELUSER_MODULE['RESET']['301-XXX']['Points'][(int)$findTypeAccount->type] )
                                );
                            }
                            break;
                    }
                                     
                    if($findCharacters[5] < $PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Strength']) $errorReset .= sprintf("<strong style='color:#FF0000'>".LDPU_MRESET_TEXT_NEED_POINTS_STRENGTH."</strong><br />", $PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Strength']);                                                                                                                         
                    if($findCharacters[6] < $PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Dexterity']) $errorReset .= sprintf("<strong style='color:#FF0000'>".LDPU_MRESET_TEXT_NEED_POINTS_DEXTERITY."</strong><br />", $PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Dexterity']);                                                                                                                         
                    if($findCharacters[7] < $PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Energy']) $errorReset .= sprintf("<strong style='color:#FF0000'>".LDPU_MRESET_TEXT_NEED_POINTS_ENERGY."</strong><br />", $PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Energy']);                                                                                                                         
                    if($findCharacters[8] < $PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Vitality']) $errorReset .= sprintf("<strong style='color:#FF0000'>".LDPU_MRESET_TEXT_NEED_POINTS_VITALITY."</strong><br />", $PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Vitality']);                                                                                                                         
                    if($findCharacters[9] < $PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Leadership'] && $findCharacters[1] >= $CLASS_CHARACTERS['CLASSCODES']['DL'][0] && $findCharacters[1] <= $CLASS_CHARACTERS['CLASSCODES']['LE'][0]) $errorReset .= sprintf("<strong style='color:#FF0000'>".LDPU_MRESET_TEXT_NEED_POINTS_LEADERSHIP."</strong><br />", $PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Leadership']);                                                                                                                         
                    if($findCharacters[3] < $this->LevelReset) $errorReset .= "<strong style='color:#FF0000'>".LDPU_RESET_NOT_HAVE_LEVEL."</strong><br />";
                    if($findCharacters[2] < $this->ZenRequire) $errorReset .= "<strong style='color:#FF0000'>".LDPU_RESET_NOT_HAVE_ZEN."</strong><br />";
                    if(($findCharacters[0]-1) < $this->masterResetRequireResets) $errorReset .= "<strong style='color:#FF0000'>".LDPU_MRESET_TEXT_NOT_HAVE_RESETS."</strong><br />";
                   
                    if($_GET['reset'] == false)
                    {
                        $tempRepost .= "<div class='quadros'>
                                            <em>".LDPU_RESET_TEXT_CHARACTER_SELECTED.":</em> <strong>". $_GET['character'] ."</strong><br /><br />
                                            <strong><em>".LDPU_RESET_TEXT_YOU_NEED_TO_RESET.":</em></strong><br />
                                            <em>".LDPU_RESET_TEXT_LEVEL.":</em> <strong>". $this->LevelReset ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_ZEN.":</em> <strong>". $this->ZenRequire ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_RESETS."</em>: <strong>".$this->masterResetRequireResets."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_STRENGTH."</em>: <strong>".$PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Strength']."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_DEXTERITY."</em>: <strong>".$PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Dexterity']."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_ENERGY."</em>: <strong>".$PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Energy']."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_VITALITY."</em>: <strong>".$PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Vitality']."</strong><br />
                                            ". ($findCharacters[1] >= $CLASS_CHARACTERS['CLASSCODES']['DL'][0] && $findCharacters[1] <= $CLASS_CHARACTERS['CLASSCODES']['LE'][0] ? "<em>".LDPU_MRESET_TEXT_POINTS_LEADERSHIP."</em>: <strong>".$PANELUSER_MODULE['MASTER_RESET']['PointsRequire']['Leadership']."</strong><br />" : "")  ."
                                            <br /> 
                                            <strong><em>".LDPU_RESET_TEXT_STATUS_BEFORE_RESET.":</em></strong><br />   
                                            <em>".LDPU_RESET_TEXT_RESETS.":</em> <strong>". (int)($findCharacters[0]-1) ."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_STRENGTH."</em>: <strong>".$findCharacters[5]."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_DEXTERITY."</em>: <strong>".$findCharacters[6]."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_ENERGY."</em>: <strong>".$findCharacters[7]."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_VITALITY."</em>: <strong>".$findCharacters[8]."</strong><br />
                                            ". ($findCharacters[1] >= $CLASS_CHARACTERS['CLASSCODES']['DL'][0] && $findCharacters[1] <= $CLASS_CHARACTERS['CLASSCODES']['LE'][0] ? "<em>".LDPU_MRESET_TEXT_POINTS_LEADERSHIP."</em>: <strong>".$findCharacters[9]."</strong><br />" : "")  ."
                                            <em>".LDPU_MRESET_TEXT_MASTER_RESETS.":</em> <strong>". $findCharacters[4] ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_LEVEL.":</em> <strong>". $findCharacters[3] ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_ZEN.":</em> <strong>". $findCharacters[2] ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_CLASS.":</em> <strong>". $this->classNameDefine($findCharacters[1]) ."</strong><br /><br /> 
                                            <strong><em>".LDPU_RESET_TEXT_STATUS_AFTER_RESET.":</em></strong><br />
                                            <em>".LDPU_RESET_TEXT_RESETS.":</em> <strong>". (($findCharacters[0]-1)-$this->masterResetRequireResets) ."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_STRENGTH."</em>: <strong>".$PANELUSER_MODULE['MASTER_RESET']['PointsAfter']['Strength']."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_DEXTERITY."</em>: <strong>".$PANELUSER_MODULE['MASTER_RESET']['PointsAfter']['Dexterity']."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_ENERGY."</em>: <strong>".$PANELUSER_MODULE['MASTER_RESET']['PointsAfter']['Energy']."</strong><br />
                                            <em>".LDPU_MRESET_TEXT_POINTS_VITALITY."</em>: <strong>".$PANELUSER_MODULE['MASTER_RESET']['PointsAfter']['Vitality']."</strong><br />
                                            ". ($findCharacters[1] >= $CLASS_CHARACTERS['CLASSCODES']['DL'][0] && $findCharacters[1] <= $CLASS_CHARACTERS['CLASSCODES']['LE'][0] ? "<em>".LDPU_MRESET_TEXT_POINTS_LEADERSHIP."</em>: <strong>".$PANELUSER_MODULE['MASTER_RESET']['PointsAfter']['Leadership']."</strong><br />" : "")  ."
                                            <em>".LDPU_MRESET_TEXT_MASTER_RESETS.":</em> <strong>". ($findCharacters[4]+1) ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_LEVEL.":</em> <strong>". $this->LevelAfter ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_ZEN.":</em> <strong>". (int)($findCharacters[2]-$this->ZenRequire) ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_CLASS.":</em> <strong>". ($this->CleanQuests == true ? $this->classNameDefine($this->resetClassCode($findCharacters[1])) : $this->classNameDefine($findCharacters[1])) ."</strong><br />
                                            <em>".LDPU_RESET_TEXT_MAGICS.":</em> ". ($this->CleanMagics == true ? "<strong style='color:#FF0000'>".LDPU_RESET_TEXT_MAGICS_ERASE."</strong>":"<strong>".LDPU_RESET_TEXT_MAGICS_NOT_ERASE."</strong>") ."<br />
                                            <em>".LDPU_RESET_TEXT_ITEMS.":</em> ". ($this->CleanItens == true ? "<strong style='color:#FF0000'>".LDPU_RESET_TEXT_ITEMS_ERASE."</strong>":"<strong>".LDPU_RESET_TEXT_ITEMS_NOT_ERASE."</strong>") ."<br />
                                            <em>".LDPU_RESET_TEXT_QUESTS.":</em> ". ($this->CleanQuests == true ? "<strong style='color:#FF0000'>".LDPU_RESET_TEXT_QUESTS_ERASE."</strong>":"<strong>".LDPU_RESET_TEXT_QUESTS_NOT_ERASE."</strong>") ."<br /><br />";
                                            if(isset($errorReset)) $tempRepost .= $errorReset; else $tempRepost .= "<input type='button' class='button' value='".LDPU_MRESET_TEXT_SUBMIT."' onclick=\"javascript:window.location='?page=paneluser&amp;option=MASTER_RESET&amp;character=".urlencode($_GET['character'])."&amp;reset=true';\" />";
                        $tempRepost .= "</div>";
                    } 
                    else
                    {
                        if(isset($errorReset)) $tempRepost .= "<div class='qdestaques'>".$errorReset."</div>";
                        else
                        {
                            $this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET 
                                            Experience = 0 ,                                                                                     
                                            ".COLUMN_RESETS." = ".COLUMN_RESETS." - ".$this->masterResetRequireResets." , 
                                            ".COLUMN_MASTER_RESETS." = ".COLUMN_MASTER_RESETS." + 1 , 
                                            cLevel = ".$this->LevelAfter." , 
                                            MapNumber = ".($findCharacters[1] >= $CLASS_CHARACTERS['CLASSCODES']['FE'][0] && $findCharacters[1] <= $CLASS_CHARACTERS['CLASSCODES']['HE'][0] ? 3 : 0)." ,
                                            MapPosX = ".($findCharacters[1] >= $CLASS_CHARACTERS['CLASSCODES']['FE'][0] && $findCharacters[1] <= $CLASS_CHARACTERS['CLASSCODES']['HE'][0] ? 174 : 125)." , 
                                            MapPosY = ".($findCharacters[1] >= $CLASS_CHARACTERS['CLASSCODES']['FE'][0] && $findCharacters[1] <= $CLASS_CHARACTERS['CLASSCODES']['HE'][0] ? 111 : 125)." ,
                                            Money = Money - ".$this->ZenRequire." ,
                                            ". ($this->CleanItens == true ? "Inventory = NULL,":"") ."
                                            ". ($this->CleanMagics == true ? "MagicList = NULL,":"") ."
                                            ". ($this->CleanQuests == true ? "Quest = NULL, class = ".$this->resetClassCode($findCharacters[1]).",":"") ."                            
                                            ". ($this->ResetPoints == true ? "Strength = {$PANELUSER_MODULE['MASTER_RESET']['PointsAfter']['Strength']} , Dexterity = {$PANELUSER_MODULE['MASTER_RESET']['PointsAfter']['Dexterity']} , Energy = {$PANELUSER_MODULE['MASTER_RESET']['PointsAfter']['Energy']} , Vitality = {$PANELUSER_MODULE['MASTER_RESET']['PointsAfter']['Vitality']}, LeaderShip = {$PANELUSER_MODULE['MASTER_RESET']['PointsAfter']['Leadership']} ,":"") ."
                                            LevelUpPoint = ". ($this->ResetPoints == false ? "LevelUpPoint + ":"").($PANELUSER_MODULE['RESET']['RESET_MODE'] == 4 ? $this->Points : (($findCharacters[0]-$this->masterResetRequireResets)*$this->Points)) ." 
                                            WHERE Name = '".$_GET['character']."'");
                                            
                            if($PANELUSER_MODULE['MASTER_RESET']['Bonus']['Active'] == true)
                                $this->query("UPDATE ".$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Columns']['table']." SET ".$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Columns']['columnAmount']." = ".$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Columns']['columnAmount']." + ".$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Amount'][(int)$findTypeAccount->type]." WHERE ".$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Columns']['columnUsername']." = '".$_SESSION['LOGIN']."'");                
                            
                            $this->writeLog(6, $_SESSION['LOGIN'], $_GET['character'], ($this->CleanItens == true ? LDPU_RESET_LOG_SUBMIT_ERASED_ITEMS:"")); 
                            $tempRepost .= "<div class='qdestaques2'>".LDPU_MRESET_TEXT_SUCCESS."</div>";
                            $this->query("EXEC [dbo].[webPanelAction_MasterReset] '". $_SESSION['LOGIN'] ."', '".$_GET['character']."'"); 
                        }
                    }
                }
            }
            $ldTpl->set("RespostWrite", $tempRepost);
        }
		private function loadOptionsResetTransfer()
		{
			global $ldTpl;
			global $PANELUSER_MODULE; 
			$findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
			while($findCharacters = mssql_fetch_object($findCharactersQ)){
				$tempOption .= "<option value=\"".$findCharacters->Name."\">". $findCharacters->Name ."</option>";
			}
			$ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
			unset($tempOption);
			
			if($_GET['Write'] == true)
			{
				$findCharacter1Q = $this->query("SELECT ".COLUMN_RESETS."  FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_POST['character1'] ."'");
				$findCharacter2Q = $this->query("SELECT ".COLUMN_RESETS."  FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_POST['character2'] ."'");
				if($_POST['character1'] == $_POST['character2']) $tempRepost .= "<div class='qdestaques2'>".LDPU_RESET_TRANS_TEXT_CHOOSE_NOT_EQUAL."</div>";
				elseif($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
				elseif(mssql_num_rows($findCharacter1Q) == 0 || mssql_num_rows($findCharacter2Q) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
				else
				{
					if($_GET['SubWrite'] == false)
					{
						$findCharacter1 = mssql_fetch_row($findCharacter1Q);
						$findCharacter2 = mssql_fetch_row($findCharacter2Q);
						$tempRepost .= "<script>
										function varNumeric(e){
											var tecla=(window.event)?event.keyCode:e.which;
											if((tecla > 47 && tecla < 58)) {
												return true;
											} else{
												if (tecla != 8) return false; else return true;
											}
										}
									   </script>
									   <div class='quadros'>
										<form action='?page=paneluser&amp;option=RESET_TRANSFER&amp;Write=true&amp;SubWrite=true' method='POST'>
										<table width='100%' border='0'>
										 <tr>
										  <td align='right' width='45%'><strong>".LDPU_RESET_TRANS_TEXT_CHARACTER_ORIGIN.": </strong></td>
										  <td><input name='character1' id='character1' size='10' type='text' class='' value='".$_POST['character1']."' readonly='readonly' /> ".$findCharacter1[0]." ".LDPU_RESET_TRANS_TEXT_RESETS."</td>
										 </tr>
										 <tr>
										  <td align='right' width='45%'><strong>".LDPU_RESET_TRANS_TEXT_CHARACTER_DESTINY.": </strong></td>
										  <td><input name='character2' id='character2' size='10' type='text' class='' value='".$_POST['character2']."' readonly='readonly'/> ".$findCharacter2[0]." ".LDPU_RESET_TRANS_TEXT_RESETS."</td>
										 </tr>
										 <tr>
										  <td align='right' width='45%'><strong>".LDPU_RESET_TRANS_TEXT_TRANSFER.": </strong></td>
										  <td><input name='transresets' id='transresets' onkeypress='return varNumeric(event)' maxlength='5' size='10' type='text' class='' value='0'/> <strong>".LDPU_RESET_TRANS_TEXT_RESETS."</strong></td>
										 </tr>
										 <tr>
										  <td colspan='2' align='center'><br /><strong>".LDPU_RESET_TRANS_TEXT_WARNING."</strong></td>
										 </tr>
										</table>
									  <div align='center'><input type='submit' value='".LDPU_RESET_TRANS_TEXT_SUBMIT."' id='button_submit' class='button' /></div>
									  </form>
									 </div>";
					}
					elseif($_GET['SubWrite'] == true)
					{
						$findCharacter1 = mssql_fetch_row($findCharacter1Q);
						$findCharacter2 = mssql_fetch_row($findCharacter2Q);
						if(is_numeric($_POST['transresets']) == false) $tempRepost .= "<div class='qdestaques'>".LDPU_RESET_TRANS_TEXT_FILL_ONLY_NUMBERS."</div>";
                        elseif($_POST['transresets'] < 1) $tempRepost .= "<div class='qdestaques'>".LDPU_RESET_TRANS_TEXT_INVALID_AMOUNT."</div>";
						elseif($_POST['transresets'] < $PANELUSER_MODULE['RESET_TRANSFER']['MIN_REQUIRE']) $tempRepost .= sprintf("<div class='qdestaques'>".LDPU_RESET_TRANS_TEXT_MINIMUM_AMOUNT."</div>", $PANELUSER_MODULE['RESET_TRANSFER']['MIN_REQUIRE']);
						elseif($findCharacter1[0] < $_POST['transresets']) $tempRepost .= "<div class='qdestaques'>".LDPU_RESET_TRANS_TEXT_NOT_HAVE_AMOUNT_RESETS."</div>";
						else
						{
							$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET ".COLUMN_RESETS." = ".COLUMN_RESETS." - ".$_POST['transresets'].", LevelUpPoint = 0, Strength = 30 , Dexterity = 30 , Energy = 30 , Vitality = 30, LeaderShip = 30 WHERE Name='". $_POST['character1'] ."' AND AccountID='". $_SESSION['LOGIN'] ."'");
							$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET ".COLUMN_RESETS." = ".COLUMN_RESETS." + ".$_POST['transresets'].", LevelUpPoint = 0, Strength = 30 , Dexterity = 30 , Energy = 30 , Vitality = 30, LeaderShip = 30 WHERE Name='". $_POST['character2'] ."' AND AccountID='". $_SESSION['LOGIN'] ."'");
							$tempRepost .= "<div class='qdestaques2'>".LDPU_RESET_TRANS_TEXT_SUCCESS."</div>";
                            $this->writeLog(7, $_SESSION['LOGIN'], $_POST['character1'], sprintf(LDPU_RESET_TRANS_LOG_SUCCESS, $_POST['transresets'], $_POST['character2'])); 
						}
					}					
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}
		private function loadOptionsCleanPk()
		{
			global $ldTpl, $PANELUSER_MODULE, $TABLES_CONFIGS;
			$findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
			while($findCharacters = mssql_fetch_object($findCharactersQ)){
				$tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
			}
			$ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
			unset($tempOption);
			
			if(empty($_GET['character']) == false)
			{
				$findCharactersQ = $this->query("SELECT PkCount, Money FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'");
				if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
				elseif(mssql_num_rows($findCharactersQ) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
				else
				{
					$findCharacters = mssql_fetch_row($findCharactersQ);
					$findTypeAccountQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
					$findTypeAccount = mssql_fetch_object($findTypeAccountQ);
					switch($PANELUSER_MODULE['CLEAN_PK']['CLEAN_MODE'])
					{
						case 1: $this->pricePk = $PANELUSER_MODULE['CLEAN_PK']['PRICEZEN'][(int)$findTypeAccount->type]; break;
						case 2: $this->pricePk = ($findCharacters[0]*$PANELUSER_MODULE['CLEAN_PK']['PRICEZEN'][(int)$findTypeAccount->type]); break;
					}
					if($_GET['Write'] == false)
					{
						if($findCharacters[0] == 0) $tempRepost .= "<div class='quadros'>".LDPU_CLEAN_PK_NOT_PK."</div>";
						else
						{
							$tempRepost .= "<div class='quadros'>
												<em>".LDPU_CLEAN_SELECTED_CHARACTER.":</em> ". $_GET['character'] ."<br />
												<em>".LDPU_CLEAN_PK_LEVEL.":</em> ". $findCharacters[0] ."<br />
												<em>".LDPU_CLEAN_NEED_ZEN.":</em> ". $this->pricePk ."<br />
												<em>".LDPU_CLEAN_HAVE_ZEN.":</em> ". $findCharacters[1] ."<br />";
												if($findCharacters[1] < $this->pricePk) $tempRepost .= "<strong style='color:red'>".LDPU_CLEAN_NOT_HAVE_ZEN."</strong>"; else $tempRepost .= "<input type='button' class='button' value='".LDPU_CLEAN_SUBMIT."' onclick=\"javascript: window.location='?page=paneluser&amp;option=CLEAN_PK&amp;character=".urlencode($_GET['character'])."&amp;Write=true';\" />"; 
							$tempRepost .= "</div>";
						}
					}
					else
					{
						if($findCharacters[1] < $this->pricePk) $tempRepost .= "<strong style='color:red'>".LDPU_CLEAN_NOT_HAVE_ZEN."</strong>";
						else
						{
							$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET PkCount=0, ".COLUMN_PK_RANKING." = ".COLUMN_PK_RANKING." + PkCount, PkLevel=0, PkTime=0, Money = Money - ".$this->pricePk." WHERE Name='".$_GET['character']."'");
							$tempRepost .= "<div class='qdestaques2'>".LDPU_CLEAN_SUCCESS_TEXT."</div>";
                            $this->writeLog(8, $_SESSION['LOGIN'], $_GET['character'], ""); 
                            $this->query("EXEC [dbo].[webPanelAction_CleanPK] '". $_SESSION['LOGIN'] ."', '".$_GET['character']."'"); 
						}
					}
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}
		private function loadOptionsDistributePoints()
		{
			global $ldTpl, $PANELUSER_MODULE, $CLASS_CHARACTERS; 
			$findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
			while($findCharacters = mssql_fetch_object($findCharactersQ)){
				$tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
			}
			$ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
			unset($tempOption);
			
			if(empty($_GET['character']) == false)
			{
				$findCharactersQ = $this->query("SELECT LevelUpPoint,Strength,Dexterity,Vitality,Energy,Leadership,Class FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'");
				if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
				elseif(mssql_num_rows($findCharactersQ) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
				else
				{
					$findCharacters = mssql_fetch_object($findCharactersQ);
					$this->maxPoints = $PANELUSER_MODULE['DISTRIBUTE_POINTS']['MAXPOINTS'];
					$this->freePoints = $findCharacters->LevelUpPoint;
					$this->usePointsStrength = $findCharacters->Strength;
					$this->usePointsDexterity = $findCharacters->Dexterity;
					$this->usePointsVitality = $findCharacters->Vitality;
					$this->usePointsEnergy = $findCharacters->Energy;
					$this->usePointsLeadership = $findCharacters->Leadership;
					if($_GET['Write'] == false)
					{
						$tempRepost .= "<script type='text/javascript'>
										var MaxPointsCamp = ".$this->maxPoints.";
										function varNumeric(e){
											var tecla=(window.event)?event.keyCode:e.which;
											if((tecla > 47 && tecla < 58)) {
												return true;
											} else{
												if (tecla != 8) return false; else return true;
											}
										}
										function leftPoints(campo) {
											var this_camp = document.getElementById(campo).value;
											var forca = document.getElementById('forca').value;
											var agili = document.getElementById('agili').value;
											var vital = document.getElementById('vital').value;
											var energ = document.getElementById('energ').value;
											var comman = (". $findCharacters->Class ." == ".$CLASS_CHARACTERS['CLASSCODES']['DL'][0]." || ". $findCharacters->Class ." == ".$CLASS_CHARACTERS['CLASSCODES']['LE'][0].") ? document.getElementById('comman').value : 0;	
											var forca = (forca == '') ? 0 : forca;
											var agili = (agili == '') ? 0 : agili;
											var vital = (vital == '') ? 0 : vital;
											var energ = (energ == '') ? 0 : energ;		
											var comman = (comman == '') ? 0 : comman;							
											
											var total_points = (parseFloat(forca)+parseFloat(agili)+parseFloat(vital)+parseFloat(energ)+parseFloat(comman));
											document.getElementById('restam_ponts').innerHTML = ((".$this->freePoints."-total_points) < 0) ? 0 : ".$this->freePoints."-total_points;
											
											if(total_points > ".$this->freePoints.") {
												document.getElementById(campo).style.border = '1px solid #FF8080';
												document.getElementById(campo).style.color = '#FF2121';
												document.getElementById('erro_max_ponts').innerHTML = \"".LDPU_DISTRIBUTE_POINTS_NOT_HAVE_AMOUNT."\";
												document.getElementById('button_submit').disabled = 'disabled';
											} else {
											  if(this_camp == 0) {
													document.getElementById(campo).style.border = '1px solid #CFCFCF';
													document.getElementById(campo).style.color = '#777';
													document.getElementById('erro_max_ponts').innerHTML = \"\";
													document.getElementById('button_submit').disabled = '';
												} else {
													document.getElementById(campo).style.border = '1px solid #00D800';
													document.getElementById(campo).style.color = '#009F00';
													document.getElementById('erro_max_ponts').innerHTML = \"\";
													document.getElementById('button_submit').disabled = '';
											  }
											}
										}
										function maxPoints(campo) {
											var pontos_atuais = document.getElementById(campo).value;
											if(campo == 'forca') var points_char = ".$this->usePointsStrength.";
											if(campo == 'agili') var points_char = ".$this->usePointsDexterity.";
											if(campo == 'vital') var points_char = ".$this->usePointsVitality.";
											if(campo == 'energ') var points_char = ".$this->usePointsEnergy.";
											if(campo == 'comman') var points_char = ".$this->usePointsLeadership.";
											if((parseFloat(points_char)+parseFloat(pontos_atuais)) > MaxPointsCamp) {
												document.getElementById(campo).style.border = '1px solid #FF8080';
												document.getElementById(campo).style.color = '#FF2121';
												document.getElementById(campo+'_erro').innerHTML = ".sprintf("\"".LDPU_DISTRIBUTE_POINTS_MAX_POINTS_AMOUNT."\";", "\"+MaxPointsCamp+\"")."
												document.getElementById('button_submit').disabled = 'disabled';
											} else {
												if(pontos_atuais == 0) {
													document.getElementById(campo).style.border = '1px solid #CFCFCF';
													document.getElementById(campo).style.color = '#777';
													document.getElementById(campo+'_erro').innerHTML = \"".LDPU_DISTRIBUTE_POINTS_CURRENT_AMOUNT.": \"+parseFloat(points_char);	
													document.getElementById('button_submit').disabled = '';
												} else {
													document.getElementById(campo).style.border = '1px solid #00D800';
													document.getElementById(campo).style.color = '#009F00';
													document.getElementById(campo+'_erro').innerHTML = \"".LDPU_DISTRIBUTE_POINTS_NEXT_AMOUNT.": \"+(parseFloat(points_char)+parseFloat(pontos_atuais));	
													document.getElementById('button_submit').disabled = '';
												}							
											}
											leftPoints(campo);
										}
										</script>
										<div class='quadros'>
										<form action='?page=paneluser&amp;option=DISTRIBUTE_POINTS&amp;character=".urldecode($_GET['character'])."&amp;Write=true' method='post'>
										<table border='0'>
										 <tr>
										  <td align='center' colspan='3'><em>".LDPU_DISTRIBUTE_POINTS_CHARACTER.":</em> ".$_GET['character']."</td>
										 </tr>
										 <tr>
										  <td align='center' colspan='3'>".LDPU_DISTRIBUTE_POINTS_YOU_HAVE.": <strong id='restam_ponts'>".$this->freePoints."</strong> ".LDPU_DISTRIBUTE_POINTS_OF_DISTRIBUTE."</td>
										 </tr>
										 <tr>
										  <td align='center' colspan='3'><strong id='erro_max_ponts'></strong></td>
										 </tr>
										 <tr>
										  <td align='right' width='48%'><strong>".LDPU_DISTRIBUTE_POINTS_STRENGTH.": </strong></td>
										  <td width='10%'><input name='forca' id='forca' onkeypress='return varNumeric(event)' maxlength='5' size='10' type='text' class='' onblur=\"maxPoints('forca');\" value='0'/></td>
										  <td><div id='forca_erro'>".LDPU_DISTRIBUTE_POINTS_CURRENT_AMOUNT.": ".$this->usePointsStrength."</div></td>
										 </tr>
										 <tr>
										  <td align='right'><strong>".LDPU_DISTRIBUTE_POINTS_DEXTERITY.": </strong></td>
										  <td><input name='agili' id='agili' onkeypress='return varNumeric(event)' maxlength='5' size='10' type='text' class='' onblur=\"maxPoints('agili');\" value='0'/></td>
										  <td><div id='agili_erro'>".LDPU_DISTRIBUTE_POINTS_CURRENT_AMOUNT.": ".$this->usePointsDexterity."</div></td>
										 </tr>
										 <tr>
										  <td align='right'><strong>".LDPU_DISTRIBUTE_POINTS_VITALITY.": </strong></td>
										  <td><input name='vital' id='vital' onkeypress='return varNumeric(event)' maxlength='5' size='10' type='text' class='' onblur=\"maxPoints('vital');\" value='0'/></td>
										  <td><div id='vital_erro'>".LDPU_DISTRIBUTE_POINTS_CURRENT_AMOUNT.": ".$this->usePointsVitality."</div></td>
										 </tr>
										 <tr>
										  <td align='right'><strong>".LDPU_DISTRIBUTE_POINTS_ENERGY.": </strong></td>
										  <td><input name='energ' id='energ' onkeypress='return varNumeric(event)' maxlength='5' size='10' type='text' class='' onblur=\"maxPoints('energ');\" value='0'/></td>
										  <td><div id='energ_erro'>".LDPU_DISTRIBUTE_POINTS_CURRENT_AMOUNT.": ".$this->usePointsEnergy."</div></td>
										 </tr>";
										 if($findCharacters->Class == $CLASS_CHARACTERS['CLASSCODES']['DL'][0]  || $findCharacters->Class == $CLASS_CHARACTERS['CLASSCODES']['LE'][0]) {
										 $tempRepost .= "
										 <tr>
										  <td align='right'><strong>".LDPU_DISTRIBUTE_POINTS_LEADERSHIP.": </strong></td>
										  <td><input name='comman' id='comman' onkeypress='return varNumeric(event)' maxlength='5' size='10' type='text' class='' onblur=\"maxPoints('comman');\" value='0'/></div></td>
										  <td><div id='comman_erro'>".LDPU_DISTRIBUTE_POINTS_CURRENT_AMOUNT.": ".$this->usePointsLeadership."</div></td>
										 </tr>";
										 }
						$tempRepost .= "<tr>
										  <td align='center' colspan='3'><input type='submit' class='button' value='".LDPU_DISTRIBUTE_POINTS_SUBMIT."' id='button_submit' /></td>
										</tr>
									</table>
									</form>
									</div>";
					}
					else
					{
						$LevelUpPoints = ($_POST['forca'] + $_POST['agili'] + $_POST['vital'] + $_POST['energ'] + $_POST['comman']);
						if($LevelUpPoints > $this->freePoints) $tempRepost .= "<div class='qdestaques'>".LDPU_DISTRIBUTE_POINTS_NOT_HAVE_AMOUNT."</div>";
						elseif(eregi("[^0-9]",$_POST['forca']) || eregi("[^0-9]",$_POST['agili']) || eregi("[^0-9]",$_POST['vital']) || eregi("[^0-9]",$_POST['energ']) || eregi("[^0-9]",$_POST['comman']))  $tempRepost .= "<div class='qdestaques'>".LDPU_DISTRIBUTE_ONLY_NUMBERS."</div>";
						elseif((($_POST['forca'] + $this->usePointsStrength) > $this->maxPoints) || (($_POST['agili'] + $this->usePointsDexterity) > $this->maxPoints) || (($_POST['vital'] + $this->usePointsVitality) > $this->maxPoints) || (($_POST['energ'] + $this->usePointsEnergy) > $this->maxPoints) || (($_POST['comman'] + $this->usePointsLeadership) > $this->maxPoints)) $tempRepost .= sprintf("<div class='qdestaques'>".LDPU_DISTRIBUTE_MAXIMUM_POINTS."</div>", $this->maxPoints);
						else 
						{
							$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET LevelUpPoint = LevelUpPoint - ".(int)$LevelUpPoints.",Strength = Strength + ".(int)$_POST['forca']." ,Dexterity = Dexterity + ".(int)$_POST['agili'].",Vitality = Vitality + ".(int)$_POST['vital'].",Energy = Energy + ".(int)$_POST['energ'].",Leadership = Leadership + ".(int)$_POST['comman']." WHERE Name='". $_GET['character'] ."'");
							$tempRepost .= "<div class='qdestaques2'>".LDPU_DISTRIBUTE_SUCCESS."</div>";
                            $this->writeLog(9, $_SESSION['LOGIN'], $_GET['character'], LDPU_DISTRIBUTE_POINTS_STRENGTH.": ".(int)$_POST['forca'].", ".LDPU_DISTRIBUTE_POINTS_DEXTERITY.": ".(int)$_POST['agili'].", ".LDPU_DISTRIBUTE_POINTS_VITALITY.": ".(int)$_POST['vital'].", ".LDPU_DISTRIBUTE_POINTS_ENERGY.": ".(int)$_POST['energ'].", ".LDPU_DISTRIBUTE_POINTS_LEADERSHIP.": ".(int)$_POST['comman']); 
                            $this->query("EXEC [dbo].[webPanelAction_DistributePoints] '". $_SESSION['LOGIN'] ."', '".$_GET['character']."'"); 
						}
					}
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}
		private function loadOptionsMoveCharacter()
		{
			global $ldTpl;
			global $PANELUSER_MODULE; 
			$findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
			while($findCharacters = mssql_fetch_object($findCharactersQ)){
				$tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
			}
			$ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
			unset($tempOption);
			
			if(empty($_GET['character']) == false)
			{
				$findCharactersQ = $this->query("SELECT MapNumber,MapPosX,MapPosY FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'");
				if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
				elseif(mssql_num_rows($findCharactersQ) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
				else
				{
					$findCharacters = mssql_fetch_object($findCharactersQ);
					if($_GET['Write'] == false)
					{
						foreach($PANELUSER_MODULE['MOVE_CHARACTER']['MAPS'] as $listTempArray)
						{
							$scriptTemp .= "case '".$listTempArray[0]."':\nvar coordX = ".$listTempArray[2].";\nvar coordY = ".$listTempArray[3].";\nbreak;\n";
							$listTemp .= "<option value='".$listTempArray[0]."'>".$listTempArray[1]."</option>";
						}
						$tempRepost .= "<script type='text/javascript'>
											function varNumeric(e){
												var tecla=(window.event)?event.keyCode:e.which;
												if((tecla > 47 && tecla < 58)) {
													return true;
												} else{
													if (tecla != 8) return false; else return true;
												}
											}
											function valid_coordener(coord) {
												var value = document.getElementById(coord).value;
												if(value < 0) {
													document.getElementById(coord+'_erro').innerHTML = \"".LDPU_MOVE_CHARCTER_MUST_MORE_ZERO."\"; 
													document.getElementById(coord).style.border = '1px solid #FF8080';
													document.getElementById(coord).style.color = '#FF2121';
													document.getElementById('button_submit').disabled = 'disabled';
												}
												if(value > 255) {
													document.getElementById(coord+'_erro').innerHTML = \"".LDPU_MOVE_CHARCTER_MUST_LOWER_255."\"; 
													document.getElementById(coord).style.border = '1px solid #FF8080';
													document.getElementById(coord).style.color = '#FF2121';
													document.getElementById('button_submit').disabled = 'disabled';
												}
												if(value >= 0 && value <= 255) {
													document.getElementById(coord+'_erro').innerHTML = \"".LDPU_MOVE_CHARCTER_INVALID_COORDENATE."\"; 
													document.getElementById(coord).style.border = '1px solid #00D800';
													document.getElementById(coord).style.color = '#009F00';
													document.getElementById('button_submit').disabled = '';
												}
											}
											function verify_coorderns(map) {
												switch(map) { 
													".$scriptTemp."
													default:
														var coordX = 125; 
														var coordY = 125; 
													break;							
												}
												document.getElementById('coordX').value = coordX;
												document.getElementById('coordY').value = coordY;
												valid_coordener('coordX');
												valid_coordener('coordY');						
											}
										</script>
										<div class='quadros'>
											<form action='?page=paneluser&option=MOVE_CHARACTER&character=".urlencode($_GET['character'])."&amp;Write=true' method='post'>
												<table width='100%' border='0'>
												 <tr>
												  <td colspan='3' align='center'><strong>".LDPU_MOVE_CHARCTER_CHARACTER.": ".$_GET['character']."</strong></td>
												 </tr>
												 <tr>
												  <td align='right' width='47%'><strong>".LDPU_MOVE_CHARCTER_MOVE_TO.": </strong></td>
												  <td> <select name='movemap' onchange='verify_coorderns(this.options[this.selectedIndex].value);'>".$listTemp."</select> </td>
												 </tr>
												 <tr>
												  <td align='right' width='47%'><strong>".LDPU_MOVE_CHARCTER_COORD_X.": </strong></td>
												  <td><input name='coordX' id='coordX' onkeypress='return varNumeric(event)' value='".$findCharacters->MapPosX."' size='10' maxlength='3' onblur=\"valid_coordener('coordX');\"/></td>
												  <td><div id='coordX_erro'></div></td>
												 </tr>
												 <tr>
												  <td align='right' width='47%'><strong>".LDPU_MOVE_CHARCTER_COORD_y.": </strong></td>
												  <td><input name='coordY' id='coordY' onkeypress='return varNumeric(event)' value='".$findCharacters->MapPosY."' size='10' maxlength='3' onblur=\"valid_coordener('coordY');\"/></td>
												  <td><div id='coordY_erro'></div></td>
												 </tr>
												</table>
												<div align='center'><input type='submit' class='button' value='".LDPU_MOVE_CHARCTER_SUBMIT."' id='button_submit' /></div>
											</form>
										</div>";
					}
					else
					{
						$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET MapNumber=".(int)$_POST['movemap'].", MapPosX=".(int)$_POST['coordX'].", MapPosY=".(int)$_POST['coordY']." WHERE Name='".$_GET['character']."'");
						$tempRepost .= "<div class='qdestaques2'>".LDPU_MOVE_CHARCTER_SUCCESS."</div>";
					    $this->writeLog(10, $_SESSION['LOGIN'], $_GET['character'], sprintf(LDPU_MOVE_CHARCTER_SUCCESS_LOG, (int)$_POST['movemap'], (int)$_POST['coordX'], (int)$_POST['coordY'])); 
                        $this->query("EXEC [dbo].[webPanelAction_MoveCharacter] '". $_SESSION['LOGIN'] ."', '".$_GET['character']."'"); 
                    }
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}
		private function loadOptionsChangeNick()
		{
			global $ldTpl;
			global $PANELUSER_MODULE; 
			$findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
			while($findCharacters = mssql_fetch_object($findCharactersQ)){
				$tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
			}
			$ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
			unset($tempOption);
			
			if(empty($_GET['character']) == false)
			{
				$findCharactersQ = $this->query("SELECT MapNumber,MapPosX,MapPosY FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'");
				if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
				elseif(mssql_num_rows($findCharactersQ) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
				else
				{
					$findCharacters = mssql_fetch_object($findCharactersQ);
					if($_GET['Write'] == false)
					{
						$tempRepost .= "<div class='quadros'>
											<form action='?page=paneluser&amp;option=CHANGE_NICK&amp;character=".urlencode($_GET['character'])."&amp;Write=true' method='post'>
											<table width='100%' border='0'>
											 <tr>
											  <td align='center' colspan='2'><em>".LDPU_CHANGE_NICK_CHARACTER.":</em> <strong>".$_GET['character']."</strong></td>
											 </tr>
											 <tr>
											  <td align='right' width='40%'><strong>".LDPU_CHANGE_NICK_NEW_NICK.": </strong></td>
											  <td><input name='newnick' id='newnick' maxlength='10' size='15' type='text' class='' value='".$_GET['character']."' /></td>
											 </tr>
											 <tr>
											  <td align='center' colspan='2'><input type='submit' class='button' value='".LDPU_CHANGE_NICK_SUBMIT."' /></td>
											 </tr>
											</table>
											</form>						
										</div>";						
					}
					else
					{
						$findCharGuildQ = $this->query("SELECT 1 FROM ".DATABASE_CHARACTERS.".dbo.GuildMember WHERE Name='". $_GET['character'] ."'");
						$findCharQ = $this->query("SELECT 1 FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='". $_POST['newnick'] ."'");
						$findCharStatusQ = $this->query("SELECT CtlCode FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='".$_GET['character']."'");
                        $findCharStatus = mssql_fetch_row($findCharStatusQ);
                        if(mssql_num_rows($findCharGuildQ) > 0) $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CHANGE_NICK_NOT_HAVE_GUILD."</strong></div>";
                        elseif(empty($_POST['newnick']) || eregi("[^a-zA-Z0-9_!=?&-]", $_POST['newnick'])) $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CHANGE_NICK_INVALID_CHARS."</strong></div>";
						elseif(strlen($_POST['newnick']) > 10) $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CHANGE_NICK_INVALID_NAME_SIZE."</strong></div>";
						elseif($_GET['character'] == $_POST['newnick']) $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CHANGE_NICK_FILL_NAME."</strong></div>";
						elseif(mssql_num_rows($findCharQ) > 0) $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CHANGE_NICK_ALREADY_EXISTS_THIS_NICK."</strong></div>";
                        elseif($findCharStatus[0] == 1) $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CHANGE_NICK_CHARACTER_BANNED."</strong></div>";
                        elseif(eregi("WEBZEN",$_POST['newnick']) == true || eregi("ADM",$_POST['newnick']) == true || eregi("GM",$_POST['newnick']) == true || eregi("MD",$_POST['newnick']) == true || eregi("NT",$_POST['newnick']) == true || eregi("DV",$_POST['newnick']) == true) $tempRepost .= "<div class='qdestaques2'><strong style='color:#BB0000'>".LDPU_CHANGE_NICK_INVALID_SIGLES."</strong></div>";
						else {
							$selectSlotQ = $this->query("SELECT GameID1,GameID2,GameID3,GameID4,GameID5 FROM ".DATABASE_CHARACTERS.".dbo.AccountCharacter WHERE Id='".$_SESSION['LOGIN']."'");
							$selectSlot = mssql_fetch_object($selectSlotQ);
							
							if($selectSlot->GameID1 == $_GET['character']) $Slot_GameID = "GameID1";
							if($selectSlot->GameID2 == $_GET['character']) $Slot_GameID = "GameID2";
							if($selectSlot->GameID3 == $_GET['character']) $Slot_GameID = "GameID3";
							if($selectSlot->GameID4 == $_GET['character']) $Slot_GameID = "GameID4";
							if($selectSlot->GameID5 == $_GET['character']) $Slot_GameID = "GameID5";   
					
							$Query_part1 = $this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.AccountCharacter SET $Slot_GameID='".$_POST['newnick']."' WHERE $Slot_GameID='".$_GET['character']."'");
							$Query_part2 = $this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET Name='".$_POST['newnick']."' WHERE Name='".$_GET['character']."'");
						
                            if(MUSERVER_TEAM == 1 && VESION_MUSERVER == 5)
                            {
                                $this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.MasterSkillTree WHERE Name = '". $_GET['character'] ."'");
                            }
                        	
							$tempRepost .= "<div class='qdestaques2'>".LDPU_CHANGE_NICK_SUCCESS."</div>";
                            $this->writeLog(11, $_SESSION['LOGIN'], $_GET['character'], LDPU_CHANGE_NICK_SUCCESS_LOG.": {$_POST['newnick']}"); 
                            $this->query("EXEC [dbo].[webPanelAction_ChargeNick] '". $_SESSION['LOGIN'] ."', '".$_POST['newnick']."', '".$_GET['character']."'"); 
						}
					}
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}
		private function loadOptionsChangeClass()
		{
			global $ldTpl, $PANELUSER_MODULE, $CLASS_CHARACTERS; 
			$findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
			while($findCharacters = mssql_fetch_object($findCharactersQ)){
				$tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
			}
			$ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
			unset($tempOption);
			
			if(empty($_GET['character']) == false)
			{
				$findCharactersQ = $this->query("SELECT Class FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'");
				if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
				elseif(mssql_num_rows($findCharactersQ) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
				else
				{
					$findCharacters = mssql_fetch_object($findCharactersQ);
					if($_GET['Write'] == false)
					{
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
						$tempRepost .= "<div class='quadros'>	
										<form action='?page=paneluser&amp;option=CHANGE_CLASS&amp;character=". urlencode($_GET['character']) ."&amp;Write=true' method='post'>
										<strong>".LDPU_CHANGE_CLASS_NEW_CLASS.": </strong>
										<select name='newclass'>
												{$listClass}
										</select>
										<input type='submit' class='button' value='".LDPU_CHANGE_CLASS_SUBMIT."' />
										</form>					
										</div>";						
					}
					else
					{
                        switch(VESION_MUSERVER)
                        {
                            case 0: //Season 1 ou Abaixo - Sem DL
                                $quests = 50; $magics = 60; break;
                                break;
                          case 1: //Season 1 ou Abaixo
                                $quests = 50; $magics = 60; break;
                                break;
                          case 2: //Season 2 
                                $quests = 50; $magics = 180; break;
                                break;
                          case 3: //Season 3 Episodio 1 
                                $quests = 50; $magics = 180; break;
                                break;
                          case 4: //Season 3 Episodio 2 
                                $quests = 50; $magics = 180; break;
                                break;
                          case 5: //Season 6 
                                $quests = 50; $magics = 180; break;
                                break;
                          case 6: //Season 6.2
                                $quests = 50; $magics = 180; break;
                                break;
                        }
						$this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character 
                                        SET Class=".(int)$_POST['newclass']."
                                        ".($PANELUSER_MODULE['CHANGE_CLASS']['RESET_QUESTS'] == TRUE ? ", Quest = cast(REPLICATE(char(0xff),".$quests.") as varbinary(".$quests."))" : NULL)." 
                                        ".($PANELUSER_MODULE['CHANGE_CLASS']['RESET_SKILLS'] == TRUE ? ", MagicList = cast(REPLICATE(char(0xff),".$magics.") as varbinary(".$magics."))" : NULL)." 
                                        WHERE Name='". $_GET['character'] ."'");
                        
                        if(MUSERVER_TEAM == 1 && VESION_MUSERVER == 5)
                        {
                            $this->query("DELETE FROM ".DATABASE_CHARACTERS.".dbo.MasterSkillTree WHERE Name = '". $_GET['character'] ."'");
                        }
                        
						$tempRepost .= "<div class='qdestaques2'>".LDPU_CHANGE_CLASS_SUCCESS."</div>";
                        $this->writeLog(12, $_SESSION['LOGIN'], $_GET['character'], LDPU_CHANGE_CLASS_SUCCESS_LOG.": {$_POST['newclass']}"); 
                        $this->query("EXEC [dbo].[webPanelAction_ChargeClass] '". $_SESSION['LOGIN'] ."', '".$_GET['character']."'"); 
					}
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}
		private function loadOptionsRedistributePoints()
		{
			global $ldTpl;
			global $PANELUSER_MODULE, $CLASS_CHARACTERS; 
			$findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
			while($findCharacters = mssql_fetch_object($findCharactersQ)){
				$tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
			}
			$ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
			unset($tempOption);
			
			if(empty($_GET['character']) == false)
			{
				$findCharactersQ = $this->query("SELECT LevelUpPoint,Strength,Dexterity,Vitality,Energy,Leadership,Class FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'");
				if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
				elseif(mssql_num_rows($findCharactersQ) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
				else
				{
					$findCharacters = mssql_fetch_object($findCharactersQ);
					$this->totalPoints = ($findCharacters->LevelUpPoint + $findCharacters->Strength + $findCharacters->Dexterity + $findCharacters->Vitality + $findCharacters->Energy)-120;
					if($findCharacters->Class == $CLASS_CHARACTERS['CLASSCODES']['DL'][0] || $findCharacters->Class == $CLASS_CHARACTERS['CLASSCODES']['LE'][0]) $this->totalPoints += ($findCharacters->Leadership-30);
					if($_GET['Write'] == false)
					{
						$tempRepost .= "<div class='quadros'>	
											<em>".LDPU_REDISTRIBUTE_POINTS_CHARACTER.":</em> <strong>". $_GET['character'] ."</strong> <br />
											<em>".LDPU_REDISTRIBUTE_POINTS_LEVEL_UP_POINTS.":</em> <strong>". $findCharacters->LevelUpPoint ."</strong> <br />
											<em>".LDPU_REDISTRIBUTE_POINTS_STRENGTH.":</em> <strong>". $findCharacters->Strength ."</strong> <br />
											<em>".LDPU_REDISTRIBUTE_POINTS_DEXTERITY.":</em> <strong>". $findCharacters->Dexterity ."</strong> <br />
											<em>".LDPU_REDISTRIBUTE_POINTS_VITALITY.":</em> <strong>". $findCharacters->Vitality ."</strong> <br />
											<em>".LDPU_REDISTRIBUTE_POINTS_ENERGY.":</em> <strong>". $findCharacters->Energy ."</strong> <br />";
											if($findCharacters->Class == $CLASS_CHARACTERS['CLASSCODES']['DL'][0] || $findCharacters->Class == $CLASS_CHARACTERS['CLASSCODES']['LE'][0]) $tempRepost .= "<em>".LDPU_REDISTRIBUTE_POINTS_LEADERSHIP.":</em> <strong>". $findCharacters->Leadership ."</strong> <br />";
						$tempRepost .= 		"<em>".LDPU_REDISTRIBUTE_POINTS_TOTAL_POINTS.":</em> <strong>". $this->totalPoints ."</strong> <br />
											 <input type='button' class='button' value='".LDPU_REDISTRIBUTE_POINTS_SUBMIT."' onclick=\"javascript: window.location='?page=paneluser&amp;option=REDISTRIBUTE_POINTS&amp;character=".urlencode($_GET['character'])."&amp;Write=true'\" />
										</div>";						
					}
					else
					{
						if($findCharacters->Class == $CLASS_CHARACTERS['CLASSCODES']['DL'][0] || $findCharacters->Class == $CLASS_CHARACTERS['CLASSCODES']['LE'][0]) $this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET LevelUpPoint = ".$this->totalPoints.",Strength = 30,Dexterity = 30,Vitality = 30,Energy = 30, Leadership = 30 WHERE Name='".$_GET['character']."'");
						else $this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET LevelUpPoint = ".$this->totalPoints.",Strength = 30,Dexterity = 30,Vitality = 30,Energy = 30 WHERE Name='".$_GET['character']."'");
						$tempRepost .= "<div class='qdestaques2'>".LDPU_REDISTRIBUTE_POINTS_SUCCESS."</div>";
                        $this->writeLog(13, $_SESSION['LOGIN'], $_GET['character'], ""); 
                        $this->query("EXEC [dbo].[webPanelAction_RedistributePoints] '". $_SESSION['LOGIN'] ."', '".$_GET['character']."'"); 
					}
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}
		private function loadOptionsCleanInventory()
        {
            global $ldTpl;
            global $PANELUSER_MODULE; 
            $findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
            while($findCharacters = mssql_fetch_object($findCharactersQ)){
                $tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
            }
            $ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
            unset($tempOption);
            
            if(empty($_GET['character']) == false)
            {
                $findCharactersQ = $this->query("SELECT LevelUpPoint,Strength,Dexterity,Vitality,Energy,Leadership,Class FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'");
                if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
                elseif(mssql_num_rows($findCharactersQ) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
                else
                {
                    $findCharacters = mssql_fetch_object($findCharactersQ);
                    $this->totalPoints = ($findCharacters->LevelUpPoint + $findCharacters->Strength + $findCharacters->Dexterity + $findCharacters->Vitality + $findCharacters->Energy)-120;
                    if($findCharacters->Class == 64 || $findCharacters->Class == 65) $this->totalPoints += ($findCharacters->Leadership-30);
                    if($_GET['Write'] == false)
                    {
                        $tempRepost .= "<div class='quadros'>    
                                            <form action='?page=paneluser&amp;option=CLEAN_INVENTORY&amp;character=". urlencode($_GET['character']) ."&amp;Write=true' method='post'>
                                            <table width='100%' border='0'>
                                             <tr>
                                              <td align='center' colspan='2'><em>".LDPU_CLEAN_INVENTORY_CHARACTER.":</em> <strong>". $_GET['character'] ."</strong></td>
                                             </tr>
                                             <tr>
                                              <td align='right' width='50%'><strong>".LDPU_CLEAN_INVENTORY_ERASE_ITEMS.":</strong></td>
                                              <td><select name='clear_itens'><option value='0'>".LDPU_NOT."</option><option value='1'>".LDPU_YES."</option></select></td>
                                             </tr>
                                             <tr>
                                              <td align='right'><strong>".LDPU_CLEAN_INVENTORY_ERASE_MAGICS.":</strong></td>
                                              <td><select name='clear_magics'><option value='0'>".LDPU_NOT."</option><option value='1'>".LDPU_YES."</option></select></td>
                                             </tr>
                                             <tr>
                                              <td align='right'><strong>".LDPU_CLEAN_INVENTORY_ERASE_ZEN.":</strong></td>
                                              <td><select name='clear_zen'><option value='0'>".LDPU_NOT."</option><option value='1'>".LDPU_YES."</option></select></td>
                                             </tr>
                                             <tr>
                                              <td align='right'><strong>".LDPU_CLEAN_INVENTORY_PASSWORD.":</strong></td>
                                              <td><input name='password' type='password' size='10'></td>
                                             </tr>
                                             <tr>
                                              <td align='center' colspan='2'><input type='submit' class='button' value='".LDPU_CLEAN_INVENTORY_SUBMIT."' /></td>
                                             </tr>
                                            </table>
                                            </form>
                                        </div>";                        
                    }
                    else
                    {
                        $checkPwdQ = $this->query('exec dbo.webVerifyLogin "'. $_SESSION['LOGIN'] .'","'. $_POST['password'] .'","'. USE_MD5 .'"');
                        $checkPwd = mssql_fetch_row($checkPwdQ);
                        if($checkPwd[0] == 0) $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CLEAN_INVENTORY_INVALID_PASSWORD."</strong></div>";
                        elseif($_POST['clear_itens'] == 0 && $_POST['clear_magics'] == 0 && $_POST['clear_zen'] == 0) $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CLEAN_INVENTORY_SELECT_THING."</strong></div>";
                        else {                            
                          if($_POST['clear_itens'] == 1) {
                            switch(VESION_MUSERVER)
                            {                                      
                                case 0: case 1:
                                    $F = str_pad($F, 760*2, "F"); break; 
                                case 2: case 3: case 4: case 5:
                                    $F = str_pad($F, 1728*2, "F"); break;
                                case 6:
                                    $F = str_pad($F, 3776*2, "F"); break;
                            }
                            $option_query_stat = "UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET Inventory=0x$F WHERE Name = '". $_GET['character'] ."'";
                            if($this->query($option_query_stat)) {
                                $tempRepost .= sprintf("<div class='qdestaques2'><strong style='color:#008040'>".LDPU_CLEAN_INVENTORY_SUCCESS_ITEM_CLEAR."</strong></div>", $_GET['character']);
                                $this->writeLog(14, $_SESSION['LOGIN'], $_GET['character'], LDPU_CLEAN_INVENTORY_SUCCESS_ITEM_CLEAR_LOG);  
                            } else $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CLEAN_INVENTORY_ERROR_ITEM_CLEAR."</strong></div>";
                          }
                          if($_POST['clear_magics'] == 1) {
                            $F = str_pad($F, 180*2, "F");
                            $option_query_stat = "UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET MagicList=0x$F WHERE Name = '". $_GET['character'] ."'";
                            if($this->query($option_query_stat)) 
                            {
                                $tempRepost .= sprintf("<div class='qdestaques2'><strong style='color:#008040'>".LDPU_CLEAN_INVENTORY_SUCCESS_MAGICS_CLEAR."</strong></div>", $_GET['character']); 
                                $this->writeLog(14, $_SESSION['LOGIN'], $_GET['character'], LDPU_CLEAN_INVENTORY_SUCCESS_MAGICS_CLEAR_LOG);  
                            }
                            else $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CLEAN_INVENTORY_ERROR_MAGICS_CLEAR."</strong></div>";
                          }
                          if($_POST['clear_zen'] == 1) {
                            $option_query_stat = "UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET Money=0 WHERE Name = '". $_GET['character'] ."'";
                            if($this->query($option_query_stat)) 
                            {
                                $tempRepost .= sprintf("<div class='qdestaques2'><strong style='color:#008040'>".LDPU_CLEAN_INVENTORY_SUCCESS_ZEN_CLEAR."</strong></div>", $_GET['character']); 
                                $this->writeLog(14, $_SESSION['LOGIN'], $_GET['character'], LDPU_CLEAN_INVENTORY_SUCCESS_ZEN_CLEAR_LOG);  
                            }
                            else $tempRepost .= "<div class='qdestaques'><strong style='color:#BB0000'>".LDPU_CLEAN_INVENTORY_ERROR_ZEN_CLEAR."</strong></div>";
                          }
                          $this->query("EXEC [dbo].[webPanelAction_CleanInventory] '". $_SESSION['LOGIN'] ."', '".$_GET['character']."'");                             
                        }
                    }
                }
            }
            $ldTpl->set("RespostWrite", $tempRepost);
        }
        private function loadOptionsManagerPhoto()
		{
			global $ldTpl;
			global $PANELUSER_MODULE; 
			$findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
			while($findCharacters = mssql_fetch_object($findCharactersQ)){
				$tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
			}
			$ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
			unset($tempOption);
			
			if(empty($_GET['character']) == false)
			{
				$findCharactersQ = $this->query("SELECT image FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'");
				if($this->checkOnlineAccount($_SESSION['LOGIN']) == 1) $tempRepost .= "<div class='qdestaques2'>".LDPU_YOU_MUST_BE_OFFLINE."</div>";
				elseif(mssql_num_rows($findCharactersQ) == 0) $tempRepost .= "<div class='quadros'>".LDPU_THIS_CHARACTER_NOT_EXIST."</div>";
				else
				{
					$findCharacters = mssql_fetch_object($findCharactersQ);
                    if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/nophoto.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
					if($_GET['Write'] == false)
					{
						$tempRepost .= "<div class='quadros'>	
											<form action='?page=paneluser&amp;option=MANAGER_PHOTO&amp;character=". urlencode($_GET['character']) ."&amp;Write=true' method='post' enctype='multipart/form-data'>
											<table width='100%'>
                                                <tr>               
                                                    <td colspan='2' align='center'><em>".LDPU_MPHOTO_CHARACTER.":</em> <strong>{$_GET["character"]}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td width='34%' align='center'>".LDPU_MPHOTO_CURRENT_PHOTO.": <br />
                                                        <img src='{$this->photo}' alt='' width='100' height='100' style='border: 2px solid #222222;' /></td>
                                                    <td width='66%' align='left'>
                                                        ".LDPU_MPHOTO_REFRESH_PHOTO.": <br />
                                                        <input type='file' name='photo' /><br />
                                                        <input type='submit' class='button' value='".LDPU_MPHOTO_SUBMIT."' /> 
                                                    </td>
                                                </tr>
                                            </table>
											</form>
										</div>";						
					}
					else
					{
					    $this->photo = $_FILES['photo'];
                        if(empty($this->photo['name']) == true) return $ldTpl->set("RespostWrite", "<div class='qdestaques2'>".LDPU_MPHOTO_CHOOSE_PHOTO."</div>");
                        elseif($this->photo['error'] != 0) return $ldTpl->set("RespostWrite", "<div class='qdestaques'>".LDPU_MPHOTO_UPLOAD_ERROR." {$this->photo['error']}</div>");
                        elseif($this->photo['size'] > 500000) return $ldTpl->set("RespostWrite", "<div class='qdestaques'>".LDPU_MPHOTO_MAX_SIZE."</div>"); 
                        elseif(preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/i", $this->photo['type']) == false) return $ldTpl->set("RespostWrite", "<div class='qdestaques'>".LDPU_MPHOTO_INVALID_TYPE."</div>"); 
                        else 
                        {
                            switch($this->photo['type'])
                            {
                                case 'image/jpeg': case 'image/jpg': $this->ext = ".jpg"; break;
                                case 'image/bmp': $this->ext = ".bmp"; break;
                                case 'image/gif': $this->ext = ".gif"; break;
                                case 'image/png': $this->ext = ".png"; break;   
                                default: return $ldTpl->set("RespostWrite", "<div class='qdestaques'>".LDPU_MPHOTO_INVALID_TYPE.".</div>");   
                            }
                            $this->tmp_name = time().$_GET['character'].$this->ext;
                            move_uploaded_file($this->photo['tmp_name'], "modules/uploads/photos/".$this->tmp_name);
                            if(empty($findCharacters->image) == false) @unlink("modules/uploads/photos/".$findCharacters->image);   
                            $this->query("UPDATE ".DATABASE_CHARACTERS.".dbo.Character SET image = '{$this->tmp_name}' WHERE AccountID='". $_SESSION['LOGIN'] ."' AND Name='". $_GET['character'] ."'"); 
                            $tempRepost = "<div class='qdestaques2'>".LDPU_MPHOTO_SUCCESS."</div>";
                        }		
					}
				}
			}
			$ldTpl->set("RespostWrite", $tempRepost);
		}
		private function loadOptionsBuyVips()
		{
			global $ldTpl, $PANELUSER_MODULE, $TABLES_CONFIGS;
			
			$findAmountCashQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." as amount FROM ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."'");
			$findAmountCash = mssql_fetch_object($findAmountCashQ);
			$ldTpl->set("CASH_AMOUNT", $findAmountCash->amount);
			
			$ldTpl->set("CASH_AMOUNT_VIPSILVER_30_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][0]);
			$ldTpl->set("CASH_AMOUNT_VIPSILVER_90_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][1]);
			$ldTpl->set("CASH_AMOUNT_VIPSILVER_180_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][2]);
			$ldTpl->set("CASH_AMOUNT_VIPSILVER_365_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][3]);
            
            $ldTpl->set("CASH_AMOUNT_VIPGOLD_30_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][0]);
            $ldTpl->set("CASH_AMOUNT_VIPGOLD_90_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][1]);
            $ldTpl->set("CASH_AMOUNT_VIPGOLD_180_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][2]);
            $ldTpl->set("CASH_AMOUNT_VIPGOLD_365_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][3]);
            
            $ldTpl->set("CASH_AMOUNT_VIP3_30_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][0]);
            $ldTpl->set("CASH_AMOUNT_VIP3_90_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][1]);
            $ldTpl->set("CASH_AMOUNT_VIP3_180_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][2]);
            $ldTpl->set("CASH_AMOUNT_VIP3_365_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][3]);
            
            $ldTpl->set("CASH_AMOUNT_VIP4_30_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][0]);
            $ldTpl->set("CASH_AMOUNT_VIP4_90_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][1]);
            $ldTpl->set("CASH_AMOUNT_VIP4_180_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][2]);
            $ldTpl->set("CASH_AMOUNT_VIP4_365_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][3]);
			
			$ldTpl->set("CASH_AMOUNT_VIP5_30_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][0]);
			$ldTpl->set("CASH_AMOUNT_VIP5_90_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][1]);
			$ldTpl->set("CASH_AMOUNT_VIP5_180_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][2]);
			$ldTpl->set("CASH_AMOUNT_VIP5_365_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][3]);
		
			if($_GET['Write'] == true)
			{
				$vip = explode(":", $_POST['vip']);
				switch($vip[0])
				{
					case 1:
                        if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"] == false) $error = "<div class='qdestaques'>".LDPU_BUY_VIP_DISABLED_TYPE."</div>";
						elseif($vip[1] == 30) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][0];
						elseif($vip[1] == 90) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][1];
						elseif($vip[1] == 180) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][2];
						elseif($vip[1] == 365) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][3];
						else $error = "<div class='qdestaques'>".LDPU_BUY_VIP_ERROR_TIME."</div>";
					break;
                    case 2:
                        if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"] == false) $error = "<div class='qdestaques'>".LDPU_BUY_VIP_DISABLED_TYPE."</div>";
                        elseif($vip[1] == 30) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][0];
                        elseif($vip[1] == 90) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][1];
                        elseif($vip[1] == 180) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][2];
                        elseif($vip[1] == 365) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][3];
                        else $error = "<div class='qdestaques'>".LDPU_BUY_VIP_ERROR_TIME."</div>";
                    break;
                    case 3:
                        if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"] == false) $error = "<div class='qdestaques'>".LDPU_BUY_VIP_DISABLED_TYPE."</div>";
                        elseif($vip[1] == 30) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][0];
                        elseif($vip[1] == 90) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][1];
                        elseif($vip[1] == 180) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][2];
                        elseif($vip[1] == 365) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][3];
                        else $error = "<div class='qdestaques'>".LDPU_BUY_VIP_ERROR_TIME."</div>";
                    break;
                    case 4:
                        if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"] == false) $error = "<div class='qdestaques'>".LDPU_BUY_VIP_DISABLED_TYPE."</div>";
                        elseif($vip[1] == 30) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][0];
                        elseif($vip[1] == 90) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][1];
                        elseif($vip[1] == 180) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][2];
                        elseif($vip[1] == 365) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][3];
                        else $error = "<div class='qdestaques'>".LDPU_BUY_VIP_ERROR_TIME."</div>";
                    break;
					case 5:
						if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"] == false) $error = "<div class='qdestaques'>".LDPU_BUY_VIP_DISABLED_TYPE."</div>";
                        elseif($vip[1] == 30) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][0];
						elseif($vip[1] == 90) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][1];
						elseif($vip[1] == 180) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][2];
						elseif($vip[1] == 365) $this->priceVip = $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][3];
						else $error = "<div class='qdestaques'>".LDPU_BUY_VIP_ERROR_TIME."</div>";
					break;
					default: $error = "<div class='qdestaques'>".LDPU_BUY_VIP_ERROR_TIME."</div>";
				}
				$checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type, ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']." as dateend FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$_SESSION['LOGIN']."'");
				$checkMemberVip = mssql_fetch_object($checkMemberVipQ);
				if(isset($error)) $tempRespost .= $error;
				elseif($this->priceVip > $findAmountCash->amount) $tempRespost .= "<div class='qdestaques'>".LDPU_BUY_VIP_NOT_HAVE_CASH."</div>";
				elseif((int)$checkMemberVip->type > 0 && $vip[0] != $checkMemberVip->type) $tempRespost .= sprintf("<div class='qdestaques'>".LDPU_BUY_VIP_YOU_IS_VIP."</div>", $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][$checkMemberVip->type], $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][$vip[0]], $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][$checkMemberVip->type]);
				else
				{
                    if((int)$checkMemberVip->type > 0)
					{
						$newTimeStamp = strtotime(date("d-m-Y g:i a",$checkMemberVip->dateend)." + ".$vip[1] ." days");
						$this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." SET ".$TABLES_CONFIGS['WEBCASH']['columnAmount']."=".$TABLES_CONFIGS['WEBCASH']['columnAmount']."-".$this->priceVip." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."'");
						$this->query("UPDATE ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." SET ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']."='".$newTimeStamp."' WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$_SESSION['LOGIN']."'");
						$tempRespost .= sprintf("<div class='qdestaques2'>".LDPU_BUY_VIP_SUCCESS."</em></div>", date("d-m-Y g:i a",$newTimeStamp));
					}
					else
					{                                                   
						$timeStampBegin = strtotime("now");
						$timeStampEnd = strtotime("+ ".$vip[1] ." days");
						$this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." SET ".$TABLES_CONFIGS['WEBCASH']['columnAmount']."=".$TABLES_CONFIGS['WEBCASH']['columnAmount']."-".$this->priceVip." WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']."='".$_SESSION['LOGIN']."'");
                        $this->query("UPDATE ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." SET 
                                                ".$TABLES_CONFIGS['WEBVIPS']['columnType']." = ".$vip[0].",          
                                                ".$TABLES_CONFIGS['WEBVIPS']['columnDateBegin']."='".$timeStampBegin."',
                                                ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']."='".$timeStampEnd."'
                                                 WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$_SESSION['LOGIN']."'");
                        //$this->query("INSERT INTO dbo.webVips (username,type,datebegin,dateend) VALUES ('".$_SESSION['LOGIN']."',".$vip[0].",'".$timeStampBegin."','".$timeStampEnd."')");
					    $tempRespost .= sprintf("<div class='qdestaques2'>".LDPU_BUY_VIP_SUCCESS."</em></div>", date("d-m-Y g:i a",$timeStampEnd));
					}  
					$this->query("INSERT INTO dbo.webLogBuyVips (username,type,cashAmount,days,date) VALUES ('".$_SESSION['LOGIN']."',".$vip[0].",".$this->priceVip.",".$vip[1].",'".strtotime("now")."')");
				}			
			}
			$ldTpl->set("RespostWrite", $tempRespost);
		}
		private function loadOptionsConfirmPayment()
		{
			global $ldTpl, $PANELUSER_MODULE;
			if($_GET['Write'] == true)
			{
				$check = $this->query("SELECT count(1) [count] FROM [dbo].[webLogBuyCash] WHERE [username] = '". $_SESSION['LOGIN'] ."' and [status] = 0");
                $check = mssql_fetch_object($check);
                if($check->count >= $PANELUSER_MODULE['CONFIRM_PAYMENT']['MAX_OPEN'])
                    $this->Check_List_Error .= sprintf("<ul><li> ". LDPU_CONFIRM_DEPOSIT_ERROR_LIMIT_CONFIRM_OPEN .". </li></ul>", $PANELUSER_MODULE['CONFIRM_PAYMENT']['MAX_OPEN']);
                
                if(empty($_POST['golds']) == true) $this->Check_List_Error .= "<ul><li> ".LDPU_CONFIRM_DEPOSIT_FILL_AMOUNT_CASH." ". CASH_NAME .". </li></ul>";
				if(empty($_POST['bank']) == true) $this->Check_List_Error .= "<ul><li> ".LDPU_CONFIRM_DEPOSIT_FILL_BANK." </li></ul>";
				if(empty($_POST['data']) == true) $this->Check_List_Error .= "<ul><li> ".LDPU_CONFIRM_DEPOSIT_FILL_DATE." </li></ul>";
				if(empty($_POST['hora']) == true) $this->Check_List_Error .= "<ul><li> ".LDPU_CONFIRM_DEPOSIT_FILL_HOUR." </li></ul>";
				if(empty($_POST['valor']) == true) $this->Check_List_Error .= "<ul><li> ".LDPU_CONFIRM_DEPOSIT_FILL_VALUE." </li></ul>";
				if(empty($_POST['pago_em']) == true) $this->Check_List_Error .= "<ul><li> ".LDPU_CONFIRM_DEPOSIT_FILL_PAY_IN." </li></ul>";
				
				if(empty($this->Check_List_Error) == false) $this->ResponseTpl = "<div class=\"qdestaques\"><strong><em>".LDPU_CONFIRM_DEPOSIT_ERROR_FOUND.":</em></strong> <br />". $this->Check_List_Error ."</div>";
				else
				{
					if(in_array($_FILES['image']['type'], array('image/jpeg', 'image/pjpeg', 'image/png')))
					{
						$TmpUploadName = "modules/uploads/confirmBuys/". $_SESSION['LOGIN'] ."[". date("d-m-Y~G-i-s") ."].jpg";
						move_uploaded_file($_FILES['image']['tmp_name'], $TmpUploadName);
					}
					$this->ResponseTpl .= "<script type=\"text/javascript\"> document.getElementById('FormConfirm').style.display = 'none'; </script>";
					$this->query("INSERT INTO dbo.webLogBuyCash
									(username,cash,banco,nterminal,ntransferencia,agencia_acolhedora,nsequencia,ctr,caixa_eletronico,nenvelope,ndocumento,ncontrole,noperador,data,hora,pago_em,anexo,comentario,valor,status) VALUES
									('". $_SESSION['LOGIN'] ."', '". $_POST['golds'] ."', '". $_POST['bank'] ."', '". $_POST['nterminal'] ."', '". $_POST['ntransferencia'] ."', '". $_POST['agencia_acolhedora'] ."', '". $_POST['nsequencia'] ."', '". $_POST['ctr'] ."', '". $_POST['caixa_eletronico'] ."', '". $_POST['nenvelope'] ."', '". $_POST['ndocumento'] ."', '". $_POST['ncontrole'] ."', '". $_POST['noperador']."', '". $_POST['data'] ."', '". $_POST['hora'] ."', '". $_POST['pago_em'] ."', '". $TmpUploadName  ."', '".base64_encode($_POST['comment'])."', '". $_POST['valor'] ."', 0);");
					$this->ResponseTpl .= "<div class=\"qdestaques\">".LDPU_CONFIRM_DEPOSIT_SUCCESS."</div>";
				}
			}
			$ldTpl->set("RespostWrite",$this->ResponseTpl);
		}
		private function loadOptionsOpenComplaints()
		{
			global $ldTpl;
			if($_GET['Write'] == true && empty($_POST['descricao']) == false)
			{
				if(in_array($_FILES['image']['type'], array('image/jpeg', 'image/pjpeg', 'image/png')))
				{
					$TmpUploadName = "modules/uploads/complaints/". $_SESSION['LOGIN'] ."[". date("d-m-Y~G-i-s") ."].jpg";
					move_uploaded_file($_FILES['image']['tmp_name'], $TmpUploadName);
					$this->query("INSERT INTO dbo.webComplaints (username,image,description,date,ip,status) VALUES ('".$_SESSION['LOGIN']."','". $TmpUploadName ."','".base64_encode($_POST['descricao'])."','".time()."','".$_SERVER['REMOTE_ADDR']."',0)");
					$tempResult .= "<div class='qdestaques2'>".LDPU_COMPLAINT_SUCCESS."</div>";
				}
				else
					$tempResult .= "<div class='qdestaques'>".LDPU_COMPLAINT_INVALID_FILE."</div>";
			}
			$ldTpl->set("RespostWrite", $tempResult);
		}
		private function loadOptionsOpenTicket()
		{
			global $ldTpl, $PANELUSER_MODULE;
			$findCharactersQ = $this->query("SELECT Name FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE AccountID='". $_SESSION['LOGIN'] ."'");
			while($findCharacters = mssql_fetch_object($findCharactersQ)){
				$tempOption .= "<option value=\"".urlencode($findCharacters->Name)."\">". $findCharacters->Name ."</option>";
			}
			$ldTpl->set("CHARACTER_LIST_TAG_OPTION", $tempOption); 
			unset($tempOption);
			
			if($_GET['Write'] == true)
			{
                $this->checkTicketsOpenQ = $this->query("SELECT count(1) as count FROM dbo.webTickets WHERE username='{$_SESSION['LOGIN']}' AND status = 0");
                $this->checkTicketsOpen = mssql_fetch_object($this->checkTicketsOpenQ);
                if($this->checkTicketsOpen->count >= $PANELUSER_MODULE['OPEN_TICKET']['MAX_OPEN'])
                    $tempResult .= sprintf("<div class='qdestaques2'>".LDPU_OPEN_TICKET_MAX_TICKET_OPEN."</div>", $PANELUSER_MODULE['OPEN_TICKET']['MAX_OPEN']);
                else
                {
				    $this->query("INSERT INTO dbo.webTickets (username,character,sector,subject,description,date,ip,status) VALUES ('". $_SESSION['LOGIN'] ."','".$_POST['character']."','".$_POST['sector']."','".base64_encode($_POST['subject'])."','".base64_encode($_POST['description'])."','".time()."','".$_SERVER['REMOTE_ADDR']."',0)");
				    $tempResult .= "<div class='qdestaques2'>".LDPU_OPEN_TICKET_SUCCESS."</div>";
                }
			}
			$ldTpl->set("RespostWrite", $tempResult);
		}
		private function loadOptionsReadTicket()
		{
			global $ldTpl;
			if(isset($_GET['Ticket']) == false)
			{
				$sqlQ = $this->query("SELECT id,subject,date,status FROM dbo.webTickets WHERE username='".$_SESSION['LOGIN']."' ORDER By id DESC");
				while($sql = mssql_fetch_object($sqlQ))
				{
					$tempResult .= "<div class='quadros'><em>".LDPU_READ_TICKET_TEXT_ID."</em>: <strong>".$sql->id."</strong><br /><em>".LDPU_READ_TICKET_TEXT_SUBJECT."</em>: <strong>".base64_decode($sql->subject)."</strong><br /><em>".LDPU_READ_TICKET_TEXT_DATE."</em>: <strong>".date("d/m/Y g:i a",$sql->date)."</strong><br /><em>".LDPU_READ_TICKET_TEXT_STATUS."</em>: <strong>".($sql->status == 0 ? LDPU_READ_TICKET_TEXT_STATUS_OPEN:LDPU_READ_TICKET_TEXT_STATUS_CLOSE)."</strong><br /><a href='?page=paneluser&amp;option=READ_TICKET&amp;Ticket=".$sql->id."'>".LDPU_READ_TICKET_TEXT_VIEW_TICKET."</a></div>";
				}
			}
			else
			{
				$sqlQ = $this->query("SELECT id,subject,description,date,status FROM dbo.webTickets WHERE username='".$_SESSION['LOGIN']."' AND id=".(int)$_GET['Ticket']." ORDER By id DESC");
				$sql = mssql_fetch_object($sqlQ);
				$ticketStatus = $sql->status;
				if($_GET['Write'] == true && empty($_POST['answer']) == false && $sql->status == 0) $this->query("INSERT INTO dbo.webTicketsAnswers (id,description,answerBy,date) VALUES (".(int)$_GET['Ticket'].",'".base64_encode($_POST['answer'])."','Player','".time()."');");
				if(mssql_num_rows($sqlQ) == 0) $tempResult .= LDPU_READ_TICKET_TEXT_TICKET_NOT_FOUND;
				else
				{
					$tempResult .= "<em>".LDPU_READ_TICKET_TEXT_ID."</em>: <strong>".$_GET['Ticket']."</strong><br />
									<em>".LDPU_READ_TICKET_TEXT_SUBJECT."</em>: <strong>".base64_decode($sql->subject)."</strong><br />
									<em>".LDPU_READ_TICKET_TEXT_DESCRIPTION."</em>: <strong>".nl2br(base64_decode($sql->description))."</strong><br />
									<em>".LDPU_READ_TICKET_TEXT_STATUS."</em>: ".($sql->status == 0 ? "<strong>".LDPU_READ_TICKET_TEXT_STATUS_OPEN."</strong>":"<strong>".LDPU_READ_TICKET_TEXT_STATUS_CLOSE."</strong>");	
					$tempResult .= "<h1>".LDPU_READ_TICKET_TEXT_HISTORY."</h1>";
					$sqlQ = $this->query("SELECT * FROM dbo.webTicketsAnswers WHERE id='".$_GET['Ticket']."' ORDER BY date DESC");
					if(mssql_num_rows($sqlQ) == 0) $tempResult .= "<div class='quadros'>".LDPU_READ_TICKET_TEXT_NO_HISTORY."</div>";
					while($sql = mssql_fetch_object($sqlQ))
					{
						$tempResult .= "<div class='quadros'><em>".LDPU_READ_TICKET_TEXT_RESPONSE_BY."</em>: <strong>".$sql->answerBy."</strong><br /><em>".LDPU_READ_TICKET_TEXT_DATE."</em>: <strong>".date("d/m/Y g:i a",$sql->date)."</strong><br /><em>".LDPU_READ_TICKET_TEXT_DESCRIPTION."</em>: <strong>".nl2br(base64_decode($sql->description))."</strong><br /></div>";
					}
					if($ticketStatus == 0) $tempResult .= "<form action='?page=paneluser&amp;option=READ_TICKET&amp;Ticket=".$_GET['Ticket']."&amp;Write=true' method='post'><em>".LDPU_READ_TICKET_TEXT_SEND_RESPONSE.":</em><textarea name='answer'></textarea><input type='submit' class='button' value='".LDPU_READ_TICKET_TEXT_SUBMIT."' /></form>";
				}
			}
			$ldTpl->set("RespostWrite1", $tempResult);
		}
		private function loadOptionsSendSMS()
		{
			global $ldTpl;
			global $Config_SMS;
			global $Config_SMS_Subject;
			global $Config_SMTP;
			for($SMS_Number_Count = 0; $SMS_Number_Count < sizeof($Config_SMS); $SMS_Number_Count++) {
				$tempResponse .= "<input type='radio' name='para' value='".$Config_SMS[$SMS_Number_Count]['Number_Cel_DDD'].$Config_SMS[$SMS_Number_Count]['Number_Cel'].$Config_SMS[$SMS_Number_Count]['Email_Sufixo']."' /> ".$Config_SMS[$SMS_Number_Count]['Name']."<br/>";
			}
			$ldTpl->set("INPUT_RADIOS_NUMBERS",$tempResponse);
			$ldTpl->set("MAXLENGHT", 130-strlen($_SESSION['LOGIN'])-strlen($Config_SMTP['From'])-strlen($Config_SMS_Subject)-2);
			unset($tempResponse);
			if($_GET['Write'] == true)
			{
				date_default_timezone_set("America/Sao_Paulo");
                $mail             = new PHPMailer(); 
                
                $body             .= $_SESSION['LOGIN'].",".$_POST['mensagem'];
                                                           
                $body             = eregi_replace("[\]",'',$body);

                $mail->IsSMTP(); 
                $mail->SMTPDebug  = $Config_SMTP['Debug'];  
                $mail->Host       = $Config_SMTP['Server'];  
                $mail->From       = $Config_SMTP['From'];   
                $mail->Port       = $Config_SMTP['Port'];  
                $mail->Username   = $Config_SMTP['User'];
                $mail->Password   = $Config_SMTP['Password'];
                //$mail->FromName   = 'SMS';   
                $mail->Subject    = $Config_SMS_Subject;    
                
                $mail->MsgHTML($body);

                $mail->AddAddress($_POST['para']);                                        

                if(!$mail->Send()) $Status_send = "<strong>".LDPU_SEND_SMS_ERROR."</strong>";
                else $Status_send = "<strong>".LDPU_SEND_SMS_SUCCESS."</strong>"; 
                    
				$tempResponse = "<div class='qdestaques2'>".$Status_send."</div>";
                $this->writeLog(15, $_SESSION['LOGIN'], "", $_POST['mensagem']);  
			}
			$ldTpl->set("RespostWrite",$tempResponse);
		}		
		private function setPermissions()
		{
			global $ldTpl;
			global $PANELUSER_PREMISSIONS;
			$ldTpl->set("MODIFY_DATA_HABILIT", $PANELUSER_PREMISSIONS['MODIFY_DATA'][0]); 
			$ldTpl->set("MODIFY_DATA_FREE", $PANELUSER_PREMISSIONS['MODIFY_DATA'][1]); 
			$ldTpl->set("MODIFY_DATA_VIP_S", $PANELUSER_PREMISSIONS['MODIFY_DATA'][2]); 
            $ldTpl->set("MODIFY_DATA_VIP_G", $PANELUSER_PREMISSIONS['MODIFY_DATA'][3]); 
            $ldTpl->set("MODIFY_DATA_VIP_3", $PANELUSER_PREMISSIONS['MODIFY_DATA'][4]); 
            $ldTpl->set("MODIFY_DATA_VIP_4", $PANELUSER_PREMISSIONS['MODIFY_DATA'][5]); 
			$ldTpl->set("MODIFY_DATA_VIP_5", $PANELUSER_PREMISSIONS['MODIFY_DATA'][6]); 
			
			$ldTpl->set("CLEAN_VAULT_HABILIT", $PANELUSER_PREMISSIONS['CLEAN_VAULT'][0]); 
			$ldTpl->set("CLEAN_VAULT_FREE", $PANELUSER_PREMISSIONS['CLEAN_VAULT'][1]); 
			$ldTpl->set("CLEAN_VAULT_VIP_S", $PANELUSER_PREMISSIONS['CLEAN_VAULT'][2]); 
            $ldTpl->set("CLEAN_VAULT_VIP_G", $PANELUSER_PREMISSIONS['CLEAN_VAULT'][3]); 
            $ldTpl->set("CLEAN_VAULT_VIP_3", $PANELUSER_PREMISSIONS['CLEAN_VAULT'][4]); 
            $ldTpl->set("CLEAN_VAULT_VIP_4", $PANELUSER_PREMISSIONS['CLEAN_VAULT'][5]); 
			$ldTpl->set("CLEAN_VAULT_VIP_5", $PANELUSER_PREMISSIONS['CLEAN_VAULT'][6]); 
			
			$ldTpl->set("DOUBLE_VAULT_HABILIT", $PANELUSER_PREMISSIONS['DOUBLE_VAULT'][0]); 
            $ldTpl->set("DOUBLE_VAULT_FREE", $PANELUSER_PREMISSIONS['DOUBLE_VAULT'][1]); 
            $ldTpl->set("DOUBLE_VAULT_VIP_S", $PANELUSER_PREMISSIONS['DOUBLE_VAULT'][2]); 
            $ldTpl->set("DOUBLE_VAULT_VIP_G", $PANELUSER_PREMISSIONS['DOUBLE_VAULT'][3]); 
            $ldTpl->set("DOUBLE_VAULT_VIP_3", $PANELUSER_PREMISSIONS['DOUBLE_VAULT'][4]); 
            $ldTpl->set("DOUBLE_VAULT_VIP_4", $PANELUSER_PREMISSIONS['DOUBLE_VAULT'][5]); 
            $ldTpl->set("DOUBLE_VAULT_VIP_5", $PANELUSER_PREMISSIONS['DOUBLE_VAULT'][6]); 
            
            $ldTpl->set("VIRTUAL_VAULT_HABILIT", $PANELUSER_PREMISSIONS['VIRTUAL_VAULT'][0]); 
            $ldTpl->set("VIRTUAL_VAULT_FREE", $PANELUSER_PREMISSIONS['VIRTUAL_VAULT'][1]); 
            $ldTpl->set("VIRTUAL_VAULT_VIP_S", $PANELUSER_PREMISSIONS['VIRTUAL_VAULT'][2]); 
            $ldTpl->set("VIRTUAL_VAULT_VIP_G", $PANELUSER_PREMISSIONS['VIRTUAL_VAULT'][3]); 
            $ldTpl->set("VIRTUAL_VAULT_VIP_3", $PANELUSER_PREMISSIONS['VIRTUAL_VAULT'][4]); 
            $ldTpl->set("VIRTUAL_VAULT_VIP_4", $PANELUSER_PREMISSIONS['VIRTUAL_VAULT'][5]); 
            $ldTpl->set("VIRTUAL_VAULT_VIP_5", $PANELUSER_PREMISSIONS['VIRTUAL_VAULT'][6]); 
            
            $ldTpl->set("GAME_DISCONNECT_HABILIT", $PANELUSER_PREMISSIONS['GAME_DISCONNECT'][0]); 
			$ldTpl->set("GAME_DISCONNECT_FREE", $PANELUSER_PREMISSIONS['GAME_DISCONNECT'][1]); 
			$ldTpl->set("GAME_DISCONNECT_VIP_S", $PANELUSER_PREMISSIONS['GAME_DISCONNECT'][2]); 
            $ldTpl->set("GAME_DISCONNECT_VIP_G", $PANELUSER_PREMISSIONS['GAME_DISCONNECT'][3]); 
            $ldTpl->set("GAME_DISCONNECT_VIP_3", $PANELUSER_PREMISSIONS['GAME_DISCONNECT'][4]); 
            $ldTpl->set("GAME_DISCONNECT_VIP_4", $PANELUSER_PREMISSIONS['GAME_DISCONNECT'][5]); 
			$ldTpl->set("GAME_DISCONNECT_VIP_5", $PANELUSER_PREMISSIONS['GAME_DISCONNECT'][6]); 
			
			$ldTpl->set("LOG_BUYS_HABILIT", $PANELUSER_PREMISSIONS['LOG_BUYS'][0]); 
			$ldTpl->set("LOG_BUYS_FREE", $PANELUSER_PREMISSIONS['LOG_BUYS'][1]); 
			$ldTpl->set("LOG_BUYS_VIP_S", $PANELUSER_PREMISSIONS['LOG_BUYS'][2]); 
            $ldTpl->set("LOG_BUYS_VIP_G", $PANELUSER_PREMISSIONS['LOG_BUYS'][3]); 
            $ldTpl->set("LOG_BUYS_VIP_3", $PANELUSER_PREMISSIONS['LOG_BUYS'][4]); 
            $ldTpl->set("LOG_BUYS_VIP_4", $PANELUSER_PREMISSIONS['LOG_BUYS'][5]); 
			$ldTpl->set("LOG_BUYS_VIP_5", $PANELUSER_PREMISSIONS['LOG_BUYS'][6]); 
			
			$ldTpl->set("MODIFY_PERSONALID_HABILIT", $PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][0]); 
			$ldTpl->set("MODIFY_PERSONALID_FREE", $PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][1]); 
			$ldTpl->set("MODIFY_PERSONALID_VIP_S", $PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][2]); 
            $ldTpl->set("MODIFY_PERSONALID_VIP_G", $PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][3]); 
            $ldTpl->set("MODIFY_PERSONALID_VIP_3", $PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][4]); 
            $ldTpl->set("MODIFY_PERSONALID_VIP_4", $PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][5]); 
			$ldTpl->set("MODIFY_PERSONALID_VIP_5", $PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][6]); 
			                                                                   
            $ldTpl->set("RESET_HABILIT", $PANELUSER_PREMISSIONS['RESET'][0]); 
            $ldTpl->set("RESET_FREE", $PANELUSER_PREMISSIONS['RESET'][1]); 
            $ldTpl->set("RESET_VIP_S", $PANELUSER_PREMISSIONS['RESET'][2]); 
            $ldTpl->set("RESET_VIP_G", $PANELUSER_PREMISSIONS['RESET'][3]); 
            $ldTpl->set("RESET_VIP_3", $PANELUSER_PREMISSIONS['RESET'][4]); 
            $ldTpl->set("RESET_VIP_4", $PANELUSER_PREMISSIONS['RESET'][5]); 
            $ldTpl->set("RESET_VIP_5", $PANELUSER_PREMISSIONS['RESET'][6]); 
            
            $ldTpl->set("MASTER_RESET_HABILIT", $PANELUSER_PREMISSIONS['MASTER_RESET'][0]); 
            $ldTpl->set("MASTER_RESET_FREE", $PANELUSER_PREMISSIONS['MASTER_RESET'][1]); 
            $ldTpl->set("MASTER_RESET_VIP_S", $PANELUSER_PREMISSIONS['MASTER_RESET'][2]); 
            $ldTpl->set("MASTER_RESET_VIP_G", $PANELUSER_PREMISSIONS['MASTER_RESET'][3]); 
            $ldTpl->set("MASTER_RESET_VIP_3", $PANELUSER_PREMISSIONS['MASTER_RESET'][4]); 
            $ldTpl->set("MASTER_RESET_VIP_4", $PANELUSER_PREMISSIONS['MASTER_RESET'][5]); 
            $ldTpl->set("MASTER_RESET_VIP_5", $PANELUSER_PREMISSIONS['MASTER_RESET'][6]); 
			
			$ldTpl->set("RESET_TRANSFER_HABILIT", $PANELUSER_PREMISSIONS['RESET_TRANSFER'][0]); 
			$ldTpl->set("RESET_TRANSFER_FREE", $PANELUSER_PREMISSIONS['RESET_TRANSFER'][1]); 
			$ldTpl->set("RESET_TRANSFER_VIP_S", $PANELUSER_PREMISSIONS['RESET_TRANSFER'][2]); 
            $ldTpl->set("RESET_TRANSFER_VIP_G", $PANELUSER_PREMISSIONS['RESET_TRANSFER'][3]); 
            $ldTpl->set("RESET_TRANSFER_VIP_3", $PANELUSER_PREMISSIONS['RESET_TRANSFER'][4]); 
            $ldTpl->set("RESET_TRANSFER_VIP_4", $PANELUSER_PREMISSIONS['RESET_TRANSFER'][5]); 
			$ldTpl->set("RESET_TRANSFER_VIP_5", $PANELUSER_PREMISSIONS['RESET_TRANSFER'][6]); 
			
			$ldTpl->set("CLEAN_PK_HABILIT", $PANELUSER_PREMISSIONS['CLEAN_PK'][0]); 
			$ldTpl->set("CLEAN_PK_FREE", $PANELUSER_PREMISSIONS['CLEAN_PK'][1]); 
			$ldTpl->set("CLEAN_PK_VIP_S", $PANELUSER_PREMISSIONS['CLEAN_PK'][2]); 
            $ldTpl->set("CLEAN_PK_VIP_G", $PANELUSER_PREMISSIONS['CLEAN_PK'][3]); 
            $ldTpl->set("CLEAN_PK_VIP_3", $PANELUSER_PREMISSIONS['CLEAN_PK'][4]); 
            $ldTpl->set("CLEAN_PK_VIP_4", $PANELUSER_PREMISSIONS['CLEAN_PK'][5]); 
			$ldTpl->set("CLEAN_PK_VIP_5", $PANELUSER_PREMISSIONS['CLEAN_PK'][6]); 
			
			$ldTpl->set("DISTRIBUTE_POINTS_HABILIT", $PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][0]); 
			$ldTpl->set("DISTRIBUTE_POINTS_FREE", $PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][1]); 
			$ldTpl->set("DISTRIBUTE_POINTS_VIP_S", $PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][2]); 
            $ldTpl->set("DISTRIBUTE_POINTS_VIP_G", $PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][3]); 
            $ldTpl->set("DISTRIBUTE_POINTS_VIP_3", $PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][4]); 
            $ldTpl->set("DISTRIBUTE_POINTS_VIP_4", $PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][5]); 
			$ldTpl->set("DISTRIBUTE_POINTS_VIP_5", $PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][6]); 
			
			$ldTpl->set("MOVE_CHARACTER_HABILIT", $PANELUSER_PREMISSIONS['MOVE_CHARACTER'][0]); 
			$ldTpl->set("MOVE_CHARACTER_FREE", $PANELUSER_PREMISSIONS['MOVE_CHARACTER'][1]); 
			$ldTpl->set("MOVE_CHARACTER_VIP_S", $PANELUSER_PREMISSIONS['MOVE_CHARACTER'][2]); 
            $ldTpl->set("MOVE_CHARACTER_VIP_G", $PANELUSER_PREMISSIONS['MOVE_CHARACTER'][3]); 
            $ldTpl->set("MOVE_CHARACTER_VIP_3", $PANELUSER_PREMISSIONS['MOVE_CHARACTER'][4]); 
            $ldTpl->set("MOVE_CHARACTER_VIP_4", $PANELUSER_PREMISSIONS['MOVE_CHARACTER'][5]); 
			$ldTpl->set("MOVE_CHARACTER_VIP_5", $PANELUSER_PREMISSIONS['MOVE_CHARACTER'][6]); 
			
			$ldTpl->set("CHANGE_NICK_HABILIT", $PANELUSER_PREMISSIONS['CHANGE_NICK'][0]); 
			$ldTpl->set("CHANGE_NICK_FREE", $PANELUSER_PREMISSIONS['CHANGE_NICK'][1]); 
			$ldTpl->set("CHANGE_NICK_VIP_S", $PANELUSER_PREMISSIONS['CHANGE_NICK'][2]); 
            $ldTpl->set("CHANGE_NICK_VIP_G", $PANELUSER_PREMISSIONS['CHANGE_NICK'][3]); 
            $ldTpl->set("CHANGE_NICK_VIP_3", $PANELUSER_PREMISSIONS['CHANGE_NICK'][4]); 
            $ldTpl->set("CHANGE_NICK_VIP_4", $PANELUSER_PREMISSIONS['CHANGE_NICK'][5]); 
			$ldTpl->set("CHANGE_NICK_VIP_5", $PANELUSER_PREMISSIONS['CHANGE_NICK'][6]); 
			
			$ldTpl->set("CHANGE_CLASS_HABILIT", $PANELUSER_PREMISSIONS['CHANGE_CLASS'][0]); 
			$ldTpl->set("CHANGE_CLASS_FREE", $PANELUSER_PREMISSIONS['CHANGE_CLASS'][1]); 
			$ldTpl->set("CHANGE_CLASS_VIP_S", $PANELUSER_PREMISSIONS['CHANGE_CLASS'][2]); 
            $ldTpl->set("CHANGE_CLASS_VIP_G", $PANELUSER_PREMISSIONS['CHANGE_CLASS'][3]); 
            $ldTpl->set("CHANGE_CLASS_VIP_3", $PANELUSER_PREMISSIONS['CHANGE_CLASS'][4]); 
            $ldTpl->set("CHANGE_CLASS_VIP_4", $PANELUSER_PREMISSIONS['CHANGE_CLASS'][5]); 
			$ldTpl->set("CHANGE_CLASS_VIP_5", $PANELUSER_PREMISSIONS['CHANGE_CLASS'][6]); 
			
			$ldTpl->set("REDISTRIBUTE_POINTS_HABILIT", $PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][0]); 
			$ldTpl->set("REDISTRIBUTE_POINTS_FREE", $PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][1]); 
			$ldTpl->set("REDISTRIBUTE_POINTS_VIP_S", $PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][2]); 
            $ldTpl->set("REDISTRIBUTE_POINTS_VIP_G", $PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][3]); 
            $ldTpl->set("REDISTRIBUTE_POINTS_VIP_3", $PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][4]); 
            $ldTpl->set("REDISTRIBUTE_POINTS_VIP_4", $PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][5]); 
			$ldTpl->set("REDISTRIBUTE_POINTS_VIP_5", $PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][6]); 
			
			$ldTpl->set("CLEAN_INVENTORY_HABILIT", $PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][0]); 
            $ldTpl->set("CLEAN_INVENTORY_FREE", $PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][1]); 
            $ldTpl->set("CLEAN_INVENTORY_VIP_S", $PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][2]); 
            $ldTpl->set("CLEAN_INVENTORY_VIP_G", $PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][3]); 
            $ldTpl->set("CLEAN_INVENTORY_VIP_3", $PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][4]); 
            $ldTpl->set("CLEAN_INVENTORY_VIP_4", $PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][5]); 
            $ldTpl->set("CLEAN_INVENTORY_VIP_5", $PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][6]); 
            
            $ldTpl->set("MANAGER_PHOTO_HABILIT", $PANELUSER_PREMISSIONS['MANAGER_PHOTO'][0]); 
			$ldTpl->set("MANAGER_PHOTO_FREE", $PANELUSER_PREMISSIONS['MANAGER_PHOTO'][1]); 
			$ldTpl->set("MANAGER_PHOTO_VIP_S", $PANELUSER_PREMISSIONS['MANAGER_PHOTO'][2]); 
            $ldTpl->set("MANAGER_PHOTO_VIP_G", $PANELUSER_PREMISSIONS['MANAGER_PHOTO'][3]); 
            $ldTpl->set("MANAGER_PHOTO_VIP_3", $PANELUSER_PREMISSIONS['MANAGER_PHOTO'][4]); 
            $ldTpl->set("MANAGER_PHOTO_VIP_4", $PANELUSER_PREMISSIONS['MANAGER_PHOTO'][5]); 
			$ldTpl->set("MANAGER_PHOTO_VIP_5", $PANELUSER_PREMISSIONS['MANAGER_PHOTO'][6]); 
			
			$ldTpl->set("BUY_VIPS_HABILIT", $PANELUSER_PREMISSIONS['BUY_VIPS'][0]); 
			$ldTpl->set("BUY_VIPS_FREE", $PANELUSER_PREMISSIONS['BUY_VIPS'][1]); 
			$ldTpl->set("BUY_VIPS_VIP_S", $PANELUSER_PREMISSIONS['BUY_VIPS'][2]); 
            $ldTpl->set("BUY_VIPS_VIP_G", $PANELUSER_PREMISSIONS['BUY_VIPS'][3]); 
            $ldTpl->set("BUY_VIPS_VIP_3", $PANELUSER_PREMISSIONS['BUY_VIPS'][4]); 
            $ldTpl->set("BUY_VIPS_VIP_4", $PANELUSER_PREMISSIONS['BUY_VIPS'][5]); 
			$ldTpl->set("BUY_VIPS_VIP_5", $PANELUSER_PREMISSIONS['BUY_VIPS'][6]); 
			
			$ldTpl->set("CONFIRM_PAYMENT_HABILIT", $PANELUSER_PREMISSIONS['CONFIRM_PAYMENT'][0]); 
			$ldTpl->set("CONFIRM_PAYMENT_FREE", $PANELUSER_PREMISSIONS['CONFIRM_PAYMENT'][1]); 
			$ldTpl->set("CONFIRM_PAYMENT_VIP_S", $PANELUSER_PREMISSIONS['CONFIRM_PAYMENT'][2]); 
            $ldTpl->set("CONFIRM_PAYMENT_VIP_G", $PANELUSER_PREMISSIONS['CONFIRM_PAYMENT'][3]); 
            $ldTpl->set("CONFIRM_PAYMENT_VIP_3", $PANELUSER_PREMISSIONS['CONFIRM_PAYMENT'][4]); 
            $ldTpl->set("CONFIRM_PAYMENT_VIP_4", $PANELUSER_PREMISSIONS['CONFIRM_PAYMENT'][5]); 
			$ldTpl->set("CONFIRM_PAYMENT_VIP_5", $PANELUSER_PREMISSIONS['CONFIRM_PAYMENT'][6]); 
			
			$ldTpl->set("OPEN_COMPLAINTS_HABILIT", $PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][0]); 
			$ldTpl->set("OPEN_COMPLAINTS_FREE", $PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][1]); 
			$ldTpl->set("OPEN_COMPLAINTS_VIP_S", $PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][2]); 
            $ldTpl->set("OPEN_COMPLAINTS_VIP_G", $PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][3]); 
            $ldTpl->set("OPEN_COMPLAINTS_VIP_3", $PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][4]); 
            $ldTpl->set("OPEN_COMPLAINTS_VIP_4", $PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][5]); 
			$ldTpl->set("OPEN_COMPLAINTS_VIP_5", $PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][6]); 
			
			$ldTpl->set("OPEN_TICKET_HABILIT", $PANELUSER_PREMISSIONS['OPEN_TICKET'][0]); 
			$ldTpl->set("OPEN_TICKET_FREE", $PANELUSER_PREMISSIONS['OPEN_TICKET'][1]); 
			$ldTpl->set("OPEN_TICKET_VIP_S", $PANELUSER_PREMISSIONS['OPEN_TICKET'][2]); 
            $ldTpl->set("OPEN_TICKET_VIP_G", $PANELUSER_PREMISSIONS['OPEN_TICKET'][3]); 
            $ldTpl->set("OPEN_TICKET_VIP_3", $PANELUSER_PREMISSIONS['OPEN_TICKET'][4]); 
            $ldTpl->set("OPEN_TICKET_VIP_4", $PANELUSER_PREMISSIONS['OPEN_TICKET'][5]); 
			$ldTpl->set("OPEN_TICKET_VIP_5", $PANELUSER_PREMISSIONS['OPEN_TICKET'][6]); 
			
			$ldTpl->set("READ_TICKET_HABILIT", $PANELUSER_PREMISSIONS['READ_TICKET'][0]); 
			$ldTpl->set("READ_TICKET_FREE", $PANELUSER_PREMISSIONS['READ_TICKET'][1]); 
			$ldTpl->set("READ_TICKET_VIP_S", $PANELUSER_PREMISSIONS['READ_TICKET'][2]); 
            $ldTpl->set("READ_TICKET_VIP_G", $PANELUSER_PREMISSIONS['READ_TICKET'][3]); 
            $ldTpl->set("READ_TICKET_VIP_3", $PANELUSER_PREMISSIONS['READ_TICKET'][4]); 
            $ldTpl->set("READ_TICKET_VIP_4", $PANELUSER_PREMISSIONS['READ_TICKET'][5]); 
			$ldTpl->set("READ_TICKET_VIP_5", $PANELUSER_PREMISSIONS['READ_TICKET'][6]); 
			
			$ldTpl->set("SEND_SMS_HABILIT", $PANELUSER_PREMISSIONS['SEND_SMS'][0]); 
			$ldTpl->set("SEND_SMS_FREE", $PANELUSER_PREMISSIONS['SEND_SMS'][1]); 
			$ldTpl->set("SEND_SMS_VIP_S", $PANELUSER_PREMISSIONS['SEND_SMS'][2]); 
            $ldTpl->set("SEND_SMS_VIP_G", $PANELUSER_PREMISSIONS['SEND_SMS'][3]); 
            $ldTpl->set("SEND_SMS_VIP_3", $PANELUSER_PREMISSIONS['SEND_SMS'][4]); 
            $ldTpl->set("SEND_SMS_VIP_4", $PANELUSER_PREMISSIONS['SEND_SMS'][5]); 
			$ldTpl->set("SEND_SMS_VIP_5", $PANELUSER_PREMISSIONS['SEND_SMS'][6]); 
            
            $ldTpl->set("GOLDEN_ARCHER_HABILIT", $PANELUSER_PREMISSIONS['GOLDEN_ARCHER'][0]); 
            $ldTpl->set("GOLDEN_ARCHER_FREE", $PANELUSER_PREMISSIONS['GOLDEN_ARCHER'][1]); 
            $ldTpl->set("GOLDEN_ARCHER_VIP_S", $PANELUSER_PREMISSIONS['GOLDEN_ARCHER'][2]); 
            $ldTpl->set("GOLDEN_ARCHER_VIP_G", $PANELUSER_PREMISSIONS['GOLDEN_ARCHER'][3]); 
            $ldTpl->set("GOLDEN_ARCHER_VIP_3", $PANELUSER_PREMISSIONS['GOLDEN_ARCHER'][4]); 
            $ldTpl->set("GOLDEN_ARCHER_VIP_4", $PANELUSER_PREMISSIONS['GOLDEN_ARCHER'][5]); 
            $ldTpl->set("GOLDEN_ARCHER_VIP_5", $PANELUSER_PREMISSIONS['GOLDEN_ARCHER'][6]);
            
            $ldTpl->set("COLLECTOR_POINTS_HABILIT", $PANELUSER_PREMISSIONS['COLLECTOR_POINTS'][0]); 
            $ldTpl->set("COLLECTOR_POINTS_FREE", $PANELUSER_PREMISSIONS['COLLECTOR_POINTS'][1]); 
            $ldTpl->set("COLLECTOR_POINTS_VIP_S", $PANELUSER_PREMISSIONS['COLLECTOR_POINTS'][2]); 
            $ldTpl->set("COLLECTOR_POINTS_VIP_G", $PANELUSER_PREMISSIONS['COLLECTOR_POINTS'][3]); 
            $ldTpl->set("COLLECTOR_POINTS_VIP_3", $PANELUSER_PREMISSIONS['COLLECTOR_POINTS'][4]); 
            $ldTpl->set("COLLECTOR_POINTS_VIP_4", $PANELUSER_PREMISSIONS['COLLECTOR_POINTS'][5]); 
            $ldTpl->set("COLLECTOR_POINTS_VIP_5", $PANELUSER_PREMISSIONS['COLLECTOR_POINTS'][6]);
            
            $ldTpl->set("AUCTIONS_HABILIT", $PANELUSER_PREMISSIONS['AUCTIONS'][0]); 
            $ldTpl->set("AUCTIONS_FREE", $PANELUSER_PREMISSIONS['AUCTIONS'][1]); 
            $ldTpl->set("AUCTIONS_VIP_S", $PANELUSER_PREMISSIONS['AUCTIONS'][2]); 
            $ldTpl->set("AUCTIONS_VIP_G", $PANELUSER_PREMISSIONS['AUCTIONS'][3]); 
            $ldTpl->set("AUCTIONS_VIP_3", $PANELUSER_PREMISSIONS['AUCTIONS'][4]); 
            $ldTpl->set("AUCTIONS_VIP_4", $PANELUSER_PREMISSIONS['AUCTIONS'][5]); 
            $ldTpl->set("AUCTIONS_VIP_5", $PANELUSER_PREMISSIONS['AUCTIONS'][6]); 
		}  
	}
}
?>