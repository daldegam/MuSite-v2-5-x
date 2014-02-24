{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Administrador <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelAdmin}
            
            <div class="contentBox">
                <h2 class="noMargin">Golden Archer</h2>
                <div class="style" style="margin-top: 25px;">
                  <h3 class="legend-title"><span style="font-size: 13px;">Selecione a opção desejada abaixo</span></h3>
                     <ul style="margin: 10px 0px 10px 20px;">
                       <li><a href="?page=paneladmin&option=GOLDEN_ARCHER&action=createSerial">Criar serial para um determinado login</a></li>
                    </ul>
                </div>
                    
                <div class="style" style="margin-top: 25px;">
                    {#RESPONSE_WRITE}
                </div>
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}