{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser}
 				  
                    <h1>Screenshots</h1>
                    {#RespostWrite}
                    <div class='quadros'>
                        <h2>Enviar novas screenshots</h3>
                        <form action='?page=loadModule&module=screenshots&action=panelManager&subAction=upload' method='post' enctype='multipart/form-data'>
                        <table width='100%'>
                            <tr>               
                                <td>
                                    <strong>Quantidade de screenshots que já enviei:</strong> <strong>{#SCREENSHOTS_AMOUNT}</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Enviar nova screenshot:</strong> <em>Somente são aceitos os formatos: .jpg, .png, .gif, .bmp</em> <br />
                                    Legenda da screenshot: <input type='text' name='legend' maxlength="50" /><br />
                                    Selecione a foto: <input type='file' name='photo' />
                                    <input type='submit' class='button' value='Enviar' /> 
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                    
                    <div class='quadros'>
                        <h2>Apagar screenshots</h3>
                        <form action='?page=loadModule&module=screenshots&action=panelManager&subAction=delete' method='post'>
                        <table width='100%'>
                            <tr>
                                <td>
                                    <strong>Selecione abaixo a screenshot a ser apagada:</strong><br /><select name="id">{#SCREENSHOTS_OPTIONS_DELETE}</select><input type='submit' class='button' value='Deletar' /> 
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                    
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
