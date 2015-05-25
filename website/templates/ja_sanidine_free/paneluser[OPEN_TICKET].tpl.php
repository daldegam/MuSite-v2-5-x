{#INCLUDE:header}
<script type="text/javascript">
function show_permission(area,free,vips,vipg, vip3, vip4, vip5) {
    if(free == 1) var permission_free = "<span style='color:#009400'>Sim</span>"; else var permission_free = "<span style='color:#BB0000'>Não</span>";
    if(vips == 1) var permission_vips = "<span style='color:#009400'>Sim</span>"; else var permission_vips = "<span style='color:#BB0000'>Não</span>";
    if(vipg == 1) var permission_vipg = "<span style='color:#009400'>Sim</span>"; else var permission_vipg = "<span style='color:#BB0000'>Não</span>";
    if(vip3 == 1) var permission_vip3 = "<span style='color:#009400'>Sim</span>"; else var permission_vip3 = "<span style='color:#BB0000'>Não</span>";
    if(vip4 == 1) var permission_vip4 = "<span style='color:#009400'>Sim</span>"; else var permission_vip4 = "<span style='color:#BB0000'>Não</span>";
    if(vip5 == 1) var permission_vip5 = "<span style='color:#009400'>Sim</span>"; else var permission_vip5 = "<span style='color:#BB0000'>Não</span>";
    document.getElementById('option_permission_'+area).innerHTML = "<div style='margin-left: 20px; margin-top: 10px; margin-bottom: 10px;'>Permissões da Opção:<br/> \
     - Free: "+permission_free+"<br/> \
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?>- {#VIP_NAME_1}: "+permission_vips+"<br/><?php endif; ?> \
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?>- {#VIP_NAME_2}: "+permission_vipg+"<br/><?php endif; ?>\
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?>- {#VIP_NAME_3}: "+permission_vip3+"<br/><?php endif; ?>\
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?>- {#VIP_NAME_4}: "+permission_vip4+"<br/><?php endif; ?>\
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?>- {#VIP_NAME_5}: "+permission_vip5+"<?php endif; ?></div>";
}
function clear_permission(area) {
	document.getElementById('option_permission_'+area).innerHTML = "";
}
function AbreMenu(nome_div) {
	var div = "";
	var menus = 5;
	for (var i=1; i < menus; i++) {
		div = "div"+i;
		document.getElementById(div).style.display = "none"; 
		if (div == nome_div) {
			document.getElementById(nome_div).style.display = "block"; 
		}
	}
}
function AbreMenuV2(nome_div) {
	var div = "";
	var menus = 3;
	for (var i=1; i < menus; i++) {
		div = "divV2"+i;
		document.getElementById(div).style.display = "none"; 
		if (div == nome_div) {
			document.getElementById(nome_div).style.display = "block"; 
		}
	}
}
</script>  
	<div id="ja-containerwrap-fr">
		<div id="ja-container" class="clearfix">
			<div id="ja-mainbody" class="clearfix">
				<div id="ja-content">
					<div id="ja-content-top">
						<div id="ja-content-bot" class="clearfix">
							
							<div id="ja-current-content" class="clearfix">
                           	  <div id="etc">
                                {#INCLUDE:menuPanelUser}    
                            
                            <h1 style="margin-top: 20px; margin-bottom: 26px;">Abrir Ticket</h1>
                            
                          	<div id="etc">
                            	<div style="margin-top: 16px; margin-bottom: 16px; padding-left: 5px;" id="classe_change">
                   				{#RespostWrite}
                   			  </div>
                     
                       <form action='?page=paneluser&amp;option=OPEN_TICKET&amp;Write=true' method="post">
                        <table border='0' cellpadding='1' cellspacing='1' width='438'>
                          <tr><td colspan='2' align='left' style="background: none;"><strong>Preencha todos os campos abaixo para abrir o pedido!</strong></td></tr>
                          <tr><td height=15 colspan="2" style="background: none;">&nbsp;</td></tr>
                          <tr>
                            <td align='right' width="20%" style="background: none;"><strong>Personagem:</strong></td>
                            <td align='left' style="background: none;"> <select name="character" class="inputbox">{#CHARACTER_LIST_TAG_OPTION}</select></td>
                          </tr>
                          <tr>
                            <td align='right' width="20%" style="background: none;"><strong>Setor:</strong></td>
                            <td align='left' style="background: none;"><input type="radio" name="sector" checked="checked" value="Suporte Tecnico" />Suporte Técnico<br /><input type="radio" name="sector" value="Suporte Financeiro" />Suporte Financeiro</td>
                          </tr>
                          <tr>
                            <td align='right' width="20%" style="background: none;"><strong>Assunto:</strong></td>
                            <td align='left' style="background: none;"><input name="subject" type="text" class="inputbox" size="50" maxlength="30" /></td>
                          </tr>
                          <tr>
                            <td align='right' width="20%" style="background: none;"><strong>Descrição:</strong></td>
                            <td align='left' style="background: none;"><textarea name="description" cols="40" rows="6">Descreva aqui o motivo para que nossa equipe possa analizar.</textarea></td>
                          </tr>
                          <tr>
                            <td colspan="2" style="background: none;"><div class="qdestaques">Não use os caracteres: " (aspas) ' (apostofro) ; (ponto e virgula)</div></td>
                          </tr>
                          <tr>
                            <td align='center' colspan="2" style="background: none;"><input type='Submit' class='button' value='Abrir Pedido' /></td>
                          </tr>
                        </table>
                       </form>                                       </div>
                          
                           	  </div>
                            </div>
						</div>
					</div>
				</div>
			{#INCLUDE:menuLeft}
			<br />
			<div id="ja-tabs" class="clearfix"></div>
			</div>
		</div>
 	</div>
{#INCLUDE:footer}