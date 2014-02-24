<?php
/**
* Arquivo de configuração do MuSite v2.5.x
* Tenha muita atenção ao editar esse arquivo.
* A cada 100 reportagens de bugs no site, 80 ou mais 
* são decorrencia de erros na configuração desse arquivo!
* 
* By Leandro Daldegam
*/

/*
    @Configurações de updates (atualizações)
    @Essa configuração tem o objetivo de evitar que você atualize o site sem ler o changelog.html da nova versão
    @Evitando assim que você esqueça de fazer algum tipo de configuração para que a nova versão do site funcione corretamente.
    @Para pegar o valor do updateKeyChangelog, leia o changelog e pegue o numero do update correspondente ao que você está usando.
*/
define("updateKeyChangelog", 0xBC5EBB21); //Veja a Chave de atualização no Changelog.html que acompanha o site.

/*
    @Configurações do serial
*/
define("countryPreference", 0x02); // Para Brasil 0x01, Estados Unidos da América 0x02
define("autenticationCache", true); // Guarda a chave de segurança em cache para não fazer requisições a cada pagina acessada.

/*
    @Configurações do banco de dados
*/
define('HOST', 'localhost'); //Host do Banco de dados
define('USER', 'sa'); //Login do Mssql
define('PWD', 'microsoft'); //Senha do Mssql
define('DATABASE', 'webSite'); //Banco de dados do website
define('DATABASE_ACCOUNTS', 'MuOnline'); //Banco de dados onde ficam as contas 
define('DATABASE_CHARACTERS', 'MuOnline'); //Banco de dados onde ficam os personagens
define('PERSISTENT_CONNECTION', false); //Deixa a conexão com o banco de dados persistente
define('USE_MD5', 0); // Usa md5? 0 para não, 1 para sim
define('VI_CURR_INFO', FALSE); //Joinserver com sistema de idade, TRUE para sim, FALSE para nao    
define('COLUMN_RESETS','Resets');           //Coluna onde ficam armazenados os Resets na character
define('COLUMN_MASTER_RESETS','MResets');   //Coluna onde ficam armazenados os Master Resets na character
define('COLUMN_RESETS_WEEK','resetsWeek');   //Coluna onde ficam armazenados os Resets semanais na character
define('COLUMN_RESETS_MONTH','resetsMonth');   //Coluna onde ficam armazenados os Resets mensais na character
define('COLUMN_PK_RANKING','PkCountWeb');   //Coluna onde ficam armazenados a contagem de PK na character (Não coloque: PkCount)

/*
    @Configurações SMTP
    @Exemplo de como usar o SMTP de hospedagens normais:
    @Exemplo    $Config_SMTP['Server']      = "smtp.mudkt.com.br";    //Servidor SMTP
    @Exemplo    $Config_SMTP['Port']        = 25;   //Porta do servidor SMTP
    @Exemplo    $Config_SMTP['User']        = "daldegam@mudkt.com.br";  //Usuário Servidor
    @Exemplo    $Config_SMTP['Password']    = "***"; //Senha Servidor
    @Exemplo    $Config_SMTP['Debug']       = false; //Debug (Apenas para usuários avançados)
    @Exemplo    $Config_SMTP['From']        = "daldegam@mudkt.com.br";  //Remetente dos emails                               

    @Exemplo de como usar o SMTP do Gmail da Google: (Para Gmail a extension=php_openssl.dll deve estar habilitada)
    @Exemplo    $Config_SMTP['Server']      = "ssl://smtp.gmail.com";    //Servidor SMTP
    @Exemplo    $Config_SMTP['Port']        = 465;   //Porta do servidor SMTP
    @Exemplo    $Config_SMTP['User']        = "daldegam@gmail.com";  //Usuário Servidor
    @Exemplo    $Config_SMTP['Password']    = "***"; //Senha Servidor
    @Exemplo    $Config_SMTP['Debug']       = false; //Debug (Apenas para usuários avançados)
    @Exemplo    $Config_SMTP['From']        = "daldegam@gmail.com";  //Remetente dos emails  
        
    @Exemplo de como usar o SMTP do Yahoo Mail: 
    @Exemplo    $Config_SMTP['Server']      = "smtp.mail.yahoo.com.br";    //Servidor SMTP
    @Exemplo    $Config_SMTP['Port']        = 25;   //Porta do servidor SMTP 25 ou 587
    @Exemplo    $Config_SMTP['User']        = "daldegam@yahoo.com.br";  //Usuário Servidor
    @Exemplo    $Config_SMTP['Password']    = "***"; //Senha Servidor
    @Exemplo    $Config_SMTP['Debug']       = false; //Debug (Apenas para usuários avançados)
    @Exemplo    $Config_SMTP['From']        = "daldegam@yahoo.com.br";  //Remetente dos emails
    
    @PARA ALTERAR AS CONFIGURAÇÕES ALTERE LOGO ABAIXO:
*/
$Config_SMTP['Server']      = "smtp.mail.yahoo.com.br";    //Servidor SMTP
$Config_SMTP['Port']        = 25;   //Porta do servidor SMTP
$Config_SMTP['User']        = "daldegam@yahoo.com.br";  //Usuário Servidor
$Config_SMTP['Password']    = "****"; //Senha Servidor
$Config_SMTP['Debug']       = false; //Debug (Apenas para usuários avançados)
$Config_SMTP['From']        = "daldegam@yahoo.com.br";  //Remetente dos emails
$Config_SMTP['LimitTime']   = 0;    //Tempo em minutos entre cada requisição para envio de emails por login.


/*
    @Configurações primárias
*/
define('SESSION_NAME', 'SQro0hq39JQr');  //Nome da sessão do site
define('PASSWORD_UPDATE', 'daldegam:12312q3'); //Login e senha para auto update
define('SHOPPING_LINK','#LinkShop'); //Link do shopping

