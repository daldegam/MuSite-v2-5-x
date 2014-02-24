{#INCLUDE:header}
        <!-- Body -->

        <div id="mainbody">   
         
            <!-- Body Left -->
            {#INCLUDE:menuLeft}
            <!-- //Body Left -->
     
            <!-- Body Center -->
            <div id="maincenterTop"></div>
            <div id="maincenter">                            
            
                <!--div class="centerbnr">
                    <script type="text/javascript">flash.MainPromotion("http://muonline.webzen.com/mainBannerXml.aspx");</script>
                    <noscript>Your browser setting (setting the level to high) may have prevented a script from activating [Flash].<br />
                    Please set your browser security to Medium-High or Medium.</noscript>
                </div-->
     
                <!-- Item Shop -->
                <!--div class="itemshop">
                    <div class="is_title">

                        <h3>ITEM SHOP</h3>
                        <a href="/ItemShop/Catalog/"><img src="http://image.webzen.com/Global/SUN/main/is_more.gif" width="28" height="5" alt="MORE" /></a>
                    </div>
                    <div class="is_list">
                        
                        <a href="#" class="week_item" onclick="javascript:itemLayerOpen(event, '2-575-9-1'); return false;">
                            <dl>
                                <dt><img src="http://image.webzen.com/Global/SUN/shop/items/4986.jpg"  width="38" height="38" alt="" /></dt>
                                <dd>

                                    <ul>
                                        <li><span class="witxt">Skin Extraction Bo...</span><img src="http://image.webzen.com/Global/SUN/main/icon_new.gif" alt="new" /></li>
                                        <li><span class="witxt"><strong>110</strong> <span>W Coin</span></span></li>
                                        <li class="decoration">Extracts Skin from an equipment. Once extract...</li>
                                    </ul>
                                </dd>

                            </dl>
                        </a>
                        
                        <a href="#" class="week_item" onclick="javascript:itemLayerOpen(event, '2-448-7-0'); return false;">
                            <dl>
                                <dt><img src="http://image.webzen.com/Global/SUN/shop/items/6801.jpg"  width="38" height="38" alt="" /></dt>
                                <dd>
                                    <ul>
                                        <li><span class="witxt">Colosseum Fight Ticket L...</span></li>

                                        <li><span class="witxt"><strong>20</strong> <span>W Coin</span></span></li>
                                        <li class="decoration">A Ticket that permits entry into Monster Coli...</li>
                                    </ul>
                                </dd>
                            </dl>
                        </a>
                        
                    </div>

                </div-->
                <!-- //Item Shop -->
            
                <!-- NOTICE & EVENTS -->
                <div class="newsforum">
     
                    <div class="nf_title">
                        <h3 class="custom">Últimas notícias</h3>
                    </div>
                    <ul>
                        {#LAST_NOTICES_HOME}
                        <li><span class="w_date"><a href="?page=readNotice">[Ver todas]</a></span></li>
                    </ul>
                    <!--ul>
                        <li>
                            <span class="w_text  new"><a href="?"><span>[ XXXX ]</span> XXXX...</a></a></span>
                            <span class="w_date">XXX 00, 0000</span>
                        </li>  
                    </ul--> 
     
                </div>
                <!-- //NOTICE & EVENTS -->
     
                <?php
                global $FORUM_CONFIGS;
                if($FORUM_CONFIGS['ENABLE'] == TRUE)
                {
                ?>
                <!-- FORUMS -->
                <div class="newsforum">
                    <div class="nf_title">
                        <h3 class="custom">Últimas do forum</h3>
                    </div>
                    <ul>
                        {#LAST_FORUM_HOME}
                        <li><span class="w_date"><a href="<?=$FORUM_CONFIGS['LINK_FORUM'];?>" target="_blank">[Ver todas]</a></span></li>
                    </ul>
                </div>
                <!-- //FORUMS -->
                <?php
                } 
                ?>
                
                <?php
                global $CHAT_REAL_TIME;
                if($CHAT_REAL_TIME['ENABLE'] == TRUE)
                {
                ?>
                <!-- Real time chat -->
                <div class="newsforum">
                    <div class="nf_title">
                        <h3 class="custom">Chat do jogo em tempo real</h3>
                        <a href="javascript: void(0);" onclick="javascript: Verify('?page=ajax&require=chatrealtime', 'chatRealTimeUl', 'get');" style="margin-top: -30px;">[Atualizar chat]</a>
                    </div>
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
                    </style>
                    <ul style='height: 150px; overflow: scroll;' id="chatRealTimeUl">
                        <script type="text/javascript">Verify('?page=ajax&require=chatrealtime', 'chatRealTimeUl', 'get');</script>
                    </ul> 
                    <br />
                </div>
                <!-- //Real time chat -->
                <?php
                } 
                ?>
                
                <!-- Tops server -->
                <div class="newsforum">
                    <div class="nf_title">
                        <h3 class="custom">Tops players</h3>
                    </div>
                    <table style="width: 100%;" id="topsServerHome">
                        <tr>
                            <td width="33%" style="position: relative; clear: both;">
                                <div class="legend">
                                    <h3 class="legend-title" style="background-image: url(templates/sunonline/images/common/temp/bg_pattern.jpg);"><span style="font-size: 13px;">Top Resets:</span></h3>
                                    <ul>
                                        {#RANK_TOP_RESETS_HOME}
                                        <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=0">[Ver ranking]</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td width="33%" style="position: relative; clear: both;">
                            <div class="legend">
                                <h3 class="legend-title" style="background-image: url(templates/sunonline/images/common/temp/bg_pattern.jpg);"><span style="font-size: 13px;">Top Rst. Semanal:</span></h3>
                                <ul id="notice">             
                                    {#RANK_TOP_RESETS_WEEK_HOME}
                                    <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=1&amp;top=10&amp;period=1">[Ver ranking]</a></li>
                                </ul>
                            </div>
                            </td>
                            <td width="34%" style="position: relative; clear: both;">
                            <div class="legend">
                                <h3 class="legend-title" style="background-image: url(templates/sunonline/images/common/temp/bg_pattern.jpg);"><span style="font-size: 13px;">Top Rst. Mensal:</span></h3>
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
                                    <h3 class="legend-title" style="background-image: url(templates/sunonline/images/common/temp/bg_pattern.jpg);"><span style="font-size: 13px;">Top Master Resets:</span></h3>
                                    <ul id="notice">
                                        {#RANK_TOP_MASTER_RESETS_HOME} 
                                        <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=5&amp;top=10">[Ver ranking]</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td width="33%" style="position: relative; clear: both;">
                            <div class="legend">
                                <h3 class="legend-title" style="background-image: url(templates/sunonline/images/common/temp/bg_pattern.jpg);"><span style="font-size: 13px;">Top Pk:</span></h3>
                                <ul id="notice">             
                                    {#RANK_TOP_PK_HOME}
                                    <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=4&amp;top=10">[Ver ranking]</a></li>
                                </ul>
                            </div>
                            </td>
                            <td width="34%" style="position: relative; clear: both;">
                            <div class="legend">
                                <h3 class="legend-title" style="background-image: url(templates/sunonline/images/common/temp/bg_pattern.jpg);"><span style="font-size: 13px;">Top Level:</span></h3>
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
                                    <h3 class="legend-title" style="background-image: url(templates/sunonline/images/common/temp/bg_pattern.jpg);"><span style="font-size: 13px;">Top Guilds:</span></h3>
                                    <br />
                                    <table><tr> {#RANK_TOP_GUILDS_HOME} </tr></table> 
                                    <ul id="notice">                                                                 
                                        <li style="text-align: right; background: none;"><a href="?page=rankings&amp;type=3&amp;top=10">[Ver ranking]</a></li>
                                    </ul>
                                </div>
                            </td> 
                        </tr>
                    </table>
                    <script type="text/javascript">
                        $("#maincenter div.newsforum ul li div").css("border-bottom", "none"); //border-bottom
                    </script> 
                </div>           
                <!-- //Tops server -->
                
                
                  
                <?php
                global $CASTLE_SIEGE;
                if($CASTLE_SIEGE['ENABLE'] == TRUE)
                {
                ?>
                <!-- Castle Siege --> 
                <div class="newsforum">
                    <div class="nf_title">
                        <h3 class="custom">Castle Siege</h3>
                    </div>
                    <div style="background: url(templates/sunonline/images/common/temp/siege.png) no-repeat center center; height: 120px ">
                         <div style="position:relative; top:49px; left:290px; width: 200px;"><a href="?page=rankings&type=7&name={#CASTLE_SIEGE_OCCUPY_GUILD}">{#CASTLE_SIEGE_OCCUPY_GUILD}</a></div>
                         <div style="position:relative; top:61px; left:290px; width: 200px;">{#CASTLE_SIEGE_END_DATE}</div>
                    </div>  
                </div>
                <!-- //Castle Siege --> 
                <?php
                }
                
                 global $SCREENSHOTS;
                 if($SCREENSHOTS['HOME'] == TRUE)
                {
                ?>
                <!-- ScreenShots --> 
                <div class="newsforum">
                    <div class="nf_title">
                        <h3 class="custom">ScreenShots</h3>
                    </div>
                    
                    <table style="width: 100%; margin: 5px; text-align: center;">
                    <tr>
                    <?php 
                        new ldModules("screenshots");
                        screenshots::getScreenshots();
                    ?>
                    </tr>
                    <tr>
                        <td align="right" colspan="<?php echo $SCREENSHOTS['TOP_HOME']; ?>"><a href="?page=loadModule&amp;module=screenshots&amp;action=viewAll">[Ver todas]</a></td>
                    </tr>
                    </table>  
                    
                </div>
                <!-- //ScreenShots --> 
                <?php
                }
                ?>
                
                        
    
            </div>
            <!-- //Body Center -->
     
            <div id="mainright">
                
                <!-- Configs box -->
                <div class="boxMenu">
                        <div class="title"><h2>Eventos</h2></div>
                    <div class="contentBox">
                        <ul style="text-align: center;">                      
                           <li><a href="?"><img src="templates/sunonline/images/event/siege.gif" alt="Castle Siege" /></a></li>
                           <li><a href="?"><img src="templates/sunonline/images/event/blood.gif" alt="Blood Castle" /></a></li>
                           <li><a href="?"><img src="templates/sunonline/images/event/devil.gif" alt="Devil Square" /></a></li>
                           <li><a href="?"><img src="templates/sunonline/images/event/chaos.gif" alt="Chaos Castle" /></a></li>
                           <li><a href="?"><img src="templates/sunonline/images/event/kalima.gif" alt="Kalima" /></a></li>
                        </ul>
                        
                        <!--div id="select_acRanking" class="selectlayer" onclick="select.action(this,1);" style="z-index:80;">
                            <p><a href="#" class="default" onclick="return false;">Etherain</a></p>
                            <ul>
                                <li><a href="javascript:fnACRanking(10101,0)">Klippe</a></li>

                                <li><a href="javascript:fnACRanking(10001,0)">Etherain</a></li>
                                <li><a href="javascript:fnACRanking(10201,0)">Triumph</a></li>
                            </ul>
                        </div-->
                    </div>
                    <div class="end"></div>
                </div> 
                <!-- //Configs box -->
                        
                <ul class="rightbnr">
                <!-- Admin Area -->
                    <div class="adminarea"> 
                        <div class="trailer">
                            <div class="bgtop"></div>
                            <div class="trailer_mov">
                                <object width="206" height="167"><param name="movie" value="http://www.youtube.com/v/-Ct9UxNDHGQ?fs=1&hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/-Ct9UxNDHGQ?fs=1&hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="206" height="167"></embed></object>
                            </div>
                            <div class="bgbottom"></div>
                        </div>

                        <!--ul class="rightbnr">
                           <li><a href="?"><img src="templates/sunonline/images/event/siege.gif" alt="Castle Siege" /></a></li>
                           <li><a href="?"><img src="templates/sunonline/images/event/blood.gif" alt="Blood Castle" /></a></li>
                           <li><a href="?"><img src="templates/sunonline/images/event/devil.gif" alt="Devil Square" /></a></li>
                           <li><a href="?"><img src="templates/sunonline/images/event/chaos.gif" alt="Chaos Castle" /></a></li>
                           <li><a href="?"><img src="templates/sunonline/images/event/kalima.gif" alt="Kalima" /></a></li>
                        </ul-->
                    </div>
                <!-- //Admin Area -->
                </ul>
     
            </div>
            <!-- //Body Right -->
     
        </div>

        <!-- //Body -->
     
        <!-- Footer -->
            
<div id="subbottom"></div>
{#INCLUDE:footer}