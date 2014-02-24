{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Desconectar conta</h1>
                    <p><strong>Essa opção irá desconectar sua conta do jogo.</strong></p>
                    <form action="?page=paneluser&amp;option=GAME_DISCONNECT&amp;Write=true" method="post">
                        <p>
                            <label>Minha senha:</label>
                            <input name='password' type='password' maxlength='10' />
                        </p>
                        <p>
                            <input type='submit' value='Desconectar' class='button' />
                        </p>
                    </form> 
       
                    <div style="margin-top: 16px; margin-bottom: 16px; padding-left: 5px;" id="classe_change">
                       {#RespostWrite}
                    </div>    
                </div>
                
                {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
