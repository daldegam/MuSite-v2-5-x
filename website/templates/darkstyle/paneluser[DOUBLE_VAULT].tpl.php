{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Ba&uacute; duplo</h2>
                <p>
                	<strong>Aten&ccedil;&atilde;o, usando esta op&ccedil;&atilde;o você mudar&aacute; o seu ba&uacute; para o alternativo.
                	Para desfazer esta a&ccedil;&atilde;o apenas mude novamente.</strong>
               	</p>
                <form action="?page=paneluser&amp;option=DOUBLE_VAULT&amp;Write=true" method="post">
                    <p>
                        <label>Minha senha:</label>
                        <input name='userPwd' type='password' maxlength='10' />
                    </p>
                    <p>
                        <input type='submit' value='Alterar Bau' class='button' />
                    </p>
                </form>
                {#RespostWrite}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}