/*
    @Na linha abaixo, coloque:
    0 para Season 1 ou Abaixo - Sem DL 
    1 para Season 1 ou Abaixo 
    2 para Season 2 
    3 para Season 3 Episodio 
    4 para Season 3 Episodio 2, Até Season 5 
    5 para Season 6
    6 para Season 6.2 ou acima
*/
define('VESION_MUSERVER', 6); //Veja como preencher na descrição acima.

/*
    @Qual o desenvolvedor do seu servidor?
    @Coloque:
    0 para desenvolvedores não listados aqui.
    1 para X-Team (Eduardo / phpnuke)
*/
define('MUSERVER_TEAM', 0);

define('TITLE_SITE', 'MuOnline Season 6'); //Titulo - Nome do servidor
define('SERVER_NAME', 'MuOnline Server'); //Nome do servidor
define('SERVER_SLOGAN', 'Servidor 24 horas'); //Slogan do servidor
define('SERVER_VERSION', '1.0X Season 6'); //Versão do servidor
define('SERVER_DROP', '70%'); //Drop do servidor
define('SERVER_XP', '4500x'); //Xp do servidor
define('SERVER_BUGBLESS', 'Online'); //Bugbless status
define('CASH_NAME', 'SGolds'); //Nome da moeda primeira moeda
define('CASH_NAME2', 'Golds'); //Nome da moeda segunda moeda
define('POINTS_NAME', 'Pontos'); //Nome da moeda de ponto
define('DISABLE_BASIC_INFOS', false); //Desligar a busca de: Total de contas, personagens, vips, contas e personagens banidos

/*
    @Sistema de linguagem
*/
define('LANGUAGE_PATH', 'pt-br');

/*
    @Salas do Servidor
    @Verificação Rápida para Busca de Salas usando o ConnectServer.
*/
$Config_Find_Rooms_ConnectServer['Enable']  = false;                    //Ativar procura de salas no ConnectServer
$Config_Find_Rooms_ConnectServer['version'] = 2;                        //Use 1 para versões velhas (0.97d), use 2 para versões season 2 ou maiores
$Config_Find_Rooms_ConnectServer['Address'] = "season2.mudkt.com.br";    //Endereço onde o ConnectServer esta localizado
$Config_Find_Rooms_ConnectServer['Port']     = 44405;                    //Porta do endereço onde o ConnectServer esta localizado
$Config_Find_Rooms_ConnectServer['TLimit']    = 10;                        //Tempo de vida total da consulta

$Config_Rooms_ConnectServer[320]['Name']     = "MuDKT 1";                //Nome da sala com o ID na lista do ConnectServer.
$Config_Rooms_ConnectServer[321]['Name']     = "MuDKT 2";                //Nome da sala com o ID na lista do ConnectServer.
$Config_Rooms_ConnectServer[290]['Name']     = "MuDKT PVP 1";            //Nome da sala com o ID na lista do ConnectServer.
$Config_Rooms_ConnectServer[291]['Name']     = "MuDKT PVP 2";            //Nome da sala com o ID na lista do ConnectServer.
$Config_Rooms_ConnectServer[140]['Name']     = "MuDKT SVip";                //Nome da sala com o ID na lista do ConnectServer.


/*
    @Configurações Downloads
*/
define('DOWNLOAD_GAMEFULL_LINK','http://74.53.229.98/~mudkt/mudktcombr/MuDKT_Season_II_BR.exe');
define('DOWNLOAD_GAMEFULL_MB','468 mb');
define('DOWNLOAD_PATCH_LINK','http://74.53.229.98/~mudkt/Patch_MuDKT_V2.zip');
define('DOWNLOAD_PATCH_MB','0.25 mb');

/*
    @Configurações de templates
*/
define('TEMPLATE_DIR', 'single'); // sunonline, ja_sanidine_free, refresh, darkstyle

