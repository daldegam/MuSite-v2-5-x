<?php            
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldRankings" ) == false ) {                                              
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldRankings extends ldMssql { 
		private $returnRanking;
		public function __construct($request = false)
		{
            if($request == true) return $this->commandManager();
			global $ldTpl;
			switch($_GET['type'])
			{
				case 1:
					$this->gerateRankingResets();
					break;
				case 2:
					$this->gerateRankingLevel();
					break;
                case 3:
                    $this->gerateRankingGuilds();
                    break; 
                case 4:
                    $this->gerateRankingPks();
                    break;
                case 5:
                    $this->gerateRankingMasterResets();
                    break;
                case 6:
                    $this->geratePerfilCharacter();
                    break;
                case 7:
                    $this->geratePerfilGuild();
                    break;
                case 8: case 9:
                    $this->gerateRankingGens();
                    break;
			}
			$ldTpl->set("ResultRankings", $this->returnRanking);
		}    
        private function geratePerfilCharacter()
        {    
            global $TABLES_CONFIGS, $PANELUSER_MODULE, $RANKING_CONFIGS;
            $this->name = $_GET['name'];     
            $findDetailsQ = $this->query("Select AccountId, image,Class,cLevel,PkCount,CtlCode,".COLUMN_RESETS." as resets, LevelUpPoint, MapNumber, MapPosX, MapPosY, Money, Strength, Dexterity, Vitality, Energy, Leadership from ".DATABASE_CHARACTERS.".dbo.Character where Name='{$this->name}'");
            if(mssql_num_rows($findDetailsQ) > 0)
            {
                $findDetails = mssql_fetch_object($findDetailsQ);
                if(empty($findDetails->image) == true) $this->photo = "modules/uploads/photos/nophoto.jpg"; else $this->photo = "modules/uploads/photos/".$findDetails->image;
                
                $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$findDetails->AccountId."'");
                $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
                
                $findGuildQ = $this->query("SELECT G_Name FROM ".DATABASE_CHARACTERS.".dbo.GuildMember WHERE Name='{$this->name}'");
                $findGuild = mssql_fetch_object($findGuildQ);
                
                foreach($PANELUSER_MODULE['MOVE_CHARACTER']['MAPS'] as $Map)
                    if($Map[0] == $findDetails->MapNumber) $findDetails->MapName = $Map[1];
                
                $this->returnRanking .= "<h1>".RANKING_RESULT_OF." {$this->name}</h1>
                                        <div class='quadros'>
                                        <table width='100%' border='0'>
                                        <tr>
                                            <td width='25%' align='center' valign='middle' style='padding-top: 2px;'>
                                            <p><img src='{$this->photo}' alt='' width='100' height='100' style='border: 2px solid #222222;' /></p>
                                            </td>
                                            <td width='37%'>
                                                <strong>".RANKING_CLASS.":</strong> ". ldPanelUser::classNameDefine($findDetails->Class) ." <br />
                                                <strong>".RANKING_RESETS.":</strong> {$findDetails->resets} <br />
                                                <strong>".RANKING_LEVEL.":</strong> {$findDetails->cLevel} <br />
                                                <strong>".RANKING_POINTS.":</strong> {$findDetails->LevelUpPoint} <br />
                                                ".($RANKING_CONFIGS['STATS'] == TRUE ? "<strong>".RANKING_MAP.":</strong> {$findDetails->MapName} <br />" : NULL) ."
                                                ".($RANKING_CONFIGS['STATS'] == TRUE ? "<strong>".RANKING_MAP_POS_X.":</strong> {$findDetails->MapPosX} <br />" : NULL) ."
                                                ".($RANKING_CONFIGS['STATS'] == TRUE ? "<strong>".RANKING_MAP_POS_Y.":</strong> {$findDetails->MapPosY} <br />" : NULL) ."
                                                <strong>".RANKING_ZEN.":</strong> {$findDetails->Money}
                                            </td>
                                            <td width='38%' valign='top'>
                                                ".($RANKING_CONFIGS['STATS'] == TRUE ? "<strong>".RANKING_STRENGHT.":</strong> {$findDetails->Strength} <br />" : NULL) ."
                                                ".($RANKING_CONFIGS['STATS'] == TRUE ? "<strong>".RANKING_DEXTERITY.":</strong> {$findDetails->Dexterity} <br />" : NULL) ."
                                                ".($RANKING_CONFIGS['STATS'] == TRUE ? "<strong>".RANKING_VITALITY.":</strong> {$findDetails->Vitality} <br />" : NULL) ."
                                                ".($RANKING_CONFIGS['STATS'] == TRUE ? "<strong>".RANKING_ENERGY.":</strong> {$findDetails->Energy} <br />" : NULL) ."
                                                ".($RANKING_CONFIGS['STATS'] == TRUE ? "<strong>".RANKING_LEADERSHIP.":</strong> ". (int)$findDetails->Leadership ." <br />" : NULL) ."
                                                <strong>".RANKING_STATUS.":</strong> ". ((int) ldPanelUser::checkOnlineAccount($findDetails->AccountId) == 1 ? RANKING_STATUS_ONLINE : RANKING_STATUS_OFFLINE) ." <br />
                                                <strong>".RANKING_GUILD.":</strong> ". ( empty($findGuild->G_Name) == true ? RANKING_GUILD_EMPTY : "<a href=\"?page=rankings&type=7&name={$findGuild->G_Name}\">".$findGuild->G_Name."</a>" ) ." <br />
                                                <strong>".RANKING_TYPE_ACCOUNT.":</strong> {$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][(int)$checkMemberVip->type]}
                                            </td>
                                        </tr>
                                        </table>
                                        </div>";
            }
            else
            {   
                $this->returnRanking .= "<h1>Resultado de {$this->name}</h1>
                                        <div class='quadros'>
                                        <table width='100%' border='0'>
                                        <tr><td>".RANKING_CHARACTER_NOT_FOUND."</td></tr>
                                        </table>
                                        </div>"; 
            }
        }  
        private function geratePerfilGuild()
        {    
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            $this->name = $_GET['name'];     
            $findDetailsQ = $this->query("SELECT G_Mark,G_Score,G_Master FROM ".DATABASE_CHARACTERS.".dbo.Guild WHERE G_Name='".$this->name."'");
            if(mssql_num_rows($findDetailsQ) > 0)
            {
                $findDetails = mssql_fetch_object($findDetailsQ);
                $tmpLogo = urlencode(bin2hex($findDetails->G_Mark)); 
                
                $countMembers = $this->query("SELECT count(1) as total FROM ".DATABASE_CHARACTERS.".dbo.Guildmember WHERE G_Name='".$this->name."'"); 
                $countMembers = mssql_fetch_object($countMembers);
                
                $findMembersQ = $this->query("SELECT Name, G_Level, G_Status FROM ".DATABASE_CHARACTERS.".dbo.Guildmember WHERE G_Name='".$this->name."'");
                while($findMembers = mssql_fetch_object($findMembersQ))
                {
                    switch( $findMembers->G_Status )
                    {
                        case 32: $pos = "<strong>".RANKING_GUILD_BM."</strong>"; break;   
                        case 64: $pos = "<strong>".RANKING_GUILD_ASSISTANT."</strong>"; break;   
                        case 128: $pos = "<strong>".RANKING_GUILD_GM."</strong>"; break;   
                        default: if($findMembers->G_Level == 1) $pos = "<strong>".RANKING_GUILD_GM."</strong>"; else $pos = RANKING_GUILD_MEMBBER; break;   
                    }
                    $findCharInfoQ = $this->query("SELECT Class, ".COLUMN_RESETS." as Resets FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='{$findMembers->Name}'");
                    $findCharInfo = mssql_fetch_object($findCharInfoQ);
                    $listTmp .= "<tr><td><a href=\"?page=rankings&type=6&name={$findMembers->Name}\">{$findMembers->Name}</a></td><td>". ldPanelUser::classNameDefine($findCharInfo->Class) ."</td><td>{$findCharInfo->Resets}</td><td>". $pos ."</td></tr>";    
                }
                
                $this->returnRanking .= "<h1>".RANKING_RESULT_OF." {$this->name}</h1>
                                        <div class='quadros'>
                                        <table width='100%' border='0'>
                                        <tr>
                                            <td width='25%' align='center' valign='middle' style='padding-top: 2px;'>
                                            <p><img src='modules/classes/logoGuildDecode.php?decode={$tmpLogo}' alt='' width='100' height='100' style='border: 2px solid #222222;' /></p>
                                            </td>
                                            <td width='75%'> 
                                                <strong>".RANKING_GUILD_SCORE."</strong>: {$findDetails->G_Score} <br /> 
                                                <strong>".RANKING_GUILD_GM."</strong>: <a href=\"?page=rankings&type=6&name={$findDetails->G_Master}\">{$findDetails->G_Master}</a> <br />    
                                                <strong>".RANKING_TOTAL_MEMBERS."</strong>: ". (int)$countMembers->total ." <br />
                                                <table width='100%' border='0' style='text-align: center;'>
                                                    <tr>
                                                        <th width='26%' align='center' style='background: #E4E1CB; padding: 1px 5px;'><strong>".RANKING_CHARACTER."</strong></th>
                                                        <th width='25%' align='center' style='background: #E4E1CB; padding: 1px 5px;'><strong>".RANKING_CLASS."</strong></th>     
                                                        <th width='23%' align='center' style='background: #E4E1CB; padding: 1px 5px;'><strong>".RANKING_RESETS."</strong></th>
                                                        <th width='26%' align='center' style='background: #E4E1CB; padding: 1px 5px;'><strong>".RANKING_POSITION."</strong></th>
                                                    </tr>
                                                    {$listTmp}
                                                </table>
                                            </td> 
                                        </tr>
                                        </table>
                                        </div>";
            }
            else
            {   
                $this->returnRanking .= "<h1>".RANKING_RESULT_OF." {$this->name}</h1>
                                        <div class='quadros'>
                                        <table width='100%' border='0'>
                                        <tr><td>".RANKING_GUILD_NOT_FOUND."</td></tr>
                                        </table>
                                        </div>"; 
            }
        }        
        private function gerateRankingResets()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
             $busca_dados_q = $this->query("Select TOP $ex_top account,character,class,clevel,pkcount,resets,resetsweek,resetsmonth from dbo.webRankingCharacters". ($_GET['period'] == 0 ? "Resets" : ($_GET['period'] == 1 ? "ResetsWeek" : ($_GET['period'] == 2 ? "ResetsMonth" : "Resets"))) ." order by ". ($_GET['period'] == 0 ? "resets desc" : ($_GET['period'] == 1 ? "resetsweek desc, resets desc" : ($_GET['period'] == 2 ? "resetsmonth desc, resets desc" : "resets desc")))." , cLevel desc");
             $this->returnRanking .= "<div class='quadros'>
                    <table border='0' width='100%'>
                     <tr>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_PLACE."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_CHARACTER_SHORT."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_LEVEL."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_KILLS."</strong></td>
                      <td bgcolor='#CDC89E' align='center'><strong>".RANKING_RESETS."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_CLASS."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_STATUS_ACCOUNT."</strong></td>
                     </tr>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['account']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[pkcount] < 0) $pk_class = RANKING_HERO;
               else $pk_class = $busca_dados[pkcount];
               $this->returnRanking .= "<tr>
                      <td bgcolor='#F1F0E4' align='center'><strong>".$posicao++."</strong></td>
                      <td align='center'><a href=\"?page=rankings&type=6&name={$busca_dados['character']}\">".$busca_dados['character']."</a></td>
                      <td align='center'>".$busca_dados['clevel']."</td>
                      <td align='center'>".$pk_class."</td>
                      <td align='center'>". $busca_dados[($_GET['period'] == 0 ? "resets" : ($_GET['period'] == 1 ? "resetsweek" : ($_GET['period'] == 2 ? "resetsmonth" : "resets")))] ."</td>
                      <td align='center'>". ldPanelUser::classNameDefine($busca_dados['class']) ."</td>
                      <td align='center'>".$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][(int)$checkMemberVip->type]."</td>
                     </tr>";
             }
             $this->returnRanking .= "</table></div>";
        }
        private function gerateRankingMasterResets()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;
             $busca_dados_q = $this->query("Select TOP $ex_top account,character,class,clevel,pkcount,mresets from dbo.webRankingCharactersMasterReset order by mresets desc, resets desc");
             $this->returnRanking .= "<div class='quadros'>
                    <table border='0' width='100%'>
                     <tr>   
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_PLACE."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_CHARACTER_SHORT."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_LEVEL."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_KILLS."</strong></td>
                      <td bgcolor='#CDC89E' align='center'><strong>".RANKING_MASTERRESETS."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_CLASS."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_STATUS_ACCOUNT."</strong></td>
                     </tr>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['account']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[pkcount] < 0) $pk_class = RANKING_HERO;
               else $pk_class = $busca_dados[pkcount];
               $this->returnRanking .= "<tr>
                      <td bgcolor='#F1F0E4' align='center'><strong>".$posicao++."</strong></td> 
                      <td align='center'><a href=\"?page=rankings&type=6&name={$busca_dados['character']}\">".$busca_dados['character']."</a></td>
                      <td align='center'>".$busca_dados['clevel']."</td>
                      <td align='center'>".$pk_class."</td>
                      <td align='center'>". $busca_dados['mresets'] ."</td>
                      <td align='center'>". ldPanelUser::classNameDefine($busca_dados['class']) ."</td>
                      <td align='center'>".$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][(int)$checkMemberVip->type]."</td>
                     </tr>";
             }
             $this->returnRanking .= "</table></div>";
        }
        private function gerateRankingLevel()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;
             $busca_dados_q = $this->query("Select TOP $ex_top account,character,class,clevel,pkcount,resets from dbo.webRankingCharactersLevel order by clevel desc, resets desc");
             $this->returnRanking .= "<div class='quadros'>
                    <table border='0' width='100%'>
                     <tr>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_PLACE."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_CHARACTER_SHORT."</strong></td>
                      <td bgcolor='#CDC89E' align='center'><strong>".RANKING_LEVEL."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_KILLS."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_RESETS."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_CLASS."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_STATUS_ACCOUNT."</strong></td>
                     </tr>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['account']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[pkcount] < 0) $pk_class = RANKING_HERO;
               else $pk_class = $busca_dados[pkcount];
               $this->returnRanking .= "<tr>
                      <td bgcolor='#F1F0E4' align='center'><strong>".$posicao++."</strong></td> 
                      <td align='center'><a href=\"?page=rankings&type=6&name={$busca_dados['character']}\">".$busca_dados['character']."</a></td>
                      <td align='center'>".$busca_dados['clevel']."</td>
                      <td align='center'>".$pk_class."</td>
                      <td align='center'>". $busca_dados['resets'] ."</td>
                      <td align='center'>". ldPanelUser::classNameDefine($busca_dados['class']) ."</td>
                      <td align='center'>".$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][(int)$checkMemberVip->type]."</td>
                     </tr>";
             }
             $this->returnRanking .= "</table></div>";
        }
        private function gerateRankingPks()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;
             $busca_dados_q = $this->query("Select TOP $ex_top account,character,class,clevel,pkcount,resets from dbo.webRankingCharactersPk order by pkcount desc, resets desc");
             $this->returnRanking .= "<div class='quadros'>
                    <table border='0' width='100%'>
                     <tr>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_PLACE."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_CHARACTER_SHORT."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_LEVEL."</strong></td>
                      <td bgcolor='#CDC89E' align='center'><strong>".RANKING_KILLS."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_RESETS."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_CLASS."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_STATUS_ACCOUNT."</strong></td>
                     </tr>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['account']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[pkcount] < 0) $pk_class = RANKING_HERO;
               else $pk_class = $busca_dados[pkcount];
               $this->returnRanking .= "<tr>
                      <td bgcolor='#F1F0E4' align='center'><strong>".$posicao++."</strong></td>  
                      <td align='center'><a href=\"?page=rankings&type=6&name={$busca_dados['character']}\">".$busca_dados['character']."</a></td>
                      <td align='center'>".$busca_dados['clevel']."</td>
                      <td align='center'>".$pk_class."</td>
                      <td align='center'>". $busca_dados['resets'] ."</td>
                      <td align='center'>". ldPanelUser::classNameDefine($busca_dados['class']) ."</td>
                      <td align='center'>".$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][(int)$checkMemberVip->type]."</td>
                     </tr>";
             }
             $this->returnRanking .= "</table></div>";
        }
		private function gerateRankingGuilds()
		{
			if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
			if($_GET['top'] == 10) $ex_top = 10;
			elseif($_GET['top'] == 50) $ex_top = 50;
			elseif($_GET['top'] == 100) $ex_top = 100;
			elseif($_GET['top'] == 200) $ex_top = 200;
			else $ex_top = 10;		
			 $busca_dados_q = $this->query("SELECT TOP $ex_top G_Name,G_Master,G_Score,G_Mark,G_Union from ".DATABASE_CHARACTERS.".dbo.Guild order by G_Score desc");
			 $this->returnRanking .= "<div class='quadros'>
					<table border='0' width='100%'>
					 <tr>
					  <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_PLACE_X."</strong></td>
					  <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_GUILD_NAME."</strong></td>
					  <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_GUILD_GM."</strong></td>
					  <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_GUILD_ASSISTANT."</strong></td>
					  <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_GUILD_BM."</strong></td>
					  <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_GUILD_SCORE_SHORT."</strong></td>
					 </tr>";
			 $posicao = 1;
			 while($busca_dados = mssql_fetch_array($busca_dados_q)) {
			   
			   $busca_assistente_q = $this->query("Select Name from ".DATABASE_CHARACTERS.".dbo.GuildMember where G_Name='".$busca_dados['G_Name']."' and G_Status='64'");
			   $assistente = mssql_fetch_array($busca_assistente_q);
			   $busca_batlemaster_q = $this->query("Select Name from ".DATABASE_CHARACTERS.".dbo.GuildMember where G_Name='".$busca_dados['G_Name']."' and G_Status='32'");
			   $batlemaster = mssql_fetch_array($busca_batlemaster_q);
			   
			   $busca_guild_alience_q = $this->query("Select G_Name,G_Union from ".DATABASE_CHARACTERS.".dbo.Guild where G_Union='".$busca_dados['G_Union']."'");
			   $verifica_union = mssql_fetch_array($busca_guild_alience_q);
			   if($verifica_union[1] > 0) {
				   while($busca_guild_alience = mssql_fetch_array($busca_guild_alience_q)) { 
					 if($busca_guild_alience[0] != $busca_dados['G_Name']) $aliance .= "$busca_guild_alience[0]<br />"; 
				   }
			   } 
			   $this->returnRanking .= "<tr>
					  <td bgcolor='#F1F0E4' align='center'><strong>".$posicao++."</strong></td>             
					  <td bgcolor='#F1F0E4' align='center'><a href=\"?page=rankings&type=7&name={$busca_dados['G_Name']}\">".$busca_dados['G_Name']."</a></td>
					  <td bgcolor='#F1F0E4' align='center'>".$busca_dados['G_Master']."</td>
					  <td bgcolor='#F1F0E4' align='center'>".$assistente[0]."</td>
					  <td bgcolor='#F1F0E4' align='center'>".$batlemaster[0]."</td>
					  <td bgcolor='#F1F0E4' align='center'>".$busca_dados['G_Score']."</td>
					 </tr>";
				unset($aliance);
			 }
			 $this->returnRanking .= "</table></div>";
		}
        private function gerateRankingGens()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE, $RANKING_CONFIGS;;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;
            
            if($_GET['type'] == 8) { $family = 1; $familyPath = "duprian"; }
            elseif($_GET['type'] == 9){ $family = 2; $familyPath = "vanert"; }
            else { $family = 1; $familyPath = "duprian"; }  
            
            if($RANKING_CONFIGS['GENS_MANUFACTURER'] == 0)
            {
             $busca_dados_q = $this->query("SELECT TOP {$ex_top} [CHAR_NAME] 
                                                  ,[GRADUATION]
                                                  ,[FAMILY] 
                                                  ,[RANKING] 
                                                  ,[CONTRIBUITION] 
                                              FROM [".constant("DATABASE_CHARACTERS")."].[dbo].[T_GensSystem]
                                              WHERE [FAMILY] = {$family}
                                              ORDER BY [CONTRIBUITION] DESC");
            }
            elseif($RANKING_CONFIGS['GENS_MANUFACTURER'] == 1)
            {                                                                   
             /*$busca_dados_q = $this->query("SELECT TOP {$ex_top} Row_Number() OVER (ORDER BY Contribution DESC, Name ASC) AS [RANKING], 
                                                 Name [CHAR_NAME], 
                                                 Family [FAMILY], 
                                                 Contribution [CONTRIBUITION]
                                            FROM [".constant("DATABASE_CHARACTERS")."].[dbo].[Gens_Rank]
                                            WHERE Family = {$family}
                                            ORDER BY Contribution DESC, Name ASC");*/
             $busca_dados_q = $this->query("SELECT TOP {$ex_top} Name [CHAR_NAME], 
                                                 Family [FAMILY], 
                                                 Contribution [CONTRIBUITION]
                                            FROM [".constant("DATABASE_CHARACTERS")."].[dbo].[Gens_Rank]
                                            WHERE Family = {$family}
                                            ORDER BY Contribution DESC, Name ASC");
            }
            else
            {
                exit("\$RANKING_CONFIGS['GENS_MANUFACTURER'] inválido! Configure corretamente o setting.php");
            }
             $this->returnRanking .= "<div class='quadros'>
                    <table border='0' width='100%'>
                     <tr>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_PLACE."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_CHARACTER_SHORT."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_GENS_CONTRIBUITION."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_GENS_FAMILY."</strong></td> 
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_GENS_PATENT_LOGO."</strong></td>
                      <td bgcolor='#E4E1CB' align='center'><strong>".RANKING_GENS_PATENT_NAME."</strong></td>
                     </tr>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['account']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[pkcount] < 0) $pk_class = RANKING_HERO;
               else $pk_class = $busca_dados[pkcount]; 
               if($RANKING_CONFIGS['GENS_MANUFACTURER'] == 1)
               {
               
                    if($busca_dados['CONTRIBUITION'] >= 0 && $busca_dados['CONTRIBUITION'] <= 999)
                    {
                        $busca_dados['GRADUATION'] = 14;
                    }
                    elseif($busca_dados['CONTRIBUITION'] >= 1000 && $busca_dados['CONTRIBUITION'] <= 4999)
                    {
                        $busca_dados['GRADUATION'] = 13;
                    }
                    elseif($busca_dados['CONTRIBUITION'] >= 5000 && $busca_dados['CONTRIBUITION'] <= 14999)
                    {
                        $busca_dados['GRADUATION'] = 12;
                    }
                    elseif($busca_dados['CONTRIBUITION'] >= 15000 && $busca_dados['CONTRIBUITION'] <= 49999)
                    {
                        $busca_dados['GRADUATION'] = 11;
                    }
                    elseif($busca_dados['CONTRIBUITION'] >= 50000 && $busca_dados['CONTRIBUITION'] <= 99999)
                    {
                        $busca_dados['GRADUATION'] = 10;
                    }
                    else
                    {
                        $busca_dados['GRADUATION'] = 9;
                    }

                    if($busca_dados['CONTRIBUITION'] > 100000)
                    {
                        if($posicao == 1)
                        {
                            $busca_dados['GRADUATION'] = 1;
                        }
                        elseif($posicao >= 2 && $posicao <= 5)
                        {
                            $busca_dados['GRADUATION'] = 2;
                        }
                        elseif($posicao >= 6 && $posicao <= 10)
                        {
                            $busca_dados['GRADUATION'] = 3;
                        }
                        elseif($posicao >= 11 && $posicao <= 30)
                        {
                            $busca_dados['GRADUATION'] = 4;
                        }
                        elseif($posicao >= 31 && $posicao <= 50)
                        {
                            $busca_dados['GRADUATION'] = 5;
                        }
                        elseif($posicao >= 51 && $posicao <= 100)
                        {
                            $busca_dados['GRADUATION'] = 6;
                        }
                        elseif($posicao >= 101 && $posicao <= 200)
                        {
                            $busca_dados['GRADUATION'] = 7;
                        }
                        elseif($posicao >= 201 && $posicao <= 300)
                        {
                            $busca_dados['GRADUATION'] = 8;
                        }
                        elseif($posicao >= 301)
                        {
                            $busca_dados['GRADUATION'] = 9;
                        }
                    }                             
               }
               switch($busca_dados['GRADUATION'])
               {    
                   case 1: $graduationName = RANKING_GENS_GRADUATION_GRAND_DUKE; break;   
                    case 2: $graduationName = RANKING_GENS_GRADUATION_DUKE; break;   
                    case 3: $graduationName = RANKING_GENS_GRADUATION_MARQUIS; break;   
                    case 4: $graduationName = RANKING_GENS_GRADUATION_COUNT; break;   
                    case 5: $graduationName = RANKING_GENS_GRADUATION_VISCOUNT; break;   
                    case 6: $graduationName = RANKING_GENS_GRADUATION_BARON; break;   
                    case 7: $graduationName = RANKING_GENS_GRADUATION_KNIGHT_COMMANDER; break;   
                    case 8: $graduationName = RANKING_GENS_GRADUATION_SUPERIOR_KNIGHT; break;   
                    case 9: $graduationName = RANKING_GENS_GRADUATION_KNIGHT; break;   
                    case 10: $graduationName = RANKING_GENS_GRADUATION_GUARD_PREFECT; break;   
                    case 11: $graduationName = RANKING_GENS_GRADUATION_OFFICER; break;   
                    case 12: $graduationName = RANKING_GENS_GRADUATION_LIEUTENANT; break;   
                    case 13: $graduationName = RANKING_GENS_GRADUATION_SERGEANT; break;   
                    case 14: $graduationName = RANKING_GENS_GRADUATION_PRIVATE; break; 
               }
                
               $this->returnRanking .= "<tr>
                      <td bgcolor='#F1F0E4' align='center'><strong>".$posicao++."</strong></td>
                      <td align='center'><a href=\"?page=rankings&type=6&name={$busca_dados['CHAR_NAME']}\">".$busca_dados['CHAR_NAME']."</a></td>
                      <td align='center'>".$busca_dados['CONTRIBUITION']."</td>
                      <td align='center'><img src=\"templates/".constant("TEMPLATE_DIR")."/images/gens/{$familyPath}/14.jpg\" /></td> 
                      <td align='center'><img src=\"templates/".constant("TEMPLATE_DIR")."/images/gens/{$familyPath}/{$busca_dados['GRADUATION']}.jpg\" /></td>
                      <td align='center'>{$graduationName}</td>
                     </tr>";
             }
             $this->returnRanking .= "</table></div>";
        }
	}   	
}

?>