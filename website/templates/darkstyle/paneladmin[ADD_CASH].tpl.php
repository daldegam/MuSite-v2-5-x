{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Administrador <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelAdmin}
            
            <div class="contentBox">
                <h2 class="noMargin">Adcionar {#CASH_NAME}</h2>
                <form action="?page=paneladmin&amp;option=ADD_CASH&amp;Write=true" method="post">
                <p>
                    <label>Login:</label>
                    <input name="account" type="text" value="" />
                </p>
                <p>
                    <label>Moeda a ser alterada:</label>
                    <select name="type"> <option value="1">{#CASH_NAME}</option> <option value="2">{#CASH_NAME2}</option> <option value="3">{#POINTS_NAME}</option> </select>
                </p>
                <p>
                	<label>Valor:</label>
                    <input name="amount" type="text" value="0" />
                </p>
                <p>
                	<input type="submit" value="Adicionar" class="button" />
                </p>
                </form>
                {#RESULTTPL}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}