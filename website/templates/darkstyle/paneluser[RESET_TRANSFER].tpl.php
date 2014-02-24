{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Transferir resets</h2>
                <form action="?page=paneluser&amp;option=RESET_TRANSFER&amp;Write=true" method="post">
                	<p>
                    	<label>Personagem 1:</label>
                        <select name='character1'>
                        	<option value='' elected="selected">Selecionar</option>
                        	{#CHARACTER_LIST_TAG_OPTION}
                        </select>
                    </p>
                	<p>
                    	<label>Personagem 2:</label>
                        <select name='character2'>
                        	<option value='' elected="selected">Selecionar</option>
                        	{#CHARACTER_LIST_TAG_OPTION}
                        </select>
                    </p>
                    <p>
                        <input type='submit' value="Carregar" class="button" />
                    </p>
                </form>
                {#RespostWrite}    
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}