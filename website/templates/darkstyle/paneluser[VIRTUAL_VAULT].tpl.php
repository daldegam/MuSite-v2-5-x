{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Ba&uacute; virtual</h2>
                
                <p>
                	<table>
                    <tr>
                        <td style="margin: 0px; padding: 0px;">
                        <div class="vaultBox">
                            <div id="vaultName">Ba&uacute; atual no jogo</div>
                            <ul id="itemsVaultGame">
                                {#liItemsVaultGame}
                            </ul>
                        </div>
                        </td>                                                     
                        <td style="margin: 0px; padding: 0px; width: 100%;"></td>
                        <td style="margin: 0px; padding: 0px;">
                        <div class="vaultBox">
                            <div id="vaultName">Ba&uacute; virtual</div>
                            <ul id="itemsVaultVirtual">
                                {#liItemsVaultVirtual}
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div id="detailsVault"></div>
                        </td>
                    </tr>
                    </table>
               	</p> 
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}