{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Transferir resets</h1>
                    <div class='quadros'>
                      <table width='100%' cellspacing='2' cellpadding='2' border='0'>
                      <tr>
                       <td><strong>Escolha os personagens:</strong> </td>
                       <td>
					   <form action="?page=paneluser&amp;option=RESET_TRANSFER&amp;Write=true" method="post">
                        <select name='character1'>
                          <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                          {#CHARACTER_LIST_TAG_OPTION}
                        </select>
                        <select name='character2'>
                          <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                          {#CHARACTER_LIST_TAG_OPTION}
                        </select>
						<input type='submit' value="Carregar" class="button" />
					   </form>
                       </td>
                      </tr>
                    </table>              
                    </div>
                    {#RespostWrite}    
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}