{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1> 
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Deletar personagem</h1>
                    <div class='quadros'>
                      <form action="?page=paneladmin&amp;option=DELETE_CHARACTER&amp;Write=true" method="post">
                       	<em>Personagem:</em> <input name="character" type="text" value="" /> <input type="submit" value="Deletar personagem." class="button" />
                      </form>
                    </div>
                    {#RESULTTPL}
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}