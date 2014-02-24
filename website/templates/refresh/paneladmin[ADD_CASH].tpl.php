{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1> 
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Adcionar {#CASH_NAME}</h1>
                    <div class='quadros'>
                      <form action="?page=paneladmin&amp;option=ADD_CASH&amp;Write=true" method="post">
                       	<em>Login:</em><br /><input name="account" type="text" value="" /> <br />
                        <em>Moeda a ser alterada:</em><br /><select name="type"> <option value="1">{#CASH_NAME}</option> <option value="2">{#CASH_NAME2}</option> </select> <br />
                        <em>Valor:</em><br /><input name="amount" type="text" class="inputbox" value="0" /><br /> 
                        <input type="submit" value="Adicionar." class="button" />
                      </form>
                    </div>
                    {#RESULTTPL}
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
