{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Enviar SMS</h2>
                <form action='?page=paneluser&amp;option=SEND_SMS&amp;Write=true' method='post'>
                    <p>
                        <label>Para:</label>
                        {#INPUT_RADIOS_NUMBERS}
                    </p>
                    <p>
                        <label>Mensagem:</label>
                        <input name="mensagem" type="text" maxlength="{#MAXLENGHT}" value="Maximo {#MAXLENGHT} Caracters" size="35" />
                    </p>
                    <p>
                        <input type=submit value='Enviar Mensagem' class='button' />
                    </p>
                </form>            
                {#RespostWrite}    
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}