/*
    @Configurações Painel do Usuário.
    @Colocar 1 para sim e 0 para não.
*/
$PANELUSER_PREMISSIONS['MODIFY_DATA'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Alterar dados
$PANELUSER_PREMISSIONS['CLEAN_VAULT'] = array(/*Ligar*/ 1, /*Free*/ 0, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Limpar bau
$PANELUSER_PREMISSIONS['DOUBLE_VAULT'] = array(/*Ligar*/ 1, /*Free*/ 0, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Bau duplo      
$PANELUSER_PREMISSIONS['VIRTUAL_VAULT'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Bau virtual
$PANELUSER_PREMISSIONS['GAME_DISCONNECT'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Desconectar conta
$PANELUSER_PREMISSIONS['GOLDEN_ARCHER'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Golden Archer
$PANELUSER_PREMISSIONS['COLLECTOR_POINTS'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Coletor de pontos
$PANELUSER_PREMISSIONS['AUCTIONS'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Leilões
$PANELUSER_PREMISSIONS['LOG_BUYS'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Log de compras
$PANELUSER_PREMISSIONS['MODIFY_PERSONALID'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Alterar personal ID     
$PANELUSER_PREMISSIONS['RESET'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Resetar
$PANELUSER_PREMISSIONS['MASTER_RESET'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Master Reset
$PANELUSER_PREMISSIONS['RESET_TRANSFER'] = array(/*Ligar*/ 1, /*Free*/ 0, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Transferir reset
$PANELUSER_PREMISSIONS['CLEAN_PK'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Limpar PK
$PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Distribuir pontos
$PANELUSER_PREMISSIONS['MOVE_CHARACTER'] = array(/*Ligar*/ 1, /*Free*/ 0, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Mover personagem
$PANELUSER_PREMISSIONS['CHANGE_NICK'] = array(/*Ligar*/ 1, /*Free*/ 0, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Alterar nick
$PANELUSER_PREMISSIONS['CHANGE_CLASS'] = array(/*Ligar*/ 1, /*Free*/ 0, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Alterar classe
$PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'] = array(/*Ligar*/ 1, /*Free*/ 0, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Redistribuir pontos
$PANELUSER_PREMISSIONS['CLEAN_INVENTORY'] = array(/*Ligar*/ 1, /*Free*/ 0, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Apagar inventário
$PANELUSER_PREMISSIONS['MANAGER_PHOTO'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Gerenciar foto
$PANELUSER_PREMISSIONS['BUY_VIPS'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Comprar Vip
$PANELUSER_PREMISSIONS['CONFIRM_PAYMENT'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Confirmar pagamento
$PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Abrir denuncia
$PANELUSER_PREMISSIONS['OPEN_TICKET'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Abrir ticket
$PANELUSER_PREMISSIONS['READ_TICKET'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Ler ticket
$PANELUSER_PREMISSIONS['SEND_SMS'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Enviar SMS


/*
    @Configurações Painel do Usuário.
    @Modulo: Resetar Personagem
*/
//RESET_MODE: 1 = Normal, só irá ler as configurações de 0 a 10 resets para todos os resets.
//RESET_MODE: 2 = Dinâmico, irá ler todas as configurações de resets para determinado numero de resets: resets * pontos.
//RESET_MODE: 3 = Acumulativo, só irá ler as configurações de 0 a 10 resets para todos os resets e não reseta os pontos ao resetar.
//RESET_MODE: 4 = Dinâmico, irá ler todas as configurações de resets para determinado numero de resets com adição em escalas de resets.
$PANELUSER_MODULE['RESET']['RESET_MODE'] = 1; //RESET MODE descrito acima

$PANELUSER_MODULE['RESET']['LimitResets'] = array(/*Free*/ 0,/*Vip 1*/ 0,/*Vip 2*/ 0,/*Vip 3*/ 0,/*Vip 4*/ 0,/*Vip 5*/ 0); //Resets máximos. Deixe 0 para ilimitado.

$PANELUSER_MODULE['RESET']['0-10']['LevelReset'] = array(/*Free*/ 280,/*Vip 1*/ 240,/*Vip 2*/ 230,/*Vip 3*/ 230,/*Vip 4*/ 230,/*Vip 5*/ 230); //Precisa de X level para resetar de 0 a 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['LevelAfter'] = array(/*Free*/ 6,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Volta para o level X de 0 a 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['ZenRequire'] = array(/*Free*/ 500000,/*Vip 1*/ 300000,/*Vip 2*/ 100000,/*Vip 3*/ 100000,/*Vip 4*/ 100000,/*Vip 5*/ 100000); //Precisa de X zen para resetar de 0 a 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['Points'] = array(/*Free*/ 600,/*Vip 1*/ 800,/*Vip 2*/ 1000,/*Vip 3*/ 1000,/*Vip 4*/ 1000,/*Vip 5*/ 1000); //Ganha X pontos por reset de 0 a 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['CleanItens'] = array(/*Free*/ false,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta os itens ao resetar de 0 a 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['CleanMagics'] = array(/*Free*/ false,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as magias ao resetar de 0 a 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['CleanQuests'] = array(/*Free*/ false,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as quests ao resetar de 0 a 10 resets.

$PANELUSER_MODULE['RESET']['11-50']['LevelReset'] = array(/*Free*/ 290,/*Vip 1*/ 250,/*Vip 2*/ 240,/*Vip 3*/ 240,/*Vip 4*/ 240,/*Vip 5*/ 240); //Precisa de X level para resetar de 11 a 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Volta para o level X de 11 a 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['ZenRequire'] = array(/*Free*/ 5000000,/*Vip 1*/ 3000000,/*Vip 2*/ 1000000,/*Vip 3*/ 1000000,/*Vip 4*/ 1000000,/*Vip 5*/ 1000000); //Precisa de X zen para resetar de 11 a 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 800,/*Vip 4*/ 800,/*Vip 5*/ 800); //Ganha X pontos por reset de 11 a 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 4*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta os itens ao resetar de 11 a 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as magias ao resetar de 11 a 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as quests ao resetar de 11 a 50 resets.

$PANELUSER_MODULE['RESET']['51-100']['LevelReset'] = array(/*Free*/ 300,/*Vip 1*/ 290,/*Vip 2*/ 280,/*Vip 3*/ 280,/*Vip 4*/ 280,/*Vip 5*/ 280); //Precisa de X level para resetar de 51 a 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Volta para o level X de 51 a 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['ZenRequire'] = array(/*Free*/ 50000000,/*Vip 1*/ 30000000,/*Vip 2*/ 10000000,/*Vip 3*/ 10000000,/*Vip 4*/ 10000000,/*Vip 5*/ 10000000); //Precisa de X zen para resetar de 51 a 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 800,/*Vip 4*/ 800,/*Vip 5*/ 800); //Ganha X pontos por reset de 51 a 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 3*/ false,/*Vip 5*/ false); //Reseta os itens ao resetar de 51 a 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as magias ao resetar de 51 a 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as quests ao resetar de 51 a 100 resets.

$PANELUSER_MODULE['RESET']['101-150']['LevelReset'] = array(/*Free*/ 300,/*Vip 1*/ 290,/*Vip 2*/ 280,/*Vip 3*/ 280,/*Vip 4*/ 280,/*Vip 5*/ 280); //Precisa de X level para resetar de 101 a 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Volta para o level X de 101 a 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['ZenRequire'] = array(/*Free*/ 50000000,/*Vip 1*/ 30000000,/*Vip 2*/ 10000000,/*Vip 3*/ 10000000,/*Vip 4*/ 10000000,/*Vip 5*/ 10000000); //Precisa de X zen para resetar de 101 a 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 800,/*Vip 4*/ 800,/*Vip 5*/ 800); //Ganha X pontos por reset de 101 a 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 3*/ false,/*Vip 5*/ false); //Reseta os itens ao resetar de 101 a 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as magias ao resetar de 101 a 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as quests ao resetar de 101 a 150 resets.

$PANELUSER_MODULE['RESET']['151-200']['LevelReset'] = array(/*Free*/ 300,/*Vip 1*/ 290,/*Vip 2*/ 280,/*Vip 3*/ 280,/*Vip 4*/ 280,/*Vip 5*/ 280); //Precisa de X level para resetar de 151 a 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Volta para o level X de 151 a 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['ZenRequire'] = array(/*Free*/ 50000000,/*Vip 1*/ 30000000,/*Vip 2*/ 10000000,/*Vip 3*/ 10000000,/*Vip 4*/ 10000000,/*Vip 5*/ 10000000); //Precisa de X zen para resetar de 151 a 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 800,/*Vip 4*/ 800,/*Vip 5*/ 800); //Ganha X pontos por reset de 151 a 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta os itens ao resetar de 151 a 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as magias ao resetar de 151 a 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as quests ao resetar de 151 a 200 resets.

$PANELUSER_MODULE['RESET']['201-300']['LevelReset'] = array(/*Free*/ 300,/*Vip 1*/ 290,/*Vip 2*/ 280,/*Vip 3*/ 280,/*Vip 4*/ 280,/*Vip 5*/ 280); //Precisa de X level para resetar de 201 a 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Volta para o level X de 201 a 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['ZenRequire'] = array(/*Free*/ 50000000,/*Vip 1*/ 30000000,/*Vip 2*/ 10000000,/*Vip 3*/ 10000000,/*Vip 4*/ 10000000,/*Vip 5*/ 10000000); //Precisa de X zen para resetar de 201 a 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 800,/*Vip 4*/ 800,/*Vip 5*/ 800); //Ganha X pontos por reset de 201 a 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta os itens ao resetar de 201 a 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as magias ao resetar de 201 a 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as quests ao resetar de 201 a 300 resets.

$PANELUSER_MODULE['RESET']['301-XXX']['LevelReset'] = array(/*Free*/ 300,/*Vip 1*/ 290,/*Vip 2*/ 280,/*Vip 3*/ 280,/*Vip 4*/ 280,/*Vip 5*/ 280); //Precisa de X level para resetar de 301 a XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Volta para o level X de 301 a XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['ZenRequire'] = array(/*Free*/ 50000000,/*Vip 1*/ 30000000,/*Vip 2*/ 10000000,/*Vip 3*/ 10000000,/*Vip 4*/ 10000000,/*Vip 5*/ 10000000); //Precisa de X zen para resetar de 301 a XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 800,/*Vip 4*/ 800,/*Vip 5*/ 800); //Ganha X pontos por reset de 301 a XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta os itens ao resetar de 301 a XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as magias ao resetar de 301 a XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Reseta as quests ao resetar de 301 a XXX resets.

/*
    @Configurações Painel do Usuário.
    @Modulo: LimparPK
*/
$PANELUSER_MODULE['CLEAN_PK']['CLEAN_MODE'] = 1; //1 = Valor de zen fixo. 2 = Valor em zen por morte(Zen * Mortes).
$PANELUSER_MODULE['CLEAN_PK']['PRICEZEN'] = array(/*Free*/ 2000000,/*Vip 1*/ 1500000,/*Vip 2*/ 1000000,/*Vip 3*/ 1000000,/*Vip 4*/ 1000000,/*Vip 5*/ 1000000); //Precisa de X zen por morte para limpar PK.

/*
    @Configurações Painel do Usuário.
    @Modulo: Alterar classe
*/
$PANELUSER_MODULE['CHANGE_CLASS']['RESET_QUESTS'] = true; //Resetar Quest ao trocar de classe
$PANELUSER_MODULE['CHANGE_CLASS']['RESET_SKILLS'] = true; //Resetar Skills ao trocar de classe

/*
    @Configurações Painel do Usuário.
    @Modulo: Distribuir pontos
*/
$PANELUSER_MODULE['DISTRIBUTE_POINTS']['MAXPOINTS'] = 32767; //Valor máximo de pontos.

/*
    @Configurações Painel do Usuário.
    @Modulo: Mover Personagem
*/
$PANELUSER_MODULE['MOVE_CHARACTER']['MAPS'] = array(/*Numero do mapa, Nome do mapa, Coordenada X, Coordenada Y*/    
                                                    array(0,"Lorencia",147,127),
                                                    array(1,"Dungeon",107,247),
                                                    array(2,"Davias",197,46),
                                                    array(3,"Noria",174,111),
                                                    array(4,"Losttower",204,77),
                                                    array(6,"Stadium",62,115),
                                                    array(7,"Atlans",24,17),
                                                    array(8,"Tarkan",194,67),
                                                    array(10,"Icarus",125,125),
                                                    array(24,"Kalima 1",125,125),
                                                    array(25,"Kalima 2",125,125),
                                                    array(26,"Kalima 3",125,125),
                                                    array(27,"Kalima 4",125,125),
                                                    array(28,"Kalima 5",125,125),
                                                    array(29,"Kalima 6",125,125),
                                                    array(30,"Valey of Loren",93,214),
                                                    array(31,"Land of Trial",93,214),
                                                    array(33,"Aida",84,13),
                                                    array(34,"CryWolf",228,41),
                                                    array(37,"KantruLand",20,218),
                                                    array(38,"KantruRuin",71,105),
                                                    array(41,"Barracks",28,76),
                                                    array(42,"Refuge",97,185),
                                                    array(51,"Elbeland",51,216),
                                                    array(56, "Swamp of Peace", 135, 105),
                                                    array(63, "Vulcanus", 120, 129),
                                                    array(80, "Karutan", 124, 123),
                                                    array(79, "LorenMarket", 126, 142),
                                                    array(80, "Karutan", 124, 123)
                                                );
                                                
/*
    @Configurações Painel do Usuário.
    @Modulo: Comprar Vips
    @Obs.: O nome dos planos nas linhas:
            $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'] à $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5']
            Não devem ser alterados, para alterar os nomes use a linha:
            $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS']
*/
$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'] = array(/*0*/ "Free", /*1*/ "Vip Silver", /*2*/ "Vip Gold", /*3*/ "Vip Diamante", /*4*/ "Vip Plus", /*5*/ "Vip Extreme"); //Nome dos planos do servidor
$PANELUSER_MODULE['BUY_VIPS']['ACTIVES'] = array("VIP_1" => true, "VIP_2" => true, "VIP_3" => true, "VIP_4" => true, "VIP_5" => true); //Coloque os vips que você deseja utilizar
$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'] = array(/*30 dias*/ 5, /*90 dias*/ 15,/*180 dias*/ 30,/*365 dias*/ 60); //Valor de Cash cobrado para compra de vip 1
$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'] = array(/*30 dias*/ 10, /*90 dias*/ 30,/*180 dias*/ 60,/*365 dias*/ 120); //Valor de Cash cobrado para compra de vip 2
$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'] = array(/*30 dias*/ 10, /*90 dias*/ 30,/*180 dias*/ 60,/*365 dias*/ 120); //Valor de Cash cobrado para compra de vip 3
$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'] = array(/*30 dias*/ 10, /*90 dias*/ 30,/*180 dias*/ 60,/*365 dias*/ 120); //Valor de Cash cobrado para compra de vip 4
$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'] = array(/*30 dias*/ 10, /*90 dias*/ 30,/*180 dias*/ 60,/*365 dias*/ 120); //Valor de Cash cobrado para compra de vip 5

/*
    @Configurações Painel do Usuário.
    @Modulo: Enviar SMS
*/
//Atenção, esse serviço depende de um Servidor SMTP disponibilizado por você,
//e o seu celular ser compativel com recebimentos de emails.
//Exemplo: Se seu celular receber emails por: DDDNUMEROCELULAR@SUAOPERADORA.COM
//você pode usar esse serviço, caso contrario, desative-o no painel de controle do usuario.
$Config_SMS_Subject                 = "SMS_MU";                    //Assunto Mensagem

$Config_SMS[0]['Name']                 = "Leandro Daldegam";        //Nome do banco
$Config_SMS[0]['Number_Cel_DDD']    = "31";                        //DDD Telefone
$Config_SMS[0]['Number_Cel']        = "00000000";                //Número Telefone
$Config_SMS[0]['Email_Sufixo']        = "@clarotorpedo.com.br";    //Final do email do seu celular

/*
    @Configurações de classes.
*/
$CLASS_CHARACTERS['CLASSCODES'] = array(/*IDENTIFICAÇÃO*/ /*CLASSCODE*/ /*CLASSNAME*/ 
                                        "DW" => array(0, "Dark Wizard"),
                                        "SM" => array(1, "Soul Master"),
                                        "GM" => array(2, "Grand Master"), //Algumas versões usam 3
                                        "DK" => array(16, "Dark Knight"),
                                        "BK" => array(17, "Blade Knight"),
                                        "BM" => array(18, "Blade Master"), //Algumas versões usam 19
                                        "FE" => array(32, "Fairy Elf"),
                                        "ME" => array(33, "Muse Elf"),
                                        "HE" => array(34, "High Elf"), //Algumas versões usam 35
                                        "MG" => array(48, "Magic Gladiator"),
                                        "DMM" => array(49, "Duel Master"), //Algumas season 4 usam 50
                                        "DL" => array(64, "Dark Lord"),
                                        "LE" => array(65, "Lord Emperor"), //Algumas season 4 usam 66
                                        "SU" => array(80, "Summoner"),
                                        "BS" => array(81, "Blood Summoner"),
                                        "DMS" => array(82, "Dimension Master"), //Algumas versões usam 83
                                        "RF" => array(96, "Rage Fighter"),
                                        "FM" => array(98, "Fist Master")
                                        );
                                        
/*
    @Configurações do cadastro.
*/                                                                                    
$REGISTER_SETTINGS['EMAIL_ACTIVE'] = true; //Ativação por email [TENHA CERTEZA QUE SEU SERVIDOR DE SMTP ESTA FUNCIONANDO PARA ATIVAR ESTA OPÇÃO! TESTE O CADASTRO APÓS A ATIVAÇÃO!].
$REGISTER_SETTINGS['USERNAME']['FORCELOWER'] = true; //Força o login a ser minusculo.
$REGISTER_SETTINGS['BONUS_VIP']['ACTIVE'] = true; //Ativa bonus de vip no cadastro.
$REGISTER_SETTINGS['BONUS_VIP']['TYPE'] = 1; //Tipo de bonus na hora do cadastro: 1 = Vip 1, 2 = Vip 2, 3 = Vip 3, 4 = Vip 4, 5 = Vip 5
$REGISTER_SETTINGS['BONUS_VIP']['DAYS'] = 5; //Quatidades de dias de vip a ser dado como brinde.
$REGISTER_SETTINGS['EMAIL_REPEAT'] = true; //Pode cadastrar com o mesmo email duas vezes.
$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT'] = 0; //Valor padrão que o player recebe da moeda 1 do site.
$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT2'] = 0; //Valor padrão que o player recebe da moeda 2 do site.

$REGISTER_SETTINGS['BONUS_ITEM']['ACTIVE'] = TRUE; //Ativa bonus de item ao cadastrar
$REGISTER_SETTINGS['BONUS_ITEM']['VERSION'] = 3; //1 = (Versões antigas sem personal store [97d]), 2 = (Versões antigas com personal store [1.0]), 3 = (Versões novas com personal store e harmony [1.02n ou acima])
/**
* Como configurar o sistema abaixo:
* O sistema está configurado para dar um Kit de Blade Knight, Soul Master, Muse Elf por padrão, para cadastrar mais itens ou kits, siga a logica dos exemplos;
* Atenção, mesmo que você use uma versão antiga que não contenha sockets, harmony e etc, não remova a opção, e sim, apenas coloque o valor correspondente a ela desligada!
* 
* A opção: "Name", deve conter o nome do kit a ser entregue para o player
* A opção: "Items", deve conter os items a serem entregues para o player
*   Dentro da opção "Items", existe as propriedades:
*       "idCategorie", deve ser a categoria do item desejado (informação contida no item(kor).txt ou item.txt do MuServer)
*       "idItem", deve ser o id do item desejado (informação contida no item(kor).txt ou item.txt do MuServer)
*       "options", aqui dentro serão ditas as propriedades do item.
*           "Level", determine o level que o item irá ter. (Valores possiveis: 0 até 15)
*           "Option", determine o option do item (opção da life). (Valores possiveis: para +0 coloque 0, para +4 coloque 1, para +8 coloque 2, para +12 coloque 3, para +16 coloque 4, para +20 coloque 5, para +24 coloque 6, para +28 coloque 7)
*           "Skill", determine se o item terá Skill ou não. (Valores possiveis: true para sim, false para não)
*           "Luck", determine se o item terá Luck ou não. (Valores possiveis: true para sim, false para não)
*           "Serial", determine se o item terá Serial ou não, (Recomendamos: SIM) caso sim, sera pego um serial na ordem do MuServer (igual o MuShopping), caso não, o serial será colocado 00000000. (Valores possiveis: true para sim, false para não)
*           "Excellent", determine quais opções excelentes o item vai possuir. Observe que existem 6 valores a serem definidos aqui (true, true, true, true, true, true), veja a ordem em um editor, e teste o cadastro para checar se esta correto! (Valores possiveis: true para sim, false para não)
*           "Ancient", determine se o item é ancient ou não. (Valores possiveis: 0, 1 ou 2; 0 para nada, 1 para ancient 1, e 2 para o ancient 2).
*           "Refine", determine se o item é refinado ou não (Option 380). (Valores possiveis: 0, 1 ou 2; 0 para nada, 1 para ancient 1, e 2 para o ancient 2).
*           "HarmonyType", determine se o tipo de option harmony. (Valores possiveis: 0 [NADA], 1, 2, 3, 4, 5, 6, 7, 8, 9, 10).
*           "HarmonyType", determine se o level do option harmony. (Valores possiveis: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13).
*           "SocketOption", determine quais opções sockets o item vai possuir. Observe que existem 5 valores a serem definidos aqui (255, 255, 255, 255, 255), teste o cadastro para checar se esta correto! (Valores possiveis: 255 para sem socket, 254 para socket vazio, demais valores vide editor. [Para versões SCF / SCFMT = 0 para sem socket, 255 para socket vazio])
*/
$REGISTER_SETTINGS['BONUS_ITEM']['ITEMS'] = array(
    array(
        "Name" => "Kit de Blade Knight", 
        "Items" => array(
            array("idCategorie" => 7, "idItem" => 17, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 8, "idItem" => 17, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 9, "idItem" => 17, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 10, "idItem" => 17, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 11, "idItem" => 17, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 12, "idItem" => 5, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 0, "idItem" => 22, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        )
    ),
    array(
        "Name" => "Kit de Soul Master", 
        "Items" => array(
            array("idCategorie" => 7, "idItem" => 22, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 8, "idItem" => 22, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 9, "idItem" => 22, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 10, "idItem" => 22, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 11, "idItem" => 22, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 12, "idItem" => 4, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 5, "idItem" => 13, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        )
    ),
    array(
        "Name" => "Kit de Muse Elf", 
        "Items" => array(
            array("idCategorie" => 7, "idItem" => 24, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 8, "idItem" => 24, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 9, "idItem" => 24, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 10, "idItem" => 24, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 11, "idItem" => 24, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 12, "idItem" => 3, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
            array("idCategorie" => 6, "idItem" => 6, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, true, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        )
    ),
); //Lista de Kits dos itens ao cadastrar


/*
    @Configurações das tabelas do webSite.
*/
$TABLES_CONFIGS['WEBVIPS'] = array("database" => DATABASE, //webSite || MuOnline
                                   "table" => "webVips", //webVips || MEMB_INFO
                                   "columnUsername" => "username", //username || memb___id
                                   "columnType" => "type", //type || vip
                                   "columnDateBegin" => "dateBegin", 
                                   "columnDateEnd" => "dateEnd",
                                   "columnDateEndInteger" => "dateEndInteger");
                                   
$TABLES_CONFIGS['WEBCASH'] = array("database" => DATABASE, //webSite || MuOnline
                                   "table" => "webCash", //webCash || MEMB_INFO
                                   "columnUsername" => "username", //username || memb___id
                                   "columnAmount" => "amount", //amount || gold
                                   "columnAmount2" => "amount2", //amount2 || gold2
                                   "columnPoints" => "points"); //points 
  
/*
    @Configurações dos rankings da pagina inicial
*/
$RANKING_HOME_CONFIGS['TOPAMOUNT'] = 4; //Mostrar Top 3 nos rankings da pagina inicial                     
$RANKING_HOME_STATS['RANKING_RESETS_HOME'] = true; // true = ligar / false = desligar (Ranking de resets)
$RANKING_HOME_STATS['RANKING_RESETS_WEEK_HOME'] = true; // true = ligar / false = desligar (Ranking de resets semanal)  
$RANKING_HOME_STATS['RANKING_RESETS_MONTH_HOME'] = true; // true = ligar / false = desligar (Ranking de resets mensal)  
$RANKING_HOME_STATS['RANKING_MASTER_RESETS_HOME'] = true; // true = ligar / false = desligar (Ranking de resets mensal)  
$RANKING_HOME_STATS['RANKING_PK_HOME'] = true; // true = ligar / false = desligar (Ranking de PK)  
$RANKING_HOME_STATS['RANKING_LEVELS_HOME'] = true; // true = ligar / false = desligar (Ranking de Levels)  
$RANKING_HOME_STATS['RANKING_GUILDS_HOME'] = true; // true = ligar / false = desligar (Ranking de Guilds)                 
                                    
/*
    @Configurações dos rankings
*/
$RANKING_CONFIGS['STATS'] = TRUE; //Mostra os status do personagem (Força, Agilidade, Energia, Vitalidade, Comando)
$RANKING_CONFIGS['GENS'] = TRUE; //Ligar sistema do ranking de gens (Compativel com MuServer ENC Team / X-Team)
$RANKING_CONFIGS['GENS_MANUFACTURER'] = 1; // 0 = MuServer ENC Team / 1 = X-Team 


/*
    @Configurações Painel do Usuário.
    @Modulo: Master Reset
*/                                                                                                                                                                
$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Active'] = true; //Ativa bonus de Cash ao dar o master reset. 
$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Amount'] = array(/*Free*/ 10,/*Vip 1*/ 20,/*Vip 2*/ 30,/*Vip 3*/ 30,/*Vip 4*/ 30,/*Vip 5*/ 30); //Quantidade de Cash que o player vai ganhar por Master Reset. 
$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Columns'] = array("table" => "webCash", "columnUsername" => "username", "columnAmount" => "amount"); //Onde sera creditado o bonus do master reset. 
$PANELUSER_MODULE['MASTER_RESET']['ResetsRequire'] = array(/*Free*/ 500,/*Vip 1*/ 450,/*Vip 2*/ 400,/*Vip 3*/ 400,/*Vip 4*/ 400,/*Vip 5*/ 400); //Requer X reset para dar o master reset.        
$PANELUSER_MODULE['MASTER_RESET']['PointsRequire'] = array("Strength" => 32000, "Dexterity" => 32000, "Vitality" => 32000, "Energy" => 32000, "Leadership" => 32000); //Requer X pontos para dar o master reset.        
$PANELUSER_MODULE['MASTER_RESET']['PointsAfter'] = array("Strength" => 32, "Dexterity" => 32, "Vitality" => 32, "Energy" => 32, "Leadership" => 32); //Após master resetado irá ficar com os status.        
        
/*
    @Configurações Painel do Usuário.
    @Modulo: Transferir resets
*/                                                                                                                                                                
$PANELUSER_MODULE['RESET_TRANSFER']['MIN_REQUIRE'] = 10; //Minimo de resets que podem ser transferidos. 
                               
/*
    @Configurações Painel do Usuário.
    @Modulo: Abrir ticket
*/                                                                                                                                                                
$PANELUSER_MODULE['OPEN_TICKET']['MAX_OPEN'] = 1; //Máximo de tickets que um player pode possuir em aberto.        
                               
/*
    @Configurações Painel do Usuário.
    @Modulo: Confirmar pagamento
*/                                                                                                                                                                
$PANELUSER_MODULE['CONFIRM_PAYMENT']['MAX_OPEN'] = 1; //Máximo de pagamentos que um player pode possuir em aberto.        
               
/*
    @Configurações Painel do Usuário.
    @Modulo: Gravação de logs das ações executadas no painel do usuário.
*/                                                                                                                                                                
$PANELUSER_MODULE['LOG']['Active'] = true; //Ativa os logs do painel.                    
$PANELUSER_MODULE['LOG']['DirLog'] = "logs/paneluser"; //Pasta para gravação dos logs, a pasta deve ficar na raiz do site (OBS: Coloque uma pasta que ninguem saiba e essa pasta deve conter permissão de escrita.).                  

/*
    @Configurações Painel do Game Master / Administrador.
    @Modulo: Gravação de logs das ações executadas no painel.
*/                                                                                                                                                                
$PANELADMIN_MODULE['LOG']['Active'] = true; //Ativa os logs do painel.                    
$PANELADMIN_MODULE['LOG']['DirLog'] = "logs/paneladmin"; //Pasta para gravação dos logs, a pasta deve ficar na raiz do site (OBS: Coloque uma pasta que ninguem saiba e essa pasta deve conter permissão de escrita.).                  

/*
    @Configurações Painel / Administrador.
    @Modulo: Ferramentas para o jogo.
*/                                                                                                                                                                
$PANELADMIN_MODULE['JOINSERVER']['IP'] = "season2.mudkt.com.br"; //IP do JoinServer do Servidor.                    
$PANELADMIN_MODULE['JOINSERVER']['PORT'] = "55970"; //Porta do JoinServer do Servidor.                    

/*
    @Configurações do Cronjob. 
    @Cronjob é um sistema que permite a execução de tarefas automaticamente.                                             
*/                                                                                                                                                                
$CRON_JOB['Active'] = true; //Ativa o serviço do cron. Coloque true para sim, false para não.
$CRON_JOB['Debug'] = false; //Ativa o debugger. Coloque true para sim, false para não.

/*
    @Configurações do sistema de enquetes.                                                                               
*/                                                                                                                                                                
$POLL['LOGIN'] = false; //Para votar deve estar logado? true = sim, false = nao.
$POLL['HANG_WITH'] = array("type" => 0, //0 = liberar votos sem travas, 1 = travar por ip, 2 = travar por cookie, 3 = travar por IP / cookie
                           "time" => 0); // Tempo em minutos para votar novamente.
 
/*
    @Configurações das últimas do forum.                                                                               
*/                                                                                                                                                                
$FORUM_CONFIGS['ENABLE'] = false; // Ligar / Desligar as ultimas do forum
$FORUM_CONFIGS['TYPE'] = 1; // 0 = vBulletin, 1 = IPB, 2 = phpBB
$FORUM_CONFIGS['LAST_TOPICS'] = 5; // Ultimos X tópicos.
$FORUM_CONFIGS['NUMBER_FORUM'] = -1; // Número do forum onde serão puxados os tópicos. Coloque -1 para puxar todos os tópicos
$FORUM_CONFIGS['LINKS_TOPICS'] = "http://www.forum.mudkt.com.br/showthread.php?t=%d";    // Link base dos tópicos.
$FORUM_CONFIGS['LINK_FORUM'] = "http://www.forum.mudkt.com.br/";    // Link do forum.
$FORUM_CONFIGS['UTF8_DECODE'] = false;    // Deixe como true caso os acetos estejam bugando.

$FORUM_CONFIGS['DATABASE']['TYPE'] = 0;    // 0 = MYSQL, 1 = MSSQL.
$FORUM_CONFIGS['DATABASE']['HOST'] = "ns619.hostgator.com";    // Host onde será feita a conexão do forum.
$FORUM_CONFIGS['DATABASE']['USERNAME'] = "mudkt_fctipb";    // Nome do usuário.
$FORUM_CONFIGS['DATABASE']['PASSWORD'] = "00000";    // Senha do usuário.
$FORUM_CONFIGS['DATABASE']['DB_NAME'] = "mudkt_fctipb";    // Nome do banco de dados.
$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX'] = "ipb_";    // Prefixo no nome das tabelas.

/*
    @Configurações das noticias.                                                                               
*/
$NOTICES['LAST'] = 10; //Mostrar as X ultimas noticias na pagina inicial do site
$NOTICES['COMMENTS'] = TRUE; //Liga / Desliga a opção de comentários nas noticias

/*
    @Configurações do evento do castle siege.                                                                               
*/
$CASTLE_SIEGE['ENABLE'] = true; //Liga o banner do evento do castle siege na pagina pricipal do site
$CASTLE_SIEGE['CONFRONTATION'] = "Domingo as 19:00h"; //Data da batalha do castle siege

/*
    @Configurações de modulos.
*/                                                                                                                                                                
$MODULES['REGISTER'] = array("screenshots", "single");

/*
    @Screenshot module
*/
$PANELUSER_PREMISSIONS['SCREENSHOT'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Gerenciar Screenshots - Painel usuário
$SCREENSHOTS['MAX_WIDTH'] = 640; //Tamanho máximo da foto normal ao ser enviada...
$SCREENSHOTS['HOME'] = true; //Exibir top screens na home
$SCREENSHOTS['TOP_HOME'] = 5; //Exibir até X screens na home 

/*
    @Bau virtual settings
*/
$VIRTUAL_VAULT['MUSERVER_MANUFACTURER'] = 0; //0 = Sistema da Webzen original (TNS Games, Diel, Eduardo (welcomevoce, phpnuke)), 1 = Sistema da SCF / SCFMT (MuMaker)
$VIRTUAL_VAULT['SOCKET_OPTIONS'] = true; //Seu MuServer possui Socket option? true para sim, false para não
$VIRTUAL_VAULT['SHOW_SERIAL'] = true; //Mostrar serial dos itens nos detalhes dos item
$VIRTUAL_VAULT['SERIAL_INC_INDEX'] = false; // true para sim, false para não - Use essa opção para a versão 99MV desenvolvida pelo Alex, que coloca o prefixo F9 no serial para colocar um incremento de 32 no index do item assim podendo colocar mais de 31 itens por categoria na versão.

/*
    @Chat em tempo real na home (Depende do "MuSite - ChatServer.exe" ligado)
*/
$CHAT_REAL_TIME['ENABLE'] = true; //true para ligar, false para desligar
$CHAT_REAL_TIME['TYPES'] = array(0, //Chat
                                 1, //Party
                                 2, //Guild
                                 3, //Mensagem Global
                                 4, //Anúncio de Guild
                                 5, //Whisper
                                 6, //Aliança
                                 7, //Game Master
                                 8, //Post
                                 ); //Tipos de chat que irão aparecer na inicial do site delete a linha que você nao deseja habilitar ou comente com // na frente do numero


/*
    @Configurações do evento de perguntas - Show do Milhão.
*/
$GAME_QUESTION['ENABLE'] = true; //Liga o sistema
$GAME_QUESTION['WAIT'] = 180; //Caso sorteado, deve esperar X segundos para ser sorteado novamente.
$GAME_QUESTION['LUCK'] = array(0, 10000, 9500); //Inicio, Fim, deve acertar ao minimo.
$GAME_QUESTION['PREMIUM'] = array(
    //É IMPORTANTE QUE CADA CATEGORIA ABAIXO (A = FACIL,B = MODERADO,C = DIFÍCIL,D = NIVEL TÉCNICO), TENHA PELO MENOS 1 ITEM CADASTRADO PARA PRÊMIO PARA NÃO CAUSAR ANOMALIAS NO SISTEMA!
    "A" => array( //Perguntas faceis - Sugestão: Itens fracos
        array("idCategorie" => 0, "idItem" => 8, "options" => array("Level" => 5, "Option" => 3, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, false, false, true, false, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        array("idCategorie" => 1, "idItem" => 4, "options" => array("Level" => 3, "Option" => 4, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(false, true, false, false, true, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
    ),
    "B" => array( //Perguntas moderadas - Sugestão: Itens moderados
        array("idCategorie" => 2, "idItem" => 7, "options" => array("Level" => 9, "Option" => 5, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(false, true, true, false, true, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        array("idCategorie" => 4, "idItem" => 6, "options" => array("Level" => 8, "Option" => 6, "Skill" => true, "Luck" => true, "Serial" => true, "Excellent" => array(true, false, true, false, false, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
    ),
    "C" => array( //Perguntas dificeis - Sugestão: Itens dificeis
        array("idCategorie" => 5, "idItem" => 8, "options" => array("Level" => 11, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, false, true, true, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        array("idCategorie" => 0, "idItem" => 11, "options" => array("Level" => 11, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, false, true, true, true, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
    ),
    "D" => array( //Perguntas a nivel técnico - Sugestão: Itens cobiçados
        array("idCategorie" => 12, "idItem" => 4, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, false, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        array("idCategorie" => 14, "idItem" => 14, "options" => array("Level" => 0, "Option" => 0, "Skill" => false, "Luck" => false, "Serial" => true, "Excellent" => array(false, false, false, false, false, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
    )
); //Prêmios


/*
    @Configurações Painel do Usuário.
    @Modulo: Coletor de pontos
*/                                                                                                                                                                
$PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE'] = array("idCategorie" => 14, "idItem" => 16, "premiumInPoints" => 2); //Categoria do item, Id do item, e pontos em troca de cada item.

?>