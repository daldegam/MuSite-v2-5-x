<?php
/**
* Configuration file MuSite v2.5.x
* Be very careful when editing this file.
* Every 100 bug reports on the site, 80 or more 
* are due to errors in the configuration of this file!
* 
* By Leandro Daldegam
*/

/*
    @Settings updates (updates)
    @This configuration is designed to keep you updating the site without reading the new version of the changelog.html
    @Saving you of forgetting to do some sort of configuration for the new version of the site to work properly.
    @To get the value of updateKeyChangelog, read the changelog and write down the update number corresponding to what you're using.
*/
define("updateKeyChangelog", 0x5250DA0D); //See update on Key Changelog.html that accompanies the website.

/*
    @Serial settings
*/
define("countryPreference", 0x02); // For Brazil 0x01, 0x02 USA
define("autenticationCache", true); // Guard security key caching to not make requests to each page accessed.

/*
    @Settings database
*/
define('HOST', '127.0.0.1'); //Host Database
define('USER', 'sa'); //Username of Mssql
define('PWD', '123456'); //Password of Mssql
define('DATABASE', 'webSite'); //website Databse
define('DATABASE_ACCOUNTS', 'MuOnline'); //Database which holds the accounts 
define('DATABASE_CHARACTERS', 'MuOnline'); //Database where the characters are stored
define('PERSISTENT_CONNECTION', false); //Keep the connection with database persistent
define('USE_MD5', 0); // Uses md5? 0 for no, 1 for yes
define('VI_CURR_INFO', FALSE); //Old Joinserver version less than 0.77. TRUE to enable or FALSE to disable
define('COLUMN_RESETS','Resets');           //Collumn where the Character Resets are stored.
define('COLUMN_MASTER_RESETS','MResets');   //Collumn where the Character MasterResets are stored.
define('COLUMN_RESETS_WEEK','resetsWeek');   //Collumn where the Character Weekly Resets are stored.
define('COLUMN_RESETS_MONTH','resetsMonth');   //Collumn where the Character Monthly Resets are stored.
define('COLUMN_PK_RANKING','PkCountWeb');   //Collumn where the Character PKCount are stored. (It uses PKCount also)

/*
    @Settings SMTP
    @Example of using the normal SMTP hosts:
    @Example    $Config_SMTP['Server']      = "smtp.mudkt.com.br";    //SMTP Server
    @Example    $Config_SMTP['Port']        = 25;   //SMTP server port
    @Example    $Config_SMTP['User']        = "daldegam@mudkt.com.br";  //Username server
    @Example    $Config_SMTP['Password']    = "***"; //Password server
    @Example    $Config_SMTP['Debug']       = false; //Debug (For advanced users only)
    @Example    $Config_SMTP['From']        = "daldegam@mudkt.com.br";  //Sender of email                               

    @Example of how to use Google's Gmail SMTP (For Gmail extension = php_openssl.dll must be enabled)
    @Example    $Config_SMTP['Server']      = "ssl://smtp.gmail.com";    //SMTP Server
    @Example    $Config_SMTP['Port']        = 465;   //SMTP server port
    @Example    $Config_SMTP['User']        = "daldegam@gmail.com";  //Username server
    @Example    $Config_SMTP['Password']    = "***"; //Password server
    @Example    $Config_SMTP['Debug']       = false; //Debug (For advanced users only)
    @Example    $Config_SMTP['From']        = "daldegam@gmail.com";  //Sender of email  
        
    @Example of how to use the Yahoo SMTP Mail:
    @Example    $Config_SMTP['Server']      = "smtp.mail.yahoo.com.br";    //SMTP Server
    @Example    $Config_SMTP['Port']        = 25;   //SMTP server port 25 or 587
    @Example    $Config_SMTP['User']        = "daldegam@yahoo.com.br";  //Username server
    @Example    $Config_SMTP['Password']    = "***"; //Password server
    @Example    $Config_SMTP['Debug']       = false; //Debug (For advanced users only)
    @Example    $Config_SMTP['From']        = "daldegam@yahoo.com.br";  //Sender of email
    
    @CHANGE TO CHANGE THE SETTINGS BELOW:
*/
$Config_SMTP['Server']      = "smtp.mail.yahoo.com.br";    //SMTP Server
$Config_SMTP['Port']        = 25;   //SMTP server port
$Config_SMTP['User']        = "daldegam@yahoo.com.br";  //Username server
$Config_SMTP['Password']    = "***"; //Password server
$Config_SMTP['Debug']       = false; //Debug (For advanced users only)
$Config_SMTP['From']        = "daldegam@yahoo.com.br";  //Sender of email
$Config_SMTP['LimitTime']   = 0;    //Time in minutes between each request to send emails for login.


/*
    @Primary settings
*/
define('SESSION_NAME', 'SQro0hq39JQr');  //Session Name Site
define('PASSWORD_UPDATE', 'daldegam:12312q3'); //Login and password to auto update (not implemented)
define('SHOPPING_LINK','#LinkShop'); //Shopping Link

