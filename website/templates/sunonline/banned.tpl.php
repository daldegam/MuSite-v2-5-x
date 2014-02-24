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
                    <a class="home" href="?">INÍCIO</a> &gt; <strong style="text-transform: uppercase;">{#BannedTitle}</strong>
                </div>
                <h3 class="subtitle">{#BannedTitle}</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    <table border='0' width='100%'>
                      <tr>
                       <td align='center' bgcolor='#E2DEC5'><strong>Nome</strong></td>      
                       <td align='center' bgcolor='#E2DEC5'><strong>Expira</strong></td>
                       <td align='center' bgcolor='#E2DEC5'><strong>Banidor por</strong></td>
                       <td align='center' bgcolor='#E2DEC5'><strong>Motivo</strong></td>
                      </tr>
                      {#BANNED_RESULT}
                    </table>
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