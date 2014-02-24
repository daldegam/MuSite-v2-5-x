{#INCLUDE:header}				

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                  <div valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                      <h1 style="margin: 2px;">Últimas notícias:</h1>
                    <ul>
                        {#LAST_NOTICES_HOME}
                        <li style="text-align:right"><a href="?page=readNotice"><em>[Ver todas]</em></a></li>
                    </ul>
                  </div> 
                  <?php
                  global $FORUM_CONFIGS;
                  if($FORUM_CONFIGS['ENABLE'] == TRUE)
                  {
                  ?>
                  <div valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                      <h1 style="margin: 2px;">Últimas do forum:</h1>
                    <ul>
                        {#LAST_FORUM_HOME}
                        <li style="text-align:right"><a href="<?=$FORUM_CONFIGS['LINK_FORUM'];?>" target="_blank"><em>[Ver todas]</em></a></li>
                    </ul>
                  </div>
                  <?php
                  }
                  
                  global $CHAT_REAL_TIME;
                  if($CHAT_REAL_TIME['ENABLE'] == TRUE)
                  {
                  ?>
                  <style>
                    .chatList
                    {            
                        /* Use para os outros templates
                        border-bottom-color:#C2CAD3; 
                        border-bottom-width:thin; 
                        border-bottom-style:dotted;
                        */
                    }
                    .chatList.chat
                    {
                        color: #000;
                    }
                    .chatList.party
                    {
                        color: #000;
                        background-color: #4682B4;
                    }
                    .chatList.post, .chatList.whisper, .chatList.aliance
                    {
                        color: #000;
                        background-color: #DCC17C;
                    }
                    .chatList.guild
                    {
                        color: #000;
                        background-color: #76F6C5;
                    }
                    #chatRealTimeUl li
                    {
                        padding: 0;
                        margin: 1px 0 1px 0!important;   
                        list-style: none;
                        background: none;
                        color: #000;
                    }
                    #chatRealTimeUl
                    {
                        padding: 0;
                        margin: 0;
                    }
                  </style>
                  <div valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                  	<h1 style="margin: 2px;">Chat do jogo em tempo real:</span>&nbsp;&nbsp;&nbsp;&nbsp;<span onclick="javascript: Verify('?page=ajax&require=chatrealtime', 'chatRealTimeUl', 'get');" style="cursor: pointer;">[Atualizar chat]</span></h1>
                    <ul style='height: 150px; overflow: scroll;' id="chatRealTimeUl">
                    	 <script type="text/javascript">Verify('?page=ajax&require=chatrealtime', 'chatRealTimeUl', 'get');</script>
                    </ul>
                  </div>
                  <?php
                  }
                                
                  global $CASTLE_SIEGE;
                  if($CASTLE_SIEGE['ENABLE'] == TRUE)
                  {
                  ?>
                  <div valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                      <h1 style="margin: 2px;">Castle Siege:</h1>
                        <div style="background: url(templates/refresh/images/siege.png) no-repeat center center; height: 120px ">
                             <div style="position:relative; top:47px; left:290px;"><a href="?page=rankings&type=7&name={#CASTLE_SIEGE_OCCUPY_GUILD}">{#CASTLE_SIEGE_OCCUPY_GUILD}</a></div>
                             <div style="position:relative; top:58px; left:290px; color: #FFFFFF;">{#CASTLE_SIEGE_END_DATE}</div>
                        </div>
                  </div>
                  <?php
                  }
                  ?> 
                  <table width="100%">
                  <tr>
                    <td valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                        <h1 style="margin: 2px; background: #FFF; font-size: 12px; padding: 3px;">Top Resets:</h1>
                        <ul style="margin: 3px">
                            {#RANK_TOP_RESETS_HOME}
                            <li><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=0"><em>[Ver ranking]</em></a></li>
                        </ul>
                    </td>
                    <td valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                        <h1 style="margin: 2px; background: #FFF; font-size: 12px; padding: 3px;">Top Rst. Semanal:</h1>
                        <ul style="margin: 3px">
                            {#RANK_TOP_RESETS_WEEK_HOME}
                            <li><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=1"><em>[Ver ranking]</em></a></li>
                        </ul>
                    </td>
                    <td valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                        <h1 style="margin: 2px; background: #FFF; font-size: 12px; padding: 3px;">Top Rst. Mensal:</h1>
                        <ul style="margin: 3px">
                            {#RANK_TOP_RESETS_MONTH_HOME}
                            <li><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=2"><em>[Ver ranking]</em></a></li>
                        </ul>
                    </td>
                  </tr>
                  <tr>    
                    <td valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                        <h1 style="margin: 2px; background: #FFF; font-size: 12px; padding: 3px;">Top Master Resets:</h1>
                        <ul style="margin: 3px">
                            {#RANK_TOP_MASTER_RESETS_HOME}
                            <li><a href="?page=rankings&amp;type=5&amp;top=10"><em>[Ver ranking]</em></a></li>
                        </ul>
                    </td> 
                    <td valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                        <h1 style="margin: 2px; background: #FFF; font-size: 12px; padding: 3px;">Top Pk:</h1>
                        <ul style="margin: 3px">
                            {#RANK_TOP_PK_HOME}
                            <li><a href="?page=rankings&amp;type=4&amp;top=10"><em>[Ver ranking]</em></a></li>
                        </ul>
                    </td>    
                    <td valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                        <h1 style="margin: 2px; background: #FFF; font-size: 12px; padding: 3px;">Top Level:</h1>
                        <ul style="margin: 3px">
                            {#RANK_TOP_LEVEL_HOME}
                            <li><a href="?page=rankings&amp;type=2&amp;top=10"><em>[Ver ranking]</em></a></li>
                        </ul>
                    </td>
                  </tr> 
                  <tr>   
                    <td colspan="3" valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                        <h1 style="margin: 2px; background: #FFF; font-size: 12px; padding: 3px;">Top Guilds:</h1>
                        <table>
                        <tr>
                            {#RANK_TOP_GUILDS_HOME}
                        </tr>
                        </table> 
                        <a href="?page=rankings&amp;type=3&amp;top=10"><em>[Ver ranking]</em></a>
                    </td>
                  </tr>
                  </table> 
                  <?php
                  global $SCREENSHOTS;
                  if($SCREENSHOTS['HOME'] == TRUE)
                  {
                  ?> 
                  <div valign="top" style="background: #FAFAFA; border: 3px solid #EFEFEF;">
                      <h1 style="margin: 2px;">ScreenShots:</h1>
                      <table style="width: 100%;"><tr>
                        <?php 
                            new ldModules("screenshots");
                            screenshots::getScreenshots();
                        ?>
                        </tr>
                        <tr><td align="right" colspan="<?php echo $SCREENSHOTS['TOP_HOME']; ?>"><a href="?page=loadModule&amp;module=screenshots&amp;action=viewAll">[Ver todas]</a></td></tr></table>
                  </div>
                  <?php
                  }
                  ?>      
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
