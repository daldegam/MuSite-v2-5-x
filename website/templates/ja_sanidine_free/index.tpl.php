{#INCLUDE:header}
	<div id="ja-containerwrap-fr">
		<div id="ja-container" class="clearfix">
			<div id="ja-mainbody" class="clearfix">
				<div id="ja-content">
					<div id="ja-content-top">
						<div id="ja-content-bot" class="clearfix">
							
							<div id="ja-current-content" class="clearfix"> 
								<div id="etc" style="margin-bottom: 16px;"><h1>{#TITLE_SITE}</h1></div>
                                
                                <div class="legend">
                                    <h3 class="legend-title"><span style="font-size: 13px;">Últimas notícias:</span></h3>
                                    <ul id="notice">
                                        {#LAST_NOTICES_HOME}
                                        <li style="text-align: right; background: none;"><a href="?page=readNotice">[Ver todas]</a></li>
                                    </ul>
                                </div>
                                
                                <?php
                                global $FORUM_CONFIGS;
                                if($FORUM_CONFIGS['ENABLE'] == TRUE)
                                {
                                ?>
                                <div class="legend">
                                    <h3 class="legend-title"><span style="font-size: 13px;">Últimas do forum:</span></h3>
                                    <ul id="notice">
                                        {#LAST_FORUM_HOME}
                                        <li style="text-align: right; background: none;"><a href="<?=$FORUM_CONFIGS['LINK_FORUM'];?>" target="_blank">[Ver todas]</a></li>
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
                                    color: #fff;
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
                                    margin: 0;   
                                    list-style: none;
                                    background: none;
                                    color: #fff;
                                }
                                </style>
                                <div class="legend">
                                    <h3 class="legend-title"><span style="font-size: 13px;">Chat do jogo em tempo real:</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript: void(0);" onclick="javascript: Verify('?page=ajax&require=chatrealtime', 'chatRealTimeUl', 'get');">[Atualizar chat]</a></h3>
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
                                <div class="legend">
                                    <h3 class="legend-title"><span style="font-size: 13px;">Castle Siege:</span></h3>
                                    <div style="background: url(templates/ja_sanidine_free/images/siege.png) no-repeat center center; height: 120px ">
                                         <div style="position:relative; top:47px; left:342px; width: 200px;"><a href="?page=rankings&type=7&name={#CASTLE_SIEGE_OCCUPY_GUILD}">{#CASTLE_SIEGE_OCCUPY_GUILD}</a></div>
                                         <div style="position:relative; top:58px; left:342px; width: 200px;">{#CASTLE_SIEGE_END_DATE}</div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
	

								<table width="100%" border="0" cellspacing="4" cellpadding="0" class="table">
                                    <tr>
                                        <td width="33%" style="position: relative; clear: both;">
                                            <div class="legend">
                                                <h3 class="legend-title"><span style="font-size: 13px;">Top Resets:</span></h3>
                                                <ul id="notice">
                                                    {#RANK_TOP_RESETS_HOME}
                                                    <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=0">[Ver ranking]</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td width="33%" style="position: relative; clear: both;">
                                        <div class="legend">
                                            <h3 class="legend-title"><span style="font-size: 13px;">Top Rst. Semanal:</span></h3>
                                            <ul id="notice">             
                                                {#RANK_TOP_RESETS_WEEK_HOME}
                                                <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=1">[Ver ranking]</a></li>
                                            </ul>
                                        </div>
                                        </td>
                                        <td width="34%" style="position: relative; clear: both;">
                                        <div class="legend">
                                            <h3 class="legend-title"><span style="font-size: 13px;">Top Rst. Mensal:</span></h3>
                                            <ul id="notice">
                                                {#RANK_TOP_RESETS_MONTH_HOME}
                                                <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=2">[Ver ranking]</a></li>
                                            </ul>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="33%" style="position: relative; clear: both;">
                                            <div class="legend">
                                                <h3 class="legend-title"><span style="font-size: 13px;">Top Master Resets:</span></h3>
                                                <ul id="notice">
                                                    {#RANK_TOP_MASTER_RESETS_HOME} 
                                                    <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=5&amp;top=10">[Ver ranking]</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td width="33%" style="position: relative; clear: both;">
                                        <div class="legend">
                                            <h3 class="legend-title"><span style="font-size: 13px;">Top Pk:</span></h3>
                                            <ul id="notice">             
                                                {#RANK_TOP_PK_HOME}
                                                <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=4&amp;top=10">[Ver ranking]</a></li>
                                            </ul>
                                        </div>
                                        </td>
                                        <td width="34%" style="position: relative; clear: both;">
                                        <div class="legend">
                                            <h3 class="legend-title"><span style="font-size: 13px;">Top Level:</span></h3>
                                            <ul id="notice">
                                                {#RANK_TOP_LEVEL_HOME}
                                                <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=2&amp;top=10">[Ver ranking]</a></li>
                                            </ul>
                                        </div>
                                        </td>
                                    </tr>
									<tr>
										<td width="100%" colspan="3" style="position: relative; clear: both;">
											<div class="legend">
												<h3 class="legend-title"><span style="font-size: 13px;">Top Guilds:</span></h3>
                                                <table><tr> {#RANK_TOP_GUILDS_HOME} </tr></table> 
												<ul id="notice">                                                                 
													<li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=3&amp;top=10">[Ver ranking]</a></li>
												</ul>
											</div>
										</td> 
									</tr>
								</table>

                                <?php
                                global $SCREENSHOTS;
                                if($SCREENSHOTS['HOME'] == TRUE)
                                {
                                ?>
                                <div class="legend">
                                    <h3 class="legend-title"><span style="font-size: 13px;">ScreenShots:</span></h3>
                                    <div style="margin: 5px; text-align: center;">
                                    <table style="width: 100%;"><tr>
                                    <?php 
                                        new ldModules("screenshots");
                                        screenshots::getScreenshots();
                                    ?>
                                    </tr>
                                    <tr><td align="right" colspan="<?php echo $SCREENSHOTS['TOP_HOME']; ?>"><a href="?page=loadModule&amp;module=screenshots&amp;action=viewAll">[Ver todas]</a></td></tr></table>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                
							</div>
						</div>
					</div>
				</div>
			{#INCLUDE:menuLeft}
			<br />
			<div id="ja-tabs" class="clearfix"></div>
			</div>
		</div>
 	</div>
{#INCLUDE:footer}