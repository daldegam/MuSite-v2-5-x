{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Alterar dados</h2>
                <p><strong>Dados da minha conta</strong></p>
                <form action="?page=paneluser&amp;option=MODIFY_DATA&amp;Write=1" method="post">
                	<p>
                        <label>Meu nome:</label>
                        <input name='userName' type='text' value='{#MEMB_NAME}' maxlength='10' />
                    </p>
                    <p>
                        <label>Meu telefone:</label>
                        <input name='userTel' type='text' value='{#TEL__NUMB}' maxlength='15' />
                    </p>
                    <p>
                        <label>Meu email:</label>
                        <input name='userMail' type='text' value='{#MAIL_ADDR}' readonly='readonly' />
                    </p>
                    <p>
                        <input type='submit' value='Alterar' class='button'/>
                    </p>
                </form>
                
                <p style="margin-top: 20px;"><strong>Senha de acesso</strong></p>
                <form action="?page=paneluser&amp;option=MODIFY_DATA&amp;Write=2" method="post">
                	<p>
                        <label>Senha atual:</label>
                        <input name='userPwd' type='password' maxlength='10' />
                    </p>
                    <p>
                        <label>Senha Nova:</label>
                        <input name='userPwdNew' type='password' maxlength='10' />
                    </p>
                    <p>
                        <label>Senha Nova:</label>
                        <input name='userPwdNewRe' type='password' maxlength='10' />
                    </p>
                    <p>
                        <label>Pergunta secreta:</label>
                        <span id="fquestion">{#USER_FQUEST}</span>
                    </p>
                    <p>
                        <label>Resposta Secreta:</label>
                        <input name='userAnswer' type='text' maxlength='50' />
                    </p>
                    <p>
                        <input type='submit' value='Alterar' class='button'/>
                    </p>
                </form> 
                {#RespostWrite}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}