/*
     @In the line below, place:
     0 for Season 1 or Down - No DL
     1 for Season 1 or Below
     2 for Season 2
     3 for Season 3 Episode 1
     4 for Season 3 Episode 2, Season 5 Up
     5 for Season 6
     6 for Season 6.2 or Above
*/
define('VESION_MUSERVER', 5); //Choose the MuServer version above using numbers only.

/*
    @Team of your muserver?
    @Put:
    0 for team not list here.
    1 for X-Team (Eduardo / phpnuke)
*/
define('MUSERVER_TEAM', 0);

define('TITLE_SITE', 'MuOnline Season 6'); //Title - Server Name
define('SERVER_NAME', 'MuOnline Server'); //Server name
define('SERVER_SLOGAN', 'Servidor 24 horas'); //Slogan server
define('SERVER_VERSION', '1.0X Season 6'); //Server version
define('SERVER_DROP', '70%'); //Server Drop value
define('SERVER_XP', '4500x'); //Server Exp value
define('SERVER_BUGBLESS', 'Online'); //Bugbless status
define('CASH_NAME', 'SGolds'); //Name of the first coin
define('CASH_NAME2', 'Golds'); //Name of the second currency
define('POINTS_NAME', 'Pontos'); //Nome da moeda de ponto
define('DISABLE_BASIC_INFOS', false); //Off to search for: Total accounts, characters, vips, accounts and banned characters

/*
    @Language system
*/
define('LANGUAGE_PATH', 'pt-br');

/*
    @Server Rooms
    @Quick search on Server Rooms using the ConnectServer to show them at the website.
*/
$Config_Find_Rooms_ConnectServer['Enable']     = true;                    //Enable Server Rooms display on the website
$Config_Find_Rooms_ConnectServer['version'] = 2;                        //ConnectServer Version. Use 1 for old versions(0.97d), use 2 for season 2 or higher
$Config_Find_Rooms_ConnectServer['Address'] = "season2.mudkt.com.br";    //ConnectServer IP
$Config_Find_Rooms_ConnectServer['Port']     = 44405;                    //ConnectServer Port
$Config_Find_Rooms_ConnectServer['TLimit']    = 10;                        //Query Life Time

$Config_Rooms_ConnectServer[320]['Name']     = "MuDKT 1";                //Server Code following by the Name of the room in the connectserver list (serverlist.dat).
$Config_Rooms_ConnectServer[321]['Name']     = "MuDKT 2";                //Server Code following by the Name of the room in the connectserver list (serverlist.dat).
$Config_Rooms_ConnectServer[290]['Name']     = "MuDKT PVP 1";            //Server Code following by the Name of the room in the connectserver list (serverlist.dat).
$Config_Rooms_ConnectServer[291]['Name']     = "MuDKT PVP 2";            //Server Code following by the Name of the room in the connectserver list (serverlist.dat).
$Config_Rooms_ConnectServer[140]['Name']     = "MuDKT SVip";                //Server Code following by the Name of the room in the connectserver list (serverlist.dat).


/*
    @Download Settings
*/
define('DOWNLOAD_GAMEFULL_LINK','http://74.53.229.98/~mudkt/mudktcombr/MuDKT_Season_II_BR.exe');
define('DOWNLOAD_GAMEFULL_MB','468 mb');
define('DOWNLOAD_PATCH_LINK','http://74.53.229.98/~mudkt/Patch_MuDKT_V2.zip');
define('DOWNLOAD_PATCH_MB','0.25 mb');

/*
    @Template Settings
*/
define('TEMPLATE_DIR', 'darkstyle'); // sunonline, ja_sanidine_free, refresh, darkstyle

