{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Administrador <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelAdmin}
            
            <div class="contentBox">
                <h2 class="noMargin">Gerar Backup</h2>
                <form action="?page=paneladmin&amp;option=GERATE_BACKUPS&amp;Write=true" method="post">
                    <p>
                    	<label>Banco de dados:</label>
                    	<select name='database'>{#DATABASE_LIST}</select>
                    </p>
                    <p>
                    	<label>Nome do arquivo <span style="font-weight: normal;">(&Eacute; recomendado n&atilde;o alterar)</span>:</label>
                    	<input name="filename" type="text" value="{#FILE_NAME_SUGESTION}" /> 
                    </p>
                    <p>
                    	<label>Salvar em:</label>
                    	<input name="dirname" type="text" value="C:\Backups\" />
                    </p>
                    <p>
                        <input type="submit" value="Criar Backup" class="button" />
                	</p>
                </form>
                {#RESULTTPL}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}
