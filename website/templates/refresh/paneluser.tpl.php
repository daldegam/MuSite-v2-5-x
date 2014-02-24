{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 					
                    <h1>Minha Conta</h1>
                    <div class='quadros'>
                    <div align='center'><strong>Status da minha conta</strong></div>
                    
                        <em>Conta no plano:</em> <strong>{#ACCOUNT_PLAN_DATAILS}</strong><br />
                        <em>Saldo de {#CASH_NAME}:</em> <strong>{#ACCOUNT_CASH}</strong><br />
                        <em>Saldo de {#CASH_NAME2}:</em> <strong>{#ACCOUNT_CASH2}</strong><br />
                        <em>Ultima conexão em:</em> <strong>{#LAST_CONNECTION_DETAILS}</strong><br />
                        <em>Ultima conexão pelo IP:</em> <strong>{#LAST_CONNECTION_DETAILS_IP}</strong><br /><br />
                        <!-- Ban account details begin --> 
                        {#BAN_ACCOUNT_DATAILS}
                        <!-- Ban account details end -->
                        <div align='center'><strong>Status dos meus personagens</strong>
                        <table border='0' width='50%'>
                        <tr>
                            <td><strong><em>Personagem</em></strong></td>
                            <td><strong><em>Classe</em></strong></td>
                            <td><strong><em>Resets</em></strong></td>
                            <td><strong><em>PK</em></strong></td>
                        </tr>
                        {#CHARACTER_DETAILS}
                       </table>
                        <!-- Ban characters details begin --> 
                        {#BAN_CHARACETERS_DATAILS}
                        <!-- Ban characters details end -->
                       </div>
                    </div>
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
