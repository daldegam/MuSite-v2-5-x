<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldHome" ) == false ) {
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
	class ldHome extends ldMssql {
		public function __construct()
		{
            global $RANKING_HOME_STATS, $FORUM_CONFIGS, $CASTLE_SIEGE;
            $this->loadLastNotices(); 
            if($FORUM_CONFIGS['ENABLE'] == TRUE) $this->loadLastForum(); 
			if($CASTLE_SIEGE['ENABLE'] == TRUE) $this->loadCastleSiege(); 
            if($RANKING_HOME_STATS['RANKING_RESETS_HOME'] == true) $this->loadTopResets();
            if($RANKING_HOME_STATS['RANKING_RESETS_WEEK_HOME'] == true) $this->loadTopResetsWeek();
            if($RANKING_HOME_STATS['RANKING_RESETS_MONTH_HOME']) $this->loadTopResetsMonth();
            if($RANKING_HOME_STATS['RANKING_MASTER_RESETS_HOME']) $this->loadTopMasterResets();
            if($RANKING_HOME_STATS['RANKING_PK_HOME']) $this->loadTopPk();
			if($RANKING_HOME_STATS['RANKING_LEVELS_HOME']) $this->loadTopLevels();
			if($RANKING_HOME_STATS['RANKING_GUILDS_HOME']) $this->loadTopGuilds();
		}
        private function loadCastleSiege()
        {
            global $ldTpl, $CASTLE_SIEGE;
            $findInfosQ = $this->query("SELECT * FROM ".DATABASE_CHARACTERS.".dbo.MuCastle_DATA");
            $findInfos = mssql_fetch_object($findInfosQ);
            $ldTpl->set("CASTLE_SIEGE_OCCUPY_GUILD", ($findInfos->CASTLE_OCCUPY == 0 ? CASTLE_SIEGE_OCCUPY_GUILD : $findInfos->OWNER_GUILD) ); 
            $ldTpl->set("CASTLE_SIEGE_END_DATE", $CASTLE_SIEGE['CONFRONTATION'] ); 
        }
        private function loadLastNotices()
        {
            global $ldTpl, $NOTICES;
            $findNoticesQ = $this->query("SELECT TOP ".(int)$NOTICES['LAST']." * FROM dbo.webNotices ORDER BY date DESC");
            while($findNotices = mssql_fetch_object($findNoticesQ))
            {
                $tempTpl .= "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\"><a href=\"?page=readNotice&amp;id=". $findNotices->id ."\">". $findNotices->subject ."</a> - [". date("d/m/Y g:i a",$findNotices->date) ."]</div></li>";
            }
            $ldTpl->set("LAST_NOTICES_HOME",$tempTpl);
            unset($tempTpl);
        } 
		private function loadLastForum()
		{
			global $ldTpl, $FORUM_CONFIGS;
            if($FORUM_CONFIGS['DATABASE']['TYPE'] == 0)
            {
                $objCon = mysql_connect($FORUM_CONFIGS['DATABASE']['HOST'], $FORUM_CONFIGS['DATABASE']['USERNAME'], $FORUM_CONFIGS['DATABASE']['PASSWORD']);
                if($objCon == false)
                    $tempTpl = "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\">".LLF_ERROR_CONNECT_DATABASE." (MYSQL)</div></li>";
                if(mysql_select_db($FORUM_CONFIGS['DATABASE']['DB_NAME'], $objCon) == false)
                    $tempTpl = "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\">".LLF_ERROR_SELECT_DATABASE." (MYSQL)</div></li>";
                else 
                {
                    switch($FORUM_CONFIGS['TYPE'])
                    {
                        case 0: //vBulletin
                            $query = "SELECT threadid as topicId, title as title FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}thread WHERE forumid = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forumid" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY threadid DESC LIMIT {$FORUM_CONFIGS['LAST_TOPICS']}";
                            break;
                        case 1: //IPB
                            $query = "SELECT tid as topicId, title as title FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}topics WHERE forum_id = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forum_id" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY tid DESC LIMIT {$FORUM_CONFIGS['LAST_TOPICS']}";
                            break;
                        case 2: //phpBB
                            $query = "SELECT topic_title as title, topic_id as topicId FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}topics WHERE forum_id = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forum_id" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY topic_id DESC LIMIT {$FORUM_CONFIGS['LAST_TOPICS']}";
                            break;
                    }
                    $query = mysql_query($query);
                    while($findLastForum = mysql_fetch_object($query))
                    {
                        $tempTpl .= sprintf("<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\"><a href=\"{$FORUM_CONFIGS['LINKS_TOPICS']}\" target=\"_blank\">%s</a></div></li>", $findLastForum->topicId, $findLastForum->title);
                    }  
                }
            }
            elseif($FORUM_CONFIGS['DATABASE']['TYPE'] == 1)
            {
                $objCon = mssql_connect($FORUM_CONFIGS['DATABASE']['HOST'], $FORUM_CONFIGS['DATABASE']['USERNAME'], $FORUM_CONFIGS['DATABASE']['PASSWORD']);
                if($objCon == false)
                    $tempTpl = "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\">".LLF_ERROR_CONNECT_DATABASE." (MSSQL)</div></li>";
                if(mssql_select_db($FORUM_CONFIGS['DATABASE']['DB_NAME'], $objCon) == false)
                    $tempTpl = "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\">".LLF_ERROR_SELECT_DATABASE." (MSSQL)</div></li>";
                else 
                {
                    switch($FORUM_CONFIGS['TYPE'])
                    {
                        case 0: //vBulletin
                            $query = "SELECT TOP {$FORUM_CONFIGS['LAST_TOPICS']} threadid as topicId, title as title FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}thread WHERE forumid = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forumid" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY threadid DESC";
                            break;
                        case 1: //IPB
                            $query = "SELECT TOP {$FORUM_CONFIGS['LAST_TOPICS']} tid as topicId, title as title FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}topics WHERE forum_id = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forum_id" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY tid DESC";
                            break;
                        case 2: //phpBB
                            $query = "SELECT TOP {$FORUM_CONFIGS['LAST_TOPICS']} topic_title as title, topic_id as topicId FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}topics WHERE forum_id = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forum_id" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY topic_id DESC";
                            break;
                    }
                    $query = mssql_query($query);
                    while($findLastForum = mssql_fetch_object($query))
                    {
                        $tempTpl .= sprintf("<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\"><a href=\"{$FORUM_CONFIGS['LINKS_TOPICS']}\" target=\"_blank\">%s</a></div></li>", $findLastForum->topicId, $findLastForum->title);
                    }  
                }
				$this->connect();
            }
			if($FORUM_CONFIGS['UTF8_DECODE'] == true)
				$tempTpl = utf8_decode($tempTpl);
            $ldTpl->set("LAST_FORUM_HOME", $tempTpl);                                       
			unset($tempTpl);
		}  
        private function loadTopResets()
        {
            global $ldTpl, $RANKING_HOME_CONFIGS;
            $findTopsQ = $this->query("SELECT TOP ".$RANKING_HOME_CONFIGS['TOPAMOUNT']." character, resets FROM dbo.webRankingCharactersResets ORDER BY resets DESC");
            while($findTops = mssql_fetch_row($findTopsQ))
            {                                                                                                                              
                $tempTpl .= "<li><a href=\"?page=rankings&type=6&name={$findTops[0]}\">". $findTops[0] ."</a> - ". $findTops[1] ."</li>";
            }
            $ldTpl->set("RANK_TOP_RESETS_HOME", $tempTpl);
            unset($tempTpl);
        }  
        private function loadTopResetsWeek()
        {                   
            global $ldTpl, $RANKING_HOME_CONFIGS;
            $findTopsQ = $this->query("SELECT TOP ".$RANKING_HOME_CONFIGS['TOPAMOUNT']." character, resetsweek FROM dbo.webRankingCharactersResetsWeek ORDER BY resetsweek DESC");
            while($findTops = mssql_fetch_row($findTopsQ))
            {                                                                    
                $tempTpl .= "<li><a href=\"?page=rankings&type=6&name={$findTops[0]}\">". $findTops[0] ."</a> - ". $findTops[1] ."</li>";
            }
            $ldTpl->set("RANK_TOP_RESETS_WEEK_HOME", $tempTpl);
            unset($tempTpl);
        }       
        private function loadTopResetsMonth()
        {                    
            global $ldTpl, $RANKING_HOME_CONFIGS;
            $findTopsQ = $this->query("SELECT TOP ".$RANKING_HOME_CONFIGS['TOPAMOUNT']." character, resetsmonth FROM dbo.webRankingCharactersResetsMonth ORDER BY resetsmonth DESC");
            while($findTops = mssql_fetch_row($findTopsQ))
            {                                                                   
                $tempTpl .= "<li><a href=\"?page=rankings&type=6&name={$findTops[0]}\">". $findTops[0] ."</a> - ". $findTops[1] ."</li>";
            }
            $ldTpl->set("RANK_TOP_RESETS_MONTH_HOME", $tempTpl);
            unset($tempTpl);
        }
        private function loadTopMasterResets()
        {                    
            global $ldTpl, $RANKING_HOME_CONFIGS;
            $findTopsQ = $this->query("SELECT TOP ".$RANKING_HOME_CONFIGS['TOPAMOUNT']." character, mresets FROM dbo.webRankingCharactersMasterReset ORDER BY mresets DESC");
            while($findTops = mssql_fetch_row($findTopsQ))
            {                                                                   
                $tempTpl .= "<li><a href=\"?page=rankings&type=6&name={$findTops[0]}\">". $findTops[0] ."</a> - ". $findTops[1] ."</li>";
            }
            $ldTpl->set("RANK_TOP_MASTER_RESETS_HOME", $tempTpl);
            unset($tempTpl);
        }
        private function loadTopPk()
        {                      
            global $ldTpl, $RANKING_HOME_CONFIGS;
            $findTopsQ = $this->query("SELECT TOP ".$RANKING_HOME_CONFIGS['TOPAMOUNT']." character, pkcount FROM dbo.webRankingCharactersPk ORDER BY pkcount DESC");
            while($findTops = mssql_fetch_row($findTopsQ))
            {                                                                    
                $tempTpl .= "<li><a href=\"?page=rankings&type=6&name={$findTops[0]}\">". $findTops[0] ."</a> - ". $findTops[1] ."</li>";
            }
            $ldTpl->set("RANK_TOP_PK_HOME", $tempTpl);
            unset($tempTpl);
        }
		private function loadTopLevels()
		{                    
            global $ldTpl, $RANKING_HOME_CONFIGS;
			$findTopsQ = $this->query("SELECT TOP ".$RANKING_HOME_CONFIGS['TOPAMOUNT']." character, clevel FROM dbo.webRankingCharactersLevel ORDER BY clevel DESC");
			while($findTops = mssql_fetch_row($findTopsQ))
			{                                                                  
                $tempTpl .= "<li><a href=\"?page=rankings&type=6&name={$findTops[0]}\">". $findTops[0] ."</a> - ". $findTops[1] ."</li>";
			}
			$ldTpl->set("RANK_TOP_LEVEL_HOME", $tempTpl);
			unset($tempTpl);
		}
		private function loadTopGuilds()
		{                    
            global $ldTpl, $RANKING_HOME_CONFIGS;
			$findTopsQ = $this->query("SELECT TOP ".$RANKING_HOME_CONFIGS['TOPAMOUNT']." G_Name, G_Score, G_Mark FROM ".DATABASE_CHARACTERS.".dbo.Guild ORDER BY G_Score DESC");
			while($findTops = mssql_fetch_row($findTopsQ))
			{
                $tmpLogo = urlencode(bin2hex($findTops[2]));
				$tempTpl .= sprintf("<td align=\"center\"><a href=\"?page=rankings&type=7&name=%s\"><strong>%s</strong><br /><img src=\"modules/classes/logoGuildDecode.php?decode=%s\" width=\"100\" height=\"100\" /><br />Pontos: %d</a></td>", $findTops[0],$findTops[0],$tmpLogo,$findTops[1]);
            }
			$ldTpl->set("RANK_TOP_GUILDS_HOME", $tempTpl);
			unset($tempTpl);
		}
	}	
}

?>