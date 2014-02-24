<h1>Logar-se</h1>
<div class='quadros'>
<label>Login:</label> <input id='userName' type='text' size='20' maxlength="12" />
<label>Senha:</label> <input id='userPwd' type='password' size='20' maxlength="12" />
<input value='ok' type='submit' class='button'  onclick="javascript: Verify ('?page=ajax&amp;require=login&amp;userName='+ document.getElementById('userName').value+'&amp;userPwd='+ document.getElementById('userPwd').value, 'ResultAjaxLogin', 'get'); " />
<div id="ResultAjaxLogin"></div>
<div><a href="?page=recovery&amp;type=password">Recuperar minha senha</a></div>
</div>