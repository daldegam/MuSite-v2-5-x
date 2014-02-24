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
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>RECUPERAR SENHA</strong>
                </div>
                <h3 class="subtitle">Recuperar senha</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    <div class="legend" style="margin-bottom: 25px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Informe os dados abaixo:</span></h3>
                          <div style="margin-bottom: 8px; margin-top: 10px;">
                                <div style="margin-top: 16px; margin-bottom: 16px; padding-left: 5px;" id="classe_change">
                                   <form action="?page=recovery&amp;type=password&amp;Write=true" method="post">
                                    Digite o seu login: <input class="inputbox" name="account" type="text" />
                                    <input type="submit" value="Recuperar" class="button" />
                                  </form>
                                </div>
                             {#ResultTpl}
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