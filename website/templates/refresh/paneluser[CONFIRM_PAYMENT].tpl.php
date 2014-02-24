{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Confirmar Pagamento</h1>
                    <script type="text/javascript">
						function show_hide_blocks(name) 
						{			
							if(name == "Opt_Bradesco") 
							{
								document.getElementById('Opt_Bradesco').style.display = 'block'; 
								document.getElementById('Opt_Bradesco_nterminal').disabled = ''; 
								document.getElementById('Opt_Bradesco_ntransferencia').disabled = ''; 
								document.getElementById('Opt_Bradesco_agencia_acolhedora').disabled = ''; 
								document.getElementById('Opt_Bradesco_nsequencia').disabled = ''; 
							} 
							else 
							{
								document.getElementById('Opt_Bradesco').style.display = 'none';
								document.getElementById('Opt_Bradesco_nterminal').disabled = 'disabled'; 
								document.getElementById('Opt_Bradesco_ntransferencia').disabled = 'disabled'; 
								document.getElementById('Opt_Bradesco_agencia_acolhedora').disabled = 'disabled'; 
								document.getElementById('Opt_Bradesco_nsequencia').disabled = 'disabled';
							}
							if(name == "Opt_Itau") 
							{
								document.getElementById('Opt_Itau').style.display = 'block'; 
								document.getElementById('Opt_Itau_ctr').disabled = ''; 
								document.getElementById('Opt_Itau_caixa_eletronico').disabled = ''; 
							} 
							else 
							{
								document.getElementById('Opt_Itau').style.display = 'none';
								document.getElementById('Opt_Itau_ctr').disabled = 'disabled'; 
								document.getElementById('Opt_Itau_caixa_eletronico').disabled = 'disabled';
							}
							if(name == "Opt_BBrasil") 
							{
								document.getElementById('Opt_BBrasil').style.display = 'block'; 
								document.getElementById('Opt_BBrasil_nenvelope').disabled = ''; 
								document.getElementById('Opt_BBrasil_ndocumento').disabled = ''; 
							} 
							else 
							{
								document.getElementById('Opt_BBrasil').style.display = 'none';
								document.getElementById('Opt_BBrasil_nenvelope').disabled = 'disabled'; 
								document.getElementById('Opt_BBrasil_ndocumento').disabled = 'disabled';
							}
							if(name == "Opt_CXEcon") 
							{
								document.getElementById('Opt_CXEcon').style.display = 'block'; 
								document.getElementById('Opt_CXEcon_nterminal').disabled = ''; 
							} 
							else 
							{
								document.getElementById('Opt_CXEcon').style.display = 'none';
								document.getElementById('Opt_CXEcon_nterminal').disabled = 'disabled'; 
							}
							if(name == "Opt_Loterica") 
							{
								document.getElementById('Opt_Loterica').style.display = 'block'; 
								document.getElementById('Opt_Loterica_ncontrole').disabled = ''; 
								document.getElementById('Opt_Loterica_nterminal').disabled = ''; 
							} 
							else 
							{
								document.getElementById('Opt_Loterica').style.display = 'none';
								document.getElementById('Opt_Loterica_ncontrole').disabled = 'disabled'; 
								document.getElementById('Opt_Loterica_nterminal').disabled = 'disabled'; 
							}
							if(name == "Opt_CXAqui") 
							{
								document.getElementById('Opt_CXAqui').style.display = 'block'; 
								document.getElementById('Opt_CXAqui_noperador').disabled = '';  
							} 
							else 
							{
								document.getElementById('Opt_CXAqui').style.display = 'none';
								document.getElementById('Opt_CXAqui_noperador').disabled = 'disabled'; 
							}
							return true;
						}
					</script>
					<div class="quadros">
					   <strong>Atenção:</strong> <em>A má utilização deste serviço pode causar o bloqueio permanente de sua conta.</em>
					</div>
                    {#RespostWrite}  
					<br />
					<form method="post" enctype="multipart/form-data" action="?page=paneluser&amp;option=CONFIRM_PAYMENT&amp;Write=true" id="FormConfirm">   
					<table cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td style="width:65%" valign="top">
								Quantia de {#CASH_NAME}<br /><input type="text" name="golds" value="0"  maxlength="10" /> <a href="javascript:void(0);" onclick="javascript:alert('Coloque a quantidade de {#CASH_NAME} aqui.');">[?]</a><br />
								Qual banco você usou<br />
									<input name="bank" type="radio" value="Banco Bradesco ou Banco Postal" onclick="javascript:show_hide_blocks('Opt_Bradesco');" /> Banco Bradesco ou Banco Postal<br />
									<input name="bank" type="radio" value="Banco Itau" onclick="javascript:show_hide_blocks('Opt_Itau');" /> Banco Itaú<br />
									<input name="bank" type="radio" value="Banco do Brasil" onclick="javascript:show_hide_blocks('Opt_BBrasil');" /> Banco do Brasil<br />
									<input name="bank" type="radio" value="Caixa Economica Federal" onclick="javascript:show_hide_blocks('Opt_CXEcon');" /> Caixa Econômica Federal<br />
									<input name="bank" type="radio" value="Loterica" onclick="javascript:show_hide_blocks('Opt_Loterica');" /> Lotérica<br />
									<input name="bank" type="radio" value="Caixa Aqui" onclick="javascript:show_hide_blocks('Opt_CXAqui');" /> Caixa Aqui<br />
							</td>
							<td style="width:35%">
								<div id="Opt_Bradesco" style="display:none;">
									Número terminal<br /><input name="nterminal" id="Opt_Bradesco_nterminal" type="text" maxlength="15" /><br />
									Número transferência<br /><input name="ntransferencia" id="Opt_Bradesco_ntransferencia" type="text" maxlength="15" /><br />
									Agência acolhedora<br /><input name="agencia_acolhedora" id="Opt_Bradesco_agencia_acolhedora" type="text" maxlength="15" /><br />
									Número Sequência<br /><input name="nsequencia" id="Opt_Bradesco_nsequencia" type="text" maxlength="15" /><br />
								</div>
								<div id="Opt_Itau" style="display:none;">
									CTR<br /><input name="ctr" id="Opt_Itau_ctr" type="text" maxlength="15" /><br />
									Caixa Eletrônico<br /><input name="caixa_eletronico" id="Opt_Itau_caixa_eletronico" type="text" maxlength="15" value="Ex: 123456/1234" /><br />
								</div>
								<div id="Opt_BBrasil" style="display:none;">
									Número Envelope<br /><input name="nenvelope" id="Opt_BBrasil_nenvelope" type="text" maxlength="15" /><br />
									Número Documento<br /><input name="ndocumento" id="Opt_BBrasil_ndocumento" type="text" maxlength="15" /><br />
								</div>
								<div id="Opt_CXEcon" style="display:none;">
									Número do terminal<br /><input name="nterminal" id="Opt_CXEcon_nterminal" type="text" maxlength="15" /><br />
								</div>
								<div id="Opt_Loterica" style="display:none;">
									Número de controle<br /><input name="ncontrole" id="Opt_Loterica_ncontrole" type="text" maxlength="15" /><br />
									Número do terminal<br /><input name="nterminal" id="Opt_Loterica_nterminal" type="text" maxlength="15" /><br />
								</div>
								<div id="Opt_CXAqui" style="display:none;">
									Número do operador<br /><input name="noperador" id="Opt_CXAqui_noperador" type="text" maxlength="15" /><br />
								</div>
								
								Data<br /><input name="data" type="text" maxlength="10" value="Ex: 01/01/2000" /><br />
								Hora<br /><input name="hora" type="text" maxlength="8" value="Ex: 00:00:00" /><br />
								Valor pago<br /><input name="valor" type="text" maxlength="10" value="R$ 0.00" /><br />
								Pago em<br /><select name="pago_em" /><option></option><option value="Atendente">Atendente</option><option value="Auto Atendimento">Auto Atendimento</option><option value="Trans. Eletrônica">Trans. Eletrônica</option></select><br />
								Anexo Comprovante<br /><input type="file" name="image" id="image" size="10" /> <a href="javascript:void(0);" onclick="javascript: document.getElementById('image').value = '';">[x]</a>&nbsp;<a href="javascript:void(0);" onclick="javascript:alert('Somente fotos com a extenssão JPG.');">[?]</a><br />   
								Comentário<br /><textarea rows="5" style="width:200px" name="comment">Máximo 200 caracters.</textarea>
							</td>  
						</tr>
					</table>
					<input type="submit" value="Enviar Confirmação" class="button" /> 
					</form>  
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
