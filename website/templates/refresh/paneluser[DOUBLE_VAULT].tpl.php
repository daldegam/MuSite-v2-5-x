{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser}
 					
                    <h1>Bau Duplo</h1>
                    {#RespostWrite}
                    <div class="quadros">
                    <div align=center><strong>Atenção, usando essa opção você mudará o seu bau para o alternativo. Para desfazer essa ação apenas mude novamente.</strong></div><br />
                    <form action="?page=paneluser&amp;option=DOUBLE_VAULT&amp;Write=true" method="post">
                    <em>Minha senha:</em><br /><input name='userPwd' type='password' maxlength='10' /><br />
                    <input type='submit' value='Alterar Bau' class='button' /><br />
                    </form>
			 
                    </div>
                </div>
                
                {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}