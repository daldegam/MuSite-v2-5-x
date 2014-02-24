<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldAjax" ) == false ) {
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldAjax extends ldMssql {
		public function __construct()
		{
			switch($_GET['require'])
			{
				case "login":
					$this->loginCheck();
					break;
				case "register":
					$this->registerCheck();
					break;
                case "membersstaff":
                    $this->showMemberStaff();
                    break;
                case "poll":
                    $this->loadPoll();
                    break;
                case "noticecomment":
                    $this->loadNoticeComment();
                    break;
                case "noticeselectcomments":
                    $this->loadNoticeSelectComments();
                    break;
				case "noticedeletecomment":
					$this->loadNoticeDeleteComment();
					break;
                case "chatrealtime":
                    $this->loadChatRealTime();
                    break;
				default:
					echo "Erro nas propriedades do ajax.";
					break;
			}
		}
        private function loadChatRealTime()
        {
            global $ldTpl, $CHAT_REAL_TIME;
            if($CHAT_REAL_TIME['ENABLE'] == false) exit(CHAT_REAL_TIME_DISABLE);
            $findChatsQ = $this->query("SELECT TOP 50 [id],CONVERT(varchar, [dateSay], 103) [dateSayDay],CONVERT(varchar, [dateSay], 108) [dateSayHour],[server],[type],[name],[message],[destiny],DATEDIFF(minute, [dateSay], getDate()) [sayTime] FROM [dbo].[webChatServer] WHERE [type] IN (".implode(",", $CHAT_REAL_TIME['TYPES']).") ORDER BY [id] DESC");          
            while($findChats = mssql_fetch_object($findChatsQ))
            {
                switch($findChats->type)
                {
                    case 0: $findChats->type = CHAT_MSG_CHAT; $sClass = "chat"; break;   
                    case 1: $findChats->type = CHAT_MSG_PARTY; $sClass = "party"; break;   
                    case 2: $findChats->type = CHAT_MSG_GUILD; $sClass = "guild"; break;   
                    case 3: $findChats->type = CHAT_MSG_GLOBAL; $sClass = "msgglobal"; break;   
                    case 4: $findChats->type = CHAT_MSG_ANUNGUILD; $sClass = "anunguild"; break;   
                    case 5: $findChats->type = CHAT_MSG_WHISPER;  $sClass = "whisper"; break;   
                    case 6: $findChats->type = CHAT_MSG_ALlIANCE; $sClass = "aliance"; break;   
                    case 7: $findChats->type = CHAT_MSG_GM; $sClass = "gamemaster"; break;   
                    case 8: $findChats->type = CHAT_MSG_POST; $sClass = "post"; break;   
                }
                $tempTpl .= "<li>
                                <div class=\"chatList {$sClass}\">
                                  <strong>[".$findChats->type."][".$findChats->dateSayHour."] ".$findChats->name.":</strong> ".ldPanelAdmin::getChatText($findChats->message, "c5ad7c480a66d30ef7b3ce0d3162d3ef")."
                                </div>
                            </li>"; 
            }
            echo $tempTpl;
            unset($tempTpl);
        }
		private function loginCheck()
		{
			if(empty($_GET['userName']) || empty($_GET['userPwd'])) exit("<strong>".LOGIN_FILL_ALL_FIELDS."</strong>");
            
            $lock = $this->query("SELECT [errors], DATEDIFF(MINUTE, [date], GETDATE()) [minutes] FROM [dbo].[webPasswordBruteForceLock] WHERE [username] = '". utf8_encode($_GET['userName']) ."'");
            if(mssql_num_rows($lock) > 0)
            {
                $lock = mssql_fetch_object($lock);
                if($lock->errors >= 5 && $lock->minutes < 5)
                {             
                    exit("<strong>".LOGIN_ERROR_LOCK."</strong>");
                }
                else if($lock->errors >= 5 && $lock->minutes >= 5)
                {   
                    $this->query("DELETE FROM [dbo].[webPasswordBruteForceLock] WHERE [username] = '". utf8_encode($_GET['userName']) ."'");
                }
            }
            
			$checkQ = $this->query('exec dbo.webVerifyLogin "'. utf8_encode($_GET['userName']) .'","'. utf8_encode($_GET['userPwd']) .'","'. USE_MD5 .'"');
			$check = mssql_fetch_row($checkQ);
			if($check[0] == 0) 
            {
                $lock = $this->query("SELECT 1 FROM [dbo].[webPasswordBruteForceLock] WHERE [username] = '". utf8_encode($_GET['userName']) ."'");
                if(mssql_num_rows($lock) > 0)
                {
                    $this->query("UPDATE [dbo].[webPasswordBruteForceLock] SET [errors] = [errors] + 1, [date] = GETDATE() WHERE [username] = '". utf8_encode($_GET['userName']) ."'");
                }
                else
                {
                    $insert = $this->query("INSERT INTO [dbo].[webPasswordBruteForceLock] ([username],[errors],[date]) VALUES ('". utf8_encode($_GET['userName']) ."', 1, GETDATE())");
                }
                exit("<strong>".LOGIN_ERROR."</strong>");
            }
			else 
			{
                $this->query("DELETE FROM [dbo].[webPasswordBruteForceLock] WHERE [username] = '". utf8_encode($_GET['userName']) ."'");
				$_SESSION['LOGIN'] = utf8_encode($_GET['userName']);
				exit("<strong>".LOGIN_SUCCESS."</strong><script type=\"text/javascript\"> window.location='?'; </script>");
			}
		}
		private function registerCheck()
		{
			if(!empty($_GET[login])) {
			 $login = $_GET[login];
			  if(eregi("[^a-zA-Z0-9_!=?&-]", $login) == true) { 
				echo "<script> document.getElementById('login').style.border = '1px solid #FF8080'; </script>
					  <script> document.getElementById('login').style.color = '#FF2121'; </script>
					  <script> document.getElementById('login_error').innerHTML = '<strong>".REGISTER_DO_NOT_USE_SYMBOLS."</strong>'; </script>";
			  } else {
				$dados_q = $this->query("SELECT memb___id FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='".$login."'");
				$dados = mssql_num_rows($dados_q);
				  switch($dados) {
					 case 0:
						echo "<script> document.getElementById('login').style.border = '1px solid #00D800'; </script>
							  <script> document.getElementById('login').style.color = '#009F00'; </script>
							  <script> document.getElementById('login_error').innerHTML = '<strong></strong>'; </script>";
					 break;
					 case 1:
						echo "<script> document.getElementById('login').style.border = '1px solid #FF8080'; </script>
							  <script> document.getElementById('login').style.color = '#FF2121'; </script>
							  <script> document.getElementById('login_error').innerHTML = '<strong>".REGISTER_LOGIN_IN_USE."</strong>'; </script>";
					 break;
					 default:
						echo "Erro :(";
					 break;
				  }
			  }
			}
			if(!empty($_GET[senha]) && !empty($_GET[resenha])) {
			  $senha = $_GET[senha];
			  $resenha = $_GET[resenha];
			  if(eregi("[^a-zA-Z0-9_!=?&-]", $senha) == true || eregi("[^a-zA-Z0-9_!=?&-]", $resenha) == true) { 
                echo "<script> document.getElementById('senha').style.border = '1px solid #FF8080'; </script>
                      <script> document.getElementById('senha').style.color = '#FF2121'; </script>
                      <script> document.getElementById('resenha').style.border = '1px solid #FF8080'; </script>
                      <script> document.getElementById('resenha').style.color = '#FF2121'; </script>
                      <script> document.getElementById('senha_error').innerHTML = '<strong><font color=\"#D82020\">".REGISTER_DO_NOT_USE_SYMBOLS."</font></strong>'; </script>";
              } else {
				  if($senha != $resenha) {
					echo "<script> document.getElementById('senha').style.border = '1px solid #FF8080'; </script>
						  <script> document.getElementById('senha').style.color = '#FF2121'; </script>
						  <script> document.getElementById('resenha').style.border = '1px solid #FF8080'; </script>
						  <script> document.getElementById('resenha').style.color = '#FF2121'; </script>
						  <script> document.getElementById('senha_error').innerHTML = '<strong><font color=\"#D82020\">".REGISTER_PASSWORD_NOT_MATCH."</font></strong>'; </script>";
				  } else {
					echo "<script> document.getElementById('senha').style.border = '1px solid #00D800'; </script>
						  <script> document.getElementById('senha').style.color = '#009F00'; </script>
						  <script> document.getElementById('resenha').style.border = '1px solid #00D800'; </script>
						  <script> document.getElementById('resenha').style.color = '#009F00'; </script>
						  <script> document.getElementById('senha_error').innerHTML = '<strong></strong>'; </script>";
				  }
			  }
			}
			
			if(!empty($_GET[email]) && !empty($_GET[reemail])) {
			  $email = $_GET[email];
			  $reemail = $_GET[reemail];
			       if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {                                                     
                    echo "<script> document.getElementById('email').style.border = '1px solid #FF8080'; </script>
                          <script> document.getElementById('email').style.color = '#FF2121'; </script>
                          <script> document.getElementById('reemail').style.border = '1px solid #FF8080'; </script>
                          <script> document.getElementById('reemail').style.color = '#FF2121'; </script>
                          <script> document.getElementById('email_error').innerHTML = '<strong><font color=\"#D82020\">".REGISTER_WRITE_VALID_EMAIL."</font></strong>'; </script>";
                  } elseif($email != $reemail) {
					echo "<script> document.getElementById('email').style.border = '1px solid #FF8080'; </script>
						  <script> document.getElementById('email').style.color = '#FF2121'; </script>
						  <script> document.getElementById('reemail').style.border = '1px solid #FF8080'; </script>
						  <script> document.getElementById('reemail').style.color = '#FF2121'; </script>
						  <script> document.getElementById('email_error').innerHTML = '<strong><font color=\"#D82020\">".REGISTER_EMAIL_NOT_MATCH."</font></strong>'; </script>";
				  } else {
					echo "<script> document.getElementById('email').style.border = '1px solid #00D800'; </script>
						  <script> document.getElementById('email').style.color = '#009F00'; </script>
						  <script> document.getElementById('reemail').style.border = '1px solid #00D800'; </script>
						  <script> document.getElementById('reemail').style.color = '#009F00'; </script>
						  <script> document.getElementById('email_error').innerHTML = '<strong></strong>'; </script>";
				  }
			}			
		}
		private function showMemberStaff()
		{
			echo "<div class='quadros'>";
			$findMembersQ = $this->query("Use ".DATABASE_CHARACTERS."; SELECT Character.Name, MEMB_STAT.ConnectStat FROM ".DATABASE_CHARACTERS.".dbo.Character JOIN ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT ON (Character.AccountID = MEMB_STAT.memb___id) WHERE Character.CtlCode = 8 OR Character.CtlCode = 32");
            while($findMembers = mssql_fetch_object($findMembersQ))
			{
				echo "&nbsp; - <strong>". $findMembers->Name ."</strong> - ". ($findMembers->ConnectStat == 0 ? "<strong class='staffOffline'>".STAFF_OFFLINE."</strong>":"<strong class='staffOnline'>".STAFF_ONLINE."</strong>") ."<br />";
			}
			echo "</div>";
		}
        private function loadPoll()
        {
            global $POLL;
            switch($_GET['action'])
            {
                case 'vote':
                    if($POLL['LOGIN'] == true && empty($_SESSION['LOGIN']) == true) exit("<li><strong>".POLL_LOGIN_TO_VOTE."</strong></li>");
                    switch($POLL['HANG_WITH']['type'])
                    {
                        case 1:
                            $findIpQ = $this->query("SELECT requestTime FROM dbo.webPollIps WHERE ip='{$_SERVER['REMOTE_ADDR']}'");
                            $findIp = mssql_fetch_object($findIpQ);
                            if($findIp->requestTime > time()) exit( printf("<li><strong>".POLL_INTERVAL_VOTE."</strong></li>", $POLL['HANG_WITH']['time']));
                            break; 
                        case 2:
                            if($_COOKIE['requestTime'] > time()) exit( printf("<li><strong>".POLL_INTERVAL_VOTE."</strong></li>", $POLL['HANG_WITH']['time']));
                            break; 
                        case 3:
                            $findIpQ = $this->query("SELECT requestTime FROM dbo.webPollIps WHERE ip='{$_SERVER['REMOTE_ADDR']}'");
                            $findIp = mssql_fetch_object($findIpQ);
                            if($findIp->requestTime > time()) exit( printf("<li><strong>".POLL_INTERVAL_VOTE."</strong></li>", $POLL['HANG_WITH']['time']));
                            if($_COOKIE['requestTime'] > time()) exit( printf("<li><strong>".POLL_INTERVAL_VOTE."</strong></li>", $POLL['HANG_WITH']['time']));
                            break;   
                    }
                    if(is_numeric($_GET['answerNumber']) == false || empty($_GET['answerNumber']) == true) exit("<li><strong>".POLL_INVALID_OPTION."</strong></li>"); 
                    $findPollQ = $this->query("SELECT [id],[question] FROM dbo.webPollQuestions WHERE active = 1 AND id=".(int)$_GET['pollId']);
                    if(mssql_num_rows($findPollQ) == 0) exit("<li><strong>".POLL_DISABLE."</strong></li>");
                    $findAnswerQ = $this->query("SELECT 1 FROM dbo.webPollAnswers WHERE idAnswer = ".(int)$_GET['answerNumber']." AND idPoll = ".(int)$_GET['pollId']); 
                    if(mssql_num_rows($findAnswerQ) == 0) exit("<li><strong>".POLL_INVALID_OPTION."</strong></li>");
                    if($this->query("UPDATE dbo.webPollAnswers SET votes = votes+1 WHERE idAnswer = ".(int)$_GET['answerNumber']." AND idPoll = ".(int)$_GET['pollId']) == true)
                    {
                        $time = strtotime("+ {$POLL['HANG_WITH']['time']} minutes");
                        switch($POLL['HANG_WITH']['type'])
                        {
                            case 1:
                                if(mssql_num_rows($findIpQ) == 0) 
                                    $this->query("INSERT INTO dbo.webPollIps (ip, requestTime) VALUES ('{$_SERVER['REMOTE_ADDR']}', '".$time."')");
                                else
                                    $this->query("UPDATE dbo.webPollIps SET requestTime = '".$time."' WHERE ip = '{$_SERVER['REMOTE_ADDR']}'"); 
                                break; 
                            case 2:
                                setcookie("requestTime", $time, $time);
                                break; 
                            case 3:
                                if(mssql_num_rows($findIpQ) == 0) 
                                    $this->query("INSERT INTO dbo.webPollIps (ip, requestTime) VALUES ('{$_SERVER['REMOTE_ADDR']}', '".$time."')");
                                else
                                    $this->query("UPDATE dbo.webPollIps SET requestTime = '".$time."' WHERE ip = '{$_SERVER['REMOTE_ADDR']}'"); 
                                setcookie("requestTime", $time, $time);
                                break;   
                        }
                        exit("<li><strong>".POLL_VOTE_SUCESS."</strong></li>");
                    }
                    else
                        exit("<li><strong>".POLL_VOTE_ERROR."</strong></li>");
                    break;
                case 'result':
                    $findPollQ = $this->query("SELECT [id],[question] FROM dbo.webPollQuestions WHERE id=".(int)$_GET['pollId']);
                    if(mssql_num_rows($findPollQ) == 0) exit("<strong>".POLL_INVALID."</strong>");
                    $findVotesPollQ = $this->query("SELECT sum(votes) as votes FROM dbo.webPollAnswers WHERE idPoll=".(int)$_GET['pollId']);
                    $findVotesPoll = mssql_fetch_object($findVotesPollQ);
                    if((int)$findVotesPoll->votes == 0) exit("<strong>".POLL_NO_VOTES."</strong>");
                    $findAnswerQ = $this->query("SELECT idAnswer, answer, votes FROM dbo.webPollAnswers WHERE idPoll = ".(int)$_GET['pollId']); 
                    while($findAnswer = mssql_fetch_object($findAnswerQ))
                    {
                        echo "<li><strong>".utf8_encode($findAnswer->answer)."</strong> ({$findAnswer->votes})<br />
                                <div class=\"gauge\" id=\"gauge\" style=\"width:150px; height:10px;\">
                                <div class=\"top\"></div>
                                 <div class=\"content\" style=\"height:8px;\"><img id=\"{$findAnswer->idAnswer}\" class=\"filling\" src=\"templates/". TEMPLATE_DIR ."/images/gauge.png\" style=\"width:".(int)( ($findAnswer->votes/$findVotesPoll->votes)*100 )."%; height:13px; border:none;\" alt=\"\" title=\"\"/></div>
                                <div class=\"bottom\"></div>
                               </div></li>";
                    }
                    echo "<li>".POLL_TOTAL_VOTES." {$findVotesPoll->votes}</li>";
                    break;
                default: echo "Error";
            }   
        }
        private function loadNoticeComment()
        {
            global $NOTICES;
            if($NOTICES['COMMENTS'] == false)
                exit("<div class='qdestaques'>".NOTICES_COMMENTS_DISABLED."</div>");
            if(empty($_SESSION['LOGIN']) == true)
                exit("<div class='qdestaques'>".NOTICES_COMMENTS_NEED_LOGIN."</div>");
            if(empty($_GET['comment']) == true)
                exit("<div class='qdestaques'>".NOTICES_COMMENTS_WRITE_COMMENT."</div>");
            if(strlen($_GET['comment']) < 10)
                exit("<div class='qdestaques'>".NOTICES_COMMENTS_MIN_SIZE_COMMENT."</div>");
            if(strlen($_GET['comment']) > 255)
                exit("<div class='qdestaques'>".NOTICES_COMMENTS_MAX_SIZE_COMMENT."</div>");
            if($_SESSION['timeComment'] > time())
                exit( printf("<div class='qdestaques'>".NOTICES_COMMENTS_INTERVAL_COMMENT."</div>", ($_SESSION['timeComment'] - time()) ) );
            
            $checkNoticeExistQ = $this->query("SELECT 1 FROM dbo.webNotices WHERE id=".(int)$_GET['idNotice']);
            if(mssql_num_rows($checkNoticeExistQ) == 0) 
                exit("<div class='qdestaques'>".NOTICES_COMMENTS_INVALID_NOTICE."</div>"); 
                
            if($this->query("INSERT INTO dbo.webNoticesComments ([idNotice] ,[username] ,[comment] ,[datePost] ,[remoteAddr]) VALUES (".(int)$_GET['idNotice'].", '".$_SESSION['LOGIN']."', '".trim($_GET['comment'])."', '".time()."', '".$_SERVER['REMOTE_ADDR']."');") == true)
            {
                $_SESSION['timeComment'] = time()+60;
                exit("<div class='qdestaques2'>".NOTICES_COMMENTS_SEND_SUCCESS."</div><script>loadComments();</script>"); 
            }
            else
                exit("<div class='qdestaques'>".NOTICES_COMMENTS_SEND_ERROR."</div>"); 
            
        }
        private function loadNoticeSelectComments()
        {
            $checkNoticeExistQ = $this->query("SELECT 1 FROM dbo.webNotices WHERE id=".(int)$_GET['idNotice']);
            if(mssql_num_rows($checkNoticeExistQ) == 0) 
                exit("<div class='qdestaques'>".NOTICES_COMMENTS_INVALID_NOTICE."</div>"); 
                
            $findCommentsQ = $this->query("SELECT * FROM dbo.webNoticesComments WHERE idNotice = ".(int)$_GET['idNotice']." ORDER BY id DESC");
            while($findComments = mssql_fetch_object($findCommentsQ))
            {
                $findLastCharQ = $this->query("SELECT GameIDC FROM ".DATABASE_CHARACTERS.".dbo.AccountCharacter WHERE id='".$findComments->username."'");
                $findLastChar = mssql_fetch_object($findLastCharQ);
                if(empty($findLastChar->GameIDC) == true)
                    $postBy = "<strong>{$findComments->username}</strong><br /><img src='modules/uploads/photos/nophoto.jpg' style='border: none; width:100px; height:100px;' />";
                else
                {
                    $findCharQ = $this->query("SELECT ".COLUMN_RESETS." as resets, image FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='{$findLastChar->GameIDC}' AND AccountID='{$findComments->username}'");
                    if(mssql_num_rows($findCharQ) == 0)
                        $postBy = "<strong>{$findComments->username}</strong><br /><img src='modules/uploads/photos/nophoto.jpg' style='border: none; width:100px; height:100px;' />";
                    else 
                    {
                        $findChar = mssql_fetch_object($findCharQ);
                        $postBy = "<a href='?page=rankings&type=6&name={$findLastChar->GameIDC}'><strong>{$findLastChar->GameIDC}</strong><br /><img src='modules/uploads/photos/".( empty($findChar->image) ? "nophoto.jpg":$findChar->image )."' style='border: none; width:100px; height:100px;' /><br />{$findChar->resets} resets</a>";
                    }
                }  
                $count++;     
                echo "<div class=\"quadros\" id=\"divComent_{$count}\">";    
                echo "<table style='width: 100%;'>";    
                echo "<tr>";    
                echo "<td align='center' style='padding-right: 20px; width: 120px'>{$postBy}</td>";    
                echo "<td valign='top'><strong><em>".NOTICES_COMMENTS_COMMENT."</em></strong> <br />";    
                echo nl2br( htmlentities( utf8_decode( $findComments->comment ) ) );
                echo "</td>";    
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='2' align='right'>";
                echo NOTICES_COMMENTS_DATE." ".date("d/m/Y G:i:s", $findComments->datePost);
                if(ldPanelAdmin::checkPermission())
                {
                    echo ", IP: {$findComments->remoteAddr}";
                    echo ", <a href=\"javascript: void(0);\" onclick=\"javascript: Verify('?page=ajax&require=noticedeletecomment&commentId={$findComments->id}', 'divComent_{$count}', 'get');\">".NOTICES_COMMENTS_ERASE."</a>";
                }
                echo "</td>";
                echo "</tr>";
                echo "</table>";    
                echo "</div>";    
            }
            
        }
        private function loadNoticeDeleteComment()
        {
            if(ldPanelAdmin::checkPermission())
            {
                $findCommentQ = $this->query("SELECT * FROM dbo.webNoticesComments WHERE id = ".(int)$_GET['commentId']);
                if(mssql_num_rows($findCommentQ) == 0)
                    exit("<div class='qdestaques'>".NOTICES_COMMENTS_INVALID_COMMENT."</div>");
                    
                if($this->query("DELETE FROM dbo.webNoticesComments WHERE id = ".(int)$_GET['commentId']) == true)
                    exit("<div class='qdestaques2'>".NOTICES_COMMENTS_DELETE_SUCCESS."</div>");
                else 
                    exit("<div class='qdestaques'>".NOTICES_COMMENTS_DELETE_ERROR."</div>"); 
            }
            else exit("<div class='qdestaques'>".NOTICES_COMMENTS_DELETE_PREVILEGY_ERROR."</div>");
            
        }
	}
	
}

?>
