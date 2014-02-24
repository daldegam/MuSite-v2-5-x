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
    var menus = 12;
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
                               <li><a href="?page=panelgamemaster">AdminCenter</a></li>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div1')">Gerenciar contas</a></li>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div2')">Gerenciar personagens</a></li>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div3')">Suporte</a></li>
                           </ul>
                        </div>
                                  
                        <div id='div1' style="display: none;">
                            <div id="menu_cp">
                                <ul>
                                    <li><a href='?page=panelgamemaster&amp;option=MANAGER_BAN_ACCOUNT'>Banir / Desbanir conta</a></li>
                                </ul>
                            <span id='option_permission_GMC'></span>
                            </div>
                        </div>
                                          
                        <div id='div2' style='display:none'> 
                            <div id="menu_cp"> 
                                <ul>  
                                    <li><a href='?page=panelgamemaster&amp;option=MANAGER_BAN_CHARACTER'>Banir / Desbanir personagem</a></li>
                                </ul>
                            <span id='option_permission_GP'></span>
                            </div>
                        </div>

                        <div id='div3' style='display:none'>
                            <div id="menu_cp">
                                <ul>
                                    <li><a href='?page=panelgamemaster&amp;option=COMPLAINTS'>Denuncias</a></li>
                                    <li><a href='?page=panelgamemaster&amp;option=TICKETS_OPERATION'>Tickets Abertos</a></li>
                                    <li><a href='?page=panelgamemaster&amp;option=TICKETS_COMPLETING'>Tickets Encerrados</a></li>
                                </ul>
                            </div>
                        </div>