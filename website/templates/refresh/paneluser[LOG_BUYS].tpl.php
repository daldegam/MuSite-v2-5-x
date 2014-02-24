{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Log de compras</h1>
                    <div class="quadros">
                    	<em>Gerar log de compras de:</em> <a href="?page=paneluser&amp;option=LOG_BUYS&amp;Write=1"><strong>{#CASH_NAME}</strong></a> <br />
                    	<em>Gerar log de compras de:</em> <a href="?page=paneluser&amp;option=LOG_BUYS&amp;Write=2"><strong>Vips</strong></a> <br />
                    </div>
                    {#RespostWrite}
			 
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
