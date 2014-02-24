{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Log de compras</h2>
                <p>Gerar log de compras de: <a href="?page=paneluser&amp;option=LOG_BUYS&amp;Write=1"><strong>{#CASH_NAME}</strong></a></p>
                <p>Gerar log de compras de: <a href="?page=paneluser&amp;option=LOG_BUYS&amp;Write=2"><strong>Vips</strong></a></p>
                <div class="fix">
                    {#RespostWrite}
                </div>
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}
