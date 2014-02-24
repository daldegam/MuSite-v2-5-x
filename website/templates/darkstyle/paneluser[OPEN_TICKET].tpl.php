{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Abrir Ticket</h2>
                <form action='?page=paneluser&amp;option=OPEN_TICKET&amp;Write=true' method="post">
                    <p>
                    	<label>Personagem:</label>
                        <select name="character">{#CHARACTER_LIST_TAG_OPTION}</select>
                    </p>
                    <p>
                      	<label>Setor:</label>
                    </p>
                    <p>
                        <input type="radio" name="sector" checked="checked" value="Suporte Tecnico" /> Suporte Técnico
                    </p>
                    <p>
                        <input type="radio" name="sector" value="Suporte Financeiro" /> Suporte Financeiro
                    </p>
                    <p>
                        <label>Assunto:</label>
                        <input name="subject" size="50" type="text" maxlength="30" />
                    </p>
                    <p>
                        <label>Descri&ccedil;&atilde;o:</label>
                        <textarea name="description" rows="10"></textarea>
                    </p>
                    <p>
                        Não use os caracteres: " (aspas) ' (ap&oacute;stofro) ; (ponto e v&iacute;rgula)
                    </p>
                    <p>
                        <input type='Submit' class='button' value='Abrir Pedido' />
                    </p>
                 </form>           
                 {#RespostWrite}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}
