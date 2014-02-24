{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Abrir denuncia</h1>
                    {#RespostWrite}
                    <div class='quadros'>
                      <form action='?page=paneluser&amp;option=OPEN_COMPLAINTS&amp;Write=true' method='post' enctype='multipart/form-data'>
                      <table border=0>
                        <tr><td><strong>Foto para denuncia:</strong></td><td><input name='image' type='file'> (.jpg / .gif / .png)</td></tr>
                        <tr><td><strong>Descri&ccedil;&atilde;o:</strong></td><td><textarea name='descricao'></textarea></td></tr>
                        <tr><td align='center' colspan='2'><input type='submit' class='button' value='Enviar Denuncia' /></td></tr>
                      </table>
                      </form>             
                    </div>    
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}