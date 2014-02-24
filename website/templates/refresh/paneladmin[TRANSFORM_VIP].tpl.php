{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1> 
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Transformar Vips</h1>
                    <div class='quadros'>
                      <form action="?page=paneladmin&amp;option=TRANSFORM_VIP&amp;Write=true" method="post">
                       	<em>Login:</em><br /><input name="account" type="text" value="" /> <br />                                                                   
                       	<input type="submit" value="Prosseguir." class="button" />
                      </form>
                    </div>
                    {#RESULTTPL}
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
