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
function show_hide_blocks(name) { 
	if(name == "Opt_Bradesco") {
		document.getElementById('Opt_Bradesco').style.display = 'block'; 
		document.getElementById('Opt_Bradesco_nterminal').disabled = ''; 
		document.getElementById('Opt_Bradesco_ntransferencia').disabled = ''; 
		document.getElementById('Opt_Bradesco_agencia_acolhedora').disabled = ''; 
		document.getElementById('Opt_Bradesco_nsequencia').disabled = ''; 
	} else {
		document.getElementById('Opt_Bradesco').style.display = 'none';
		document.getElementById('Opt_Bradesco_nterminal').disabled = 'disabled'; 
		document.getElementById('Opt_Bradesco_ntransferencia').disabled = 'disabled'; 
		document.getElementById('Opt_Bradesco_agencia_acolhedora').disabled = 'disabled'; 
		document.getElementById('Opt_Bradesco_nsequencia').disabled = 'disabled';
	} 
	if(name == "Opt_Itau") {
		document.getElementById('Opt_Itau').style.display = 'block'; 
		document.getElementById('Opt_Itau_ctr').disabled = ''; 
		document.getElementById('Opt_Itau_caixa_eletronico').disabled = ''; 
	} else {
		document.getElementById('Opt_Itau').style.display = 'none';
		document.getElementById('Opt_Itau_ctr').disabled = 'disabled'; 
		document.getElementById('Opt_Itau_caixa_eletronico').disabled = 'disabled';
	} 
	if(name == "Opt_BBrasil") {
		document.getElementById('Opt_BBrasil').style.display = 'block'; 
		document.getElementById('Opt_BBrasil_nenvelope').disabled = ''; 
		document.getElementById('Opt_BBrasil_ndocumento').disabled = ''; 
	} else {
		document.getElementById('Opt_BBrasil').style.display = 'none';
		document.getElementById('Opt_BBrasil_nenvelope').disabled = 'disabled'; 
		document.getElementById('Opt_BBrasil_ndocumento').disabled = 'disabled';
	} 
	if(name == "Opt_CXEcon") {
		document.getElementById('Opt_CXEcon').style.display = 'block'; 
		document.getElementById('Opt_CXEcon_nterminal').disabled = ''; 
	} else {
		document.getElementById('Opt_CXEcon').style.display = 'none';
		document.getElementById('Opt_CXEcon_nterminal').disabled = 'disabled'; 
	} 
	if(name == "Opt_Loterica") {
		document.getElementById('Opt_Loterica').style.display = 'block'; 
		document.getElementById('Opt_Loterica_ncontrole').disabled = ''; 
		document.getElementById('Opt_Loterica_nterminal').disabled = ''; 
	} else {
		document.getElementById('Opt_Loterica').style.display = 'none';
		document.getElementById('Opt_Loterica_ncontrole').disabled = 'disabled'; 
		document.getElementById('Opt_Loterica_nterminal').disabled = 'disabled'; 
	} 
	if(name == "Opt_CXAqui") {
		document.getElementById('Opt_CXAqui').style.display = 'block'; 
		document.getElementById('Opt_CXAqui_noperador').disabled = '';  
	} else {
		document.getElementById('Opt_CXAqui').style.display = 'none';
		document.getElementById('Opt_CXAqui_noperador').disabled = 'disabled'; 
	}
	return true;
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
                            
                            <h1 style="margin-top: 20px; margin-bottom: 26px;">Confirmar Pagamento</h1>
                            
                          	<div id="etc">
                            	<div class="qdestaques2"><strong>Atenção:</strong> A má utilização deste serviço pode causar o bloqueio permanente de sua conta.</div>
                                
                                
                            <div style="margin-top: 16px; margin-bottom: 16px;">
                                    {#RespostWrite}
                              </div>
                            <form method="post" enctype="multipart/form-data" action="?page=paneluser&amp;option=CONFIRM_PAYMENT&amp;Write=true" id="FormConfirm">   
					<table cellpadding="0" cellspacing="2" width="100%">
						<tr>
							<td style="width:65%; background: none;" valign="top">
								Quantia de {#CASH_NAME}<br /><input name="golds" type="text" class="inputbox" value="0"  maxlength="10" /> <a href="javascript:void(0);" onclick="javascript:alert('Coloque a quantidade de {#CASH_NAME} aqui.');">[?]</a><br />
								Qual banco você usou<br />
									<input name="bank" type="radio" value="Banco Bradesco ou Banco Postal" onclick="javascript:show_hide_blocks('Opt_Bradesco');" /> Banco Bradesco ou Banco Postal<br />
									<input name="bank" type="radio" value="Banco Itau" onclick="javascript:show_hide_blocks('Opt_Itau');" /> Banco Itaú<br />
									<input name="bank" type="radio" value="Banco do Brasil" onclick="javascript:show_hide_blocks('Opt_BBrasil');" /> Banco do Brasil<br />
									<input name="bank" type="radio" value="Caixa Economica Federal" onclick="javascript:show_hide_blocks('Opt_CXEcon');" /> Caixa Econômica Federal<br />
									<input name="bank" type="radio" value="Loterica" onclick="javascript:show_hide_blocks('Opt_Loterica');" /> Lotérica<br />
									<input name="bank" type="radio" value="Caixa Aqui" onclick="javascript:show_hide_blocks('Opt_CXAqui');" /> Caixa Aqui<br />
							</td>
							<td style="width:35%; background: none;">
								<div id="Opt_Bradesco" style="display:none;">
									Número terminal<br /><input name="nterminal" class="inputbox" id="Opt_Bradesco_nterminal" type="text" maxlength="15" /><br />
									Número transferência<br /><input name="ntransferencia" class="inputbox" id="Opt_Bradesco_ntransferencia" type="text" maxlength="15" /><br />
									Agência acolhedora<br /><input name="agencia_acolhedora" class="inputbox" id="Opt_Bradesco_agencia_acolhedora" type="text" maxlength="15" /><br />
									Número Sequência<br /><input name="nsequencia" class="inputbox" id="Opt_Bradesco_nsequencia" type="text" maxlength="15" /><br />
								</div>
								<div id="Opt_Itau" style="display:none;">
									CTR<br /><input name="ctr" id="Opt_Itau_ctr" class="inputbox" type="text" maxlength="15" /><br />
									Caixa Eletrônico<br /><input name="caixa_eletronico" class="inputbox" id="Opt_Itau_caixa_eletronico" type="text" maxlength="15" value="Ex: 123456/1234" /><br />
								</div>
								<div id="Opt_BBrasil" style="display:none;">
									Número Envelope<br /><input name="nenvelope" class="inputbox" id="Opt_BBrasil_nenvelope" type="text" maxlength="15" /><br />
									Número Documento<br /><input name="ndocumento" class="inputbox" id="Opt_BBrasil_ndocumento" type="text" maxlength="15" /><br />
								</div>
								<div id="Opt_CXEcon" style="display:none;">
									Número do terminal<br /><input name="nterminal" class="inputbox" id="Opt_CXEcon_nterminal" type="text" maxlength="15" /><br />
								</div>
								<div id="Opt_Loterica" style="display:none;">
									Número de controle<br /><input name="ncontrole" class="inputbox" id="Opt_Loterica_ncontrole" type="text" maxlength="15" /><br />
									Número do terminal<br /><input name="nterminal" class="inputbox" id="Opt_Loterica_nterminal" type="text" maxlength="15" /><br />
								</div>
								<div id="Opt_CXAqui" style="display:none;">
									Número do operador<br /><input name="noperador" class="inputbox" id="Opt_CXAqui_noperador" type="text" maxlength="15" /><br />
								</div>
								
								Data<br /><input name="data" type="text" class="inputbox" value="Ex: 01/01/2000" maxlength="10" /><br />
								Hora<br /><input name="hora" type="text" class="inputbox" value="Ex: 00:00:00" maxlength="8" /><br />
								Valor pago<br /><input name="valor" type="text" class="inputbox" value="R$ 0.00" maxlength="10" /><br />
								Pago em<br /><select name="pago_em" class="inputbox" /><option></option><option value="Atendente">Atendente</option><option value="Auto Atendimento">Auto Atendimento</option><option value="Trans. Eletrônica">Trans. Eletrônica</option></select><br />
								Anexo Comprovante<br /><input type="file" name="image" id="image" size="10" /> <a href="javascript:void(0);" onclick="javascript: document.getElementById('image').value = '';">[x]</a>&nbsp;<a href="javascript:void(0);" onclick="javascript:alert('Somente fotos com a extenssão JPG.');">[?]</a><br />   
								Comentário<br /><textarea rows="5" style="width:200px" name="comment">Máximo 200 caracters.</textarea>
							</td>  
						</tr>
					</table>
					<input type="submit" value="Enviar Confirmação" class="button" style="margin-top: 6px;"/> 
					</form>
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
