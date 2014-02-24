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
                       <div id="menu_cp">
                           <ul>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div1')">Gerenciar Minha Conta</a></li>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div2')">Gerenciar Personagens</a></li>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div3')">Shop</a></li>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div4')">Suporte</a></li>
                           </ul>
                       </div>
                                  
                       <div id='div1' style="display: none;">
                           <div id="menu_cp">
                               <ul>
                                <li><a href='?page=paneluser'>Minha Conta</a></li>
                                <li><a href='?page=paneluser&amp;option=MODIFY_DATA' onmouseover="show_permission('GMC','{#MODIFY_DATA_FREE}','{#MODIFY_DATA_VIP_S}','{#MODIFY_DATA_VIP_G}','{#MODIFY_DATA_VIP_3}','{#MODIFY_DATA_VIP_4}','{#MODIFY_DATA_VIP_5}');" onmouseout="clear_permission('GMC');">Alterar Dados</a></li>
                                <li><a href='?page=paneluser&amp;option=CLEAN_VAULT' onmouseover="show_permission('GMC','{#CLEAN_VAULT_FREE}','{#CLEAN_VAULT_VIP_S}','{#CLEAN_VAULT_VIP_G}','{#CLEAN_VAULT_VIP_3}','{#CLEAN_VAULT_VIP_4}','{#CLEAN_VAULT_VIP_5}');" onmouseout="clear_permission('GMC');">Limpar Bau</a></li>
                                <li><a href='?page=paneluser&amp;option=DOUBLE_VAULT' onmouseover="show_permission('GMC','{#DOUBLE_VAULT_FREE}','{#DOUBLE_VAULT_VIP_S}','{#DOUBLE_VAULT_VIP_G}','{#DOUBLE_VAULT_VIP_3}','{#DOUBLE_VAULT_VIP_4}','{#DOUBLE_VAULT_VIP_5}');" onmouseout="clear_permission('GMC');">Bau Duplo</a></li>
                                <li><a href='?page=paneluser&amp;option=VIRTUAL_VAULT' onmouseover="show_permission('GMC','{#VIRTUAL_VAULT_FREE}','{#VIRTUAL_VAULT_VIP_S}','{#VIRTUAL_VAULT_VIP_G}','{#VIRTUAL_VAULT_VIP_3}','{#VIRTUAL_VAULT_VIP_4}','{#VIRTUAL_VAULT_VIP_5}');" onmouseout="clear_permission('GMC');">Bau virtual</a></li>
                                <li><a href='?page=paneluser&amp;option=LOG_BUYS' onmouseover="show_permission('GMC','{#LOG_BUYS_FREE}','{#LOG_BUYS_VIP_S}','{#LOG_BUYS_VIP_G}','{#LOG_BUYS_VIP_3}','{#LOG_BUYS_VIP_4}','{#LOG_BUYS_VIP_5}');" onmouseout="clear_permission('GMC');">Log de Compras</a></li>
                                <li><a href='?page=paneluser&amp;option=MODIFY_PERSONALID' onmouseover="show_permission('GMC','{#MODIFY_PERSONALID_FREE}','{#MODIFY_PERSONALID_VIP_S}','{#MODIFY_PERSONALID_VIP_G}','{#MODIFY_PERSONALID_VIP_3}','{#MODIFY_PERSONALID_VIP_4}','{#MODIFY_PERSONALID_VIP_5}');" onmouseout="clear_permission('GMC');">Alterar Personal ID</a></li>
                                <li><a href='?page=paneluser&amp;option=GAME_DISCONNECT' onmouseover="show_permission('GMC','{#GAME_DISCONNECT_FREE}','{#GAME_DISCONNECT_VIP_S}','{#GAME_DISCONNECT_VIP_G}','{#GAME_DISCONNECT_VIP_3}','{#GAME_DISCONNECT_VIP_4}','{#GAME_DISCONNECT_VIP_5}');" onmouseout="clear_permission('GMC');">Desconectar conta</a></li>
                                <li><a href='?page=paneluser&amp;option=GOLDEN_ARCHER' onmouseover="show_permission('GMC','{#GOLDEN_ARCHER_FREE}','{#GOLDEN_ARCHER_VIP_S}','{#GOLDEN_ARCHER_VIP_G}','{#GOLDEN_ARCHER_VIP_3}','{#GOLDEN_ARCHER_VIP_4}','{#GOLDEN_ARCHER_VIP_5}');" onmouseout="clear_permission('GMC');">Golden Archer</a></li>
                                <li><a href='?page=paneluser&amp;option=COLLECTOR_POINTS' onmouseover="show_permission('GMC','{#COLLECTOR_POINTS_FREE}','{#COLLECTOR_POINTS_VIP_S}','{#COLLECTOR_POINTS_VIP_G}','{#COLLECTOR_POINTS_VIP_3}','{#COLLECTOR_POINTS_VIP_4}','{#COLLECTOR_POINTS_VIP_5}');" onmouseout="clear_permission('GMC');">Coletor de pontos</a></li>
                                <li><a href='?page=paneluser&amp;option=AUCTIONS' onmouseover="show_permission('GMC','{#AUCTIONS_FREE}','{#AUCTIONS_VIP_S}','{#AUCTIONS_VIP_G}','{#AUCTIONS_VIP_3}','{#AUCTIONS_VIP_4}','{#AUCTIONS_VIP_5}');" onmouseout="clear_permission('GMC');">Leilões</a></li>
                                <li><a href='?page=paneluser&amp;option=TRANSFER_CASH'>Transferir {#CASH_NAME}/{#CASH_NAME2}</a></li>
                                <li><a href='?page=loadModule&module=screenshots&action=panelManager'>Screenshots</a></li>
                            </ul>
                        <span id='option_permission_GMC'></span>
                        </div>
                      </div>
                              
                       <div id='div2' style='display:none'> 
                          <div id="menu_cp"> 
                            <ul>  
                                 <li><a href='?page=paneluser&amp;option=RESET' onmouseover="show_permission('GP','{#RESET_FREE}','{#RESET_VIP_S}','{#RESET_VIP_G}','{#RESET_VIP_3}','{#RESET_VIP_4}','{#RESET_VIP_5}');" onmouseout="clear_permission('GP');">Resetar Personagem</a></li>
                                 <li><a href='?page=paneluser&amp;option=MASTER_RESET' onmouseover="show_permission('GP','{#MASTER_RESET_FREE}','{#MASTER_RESET_VIP_S}','{#MASTER_RESET_VIP_G}','{#MASTER_RESET_VIP_3}','{#MASTER_RESET_VIP_4}','{#MASTER_RESET_VIP_5}');" onmouseout="clear_permission('GP');">Master Reset</a></li>
                                 <li><a href='?page=paneluser&amp;option=RESET_TRANSFER' onmouseover="show_permission('GP','{#RESET_TRANSFER_FREE}','{#RESET_TRANSFER_VIP_S}','{#RESET_TRANSFER_VIP_G}','{#RESET_TRANSFER_VIP_3}','{#RESET_TRANSFER_VIP_4}','{#RESET_TRANSFER_VIP_5}');" onmouseout="clear_permission('GP');">Transferir Resets</a></li>
                                 <li><a href='?page=paneluser&amp;option=CLEAN_PK' onmouseover="show_permission('GP','{#CLEAN_PK_FREE}','{#CLEAN_PK_VIP_S}','{#CLEAN_PK_VIP_G}','{#CLEAN_PK_VIP_3}','{#CLEAN_PK_VIP_4}','{#CLEAN_PK_VIP_5}');" onmouseout="clear_permission('GP');">Limpar PK</a></li>
                                 <li><a href='?page=paneluser&amp;option=DISTRIBUTE_POINTS' onmouseover="show_permission('GP','{#DISTRIBUTE_POINTS_FREE}','{#DISTRIBUTE_POINTS_VIP_S}','{#DISTRIBUTE_POINTS_VIP_G}','{#DISTRIBUTE_POINTS_VIP_3}','{#DISTRIBUTE_POINTS_VIP_4}','{#DISTRIBUTE_POINTS_VIP_5}');" onmouseout="clear_permission('GP');">Distribuir Pontos</a></li>
                                 <li><a href='?page=paneluser&amp;option=MOVE_CHARACTER' onmouseover="show_permission('GP','{#MOVE_CHARACTER_FREE}','{#MOVE_CHARACTER_VIP_S}','{#MOVE_CHARACTER_VIP_G}','{#MOVE_CHARACTER_VIP_3}','{#MOVE_CHARACTER_VIP_4}','{#MOVE_CHARACTER_VIP_5}');" onmouseout="clear_permission('GP');">Mover Personagem</a></li>
                                 <li><a href='?page=paneluser&amp;option=CHANGE_NICK' onmouseover="show_permission('GP','{#CHANGE_NICK_FREE}','{#CHANGE_NICK_VIP_S}','{#CHANGE_NICK_VIP_G}','{#CHANGE_NICK_VIP_3}','{#CHANGE_NICK_VIP_4}','{#CHANGE_NICK_VIP_5}');" onmouseout="clear_permission('GP');">Mudar Nick</a></li>
                                 <li><a href='?page=paneluser&amp;option=CHANGE_CLASS' onmouseover="show_permission('GP','{#CHANGE_CLASS_FREE}','{#CHANGE_CLASS_VIP_S}','{#CHANGE_CLASS_VIP_G}','{#CHANGE_CLASS_VIP_3}','{#CHANGE_CLASS_VIP_4}','{#CHANGE_CLASS_VIP_5}');" onmouseout="clear_permission('GP');">Mudar Classe</a></li>
                                 <li><a href='?page=paneluser&amp;option=REDISTRIBUTE_POINTS' onmouseover="show_permission('GP','{#REDISTRIBUTE_POINTS_FREE}','{#REDISTRIBUTE_POINTS_VIP_S}','{#REDISTRIBUTE_POINTS_VIP_G}','{#REDISTRIBUTE_POINTS_VIP_3}','{#REDISTRIBUTE_POINTS_VIP_4}','{#REDISTRIBUTE_POINTS_VIP_5}');" onmouseout="clear_permission('GP');">Redistribuir Pontos</a></li>
                                 <li><a href='?page=paneluser&amp;option=CLEAN_INVENTORY' onmouseover="show_permission('GP','{#CLEAN_INVENTORY_FREE}','{#CLEAN_INVENTORY_VIP_S}','{#CLEAN_INVENTORY_VIP_G}','{#CLEAN_INVENTORY_VIP_3}','{#CLEAN_INVENTORY_VIP_4}','{#CLEAN_INVENTORY_VIP_5}');" onmouseout="clear_permission('GP');">Limpar Inventário</a></li>
                                 <li><a href='?page=paneluser&amp;option=MANAGER_PHOTO' onmouseover="show_permission('GP','{#MANAGER_PHOTO_FREE}','{#MANAGER_PHOTO_VIP_S}','{#MANAGER_PHOTO_VIP_G}','{#MANAGER_PHOTO_VIP_3}','{#MANAGER_PHOTO_VIP_4}','{#MANAGER_PHOTO_VIP_5}');" onmouseout="clear_permission('GP');">Gerenciar foto</a></li>
                             </ul>
                             <span id='option_permission_GP'></span>
                          </div>
                        </div>
                                
                       <div id='div3' style='display:none'>
                            <div id="menu_cp">
                                 <ul>
                                     <li><a href='?page=paneluser&amp;option=BUY_VIPS'>Comprar Vips</a></li>
                                     <li><a href='?page=paneluser&amp;option=CONFIRM_PAYMENT'>Confirmar Pagamento</a></li>
                                  </ul>
                            </div>
                       </div>
                           
                       <div id='div4' style='display:none'>
                               <div id="menu_cp">
                                 <ul>
                                     <li><a href='?page=paneluser&amp;option=OPEN_COMPLAINTS' onmouseover="show_permission('GSUP','{#OPEN_COMPLAINTS_FREE}','{#OPEN_COMPLAINTS_VIP_S}','{#OPEN_COMPLAINTS_VIP_G}','{#OPEN_COMPLAINTS_VIP_3}','{#OPEN_COMPLAINTS_VIP_4}','{#OPEN_COMPLAINTS_VIP_5}');" onmouseout="clear_permission('GSUP');">Abrir Denuncias</a></li>
                                     <li><a href='?page=paneluser&amp;option=OPEN_TICKET' onmouseover="show_permission('GSUP','{#OPEN_TICKET_FREE}','{#OPEN_TICKET_VIP_S}','{#OPEN_TICKET_VIP_G}','{#OPEN_TICKET_VIP_3}','{#OPEN_TICKET_VIP_4}','{#OPEN_TICKET_VIP_5}');" onmouseout="clear_permission('GSUP');">Abrir Pedidos</a></li>
                                     <li><a href='?page=paneluser&amp;option=READ_TICKET' onmouseover="show_permission('GSUP','{#READ_TICKET_FREE}','{#READ_TICKET_VIP_S}','{#READ_TICKET_VIP_G}','{#READ_TICKET_VIP_3}','{#READ_TICKET_VIP_4}','{#READ_TICKET_VIP_5}');" onmouseout="clear_permission('GSUP');">Ver Pedidos</a></li>
                                     <li><a href='?page=paneluser&amp;option=SEND_SMS' onmouseover="show_permission('GSUP','{#SEND_SMS_FREE}','{#SEND_SMS_VIP_S}','{#SEND_SMS_VIP_G}','{#SEND_SMS_VIP_3}','{#SEND_SMS_VIP_4}','{#SEND_SMS_VIP_5}');" onmouseout="clear_permission('GSUP');">Enviar SMS para os ADMs</a></li>
                                </ul>
                            <span id='option_permission_GSUP'></span>
                            </div>
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