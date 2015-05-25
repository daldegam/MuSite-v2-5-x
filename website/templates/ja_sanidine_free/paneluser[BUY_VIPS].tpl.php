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
	var menus = 6;
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
                            
                            	<h1 style="margin-top: 20px; margin-bottom: 26px;">Comprar vip</h1>
                                <ul>
                                	<li>Seu saldo &eacute; de: {#CASH_AMOUNT} {#CASH_NAME}</li>
                                </ul>
                                <ul>
                                	<li>O que voc&ecirc; deseja comprar? 
                                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><a href="javascript:;" onclick="javascript:AbreMenuV2('divV21')"><strong>{#VIP_NAME_1}</strong></a>, <?php endif; ?>
                                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><a href="javascript:;" onclick="javascript:AbreMenuV2('divV22')"><strong>{#VIP_NAME_2}</strong></a>, <?php endif; ?>
                                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><a href="javascript:;" onclick="javascript:AbreMenuV2('divV23')"><strong>{#VIP_NAME_3}</strong></a>, <?php endif; ?>
                                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><a href="javascript:;" onclick="javascript:AbreMenuV2('divV24')"><strong>{#VIP_NAME_4}</strong></a>, <?php endif; ?>
                                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><a href="javascript:;" onclick="javascript:AbreMenuV2('divV25')"><strong>{#VIP_NAME_5}</strong></a> <?php endif; ?>
                                    </li>
                                </ul>
                                
                        <div id='divV21' style='display: none;'>
						<form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' id='Compras' method='post'>
						 <div class="legend" style="margin-bottom: 25px; margin-top: 20px;">
                             <h3 class="legend-title"><span style="font-size: 13px;">Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_1}?</span></h3>
                             <div style="margin-bottom: 6px; margin-top: 6px;">
								<input name='vip' type='radio' value='1:30' checked='checked' />&nbsp;{#VIP_NAME_1} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPSILVER_30_DAYS}</strong> {#CASH_NAME}<br />
						 		<input name='vip' type='radio' value='1:90' />&nbsp;{#VIP_NAME_1} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_90_DAYS}</strong> {#CASH_NAME}<br />
						 		<input name='vip' type='radio' value='1:180' />&nbsp;{#VIP_NAME_1} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_180_DAYS}</strong> {#CASH_NAME}<br />
						 		<input name='vip' type='radio' value='1:365' />&nbsp;{#VIP_NAME_1} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPSILVER_365_DAYS}</strong> {#CASH_NAME}<br />
                         		<input type='submit' value='Finalizar Compra' class='button' style="margin-top: 6px; margin-left: 20px;"/>
                         	</div>
                         </div>
                        </form>
						</div>
                        <div id='divV22' style='display: none;'>
                        <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' id='Compras' method='post'>
                         <div class="legend" style="margin-bottom: 25px; margin-top: 20px;">
                             <h3 class="legend-title"><span style="font-size: 13px;">Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_2}?</span></h3>
                             <div style="margin-bottom: 6px; margin-top: 6px;">
                              <input name='vip' type='radio' value='2:30' checked='checked' />&nbsp;{#VIP_NAME_2} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPGOLD_30_DAYS}</strong> {#CASH_NAME}<br />
                              <input name='vip' type='radio' value='2:90' />&nbsp;{#VIP_NAME_2} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_90_DAYS}</strong> {#CASH_NAME}<br />
                             <input name='vip' type='radio' value='2:180' />&nbsp;{#VIP_NAME_2} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_180_DAYS}</strong> {#CASH_NAME}<br />
                              <input name='vip' type='radio' value='2:365' />&nbsp;{#VIP_NAME_2} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPGOLD_365_DAYS}</strong> {#CASH_NAME}<br />
                              <input type='submit' value='Finalizar Compra' class='button' style="margin-top: 6px; margin-left: 20px;"/>
                            </div>
                        </div>
                        </form>       
                        </div>
                        <div id='divV23' style='display: none;'>
                        <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' id='Compras' method='post'>
                         <div class="legend" style="margin-bottom: 25px; margin-top: 20px;">
                             <h3 class="legend-title"><span style="font-size: 13px;">Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_3}?</span></h3>
                             <div style="margin-bottom: 6px; margin-top: 6px;">
                              <input name='vip' type='radio' value='3:30' checked='checked' />&nbsp;{#VIP_NAME_3} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP3_30_DAYS}</strong> {#CASH_NAME}<br />
                              <input name='vip' type='radio' value='3:90' />&nbsp;{#VIP_NAME_3} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP3_90_DAYS}</strong> {#CASH_NAME}<br />
                             <input name='vip' type='radio' value='3:180' />&nbsp;{#VIP_NAME_3} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP3_180_DAYS}</strong> {#CASH_NAME}<br />
                              <input name='vip' type='radio' value='3:365' />&nbsp;{#VIP_NAME_3} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP3_365_DAYS}</strong> {#CASH_NAME}<br />
                              <input type='submit' value='Finalizar Compra' class='button' style="margin-top: 6px; margin-left: 20px;"/>
                            </div>
                        </div>
                        </form>       
                        </div>
                        <div id='divV24' style='display: none;'>
                        <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' id='Compras' method='post'>
                         <div class="legend" style="margin-bottom: 25px; margin-top: 20px;">
                             <h3 class="legend-title"><span style="font-size: 13px;">Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_4}?</span></h3>
                             <div style="margin-bottom: 6px; margin-top: 6px;">
                              <input name='vip' type='radio' value='4:30' checked='checked' />&nbsp;{#VIP_NAME_4} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP4_30_DAYS}</strong> {#CASH_NAME}<br />
                              <input name='vip' type='radio' value='4:90' />&nbsp;{#VIP_NAME_4} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP4_90_DAYS}</strong> {#CASH_NAME}<br />
                             <input name='vip' type='radio' value='4:180' />&nbsp;{#VIP_NAME_4} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP4_180_DAYS}</strong> {#CASH_NAME}<br />
                              <input name='vip' type='radio' value='4:365' />&nbsp;{#VIP_NAME_4} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP4_365_DAYS}</strong> {#CASH_NAME}<br />
                              <input type='submit' value='Finalizar Compra' class='button' style="margin-top: 6px; margin-left: 20px;"/>
                            </div>
                        </div>
                        </form>       
                        </div>
						<div id='divV25' style='display: none;'>
						<form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' id='Compras' method='post'>
						 <div class="legend" style="margin-bottom: 25px; margin-top: 20px;">
                             <h3 class="legend-title"><span style="font-size: 13px;">Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_5}?</span></h3>
                             <div style="margin-bottom: 6px; margin-top: 6px;">
						  	<input name='vip' type='radio' value='5:30' checked='checked' />&nbsp;{#VIP_NAME_5} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP5_30_DAYS}</strong> {#CASH_NAME}<br />
						  	<input name='vip' type='radio' value='5:90' />&nbsp;{#VIP_NAME_5} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP5_90_DAYS}</strong> {#CASH_NAME}<br />
						 	<input name='vip' type='radio' value='5:180' />&nbsp;{#VIP_NAME_5} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP5_180_DAYS}</strong> {#CASH_NAME}<br />
						  	<input name='vip' type='radio' value='5:365' />&nbsp;{#VIP_NAME_5} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP5_365_DAYS}</strong> {#CASH_NAME}<br />
						  	<input type='submit' value='Finalizar Compra' class='button' style="margin-top: 6px; margin-left: 20px;"/>
							</div>
                        </div>
                        </form>       
                        </div>
                   
                   <div style="margin-top: 16px; margin-bottom: 16px;">
                   {#RespostWrite}
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