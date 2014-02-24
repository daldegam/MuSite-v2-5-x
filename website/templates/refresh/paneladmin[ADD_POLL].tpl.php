{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1> 
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Adicionar Enquete</h1>
                    <form action="?page=paneladmin&option=ADD_POLL&action=insert" method="post" class="quadros">
                        Pergunta da enquete: <br /><input name="question" type="text" value="" maxlength="50" /><br />
                        Resposta 01: <br /><input name="answer[]" type="text" value="" maxlength="50" /><br />
                        Resposta 02: <br /><input name="answer[]" type="text" value="" maxlength="50" /><br />
                        Resposta 03: <br /><input name="answer[]" type="text" value="" maxlength="50" /><br />
                        Resposta 04: <br /><input name="answer[]" type="text" value="" maxlength="50" /><br />
                        Resposta 05: <br /><input name="answer[]" type="text" value="" maxlength="50" /><br />                                              
                        <input type="submit" class="button" value="Cadastrar" /><br />
                        {#POLL_RESULT_ADMIN}
                    </form>                  
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}