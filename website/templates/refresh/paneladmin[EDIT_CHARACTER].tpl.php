{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1> 
                 {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Editar personagem</h1>
                    <div class='quadros'>
                      <form action="?page=paneladmin&amp;option=EDIT_CHARACTER&amp;Write=true" method="post">
                       	<em>Personagem:</em> <input name="character" type="text" value="" /> <input type="submit" value="Carregar dados." class="button" />
                      </form>
                    </div>
                    {#RESULTTPL}
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}