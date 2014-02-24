{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Comprar vip</h2>
                <p>Seu saldo &eacute; de: {#CASH_AMOUNT} {#CASH_NAME}.</p>
                <p>O que voc&ecirc; deseja comprar: 
                    <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><a id="openVipOne" href="#"><strong>{#VIP_NAME_1}</strong></a>, <?php endif; ?>
                    <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><a id="openVipTwo" href="#"><strong>{#VIP_NAME_2}</strong></a>, <?php endif; ?>
                    <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><a id="openVipThree" href="#"><strong>{#VIP_NAME_3}</strong></a>, <?php endif; ?> 
                    <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><a id="openVipFour" href="#"><strong>{#VIP_NAME_4}</strong></a>, <?php endif; ?>
                    <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><a id="openVipFive" href="#"><strong>{#VIP_NAME_5}</strong></a> <?php endif; ?>
                ?</p>
                <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' method='post' class="buyCashForm" id="one">
                    <p><strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_1}?</strong></p>
                    <p><input name='vip' type='radio' value='1:30' checked='checked' /> {#VIP_NAME_1} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPSILVER_30_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='1:90' /> {#VIP_NAME_1} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_90_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='1:180' /> {#VIP_NAME_1} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_180_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='1:365' /> {#VIP_NAME_1} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPSILVER_365_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input type='submit' value='Finalizar Compra' class='button' /></p>
                </form>
                <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' method='post' class="buyCashForm" id="two">
                    <p><strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_2}?</strong></p>
                    <p><input name='vip' type='radio' value='2:30' checked='checked' /> {#VIP_NAME_2} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPGOLD_30_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='2:90' /> {#VIP_NAME_2} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_90_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='2:180' /> {#VIP_NAME_2} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_180_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='2:365' /> {#VIP_NAME_2} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPGOLD_365_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input type='submit' value='Finalizar Compra' class='button' /></p>
                </form>   
                <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' method='post' class="buyCashForm" id="three">
                    <p><strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_3}?</strong></p>
                    <p><input name='vip' type='radio' value='3:30' checked='checked' /> {#VIP_NAME_3} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP3_30_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='3:90' /> {#VIP_NAME_3} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP3_90_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='3:180' /> {#VIP_NAME_3} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP3_180_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='3:365' /> {#VIP_NAME_3} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP3_365_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input type='submit' value='Finalizar Compra' class='button' /></p>
                </form>   
                <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' method='post' class="buyCashForm" id="four">
                    <p><strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_4}?</strong></p>
                    <p><input name='vip' type='radio' value='4:30' checked='checked' /> {#VIP_NAME_4} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP4_30_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='4:90' /> {#VIP_NAME_4} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP4_90_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='4:180' /> {#VIP_NAME_4} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP4_180_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='4:365' /> {#VIP_NAME_4} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP4_365_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input type='submit' value='Finalizar Compra' class='button' /></p>
                </form>   
                <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' method='post' class="buyCashForm" id="five">
                    <p><strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_5}?</strong></p>
                    <p><input name='vip' type='radio' value='5:30' checked='checked' /> {#VIP_NAME_5} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP5_30_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='5:90' /> {#VIP_NAME_5} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP5_90_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='5:180' /> {#VIP_NAME_5} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP5_180_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input name='vip' type='radio' value='5:365' /> {#VIP_NAME_5} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP5_365_DAYS}</strong> {#CASH_NAME}</p>
                    <p><input type='submit' value='Finalizar Compra' class='button' /></p>
                </form>   
                {#RespostWrite}    
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}