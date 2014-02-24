{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser}
 					
                    <h1>Enviar SMS</h1>
                    <div class='quadros'>
                      <form action='?page=paneluser&amp;option=SEND_SMS&amp;Write=true' method='post'>
                        <table align='center' border='0' cellpadding='1' cellspacing='1' width='100%'>
                          <tr><td colspan='4' align='center'><strong>Preencha os dados abaixo para enviar o SMS:</strong></td></tr>
                          <tr><td height=15>&nbsp;</td></tr>
                          <tr>
                            <td align='right'><strong>Para: </strong></td>
                            <td>{#INPUT_RADIOS_NUMBERS}</td>
                          </tr>
                          <tr>
                            <td align='right'><strong>Mensagem: </strong></td><td><input name="mensagem" type="text" maxlength="{#MAXLENGHT}" value="Maximo {#MAXLENGHT} Caracters" size="35" /></td>
                          </tr>
                          <tr>
                            <td align='center' colspan=2><input type=submit value='Enviar Mensagem' class='button' /></td>
                          </tr>
                        </table>
                      </form>            
                    </div>
                    {#RespostWrite}    
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}