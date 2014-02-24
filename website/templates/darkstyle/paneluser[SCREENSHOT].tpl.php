{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Screenshots</h2>
                <p><strong>Enviar novas screenshots</strong></p>
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
                
                <p><strong>Apagar screenshots</strong></p>
                <form action='?page=loadModule&module=screenshots&action=panelManager&subAction=delete' method='post'>
                <table width='100%'>
                    <tr>
                        <td>
                            <strong>Selecione abaixo a screenshot a ser apagada:</strong><br /><select name="id">{#SCREENSHOTS_OPTIONS_DELETE}</select><input type='submit' class='button' value='Deletar' /> 
                        </td>
                    </tr>
                </table>
                </form>  
                {#RespostWrite}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}