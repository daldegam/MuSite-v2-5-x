<label>Login:</label><input id="userName" type="text" size="26" maxlength="12" class="inputbox" /><br />
<label>Senha:</label><input id="userPwd" type="password" size="26" maxlength="12" class="inputbox" /><br />
<div style="margin-top: 3px; margin-bottom: 3px;">
<input value="LOGAR" type="submit" class="button" onclick="javascript: Verify ('?page=ajax&amp;require=login&amp;userName='+ document.getElementById('userName').value+'&amp;userPwd='+ document.getElementById('userPwd').value, 'ResultAjaxLogin', 'get'); " />
</div>
<div id="ResultAjaxLogin" style="margin-top: 5px; margin-bottom: 5px;"></div>
<div><a href="?page=recovery&amp;type=password">Recuperar minha senha</a></div>