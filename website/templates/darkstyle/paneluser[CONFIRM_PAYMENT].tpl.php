{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Confirmar pagamento</h2>
                <p><strong>Aten&ccedil;&atilde;o: a m&aacute; utiliza&ccedil;&atilde;o deste servi&ccedil;o pode causar o bloqueio permanente de sua conta.</strong></p>
                <form method="post" enctype="multipart/form-data" action="?page=paneluser&amp;option=CONFIRM_PAYMENT&amp;Write=true" id="FormConfirm">   
                    <p>
                        <label>Quantia de {#CASH_NAME}:</label>
                        <input type="text" name="golds" value="0" maxlength="10" />
                    </p>
                    <p>
                        <label>Qual banco voc&ecirc; usou?</label>
                    </p>
                    <p>
                        <input name="bank" type="radio" value="Banco Bradesco ou Banco Postal" id="Opt_Bradesco" class="openBank" /> Banco Bradesco ou Banco Postal
                    </p>
                    <p>
                        <input name="bank" type="radio" value="Banco Itau" id="Opt_Itau" class="openBank" /> Banco Ita&uacute;
                    </p>
                    <p>
                        <input name="bank" type="radio" value="Banco do Brasil" id="Opt_BBrasil" class="openBank" /> Banco do Brasil
                    </p>
                    <p>
                        <input name="bank" type="radio" value="Caixa Economica Federal" id="Opt_CXEcon" class="openBank" /> Caixa Econ&ocirc;mica Federal
                    </p>
                    <p>
                        <input name="bank" type="radio" value="Loterica" id="Opt_Loterica" class="openBank" /> Lot&eacute;rica
                    </p>
                    <p>
                        <input name="bank" type="radio" value="Caixa Aqui" id="Opt_CXAqui" class="openBank" /> Caixa Aqui
                    </p>
                    <div id="Opt_Bradesco" class="hidden">
                        <p>
                            <label>N&uacute;mero terminal</label>
                            <input name="nterminal" id="Opt_Bradesco_nterminal" type="text" maxlength="15" />
                        </p>
                        <p>
                            <label>N&uacute;mero transfer&ecirc;ncia</label>
                            <input name="ntransferencia" id="Opt_Bradesco_ntransferencia" type="text" maxlength="15" />
                        </p>
                        <p>
                            <label>Ag&ecirc;ncia acolhedora</label>
                            <input name="agencia_acolhedora" id="Opt_Bradesco_agencia_acolhedora" type="text" maxlength="15" />
                        </p>
                        <p>
                            <label>N&uacute;mero Sequ&ecirc;ncia</label>
                            <input name="nsequencia" id="Opt_Bradesco_nsequencia" type="text" maxlength="15" />
                        </p>
                    </div>
                    <div id="Opt_Itau" class="hidden">
                        <p>
                            <label>CTR</label>
                            <input name="ctr" id="Opt_Itau_ctr" type="text" maxlength="15" />
                        </p>
                        <p>
                            <label>Caixa Eletr&ocirc;nico</label>
                            <input name="caixa_eletronico" id="Opt_Itau_caixa_eletronico" type="text" maxlength="15" value="Ex: 123456/1234" />
                        </p>
                    </div>
                    <div id="Opt_BBrasil" class="hidden">
                        <p>
                            <label>N&uacute;mero Envelope</label>
                            <input name="nenvelope" id="Opt_BBrasil_nenvelope" type="text" maxlength="15" />
                        </p>
                        <p>
                            <label>N&uacute;mero Documento</label>
                            <input name="ndocumento" id="Opt_BBrasil_ndocumento" type="text" maxlength="15" />
                        </p>
                    </div>
                    <div id="Opt_CXEcon" class="hidden">
                        <p>
                            <label>N&uacute;mero do terminal</label>
                            <input name="nterminal" id="Opt_CXEcon_nterminal" type="text" maxlength="15" />
                        </p>
                    </div>
                    <div id="Opt_Loterica" class="hidden">
                        <p>
                            <label>N&uacute;mero de controle</label>
                            <input name="ncontrole" id="Opt_Loterica_ncontrole" type="text" maxlength="15" />
                        </p>
                        <p>
                            <label>N&uacute;mero do terminal</label>
                            <input name="nterminal" id="Opt_Loterica_nterminal" type="text" maxlength="15" />
                        </p>
                    </div>
                    <div id="Opt_CXAqui" class="hidden">
                        <p>
                            <label>N&uacute;mero do operador</label>
                            <input name="noperador" id="Opt_CXAqui_noperador" type="text" maxlength="15" />
                        </p>
                    </div>
                    <p>
                        <label>Data</label>
                        <input name="data" type="text" maxlength="10" value="Ex: 01/01/2000" />
                    </p>
                    <p>
                        <label>Hora</label>
                        <input name="hora" type="text" maxlength="8" value="Ex: 00:00:00" />
                    </p>
                    <p>
                        <label>Valor pago</label>
                        <input name="valor" type="text" maxlength="10" value="R$ 0.00" />
                    </p>
                    <p>
                        <label>Pago em</label>
                        <select name="pago_em">
                        	<option value=""></option>
                            <option value="Atendente">Atendente</option>
                            <option value="Auto Atendimento">Auto Atendimento</option>
                            <option value="Trans. Eletrônica">Trans. Eletrônica</option>
                        </select>
                    </p>
                    <p>
                        <label>Anexo Comprovante</label>
                        <input type="file" name="image" id="image" size="10" />
                    </p>
                    <p>  
                        <label>Coment&aacute;rio</label>
                        <textarea rows="5" name="comment">Máximo 200 caracteres.</textarea>
                    </p>
                    <p>
                        <input type="submit" value="Enviar Confirma&ccedil;&atilde;o" class="button" />
                    </p>
                </form>
                {#RespostWrite}  
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}
