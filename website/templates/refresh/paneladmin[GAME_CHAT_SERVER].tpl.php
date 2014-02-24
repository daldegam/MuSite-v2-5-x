{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1> 
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Ver Chat em tempo real</h1>
                    <table border='0' width='100%'>
                      <tr>
                       <td colspan='2' bgcolor='#E2DEC5'>
                            <input type="button" value="Atualizar" onclick="window.location = '?page=paneladmin&amp;option=GAME_CHAT_SERVER&amp;loadLasts='+ document.getElementById('loadLasts').value ;" /> 
                            <input type="button" value="Apagar log" onclick="window.location = '?page=paneladmin&amp;option=GAME_CHAT_SERVER&amp;action=clearLog&amp;loadLasts='+ document.getElementById('loadLasts').value ;" />
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            Mostrar ultimos: <input type="text" id="loadLasts" value="<?php echo (isset($_GET['loadLasts']) == false ? 50 : $_GET['loadLasts']); ?>" /> 
                            <input type="button" value="Carregar" onclick="window.location = '?page=paneladmin&amp;option=GAME_CHAT_SERVER&amp;loadLasts='+ document.getElementById('loadLasts').value ;" />
                       </td>
                      </tr> 
                    </table>
                    {#RESULTTPL}
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
