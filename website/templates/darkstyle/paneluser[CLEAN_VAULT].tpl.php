{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Limpar ba&uacute;</h2>
                <p><strong>Atenção, as ações realizadas nessa página não podem ser desfeitas.</strong></p>
                <form action="?page=paneluser&amp;option=CLEAN_VAULT&amp;Write=true" method="post">
                    <p>
                        <label>Limpar ba&uacute; 1:</label>
                        <select name='Vault1'>
                            <option value='0'>Não</option>
                            <option value='1'>Sim</option>
                        </select>
                    </p>
                    <p>
                        <label>Limpar ba&uacute; 2:</label>
                        <select name='Vault2'>
                            <option value='0'>Não</option>
                            <option value='1'>Sim</option>
                        </select>
                    </p>
                    <p>
                        <label>Limpar zen:</label>
                        <select name='Zen'>
                            <option value='0'>Não</option>
                            <option value='1'>Sim</option>
                        </select>
                    </p>
                    <p>
                        <label>Minha senha:</label>
                        <input name='Pwd' type='password' maxlength='10' />
                    </p>
                    <p>
                        <input type='submit' value='Limpar' class='button' />
                    </p>
                </form>
                {#RespostWrite}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}
