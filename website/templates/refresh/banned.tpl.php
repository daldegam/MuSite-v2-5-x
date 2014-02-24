{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                  <h1>{#BannedTitle}</h1>
                  <div class="quadros">
				    <table border='0' width='100%'>
                      <tr>
                       <td align='center' bgcolor='#E2DEC5'><strong>Nome</strong></td>      
                       <td align='center' bgcolor='#E2DEC5'><strong>Expira</strong></td>
                       <td align='center' bgcolor='#E2DEC5'><strong>Banidor por</strong></td>
                       <td align='center' bgcolor='#E2DEC5'><strong>Motivo</strong></td>
                      </tr>
                      {#BANNED_RESULT}
                    </table>
                  </div>
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
