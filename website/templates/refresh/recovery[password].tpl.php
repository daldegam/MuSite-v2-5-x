{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                  <h1>Recuperar Senha</h1>
                  <div class="quadros">
				  <form action="?page=recovery&amp;type=password&amp;Write=true" method="post">
				  	Digite o seu login: <input name="account" type="text" />
					<input type="submit" value="Recuperar" class="button" />
				  </form>
                  </div>
				  {#ResultTpl}
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}