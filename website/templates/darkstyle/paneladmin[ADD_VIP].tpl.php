{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Administrador <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            <div id="panelActions">
            
            <div class="contentBox">
            	<ul class="rank">
            		<li style="margin-left: 7px;">
                        <span>In&iacute;cio</span>
                        <ul>
                            <li><a href="?page=paneladmin">P&aacute;gina inicial do painel</a></li>
                            <li><a href="ldManager/">ldManager</a></li>
                            <li><a href="?page=paneladmin&option=VERIFY_UPDATE">Verificar atualiza&ccedil;&atilde;o</a></li>
                            <li><a href="?page=paneladmin&option=GERATE_BACKUPS">Gerar Backups</a></li>
                            <li><a href="?page=paneladmin&option=GOLDEN_ARCHER">Golden Archer</a></li>
                        </ul>
                	</li>
                	<li>
                        <span>Contas</span>
                        <ul>
                            <li><a href="?page=paneladmin&option=EDIT_ACCOUNT">Editar conta</a></li>
                            <li><a href="?page=paneladmin&option=DELETE_ACCOUNT">Deletar conta</a></li>
                            <li><a href="?page=paneladmin&option=MANAGER_BAN_ACCOUNT">Banir/Desbanir conta</a></li><li><a href="?page=paneladmin&option=MANAGER_ACCOUNTS_TRANSFER_CASH">Liberar / Travar conta para transferir {#CASH_NAME}/{#CASH_NAME2}</a></li>
                        </ul>
                	</li>
            		<li>
                        <span>Suporte</span>
                        <ul>
                            <li><a href="?page=paneladmin&option=COMPLAINTS">Den&uacute;ncias</a></li>
                            <li><a href="?page=paneladmin&option=TICKETS_OPERATION">Tickets Abertos</a></li>
                            <li><a href="?page=paneladmin&option=TICKETS_COMPLETING">Tickets Encerrados</a></li>
                        </ul>
                	</li>
                </ul>
                <br style="clear: both;" />
            </div>
            
            <div class="contentBox">
            	<ul class="rank">
            		<li style="margin-left: 7px;">
                        <span>Personagens</span>
                        <ul>
                            <li><a href="?page=paneladmin&option=EDIT_CHARACTER">Editar personagem</a></li>
                            <li><a href="?page=paneladmin&option=DELETE_CHARACTER">Deletar personagem</a></li>
                            <li><a href="?page=paneladmin&option=MANAGER_BAN_CHARACTER">Banir/Desbanir personagem</a></li>
                        </ul>
                	</li>
                	<li>
                        <span>Vips</span>
                        <ul>
                            <li><a href="?page=paneladmin&option=ADD_VIP">Adicionar Vip</a></li>
                            <li><a href="?page=paneladmin&option=DELETE_VIP">Remover Vip</a></li>
                            <li><a href="?page=paneladmin&option=TRANSFORM_VIP">Transformar Vip</a></li>
                        </ul>
                	</li>
                	<li>
                        <span>Not&iacute;cias</span>
                        <ul>
                            <li><a href="?page=paneladmin&option=ADD_NOTICE">Adicionar not&iacute;cia</a></li>
                            <li><a href="?page=paneladmin&option=REMOVE_NOTICE">Remover not&iacute;cia</a></li>
                            <li><a href="?page=paneladmin&option=MODIFY_NOTICE">Alterar not&iacute;cia</a></li>
                        </ul>
                    </li>
                </ul>
                <br style="clear: both;" />
            </div>
            
            <div class="contentBox">
            	<ul class="rank">
            		<li style="margin-left: 7px;">
                        <span>Enquetes</span>
                        <ul>
                            <li><a href="?page=paneladmin&option=ADD_POLL">Adicionar enquete</a></li>
                            <li><a href="?page=paneladmin&option=REMOVE_POLL">Remover enquete</a></li>
                            <li><a href="?page=paneladmin&option=MODIFY_POLL">Alterar enquete</a></li>
                        </ul>
                	</li>
                	<li>
                        <span>SGolds</span>
                        <ul>
                            <li><a href="?page=paneladmin&option=ADD_CASH">Adicionar SGolds</a></li>
                            <li><a href="?page=paneladmin&option=REMOVE_CASH">Remover Sgolds</a></li>
                        </ul>
                	</li>
                	<li>
                        <span>Dep&oacute;sitos</span>
                        <ul>
                            <li><a href="?page=paneladmin&option=DEPOSITS_IN_OPERATION">Dep&oacute;sitos em andamento</a></li>
                            <li><a href="?page=paneladmin&option=DEPOSITS_COMPLETING">Dep&oacute;sitos conclu&iacute;dos</a></li>
                            <li><a href="?page=paneladmin&option=DEPOSITS_FALSE">Dep&oacute;sitos falsos</a></li>
                            <li><a href="?page=paneladmin&amp;option=GAME_CHAT_SERVER">Ver Chat em tempo real</a></li>
                        </ul>
                    </li>
                </ul>
                <br style="clear: both;" />
            </div>
            
            <div class="contentBox">
                <ul class="rank">
                    <li style="margin-left: 7px; width: 100%;">
                        <span>Ferramentas para o jogo</span>
                        <ul>
                            <li><a href="?page=paneladmin&amp;option=GAME_MSG_ALL">Enviar mensagem global para todos online</a></li>
                            <li><a href="?page=paneladmin&amp;option=GAME_MSG_SPECIFIC">Enviar mensagem para determinados logins online</a></li>
                            <li><a href="?page=paneladmin&amp;option=GAME_DISCONNECT">Desconectar contas onlines</a></li>
                        </ul>
                    </li>
                </ul>
                <br style="clear: both;" />
            </div>
            
            </div>
            
            <div class="contentBox">
                <h2 class="noMargin">Adicionar vip</h2>
                <form action="?page=paneladmin&amp;option=ADD_VIP&amp;Write=true" method="post">
                	<p>
                        <label>Login:</label>
                        <input name="account" type="text" value="" />
                    </p>
                	<p>
                        <label>Plano:</label>
                        <select name="flat">
                            <option value="1">{#VIP_NAME_1}</option>
                            <option value="2">{#VIP_NAME_2}</option>
                            <option value="3">{#VIP_NAME_3}</option>
                            <option value="4">{#VIP_NAME_4}</option>
                            <option value="5">{#VIP_NAME_5}</option>
                        </select>
                    </p>
                    <p>
                        <label>Dias:</label>
                        <input name="days" type="text" value="0" />
                    </p>
                    <p>
                        <input type="submit" value="Adicionar" class="button" />
                    </p>
                </form>
                {#RESULTTPL}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}