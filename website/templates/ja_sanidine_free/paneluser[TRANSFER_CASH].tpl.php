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
	var menus = 5;
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
                                {#INCLUDE:menuPanelUser}  
                            
                            <h1 style="margin-top: 20px; margin-bottom: 26px;">Transferir {#CASH_NAME}/{#CASH_NAME2}</h1>
                            
                          	        <div id="etc" style="margin-bottom: 26px;">
                                    {#RespostWrite}
                                    </div>

                                    <form action="?page=paneluser&amp;option=TRANSFER_CASH&amp;action=transfer" method="post">
                                    <div class="legend" style="margin-bottom: 25px;">
                                    <h3 class="legend-title"><span style="font-size: 13px;">Dados da minha conta</span></h3>
                         			    <div style="margin-bottom: 8px; margin-top: 10px;">
                                        <em>Meu login:</em><br /><input type='text' class="inputbox" value="{#MEMB___ID}" disabled="disabled" /><br />
                                        <em>Quantidade de {#CASH_NAME}:</em><br /><input type='text' class="inputbox" value="{#CASH_AMOUNT}" disabled="disabled" /><br />
                                        <em>Quantidade de {#CASH_NAME2}:</em><br /><input type='text' class="inputbox" value="{#CASH_AMOUNT2}" disabled="disabled" /><br />
                                        </div>
                                    </div>
                                          
                                    <div class="legend" style="margin-bottom: 1px;">
                                  	<h3 class="legend-title"><span style="font-size: 13px;">Dados para trasferencia</span></h3>
                                        <div style="margin-bottom: 8px; margin-top: 10px;">
                                        <em>Login de destino:</em><br /><input name='usernameDestine' type='text' class="inputbox" maxlength='10' /><br />
                                        <em>Tipo de moeda a transferir:</em><br /><select name='typeCash'><option value='1'>{#CASH_NAME}</option><option value='2'>{#CASH_NAME2}</option></select><br />
                                        <em>Quantidade a transferir:</em><br /><input name='amount' type='text' class="inputbox" maxlength='10' /><br />
                                        </div>
                                    </div>
                                  
                                    <input type='submit' value='Transferir' class='button' style="margin-top: 6px;"/><br />
                                    </form> 
                                    
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