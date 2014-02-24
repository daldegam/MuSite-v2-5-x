<div id="sidebar">    
            {#DIV[LOGIN_LOGOUT]} 
            
            <h4>Servidores</h4>    
            <div class="sidebox">
                <ul>
                    {#GAMESERVERS_ON}
                    <li>Total online: <a href="?page=onlines&amp;room=all"><strong>{#TOTAL_ACCOUNTS_ONLINES}</strong></a></li>
                </ul>    
            </div>
            
            <h4>Configura&ccedil;&otilde;es</h4>    
            <div class="sidebox">
                <ul>
                    <li>Vers&atilde;o: <strong>{#SERVER_VERSION}</strong></li>
                    <li>Experi&ecirc;ncia: <strong>{#SERVER_XP}</strong></li>
                    <li>Drops: <strong>{#SERVER_DROP}</strong></li>
                    <li>Bug Bless: <strong>{#SERVER_BUGBLESS}</strong></li>
                </ul>
            </div>   
            
            <h4>Informa&ccedil;&otilde;es</h4>    
            <div class="sidebox">
                <ul>                
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
          
            <h4>Enquete</h4>    
            <div class="sidebox">
                <ul>                
                    {#POLL_OPTIONS} 
                    <li id="pollResult"></li>           
                </ul>    
            </div>   
          
            <h4>Equipe</h4>    
            <div class="sidebox">
                <div id='equipe'><a href="void">[Mostrar]</a></div>
            </div>   
          
        </div>