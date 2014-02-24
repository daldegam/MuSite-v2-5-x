{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Alterar Personal ID</h2>
                <p><strong>Aten&ccedil;&atilde;o:</strong> o personal ID serve para quando voc&ecirc; vai deletar ou sair de uma guild ou deletar um personagem. Com o Personal ID sua conta estar&aacute; mais segura.</p>
                <form action="?page=paneluser&amp;option=MODIFY_PERSONALID&amp;Write=true" method="post">
                    <p>
                    	<label>Digite um número de 7 caracteres:</label>
                        <input name='pid' type='text' value='' maxlength='7' />
                    </p>
                    <p>
                        <label>Digite sua senha:</label>
                        <input name='pwd' type='text' value='' maxlength='10' />
                    </p>
                    <p>
                        <input type='submit' class='button' value='Alterar Personal ID' />
                    </p>
                </form>
                {#RespostWrite}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}