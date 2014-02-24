<?php
/**
* Aqui serão definidos os textos da classe ldRegister do site.
*/
DEFINE("REGISTER_LOGOUT_FOR_REGISTER", "Erro: Você precisa deslogar do site para criar uma nova conta.");

DEFINE("REGISTER_EMPTY_INPUTS", "Erro: Algum campo foi deixado em branco!");
DEFINE("REGISTER_INCORRECT_SECURITY_CODE", "Erro: Digite o c&oacute;digo corretamente.");
DEFINE("REGISTER_DO_NOT_USE_SYMBOLS_LOGIN", "Erro: N&atilde;o use s&iacute;mbolos no login.");      
DEFINE("REGISTER_DO_NOT_USE_SYMBOLS_PASSWORD", "Erro: N&atilde;o use s&iacute;mbolos na senha.");      
DEFINE("REGISTER_DO_NOT_USE_SYMBOLS_REPASSWORD", "Erro: N&atilde;o use s&iacute;mbolos na confirma&ccedil;&atilde;o da senha.");      
DEFINE("REGISTER_LOGIN_INVALID_SIZE", "Erro: N&atilde;o use mais de 10 caracters no login.");      
DEFINE("REGISTER_EMAIL_IN_USE", "<font color=\"#D82020\">Erro: Email em uso!</font>");
DEFINE("REGISTER_LOGIN_IN_USE", "Erro: Login em uso!");
DEFINE("REGISTER_PASSWORD_NOT_MATCH", "Erro: As Senhas n&atilde;o conferem!");
DEFINE("REGISTER_WRITE_VALID_EMAIL", "Erro: Digite um e-mail v&aacute;lido!");
DEFINE("REGISTER_EMAIL_NOT_MATCH", "Erro: Os E-mails n&atilde;o conferem");

DEFINE("REGISTER_BONUS_PACKET_DETAILS", "Itens que esse pacote possui");
DEFINE("REGISTER_SUCCESS_REGISTER_BONUS_ITEMS", "Foi creditado na sua conta o bônus de item: %s");

DEFINE("REGISTER_SUCCESS_REGISTER_BONUS_VIP", "Parabéns!<br />Você foi premiado com %d dias de %s!<br />Válidade: <strong>%s</strong><br /><em>Obrigado.</em>");
DEFINE("REGISTER_SUCCESS_REGISTER", "<strong>Cadastro realizado com sucesso!</strong><br />Login: <strong>%s</strong><br />Senha: <strong>%s</strong><br />Pergunta Secreta: <strong>%s</strong><br />Resposta Secreta: <strong>%s</strong><br />Obrigado.<br />Tenha um bom jogo.");

DEFINE("CREATE_ACCOUNT_ACTIVE_NOT_EXISTS_ACCOUNT", "Essa conta não existe!");
DEFINE("CREATE_ACCOUNT_ACTIVE_HAS_ACTIVE", "Essa conta já foi ativada!");
DEFINE("CREATE_ACCOUNT_ACTIVE_SUCCESS", "Sua conta foi ativada com sucesso!<br />Obrigado, tenha um bom jogo!");
DEFINE("CREATE_ACCOUNT_ACTIVE_ERROR_HASH", "Sua conta não foi ativada devido o código de ativação estar incorreto!<br />Caso queira re-enviar o link de ativação, <a href='?page=register&resendActivateEmail=%s'>clique aqui</a> para enviar-lo.");

DEFINE("CREATE_ACCOUNT_ACTIVE_EMAIL_SUBJECT", "Ativação de conta");
DEFINE("CREATE_ACCOUNT_ACTIVE_EMAIL_BODY", "Atenção!<br />Esse e-mail é uma mensagem automatica gerada pelo ".TITLE_SITE."!<br /><br />Seu Login de acesso é: %s<br /><br />Sua Senha de acesso é: %s<br /><br />Sua pergunta secreta é: %s<br />Sua resposta secreta é: %s<br /><br />Para ativar sua conta clique no link abaixo: <a href='%s'>%s</a><br /><br />Tenha um bom jogo!<br />Equipe ".TITLE_SITE.".<br />");
DEFINE("CREATE_ACCOUNT_ACTIVE_EMAIL_BODY_PARTIAL", "Atenção!<br />Esse e-mail é uma mensagem automatica gerada pelo ".TITLE_SITE."!<br /><br />Seu Login de acesso é: %s<br /><br />Para ativar sua conta clique no link abaixo: <a href='%s'>%s</a><br /><br />Tenha um bom jogo!<br />Equipe ".TITLE_SITE.".<br />");

DEFINE("CREATE_ACCOUNT_EMAIL_SUBJECT", "Criação de conta");
DEFINE("CREATE_ACCOUNT_EMAIL_BODY", "Atenção!<br />Esse e-mail é uma mensagem automatica gerada pelo ".TITLE_SITE."!<br /><br />Seu Login de acesso é: %s<br /><br />Sua Senha de acesso é: %s<br /><br />Sua pergunta secreta é: %s<br />Sua resposta secreta é: %s<br /><br />Tenha um bom jogo!<br />Equipe ".TITLE_SITE.".<br />");

DEFINE("CREATE_ACCOUNT_EMAIL_SEND_INFO_ACTIVE_SUCCESS", "Foram enviadas as instruções de ativação de conta para o seu e-mail!");
DEFINE("CREATE_ACCOUNT_EMAIL_SEND_INFO_ACTIVE_ERROR", "Erro ao enviar os dados de ativação de conta para o seu e-mail!");

DEFINE("CREATE_ACCOUNT_EMAIL_SEND_INFO_SUCCESS", "Foram enviado os dados da sua conta para seu e-mail!");
DEFINE("CREATE_ACCOUNT_EMAIL_SEND_INFO_ERROR", "Erro ao enviar os seus dados para o seu e-mail!");

?>