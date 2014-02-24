<div id="LoginPanel1_pnlLogInBefore" name="pnlLogInBefore">
    
<div id="loginBox">
<fieldset>
    <legend>Login</legend>
    <div class="inputtxt">
        <label for="userID" class="login_id"><span>ID</span><input type="text" id="userName" name="userName" maxlength="10"  title="Login" tabindex="1" class="on" onfocus="input.login(this);" onkeypress="return raiseEnterAction(event,'btnLogin')" /></label>
        <label for="userPW" class="login_pw"><span>PW</span><input type="password" id="userPwd" name="userPwd" maxlength="10" title="Senha" tabindex="2" class="on" onfocus="input.login(this);" onkeypress="return raiseEnterAction(event,'btnLogin')"/></label>

    </div>
    <div class="inputbtn">
        <img src="templates/sunonline/images/common/btn/bt_login.gif" onclick="javascript: Verify ('?page=ajax&amp;require=login&amp;userName='+ document.getElementById('userName').value+'&amp;userPwd='+ document.getElementById('userPwd').value, 'ResultAjaxLogin', 'get'); " style="cursor:pointer" alt="Log in" id="btnLogin" />
    </div>
</fieldset>
<div id="ResultAjaxLogin" style="margin-left: 16px; color: #CFB988;"></div>
<ul class="membermnu">
    <li><a href="?page=recovery&amp;type=password">Recuperar sua senha</a></li>
    <li><a href="?page=register">Não tem conta? <u class="signup">Cadastre-se</u></a></li>

    <!--li class="cash"><a href="http://member.webzen.com/Login/Default.aspx?sGC=102&sRU=http://payment.webzen.com/Main/Main_GB_C.asp">Buy W Coin</a></li>
    <li class="gift"><a href="http://itemshop.muonline.webzen.com/Main/Main_Mu.asp">Gift W Coin</a></li-->
</ul>
</div>

</div>