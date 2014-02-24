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
                            
                    <h1 style="margin-top: 20px;">Log de compras</h1>
                    <br />
                    <div class="legend" style="margin-bottom: 25px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Selecione o log desejado abaixo:</span></h3>
                          <div style="margin-bottom: 8px; margin-top: 10px;">
                            <ul>
                                <li><em>Gerar log de compras de:</em> <a href="?page=paneluser&amp;option=LOG_BUYS&amp;Write=1"><strong>{#CASH_NAME}</strong></a></li>
                                <li><em>Gerar log de compras de:</em> <a href="?page=paneluser&amp;option=LOG_BUYS&amp;Write=2"><strong>Vips</strong></a></li>
                            </ul>
                          </div>
                    </div> 
                    
                    <div id="logs_">
                        {#RespostWrite}
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