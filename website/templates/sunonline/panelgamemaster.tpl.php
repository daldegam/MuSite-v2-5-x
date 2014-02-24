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
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>PAINEL DO GAME MASTER</strong>
                </div>
                <h3 class="subtitle">Painel do game master</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    {#INCLUDE:menuPanelGamemaster} 
                            
                    <h1 style="margin-top: 20px;">AdminCenter</h1>
                    
                    <div class="legend" style="margin-top: 25px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Informações do computador.</span></h3>
                         <ul style="margin: 10px 0px 10px 0px;">
                           <li>Sistema operacional base: <strong>{#OS_DATAILS}</strong></li>
                           <li>Software versão: <strong>{#SOFTWARE_VERSION_DATAILS}</strong></li>
                           <li>Administrador do servidor web: <strong>{#ADMIN_WEB_SERVER_EMAIL}</strong></li>
                        </ul>
                    </div>
                        
                        
                    <div class="legend" style="margin-top: 25px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Informações do banco de dados.</span></h3>
                         <ul style="margin: 10px 0px 10px 0px;">
                           <li>Total de contas: <strong>{#TOTAL_ACCOUNTS}</strong></li>
                           <li>Total de Personagens: <strong>{#TOTAL_CHARATERS}</strong></li>
                           <li>Recorde Online: <strong>{#RECORD_ONLINE}</strong></li>
                           <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><li>{#VIP_NAME_1}: <strong>{#TOTAL_ACCOUNTS_VIP_SILVER}</strong></li><?php endif; ?>
                           <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><li>{#VIP_NAME_2}: <strong>{#TOTAL_ACCOUNTS_VIP_GOLD}</strong></li><?php endif; ?>
                           <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><li>{#VIP_NAME_3}: <strong>{#TOTAL_ACCOUNTS_VIP_3}</strong></li><?php endif; ?>
                           <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><li>{#VIP_NAME_4}: <strong>{#TOTAL_ACCOUNTS_VIP_4}</strong></li><?php endif; ?>
                           <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><li>{#VIP_NAME_5}: <strong>{#TOTAL_ACCOUNTS_VIP_5}</strong></li><?php endif; ?>
                           <li>Personagens Banidos: <a href="?page=banned&amp;type=characters"><strong>{#TOTAL_CHARACTERS_BANNEDS}</strong></a></li>
                           <li>Contas Banidas: <a href="?page=banned&amp;type=accounts"><strong>{#TOTAL_ACCOUNTS_BANNEDS}</strong></a></li>
                         </ul>
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