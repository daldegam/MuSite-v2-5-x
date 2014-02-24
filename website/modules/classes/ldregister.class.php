<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldRegister" ) == false ) {
	new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldRegister extends ldMssql {
		private $tpmResult = NULL;
		public function __construct()
		{
			global $ldTpl, $REGISTER_SETTINGS;
			
            if(isset($_GET['activeAccount']) == true && empty($_GET['activeAccount']) == false)
                $this->activeAccount();
            elseif(isset($_GET['resendActivateEmail']) == true && empty($_GET['resendActivateEmail']) == false)
                $this->resendActivateEmail();
			elseif($_GET['write'] == true)
            {
                if(isset($_SESSION['LOGIN']) == true)
                    $this->tpmResult = "<div class='qdestaques'>".REGISTER_LOGOUT_FOR_REGISTER."</div>";
                else
                    $this->registerNow();
            }
                
		    $ldTpl->set("RESULT_REGISTER", $this->tpmResult);
            
            if($REGISTER_SETTINGS['BONUS_ITEM']['ACTIVE'] == true)
            {
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
                
                $tmpList = NULL;
                
                if(count($REGISTER_SETTINGS['BONUS_ITEM']['ITEMS']) > 0)
                {
                    foreach($REGISTER_SETTINGS['BONUS_ITEM']['ITEMS'] as $key => $kit)
                    {
                        $tmpList .= "<option value=\"{$key}\" style=\"font-weight: bold;\">&#62; {$kit["Name"]}</option>";
                        $tmpList .= "<option value=\"\" disabled=\"disabled\">--- ".REGISTER_BONUS_PACKET_DETAILS.":</option>";
                        foreach($kit["Items"] as $item)
                        {
                            $tmpList .= "<option value=\"\" disabled=\"disabled\">----- ". ldItemDatabase::$dbItem[ $item["idCategorie"] ][ $item["idItem"] ]["Name"] ."</option>";
                        }
                    }
                }
                
                $ldTpl->set("REGISTER_OPTIONS_BONUS", $tmpList);
            }
            
        }
        private function registerNow()
        {
            global $REGISTER_SETTINGS, $TABLES_CONFIGS, $PANELUSER_MODULE, $Config_SMTP;
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $resenha = $_POST['resenha'];
            $email = $_POST['email'];
            $reemail = $_POST['reemail'];
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $sexo = $_POST['sexo'];
            $nascimento_dia = $_POST['nascimento_dia'];
            $nascimento_mes = $_POST['nascimento_mes'];
            $nascimento_ano = $_POST['nascimento_ano'];
            $pergunta = $_POST['pergunta']; 
            $resposta = $_POST['resposta'];
            $codigo = $_POST['codigo'];
            
           if(empty($login) ||
               empty($senha) ||
               empty($resenha) ||
               empty($email) ||
               empty($reemail) ||
               empty($nome) ||
               empty($telefone) ||
               empty($sexo) ||
               empty($nascimento_dia) ||
               empty($nascimento_mes) ||
               empty($nascimento_ano) ||
               empty($pergunta) ||
               empty($resposta)) 
                  $errorTmp .= REGISTER_EMPTY_INPUTS."<br />"; 
            
            if($codigo != $_SESSION["SecurityCode"]) $error_tmp .= REGISTER_INCORRECT_SECURITY_CODE."<br />"; 
            if(eregi("[^a-zA-Z0-9_!=?&-]", $login) == true) $error_tmp .= REGISTER_DO_NOT_USE_SYMBOLS_LOGIN."<br />"; 
            if(strlen($login) > 10) $error_tmp .= REGISTER_LOGIN_INVALID_SIZE."<br />";
            if($REGISTER_SETTINGS['USERNAME']['FORCELOWER'] == true)
                $login = strtolower($login);
            if(eregi("[^a-zA-Z0-9_!=?&-]", $senha) == true) $error_tmp .= REGISTER_DO_NOT_USE_SYMBOLS_PASSWORD."<br />"; 
            if(eregi("[^a-zA-Z0-9_!=?&-]", $resenha) == true) $error_tmp .= REGISTER_DO_NOT_USE_SYMBOLS_REPASSWORD."<br />"; 
            if($REGISTER_SETTINGS['EMAIL_REPEAT'] == false)
                if(mssql_num_rows($this->query("SELECT 1 FROM ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO WHERE mail_addr='".$email."'")) > 0) $error_tmp .= REGISTER_EMAIL_IN_USE."<br />"; 
            if(mssql_num_rows($this->query("SELECT memb___id FROM ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO WHERE memb___id='".$login."'")) > 0) $error_tmp .= REGISTER_LOGIN_IN_USE."<br />"; 
            if($senha != $resenha) $error_tmp .= REGISTER_PASSWORD_NOT_MATCH."<br />"; 
            if($email != $reemail) $error_tmp .= REGISTER_EMAIL_NOT_MATCH."<br />"; 
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) $error_tmp .= REGISTER_WRITE_VALID_EMAIL."<br />"; 
            if(isset($error_tmp) == true) return $this->tpmResult = "<div class=\"quadros\">".$error_tmp."</div>";
            else
            {
                $data = date('d/m/Y G:i');
                $nascimento = "$nascimento_dia/$nascimento_mes/$nascimento_ano";
                if(USE_MD5 == 1) $senha_query = "CONVERT(varbinary(16),'0x00')"; else $senha_query = "'$senha'";
                $this->query("INSERT INTO ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO (memb___id,memb__pwd,memb_name,sno__numb,post_code,addr_info,addr_deta,tel__numb,mail_addr,phon_numb,fpas_ques,fpas_answ,job__code,data,aniversario,appl_days,modi_days,out__days,true_days,mail_chek,bloc_code,ctl1_code) VALUES ('$login',$senha_query,'$nome','1','s-n','11111','','$telefone','$email','','$pergunta','$resposta','1','$data','$nascimento','2003-11-23','2003-11-23','2003-11-23','2003-11-23','1','0','1')");
                if(USE_MD5 == 1) $this->query("exec dbo.webPwdHashWrite '".$login."','".$senha."'");
                if(VI_CURR_INFO == true) $this->query("INSERT INTO ". DATABASE_ACCOUNTS .".dbo.VI_CURR_INFO (ends_days,chek_code,used_time,memb___id,memb_name,memb_guid,sno__numb,Bill_Section,Bill_value,Bill_Hour,Surplus_Point,Surplus_Minute,Increase_Days )  VALUES ('2005','1',1234,'$login','$nome',1,'7','6','3','6','6','2003-11-23 10:36:00','0' )");
                
                if($TABLES_CONFIGS['WEBCASH']['table'] != "MEMB_INFO")
                    $this->query("INSERT INTO ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                    (".$TABLES_CONFIGS['WEBCASH']['columnUsername'].",   
                                    ".$TABLES_CONFIGS['WEBCASH']['columnAmount'].",   
                                    ".$TABLES_CONFIGS['WEBCASH']['columnAmount2'].")
                                  VALUES
                                    ('".$login."', ".(int)$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT'].", ".(int)$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT2'].");
                                  ");
                else
                    $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                    SET ".$TABLES_CONFIGS['WEBCASH']['columnUsername']." = '{$login}',   
                                    ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." = ".(int)$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT'].",   
                                    ".$TABLES_CONFIGS['WEBCASH']['columnAmount2']." = ".(int)$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT2']."
                                    WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']." = '{$login}'");
                
                if($TABLES_CONFIGS['WEBVIPS']['table'] != "MEMB_INFO")      
                    $this->query("INSERT INTO ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." 
                                    (".$TABLES_CONFIGS['WEBVIPS']['columnUsername'].",
                                    ".$TABLES_CONFIGS['WEBVIPS']['columnType'].",
                                    ".$TABLES_CONFIGS['WEBVIPS']['columnDateBegin'].",
                                    ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd'].")
                                  VALUES
                                    ('".$login."', 0, '0', '0');
                                  ");
                
                if($REGISTER_SETTINGS['BONUS_VIP']['ACTIVE'] == true)
                {
                    $timeStampBegin = strtotime("now");
                    $timeStampEnd = strtotime("+ ". $REGISTER_SETTINGS['BONUS_VIP']['DAYS'] ." days");
                    $this->query("UPDATE ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." SET 
                                    ".$TABLES_CONFIGS['WEBVIPS']['columnType']." = ".$REGISTER_SETTINGS['BONUS_VIP']['TYPE'].",
                                    ".$TABLES_CONFIGS['WEBVIPS']['columnDateBegin']." = '".$timeStampBegin."',
                                    ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']." = '".$timeStampEnd."'
                                    WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']." = '".$login."'");
                    
                    $tempRespost .= sprintf("<div class='qdestaques2'>".REGISTER_SUCCESS_REGISTER_BONUS_VIP."</div>", $REGISTER_SETTINGS['BONUS_VIP']['DAYS'], $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][$REGISTER_SETTINGS['BONUS_VIP']['TYPE']] , date("d-m-Y g:i a",$timeStampEnd));
                }
                
                if($REGISTER_SETTINGS['BONUS_ITEM']['ACTIVE'] == true)
                {
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
                    //var_dump(ldItemDatabase::$dbItem);
                    switch($REGISTER_SETTINGS['BONUS_ITEM']['VERSION'])
                    {
                        case 1: $length = 1200; break;
                        case 2: $length = 1200; break;
                        case 3: 
                            if(constant("VESION_MUSERVER") == 6) $length = 3840; 
                            else $length = 1920;
                            break;
                    }
                    $this->query("INSERT INTO [".DATABASE_CHARACTERS."].[dbo].[warehouse] ([AccountID], [Items], [Money], [EndUseDate], [DbVersion]) VALUES ('".$login."',cast(REPLICATE(char(0xff),".$length.") as varbinary(".$length.")),0, getdate(),". (int)$REGISTER_SETTINGS['BONUS_ITEM']['VERSION'] .")");
                    
                    if(isset($REGISTER_SETTINGS['BONUS_ITEM']['ITEMS'][$_POST['registerBonus']]) && $_POST['registerBonus'] != -1)
                    {
                        $tempRespost .= sprintf("<div class='qdestaques2'>".REGISTER_SUCCESS_REGISTER_BONUS_ITEMS."</div>", $REGISTER_SETTINGS['BONUS_ITEM']['ITEMS'][$_POST['registerBonus']]["Name"]);
                
                        foreach($REGISTER_SETTINGS['BONUS_ITEM']['ITEMS'][$_POST['registerBonus']]["Items"] as $item)
                        {
                            //var_dump( ldItemDatabase::$dbItem[ $item["idCategorie"] ][ $item["idItem"] ]["Name"] );
                            $HexItem = NULL;
                            if(ldItemMake::makeHexItem($HexItem, $item["idItem"], $item["idCategorie"], $REGISTER_SETTINGS['BONUS_ITEM']['VERSION'], $item["options"]) == true)
                            {
                                $ldVault = new ldVault($login, $REGISTER_SETTINGS['BONUS_ITEM']['VERSION']);
                                $ldVault->getVault();   
                                $ldVault->cutCode();  
                                $ldVault->structureVault(); 

                                ldItemParse::parseHexItem($HexItem, $REGISTER_SETTINGS['BONUS_ITEM']['VERSION']);
                                $slot = $ldVault->searchSlotsInVault(ldItemParse::$dumpTemp['Item']['X'], ldItemParse::$dumpTemp['Item']['Y']);
                                if($slot != -1)
                                    $ldVault->insertItemInSlot($HexItem, $slot);
                                    
                                $ldVault->structureVault();
                                $ldVault->writeVault(true);
                                unset($ldVault);
                            } 
                            unset($HexItem);
                        }
                    }
                    
                }
                
                if($REGISTER_SETTINGS['EMAIL_ACTIVE'] == true)
                 {
                    $hash = md5(microtime().$login);
                    $linkActive = "http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]."?page=register&activeAccount=".$login."&hash=".$hash;
                    
                    $this->query("UPDATE [". DATABASE_ACCOUNTS ."].[dbo].[MEMB_INFO] SET [bloc_code] = 1, [hashActivate] = '{$hash}' WHERE [memb___id] = '{$login}'");
                    
                    date_default_timezone_set("America/Sao_Paulo");
                    $mail             = new PHPMailer();  
                    $body             .= sprintf(CREATE_ACCOUNT_ACTIVE_EMAIL_BODY, $login, $senha, $pergunta, $resposta, $linkActive, $linkActive);
                    $body             = eregi_replace("[\]",'',$body); 
                    $mail->IsSMTP(); 
                    $mail->SMTPDebug  = $Config_SMTP['Debug'];  
                    $mail->Host       = $Config_SMTP['Server'];  
                    $mail->Port       = $Config_SMTP['Port'];  
                    $mail->From       = $Config_SMTP['From'];
                    $mail->Username   = $Config_SMTP['User'];
                    $mail->Password   = $Config_SMTP['Password'];
                    $mail->FromName   = TITLE_SITE;   
                    $mail->Subject    = CREATE_ACCOUNT_ACTIVE_EMAIL_SUBJECT;    
                    
                    $mail->MsgHTML($body);

                    $mail->AddAddress($email, $login);                                        

                    if($mail->Send()) $emailSend = "<div class='qdestaques2'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_ACTIVE_SUCCESS."</strong></div>";
                    else $emailSend = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_ACTIVE_ERROR."</strong></div>";
                }
                else
                {
                    date_default_timezone_set("America/Sao_Paulo");
                    $mail             = new PHPMailer();  
                    $body             .= sprintf(CREATE_ACCOUNT_EMAIL_BODY, $login, $senha, $pergunta, $resposta);
                    $body             = eregi_replace("[\]",'',$body); 
                    $mail->IsSMTP(); 
                    $mail->SMTPDebug  = $Config_SMTP['Debug'];  
                    $mail->Host       = $Config_SMTP['Server'];  
                    $mail->Port       = $Config_SMTP['Port'];  
                    $mail->From       = $Config_SMTP['From'];
                    $mail->Username   = $Config_SMTP['User'];
                    $mail->Password   = $Config_SMTP['Password'];
                    $mail->FromName   = TITLE_SITE;   
                    $mail->Subject    = CREATE_ACCOUNT_EMAIL_SUBJECT;    
                    
                    $mail->MsgHTML($body);

                    $mail->AddAddress($email, $login);                                        

                    if($mail->Send()) $emailSend = "<div class='qdestaques2'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_SUCCESS."</strong></div>";
                    else $emailSend = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_ERROR."</strong></div>";
                }
                
                return $this->tpmResult = sprintf("<div class=\"quadros\">".REGISTER_SUCCESS_REGISTER."</div>".$tempRespost.$emailSend, $login, $senha, $pergunta, $resposta);
            }
        }
        private function resendActivateEmail()
        {
            global $Config_SMTP;
            
            $getInfos = $this->query("SELECT [mail_addr],[hashActivate] FROM [". DATABASE_ACCOUNTS ."].[dbo].[MEMB_INFO] WHERE [memb___id] = '".$_GET['resendActivateEmail']."'");
            if(mssql_num_rows($getInfos) == 0)
            {
                $this->tpmResult = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_ACTIVE_NOT_EXISTS_ACCOUNT."</strong></div>";
            }
            else
            {
                $getInfos = mssql_fetch_object($getInfos);
                if($getInfos->hashActivate == null)
                {
                    $this->tpmResult = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_ACTIVE_HAS_ACTIVE."</strong></div>";
                }
                else
                {
                    $linkActive = "http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]."?page=register&activeAccount=".$_GET['resendActivateEmail']."&hash=".$getInfos->hashActivate;
                     
                    date_default_timezone_set("America/Sao_Paulo");
                    $mail             = new PHPMailer();  
                    $body             .= sprintf(CREATE_ACCOUNT_ACTIVE_EMAIL_BODY_PARTIAL, $_GET['resendActivateEmail'], $linkActive, $linkActive);
                    $body             = eregi_replace("[\]",'',$body); 
                    $mail->IsSMTP(); 
                    $mail->SMTPDebug  = $Config_SMTP['Debug'];  
                    $mail->Host       = $Config_SMTP['Server'];  
                    $mail->Port       = $Config_SMTP['Port'];  
                    $mail->From       = $Config_SMTP['From'];
                    $mail->Username   = $Config_SMTP['User'];
                    $mail->Password   = $Config_SMTP['Password'];
                    $mail->FromName   = TITLE_SITE;   
                    $mail->Subject    = CREATE_ACCOUNT_ACTIVE_EMAIL_SUBJECT;    
                    
                    $mail->MsgHTML($body);

                    $mail->AddAddress($getInfos->mail_addr, $_GET['resendActivateEmail']);                                        

                    if($mail->Send()) $this->tpmResult = "<div class='qdestaques2'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_ACTIVE_SUCCESS."</strong></div>";
                    else $this->tpmResult = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_ACTIVE_ERROR."</strong></div>";
                }
            }
                
            return $this->tpmResult;
            
        }
		private function activeAccount()
		{
			global $Config_SMTP;
			
            $getInfos = $this->query("SELECT [mail_addr],[hashActivate] FROM [". DATABASE_ACCOUNTS ."].[dbo].[MEMB_INFO] WHERE [memb___id] = '".$_GET['activeAccount']."'");
            if(mssql_num_rows($getInfos) == 0)
            {
                $this->tpmResult = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_ACTIVE_NOT_EXISTS_ACCOUNT."</strong></div>";
            }
            else
            {
                $getInfos = mssql_fetch_object($getInfos);
                if($getInfos->hashActivate == null)
                {
                    $this->tpmResult = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_ACTIVE_HAS_ACTIVE."</strong></div>";
                }
                else
                {
                    if($getInfos->hashActivate == $_GET['hash'])
                    {
                         $this->query("UPDATE [". DATABASE_ACCOUNTS ."].[dbo].[MEMB_INFO] SET [bloc_code] = 0, [hashActivate] = null WHERE [memb___id] = '{$_GET['activeAccount']}'");
                         $this->tpmResult = "<div class='qdestaques2'><strong>".CREATE_ACCOUNT_ACTIVE_SUCCESS."</strong></div>";
                    }
                    else $this->tpmResult = sprintf("<div class='qdestaques'><strong>".CREATE_ACCOUNT_ACTIVE_ERROR_HASH."</strong></div>", $_GET['activeAccount']);
                }
            }
                
            return $this->tpmResult;
			
		}
	}	
}

?>