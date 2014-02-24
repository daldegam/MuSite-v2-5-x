{#INCLUDE:header}		

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do gamemaster</h1>
                {#INCLUDE:menuPanelGamemaster}
                    <br /> 						
                    <h1>Banir / Desbanir personagem</h1>
                    <div class='quadros'>
                      <form action="?page=panelgamemaster&amp;option=MANAGER_BAN_CHARACTER&amp;Write=true" method="post">
                       	<em>Personagem:</em><br /><input name="character" type="text" value="" /> <br />
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