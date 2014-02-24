{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Mudar classe</h2>
                <select name='personagem' id="charSelect">
                    <option value="" disabled="disabled" selected="selected">Selecionar</option>
                    {#CHARACTER_LIST_TAG_OPTION}
                </select>
                {#RespostWrite}    
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}