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
                            
                            <h1 style="margin-top: 20px; margin-bottom: 26px;">Golden Archer</h1>
                            
                          	    <div id="etc">
                                <table>
                        <tr>
                            <td style="margin: 0px; padding: 0px; background-color: transparent;">
                            <form id="goldeArcherForm">
                            <div class="goldenArcherBox">
                                <div id="goldenArcherName">Golden Archer</div>
                                <div id="serialText">
                                     <p>Aqui você pode registrar os seriais que você possui em troca de vários itens!</p>
                                     <p>&nbsp;</p>
                                     <p>Os seriais podem ser obtidos em:</p>
                                      <p>- Eventos no site</p>
                                      <p>- Eventos no jogo</p>
                                      <p>- Eventos no forum</p>
                                     <p>E também pode ser concedidos como brindes por compras de golds e vips!</p>
                                     <p>&nbsp;</p>
                                     <p>Os itens aqui obtidos através dos seriais serão colocados no seu baú 0 do jogo.</p>
                                     <p>&nbsp;</p>
                                     <p>Os seriais são únicos! Ou seja, seu serial não pode ser registrado pelo login do seu amigo, ele pertence somente a você!</p>
                                     <p>&nbsp;</p>
                                     <p class="goldText bold">Digite o seu serial abaixo,<br />depois clique em Registrar serial.</p>
                                     <p>&nbsp;</p> 
                                     <p class="goldText">Por favor tenha certeza de diferenciar a letra O e número 0, a letra I e numero 1.</p> 
                                </div>
                                <div id="serialInput"><input type="text" name="serial" id="serial" value="0000-0000-0000" maxlength="14" onkeyup="this.value=this.value.toUpperCase()"></div>
                                <div id="serialCheck"><input type="submit" value="Registrar serial"></div>
                                <div id="serialResponse">
                                     <!--p class="yellow">Serial registrado!</p>
                                     <p class="yellow">Recebido: Bone Blade</p>
                                     <p class="white">Serial inválido!</p-->
                                </div>
                            </div>
                            </form>
                            <script type="text/javascript">
                            jQuery("#goldeArcherForm").submit(function(){
                                
                                Verify ('?page=paneluser&option=GOLDEN_ARCHER&action=check&serial='+jQuery("#serial").val(), 'serialResponse', 'get');
                                
                                return false;
                            });
                            </script>
                            </td>                                                     
                            <!--td style="margin: 0px; padding: 0px 0px 0px 10px; width: 100%; background-color: transparent; vertical-align: top;">
                            Atenção, esse sistema não é interligado com o Golden Archer do jogo!
                            </td-->
                        </tr> 
                        </table>
                                    
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