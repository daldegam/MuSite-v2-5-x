{#INCLUDE:header}
<script type="text/javascript" src="templates/darkstyle/js/base64.js"></script>
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Administrador <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelAdmin}
            
            <div class="contentBox">
                <h2 class="noMargin">Editar not&iacute;cia</h2>
                <form action="?page=paneladmin&amp;option=MODIFY_NOTICE&amp;Write=true" method="post">
                    <p>
                    	<label>T&iacute;tulo:</label>
                    	<select name="id">{#OPTIONS_ID_SELECT}</select>
                    </p>
                    <p>
                        <input type="submit" value="Carregar" class="button" />
                	</p>
                </form>
                {#RESULTTPL}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}