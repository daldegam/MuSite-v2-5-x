{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
						<script language='JavaScript'> 
                        function Enviar_Check(){ 
                          var login = document.getElementById('login').value;
                          var senha = document.getElementById('senha').value;
                          var resenha = document.getElementById('resenha').value;
                          var email = document.getElementById('email').value;
                          var reemail = document.getElementById('reemail').value;
                          var nome = document.getElementById('nome').value;
                          var telefone = document.getElementById('telefone').value;
                          var sexo = document.getElementById('sexo').value;
                          var nascimento_dia = document.getElementById('nascimento_dia').value;
                          var nascimento_mes = document.getElementById('nascimento_mes').value;
                          var nascimento_ano = document.getElementById('nascimento_ano').value;
                          var pergunta = document.getElementById('pergunta').value;
                          var resposta = document.getElementById('resposta').value;
                           if(login == '' || senha == '' || resenha == '' || email == '' || reemail == '' || nome == '' || telefone == '' || sexo == '' || nascimento_dia == '' || nascimento_mes == '' || nascimento_ano == '' || pergunta == '' || resposta == '') {
                               alert("Erro: Você deve preencher todos os campos antes de prosseguir.");
                           } else {
                               document.cadastro.submit(); 
                           }
                        }
                        </script>
                        <h1>Cadastro</h1>
                        <div id='resultados'></div>
                        {#RESULT_REGISTER}
                        <form name='cadastro' action='?page=register&write=true' method='post'>
                            <table width='100%' border='0'>
                             <tr>
                              <td colspan='3'><strong>Dados da Conta:</strong><hr></td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Login: </strong></td>
                              <td><input name='login' id='login' onkeyup="this.value=this.value.toLowerCase()" maxlength='10' type='text' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;login='+ document.getElementById('login').value, 'resultados', 'get'); "/></td>
                              <td><div id='login_error'></div></td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Senha: </strong></td>
                              <td><input name='senha' id='senha' maxlength='10' type='password' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;senha='+ document.getElementById('senha').value+'&amp;resenha='+ document.getElementById('resenha').value, 'resultados', 'get'); "/></td>
                              <td>&nbsp;</td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Repetir Senha: </strong></td>
                              <td><input name='resenha' id='resenha' maxlength='10' type='password' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;senha='+ document.getElementById('senha').value+'&amp;resenha='+ document.getElementById('resenha').value, 'resultados', 'get'); "/></td>
                              <td><div id='senha_error'></div></td>
                             </tr>
                             <tr>
                              <td align='right'><strong>E-mail: </strong></td>
                              <td><input name='email' id='email' maxlength='40' type='text' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;email='+ document.getElementById('email').value+'&amp;reemail='+ document.getElementById('reemail').value, 'resultados', 'get'); " /></td>
                              <td>&nbsp;</td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Repetir E-mail: </strong></td>
                              <td><input name='reemail' id='reemail' maxlength='40' type='text' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;email='+ document.getElementById('email').value+'&amp;reemail='+ document.getElementById('reemail').value, 'resultados', 'get'); "/></td>
                              <td><div id='email_error'></div></td>
                             </tr>
                             <tr>
                              <td colspan='3' align='right'><strong><font color='#B11A1A'>Obs.: Use de preferência um e-mail cadastrado no MSN Messenger válido, pois só através dele você poderá alterar/recuperar os dados de sua conta.</font></strong></td>
                             </tr>
                             <tr>
                              <td colspan='3'><br /><strong>Dados Pessoais:</strong><hr></td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Nome: </strong></td>
                              <td><input name='nome' id='nome' maxlength='10' type='text' class='' /></td>
                              <td>&nbsp;</td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Telefone: </strong></td>
                              <td><input name='telefone' id='telefone' maxlength='80' type='text' class='' /></td>
                              <td>&nbsp;</td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Sexo: </strong></td>
                              <td><select name='sexo' id='sexo'><option value='Feminino'>Feminino</option><option value='Masculino'>Masculino</option></select></td>
                              <td>&nbsp;</td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Nascimento: </strong></td>
                              <td><select name='nascimento_dia' id='nascimento_dia'>
                                      <option value=''>Dia</option>
                                      <option value='01'>01</option>
                                      <option value='02'>02</option>
                                      <option value='03'>03</option>
                                      <option value='04'>04</option>
                                      <option value='05'>05</option>
                                      <option value='06'>06</option>
                                      <option value='07'>07</option>
                                      <option value='08'>08</option>
                                      <option value='09'>09</option>
                                      <option value='10'>10</option>
                                      <option value='11'>11</option>
                                      <option value='12'>12</option>
                                      <option value='13'>13</option>
                                      <option value='14'>14</option>
                                      <option value='15'>15</option>
                                      <option value='16'>16</option>
                                      <option value='17'>17</option>
                                      <option value='18'>18</option>
                                      <option value='19'>19</option>
                                      <option value='20'>20</option>
                                      <option value='21'>21</option>
                                      <option value='22'>22</option>
                                      <option value='23'>23</option>
                                      <option value='24'>24</option>
                                      <option value='25'>25</option>
                                      <option value='26'>26</option>
                                      <option value='27'>27</option>
                                      <option value='28'>28</option>
                                      <option value='29'>29</option>
                                      <option value='30'>30</option>
                                      <option value='31'>31</option>
                                    </select> 
                                    <select name='nascimento_mes' id='nascimento_mes'>
                                      <option value=''>M&ecirc;s</option>
                                      <option value='01'>01</option>
                                      <option value='02'>02</option>
                                      <option value='03'>03</option>
                                      <option value='04'>04</option>
                                      <option value='05'>05</option>
                                      <option value='06'>06</option>
                                      <option value='07'>07</option>
                                      <option value='08'>08</option>
                                      <option value='09'>09</option>
                                      <option value='10'>10</option>
                                      <option value='11'>11</option>
                                      <option value='12'>12</option>
                                    </select> 
                                    <select name='nascimento_ano' id='nascimento_ano'>
                                      <option value=''>Ano</option>
                                      <option value='2008'>2008</option>
                                      <option value='2007'>2007</option>
                                      <option value='2006'>2006</option>
                                      <option value='2005'>2005</option>
                                      <option value='2004'>2004</option>
                                      <option value='2003'>2003</option>
                                      <option value='2002'>2002</option>
                                      <option value='2001'>2001</option>
                                      <option value='2000'>2000</option>
                                      <option value='1999'>1999</option>
                                      <option value='1998'>1998</option>
                                      <option value='1997'>1997</option>
                                      <option value='1996'>1996</option>
                                      <option value='1995'>1995</option>
                                      <option value='1994'>1994</option>
                                      <option value='1993'>1993</option>
                                      <option value='1992'>1992</option>
                                      <option value='1991'>1991</option>
                                      <option value='1990'>1990</option>
                                      <option value='1989'>1989</option>
                                      <option value='1988'>1988</option>
                                      <option value='1987'>1987</option>
                                      <option value='1986'>1986</option>
                                      <option value='1985'>1985</option>
                                      <option value='1984'>1984</option>
                                      <option value='1983'>1983</option>
                                      <option value='1982'>1982</option>
                                      <option value='1981'>1981</option>
                                      <option value='1980'>1980</option>
                                      <option value='1979'>1979</option>
                                      <option value='1978'>1978</option>
                                      <option value='1977'>1977</option>
                                      <option value='1976'>1976</option>
                                      <option value='1975'>1975</option>
                                      <option value='1974'>1974</option>
                                      <option value='1973'>1973</option>
                                      <option value='1972'>1972</option>
                                      <option value='1971'>1971</option>
                                      <option value='1970'>1970</option>
                                      <option value='1969'>1969</option>
                                      <option value='1968'>1968</option>
                                      <option value='1967'>1967</option>
                                      <option value='1966'>1966</option>
                                      <option value='1965'>1965</option>
                                      <option value='1964'>1964</option>
                                      <option value='1963'>1963</option>
                                      <option value='1962'>1962</option>
                                      <option value='1961'>1961</option>
                                      <option value='1960'>1960</option>
                                      <option value='1959'>1959</option>
                                      <option value='1958'>1958</option>
                                      <option value='1957'>1957</option>
                                      <option value='1956'>1956</option>
                                      <option value='1955'>1955</option>
                                      <option value='1954'>1954</option>
                                      <option value='1953'>1953</option>
                                      <option value='1952'>1952</option>
                                      <option value='1951'>1951</option>
                                      <option value='1950'>1950</option>
                                      <option value='1949'>1949</option>
                                      <option value='1948'>1948</option>
                                      <option value='1947'>1947</option>
                                      <option value='1946'>1946</option>
                                      <option value='1945'>1945</option>
                                      <option value='1944'>1944</option>
                                      <option value='1943'>1943</option>
                                      <option value='1942'>1942</option>
                                      <option value='1941'>1941</option>
                                      <option value='1940'>1940</option>
                                      <option value='1939'>1939</option>
                                      <option value='1938'>1938</option>
                                      <option value='1937'>1937</option>
                                      <option value='1936'>1936</option>
                                      <option value='1935'>1935</option>
                                      <option value='1934'>1934</option>
                                      <option value='1933'>1933</option>
                                      <option value='1932'>1932</option>
                                      <option value='1931'>1931</option>
                                      <option value='1930'>1930</option>
                                      <option value='1929'>1929</option>
                                      <option value='1928'>1928</option>
                                      <option value='1927'>1927</option>
                                      <option value='1926'>1926</option>
                                      <option value='1925'>1925</option>
                                      <option value='1924'>1924</option>
                                      <option value='1923'>1923</option>
                                      <option value='1922'>1922</option>
                                      <option value='1921'>1921</option>
                                      <option value='1920'>1920</option>
                                      <option value='1919'>1919</option>
                                      <option value='1918'>1918</option>
                                      <option value='1917'>1917</option>
                                      <option value='1916'>1916</option>
                                      <option value='1915'>1915</option>
                                      <option value='1914'>1914</option>
                                      <option value='1913'>1913</option>
                                      <option value='1912'>1912</option>
                                      <option value='1911'>1911</option>
                                      <option value='1910'>1910</option>
                                      <option value='1909'>1909</option>
                                      <option value='1908'>1908</option>
                                      <option value='1907'>1907</option>
                                      <option value='1906'>1906</option>
                                      <option value='1905'>1905</option>
                                      <option value='1904'>1904</option>
                                    </select></td>
                              <td>&nbsp;</td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Pergunta Secreta: </strong></td>
                              <td colspan='2'><select name='pergunta' id='pergunta'>
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
                                  </select></td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Resposta Secreta: </strong></td>
                              <td colspan='2'><input name='resposta' id='resposta' onkeyup="this.value=this.value.toLowerCase()" size='52' maxlength='50' type='text' class='' /></td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Código: </strong></td>
                              <td colspan='2'><img src="?page=captcha" style="border:none;" /></td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Repita o Código: </strong></td>
                              <td colspan='2'><input name='codigo' id='codigo' onkeyup="this.value=this.value.toLowerCase()" size='21' maxlength='8' type='text' class='' /></td>
                             </tr>
                              <?php
                              global $REGISTER_SETTINGS;
                                if($REGISTER_SETTINGS['BONUS_ITEM']['ACTIVE'] == true):
                              ?>
                             <tr>
                              <td colspan='3'><br /><strong>Bônus de cadastro:</strong><hr></td>
                             </tr>
                             <tr>
                              <td align='right'><strong>Selecione o bônus: </strong></td>
                              <td colspan='2'><select name="registerBonus"><option value="-1">Nenhum</option>{#REGISTER_OPTIONS_BONUS}</select></td>
                             </tr
                              <?php
                                endif;
                              ?>
                             <tr>
                              <td colspan='3'><br /><strong>Termos de Uso:</strong><hr></td>
                             </tr>
                             <tr>
                              <td colspan='3'><iframe src='templates/refresh/termos.tpl.php' width='500' height='180'></iframe></td>
                             </tr>
                             <tr>
                              <td colspan='3' align='center'><input type='button' onclick='Enviar_Check()' value='Cadastrar (Declaro concordar com os termos de uso)' class='button'></td>
                             </tr>
                            </table>
                      </form>
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}