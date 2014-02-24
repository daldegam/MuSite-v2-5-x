{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                  <h1>Planos Vip</h1>
                  <div class="quadros">                  
                     <a href="?page=vips&amp;option=advantages">Vantagens de ser um player vip</a><br />
                     <a href="?page=vips&amp;option=howToBuy">O que &eacute; {#CASH_NAME} e como comprar {#CASH_NAME}</a><br />
                     <a href="?page=vips&amp;option=howToBuyVips">Como Comprar vip</a><br />
                     <a href="?page=paneluser&amp;option=BUY_VIPS">Clique aqui para comprar o vip</a><br />
                     <a href="?page=vips&amp;option=howToBuy">Dados para dep&oacute;sito</a>
                  </div>
                  <h1>Como Comprar vip</h1>
                  <div class='quadros'>
                    <strong>Como posso Comprar vip?</strong><br />
                     - Para comprar seu vip &eacute; muito simples! Voc&ecirc; deve possuir uma determinada de {#CASH_NAME} para efetuar a compra do mesmo.
                     <div class='qdestaques'>
                      <strong>Tabela de Pre&ccedil;os:</strong><br />
                      <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?>
                      {#VIP_NAME_1} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPSILVER_30_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_1} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_90_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_1} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_180_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_1} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPSILVER_365_DAYS}</strong> {#CASH_NAME}<br /><br />
                      <?php endif; ?>  
                      <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?>
                      {#VIP_NAME_2} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPGOLD_30_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_2} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_90_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_2} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_180_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_2} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPGOLD_365_DAYS}</strong> {#CASH_NAME}<br />
                      <?php endif; ?>
                      <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?>
                      {#VIP_NAME_3} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP3_30_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_3} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP3_90_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_3} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP3_180_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_3} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP3_365_DAYS}</strong> {#CASH_NAME}<br />
                      <?php endif; ?>
                      <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?>
                      {#VIP_NAME_4} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP4_30_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_4} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP4_90_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_4} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP4_180_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_4} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP4_365_DAYS}</strong> {#CASH_NAME}<br />
                      <?php endif; ?>
                      <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?>
                      {#VIP_NAME_5} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP5_30_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_5} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP5_90_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_5} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP5_180_DAYS}</strong> {#CASH_NAME}<br />
                      {#VIP_NAME_5} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP5_365_DAYS}</strong> {#CASH_NAME}<br />
                      <?php endif; ?>
                      
                     </div><br />
                     - Caso voc&ecirc; n&atilde;o saiba como conseguir {#CASH_NAME}, Clique <a href='?page=vips&amp;option=howToBuy'><strong>aqui</strong></a>.<br /><br />
                     - Para ver as Vantagens de ser vip, Clique <a href='?page=vips&amp;option=advantages'><strong>aqui</strong></a>.<br /><br />
                     - <a href='?page=paneluser&amp;option=BUY_VIPS'><strong>Clique aqui para comprar seu vip</strong></a>.<br /><br />
                  </div>
                </div>
                
                {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}