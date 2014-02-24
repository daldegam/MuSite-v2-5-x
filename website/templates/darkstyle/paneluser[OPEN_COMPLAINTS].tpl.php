{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Denunciar</h2>
                <form action='?page=paneluser&amp;option=OPEN_COMPLAINTS&amp;Write=true' method='post' enctype='multipart/form-data'>
                	<p>
                        <label>Foto para den&uacute;ncia:</label>
                        <input name='image' type='file'> (.jpg / .gif / .png)
                     </p>
                     <p>
                        <label>Descri&ccedil;&atilde;o:</label>
                        <textarea name='descricao'></textarea>
                     </p>
                     <p>
                        <input type='submit' class='button' value='Enviar' />
                     </p>
                </form>             
                {#RespostWrite}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}