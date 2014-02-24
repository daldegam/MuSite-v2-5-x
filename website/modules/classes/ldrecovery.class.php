<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldRecovery" ) == false ) {
	new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldRecovery extends ldMssql {
		public function __construct()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
				switch($_GET['type'])
				{
                    case "password": $this->recoveryPassword(); break;
					case "confirm": $this->confirmPassword(); break;
				}
			$ldTpl->set("ResultTpl", $this->tempTpl);
		}
		private function recoveryPassword()
		{
			global $Config_SMTP;
            if(empty($_POST['account']) == true) $tempTpl = "<div class='qdestaques'>".RECOVERY_FILL_LOGIN."<br/><a href='?page=recovery&amp;type=password'>".RECOVERY_BACK."</a></div>";    
            else
            {
                $verify_login_q = $this->query("SELECT memb__pwd,mail_addr,fpas_answ FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='".$_POST['account']."'");
                $verify_login = mssql_fetch_array($verify_login_q);
                if(mssql_num_rows($verify_login_q) == 0)
                {
                    $this->tempTpl = "<div class='qdestaques'>".RECOVERY_LOGIN_NOT_FOUND."<br/><a href='?page=recovery&amp;type=password'>".RECOVERY_BACK."</a></div>"; 
                    return;
                }   
                $findLastRequestQ = $this->query("SELECT dateRequest FROM ".DATABASE.".dbo.webSendEmailLimit WHERE username='".$_POST['account']."'");
                $findLastRequest = mssql_fetch_object($findLastRequestQ);                
                if((int)$findLastRequest->dateRequest > time())
                {
                    $this->tempTpl = sprintf("<div class='qdestaques'>".RECOVERY_WAIT_TIME_FOR_SEND_AGAIN."<br/><a href='?page=recovery&amp;type=password'>".RECOVERY_BACK."</a></div>", $Config_SMTP['LimitTime']); 
                    return;
                }
                else
                {    
                    $timeRequestLimit = strtotime("+ {$Config_SMTP['LimitTime']} Minutes"); 
                    $findLastRequestQ = $this->query("SELECT 1 FROM ".DATABASE.".dbo.webSendEmailLimit WHERE username='".$_POST['account']."'");
                    if(mssql_num_rows($findLastRequestQ) == 0)
                        $this->query("INSERT INTO ".DATABASE.".dbo.webSendEmailLimit (username, dateRequest) VALUES ('".$_POST['account']."','".$timeRequestLimit."')");
                    else                        
                        $this->query("UPDATE ".DATABASE.".dbo.webSendEmailLimit SET dateRequest = '".$timeRequestLimit."' WHERE username = '".$_POST['account']."'");
                } 
                
                if(USE_MD5 == FALSE) 
                {
			            date_default_timezone_set("America/Sao_Paulo");
                        $mail             = new PHPMailer();  
                        $body             .= sprintf(RECOVERY_EMAIL_BODY, $_POST['account'], $verify_login['memb__pwd'], $verify_login['fpas_answ'], $_SERVER['REMOTE_ADDR']);
                        $body             = eregi_replace("[\]",'',$body); 
                        $mail->IsSMTP(); 
                        $mail->SMTPDebug  = $Config_SMTP['Debug'];  
                        $mail->Host       = $Config_SMTP['Server'];  
                        $mail->Port       = $Config_SMTP['Port'];  
                        $mail->From       = $Config_SMTP['From'];
                        $mail->Username   = $Config_SMTP['User'];
                        $mail->Password   = $Config_SMTP['Password'];
                        $mail->FromName   = TITLE_SITE;   
                        $mail->Subject    = RECOVERY_EMAIL_SUBJECT;    
                        
                        $mail->MsgHTML($body);

                        $mail->AddAddress($verify_login['mail_addr'], $_POST['account']);                                        

                        if(!$mail->Send()) $mostra = "<strong>".RECOVERY_TRY_AGAIN."</strong>";
                        else $mostra = "<strong>".RECOVERY_SEND_SUCCESS."</strong>";
                        
			    } 
                else 
                {
                        $checkRegisters = $this->query("SELECT [password],[hash] FROM [".DATABASE."].[dbo].[webRecoveryPassword] WHERE [username] = '".$_POST['account']."'");
                        if(mssql_num_rows($checkRegisters) > 0)
                        {
                            $checkRegisters = mssql_fetch_object($checkRegisters);
                            $new_password = $checkRegisters->password;
                            $new_hash = $checkRegisters->hash;
                        }
                        else
                        {
                            $new_password = substr(md5(rand(0,999)),0,8);
                            $new_hash = md5($new_password);
                            
                            $this->query("INSERT INTO [".DATABASE."].[dbo].[webRecoveryPassword] ([username],[password],[hash]) VALUES ('".$_POST['account']."', '".$new_password."', '".$new_hash."')");
                        }
                                                         
                        $linkActive = "http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]."?page=recovery&type=confirm&username=".$_POST['account']."&hash=".$new_hash."&Write=true";
                        
                        date_default_timezone_set("America/Sao_Paulo");
                        $mail             = new PHPMailer();  
                        $body             .= sprintf(RECOVERY_EMAIL_BODY_MD5, $_POST['account'], $new_password, $verify_login['fpas_answ'], $_SERVER['REMOTE_ADDR'], $linkActive, $linkActive);
                        $body             = eregi_replace("[\]",'',$body);
                        $mail->IsSMTP(); 
                        $mail->SMTPDebug  = $Config_SMTP['Debug'];  
                        $mail->Host       = $Config_SMTP['Server'];   
                        $mail->Port       = $Config_SMTP['Port'];   
                        $mail->From       = $Config_SMTP['From'];
                        $mail->Username   = $Config_SMTP['User'];
                        $mail->Password   = $Config_SMTP['Password'];
                        $mail->FromName   = TITLE_SITE;   
                        $mail->Subject    = RECOVERY_EMAIL_SUBJECT;    
                        
                        $mail->MsgHTML($body);

                        $mail->AddAddress($verify_login['mail_addr'], $_POST['account']);                                        

                        if(!$mail->Send()) $mostra = "<strong>".RECOVERY_TRY_AGAIN."</strong>";
                        else 
                        {
                            $mostra = "<strong>".RECOVERY_SEND_SUCCESS_MD5."</strong>";
                            
                            //$this->query("exec dbo.webPwdHashWrite '".$_POST['account']."','".$new_password."'");
                        }                     
			    }
                $tempTpl = "<div class='quadros'>".RECOVERY_LOGIN.": <strong>".$_POST['account']."</strong> <br/><br/>{$mostra}</div>";
            }
			$this->tempTpl = $tempTpl;
		}
        private function confirmPassword()
        {                 
            if(empty($_GET["username"]) == true || empty($_GET["hash"]) == true)
            {
                $this->tempTpl = "<div class='quadros'>".RECOVERY_EMAIL_ERROR_LINK_MD5."</div>";
            }
            else
            {
                $checkRegisters = $this->query("SELECT [password] FROM [".DATABASE."].[dbo].[webRecoveryPassword] WHERE [username] = '".$_GET['username']."' AND [hash] = '".$_GET['hash']."'");
                if(mssql_num_rows($checkRegisters) == 0)
                {
                    $this->tempTpl = "<div class='quadros'>".RECOVERY_EMAIL_ERROR_LINK_MD5."</div>";
                }
                else
                {
                    $checkRegisters = mssql_fetch_object($checkRegisters); 
                    $this->query("exec dbo.webPwdHashWrite '".$_GET['username']."','".$checkRegisters->password."'");
                    $this->query("DELETE FROM [".DATABASE."].[dbo].[webRecoveryPassword] WHERE [username] = '".$_GET['username']."' AND [hash] = '".$_GET['hash']."'");
                    $this->tempTpl = "<div class='quadros'>".RECOVERY_EMAIL_CHECK_SUCCESS_MD5."</div>";
                }
            }
        }
	}	
}

?>