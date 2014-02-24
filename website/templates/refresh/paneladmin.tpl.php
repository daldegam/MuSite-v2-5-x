{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1>
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>AdminCenter</h1>
                    <div class='quadros'>
                    	<h2>Informações do computador.</h2>
                    	<em>Sistema operacional base:</em> <strong>{#OS_DATAILS}</strong><br />
                    	<em>Software versão:</em> <strong>{#SOFTWARE_VERSION_DATAILS}</strong><br />
                    	<em>Administrador do servidor web:</em> <strong>{#ADMIN_WEB_SERVER_EMAIL}</strong><br />
                    	<h2>Informações do banco de dados</h2>
                    	<em>Total de contas:</em> <strong>{#TOTAL_ACCOUNTS}</strong><br />
                    	<em>Total de Personagens:</em> <strong>{#TOTAL_CHARATERS}</strong><br />
                    	<em>Recorde Online:</em> <strong>{#RECORD_ONLINE}</strong><br />
                     	<?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><em>{#VIP_NAME_1}:</em> <strong>{#TOTAL_ACCOUNTS_VIP_SILVER}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a><br /><?php endif; ?>
                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><em>{#VIP_NAME_2}:</em> <strong>{#TOTAL_ACCOUNTS_VIP_GOLD}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a><br /><?php endif; ?>
                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><em>{#VIP_NAME_3}:</em> <strong>{#TOTAL_ACCOUNTS_VIP_3}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a><br /><?php endif; ?>
                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><em>{#VIP_NAME_4}:</em> <strong>{#TOTAL_ACCOUNTS_VIP_4}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a><br /><?php endif; ?>
                      	<?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><em>{#VIP_NAME_5}:</em> <strong>{#TOTAL_ACCOUNTS_VIP_5}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a><br /><?php endif; ?>
                     	<em>Personagens Banidos:</em> <strong>{#TOTAL_CHARACTERS_BANNEDS}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=2">[Sincronizar]</a><br />
                       	<em>Contas Banidas:</em> <strong>{#TOTAL_ACCOUNTS_BANNEDS}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=2">[Sincronizar]</a><br />
                    </div>
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}