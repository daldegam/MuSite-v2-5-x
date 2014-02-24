<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldNotice" ) == false ) {
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldNotice extends ldMssql {
		public function __construct()
		{
			if(isset($_GET['id']) == true)
				$this->openNoticeId($_GET['id']);
			else
				$this->listAllNotices();
		}
		private function openNoticeId($id)
		{
			global $ldTpl;
			if(is_numeric($_GET['id']) == false) return $ldTpl->set("ResultNotices", NOTICE_ERROR_VARIABLE);
			$findNoticeQ = $this->query("SELECT subject,content,date FROM dbo.webNotices WHERE id=".$id);
			if(mssql_num_rows($findNoticeQ) == 0) $tempTpl = NOTICE_NOT_EXISTS;
			else
			{
				$findNotice = mssql_fetch_object($findNoticeQ);
				$tempTpl .= "<h1>". $findNotice->subject ."</h1><br />". base64_decode($findNotice->content) ."<br /><br /><strong><em>".NOTICE_ADD_DATE."</em></strong> ".date("d/m/Y g:i a",$findNotice->date);
			}
			$ldTpl->set("ResultNotices", $tempTpl);
		}
		private function listAllNotices()
		{
			global $ldTpl;
			$findNoticeQ = $this->query("SELECT id,subject,date FROM dbo.webNotices ORDER BY date DESC");
			if(mssql_num_rows($findNoticeQ) == 0) $tempTpl = NOTICE_NOT_EXISTS_NOTICES;
			else
			{
				$tempTpl .= "<ul>";
				while($findNotice = mssql_fetch_object($findNoticeQ))
				{
					$tempTpl .= "<li><a href=\"?page=readNotice&amp;id=".$findNotice->id."\">". $findNotice->subject ."</a> - ".date("[d/m/Y g:i a]",$findNotice->date)."</li>";
				}	
			}
			$ldTpl->set("ResultNotices", $tempTpl);
		}
	}	
}

?>