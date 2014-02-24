{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1> 
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Golden Archer</h1>
                    
                    <div class="legend" style="margin-top: 25px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Selecione a opção desejada abaixo</span></h3>
                         <ul style="margin: 10px 0px 10px 0px;">
                           <li><a href="?page=paneladmin&option=GOLDEN_ARCHER&action=createSerial">Criar serial para um determinado login</a></li>
                        </ul>
                    </div>
                        
                    <div class="legend" style="margin-top: 25px;">
                        {#RESPONSE_WRITE}
                    </div>
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
