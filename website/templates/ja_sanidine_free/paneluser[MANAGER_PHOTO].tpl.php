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
                            
                            <h1 style="margin-top: 20px; margin-bottom: 26px;">Gerenciar foto</h1>
                            
                          	<div id="etc">
                            	<table width='100%' cellspacing='2' cellpadding='2' border='0'>
                      <tr>
                       <td width='50%'><strong>Escolha o personagem :</strong> </td>
                       <td>      
                        <select name='personagem' class="inputbox" onchange="location='?page=paneluser&amp;option=MANAGER_PHOTO&amp;character='+this.options[this.selectedIndex].value">
                          <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                          {#CHARACTER_LIST_TAG_OPTION}
                        </select>
                       </td>
                      </tr>
                    </table> 
                   
                    <div style="margin-top: 16px; margin-bottom: 16px; padding-left: 5px;" id="classe_change">
                   
                   	{#RespostWrite}
                      
                       </div>
                            
                            </div>
                          
                           	  </div>
                            </div>
						</div>
					</div>
				</div>
			<div id="ja-col1">
			  <div class="ja-innerpad">
					<div class="module_menu">
						<div>
							<div>
								<div>
									<h3>PAINEL DE CONTROLE</h3>
									<ul class="menu">
										{#DIV[LOGIN_LOGOUT]}
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="module_menu">
						<div>
							<div>
								<div>
									<h3>SERVIDORES</h3>
										<ul class="menu">
											{#GAMESERVERS_ON}
											<li>Total online: <a href="?page=onlines&amp;room=all"><strong>{#TOTAL_ACCOUNTS_ONLINES}</strong></a></li>	
										</ul>
								</div>
								</div>
							</div>
						</div>
						<div class="module_menu">
							<div>
								<div>
									<div>
										<h3>CONFIGURAÇÕES</h3>
										<ul class="menu">
											<li>Versão: <strong>{#SERVER_VERSION}</strong></li>
											<li>Experiência: <strong>{#SERVER_XP}</strong></li>
											<li>Drops: <strong>{#SERVER_DROP}</strong></li>
											<li>Bug Bless: <strong>{#SERVER_BUGBLESS}</strong></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<div class="module_menu">
						<div>
							<div>
								<div>
									<h3>INFORMA&Ccedil;&Otilde;ES</h3>
										<ul class="menu">
											<li>Total de Contas: <strong>{#TOTAL_ACCOUNTS}</strong></li>
											<li>Total de Chars: <strong>{#TOTAL_CHARATERS}</strong></li>
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
						</div>
                    <div class="module_menu">
                        <div>
                            <div>
                                <div>
                                    <h3>ENQUETE</h3>
                                    <ul class="menu">              
                                        {#POLL_OPTIONS} 
                                        <div id="pollResult"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="module_menu">
						<div>
							<div>
								<div>
									<h3>EQUIPE</h3>
									<ul class="menu">
										<div id="but"><a href="javascript:;" onclick="javascript: document.getElementById('but').style.display='none'; document.getElementById('equipe').style.display = ''; Verify('?page=ajax&require=membersstaff', 'equipe', 'get');">[Mostrar]</a></div>
										<div id="equipe" style="display: none;"></div>
									</ul>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div id="ja-tabs" class="clearfix"></div>
			</div>
		</div>
 	</div>
{#INCLUDE:footer}
