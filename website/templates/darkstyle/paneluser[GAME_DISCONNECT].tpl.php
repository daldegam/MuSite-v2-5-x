{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Desconectar conta</h2>
                <p><strong>Essa opção irá desconectar sua conta do jogo.</strong></p>
                <form action="?page=paneluser&amp;option=GAME_DISCONNECT&amp;Write=true" method="post">
                    <p>
                        <label>Minha senha:</label>
                        <input name='password' type='password' maxlength='10' />
                    </p>
                    <p>
                        <input type='submit' value='Desconectar' class='button' />
                    </p>
                </form>
                {#RespostWrite}
            </div>
                         
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}