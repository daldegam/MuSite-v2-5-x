{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser}
 					
                    <h1>Limpar Bau</h1>
                    {#RespostWrite}
                    <div class="quadros">
                    <div align=center><strong>Atenção, as ações realizadas nessa página não podem ser desfeitas.</strong></div><br />
                    <form action="?page=paneluser&amp;option=CLEAN_VAULT&amp;Write=true" method="post">
                    <em>Limpar bau 1:</em><br /><select name='Vault1'><option value='0'>Não</option><option value='1'>Sim</option></select><br />
                    <em>Limpar bau 2:</em><br /><select name='Vault2'><option value='0'>Não</option><option value='1'>Sim</option></select><br />
                    <em>Limpar zen:</em><br /><select name='Zen'><option value='0'>Não</option><option value='1'>Sim</option></select><br />
                    <em>Minha senha:</em><br /><input name='Pwd' type='password' maxlength='10' /><br />
                    <input type='submit' value='Limpar' class='button' /><br />
                    </form>
                    </div>
                </div>
                
                {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}