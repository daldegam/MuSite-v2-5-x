{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1>
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Remover notícia</h1>
                    <div class='quadros'>
                      <form action="?page=paneladmin&amp;option=REMOVE_NOTICE&amp;Write=true" method="post">
                       	<em>Titulo:</em><br /><select name="id">{#OPTIONS_ID_SELECT}</select> <br />
                        <input type="submit" value="Remover." class="button" />
                      </form>
                    </div>
                    {#RESULTTPL}
                </div>
                
                {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
