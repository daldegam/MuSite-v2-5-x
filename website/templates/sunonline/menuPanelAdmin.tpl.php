<script type="text/javascript">
function show_permission(area,free,vips,vipg) {
    if(free == 1) var permission_free = "<span style='color:#009400'>Sim</span>"; else var permission_free = "<span style='color:#BB0000'>Não</span>";
    if(vips == 1) var permission_vips = "<span style='color:#009400'>Sim</span>"; else var permission_vips = "<span style='color:#BB0000'>Não</span>";
    if(vipg == 1) var permission_vipg = "<span style='color:#009400'>Sim</span>"; else var permission_vipg = "<span style='color:#BB0000'>Não</span>";
    document.getElementById('option_permission_'+area).innerHTML = "<div style='margin-left: 20px; margin-top: 10px; margin-bottom: 10px;'>Permissões da Opção:<br/> - Free: "+permission_free+"<br/> - {#VIP_NAME_1}: "+permission_vips+"<br/> - {#VIP_NAME_2}: "+permission_vipg+"</div>";
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
                                    <div id="menu_cp">
                                       <ul>
                                            <li><a href="?page=paneladmin">AdminCenter</a></li>
                                            <li><a href="ldManager/">ldManager</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div1')">Gerenciar banco de dados</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div11')">Ferramentas para o jogo</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div2')">Gerenciar contas</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div3')">Gerenciar personagens</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div4')">Gerenciar vips</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div5')">Gerenciar noticias</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div10')">Gerenciar enquetes</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div6')">Gerenciar {#CASH_NAME}</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div7')">Gerenciar Depósitos</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div12')">Gerenciar leilões</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div8')">Suporte</a></li>
                                            <li><a href="javascript:;" onclick="javascript:AbreMenu('div9')">Outros</a></li>
                                       </ul>
                                   </div>
                                         
                                   <div id='div1' style="display: none;">
                                       <div id="menu_cp">
                                           <ul>
                                            <li><a href='?page=paneladmin&amp;option=GERATE_BACKUPS'>Gerar backups</a></li>
                                        </ul>
                                    <span id='option_permission_GMC'></span>
                                    </div>
                                  </div>
                                  
                                   <div id='div11' style="display: none;">
                                       <div id="menu_cp">
                                           <ul>
                                            <li><a href='?page=paneladmin&amp;option=GAME_MSG_ALL'>Enviar mensagem global para todos online</a></li>
                                            <li><a href='?page=paneladmin&amp;option=GAME_MSG_SPECIFIC'>Enviar mensagem para determinados logins online</a></li>
                                            <li><a href='?page=paneladmin&amp;option=GAME_DISCONNECT'>Desconectar contas onlines</a></li>
                                            <li><a href='?page=paneladmin&amp;option=GAME_CHAT_SERVER'>Ver Chat em tempo real</a></li>
                                        </ul>
                                    <span id='option_permission_GMC'></span>
                                    </div>
                                  </div>
                                  
                                  
                                   <div id='div12' style="display: none;">
                                       <div id="menu_cp">
                                           <ul>
                                            <li><a href='?page=paneladmin&amp;option=ADD_AUCTIONS'>Adicionar leilão</a></li>
                                            <li><a href='?page=paneladmin&amp;option=EDIT_AUCTIONS'>Modificar leilão</a></li>
                                            <li><a href='?page=paneladmin&amp;option=DELETE_AUCTIONS'>Remover leilão</a></li>
                                            <li><a href='?page=paneladmin&amp;option=CLOSE_AUCTIONS'>Fechar leilão</a></li>
                                        </ul>
                                    <span id='option_permission_GMC'></span>
                                    </div>
                                  </div>
                                  
                              
                              <div id='div2' style='display:none'> 
                                  <div id="menu_cp"> 
                                    <ul>  
                                         <li><a href='?page=paneladmin&amp;option=EDIT_ACCOUNT'>Editar conta</a></li>
                                         <li><a href='?page=paneladmin&amp;option=DELETE_ACCOUNT'>Deletar conta</a></li>
                                         <li><a href='?page=paneladmin&amp;option=MANAGER_BAN_ACCOUNT'>Banir / Desbanir conta</a></li>
                                         <li><a href='?page=paneladmin&amp;option=MANAGER_ACCOUNTS_TRANSFER_CASH'>Liberar / Travar conta para transferir {#CASH_NAME}/{#CASH_NAME2}</a></li>
                                     </ul>
                                     <span id='option_permission_GP'></span>
                                  </div>
                                </div>
                                
                            <div id='div3' style='display:none'>
                                <div id="menu_cp">
                                     <ul>
                                         <li><a href='?page=paneladmin&amp;option=EDIT_CHARACTER'>Editar personagem</a></li>
                                        <li><a href='?page=paneladmin&amp;option=DELETE_CHARACTER'>Deletar personagem</a></li>
                                        <li><a href='?page=paneladmin&amp;option=MANAGER_BAN_CHARACTER'>Banir / Desbanir personagem</a></li>
                                      </ul>
                                </div>
                           </div>
                           
                           <div id='div4' style='display:none'>
                                <div id="menu_cp">
                                     <ul>
                                         <li><a href='?page=paneladmin&amp;option=ADD_VIP'>Adicionar Vips</a></li>
                                        <li><a href='?page=paneladmin&amp;option=DELETE_VIP'>Remover Vips</a></li>
                                        <li><a href='?page=paneladmin&amp;option=TRANSFORM_VIP'>Transformar plano do vip</a></li>
                                      </ul>
                                </div>
                           </div>
                           
                           <div id='div5' style='display:none'>
                                <div id="menu_cp">
                                     <ul>
                                         <li><a href='?page=paneladmin&amp;option=ADD_NOTICE'>Adicionar noticia</a></li>
                                         <li><a href='?page=paneladmin&amp;option=REMOVE_NOTICE'>Remover noticia</a></li>
                                         <li><a href='?page=paneladmin&amp;option=MODIFY_NOTICE'>Alterar noticia</a></li>
                                      </ul>
                                </div>
                           </div>
                           
                           <div id='div10' style='display:none'>
                                <div id="menu_cp">
                                     <ul>
                                         <li><a href='?page=paneladmin&amp;option=ADD_POLL'>Adicionar enquete</a></li>
                                         <li><a href='?page=paneladmin&amp;option=REMOVE_POLL'>Remover enquete</a></li>
                                         <li><a href='?page=paneladmin&amp;option=MODIFY_POLL'>Alterar enquete</a></li>
                                      </ul>
                                </div>
                           </div> 
                           
                           <div id='div6' style='display:none'>
                                <div id="menu_cp">
                                     <ul>
                                         <li><a href='?page=paneladmin&amp;option=ADD_CASH'>Adicionar {#CASH_NAME}</a></li>
                                         <li><a href='?page=paneladmin&amp;option=REMOVE_CASH'>Remover {#CASH_NAME}</a></li>
                                      </ul>
                                </div>
                           </div>
                           
                           <div id='div7' style='display:none'>
                                <div id="menu_cp">
                                     <ul>
                                         <li><a href='?page=paneladmin&amp;option=DEPOSITS_IN_OPERATION'>Depósitos em andamento</a></li>
                                         <li><a href='?page=paneladmin&amp;option=DEPOSITS_COMPLETING'>Depósitos concluidos</a></li>
                                        <li><a href='?page=paneladmin&amp;option=DEPOSITS_FALSE'>Depósitos falsos</a></li>
                                      </ul>
                                </div>
                           </div>
                           
                           <div id='div8' style='display:none'>
                                <div id="menu_cp">
                                     <ul>
                                         <li><a href='?page=paneladmin&amp;option=COMPLAINTS'>Denuncias</a></li>
                                        <li><a href='?page=paneladmin&amp;option=TICKETS_OPERATION'>Tickets Abertos</a></li>
                                        <li><a href='?page=paneladmin&amp;option=TICKETS_COMPLETING'>Tickets Encerrados</a></li>
                                      </ul>
                                </div>
                           </div>
                           
                            <div id='div9' style='display:none'>
                                <div id="menu_cp">
                                     <ul>
                                         <li><a href='?page=paneladmin&amp;option=VERIFY_UPDATE'>Verificar atualização</a></li>
                                         <li><a href='?page=paneladmin&amp;option=GOLDEN_ARCHER'>Golden Archer</a></li>
                                      </ul>
                                </div>
                           </div>