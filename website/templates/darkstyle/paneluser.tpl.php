{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser}
            <div class="contentBox">
                <h2 class="noMargin">Minha conta</h2>
                <dl>
                	<dt>Conta no plano:</dt>
                    <dd>{#ACCOUNT_PLAN_DATAILS}</dd>
                    <dt>Saldo de {#CASH_NAME}:</dt>
                    <dd>{#ACCOUNT_CASH}</dd>
                    <dt>Saldo de {#CASH_NAME2}:</dt>
                    <dd>{#ACCOUNT_CASH2}</dd>
                    <dt>Saldo de {#POINTS_NAME}:</dt>
                    <dd>{#ACCOUNT_POINTS}</dd>
                    <dt>Ultima conexão em:</dt>
                    <dd>{#LAST_CONNECTION_DETAILS}</dd>
                    <dt>Ultima conexão pelo IP:</dt>
                    <dd>{#LAST_CONNECTION_DETAILS_IP}</dd>
                 </dl>
                <!-- Ban account details begin --> 
                {#BAN_ACCOUNT_DATAILS}
                <!-- Ban account details end -->
                <table class="style">
                <tr>
                    <th>Personagem</th>
                    <th>Classe</th>
                    <th>Resets</th>
                    <th>PK</th>
                </tr>
                {#CHARACTER_DETAILS}
               </table>
                <!-- Ban characters details begin --> 
                {#BAN_CHARACETERS_DATAILS}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}
