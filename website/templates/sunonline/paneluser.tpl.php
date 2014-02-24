{#INCLUDE:header} 

        <!-- Body -->
        <div id="subbody">

        <!-- Left Wrap --> 
            <!-- Body Left -->
            {#INCLUDE:menuLeft}
            <!-- //Body Left --> 
        <!-- //Left Wrap -->

        <!-- Right Wrap -->
        <div id="subright">
                                             
            <!-- Location & Sub Title -->
            <div class="locationtitle">
                <div class="location">
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>PAINEL DO USUÁRIO</strong>
                </div>
                <h3 class="subtitle">Painel do usuário</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    {#INCLUDE:menuPanelUser} 
                            
                    <h1 style="margin-top: 20px;">Minha Conta</h1>
                        
                       <div class="legend" style="margin-top: 25px;">
                          <h3 class="legend-title"><span style="font-size: 13px;">Status da minha conta</span></h3>
                             <ul style="margin: 10px 0px 10px 0px;">
                                <li>Conta no plano: <strong>{#ACCOUNT_PLAN_DATAILS}</strong></li>
                                <li>Saldo de {#CASH_NAME}: <strong>{#ACCOUNT_CASH}</strong></li>
                                <li>Saldo de {#CASH_NAME2}: <strong>{#ACCOUNT_CASH2}</strong></li>
                                <li>Saldo de {#POINTS_NAME}: <strong>{#ACCOUNT_POINTS}</strong></li>
                                <li>Ultima conexão em: <strong>{#LAST_CONNECTION_DETAILS}</strong></li>
                                <li>Ultima conexão pelo IP: <strong>{#LAST_CONNECTION_DETAILS_IP}</strong></li>
                                <!-- Ban account details begin --> 
                                {#BAN_ACCOUNT_DATAILS}
                                <!-- Ban account details end -->
                             </ul>
                       </div>
                       
                       <div class="legend" style="margin-top: 25px;">
                          <h3 class="legend-title"><span style="font-size: 13px;">Status dos meus personagens</span></h3>
                            <div style="margin-bottom: 8px; margin-top: 10px;">
                                <table border='0' width='50%'>
                                <tr>
                                    <td align="center"><strong>Personagem</strong></td>
                                    <td align="center"><strong>Classe</strong></td>
                                    <td align="center"><strong>Resets</strong></td>
                                    <td align="center"><strong>PK</strong></td>
                                </tr>
                                {#CHARACTER_DETAILS}
                                </table>
                                <!-- Ban characters details begin --> 
                                {#BAN_CHARACETERS_DATAILS}
                                <!-- Ban characters details end -->
                            </div>
                     </div>
                            
                </div>           
            </div>
            <!-- //Content -->

        </div>
        <!-- //Right Wrap -->
               
    </div>     
    <!-- //Body -->

     
        <!-- Footer -->
                          
<div id="subbottomPanel"></div>
{#INCLUDE:footer}