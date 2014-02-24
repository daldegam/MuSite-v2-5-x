{#INCLUDE:header}
    
    <div id="content">
    
    	{#INCLUDE:menuLeft} 








       	<div id="main">
        
        	<h1>{#TITLE_SITE}</h1>
            
        	<div class="contentBox">
            	<h2 class="noMargin">&Uacute;ltimas notícias:</h2>
                <ul class="list">
                    {#LAST_NOTICES_HOME}
                    <li style="text-align: right; margin-bottom: 0;"><a href="?page=readNotice">[Ver todas]</a></li>
                </ul>
            </div>
            
			<?php
            global $FORUM_CONFIGS;
            if($FORUM_CONFIGS['ENABLE'] == TRUE)
            {
            ?>
            
        	<div class="contentBox">
            	<h2 class="noMargin">&Uacute;ltimas notícias:</h2>
                <ul class="list">
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
                margin: 1px 0 1px 0!important;   
                list-style: none;
                background: none;
                color: #fff;
            }
            </style>
            <div class="contentBox">
                <h2 class="noMargin">Chat do jogo em tempo real:</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript: void(0);" onclick="javascript: Verify('?page=ajax&require=chatrealtime', 'chatRealTimeUl', 'get');">[Atualizar chat]</a></h2>
                <ul class="list" style='height: 150px; overflow: scroll;' id="chatRealTimeUl">
                     <script type="text/javascript">Verify('?page=ajax&require=chatrealtime', 'chatRealTimeUl', 'get');</script>
                </ul>
            </div>
            <?php
            }
            
            global $CASTLE_SIEGE;
            if($CASTLE_SIEGE['ENABLE'] == TRUE)
            {
            ?>
            
        	<div class="contentBox">
            	<h2 class="noMargin">Castle siege</h2>
                <div style="background: url(templates/darkstyle/images/siege.jpg) no-repeat center center; height: 120px; position: relative;">
                    <div style="position: absolute; top: 49px; left: 340px;"><a href="?page=rankings&type=7&name={#CASTLE_SIEGE_OCCUPY_GUILD}">{#CASTLE_SIEGE_OCCUPY_GUILD}</a></div>
                    <div style="position: absolute; top: 78px; left: 340px; color: #FFFFFF;">{#CASTLE_SIEGE_END_DATE}</div>
                </div>
            </div>
            
            <?php } ?>
            
        	<div class="contentBox">
                <ul class="rank">
                    <li style="margin-left: 7px;">
                    	<span>Top Resets:</span>
                        <ul>
                            {#RANK_TOP_RESETS_HOME}
                            <li style="text-align: right;"><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=0">[Ver ranking]</a></li>
                        </ul>
                    </li>
                    <li>
                    	<span>Top Resets Semanal:</span>
                        <ul>
                            {#RANK_TOP_RESETS_WEEK_HOME}
                            <li style="text-align: right;"><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=1">[Ver ranking]</a></li>
                        </ul>
                    </li>
                    <li>
                    	<span>Top Resets Mensal:</span>
                        <ul>
                            {#RANK_TOP_RESETS_MONTH_HOME}
                            <li style="text-align: right;"><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=2">[Ver ranking]</a></li>
                        </ul>
                    </li>
                </ul>
                <br style="clear: both" />
            </div>
            <div class="contentBox">
                <ul class="rank">
                    <li style="margin-left: 7px;">
                        <span>Top Master Resets:</span>
                        <ul>
                            {#RANK_TOP_MASTER_RESETS_HOME}
                            <li style="text-align: right;"><a href="?page=rankings&amp;type=5&amp;top=10">[Ver ranking]</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>Top Pk:</span>
                        <ul>
                            {#RANK_TOP_PK_HOME}
                            <li style="text-align: right;"><a href="?page=rankings&amp;type=4&amp;top=10">[Ver ranking]</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>Top Level:</span>
                        <ul>
                            {#RANK_TOP_LEVEL_HOME}
                            <li style="text-align: right;"><a href="?page=rankings&amp;type=2&amp;top=10">[Ver ranking]</a></li>
                        </ul>
                    </li>
                </ul>
                <br style="clear: both" />
            </div>
        	<div class="contentBox">
                <ul class="rank">
                    <li style="margin-left: 7px; width: 97%;">
                    	<span>Top Guilds:</span>
                        <ul>
                            <li><table><tr> {#RANK_TOP_GUILDS_HOME} </tr></table></li>
                            <li style="text-align: right;"><a href="?page=rankings&amp;type=3&amp;top=10">[Ver ranking]</a></li>
                        </ul>
                    </li>
                </ul>
                <br style="clear: both" />
            </div>
            <?php
            global $SCREENSHOTS;
            if($SCREENSHOTS['HOME'] == TRUE)
            {
            ?> 
            <div class="contentBox">
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
        <br style="clear: both" />











{#INCLUDE:footer}