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
                            
                    <h1 style="margin-top: 20px;">Banir / Desbanir personagem</h1>
                    
                    <div class="legend" style="margin-top: 25px; padding: 10px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Preencha os dados abaixo:</span></h3>
                          <form action="?page=paneladmin&amp;option=MANAGER_BAN_CHARACTER&amp;Write=true" method="post">
                            <em>Personagem:</em><br /><input name="character" type="text" value="" class="inputbox" /> <br />
                            <em>Ação:</em><br /><select name="action" class="inputbox" ><option value="1">Banir</option><option value="2">Desbanir</option></select> <br />
                            <em>Banir em:</em><br /><input name="days" type="text" value="0" class="inputbox"  /> dias.<br />
                            <em>Motivo:</em><br /><input name="description" type="text" value="" maxlength="50" class="inputbox" /><br />
                            <input type="submit" value="Salvar." class="button" style="margin-top: 10px;" />
                          </form>
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
