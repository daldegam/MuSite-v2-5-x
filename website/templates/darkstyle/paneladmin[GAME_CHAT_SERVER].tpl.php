{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Administrador <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelAdmin}
            
            <div class="contentBox">
                <h2 class="noMargin">Ver Chat em tempo real</h2>
                <div class="style">
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
                </div>
                <div class="style">{#RESULTTPL}</div>
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}