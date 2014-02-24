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
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>PAINEL DO ADMIN</strong>
                </div>
                <h3 class="subtitle">Painel do admin</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    {#INCLUDE:menuPanelAdmin} 
                            
                    <h1 style="margin-top: 20px;">Enviar mensagem para todos online</h1>
                    
                    <div class="legend" style="margin-top: 25px; padding: 10px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Preencha os dados abaixo:</span></h3>
                         <div class="quadrosOut">
                            {#RESULTTPL}
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