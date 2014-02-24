{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            <div class="contentBox" id="panelActions">
                
                <span class="hidden" id="VIP_NAME_1">{#VIP_NAME_1}</span>
                <span class="hidden" id="VIP_NAME_2">{#VIP_NAME_2}</span>
                <span class="hidden" id="VIP_NAME_3">{#VIP_NAME_3}</span>
                <span class="hidden" id="VIP_NAME_4">{#VIP_NAME_4}</span>
                <span class="hidden" id="VIP_NAME_5">{#VIP_NAME_5}</span>
                <span class="hidden" id="VIP_ACTIVE_1"><?php echo ($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"] ? "true" : "false"); ?></span>
                <span class="hidden" id="VIP_ACTIVE_2"><?php echo ($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"] ? "true" : "false"); ?></span>
                <span class="hidden" id="VIP_ACTIVE_3"><?php echo ($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"] ? "true" : "false"); ?></span>
                <span class="hidden" id="VIP_ACTIVE_4"><?php echo ($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"] ? "true" : "false"); ?></span>
                <span class="hidden" id="VIP_ACTIVE_5"><?php echo ($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"] ? "true" : "false"); ?></span>
                
            	<ul class="rank">
            		<li style="margin-left: 7px;">
                    	<span>Minha conta</span>
                        <ul>
                            <li><a href='?page=paneluser'>Minha Conta</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=MODIFY_DATA' rel="{#MODIFY_DATA_FREE},{#MODIFY_DATA_VIP_S},{#MODIFY_DATA_VIP_G},{#MODIFY_DATA_VIP_3},{#MODIFY_DATA_VIP_4},{#MODIFY_DATA_VIP_5}">Alterar Dados</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=CLEAN_VAULT' rel="{#CLEAN_VAULT_FREE},{#CLEAN_VAULT_VIP_S},{#CLEAN_VAULT_VIP_G},{#CLEAN_VAULT_VIP_3},{#CLEAN_VAULT_VIP_4},{#CLEAN_VAULT_VIP_4}">Limpar Ba&uacute;</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=DOUBLE_VAULT' rel="{#DOUBLE_VAULT_FREE},{#DOUBLE_VAULT_VIP_S},{#DOUBLE_VAULT_VIP_G},{#DOUBLE_VAULT_VIP_3},{#DOUBLE_VAULT_VIP_4},{#DOUBLE_VAULT_VIP_5}">Ba&uacute; Duplo</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=VIRTUAL_VAULT' rel="{#VIRTUAL_VAULT_FREE},{#VIRTUAL_VAULT_VIP_S},{#VIRTUAL_VAULT_VIP_G},{#VIRTUAL_VAULT_VIP_3},{#VIRTUAL_VAULT_VIP_4},{#VIRTUAL_VAULT_VIP_5}">Ba&uacute; virtual</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=LOG_BUYS' rel="{#LOG_BUYS_FREE},{#LOG_BUYS_VIP_S},{#LOG_BUYS_VIP_G},{#LOG_BUYS_VIP_3},{#LOG_BUYS_VIP_4},{#LOG_BUYS_VIP_5}">Log de Compras</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=MODIFY_PERSONALID' rel="{#MODIFY_PERSONALID_FREE},{#MODIFY_PERSONALID_VIP_S},{#MODIFY_PERSONALID_VIP_G},{#MODIFY_PERSONALID_VIP_3},{#MODIFY_PERSONALID_VIP_4},{#MODIFY_PERSONALID_VIP_5}">Alterar Personal ID</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=GAME_DISCONNECT' rel="{#GAME_DISCONNECT_FREE},{#GAME_DISCONNECT_VIP_S},{#GAME_DISCONNECT_VIP_G},{#GAME_DISCONNECT_VIP_3},{#GAME_DISCONNECT_VIP_4},{#GAME_DISCONNECT_VIP_5}">Desconectar conta do jogo</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=GOLDEN_ARCHER' rel="{#GOLDEN_ARCHER_FREE},{#GOLDEN_ARCHER_VIP_S},{#GOLDEN_ARCHER_VIP_G},{#GOLDEN_ARCHER_VIP_3},{#GOLDEN_ARCHER_VIP_4},{#GOLDEN_ARCHER_VIP_5}">Golden Archer</a></li>
                            <li><a href='?page=paneluser&amp;option=TRANSFER_CASH'>Transferir {#CASH_NAME}/{#CASH_NAME2}</a></li>
                            <li><a href='?page=loadModule&module=screenshots&action=panelManager'>Screenshots</a></li>
                        </ul>
                        <span>Shop</span>
                        <ul>
                            <li><a href='?page=paneluser&amp;option=BUY_VIPS'>Comprar vip</a></li>
                            <li><a href='?page=paneluser&amp;option=CONFIRM_PAYMENT'>Confirmar pagamento</a></li>
                        </ul>
                    </li>
            		<li>
                    	<span>Personagens</span>
                        <ul>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=RESET' rel="{#RESET_FREE},{#RESET_VIP_S},{#RESET_VIP_G},{#RESET_VIP_3},{#RESET_VIP_4},{#RESET_VIP_5}">Resetar Personagem</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=MASTER_RESET' rel="{#MASTER_RESET_FREE},{#MASTER_RESET_VIP_S},{#MASTER_RESET_VIP_G},{#MASTER_RESET_VIP_3},{#MASTER_RESET_VIP_4},{#MASTER_RESET_VIP_5}">Master Reset</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=RESET_TRANSFER' rel="{#RESET_TRANSFER_FREE},{#RESET_TRANSFER_VIP_S},{#RESET_TRANSFER_VIP_G},{#RESET_TRANSFER_VIP_3},{#RESET_TRANSFER_VIP_4},{#RESET_TRANSFER_VIP_5}">Transferir Resets</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=CLEAN_PK' rel="{#CLEAN_PK_FREE},{#CLEAN_PK_VIP_S},{#CLEAN_PK_VIP_G},{#CLEAN_PK_VIP_3},{#CLEAN_PK_VIP_4},{#CLEAN_PK_VIP_5}">Limpar PK</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=DISTRIBUTE_POINTS' rel="{#DISTRIBUTE_POINTS_FREE},{#DISTRIBUTE_POINTS_VIP_S},{#DISTRIBUTE_POINTS_VIP_G},{#DISTRIBUTE_POINTS_VIP_3},{#DISTRIBUTE_POINTS_VIP_4},{#DISTRIBUTE_POINTS_VIP_5}">Distribuir Pontos</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=MOVE_CHARACTER' rel="{#MOVE_CHARACTER_FREE},{#MOVE_CHARACTER_VIP_S},{#MOVE_CHARACTER_VIP_G},{#MOVE_CHARACTER_VIP_3},{#MOVE_CHARACTER_VIP_4},{#MOVE_CHARACTER_VIP_5}">Mover Personagem</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=CHANGE_NICK' rel="{#CHANGE_NICK_FREE},{#CHANGE_NICK_VIP_S},{#CHANGE_NICK_VIP_G},{#CHANGE_NICK_VIP_3},{#CHANGE_NICK_VIP_4},{#CHANGE_NICK_VIP_5}">Mudar Nick</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=CHANGE_CLASS' rel="{#CHANGE_CLASS_FREE},{#CHANGE_CLASS_VIP_S},{#CHANGE_CLASS_VIP_G},{#CHANGE_CLASS_VIP_3},{#CHANGE_CLASS_VIP_4},{#CHANGE_CLASS_VIP_5}">Mudar Classe</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=REDISTRIBUTE_POINTS' rel="{#REDISTRIBUTE_POINTS_FREE},{#REDISTRIBUTE_POINTS_VIP_S},{#REDISTRIBUTE_POINTS_VIP_G},{#REDISTRIBUTE_POINTS_VIP_3},{#REDISTRIBUTE_POINTS_VIP_4},{#REDISTRIBUTE_POINTS_VIP_5}">Redistribuir Pontos</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=CLEAN_INVENTORY' rel="{#CLEAN_INVENTORY_FREE},{#CLEAN_INVENTORY_VIP_S},{#CLEAN_INVENTORY_VIP_G},{#CLEAN_INVENTORY_VIP_3},{#CLEAN_INVENTORY_VIP_4},{#CLEAN_INVENTORY_VIP_5}">Limpar Invent&aacute;rio</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=MANAGER_PHOTO' rel="{#MANAGER_PHOTO_FREE},{#MANAGER_PHOTO_VIP_S},{#MANAGER_PHOTO_VIP_G},{#MANAGER_PHOTO_VIP_3},{#MANAGER_PHOTO_VIP_4},{#MANAGER_PHOTO_VIP_5}">Gerenciar foto</a></li>
                        </ul>
                    </li>
            		<li>
                    	<span>Suporte</span>
                        <ul>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=OPEN_COMPLAINTS' rel="{#OPEN_COMPLAINTS_FREE},{#OPEN_COMPLAINTS_VIP_S},{#OPEN_COMPLAINTS_VIP_G},{#OPEN_COMPLAINTS_VIP_3},{#OPEN_COMPLAINTS_VIP_4},{#OPEN_COMPLAINTS_VIP_5}">Abrir den&uacute;ncias</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=OPEN_TICKET' rel="{#OPEN_TICKET_FREE},{#OPEN_TICKET_VIP_S},{#OPEN_TICKET_VIP_G},{#OPEN_TICKET_VIP_3},{#OPEN_TICKET_VIP_4},{#OPEN_TICKET_VIP_5}">Abrir pedidos</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=READ_TICKET' rel="{#READ_TICKET_FREE},{#READ_TICKET_VIP_S},{#READ_TICKET_VIP_G},{#READ_TICKET_VIP_3},{#READ_TICKET_VIP_4},{#READ_TICKET_VIP_5}">Ver pedidos</a></li>
                            <li><a class='tooltip' href='?page=paneluser&amp;option=SEND_SMS' rel="{#SEND_SMS_FREE},{#SEND_SMS_VIP_S},{#SEND_SMS_VIP_G},{#SEND_SMS_VIP_3},{#SEND_SMS_VIP_4},{#SEND_SMS_VIP_5}">Enviar SMS para os ADMs</a></li>
                        </ul>
                    </li>
                </ul>
                <br style="clear: both;" />
            </div>
                            
            <!-- Begin Questions Event -->
            <div id="questionsEvent" style="display: none;">
                <form name="questionEventForm">
                
                <div id="answerQuestion">
                    <p class="congratulations">Parab&eacute;ns {#MEMB_NAME}!</p>
                    <p>&nbsp;</p>
                    <p>Voc&ecirc; foi sorteado para participar do evento Show do Milh&atilde;o.</p>
                    <p>Responda corretamente a pergunta abaixo, e ganha um prêmio!</p>
                    <p>Boa sorte e obrigado pela sua participação no {#TITLE_SITE}.</p>
                </div>
                
                <div id="optionsQuestion">
                    {#questionResponse}
                    <div id="reponseSubmit">
                        
                    </div>
                </div>
                
                <div id="timerString">Tempo restante: <div id="timerCount">60 segundos.</div></div>
                
                </form>
            </div>
            <script type="text/javascript">
            var interval = null;
            var count = 60;
            function timerDecrement()
            {
                count--;
                if(count <= 0)
                {
                    jQuery('#timerCount').css("color", "red");
                    jQuery('#timerCount').html('Tempo esgotado.');
                    clearInterval(interval);
                }
                else 
                {
                    jQuery('#timerCount').css("color", "green");
                    jQuery('#timerCount').html(count + " segundos.");
                } 
            }
            </script>
            <!-- End Questions Event --> 

            <div class="contentBox">
                <h2 class="noMargin">Golden Archer</h2>
                
                <p>
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
                            $("#goldeArcherForm").submit(function(){
                                
                                Verify ('?page=paneluser&option=GOLDEN_ARCHER&action=check&serial='+$("#serial").val(), 'serialResponse', 'get');
                                
                                return false;
                            });
                            </script>
                            </td>                                                     
                            <!--td style="margin: 0px; padding: 0px 0px 0px 10px; width: 100%; background-color: transparent; vertical-align: top;">
                            Atenção, esse sistema não é interligado com o Golden Archer do jogo!
                            </td-->
                        </tr> 
                        </table>
               	</p> 
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}