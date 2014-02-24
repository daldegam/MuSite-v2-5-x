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
                            
                    <h1 style="margin-top: 20px;">Ver Chat em tempo real</h1>
                    
                    <div class="legend" style="margin-top: 25px; padding: 10px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Preencha os dados abaixo:</span></h3>
                          <table border='0' width='100%'>
                              <tr>
                               <td colspan='2' bgcolor='#E2DEC5'>
                                    <input type="button" value="Atualizar" onclick="window.location = '?page=paneladmin&amp;option=GAME_CHAT_SERVER&amp;loadLasts='+ document.getElementById('loadLasts').value ;" /> 
                                    <input type="button" value="Apagar log" onclick="window.location = '?page=paneladmin&amp;option=GAME_CHAT_SERVER&amp;action=clearLog&amp;loadLasts='+ document.getElementById('loadLasts').value ;" />
                                    &nbsp;&nbsp;|&nbsp;&nbsp;
                                    Mostrar ultimos: <input type="text" id="loadLasts" value="<?php echo (isset($_GET['loadLasts']) == false ? 50 : $_GET['loadLasts']); ?>" /> 
                                    <input type="button" value="Carregar" onclick="window.location = '?page=paneladmin&amp;option=GAME_CHAT_SERVER&amp;loadLasts='+ document.getElementById('loadLasts').value ;" />
                               </td>
                              </tr> 
                          </table>
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