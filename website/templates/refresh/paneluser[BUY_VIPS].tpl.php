{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Comprar vip</h1>
                      <script>
						function AbreMenuV2(nome_div)
						{
						var div = "";
						var menus = 6;
							for (var i=1; i < menus; i++)
							{
							div = "divV2"+i;
							document.getElementById(div).style.display = "none"; 
								if (div == nome_div)
								{
								document.getElementById(nome_div).style.display = "block"; 
								}
							}
						}
						</script>
						<div class='quadros'>
							<strong>Seu saldo &eacute; de: {#CASH_AMOUNT} {#CASH_NAME}</strong>
							<br /><br />
							O que voc&ecirc; deseja comprar? 
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><a href="javascript:AbreMenuV2('divV21')"><strong>{#VIP_NAME_1}</strong></a>, <?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><a href="javascript:AbreMenuV2('divV22')"><strong>{#VIP_NAME_2}</strong></a>, <?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><a href="javascript:AbreMenuV2('divV23')"><strong>{#VIP_NAME_3}</strong></a>, <?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><a href="javascript:AbreMenuV2('divV24')"><strong>{#VIP_NAME_4}</strong></a>, <?php endif; ?>
                            <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><a href="javascript:AbreMenuV2('divV25')"><strong>{#VIP_NAME_5}</strong></a> <?php endif; ?>
						</div>
						<div class='quadros' id='divV21' style='display:none'>
						<form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' id='Compras' method='post'>
						 <strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_1}?</strong><br /><br />
						  <input name='vip' type='radio' value='1:30' checked='checked' />&nbsp;{#VIP_NAME_1} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPSILVER_30_DAYS}</strong> {#CASH_NAME}<br />
						  <input name='vip' type='radio' value='1:90' />&nbsp;{#VIP_NAME_1} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_90_DAYS}</strong> {#CASH_NAME}<br />
						  <input name='vip' type='radio' value='1:180' />&nbsp;{#VIP_NAME_1} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_180_DAYS}</strong> {#CASH_NAME}<br />
						  <input name='vip' type='radio' value='1:365' />&nbsp;{#VIP_NAME_1} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPSILVER_365_DAYS}</strong> {#CASH_NAME}<br /><br />
						  <input type='submit' value='Finalizar Compra' class='button' />
						</form>
						</div>
                        <div class='quadros' id='divV22' style='display:none'>
                        <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' id='Compras' method='post'>
                         <strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_2}?</strong><br /><br />
                          <input name='vip' type='radio' value='2:30' checked='checked' />&nbsp;{#VIP_NAME_2} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPGOLD_30_DAYS}</strong> {#CASH_NAME}<br />
                          <input name='vip' type='radio' value='2:90' />&nbsp;{#VIP_NAME_2} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_90_DAYS}</strong> {#CASH_NAME}<br />
                          <input name='vip' type='radio' value='2:180' />&nbsp;{#VIP_NAME_2} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_180_DAYS}</strong> {#CASH_NAME}<br />
                          <input name='vip' type='radio' value='2:365' />&nbsp;{#VIP_NAME_2} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPGOLD_365_DAYS}</strong> {#CASH_NAME}<br /><br />
                          <input type='submit' value='Finalizar Compra' class='button' />
                        </form>       
                        </div>
                        <div class='quadros' id='divV23' style='display:none'>
                        <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' id='Compras' method='post'>
                         <strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_3}?</strong><br /><br />
                          <input name='vip' type='radio' value='3:30' checked='checked' />&nbsp;{#VIP_NAME_3} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP3_30_DAYS}</strong> {#CASH_NAME}<br />
                          <input name='vip' type='radio' value='3:90' />&nbsp;{#VIP_NAME_3} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP3_90_DAYS}</strong> {#CASH_NAME}<br />
                          <input name='vip' type='radio' value='3:180' />&nbsp;{#VIP_NAME_3} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP3_180_DAYS}</strong> {#CASH_NAME}<br />
                          <input name='vip' type='radio' value='3:365' />&nbsp;{#VIP_NAME_3} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP3_365_DAYS}</strong> {#CASH_NAME}<br /><br />
                          <input type='submit' value='Finalizar Compra' class='button' />
                        </form>       
                        </div>
                        <div class='quadros' id='divV24' style='display:none'>
                        <form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' id='Compras' method='post'>
                         <strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_4}?</strong><br /><br />
                          <input name='vip' type='radio' value='4:30' checked='checked' />&nbsp;{#VIP_NAME_4} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP4_30_DAYS}</strong> {#CASH_NAME}<br />
                          <input name='vip' type='radio' value='4:90' />&nbsp;{#VIP_NAME_4} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP4_90_DAYS}</strong> {#CASH_NAME}<br />
                          <input name='vip' type='radio' value='4:180' />&nbsp;{#VIP_NAME_4} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP4_180_DAYS}</strong> {#CASH_NAME}<br />
                          <input name='vip' type='radio' value='4:365' />&nbsp;{#VIP_NAME_4} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP4_365_DAYS}</strong> {#CASH_NAME}<br /><br />
                          <input type='submit' value='Finalizar Compra' class='button' />
                        </form>       
                        </div>
						<div class='quadros' id='divV25' style='display:none'>
						<form action='?page=paneluser&amp;option=BUY_VIPS&amp;Write=true' id='Compras' method='post'>
						 <strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_5}?</strong><br /><br />
						  <input name='vip' type='radio' value='5:30' checked='checked' />&nbsp;{#VIP_NAME_5} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP5_30_DAYS}</strong> {#CASH_NAME}<br />
						  <input name='vip' type='radio' value='5:90' />&nbsp;{#VIP_NAME_5} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP5_90_DAYS}</strong> {#CASH_NAME}<br />
						  <input name='vip' type='radio' value='5:180' />&nbsp;{#VIP_NAME_5} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP5_180_DAYS}</strong> {#CASH_NAME}<br />
						  <input name='vip' type='radio' value='5:365' />&nbsp;{#VIP_NAME_5} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP5_365_DAYS}</strong> {#CASH_NAME}<br /><br />
						  <input type='submit' value='Finalizar Compra' class='button' />
						</form>       
                        </div>
                    {#RespostWrite}    
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
