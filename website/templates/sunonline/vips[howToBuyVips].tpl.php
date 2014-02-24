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
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>VIP</strong>
                </div>
                <h3 class="subtitle">Planos Vip</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    <div class="legend" style="margin-bottom: 25px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Selecione a opção desejada abaixo</span></h3>
                          <div style="margin-bottom: 8px; margin-top: 10px;">
                            <ul>
                                <li><a href="?page=vips&amp;option=advantages">Vantagens de ser um player vip</a></li>
                                <li><a href="?page=vips&amp;option=howToBuy">O que &eacute; {#CASH_NAME} e como comprar {#CASH_NAME}</a></li>
                                <li><a href="?page=vips&amp;option=howToBuyVips">Como Comprar vip</a></li>
                                <li><a href="?page=paneluser&amp;option=BUY_VIPS">Clique aqui para comprar o vip</a></li>
                                <li><a href="?page=vips&amp;option=howToBuy">Dados para dep&oacute;sito</a></li>
                            </ul>
                          </div>
                      </div>
                </div>
                
                <div id="etc">
                    <h1>Como Comprar vip</h1>
                      
                    <ul style="margin-bottom: 20px;">
                        <li><strong>Como posso Comprar vip?</strong></li>
                        <li style="list-style-image: none; list-style: none;">Para comprar seu vip &eacute; muito simples! <br />Voc&ecirc; deve possuir uma determinada de {#CASH_NAME} para efetuar a compra do mesmo.</li>
                     </ul>
                             
                     <div class="legend" style="margin-bottom: 10px;">
                        <h3 class="legend-title"><span style="font-size: 13px;">Tabela de Pre&ccedil;os:</span></h3>
                        <div style="margin-bottom: 8px; margin-top: 10px;">
                            
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?>
                            <ul>
                                <li>{#VIP_NAME_1} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPSILVER_30_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_1} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_90_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_1} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_180_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_1} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPSILVER_365_DAYS}</strong> {#CASH_NAME}</li>
                            </ul>
                            <?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?>
                            <ul>
                                <li>{#VIP_NAME_2} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPGOLD_30_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_2} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_90_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_2} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_180_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_2} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPGOLD_365_DAYS}</strong> {#CASH_NAME}</li>
                            </ul>
                            <?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?>
                            <ul>
                                <li>{#VIP_NAME_3} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP3_30_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_3} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP3_90_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_3} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP3_180_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_3} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP3_365_DAYS}</strong> {#CASH_NAME}</li>
                            </ul>
                            <?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?>
                            <ul>
                                <li>{#VIP_NAME_4} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP4_30_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_4} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP4_90_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_4} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP4_180_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_4} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP4_365_DAYS}</strong> {#CASH_NAME}</li>
                            </ul>
                            <?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?>
                            <ul>
                                <li>{#VIP_NAME_5} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP5_30_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_5} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP5_90_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_5} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP5_180_DAYS}</strong> {#CASH_NAME}</li>
                                <li>{#VIP_NAME_5} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP5_365_DAYS}</strong> {#CASH_NAME}</li>
                            </ul>
                            <?php endif; ?>
                         </div>
                     </div>
                     
                     <ul>
                         <li>Caso voc&ecirc; n&atilde;o saiba como conseguir {#CASH_NAME}, Clique <a href='?page=vips&amp;option=howToBuy'><strong>aqui</strong></a>.</li>
                         <li>Para ver as Vantagens de ser vip, Clique <a href='?page=vips&amp;option=advantages'><strong>aqui</strong></a>.</li>
                         <li><a href='?page=paneluser&amp;option=BUY_VIPS'><strong>Clique aqui para comprar seu vip</strong></a>.</li>
                     </ul>
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