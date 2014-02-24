<script type="text/javascript">
                function AbreMenu(nome_div)
                {
                var div = "";
                var menus = 4;
                    for (var i=1; i < menus; i++)
                    {
                    div = "div"+i;
                    document.getElementById(div).style.display = "none"; 
                        if (div == nome_div)
                        {
                        document.getElementById(nome_div).style.display = "block"; 
                        }
                    }
                }
                </script>
                    <p class='qdestaques2'>
                     <a href="?page=panelgamemaster">AdminCenter</a>&nbsp;|
                     <a href="javascript:AbreMenu('div1')">Gerenciar contas</a>&nbsp;|
                     <a href="javascript:AbreMenu('div2')">Gerenciar personagens</a>&nbsp;|
                     <a href="javascript:AbreMenu('div3')">Suporte</a>
                    </p>
                    <div class='qdestaques2' id='div1' style='display:none'>
                     <a href='?page=panelgamemaster&amp;option=MANAGER_BAN_ACCOUNT'>Banir / Desbanir conta</a>
                    </div>
                    <div class='qdestaques2' id='div2' style='display:none'>
                     <a href='?page=panelgamemaster&amp;option=MANAGER_BAN_CHARACTER'>Banir / Desbanir personagem</a>
                    </div>
                    <div class='qdestaques2' id='div3' style='display:none'>
                     <a href='?page=panelgamemaster&amp;option=COMPLAINTS'>Denuncias</a>&nbsp;|
                     <a href='?page=panelgamemaster&amp;option=TICKETS_OPERATION'>Tickets Abertos</a>&nbsp;|
                     <a href='?page=panelgamemaster&amp;option=TICKETS_COMPLETING'>Tickets Encerrados</a>
                    </div>