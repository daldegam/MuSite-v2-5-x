{#INCLUDE:header}
<script type="text/javascript">
function show_permission(area,free,vips,vipg, vip3, vip4, vip5) {
    if(free == 1) var permission_free = "<span style='color:#009400'>Sim</span>"; else var permission_free = "<span style='color:#BB0000'>Não</span>";
    if(vips == 1) var permission_vips = "<span style='color:#009400'>Sim</span>"; else var permission_vips = "<span style='color:#BB0000'>Não</span>";
    if(vipg == 1) var permission_vipg = "<span style='color:#009400'>Sim</span>"; else var permission_vipg = "<span style='color:#BB0000'>Não</span>";
    if(vip3 == 1) var permission_vip3 = "<span style='color:#009400'>Sim</span>"; else var permission_vip3 = "<span style='color:#BB0000'>Não</span>";
    if(vip4 == 1) var permission_vip4 = "<span style='color:#009400'>Sim</span>"; else var permission_vip4 = "<span style='color:#BB0000'>Não</span>";
    if(vip5 == 1) var permission_vip5 = "<span style='color:#009400'>Sim</span>"; else var permission_vip5 = "<span style='color:#BB0000'>Não</span>";
    document.getElementById('option_permission_'+area).innerHTML = "<div style='margin-left: 20px; margin-top: 10px; margin-bottom: 10px;'>Permissões da Opção:<br/> \
     - Free: "+permission_free+"<br/> \
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?>- {#VIP_NAME_1}: "+permission_vips+"<br/><?php endif; ?> \
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?>- {#VIP_NAME_2}: "+permission_vipg+"<br/><?php endif; ?>\
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?>- {#VIP_NAME_3}: "+permission_vip3+"<br/><?php endif; ?>\
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?>- {#VIP_NAME_4}: "+permission_vip4+"<br/><?php endif; ?>\
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?>- {#VIP_NAME_5}: "+permission_vip5+"<?php endif; ?></div>";
}
function clear_permission(area) {
    document.getElementById('option_permission_'+area).innerHTML = "";
}
function AbreMenu(nome_div) {
    var div = "";
    var menus = 13;
    for (var i=1; i < menus; i++) {
        div = "div"+i;
        document.getElementById(div).style.display = "none"; 
        if (div == nome_div) {
            document.getElementById(nome_div).style.display = "block"; 
        }
    }
}
function AbreMenuV2(nome_div) {
    var div = "";
    var menus = 3;
    for (var i=1; i < menus; i++) {
        div = "divV2"+i;
        document.getElementById(div).style.display = "none"; 
        if (div == nome_div) {
            document.getElementById(nome_div).style.display = "block"; 
        }
    }
}
</script>
	<div id="ja-containerwrap-fr">
		<div id="ja-container" class="clearfix">
			<div id="ja-mainbody" class="clearfix">
				<div id="ja-content">
					<div id="ja-content-top">
						<div id="ja-content-bot" class="clearfix">
							
							<div id="ja-current-content" class="clearfix">
                            
                            <div id="etc">
                                {#INCLUDE:menuPanelAdmin}
                           
                            <h1 style="margin-top: 20px;">AdminCenter</h1>
                    	
                        <div class="legend" style="margin-top: 25px;">
                          <h3 class="legend-title"><span style="font-size: 13px;">Informações do computador.</span></h3>
                         	<ul>
                               <li>Sistema operacional base: <strong>{#OS_DATAILS}</strong></li>
                               <li>Software versão: <strong>{#SOFTWARE_VERSION_DATAILS}</strong></li>
                               <li>Administrador do servidor web: <strong>{#ADMIN_WEB_SERVER_EMAIL}</strong></li>
                            </ul>
                       </div>
                        
                        
                       <div class="legend" style="margin-top: 25px;">
                          <h3 class="legend-title"><span style="font-size: 13px;">Informações do banco de dados.</span></h3>
                         	<ul>
                               <li>Total de contas: <strong>{#TOTAL_ACCOUNTS}</strong></li>
                               <li>Total de Personagens: <strong>{#TOTAL_CHARATERS}</strong></li>
                               <li>Recorde Online: <strong>{#RECORD_ONLINE}</strong></li>
                               <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><li>{#VIP_NAME_1}: <strong>{#TOTAL_ACCOUNTS_VIP_SILVER}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a></li><?php endif; ?>
                      		   <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><li>{#VIP_NAME_2}: <strong>{#TOTAL_ACCOUNTS_VIP_GOLD}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a></li><?php endif; ?>
                               <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><li>{#VIP_NAME_3}: <strong>{#TOTAL_ACCOUNTS_VIP_3}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a></li><?php endif; ?>
                               <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><li>{#VIP_NAME_4}: <strong>{#TOTAL_ACCOUNTS_VIP_4}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a></li><?php endif; ?>
                               <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><li>{#VIP_NAME_5}: <strong>{#TOTAL_ACCOUNTS_VIP_5}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a></li><?php endif; ?>
                     		   <li>Personagens Banidos: <strong>{#TOTAL_CHARACTERS_BANNEDS}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=2">[Sincronizar]</a></li>
                       		   <li>Contas Banidas: <strong>{#TOTAL_ACCOUNTS_BANNEDS}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=2">[Sincronizar]</a></li>
                       		 </ul>
                        </div>
                            
                              </div>
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
