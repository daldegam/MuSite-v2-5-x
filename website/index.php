<?php
error_reporting(E_ALL & ~E_NOTICE);
require("modules/autoload.php");
require("modules/settings.php");
session_name(SESSION_NAME);
session_start();  

$ldVersion = new ldVersion();           
$ldVersion->setCurrentVersion("2.5.4");
$ldVersion->compareCurrentVersion();

$ldSecurity = new ldSecurity();
$ldTime = new ldTime();
$ldMssql = new ldMssql();
$ldTpl = new ldTpl();
if($_GET['page'] != "ajax")    
    $ldGeneral = new ldGeneral(); 
    
new ldLanguage("commontexts", true);
                   
switch($_GET['page'])
{
    case "ajax":
        $ldAjax = new ldAjax();
        exit();
        break;
    case "logout":
        session_destroy();
        header("Location: ?");
        break;
    case "paneluser":
        $ldPanelUser = new ldPanelUser();
        break;
    case "paneladmin":
        $ldPanelAdmin = new ldPanelAdmin();
        break;
    case "panelgamemaster":
        $ldPanelGameMaster = new ldPanelGameMaster();
        break;
    case "register":                   
        $ldRegister = new ldRegister();  
        $ldTpl->open("templates/".TEMPLATE_DIR."/register.tpl.php");
        break;
    case "downloads":
        $ldDownloads = new ldDownloads();
        $ldTpl->open("templates/".TEMPLATE_DIR."/downloads.tpl.php");
        break;
    case "rankings":
        $ldRankings = new ldRankings();
        $ldTpl->open("templates/".TEMPLATE_DIR."/rankings.tpl.php");
        break;
    case "contact":
        $ldTpl->open("templates/".TEMPLATE_DIR."/contact.tpl.php");
        break;
    case "vips":
        $ldVips = new ldVips();
        switch($_GET['option'])
        {
            case "advantages": $ldVips->loadAdvantages(); $ldTpl->open("templates/".TEMPLATE_DIR."/vips[advantages].tpl.php"); break;
            case "howToBuy": $ldTpl->open("templates/".TEMPLATE_DIR."/vips[howtobuy].tpl.php"); break;
            case "howToBuyVips": $ldVips->loadHowToBuyVips(); $ldTpl->open("templates/".TEMPLATE_DIR."/vips[howtobuyvips].tpl.php"); break;
            default: $ldTpl->open("templates/".TEMPLATE_DIR."/vips.tpl.php"); break;
        }        
        break;
    case "readNotice":
        $ldNotice = new ldNotice();
        $ldTpl->open("templates/".TEMPLATE_DIR."/readNotice.tpl.php");
        break;
    case "onlines":
        $ldOnlines = new ldOnlines();
        $ldTpl->open("templates/".TEMPLATE_DIR."/onlines.tpl.php");
        break;
    case "recovery":
        $ldRecovery = new ldRecovery();
        switch($_GET['type'])
        {
            case "password": case "confirm": $ldTpl->open("templates/".TEMPLATE_DIR."/recovery[password].tpl.php"); break;
        }        
        break;
    case "captcha":
        $ldCaptcha = new ldCaptcha();
        break;
    case "custonPage":                    
        $ldHome = new ldHome();
        $ldTpl->open("templates/".TEMPLATE_DIR."/{$_GET['template']}.tpl.php");
        break;
    case "banned":                    
        $ldBanned = new ldBanned();
        $ldTpl->open("templates/".TEMPLATE_DIR."/banned.tpl.php"); break;
        break;
    case "loadModule":                     
        $ldHome = new ldHome();                   
        $ldModules = new ldModules($_GET['module']);
        break;
    default:
        $ldHome = new ldHome();
        $ldTpl->open("templates/".TEMPLATE_DIR."/index.tpl.php");
        break;
}
$ldTpl->set("ResultTime", $ldTime->Result_Time());
$ldTpl->show();
if($CRON_JOB['Debug'] == true)
    echo "\n<!-- Begin Cronjob -->\n\t<div style='width: 617px; height: 250px; overflow: scroll;'>\n\t\t<img src=\"modules/classes/cronjob.class.php?temp=".time()."\" />\n\t</div>\n<!-- End Cronjob -->";
else    
    echo "\n<!-- Begin Cronjob -->\n\t<img src=\"modules/classes/cronjob.class.php?temp=".time()."\" />\n<!-- End Cronjob -->";
echo "\n\n<!-- Web Site v{$ldVersion->getCurrentVersion()} desenvolvido por Leandro Daldegam -->";
?>