{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser}
 					
                    <h1>Alterar Dados</h1>
                    {#RespostWrite}
                    <div class='quadros'>
                        <div align='center'><strong>Dados da minha conta</strong></div>
                        <form action="?page=paneluser&amp;option=MODIFY_DATA&amp;Write=1" method="post">
                        <em>Meu nome:</em><br /><input name='userName' type='text' value='{#MEMB_NAME}' maxlength='10' /><br />
                        <em>Meu telefone:</em><br /><input name='userTel' type='text' value='{#TEL__NUMB}' maxlength='15' /><br />
                        <em>Meu email:</em><br /><input name='userMail' type='text' value='{#MAIL_ADDR}' readonly='readonly' /><br />
                        <input type='submit' value='Alterar' class='button'/><br />
                        </form>
                        
                        <div align='center'><strong>Senha de acesso</strong></div>
                        <form action="?page=paneluser&amp;option=MODIFY_DATA&amp;Write=2" method="post">
                        <em>Senha atual:</em><br /><input name='userPwd' type='password' maxlength='10' /><br />
                        <em>Senha Nova:</em><br /><input name='userPwdNew' type='password' maxlength='10' /><br />
                        <em>Senha Nova:</em><br /><input name='userPwdNewRe' type='password' maxlength='10' /><br />
                        <em>Pergunta secreta:</em><br /><strong>{#USER_FQUEST}</strong><br />
                        <em>Resposta Secreta:</em><br /><input name='userAnswer' type='text' maxlength='50' /><br />
                        <input type='submit' value='Alterar' class='button'/><br />
                        </form>                       
                    </div>
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}