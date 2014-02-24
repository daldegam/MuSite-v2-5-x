{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1> 
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Banir / Desbanir conta</h1>
                    <div class='quadros'>
                      <form action="?page=paneladmin&amp;option=MANAGER_BAN_ACCOUNT&amp;Write=true" method="post">
                       	<em>Login:</em><br /><input name="account" type="text" value="" /> <br />
                        <em>Ou Personagem:</em><br /><input name="character" type="text" value="" /> <br />
                       	<em>Ação:</em><br /><select name="action"><option value="1">Banir</option><option value="2">Desbanir</option></select> <br />
                       	<em>Banir em:</em><br /><input name="days" type="text" value="0" /> dias.<br />
                        <em>Motivo:</em><br /><input name="description" type="text" value="" maxlength="50" /><br />
                        <input type="submit" value="Salvar." class="button" />
                      </form>
                    </div>
                    {#RESULTTPL}
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}