{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Administrador <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelAdmin}
            
            <div class="contentBox">
                <h2 class="noMargin">Deletar conta</h2>
                <form action="?page=paneladmin&amp;option=DELETE_ACCOUNT&amp;Write=true" method="post">
                	<p>
                    	<label>Login:</label>
                    	<input name="account" type="text" value="" />
                    </p>
                    <p>
                    	<input type="submit" value="Deletar conta" class="button" />
                    </p>
                </form>
                {#RESULTTPL}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}