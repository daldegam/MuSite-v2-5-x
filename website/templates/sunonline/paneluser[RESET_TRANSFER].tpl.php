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
                            
                    <h1 style="margin-top: 20px;">Transferir resets</h1>
                    <br />
                    
                    <div id="etc">
                        <div class="legend" style="margin-bottom: 25px;">
                            <h3 class="legend-title"><span style="font-size: 13px;">Escolha o personagem:</span></h3>
                            <div style="margin-bottom: 8px; margin-top: 10px;">
                            <form action="?page=paneluser&amp;option=RESET_TRANSFER&amp;Write=true" method="post">
                            <strong>Personagem de origem:&nbsp;</strong>
                                 <select name='character1' class="inputbox">
                                     <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                                     {#CHARACTER_LIST_TAG_OPTION}
                                 </select>
                                 &nbsp;&nbsp;&nbsp;
                            <strong>Personagem de destino:</strong> 
                                 <select name='character2' class="inputbox">
                                     <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                                     {#CHARACTER_LIST_TAG_OPTION}
                                 </select>
                            <input type='submit' value="Carregar" class="button" />
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
