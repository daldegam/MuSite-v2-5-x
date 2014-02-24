{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Administrador <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelAdmin}
            
            <div class="contentBox">
                <h2 class="noMargin">Informa&ccedil;&otilde;es do servidor</h2>
                <ul class="list">
                    <li>Sistema operacional base: <strong>{#OS_DATAILS}</strong></li>
                    <li>Software versão: <strong>{#SOFTWARE_VERSION_DATAILS}</strong></li>
                    <li>Administrador do servidor web: <strong>{#ADMIN_WEB_SERVER_EMAIL}</strong></li>
                </ul>
                <h2>Informações do banco de dados</h2>
                <ul class="list">
                    <li>Total de contas: <strong>{#TOTAL_ACCOUNTS}</strong></li>
                    <li>Total de Personagens: <strong>{#TOTAL_CHARATERS}</strong></li>
                    <li>Recorde Online: <strong>{#RECORD_ONLINE}</strong></li>
                    <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><li>{#VIP_NAME_1}: <strong>{#TOTAL_ACCOUNTS_VIP_SILVER}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1" style="padding-left: 10px">[Sincronizar]</a></li><?php endif; ?>
                    <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><li>{#VIP_NAME_2}: <strong>{#TOTAL_ACCOUNTS_VIP_GOLD}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1" style="padding-left: 10px">[Sincronizar]</a></li><?php endif; ?>
                    <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><li>{#VIP_NAME_3}: <strong>{#TOTAL_ACCOUNTS_VIP_3}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1" style="padding-left: 10px">[Sincronizar]</a></li><?php endif; ?>
                    <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><li>{#VIP_NAME_4}: <strong>{#TOTAL_ACCOUNTS_VIP_4}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1" style="padding-left: 10px">[Sincronizar]</a></li><?php endif; ?>
                    <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><li>{#VIP_NAME_5}: <strong>{#TOTAL_ACCOUNTS_VIP_5}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1" style="padding-left: 10px">[Sincronizar]</a></li><?php endif; ?>
                    <li>Personagens Banidos: <strong>{#TOTAL_CHARACTERS_BANNEDS}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=2" style="padding-left: 10px">[Sincronizar]</a></li>
                    <li>Contas Banidas: <strong>{#TOTAL_ACCOUNTS_BANNEDS}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=2" style="padding-left: 10px">[Sincronizar]</a></li>
                </ul>
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}