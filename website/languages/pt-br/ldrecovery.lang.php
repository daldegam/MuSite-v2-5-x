<?php
/**
* Aqui serão definidos os textos da classe ldRecovery do site.
*/
DEFINE("RECOVERY_FILL_LOGIN", "Erro, Digite um login!");
DEFINE("RECOVERY_BACK", "Voltar");
DEFINE("RECOVERY_LOGIN_NOT_FOUND", "Erro, Login n&atilde;o cadastrado no banco de dados!");
DEFINE("RECOVERY_WAIT_TIME_FOR_SEND_AGAIN", "Erro, o tempo de espera para enviar um novo email é %d minutos!");
DEFINE("RECOVERY_TRY_AGAIN", "Erro, Tente novamente dentro de alguns instantes.<br/>Obrigado.");
DEFINE("RECOVERY_EMAIL_SUBJECT", "Recuperar Senha (".TITLE_SITE.")");
DEFINE("RECOVERY_LOGIN", "Login");

DEFINE("RECOVERY_SEND_SUCCESS", "Sua senha foi enviada para o e-mail de cadastro da sua conta!<br/>Obs.: Se voc&ecirc; usa e-mail no Hotmail, verifique a pasta: Lixo Eletr&ocirc;nico.<br/>Obrigado.");
DEFINE("RECOVERY_SEND_SUCCESS_MD5", "Sua senha foi enviada para o e-mail de cadastro da sua conta juntamente com um link para ativação da senha!<br/>Obs.: Se voc&ecirc; usa e-mail no Hotmail, verifique a pasta: Lixo Eletr&ocirc;nico.<br/>Obrigado.");

DEFINE("RECOVERY_EMAIL_BODY", "Atenção!<br />Esse e-mail é uma mensagem automatica gerada pelo ".TITLE_SITE."!<br /><br />Seu Login de acesso é: %s<br /><br />Sua Senha de acesso é: %s<br /><br />Sua resposta secreta é: %s<br />Ip do usuário que solicitou a senha: %s<br />Tenha um bom jogo!<br />Equipe ".TITLE_SITE.".<br />");
DEFINE("RECOVERY_EMAIL_BODY_MD5", "Atenção!<br />Esse e-mail é uma mensagem automatica gerada pelo ".TITLE_SITE."!<br /><br />Seu Login de acesso é: %s<br /><br />Sua Senha de acesso é: %s<br /><br />Sua resposta secreta é: %s<br />Ip do usuário que solicitou a senha: %s<br /><br />Para confirmar a sua nova senha, clique no link abaixo: <a href=\"%s\">%s</a><br /><br />Tenha um bom jogo!<br />Equipe ".TITLE_SITE.".<br />");

DEFINE("RECOVERY_EMAIL_ERROR_LINK_MD5", "Erro no link acessado, o link parece estar faltando informações!");
DEFINE("RECOVERY_EMAIL_CHECK_SUCCESS_MD5", "Sua nova senha foi gravada com sucesso!");

?>