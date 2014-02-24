{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1>
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Remover Enquete</h1>
                    <div class='quadros'>
                        <h2>Listando enquetes do sistema</h2> 
                        {#POLL_RESULT_ADMIN}
                    </div>                  
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
