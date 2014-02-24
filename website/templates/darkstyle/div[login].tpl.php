<h4>Logar-se</h4>    
<div class="sidebox">      
    <p>
        <label>Login:</label>
        <input id='userName' type='text' size='20' maxlength="12" />
    </p>
    <p>
        <label>Senha:</label>
        <input id='userPwd' type='password' size='20' maxlength="12" />
    </p>
    <p>
        <input value='ok' type='submit' class='button'  onclick="javascript: Verify ('?page=ajax&amp;require=login&amp;userName='+ document.getElementById('userName').value+'&amp;userPwd='+ document.getElementById('userPwd').value, 'ResultAjaxLogin', 'get'); " />
        <div id="ResultAjaxLogin"></div>
    </p>
    <p>
    	<a href="?page=recovery&amp;type=password">Recuperar minha senha</a>
    </p>
</div>