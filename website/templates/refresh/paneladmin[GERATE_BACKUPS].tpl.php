{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1>
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Gerar Backup</h1>
                    <div class='quadros'>
                      <form action="?page=paneladmin&amp;option=GERATE_BACKUPS&amp;Write=true" method="post">
                       	<em>Banco de dados:</em> <select name='database'>{#DATABASE_LIST}</select><br />
                       	<em>Nome do arquivo:</em> <input name="filename" type="text" value="{#FILE_NAME_SUGESTION}" /> <strong>(Recomendamos não alterar)</strong><br />
                       	<em>Salvar em:</em> <input name="dirname" type="text" value="C:\Backups\" /><br />
                        <input type="submit" value="Criar Backup" class="button" />
                      </form>
                    </div>
                    {#RESULTTPL}
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}