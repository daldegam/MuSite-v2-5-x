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
                            
                    <h1 style="margin-top: 20px;">Limpar Inventário</h1>
                    <br />
                    
                    <div id="etc">
                        <div class="legend" style="margin-bottom: 25px;">
                            <h3 class="legend-title"><span style="font-size: 13px;">Escolha o personagem:</span></h3>
                            <div style="margin-bottom: 8px; margin-top: 10px;">
                            <strong>Personagem:&nbsp;</strong>
                                <select name='personagem' class="inputbox" onchange="location='?page=paneluser&amp;option=CLEAN_INVENTORY&amp;character='+this.options[this.selectedIndex].value">
                                    <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                                    {#CHARACTER_LIST_TAG_OPTION}
                                </select>
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
