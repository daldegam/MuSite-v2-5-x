{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <div class="contentBox">
            	<h2 class="noMargin">Cadastro</h2>
                    <div id='resultados'></div>
                    <div class="qdestaques">{#RESULT_REGISTER}</div>
                    <form name='cadastro' action='?page=register&write=true' method='post' id="formRegister">
                    	<p>
                            <label>Login:</label>
                            <input name='login' id='login' maxlength='10' type='text' /></td>
                            <div id='login_error'></div>
                        </p>
                        <p>
                            <label>Senha:</label>
                            <input name='senha' id='senha' maxlength='10' type='password' onblur="javascript:  "/></td>
                        </p>
                        <p>
                            <label>Repetir Senha:</label>
                            <input name='resenha' id='resenha' maxlength='10' type='password' />
                            <div id='senha_error'></div>
                        </p>
                        <p>
                            <label>E-mail:</label>
                            <input name='email' id='email' maxlength='40' type='text' />
                        </p>
                        <p>
                            <label>Repetir E-mail:</label>
                            <input name='reemail' id='reemail' maxlength='40' type='text' />
                            <div id='email_error'></div>
                        </p>
                       	<p>Obs.: Use de preferência um e-mail cadastrado no MSN Messenger válido, pois só através dele você poderá alterar/recuperar os dados de sua conta.</p>
                        <p>
                            <label>Nome:</label>
                            <input name='nome' id='nome' maxlength='10' type='text' />
                        </p>
                            <label>Telefone:</label>
                            <input name='telefone' id='telefone' maxlength='80' type='text' />
                        </p>
                        <p>
                          	<label>Sexo:</label>
                            <select name='sexo' id='sexo'>
                            	<option value='Feminino'>Feminino</option>
                                <option value='Masculino'>Masculino</option>
                            </select>
                        </p>
                        <p>
                            <label>Nascimento:</label>
                            <select name='nascimento_dia' id='nascimento_dia'>
                                <option value=''>Dia</option>
                                <?php
									for($i = 0; $i <= 31; $i++)
									{
										$number = ($i >= 0 && $i <= 10) ? '0' . $i : $i;
										echo '<option value="' . $number . '">' . $number . '</option>';
									}
								?>
                            </select>
                        </p>
                        <p>
                            <select name='nascimento_mes' id='nascimento_mes'>
                                <option value=''>M&ecirc;s</option>
                                <?php
									for($i = 0; $i <= 12; $i++)
									{
										$number = ($i >= 0 && $i <= 10) ? '0' . $i : $i;
										echo '<option value="' . $number . '">' . $number . '</option>';
									}
								?>
                            </select> 
                        </p>
                        <p>
                            <select name='nascimento_ano' id='nascimento_ano'>
                                <option value=''>Ano</option>
                                <?php
									for($i = date("Y"); $i >= 1900; $i--)
									{
										echo '<option value="' . $i . '">' . $i . '</option>';
									}
								?>
                            </select>
                        </p>
                        <p>
                            <label>Pergunta Secreta:</label>
                            <select name='pergunta' id='pergunta'>
                                <option value=''>Selecione Uma pergunta</option>
                                <option value='Nome da sua primeira escola?'>Nome da sua primeira escola?</option>
                                <option value='Mascote da sua escola?'>Mascote da sua escola?</option>
                                <option value='Qual o nome da minha Bizavó?'>Qual o nome da minha Bizavó?</option>
                                <option value='Qual o nome da minha professora de Matematica?'>Qual o nome da minha professora de Matematica?</option>
                                <option value='Oque Você Sonha ser?'>Oque Você Sonha ser?</option>
                                <option value='Minha mãe se casou no dia? Ex: ##/##/####'>Minha mãe se casou no dia? Ex: ##/##/####</option>
                                <option value='Seus dois melhores amigos de infância?'>Seus dois melhores amigos de infância?</option>
                                <option value='Qual a cidade natal do meu bizavó?'>Qual a cidade natal do meu bizavó?</option>
                                <option value='Qual o nome do Tio da Avó do meu Cunhado?'>Qual o nome do Tio da Avó do meu Cunhado?</option>
                                <option value='O nome do Medico(a) que fez meu parto?'>O nome do Medico(a) que fez meu parto?</option>
                            </select>
                        </p>
                        <p>
                            <label>Resposta Secreta:</label>
                            <input name='resposta' id='resposta' size='52' maxlength='50' type='text' />
                        </p>
                        <?php
                          global $REGISTER_SETTINGS;
                            if($REGISTER_SETTINGS['BONUS_ITEM']['ACTIVE'] == true):
                        ?>
                        <p>
                            <label>Selecione o bônus de cadastro:</label>
                            <select name="registerBonus"><option value="-1">Nenhum</option>{#REGISTER_OPTIONS_BONUS}</select>
                        </p>
                        <?php
                            endif;
                        ?>
                        <p>
                            <label>Código:</label>
                            <img src="?page=captcha" style="border: none;" />
                        </p>
                        <p>
                          <label>Repita o Código:</label>
                          <input name='codigo' id='codigo' size='21' maxlength='8' type='text' />
                        </p>
                        <p>
                            <label>Termos de Uso:</label>
                        </p>
                        <p>
                            <iframe src='templates/darkstyle/termos.tpl.php' style="width: 500px; height: 180px; background: none; border: none;"></iframe>
                        </p>
                        <p>
                           <input type='submit' value='Cadastrar (Declaro concordar com os termos de uso)' class='button' />
                        </p>
                    </form>
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}