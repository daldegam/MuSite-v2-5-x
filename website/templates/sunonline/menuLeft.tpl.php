<div id="mainleft">
                        
                <!-- Login Form -->
                {#DIV[LOGIN_LOGOUT]}
                <div class="downloadbtn"><a href="?page=downloads"><img src="templates/sunonline/images/common/temp/bt_sub_download.jpg" width="214" height="54" alt="DOWNLOAD" /></a></div>
                
                <!--div class="snb_wrap">
                    <h2>NOTÍCIAS</h2>
                    <ul class="snb_1dep">
                        <li class="d2_mnu"><a class="off" href="/News/Notice/">ANÚNCIO</a></li>
                        <li class="d2_mnu"><a class="on" href="/News/Event/">EVENTOS</a></li>
                    </ul>
                </div-->
                
                <!-- //Login Form -->
                
                <!-- Servers box -->
                <div class="boxMenu">
                    <div class="title"><h2>SERVIDORES</h2></div>
                    <div class="contentBox">
                        <div class="gaugeDiv">
                            <ul>
                                {#GAMESERVERS_ON}
                                <li>Total online: <a href="?page=onlines&amp;room=all"><strong>{#TOTAL_ACCOUNTS_ONLINES}</strong></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="end"></div>
                </div> 
                <!-- //Servers box -->
                
                <!-- Configs box -->
                <div class="boxMenu">
                    <div class="title"><h2>CONFIGURAÇÕES</h2></div>
                    <div class="contentBox">
                        <ul class="commonArrow">
                            <li>Versão: <strong>{#SERVER_VERSION}</strong></li>
                            <li>Experiência: <strong>{#SERVER_XP}</strong></li>
                            <li>Drops: <strong>{#SERVER_DROP}</strong></li>
                            <li>Bug Bless: <strong>{#SERVER_BUGBLESS}</strong></li>
                        </ul>
                    </div>
                    <div class="end"></div>
                </div> 
                <!-- //Configs box -->
                
                <!-- Infos box -->
                <div class="boxMenu">
                    <div class="title"><h2>INFORMAÇÕES</h2></div>
                    <div class="contentBox">
                        <ul class="commonArrow">
                            <li>Total de Contas: <strong>{#TOTAL_ACCOUNTS}</strong></li>
                            <li>Total de Chars: <strong>{#TOTAL_CHARATERS}</strong></li>
                            <li>Recorde Online: <strong>{#RECORD_ONLINE}</strong></li>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><li>{#VIP_NAME_1}: <strong>{#TOTAL_ACCOUNTS_VIP_SILVER}</strong></li><?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><li>{#VIP_NAME_2}: <strong>{#TOTAL_ACCOUNTS_VIP_GOLD}</strong></li><?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><li>{#VIP_NAME_3}: <strong>{#TOTAL_ACCOUNTS_VIP_3}</strong></li><?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><li>{#VIP_NAME_4}: <strong>{#TOTAL_ACCOUNTS_VIP_4}</strong></li><?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><li>{#VIP_NAME_5}: <strong>{#TOTAL_ACCOUNTS_VIP_5}</strong></li><?php endif; ?>
                            <li>Personagens Banidos: <a href="?page=banned&amp;type=characters"><strong>{#TOTAL_CHARACTERS_BANNEDS}</strong></a></li>
                            <li>Contas Banidas: <a href="?page=banned&amp;type=accounts"><strong>{#TOTAL_ACCOUNTS_BANNEDS}</strong></a></li>
                        </ul>
                    </div>
                    <div class="end"></div>
                </div> 
                <!-- //Infos box -->
                
                <!-- Poll box -->
                <div class="boxMenu">
                    <div class="title"><h2>ENQUETE</h2></div>
                    <div class="contentBox">
                        <ul class="commonArrow">
                            {#POLL_OPTIONS} 
                            <div id="pollResult"></div>
                        </ul>
                    </div>
                    <div class="end"></div>
                </div> 
                <!-- //Poll box -->
                
                <!-- Staff box -->
                <div class="boxMenu">
                    <div class="title"><h2>EQUIPE</h2></div>
                    <div class="contentBox">
                        <ul class="commonArrow">
                            <li id="but"><a href="javascript:;" onclick="javascript: document.getElementById('but').style.display='none'; document.getElementById('equipe').style.display = ''; Verify('?page=ajax&require=membersstaff', 'equipe', 'get');">[Mostrar]</a></li>
                            <style>
                            div.quadros {     
                              color: #C5C0AD;
                            }
                            </style>
                            <div id="equipe" style="display: none;"></div>
                        </ul>
                    </div>
                    <div class="end"></div>
                </div> 
                <!-- //Staff box -->
                
                <!-- Quick Links -->
                <!--div class="communityModi">
                    <h3>JOIN OUR COMMUNITY</h3>
                    <table width="184" border="0">
                        <colgroup>

                            <col width="45" />
                            <col width="60" />
                            <col width="75" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th> </th>
                                <th class="txt">Today</th>

                                <th class="txt">Our Goal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="http://www.facebook.com/pages/Soul-of-the-Ultimate-Nation/125329591705" target="_blank"><img src="http://image.webzen.com/Global/SUN/main/img_community_facebook_100628.gif" alt="facebook S.U.N" /></a></td>
                                <td class="txt">13204</td>
                                <td class="OurG">15000</td>

                            </tr>
                            <tr>
                                <td><a href="http://www.youtube.com/user/WEBZENSUN" target="_blank"><img src="http://image.webzen.com/Global/SUN/main/img_community_youtube_100628.gif" alt="youtube S.U.N" /></a></td>
                                <td class="txt">1077</td>
                                <td class="OurG">2000</td>
                            </tr>
                            <tr>
                                <td><a href="http://www.orkut.com/Main#Community?cmm=97524240" target="_blank"><img src="http://image.webzen.com/Global/SUN/main/img_community_our_100628.gif" alt="" /></a></td>

                                <td class="txt">1326</td>
                                <td class="OurG">2000</td>
                            </tr>
                            <tr>
                                <td><a href="https://twitter.com/SUN_Webzen" target="_blank"><img src="http://image.webzen.com/Global/SUN/main/img_community_twitter_100628.gif" alt="twitter S.U.N" /></a></td>
                                <td class="txt">971</td>
                                <td class="OurG">2000</td>

                            </tr>
                            <tr>
                                <td><a href="http://www.meinvz.net/Groups/Overview/707bb4ca13e1d2e8"><img src="http://image.webzen.com/Global/SUN/main/img_community_mainbz_101005.gif" alt="SUN MeinVZ" /></a></td>
                                <td class="txt">51</td>
                                <td class="OurG">1000</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="chkSnsGo"><a href="http://sunonline.webzen.com/News/Event/Default.aspx?iBS=1287"><img src="http://image.webzen.com/Global/SUN/main/btn_community_sns.gif" alt="Check Out SNS EVENT Page" /></a></div>
                </div-->
                <!-- //Quick Links -->
                
                <!-- Join Our Community -->
                <!--div class="community">
                    <h3>Final Battle</h3>
                    <ul>
                        <li><a href="http://www.facebook.com/pages/Soul-of-the-Ultimate-Nation/125329591705" target="_blank"><img src="http://image.webzen.com/Global/SUN/main/img_community_facebook.gif" alt="facebook S.U.N" /></a></li>
                        <li><a href="https://twitter.com/SUN_Webzen" target="_blank"><img src="http://image.webzen.com/Global/SUN/main/img_community_twitter.gif" alt="Twitter S.U.N" /></a></li>
                        <li><a href="http://www.youtube.com/user/WEBZENSUN" target="_blank"><img src="http://image.webzen.com/Global/SUN/main/img_community_youtube.gif" alt="Youtube S.U.N" /></a></li>
                    </ul>
                </div-->
                <!-- //Join Our Community -->
     
               <!--div class="worldlink">
                    <h3>World Link</h3>
                    <div id="Div1" class="selectlayer" onclick="select.action(this,0);">
                        <p><a href="#" class="default" onclick="return false;">GLOBAL</a></p>
                        <ul>
                            <li><a href="#">GLOBAL</a></li>
                            <li><a href="http://www.ijji.com/" target="_blank">USA, Canada, Mexico and UK</a></li>
                            <li><a href="http://sunonline.hangame.com/" target="_blank">Korea</a></li>
                            <li><a href="http://www.sunonline.jp/" target="_blank">Japan</a></li>
                            <li><a href="http://sun.the9.com/" target="_blank">China</a></li>
                            <li><a href="http://www.soulultimatenation.com.tw/" target="_blank">Taiwan</a></li>
                        </ul>
                    </div>
                </div-->
     
                <!--ul class="leftbanner">
                    <li><a href="http://sunonline.webzen.com/Community/FanSite"><img src="http://image.webzen.com/Global/SUN/data/banner/left_main_100823_01.jpg" alt="Fansite" /></a></li>
                </ul-->
                <!-- //Quick Links & Banner -->
     
            </div>