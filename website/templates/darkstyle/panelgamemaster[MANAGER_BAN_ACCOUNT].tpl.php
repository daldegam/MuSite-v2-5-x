{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Game Master <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelGamemaster}

            <div class="contentBox">
                <h2 class="noMargin">Banir/desbanir conta</h2>
                <form action="?page=panelgamemaster&amp;option=MANAGER_BAN_ACCOUNT&amp;Write=true" method="post">
                <p>
                    <label>Login:</label>
                    <input name="account" type="text" value="" />
                </p>
                <p>
                    <label>Ou Personagem:</label>
                    <input name="character" type="text" value="" />
                </p>
                <p>
                    <label>A&ccedil;&atilde;o:</label>
                    <select name="action">
                        <option value="1">Banir</option>
                        <option value="2">Desbanir</option>
                    </select>
                </p>
                <p>
                    <label>Banir em (dias):</label>
                    <input name="days" type="text" value="0" />
                </p>
                <p>
                    <label>Motivo:</label>
                    <input name="description" type="text" value="" maxlength="50" />
                </p>
                <p>
                    <input type="submit" value="Enviar" class="button" />
                </p>
                </form>
                {#RESULTTPL}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}