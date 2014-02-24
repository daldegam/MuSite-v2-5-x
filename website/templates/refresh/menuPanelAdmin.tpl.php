<script type="text/javascript">
                function AbreMenu(nome_div)
                {
                var div = "";
                var menus = 13;
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
                     <a href="?page=paneladmin">AdminCenter</a>&nbsp;|
                     <a href="/ldManager">ldManager</a>&nbsp;|
                     <a href="javascript:AbreMenu('div1')">Gerenciar banco de dados</a>&nbsp;|
                     <a href="javascript:AbreMenu('div11')">Ferramentas para o jogo</a>&nbsp;|
                     <a href="javascript:AbreMenu('div2')">Gerenciar contas</a>&nbsp;|
                     <a href="javascript:AbreMenu('div3')">Gerenciar personagens</a>&nbsp;|
                     <a href="javascript:AbreMenu('div4')">Gerenciar vips</a>&nbsp;|
                     <a href="javascript:AbreMenu('div5')">Gerenciar noticias</a>&nbsp;|
                     <a href="javascript:AbreMenu('div10')">Gerenciar enquetes</a>&nbsp;|
                     <a href="javascript:AbreMenu('div6')">Gerenciar {#CASH_NAME}</a>&nbsp;|
                     <a href="javascript:AbreMenu('div7')">Gerenciar Depósitos</a>&nbsp;|
                     <a href="javascript:AbreMenu('div12')">Gerenciar leilões</a>&nbsp;|
                     <a href="javascript:AbreMenu('div8')">Suporte</a>&nbsp;|
                     <a href="javascript:AbreMenu('div9')">Outros</a>
                    </p>
                    <div class='qdestaques2' id='div1' style='display:none'>
                     <a href='?page=paneladmin&amp;option=GERATE_BACKUPS'>Gerar backups</a>
                    </div>
                    <div class='qdestaques2' id='div11' style='display:none'> 
                     <a href='?page=paneladmin&amp;option=GAME_MSG_ALL'>Enviar mensagem global para todos online</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=GAME_MSG_SPECIFIC'>Enviar mensagem para determinados logins online</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=GAME_DISCONNECT'>Desconectar contas onlines</a>&nbsp;|<a href='?page=paneladmin&amp;option=GAME_CHAT_SERVER'>Ver Chat em tempo real</a>
                    </div>
                    <div class='qdestaques2' id='div12' style='display:none'> 
                     <a href='?page=paneladmin&amp;option=ADD_AUCTIONS'>Adicionar leilão</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=EDIT_AUCTIONS'>Modificar leilão</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=DELETE_AUCTIONS'>Remover leilão</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=CLOSE_AUCTIONS'>Fechar leilão</a>
                    </div>
                    <div class='qdestaques2' id='div2' style='display:none'>
                     <a href='?page=paneladmin&amp;option=EDIT_ACCOUNT'>Editar conta</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=DELETE_ACCOUNT'>Deletar conta</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=MANAGER_BAN_ACCOUNT'>Banir / Desbanir conta</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=MANAGER_ACCOUNTS_TRANSFER_CASH'>Liberar / Travar conta para transferir {#CASH_NAME}/{#CASH_NAME2}</a>
                    </div>
                    <div class='qdestaques2' id='div3' style='display:none'>
                     <a href='?page=paneladmin&amp;option=EDIT_CHARACTER'>Editar personagem</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=DELETE_CHARACTER'>Deletar personagem</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=MANAGER_BAN_CHARACTER'>Banir / Desbanir personagem</a>
                    </div>
                    <div class='qdestaques2' id='div4' style='display:none'>
                     <a href='?page=paneladmin&amp;option=ADD_VIP'>Adicionar Vips</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=DELETE_VIP'>Remover Vips</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=TRANSFORM_VIP'>Transformar plano do vip</a>
                    </div>
                    <div class='qdestaques2' id='div5' style='display:none'>
                     <a href='?page=paneladmin&amp;option=ADD_NOTICE'>Adicionar noticia</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=REMOVE_NOTICE'>Remover noticia</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=MODIFY_NOTICE'>Alterar noticia</a>
                    </div>
                    <div class='qdestaques2' id='div10' style='display:none'>
                     <a href='?page=paneladmin&amp;option=ADD_POLL'>Adicionar enquete</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=REMOVE_POLL'>Remover enquete</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=MODIFY_POLL'>Alterar enquete</a>
                    </div>
                    <div class='qdestaques2' id='div6' style='display:none'>
                     <a href='?page=paneladmin&amp;option=ADD_CASH'>Adicionar {#CASH_NAME}</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=REMOVE_CASH'>Remover {#CASH_NAME}</a>
                    </div>
                    <div class='qdestaques2' id='div7' style='display:none'>
                     <a href='?page=paneladmin&amp;option=DEPOSITS_IN_OPERATION'>Depósitos em andamento</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=DEPOSITS_COMPLETING'>Depósitos concluidos</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=DEPOSITS_FALSE'>Depósitos falsos</a>
                    </div>
                    <div class='qdestaques2' id='div8' style='display:none'>
                     <a href='?page=paneladmin&amp;option=COMPLAINTS'>Denuncias</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=TICKETS_OPERATION'>Tickets Abertos</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=TICKETS_COMPLETING'>Tickets Encerrados</a>
                    </div>
                    <div class='qdestaques2' id='div9' style='display:none'>
                     <a href='?page=paneladmin&amp;option=VERIFY_UPDATE'>Verificar atualização</a>&nbsp;|
                     <a href='?page=paneladmin&amp;option=GOLDEN_ARCHER'>Golden Archer</a>
                    </div>