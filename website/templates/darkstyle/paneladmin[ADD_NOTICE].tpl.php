{#INCLUDE:header} 
<script type="text/javascript" src="templates/darkstyle/js/base64.js"></script>
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Administrador <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelAdmin}
            
            <div class="contentBox">
                <h2 class="noMargin">Adcionar not&iacute;cia</h2>
                <form action="?page=paneladmin&amp;option=ADD_NOTICE&amp;Write=true" method="post" id="noticeFrom">
                    <p>
                        <label>T&iacute;tulo:</label>
                        <input name="subject" type="text" value="" maxlength="50" />
                    </p>
                    <p>
                        <label>Not&iacute;cia:</label>
                        <textarea name="content" id="content"></textarea>
                    </p>
                    <p>
                        <input type="submit" value="Adicionar" class="button" />
                    </p>
                </form>
                {#RESULTTPL}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}
