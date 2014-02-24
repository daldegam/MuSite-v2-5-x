{#INCLUDE:header} 

        <!-- Body -->
        <div id="subbody">

        <!-- Left Wrap --> 
            <!-- Body Left -->
            {#INCLUDE:menuLeft}
            <!-- //Body Left --> 
        <!-- //Left Wrap -->

        <!-- Right Wrap -->
        <div id="subright">
                                             
            <!-- Location & Sub Title -->
            <div class="locationtitle">
                <div class="location">
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>PAINEL DO USUÁRIO</strong>
                </div>
                <h3 class="subtitle">Painel do usuário</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    {#INCLUDE:menuPanelUser} 
                            
                    <h1 style="margin-top: 20px;">Alterar Dados</h1>
                        
                        <div id="etc" style="margin-bottom: 26px;">
                        {#RespostWrite}
                        </div>
                            
                        <div class="legend" style="margin-bottom: 25px;">
                              <h3 class="legend-title"><span style="font-size: 13px;">Dados da minha conta</span></h3>
                                 <div style="margin-bottom: 8px; margin-top: 10px;">
                                <form action="?page=paneluser&amp;option=MODIFY_DATA&amp;Write=1" method="post">
                                <em>Meu nome:</em><br /><input name='userName' type='text' class="inputbox" value='{#MEMB_NAME}' maxlength='10' /><br />
                                <em>Meu telefone:</em><br /><input name='userTel' type='text' class="inputbox" value='{#TEL__NUMB}' maxlength='15' /><br />
                                <em>Meu email:</em><br /><input name='userMail' type='text' class="inputbox" value='{#MAIL_ADDR}' readonly='readonly' /><br />
                                <input type='submit' value='Alterar' class='button' style="margin-top: 6px;"/>
                                </form>
                                 </div>
                        </div>
                                  
                        <div class="legend" style="margin-bottom: 1px;">
                              <h3 class="legend-title"><span style="font-size: 13px;">Senha de acesso</span></h3>
                              <div style="margin-bottom: 8px; margin-top: 10px;">
                                 <form action="?page=paneluser&amp;option=MODIFY_DATA&amp;Write=2" method="post">
                                <em>Senha atual:</em><br /><input name='userPwd' type='password' class="inputbox" maxlength='10' /><br />
                                <em>Senha Nova:</em><br /><input name='userPwdNew' type='password' class="inputbox" maxlength='10' /><br />
                                <em>Senha Nova:</em><br /><input name='userPwdNewRe' type='password' class="inputbox" maxlength='10' /><br />
                                <em>Pergunta secreta:</em><br /><strong>{#USER_FQUEST}</strong><br />
                                <em>Resposta Secreta:</em><br /><input name='userAnswer' type='text' class="inputbox" maxlength='50' /><br />
                                <input type='submit' value='Alterar' class='button' style="margin-top: 6px;"/><br />
                                </form> 
                             </div>
                        </div>
                            
                </div>           
            </div>
            <!-- //Content -->

        </div>
        <!-- //Right Wrap -->
               
    </div>     
    <!-- //Body -->

     
        <!-- Footer -->
                          
<div id="subbottomPanel"></div>
{#INCLUDE:footer}