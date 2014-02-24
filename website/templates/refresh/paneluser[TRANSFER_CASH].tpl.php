{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Transferir {#CASH_NAME}/{#CASH_NAME2}</h1>
                    {#RespostWrite}
                    <div class='quadros'>
                        <form action="?page=paneluser&amp;option=TRANSFER_CASH&amp;action=transfer" method="post">
                        <div class="legend" style="margin-bottom: 25px;">
                        <h3 class="legend-title"><span style="font-size: 13px;">Dados da minha conta</span></h3>
                             <div style="margin-bottom: 8px; margin-top: 10px;">
                            <em>Meu login:</em><br /><input type='text' class="inputbox" value="{#MEMB___ID}" disabled="disabled" /><br />
                            <em>Quantidade de {#CASH_NAME}:</em><br /><input type='text' class="inputbox" value="{#CASH_AMOUNT}" disabled="disabled" /><br />
                            <em>Quantidade de {#CASH_NAME2}:</em><br /><input type='text' class="inputbox" value="{#CASH_AMOUNT2}" disabled="disabled" /><br />
                            </div>
                        </div>
                              
                        <div class="legend" style="margin-bottom: 1px;">
                          <h3 class="legend-title"><span style="font-size: 13px;">Dados para trasferencia</span></h3>
                            <div style="margin-bottom: 8px; margin-top: 10px;">
                            <em>Login de destino:</em><br /><input name='usernameDestine' type='text' class="inputbox" maxlength='10' /><br />
                            <em>Tipo de moeda a transferir:</em><br /><select name='typeCash'><option value='1'>{#CASH_NAME}</option><option value='2'>{#CASH_NAME2}</option></select><br />
                            <em>Quantidade a transferir:</em><br /><input name='amount' type='text' class="inputbox" maxlength='10' /><br />
                            </div>
                        </div>
                      
                        <input type='submit' value='Transferir' class='button' style="margin-top: 6px;"/><br />
                        </form>                        
                    </div>
                </div>
                
                {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}