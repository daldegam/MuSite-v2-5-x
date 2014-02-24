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
                            
                    <h1 style="margin-top: 20px;">Enviar SMS</h1>
                    <br />
                    
                    <div id="etc"> 
                        <div class="legend" style="margin-bottom: 25px;">
                          <h3 class="legend-title"><span style="font-size: 13px;">Preencha os dados abaixo para enviar o SMS:</span></h3>
                              <div style="margin-bottom: 8px; margin-top: 10px;">
                                    <form action='?page=paneluser&amp;option=SEND_SMS&amp;Write=true' method='post'>
                                    <table style="width: 100%;">
                                      <tr><td colspan='4' align='center' style="background: none;"><strong>Preencha os dados abaixo para enviar o SMS:</strong></td></tr>
                                      <tr>
                                        <td align='right' style="background: none;"><strong>Para: </strong></td>
                                        <td style="background: none;">{#INPUT_RADIOS_NUMBERS}</td>
                                      </tr>
                                      <tr>
                                        <td align='right' style="background: none;"><strong>Mensagem: </strong></td>
                                        <td style="background: none;"><input class="inputbox" name="mensagem" type="text" maxlength="{#MAXLENGHT}" value="Maximo {#MAXLENGHT} Caracters" size="35" /></td>
                                      </tr>
                                      <tr>
                                        <td align='center' colspan="2" style="background: none;"><input type=submit value='Enviar Mensagem' class='button' /></td>
                                      </tr>
                                    </table>
                                    </form>
                               </div>
                        </div>
                         
                        <div class="quadrosOut">
                           {#RespostWrite}
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
