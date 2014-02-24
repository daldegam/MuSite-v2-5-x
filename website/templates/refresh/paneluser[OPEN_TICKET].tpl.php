{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Abrir Ticket</h1>
                    {#RespostWrite}
                    <div class='quadros'>
                      <form action='?page=paneluser&amp;option=OPEN_TICKET&amp;Write=true' method="post">
                        <table align='center' border='0' cellpadding='1' cellspacing='1' width='330'>
                          <tr><td colspan='2' align='center'><strong>Preencha todos os campos abaixo para abrir o pedido!</strong></td></tr>
                          <tr><td height=15>&nbsp;</td></tr>
                          <tr>
                            <td align='right' width=20%><strong>Personagem:</strong></td>
                            <td align='left'> <select name="character">{#CHARACTER_LIST_TAG_OPTION}</select></td>
                          </tr>
                          <tr>
                            <td align='right' width=20%><strong>Setor:</strong></td>
                            <td align='left'><input type="radio" name="sector" checked="checked" value="Suporte Tecnico" />Suporte Técnico<br /><input type="radio" name="sector" value="Suporte Financeiro" />Suporte Financeiro</td>
                          </tr>
                          <tr>
                            <td align='right' width=20%><strong>Assunto:</strong></td>
                            <td align='left'><input name="subject" size="50" type="text" maxlength="30" /></td>
                          </tr>
                          <tr>
                            <td align='right' width=20%><strong>Descrição:</strong></td>
                            <td align='left'><textarea name="description" rows="10">Descreva aqui o motivo para que nossa equipe possa analizar.</textarea></td>
                          </tr>
                          <tr>
                            <td align='center' colspan=2><font color="red">Não use os caracteres: " (aspas) ' (apostofro) ; (ponto e virgula)</font></td>
                          </tr>
                          <tr>
                            <td align='center' colspan=2><input type='Submit' class='button' value='Abrir Pedido' /></td>
                          </tr>
                        </table>
                       </form>           
                    </div>    
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}