/*
    @User Control Panel Settings.
    @Put 1 for yes, 0 for no.
*/
$PANELUSER_PREMISSIONS['MODIFY_DATA'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Change data
$PANELUSER_PREMISSIONS['CLEAN_VAULT'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Clear vault
$PANELUSER_PREMISSIONS['DOUBLE_VAULT'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Double vault
$PANELUSER_PREMISSIONS['VIRTUAL_VAULT'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Virtual vault
$PANELUSER_PREMISSIONS['GAME_DISCONNECT'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Disconnect account
$PANELUSER_PREMISSIONS['GOLDEN_ARCHER'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Golden Archer
$PANELUSER_PREMISSIONS['COLLECTOR_POINTS'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Collector of points
$PANELUSER_PREMISSIONS['AUCTIONS'] = array(/*Ligar*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Auctions
$PANELUSER_PREMISSIONS['LOG_BUYS'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Log shopping
$PANELUSER_PREMISSIONS['MODIFY_PERSONALID'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Change personal ID     
$PANELUSER_PREMISSIONS['RESET'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Reset
$PANELUSER_PREMISSIONS['MASTER_RESET'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Master Reset
$PANELUSER_PREMISSIONS['RESET_TRANSFER'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Transfer reset
$PANELUSER_PREMISSIONS['CLEAN_PK'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Clean PK
$PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Distribute points
$PANELUSER_PREMISSIONS['MOVE_CHARACTER'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Move character
$PANELUSER_PREMISSIONS['CHANGE_NICK'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Change nick
$PANELUSER_PREMISSIONS['CHANGE_CLASS'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Change class
$PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Redistribute points
$PANELUSER_PREMISSIONS['CLEAN_INVENTORY'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Erase Inventory
$PANELUSER_PREMISSIONS['MANAGER_PHOTO'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Manage photo
$PANELUSER_PREMISSIONS['BUY_VIPS'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Buy Vip
$PANELUSER_PREMISSIONS['CONFIRM_PAYMENT'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Confirm payment
$PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Open complains
$PANELUSER_PREMISSIONS['OPEN_TICKET'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Open ticket
$PANELUSER_PREMISSIONS['READ_TICKET'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Read ticket
$PANELUSER_PREMISSIONS['SEND_SMS'] = array(/*turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Send SMS


/*
    @User Control Panel Settings.
    @Module: Reset Character
*/
//RESET_MODE: 1 = Normal, will only read settings from 00 to 10 resets to the resets.
//RESET_MODE: 2 = Dynamic, will read resets all settings for a given number of resets, resets * points.
//RESET_MODE: 3 = Cumulative(KeepStat), it will only read settings from 00 to 10 resets to the resets and does not reset the points to reset.
//RESET_MODE: 4 = Dynamic, will read resets all settings for a given number of resets on scales with the addition of resets.
$PANELUSER_MODULE['RESET']['RESET_MODE'] = 1; //RESET MODE described above

$PANELUSER_MODULE['RESET']['LimitResets'] = array(/*Free*/ 0,/*Vip 1*/ 0,/*Vip 2*/ 0,/*Vip 3*/ 0,/*Vip 4*/ 0,/*Vip 5*/ 0); //Resets maximum. Set to 0 for unlimited.

$PANELUSER_MODULE['RESET']['0-10']['LevelReset'] = array(/*Free*/ 280,/*Vip 1*/ 240,/*Vip 2*/ 230,/*Vip 3*/ 230,/*Vip 4*/ 230,/*Vip 5*/ 230); //Need X level to reset from 00 to 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['LevelAfter'] = array(/*Free*/ 6,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Level X after Reset, 0 to 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['ZenRequire'] = array(/*Free*/ 500000,/*Vip 1*/ 300000,/*Vip 2*/ 100000,/*Vip 3*/ 100000,/*Vip 4*/ 100000,/*Vip 5*/ 100000); //Need X zen to reset 00 - 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['Points'] = array(/*Free*/ 600,/*Vip 1*/ 800,/*Vip 2*/ 1000,/*Vip 3*/ 1000,/*Vip 4*/ 1000,/*Vip 5*/ 1000); //Receive X points per reset from 0 to 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['CleanItens'] = array(/*Free*/ false,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the items after Reset from 0 to 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['CleanMagics'] = array(/*Free*/ false,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the MagicList after Reset from 0 to 10 resets.
$PANELUSER_MODULE['RESET']['0-10']['CleanQuests'] = array(/*Free*/ false,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the Quest after Reset from 0 to 10.

$PANELUSER_MODULE['RESET']['11-50']['LevelReset'] = array(/*Free*/ 290,/*Vip 1*/ 250,/*Vip 2*/ 240,/*Vip 3*/ 230,/*Vip 4*/ 230,/*Vip 5*/ 230); //Need X level to reset from 11 to 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Level X after Reset, 11 to 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['ZenRequire'] = array(/*Free*/ 5000000,/*Vip 1*/ 3000000,/*Vip 2*/ 1000000,/*Vip 3*/ 100000,/*Vip 4*/ 100000,/*Vip 5*/ 100000); //Need X zen to reset 11 - 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 1000,/*Vip 4*/ 1000,/*Vip 5*/ 1000); //Receive X points per reset from 11 to 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the items after Reset from 11 to 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the MagicList after Reset from 11 to 50 resets.
$PANELUSER_MODULE['RESET']['11-50']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the Quest after Reset from 11 to 50.

$PANELUSER_MODULE['RESET']['51-100']['LevelReset'] = array(/*Free*/ 300,/*Vip 1*/ 290,/*Vip 2*/ 280,/*Vip 3*/ 230,/*Vip 4*/ 230,/*Vip 5*/ 230); //Need X level to reset from 51 to 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Level X after Reset, 51 to 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['ZenRequire'] = array(/*Free*/ 50000000,/*Vip 1*/ 30000000,/*Vip 2*/ 10000000,/*Vip 3*/ 100000,/*Vip 4*/ 100000,/*Vip 5*/ 100000); //Need X zen to reset 51 - 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 1000,/*Vip 4*/ 1000,/*Vip 5*/ 1000); //Receive X points per reset from 51 to 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the items after Reset from 51 to 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the MagicList after Reset from 51 to 100 resets.
$PANELUSER_MODULE['RESET']['51-100']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the Quest after Reset from 51 to 100.

$PANELUSER_MODULE['RESET']['101-150']['LevelReset'] = array(/*Free*/ 300,/*Vip 1*/ 290,/*Vip 2*/ 280,/*Vip 3*/ 230,/*Vip 4*/ 230,/*Vip 5*/ 230); //Need X level to reset from 101 to 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Level X after Reset, 101 to 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['ZenRequire'] = array(/*Free*/ 50000000,/*Vip 1*/ 30000000,/*Vip 2*/ 10000000,/*Vip 3*/ 100000,/*Vip 4*/ 100000,/*Vip 5*/ 100000); //Need X zen to reset 101 - 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 1000,/*Vip 4*/ 1000,/*Vip 5*/ 1000); //Receive X points per reset from 101 to 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the items after Reset from 101 to 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the MagicList after Reset from 101 to 150 resets.
$PANELUSER_MODULE['RESET']['101-150']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the Quest after Reset from 101 to 150.

$PANELUSER_MODULE['RESET']['151-200']['LevelReset'] = array(/*Free*/ 300,/*Vip 1*/ 290,/*Vip 2*/ 280,/*Vip 3*/ 230,/*Vip 4*/ 230,/*Vip 5*/ 230); //Need X level to reset from 151 to 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Level X after Reset, 151 to 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['ZenRequire'] = array(/*Free*/ 50000000,/*Vip 1*/ 30000000,/*Vip 2*/ 10000000,/*Vip 3*/ 100000,/*Vip 4*/ 100000,/*Vip 5*/ 100000); //Need X zen to reset 151 - 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 1000,/*Vip 4*/ 1000,/*Vip 5*/ 1000); //Receive X points per reset from 151 to 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false; //Clear the items after Reset from 151 to 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the MagicList after Reset from 151 to 200 resets.
$PANELUSER_MODULE['RESET']['151-200']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the Quest after Reset from 151 to 200.

$PANELUSER_MODULE['RESET']['201-300']['LevelReset'] = array(/*Free*/ 300,/*Vip 1*/ 290,/*Vip 2*/ 280,/*Vip 3*/ 230,/*Vip 4*/ 230,/*Vip 5*/ 230); //Need X level to reset from 201 to 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Level X after Reset, 201 to 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['ZenRequire'] = array(/*Free*/ 50000000,/*Vip 1*/ 30000000,/*Vip 2*/ 10000000,/*Vip 3*/ 100000,/*Vip 4*/ 100000,/*Vip 5*/ 100000); //Need X zen to reset 201 - 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 1000,/*Vip 4*/ 1000,/*Vip 5*/ 1000); //Receive X points per reset from 201 to 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the items after Reset from 201 to 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the MagicList after Reset from 201 to 300 resets.
$PANELUSER_MODULE['RESET']['201-300']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the Quest after Reset from 201 to 300.

$PANELUSER_MODULE['RESET']['301-XXX']['LevelReset'] = array(/*Free*/ 300,/*Vip 1*/ 290,/*Vip 2*/ 280,/*Vip 3*/ 230,/*Vip 4*/ 230,/*Vip 5*/ 230); //Need X level to reset from 301 to XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['LevelAfter'] = array(/*Free*/ 1,/*Vip 1*/ 6,/*Vip 2*/ 12,/*Vip 3*/ 12,/*Vip 4*/ 12,/*Vip 5*/ 12); //Level X after Reset, 301 to XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['ZenRequire'] = array(/*Free*/ 50000000,/*Vip 1*/ 30000000,/*Vip 2*/ 10000000,/*Vip 3*/ 100000,/*Vip 4*/ 100000,/*Vip 5*/ 100000); //Need X zen to reset 301 - XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['Points'] = array(/*Free*/ 350,/*Vip 1*/ 550,/*Vip 2*/ 800,/*Vip 3*/ 1000,/*Vip 4*/ 1000,/*Vip 5*/ 1000); //Ganha X pontos por reset de 301 a XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['CleanItens'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the items after Reset from 301 to XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['CleanMagics'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the MagicList after Reset from 301 to XXX resets.
$PANELUSER_MODULE['RESET']['301-XXX']['CleanQuests'] = array(/*Free*/ true,/*Vip 1*/ false,/*Vip 2*/ false,/*Vip 3*/ false,/*Vip 4*/ false,/*Vip 5*/ false); //Clear the Quest after Reset from 301 to XXX.

/*
    @User Panel Settings.
    @Module: ClearPK Level
*/
$PANELUSER_MODULE['CLEAN_PK']['CLEAN_MODE'] = 1; //1 = Fixed Zen price. 2 = Zen per Killing(Zen * Kills).
$PANELUSER_MODULE['CLEAN_PK']['PRICEZEN'] = array(/*Free*/ 2000000,/*Vip 1*/ 1500000,/*Vip 2*/ 1000000,/*Vip 3*/ 1000000,/*Vip 4*/ 1000000,/*Vip 5*/ 1000000); //Needs X Zen per killing to Clean the PK Status.

/*
    @User Panel Settings.
    @Module: Change Class(Job)
*/
$PANELUSER_MODULE['CHANGE_CLASS']['RESET_QUESTS'] = true; //Clear all Quests after class change
$PANELUSER_MODULE['CHANGE_CLASS']['RESET_SKILLS'] = true; //Clear all magiclist(skills) after class change

/*
    @User Panel Settings.
    @Module: Add Point
*/
$PANELUSER_MODULE['DISTRIBUTE_POINTS']['MAXPOINTS'] = 32767; //Max allowed points to be added.

/*
    @User Panel Settings.
    @Module: Character Move
*/
$PANELUSER_MODULE['MOVE_CHARACTER']['MAPS'] = array(/*Map Number, Map Name, Coordenate X, Coordenate Y*/    
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
    @User Panel Settings.
    @Module: Buy Vip Silver or Vip Gold
    @PS.: The name of the plans on the lines:
            $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_SILVER'] and $PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_GOLD']
            Must not be altered, to alter the names use the line below:
            $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS']
*/
$PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'] = array(/*0*/ "Free", /*1*/ "Vip Silver", /*2*/ "Vip Gold", /*3*/ "Vip Diamante", /*4*/ "Vip Plus", /*5*/ "Vip Extreme"); //Server Plans
$PANELUSER_MODULE['BUY_VIPS']['ACTIVES'] = array("VIP_1" => true, "VIP_2" => true, "VIP_3" => true, "VIP_4" => true, "VIP_5" => true); //Place the VIPs you want to use
$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'] = array(/*30 days*/ 5, /*90 days*/ 15,/*180 days*/ 30,/*365 days*/ 60); //Cash Price to buy Vip 1
$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'] = array(/*30 days*/ 10, /*90 days*/ 30,/*180 days*/ 60,/*365 days*/ 120); //Cash Price to buy Vip 2
$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'] = array(/*30 days*/ 10, /*90 days*/ 30,/*180 days*/ 60,/*365 days*/ 120); //Cash Price to buy Vip 3
$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'] = array(/*30 days*/ 10, /*90 days*/ 30,/*180 days*/ 60,/*365 days*/ 120); //Cash Price to buy Vip 4
$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'] = array(/*30 days*/ 10, /*90 days*/ 30,/*180 days*/ 60,/*365 days*/ 120); //Cash Price to buy Vip 5

/*
    @User Panel Settings.
    @Module: Send SMS
*/
//Attention, this service requires a SMTP Server provided by yourself
//and the cellphone must be compatible with email system.
//Example: If your cellphone receives emails from: NUMBER@YOURPROVIDER.com
//you can use this system otherwise you can de-activate at the user panel control.
$Config_SMS_Subject                 = "SMS_MU";                    //Message Subject

$Config_SMS[0]['Name']                 = "Leandro Daldegam";        //Bank Name
$Config_SMS[0]['Number_Cel_DDD']    = "31";                        //Area Code
$Config_SMS[0]['Number_Cel']        = "00000000";                //Cellphone Number
$Config_SMS[0]['Email_Sufixo']        = "@clarotorpedo.com.br";    //mobile provider email sufix

/*
    @Class Settings.
*/
$CLASS_CHARACTERS['CLASSCODES'] = array(/*IDENTIFICATION*/ /*CLASSCODE*/ /*CLASSNAME*/ 
                                        "DW" => array(0, "Dark Wizard"),
                                        "SM" => array(1, "Soul Master"),
                                        "GM" => array(2, "Grand Master"), //Algumas versхes usam 3
                                        "DK" => array(16, "Dark Knight"),
                                        "BK" => array(17, "Blade Knight"),
                                        "BM" => array(18, "Blade Master"), //Algumas versхes usam 19
                                        "FE" => array(32, "Fairy Elf"),
                                        "ME" => array(33, "Muse Elf"),
                                        "HE" => array(34, "High Elf"), //Algumas versхes usam 35
                                        "MG" => array(48, "Magic Gladiator"),
                                        "DMM" => array(49, "Duel Master"), //Algumas season 4 usam 50
                                        "DL" => array(64, "Dark Lord"),
                                        "LE" => array(65, "Lord Emperor"), //Algumas season 4 usam 66
                                        "SU" => array(80, "Summoner"),
                                        "BS" => array(81, "Blood Summoner"),
                                        "DMS" => array(82, "Dimension Master"), //Algumas versхes usam 83
                                        "RF" => array(96, "Rage Fighter"),
                                        "FM" => array(98, "Fist Master")
                                        );
                                        
/*
    @Register Settings
*/
$REGISTER_SETTINGS['EMAIL_ACTIVE'] = true; //Activation by email [MAKE SURE YOUR SMTP SERVER IS WORKING TO ENABLE THIS OPTION! TEST REGISTRATER AFTER ACTIVATION!].
$REGISTER_SETTINGS['USERNAME']['FORCELOWER'] = true; //Force login with lowercase letters.
$REGISTER_SETTINGS['BONUS_VIP']['ACTIVE'] = true; //Uses VIP Bonus after Register.
$REGISTER_SETTINGS['BONUS_VIP']['TYPE'] = 1; //Bonus Type: 1 = Vip 1, 2 = Vip 2, 3 = Vip 3, 4 = Vip 4, 5 = Vip 5
$REGISTER_SETTINGS['BONUS_VIP']['DAYS'] = 5; //Days of Bonus as a prize.
$REGISTER_SETTINGS['EMAIL_REPEAT'] = true; //Can use same email more than once on different accounts.
$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT'] = 0; //Default Coin Value to receive from the first coin type of the site.
$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT2'] = 0; //Default Coin Value to receive from the second coin type of the site.

$REGISTER_SETTINGS['BONUS_ITEM']['ACTIVE'] = TRUE; //Activates the bonus item when you sign up
$REGISTER_SETTINGS['BONUS_ITEM']['VERSION'] = 3; //1 = (Old Version without personal store [97d]), 2 = (Old versions with personal store [1.0]), 3 = (New versions with personal store e harmony [1.02n or more]) 
/**
* How to configure the item bonus system:
* The system is configurated by default to give a blade knight kit, Soul Master kit or Muse Elf kit when a new player sign up, to register more itens or kits, follow the example logic;
* Attention, even if you use old versions that has no sockets and harmony, don't remove the option, just put the corresponding value as this options turned off!
* 
* The option: "Name", must contain the kit name to be deliveled to player
* The option: "Items", must contain the items to be delivered to player
*   Within the option "items" are the properties:
*       "idCategorie", must be the category of desired item (information on your item(kor).txt or item.txt of your MuServer)
*       "idItem", must be the id of desired item (information on your item(kor).txt or item.txt of your MuServer)
*       "options", inside here are the properties of the item.
*           "Level", determine the item level. (Possible values: 0 to 15)
*           "Option", determine the item option (life option). (Possible values: to +0 put 0, to +4 put 1, to +8 put 2, to +12 put 3, to +16 put 4, to +20 put 5, to +24 put 6, to +28 put 7)
*           "Skill", determine if the item will have Skill or not. (Possible values: true for yes , false for no)
*           "Luck", determine if the item will have luck or not. (Possible values: true for yes , false for no)
*           "Serial", determine if the item will have Serial or not, (Recomended: YES) case yes, will be taken a serial in order of MuServer (Like MuShopping or MuMaker), case no, the serial will be 00000000. (Possible values: true for yes , false for no)
*           "Excellent", determine wich excellent options the item will have. Note that exist 6 values to be defined here (true, true, true, true, true, true), see the order in an editor and test the register to check if it's correct! (Possible values: true for yes , false for no)
*           "Ancient", determine if the item are ancient or not. (Possible values: 0, 1 or 2; 0 for nothing, 1 for ancient 1, and 2 for ancient 2).
*           "Refine", determine if the item are refined or not (Option 380). (Possible values: 0, 1 or 2; 0 for nothing, 1 for ancient 1, and 2 for ancient 2).
*           "HarmonyType", determine the harmony option. (Possible values: 0 [NOTHING], 1, 2, 3, 4, 5, 6, 7, 8, 9, 10).
*           "HarmonyType", determine the harmony level. (Possible values: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13).
*           "SocketOption", determine wich socket options the item will have. Note that exist 5 values to be defined here (255, 255, 255, 255, 255), teste the register to check if it's correct! (Possible values: 255 for no socket, 254 for empty socket, to other values, take a look at editor (mumaker). [For versions SCF / SCFMT = 0 for no socket, 255 for empty socket])
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
    @Website table settings.
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
    @Website Front Page Ranking settings
*/
$RANKING_HOME_CONFIGS['TOPAMOUNT'] = 4; //How many TOP Rankings to display on the front page                     
$RANKING_HOME_STATS['RANKING_RESETS_HOME'] = true; // true = Show / false = Hide (Reset Ranking)
$RANKING_HOME_STATS['RANKING_RESETS_WEEK_HOME'] = true; // true = Show / false = Hide (Weekly Reset Ranking)  
$RANKING_HOME_STATS['RANKING_RESETS_MONTH_HOME'] = true; // true = Show / false = Hide (Monthly Reset Ranking)  
$RANKING_HOME_STATS['RANKING_MASTER_RESETS_HOME'] = true; // true = Show / false = Hide (Master Reset Ranking)  
$RANKING_HOME_STATS['RANKING_PK_HOME'] = true; // true = Show / false = Hide (PK Ranking)  
$RANKING_HOME_STATS['RANKING_LEVELS_HOME'] = true; // true = Show / false = Hide (Level Ranking)  
$RANKING_HOME_STATS['RANKING_GUILDS_HOME'] = true; // true = Show / false = Hide (Guild Ranking)                 
                                    
/*
    @Website Front Page Ranking settings
*/
$RANKING_CONFIGS['STATS'] = TRUE; //Show the character status (Strengh, Agility, Energy, Vitality, Comand)
$RANKING_CONFIGS['GENS'] = TRUE; //Turn on the Gens Ranking System (compatible with ENC Team MuServer)
$RANKING_CONFIGS['GENS_MANUFACTURER'] = 1; // 0 = MuServer ENC Team / 1 = X-Team 


/*
    @User Panel Settings
    @Module: Master Reset
*/                                                                                                                                                                
$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Active'] = true; //Activate Cash Bonus after Master Resetting. 
$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Amount'] = array(/*Free*/ 10,/*Vip 1*/ 20,/*Vip 2*/ 30,/*Vip 3*/ 30,/*Vip 4*/ 30,/*Vip 5*/ 30); //Cash Amount to receive per MReset after Master Resetting.
$PANELUSER_MODULE['MASTER_RESET']['Bonus']['Columns'] = array("table" => "webCash", "columnUsername" => "username", "columnAmount" => "amount"); //Table where the bonus will be stored 
$PANELUSER_MODULE['MASTER_RESET']['ResetsRequire'] = array(/*Free*/ 500,/*Vip 1*/ 450,/*Vip 2*/ 400,/*Vip 3*/ 400,/*Vip 4*/ 400,/*Vip 5*/ 400); //Required Reset Number to Master Reset.        
$PANELUSER_MODULE['MASTER_RESET']['PointsRequire'] = array("Strength" => 32000, "Dexterity" => 32000, "Vitality" => 32000, "Energy" => 32000, "Leadership" => 32000); //Required X point to master reset.
$PANELUSER_MODULE['MASTER_RESET']['PointsAfter'] = array("Strength" => 32, "Dexterity" => 32, "Vitality" => 32, "Energy" => 32, "Leadership" => 32); //Status point after master reset.
        
/*
    @User Panel Settings
    @Module: Resets Transfer
*/                                                                                                                                                                
$PANELUSER_MODULE['RESET_TRANSFER']['MIN_REQUIRE'] = 10; //Minimum Reset to be transfered.
                               
/*
    @User Panel Settings
    @Module: Open a ticket
*/                                                                                                                                                                
$PANELUSER_MODULE['OPEN_TICKET']['MAX_OPEN'] = 1; //Max Opened Ticket per Player.      

/*
    @User Panel Settings 
    @Modulo: Confirm PAYMENT
*/                                                                                                                                                                
$PANELUSER_MODULE['CONFIRM_PAYMENT']['MAX_OPEN'] = 1; //MAX Opened Payment per Player.
               
/*
    @User Panel Settings
    @Module: Logs write from actions taken by the User Panel.
*/                                                                                                                                                                
$PANELUSER_MODULE['LOG']['Active'] = true; //Activates Panel Log
$PANELUSER_MODULE['LOG']['DirLog'] = "logs/paneluser"; //Folder where the logs are stored. Must be at site root directory. (PS: Choose a hard name for the folder and it must have writting permissions.)

/*
    @Game Master / Administrador Panel Settings
    @Module: Logs write from actions taken by the Panel.
*/                                                                                                                                                                
$PANELADMIN_MODULE['LOG']['Active'] = true; //Activates Panel Log
$PANELADMIN_MODULE['LOG']['DirLog'] = "logs/paneladmin"; //Folder where the logs are stored. Must be at site root directory. (PS: Choose a hard name for the folder and it must have writting permissions.)

/*
    @Administrador Panel Settings
    @Module: Game tools.
*/                                                                                                                                                                
$PANELADMIN_MODULE['JOINSERVER']['IP'] = "127.0.0.1"; //Joinserver IP.
$PANELADMIN_MODULE['JOINSERVER']['PORT'] = "55970"; //JoinServer Port.

/*
    @Cronjob settings. 
    @Cronjob is a system which allow tasks executions automatically.
*/                                                                                                                                                                
$CRON_JOB['Active'] = true; //Activate cronjob service. true for yes and false for no.
$CRON_JOB['Debug'] = false; //Activate the debugger. true for yes and false for no.

/*
    @Pooling System settings.                                                                               
*/                                                                                                                                                                
$POLL['LOGIN'] = true; //Must be logged to vote. true = yes, false = no.
$POLL['HANG_WITH'] = array("type" => 2, //0 = vote with no lock, 1 = lock per ip, 2 = lock by cookie, 3 = lock per IP and cookie
                           "time" => 1); // Time in minutes between each vote.
 
/*
    @Latest Forum News Settings.                                                                               
*/                                                                                                                                                                
$FORUM_CONFIGS['ENABLE'] = false; // On / Off Latest Forum News
$FORUM_CONFIGS['TYPE'] = 1; // 0 = vBulletin, 1 = IPB, 2 = phpBB
$FORUM_CONFIGS['LAST_TOPICS'] = 5; // Latest X topics.
$FORUM_CONFIGS['NUMBER_FORUM'] = -1; // Forum number where the topics will be retrieved. Put -1 to retrieve all of them
$FORUM_CONFIGS['LINKS_TOPICS'] = "http://www.forum.mudkt.com.br/showthread.php?t=%d";    // Topic base link
$FORUM_CONFIGS['LINK_FORUM'] = "http://www.forum.mudkt.com.br/";    // forum link.
$FORUM_CONFIGS['UTF8_DECODE'] = false;    // Use true in case of Accented words(гу‘л) are bugged.

$FORUM_CONFIGS['DATABASE']['TYPE'] = 0;    // 0 = MYSQL, 1 = MSSQL.
$FORUM_CONFIGS['DATABASE']['HOST'] = "host";    // Forum Host connection
$FORUM_CONFIGS['DATABASE']['USERNAME'] = "user";    // User name
$FORUM_CONFIGS['DATABASE']['PASSWORD'] = "pass";    // User password
$FORUM_CONFIGS['DATABASE']['DB_NAME'] = "database";    // Database name
$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX'] = "ipb_";    // Table prefix.

/*
    @News Settings
*/
$NOTICES['LAST'] = 10; //Show Latest X News on the front page
$NOTICES['COMMENTS'] = TRUE; //ON / OFF the news commentaries

/*
    @Castle Siege Event Settings
*/
$CASTLE_SIEGE['ENABLE'] = true; //Turn on the castle siege banner on the front page
$CASTLE_SIEGE['CONFRONTATION'] = "Sбbado as 15:00h"; //Siege Date

/*
    @Modules Settings
*/                                                                                                                                                                
$MODULES['REGISTER'] = array("screenshots");

/*
    @Screenshot module
*/
$PANELUSER_PREMISSIONS['SCREENSHOT'] = array(/*Turn on*/ 1, /*Free*/ 1, /*Vip 1*/ 1, /*Vip 2*/ 1, /*Vip 3*/ 1, /*Vip 4*/ 1, /*Vip 5*/ 1); //Screenshot Manager - User Panel
$SCREENSHOTS['MAX_WIDTH'] = 640; //Max picture size to be sent...
$SCREENSHOTS['HOME'] = true; //Show TOP Screenshots on the frontpage
$SCREENSHOTS['TOP_HOME'] = 5; //Screenshots count on the front page

/*
    @Virtual Vault settings
*/
$VIRTUAL_VAULT['MUSERVER_MANUFACTURER'] = 0; //0 = Webzen original system (TNS Games, Diel, Eduardo (welcomevoce, phpnuke)), 1 = SCF System / SCFMT (MuMaker)
$VIRTUAL_VAULT['SOCKET_OPTIONS'] = true; //Has Socket Option? true for yes, false for no
$VIRTUAL_VAULT['SHOW_SERIAL'] = true; //Show item serial on the item description
$VIRTUAL_VAULT['SERIAL_INC_INDEX'] = false; // true for yes, false for no - use this option for the version 99MV developed by Alex, which add the prefix F9 on the item serial to make an increment of 32 on the item index allowing more than 31 items per category in this version.

/*
    @Real time chat in home (Turn "MuSite - ChatServer.exe" on)
*/
$CHAT_REAL_TIME['ENABLE'] = true; //true or false
$CHAT_REAL_TIME['TYPES'] = array(0, //Chat
                                 1, //Party
                                 2, //Guild
                                 3, //Mensage Global
                                 4, //Anounce of Guild
                                 5, //Whisper
                                 6, //Aliance
                                 7, //Game Master
                                 8, //Post
                                 ); //Types of chat that will appear on the site's home delete the line that you do not want to enable or comment with // in front of number


/*
    @Settings of the event of questions  - Show do Million.
*/
$GAME_QUESTION['ENABLE'] = true; //turn on
$GAME_QUESTION['WAIT'] = 180; //If raffled, you should wait X seconds to be raffled again.
$GAME_QUESTION['LUCK'] = array(0, 10000, 9500); //Start, End, must score a minimum.
$GAME_QUESTION['PREMIUM'] = array(
    //IT IS IMPORTANT THAT EACH CATEGORY BELOW (A = EASY, MODERATE = B, C = DIFFICULT, D = TECHNICAL LEVEL), HAVE AT LEAST 1 ITEM NOT REGISTERED FOR AWARD TO CAUSE TROUBLE IN THE SYSTEM!
    "A" => array( //Easy questions - Tip: Items weak
        array("idCategorie" => 0, "idItem" => 8, "options" => array("Level" => 5, "Option" => 3, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, false, false, true, false, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        array("idCategorie" => 1, "idItem" => 4, "options" => array("Level" => 3, "Option" => 4, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(false, true, false, false, true, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
    ),
    "B" => array( //Questions moderate - Tip: moderate Items
        array("idCategorie" => 2, "idItem" => 7, "options" => array("Level" => 9, "Option" => 5, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(false, true, true, false, true, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        array("idCategorie" => 4, "idItem" => 6, "options" => array("Level" => 8, "Option" => 6, "Skill" => true, "Luck" => true, "Serial" => true, "Excellent" => array(true, false, true, false, false, true), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
    ),
    "C" => array( //Difficult questions - Tip: Items difficult
        array("idCategorie" => 5, "idItem" => 8, "options" => array("Level" => 11, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, false, true, true, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        array("idCategorie" => 0, "idItem" => 11, "options" => array("Level" => 11, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, false, true, true, true, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
    ),
    "D" => array( //Questions on a technical level - Tip: Items coveted
        array("idCategorie" => 12, "idItem" => 4, "options" => array("Level" => 13, "Option" => 7, "Skill" => false, "Luck" => true, "Serial" => true, "Excellent" => array(true, true, true, true, false, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
        array("idCategorie" => 14, "idItem" => 14, "options" => array("Level" => 0, "Option" => 0, "Skill" => false, "Luck" => false, "Serial" => true, "Excellent" => array(false, false, false, false, false, false), "Ancient" => 0, "Refine" => false, "HarmonyType" => 0, "HarmonyLevel" => 0, "SocketOption" => array(255,255,255,255,255))),
    )
); //Premiums


/*
    @User Panel Settings.
    @Module: Collector of points
*/                                                                                                                                                                
$PANELUSER_MODULE['COLLECTOR_POINTS']['REQUIRE'] = array("idCategorie" => 14, "idItem" => 16, "premiumInPoints" => 2); //Categorie item, id item, points per item.

?>