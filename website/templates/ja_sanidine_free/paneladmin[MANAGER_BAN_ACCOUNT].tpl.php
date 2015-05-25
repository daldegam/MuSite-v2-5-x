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
                           
                            <h1 style="margin-top: 20px; margin-bottom: 26px;">Banir / Desbanir conta</h1>
                            
                            	<div id="etc">
                                  <form action="?page=paneladmin&amp;option=MANAGER_BAN_ACCOUNT&amp;Write=true" method="post">
                                    <em>Login:</em><br /><input name="account" type="text" value="" class="inputbox" /> <br />
                                    <em>Ou Personagem:</em><br /><input name="character" type="text" value="" class="inputbox" /> <br />
                                    <em>Ação:</em><br /><select name="action" class="inputbox" ><option value="1" >Banir</option><option value="2">Desbanir</option></select> <br />
                                    <em>Banir em:</em><br /><input name="days" type="text" value="0" class="inputbox" /> dias.<br />
                                    <em>Motivo:</em><br /><input name="description" type="text" value="" maxlength="50" class="inputbox" /><br />
                                    <input type="submit" value="Salvar." class="button" style="margin-top: 10px;"/>
                                  </form>
                       		  </div>
                                    <div style="margin-top: 10px;" id="logs_">
                                    	{#RESULTTPL}
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
