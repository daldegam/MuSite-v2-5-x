<div id="ja-col1">
              <div class="ja-innerpad">
                    <div class="module_menu">
                        <div>
                            <div>
                                <div>
                                    <h3>PAINEL DE CONTROLE</h3>
                                    <ul class="menu">
                                        {#DIV[LOGIN_LOGOUT]}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module_menu">
                        <div>
                            <div>
                                <div>
                                    <h3>SERVIDORES</h3>
                                        <ul class="menu">
                                            {#GAMESERVERS_ON}
                                            <li>Total online: <a href="?page=onlines&amp;room=all"><strong>{#TOTAL_ACCOUNTS_ONLINES}</strong></a></li>    
                                        </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="module_menu">
                            <div>
                                <div>
                                    <div>
                                        <h3>CONFIGURAÇÕES</h3>
                                        <ul class="menu">
                                            <li>Versão: <strong>{#SERVER_VERSION}</strong></li>
                                            <li>Experiência: <strong>{#SERVER_XP}</strong></li>
                                            <li>Drops: <strong>{#SERVER_DROP}</strong></li>
                                            <li>Bug Bless: <strong>{#SERVER_BUGBLESS}</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="module_menu">
                        <div>
                            <div>
                                <div>
                                    <h3>INFORMA&Ccedil;&Otilde;ES</h3>
                                        <ul class="menu">
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
                                </div>
                            </div>
                        </div>
                    <div class="module_menu">
                        <div>
                            <div>
                                <div>
                                    <h3>ENQUETE</h3>
                                    <ul class="menu">              
                                        {#POLL_OPTIONS} 
                                        <div id="pollResult"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module_menu">
                        <div>
                            <div>
                                <div>
                                    <h3>EQUIPE</h3>
                                    <ul class="menu">
                                        <div id="but"><a href="javascript:;" onclick="javascript: document.getElementById('but').style.display='none'; document.getElementById('equipe').style.display = ''; Verify('?page=ajax&require=membersstaff', 'equipe', 'get');">[Mostrar]</a></div>
                                        <div id="equipe" style="display: none;"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>