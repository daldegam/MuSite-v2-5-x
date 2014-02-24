{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Resetar Personagem</h1>
                    <div class='quadros'>
                      <table width='100%' cellspacing='2' cellpadding='2' border='0'>
                      <tr>
                       <td width='50%'><strong>Escolha o personagem a ser resetado:</strong> </td>
                       <td>
                        <select name='personagem' onchange="location='?page=paneluser&amp;option=RESET&amp;character='+this.options[this.selectedIndex].value">
                          <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                          {#CHARACTER_LIST_TAG_OPTION}
                        </select>
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