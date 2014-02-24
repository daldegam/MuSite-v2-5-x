<?php
/**
* Aqui serão definidos os textos da classe ldVersion do site.
*/
DEFINE("SITE_UNDER_MAINTENANCE", "Site em manutenção!");
DEFINE("MESSAGE_TO_ADMIN", "Mensagem destinada ao administrador do servidor:");
DEFINE("STEPS_TO_REMOVE_MSG", "Para remover essa mensagem do site, basta abrir o changelog.html que acompanha o site e ver quais as alterações são necessárias para o update correto do site.");


DEFINE("OLD_VERSION_EXPLICATION1", "<strong>Atenção</strong>, você provavelmente está atualizando o site da versão 1.5.1 ou anterior para a versão 1.5.2 ou superior.");
DEFINE("OLD_VERSION_EXPLICATION2", "A partir da versão 1.5.2 foi adicionado um sistema para controlar os updates do MuSite, com o objetivo de evitar erros causados pelos administradores que atualizam o site e não lêem o changelog.html do site.");
DEFINE("OLD_VERSION_EXPLICATION3", "Assim passam despercebidas querys que devem ser executadas e também alterações no settings.php não realizadas causando problemas ao site.");
DEFINE("OLD_VERSION_INSTALL_VERSION", "Versão do site que está sendo instalada:");

DEFINE("NEW_VERSION_EXPLICATION1", "<strong>Atenção</strong>, você está atualizando o site para a versão: <strong>%s</strong>.");
?>