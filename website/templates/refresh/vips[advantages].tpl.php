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
                  <h1>Vantagens de ser um player vip</h1>
                  <div class="quadros">      
                  	<h2>Opções do painel de usuário</h2>
                    <table border="0" width="100%">
                             <tr>
                              <td align="center"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Nome</strong></td>
                              <td align="center" ><strong>{#VIP_NAME_0}</strong></td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center" ><strong>{#VIP_NAME_1}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center" ><strong>{#VIP_NAME_2}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center" ><strong>{#VIP_NAME_3}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center" ><strong>{#VIP_NAME_4}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center" ><strong>{#VIP_NAME_5}</strong></td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Alterar dados</strong></td>
                              <td align="center">{#MODIFY_DATA_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#MODIFY_DATA_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#MODIFY_DATA_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#MODIFY_DATA_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#MODIFY_DATA_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#MODIFY_DATA_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Limpar Bau</strong></td>
                              <td align="center">{#CLEAN_VAULT_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CLEAN_VAULT_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CLEAN_VAULT_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CLEAN_VAULT_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CLEAN_VAULT_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CLEAN_VAULT_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Bau Duplo</strong></td>
                              <td align="center">{#DOUBLE_VAULT_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#DOUBLE_VAULT_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#DOUBLE_VAULT_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#DOUBLE_VAULT_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#DOUBLE_VAULT_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#DOUBLE_VAULT_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Log de compras</strong></td>
                              <td align="center">{#LOG_BUYS_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LOG_BUYS_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LOG_BUYS_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LOG_BUYS_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LOG_BUYS_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LOG_BUYS_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Alterar personal ID</strong></td>
                              <td align="center">{#MODIFY_PERSONALID_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#MODIFY_PERSONALID_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#MODIFY_PERSONALID_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#MODIFY_PERSONALID_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#MODIFY_PERSONALID_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#MODIFY_PERSONALID_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Resetar Personagem</strong></td>
                              <td align="center">{#RESET_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#RESET_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#RESET_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#RESET_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#RESET_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#RESET_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Transferir Resets</strong></td>
                              <td align="center">{#RESET_TRANSFER_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#RESET_TRANSFER_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#RESET_TRANSFER_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#RESET_TRANSFER_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#RESET_TRANSFER_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#RESET_TRANSFER_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Limpar PK</strong></td>
                              <td align="center">{#CLEAN_PK_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CLEAN_PK_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CLEAN_PK_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CLEAN_PK_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CLEAN_PK_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CLEAN_PK_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Distribuir Pontos</strong></td>
                              <td align="center">{#DISTRIBUTE_POINTS_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#DISTRIBUTE_POINTS_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#DISTRIBUTE_POINTS_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#DISTRIBUTE_POINTS_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#DISTRIBUTE_POINTS_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#DISTRIBUTE_POINTS_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Mover Personagem</strong></td>
                              <td align="center">{#MOVE_CHARACTER_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#MOVE_CHARACTER_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#MOVE_CHARACTER_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#MOVE_CHARACTER_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#MOVE_CHARACTER_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#MOVE_CHARACTER_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Mudar Nick</strong></td>
                              <td align="center">{#CHANGE_NICK_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CHANGE_NICK_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CHANGE_NICK_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CHANGE_NICK_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CHANGE_NICK_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CHANGE_NICK_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Mudar Classe</strong></td>
                              <td align="center">{#CHANGE_CLASS_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CHANGE_CLASS_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CHANGE_CLASS_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CHANGE_CLASS_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CHANGE_CLASS_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CHANGE_CLASS_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Redistribuir Pontos</strong></td>
                              <td align="center">{#REDISTRIBUTE_POINTS_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#REDISTRIBUTE_POINTS_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#REDISTRIBUTE_POINTS_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#REDISTRIBUTE_POINTS_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#REDISTRIBUTE_POINTS_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#REDISTRIBUTE_POINTS_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Limpar Inventário</strong></td>
                              <td align="center">{#CLEAN_INVENTORY_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CLEAN_INVENTORY_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CLEAN_INVENTORY_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CLEAN_INVENTORY_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CLEAN_INVENTORY_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CLEAN_INVENTORY_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Abrir Denuncias</strong></td>
                              <td align="center">{#OPEN_COMPLAINTS_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#OPEN_COMPLAINTS_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#OPEN_COMPLAINTS_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#OPEN_COMPLAINTS_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#OPEN_COMPLAINTS_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#OPEN_COMPLAINTS_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Abrir Pedidos (Ticket)</strong></td>
                              <td align="center">{#OPEN_TICKET_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#OPEN_TICKET_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#OPEN_TICKET_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#OPEN_TICKET_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#OPEN_TICKET_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#OPEN_TICKET_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Ver Pedidos (Ticket)</strong></td>
                              <td align="center">{#READ_TICKET_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#READ_TICKET_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#READ_TICKET_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#READ_TICKET_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#READ_TICKET_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#READ_TICKET_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left"  style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Enviar SMS para os ADMs</strong></td>
                              <td align="center">{#SEND_SMS_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#SEND_SMS_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#SEND_SMS_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#SEND_SMS_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#SEND_SMS_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#SEND_SMS_VIP5}</td><?php endif; ?>
                             </tr>
                            </table>  
                    <hr />
                  	<h2>Opções de 0 a 10 resets</h2>
                    <table border="0" width="100%">
                             <tr>
                              <td align="center" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Nome</strong></td>
                              <td align="center" ><strong>{#VIP_NAME_0}</strong></td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center" ><strong>{#VIP_NAME_1}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center" ><strong>{#VIP_NAME_2}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center" ><strong>{#VIP_NAME_3}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center" ><strong>{#VIP_NAME_4}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center" ><strong>{#VIP_NAME_5}</strong></td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level para resetar</strong></td>
                              <td align="center">{#LevelReset[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelReset[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelReset[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelReset[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelReset[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelReset[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level depois de resetar</strong></td>
                              <td align="center">{#LevelAfter[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelAfter[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelAfter[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelAfter[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelAfter[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelAfter[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Zen para resetar</strong></td>
                              <td align="center">{#ZenRequire[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#ZenRequire[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#ZenRequire[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#ZenRequire[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#ZenRequire[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#ZenRequire[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Pontos por reset</strong></td>
                              <td align="center">{#Points[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#Points[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#Points[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#Points[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#Points[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#Points[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga itens ao resetar</strong></td>
                              <td align="center">{#CleanItens[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanItens[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanItens[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanItens[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanItens[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanItens[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga magias ao resetar</strong></td>
                              <td align="center">{#CleanMagics[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanMagics[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanMagics[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanMagics[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanMagics[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanMagics[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga quests ao resetar</strong></td>
                              <td align="center">{#CleanQuests[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanQuests[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanQuests[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanQuests[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanQuests[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanQuests[0-10]_VIP5}</td><?php endif; ?>
                             </tr> 
                            </table>
                    <hr />
                  	<h2>Opções de 11 a 50 resets</h2>
                    <table border="0" width="100%">
                             <tr>
                              <td align="center" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Nome</strong></td>
                              <td align="center" ><strong>{#VIP_NAME_0}</strong></td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center" ><strong>{#VIP_NAME_1}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center" ><strong>{#VIP_NAME_2}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center" ><strong>{#VIP_NAME_3}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center" ><strong>{#VIP_NAME_4}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center" ><strong>{#VIP_NAME_5}</strong></td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level para resetar</strong></td>
                              <td align="center">{#LevelReset[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelReset[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelReset[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelReset[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelReset[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelReset[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level depois de resetar</strong></td>
                              <td align="center">{#LevelAfter[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelAfter[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelAfter[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelAfter[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelAfter[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelAfter[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Zen para resetar</strong></td>
                              <td align="center">{#ZenRequire[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#ZenRequire[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#ZenRequire[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#ZenRequire[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#ZenRequire[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#ZenRequire[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Pontos por reset</strong></td>
                              <td align="center">{#Points[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#Points[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#Points[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#Points[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#Points[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#Points[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga itens ao resetar</strong></td>
                              <td align="center">{#CleanItens[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanItens[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanItens[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanItens[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanItens[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanItens[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga magias ao resetar</strong></td>
                              <td align="center">{#CleanMagics[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanMagics[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanMagics[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanMagics[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanMagics[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanMagics[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga quests ao resetar</strong></td>
                              <td align="center">{#CleanQuests[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanQuests[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanQuests[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanQuests[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanQuests[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanQuests[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                            </table>
                    <hr />
                  	<h2>Opções de 51 a 100 resets</h2>
                    <table border="0" width="100%">
                             <tr>
                              <td align="center" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Nome</strong></td>
                              <td align="center" ><strong>{#VIP_NAME_0}</strong></td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center" ><strong>{#VIP_NAME_1}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center" ><strong>{#VIP_NAME_2}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center" ><strong>{#VIP_NAME_3}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center" ><strong>{#VIP_NAME_4}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center" ><strong>{#VIP_NAME_5}</strong></td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level para resetar</strong></td>
                              <td align="center">{#LevelReset[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelReset[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelReset[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelReset[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelReset[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelReset[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level depois de resetar</strong></td>
                              <td align="center">{#LevelAfter[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelAfter[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelAfter[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelAfter[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelAfter[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelAfter[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Zen para resetar</strong></td>
                              <td align="center">{#ZenRequire[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#ZenRequire[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#ZenRequire[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#ZenRequire[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#ZenRequire[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#ZenRequire[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Pontos por reset</strong></td>
                              <td align="center">{#Points[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#Points[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#Points[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#Points[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#Points[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#Points[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga itens ao resetar</strong></td>
                              <td align="center">{#CleanItens[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanItens[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanItens[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanItens[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanItens[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanItens[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga magias ao resetar</strong></td>
                              <td align="center">{#CleanMagics[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanMagics[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanMagics[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanMagics[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanMagics[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanMagics[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga quests ao resetar</strong></td>
                              <td align="center">{#CleanQuests[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanQuests[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanQuests[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanQuests[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanQuests[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanQuests[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                            </table>
                    <hr />
                  	<h2>Opções de 101 a 150 resets</h2>
                    <table border="0" width="100%">
                             <tr>
                              <td align="center" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Nome</strong></td>
                              <td align="center" ><strong>{#VIP_NAME_0}</strong></td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center" ><strong>{#VIP_NAME_1}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center" ><strong>{#VIP_NAME_2}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center" ><strong>{#VIP_NAME_3}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center" ><strong>{#VIP_NAME_4}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center" ><strong>{#VIP_NAME_5}</strong></td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level para resetar</strong></td>
                              <td align="center">{#LevelReset[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelReset[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelReset[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelReset[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelReset[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelReset[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" ><strong>Level depois de resetar</strong></td>
                              <td align="center">{#LevelAfter[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelAfter[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelAfter[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelAfter[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelAfter[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelAfter[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Zen para resetar</strong></td>
                              <td align="center">{#ZenRequire[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#ZenRequire[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#ZenRequire[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#ZenRequire[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#ZenRequire[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#ZenRequire[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Pontos por reset</strong></td>
                              <td align="center">{#Points[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#Points[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#Points[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#Points[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#Points[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#Points[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga itens ao resetar</strong></td>
                              <td align="center">{#CleanItens[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanItens[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanItens[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanItens[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanItens[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanItens[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga magias ao resetar</strong></td>
                              <td align="center">{#CleanMagics[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanMagics[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanMagics[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanMagics[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanMagics[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanMagics[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga quests ao resetar</strong></td>
                              <td align="center">{#CleanQuests[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanQuests[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanQuests[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanQuests[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanQuests[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanQuests[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                            </table>
                    <hr />
                  	<h2>Opções de 151 a 200 resets</h2>
                    <table border="0" width="100%">
                             <tr>
                              <td align="center" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Nome</strong></td>
                              <td align="center" ><strong>{#VIP_NAME_0}</strong></td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center" ><strong>{#VIP_NAME_1}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center" ><strong>{#VIP_NAME_2}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center" ><strong>{#VIP_NAME_3}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center" ><strong>{#VIP_NAME_4}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center" ><strong>{#VIP_NAME_5}</strong></td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level para resetar</strong></td>
                              <td align="center">{#LevelReset[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelReset[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelReset[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelReset[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelReset[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelReset[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level depois de resetar</strong></td>
                              <td align="center">{#LevelAfter[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelAfter[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelAfter[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelAfter[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelAfter[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelAfter[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Zen para resetar</strong></td>
                              <td align="center">{#ZenRequire[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#ZenRequire[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#ZenRequire[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#ZenRequire[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#ZenRequire[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#ZenRequire[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Pontos por reset</strong></td>
                              <td align="center">{#Points[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#Points[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#Points[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#Points[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#Points[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#Points[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga itens ao resetar</strong></td>
                              <td align="center">{#CleanItens[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanItens[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanItens[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanItens[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanItens[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanItens[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga magias ao resetar</strong></td>
                              <td align="center">{#CleanMagics[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanMagics[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanMagics[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanMagics[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanMagics[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanMagics[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga quests ao resetar</strong></td>
                              <td align="center">{#CleanQuests[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanQuests[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanQuests[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanQuests[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanQuests[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanQuests[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                            </table>
                    <hr />
                  	<h2>Opções de 201 a 300 resets</h2>
                    <table border="0" width="100%">
                             <tr>
                              <td align="center" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Nome</strong></td>
                              <td align="center" ><strong>{#VIP_NAME_0}</strong></td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center" ><strong>{#VIP_NAME_1}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center" ><strong>{#VIP_NAME_2}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center" ><strong>{#VIP_NAME_3}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center" ><strong>{#VIP_NAME_4}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center" ><strong>{#VIP_NAME_5}</strong></td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level para resetar</strong></td>
                              <td align="center">{#LevelReset[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelReset[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelReset[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelReset[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelReset[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelReset[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level depois de resetar</strong></td>
                              <td align="center">{#LevelAfter[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelAfter[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelAfter[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelAfter[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelAfter[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelAfter[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Zen para resetar</strong></td>
                              <td align="center">{#ZenRequire[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#ZenRequire[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#ZenRequire[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#ZenRequire[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#ZenRequire[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#ZenRequire[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Pontos por reset</strong></td>
                              <td align="center">{#Points[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#Points[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#Points[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#Points[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#Points[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#Points[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga itens ao resetar</strong></td>
                              <td align="center">{#CleanItens[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanItens[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanItens[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanItens[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanItens[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanItens[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga magias ao resetar</strong></td>
                              <td align="center">{#CleanMagics[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanMagics[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanMagics[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanMagics[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanMagics[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanMagics[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga quests ao resetar</strong></td>
                              <td align="center">{#CleanQuests[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanQuests[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanQuests[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanQuests[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanQuests[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanQuests[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                            </table>
                    <hr />
                  	<h2>Opções de resets após 301 resets</h2>
                    <table border="0" width="100%">
                             <tr>
                              <td align="center" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Nome</strong></td>
                              <td align="center" ><strong>{#VIP_NAME_0}</strong></td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center" ><strong>{#VIP_NAME_1}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center" ><strong>{#VIP_NAME_2}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center" ><strong>{#VIP_NAME_3}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center" ><strong>{#VIP_NAME_4}</strong></td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center" ><strong>{#VIP_NAME_5}</strong></td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level para resetar</strong></td>
                              <td align="center">{#LevelReset[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelReset[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelReset[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelReset[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelReset[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelReset[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Level depois de resetar</strong></td>
                              <td align="center">{#LevelAfter[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#LevelAfter[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#LevelAfter[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#LevelAfter[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#LevelAfter[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#LevelAfter[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Zen para resetar</strong></td>
                              <td align="center">{#ZenRequire[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#ZenRequire[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#ZenRequire[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#ZenRequire[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#ZenRequire[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#ZenRequire[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Pontos por reset</strong></td>
                              <td align="center">{#Points[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#Points[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#Points[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#Points[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#Points[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#Points[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga itens ao resetar</strong></td>
                              <td align="center">{#CleanItens[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanItens[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanItens[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanItens[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanItens[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanItens[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga magias ao resetar</strong></td>
                              <td align="center">{#CleanMagics[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanMagics[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanMagics[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanMagics[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanMagics[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanMagics[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <td align="left" style="border-bottom-color:#333333; border-bottom-width:thin; border-bottom-style:dotted"><strong>Apaga quests ao resetar</strong></td>
                              <td align="center">{#CleanQuests[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td align="center">{#CleanQuests[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td align="center">{#CleanQuests[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td align="center">{#CleanQuests[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td align="center">{#CleanQuests[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td align="center">{#CleanQuests[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                            </table>
                  </div>
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}