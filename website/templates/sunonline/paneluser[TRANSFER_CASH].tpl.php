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
                            
                    <h1 style="margin-top: 20px;">Transferir {#CASH_NAME}/{#CASH_NAME2}</h1>
                    <br />
                    
                    
                    <div id="etc" style="margin-bottom: 26px;">
                    {#RespostWrite}
                    </div>

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
            <!-- //Content -->

        </div>
        <!-- //Right Wrap -->
               
    </div>     
    <!-- //Body -->

     
        <!-- Footer -->
                          
<div id="subbottomPanel"></div>
{#INCLUDE:footer}