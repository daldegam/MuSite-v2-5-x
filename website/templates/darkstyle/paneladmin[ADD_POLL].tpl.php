{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do Administrador <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelAdmin}
            
            <div class="contentBox">
                <h2 class="noMargin">Adcionar enquete</h2>
                <form action="?page=paneladmin&option=ADD_POLL&action=insert" method="post" class="quadros">
                    <p>
                        <label>Pergunta da enquete:</label>
                        <input name="question" type="text" value="" maxlength="50" />
                    </p>
                    <p>
                        <label>Resposta 01:</label>
                        <input name="answer[]" type="text" value="" maxlength="50" />
                    </p>
                    <p>
                        <label>Resposta 02:</label>
                        <input name="answer[]" type="text" value="" maxlength="50" />
                    </p>
                    <p>
                        <label>Resposta 03:</label>
                        <input name="answer[]" type="text" value="" maxlength="50" />
                    </p>
                    <p>
                        <label>Resposta 04:</label>
                        <input name="answer[]" type="text" value="" maxlength="50" />
                    </p>
                    <p>
                        <label>Resposta 05:</label>
                        <input name="answer[]" type="text" value="" maxlength="50" />  
                    </p>
                    <p>
                        <input type="submit" class="button" value="Cadastrar" />
                    </p>
                </form>    
                {#POLL_RESULT_ADMIN}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}