{#INCLUDE:header}   
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <div class="contentBox">
                <h2 class="noMargin">Planos Vip</h2>
                <ul class="list">
                    <li><a href="?page=vips&amp;option=advantages">Vantagens de ser um player vip</a></li>
                    <li><a href="?page=vips&amp;option=howToBuy">O que &eacute; {#CASH_NAME} e como comprar {#CASH_NAME}</a></li>
                    <li><a href="?page=vips&amp;option=howToBuyVips">Como Comprar vip</a></li>
                    <li><a href="?page=paneluser&amp;option=BUY_VIPS">Clique aqui para comprar o vip</a></li>
                    <li><a href="?page=vips&amp;option=howToBuy">Dados para dep&oacute;sito</a></li>
                </ul>
            </div>
            
            <div class="contentBox">
                  	<h2 class="noMargin">Como Comprar vip</h2> 
                    <p>
                    	<strong>Como posso Comprar vip?</strong>
                    </p>
                    <p>
                    	Para comprar seu vip &eacute; muito simples! Voc&ecirc; deve possuir uma determinada de {#CASH_NAME} para efetuar a compra do mesmo.
                    </p>
                    <ul class="list">
                        <li><strong>Tabela de Pre&ccedil;os:</strong><br />
                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?>
                        <li>{#VIP_NAME_1} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPSILVER_30_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_1} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_90_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_1} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_180_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_1} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPSILVER_365_DAYS}</strong> {#CASH_NAME}</li>
                        <?php endif; ?>
                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?>
                        <li>{#VIP_NAME_2} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPGOLD_30_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_2} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_90_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_2} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_180_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_2} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPGOLD_365_DAYS}</strong> {#CASH_NAME}</li>
                        <?php endif; ?>
                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?>
                        <li>{#VIP_NAME_3} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP3_30_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_3} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP3_90_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_3} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP3_180_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_3} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP3_365_DAYS}</strong> {#CASH_NAME}</li>
                        <?php endif; ?>
                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?>
                        <li>{#VIP_NAME_4} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP4_30_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_4} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP4_90_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_4} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP4_180_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_4} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP4_365_DAYS}</strong> {#CASH_NAME}</li>
                        <?php endif; ?>
                        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?>
                        <li>{#VIP_NAME_5} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP5_30_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_5} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP5_90_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_5} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP5_180_DAYS}</strong> {#CASH_NAME}</li>
                        <li>{#VIP_NAME_5} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP5_365_DAYS}</strong> {#CASH_NAME}</li>
                        <?php endif; ?>
                     </ul>
                     <p>- Caso voc&ecirc; n&atilde;o saiba como conseguir {#CASH_NAME}, Clique <a href='?page=vips&amp;option=howToBuy'><strong>aqui</strong></a>.</p>
                     <p>- Para ver as Vantagens de ser vip, Clique <a href='?page=vips&amp;option=advantages'><strong>aqui</strong></a>.</p>
                     <p>- <a href='?page=paneluser&amp;option=BUY_VIPS'><strong>Clique aqui para comprar seu vip</strong></a>.</p>
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}