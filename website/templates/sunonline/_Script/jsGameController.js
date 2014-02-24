//var isIE = navigator.appVersion.toLowerCase().indexOf("msie") > 0 ? true : false;

// Domain Info
var __blnDev = (location.href.indexOf("http://lc-")==0);
var __blnBeta = (location.href.indexOf("http://new-")==0);

var _Browser = new fnGetBrowser();
var _ACTIVEX_Version = 1024;
var _CountryID = 2;
var _GameID = 2;
var _ServiceID = 1;
var _AuthUseType = 2;
var _XmlUrl = __DOMAIN_PORTAL+ "/_Files/StarterInfo.xml";
var _objStarter = null;

if (__blnDev || __blnBeta){_ServiceID = 2}else{_ServiceID = 1}


//Browser Check
function isSupportedBrowser()
{
    var isbool = false;

    if(_Browser.isIE)isbool=true;    //Explorer
    if(_Browser.isFF)isbool=true;    //FireFox
    if(_Browser.isOP)isbool=true;    //Opera
    if(_Browser.isSF)isbool=true;    //Safari
    if(_Browser.isCR)isbool=true;    //Chrome

    return isbool;
}

//Auto Installer Popup
function popAutoInstaller()
{
    layertemp.open('/_Common/layerStarter.aspx',518,209);
}

//GameStarter Object Get
function getGameStartController()
{
    var obj = "";
    if(_Browser.isIE)
    {
        obj =    '<object id="GameWebStarter" ';
        obj +=    'CLASSID="CLSID:39BC8B20-FB5A-43E5-9EBC-E637B700859E" ';
        obj +=    'width="0" height="0" style="display:none">';
        obj +=    '</object>';
    }
    else
    {
    //    obj =    '<object width="0" height="0">';
        obj +=    '<embed id="GameWebStarterFX" type="application/WebzenGameWebStarterPlugin" width="0" height="0" />';
    //    obj +=    '</object>';
    }
    return obj;
}

//GameStarter Object Setting
function setStartController(){
    var startDiv = document.getElementById('startObjet');
    if(startDiv == null)
    {
        var obj = document.createElement('div');
        obj.setAttribute('id','startObjet');
        obj.style.border = '0px';
        obj.style.width = '0px';
        obj.style.height = '0px';
        startDiv = document.body.appendChild(obj);
    }
    startDiv.innerHTML = getGameStartController();
}

//Game Page Execute
function execGameStart(gameID, serviceID)
{
    var startFrame = document.getElementById("startFrame");
    var obj = document.createElement('script');
    obj.type = 'text/javascript';
    obj.setAttribute('id','startFrame');

    startFrame = document.getElementsByTagName("head")[0].appendChild(obj);
    startFrame.src = "/_Common/comGameLaunch.aspx?iGC="+ gameID +"&iSC="+ serviceID;
}

//Game Starter Object Load
function getStartObject()
{
    if(_objStarter == null)
    {
        setStartController();

        if(_Browser.isIE)
        {
            if(document.GameWebStarter != null && typeof(document.GameWebStarter) != "undefined" && document.GameWebStarter.object != null)
            {
                _objStarter = document.GameWebStarter;
            }
        }
        else
        {
            var objPlugin = navigator.plugins["NPGameWebStarter"];
            if(objPlugin != null)
            {
                _objStarter = document.getElementById("GameWebStarterFX");
            }
        }
    }

    return _objStarter;
}

//Game Starter Execute
function startGame()
{
    if(!isSupportedBrowser()){errBrowser(); return;}
    if(!isLogin()){errLogin();return;}

    var objStarter    = getStartObject();
    var strParam    = _XmlUrl+"|"+_GameID+"|"+_ServiceID+"|"+_CountryID;

    if(objStarter == null)
    {
        popAutoInstaller();
    }
    else
    {
        if(objStarter.GetModuleVersionINT() != _ACTIVEX_Version)    //Check ActiveX Version
        {
            if(objStarter.GetModuleVersionINT() < _ACTIVEX_Version)
            {
                popAutoInstaller();
            }
            else
            {
                if(!objStarter.IsExecGameClient(strParam))    //Check Game Process
                {
                    execGameStart(_GameID, _ServiceID);
                }
                else
                {
                    errGameStarterExec(-500);    
                }
            }
        }
        else
        {  
            var confirmResult = objStarter.IsGameClientInstalled(strParam);
            if(confirmResult != '100')
            {
                //Move Download Page
                errGameStarterExec(confirmResult);
            }
            else
            {
                if(!objStarter.IsExecGameClient(strParam))    //Check Game Process
                {
                    execGameStart(_GameID, _ServiceID);
                }
                else
                {
                    errGameStarterExec(-500);    
                }
            }
        }
    }
}

//ActiveX Install Page Move
function movePluginInstall()
{
    document.location.href = "/_HTML/ActivexInstall.aspx";
}

//Game Client Install Page Move
function moveClientDownLoad()
{
    if(confirm("Install the game client before starting the game. Please click OK to move to the game client download page."))
    {
        document.location.href = __DOMAIN_PORTAL+"/_HTML/Download.aspx";
    }
}

//WebStarter Execute Error
function errGameStarterExec(intError)
{
    if(intError == '0')
    {
        moveClientDownLoad();
        return false;
    }
    else if(intError == '-500')
    {
        alert('The game is currently running...');
        return false;
    }
    else if (intError == '-600')
    {
        return false;
    }
    else
    {
        alert('A problem caused the game to stop working correctly. : ' + intError);
        return false;
    }
}

//Browser Error
function errBrowser()
{
    alert('It is recommended to execute the game client in the Internet Explorer or Mozilla Firefox web browser.');
}

//AuthKey Error
function errAuthKey()
{
    alert('Your authenication data is invalid.');
}

//Login Error
function errLogin()
{
    alert('Please sign-in to your account.');
}

//Game Launcher Execute
function fnGameStartExec(strAccountID, strKey, intGameID, intServiceCode, strUserID)
{
    if(!isLogin()){errLogin(); return;}
    if(strKey.length != 36){errAuthKey(); return;}
    if(strKey.split('-').length != 5){errAuthKey(); return;}

    var objStarter    = getStartObject();
    var strParam    = strAccountID+"|"+strUserID+"|"+_XmlUrl+"|"+strKey+"|"+intGameID+"|"+intServiceCode+"|"+_CountryID+"|"+_AuthUseType;

    if(objStarter == null)
    {
        popAutoInstaller();
    }
    else
    {
        var confirmResult = objStarter.StartWebLauncher_SelectAuth(strParam);
    }

    if (confirmResult != '100') {
        errGameStarterExec(confirmResult);
    }
    else {
        //지급
        $.ajax(
                    {
                        type: "POST",
                        url: "/_Common/comGameLaunch.aspx/EventUserPay",
                        data: "{\'intAccountGuid\': \'" + strAccountID + "\',\'intGameCode\': \'" + intGameID + "\',\'PayPromotionSeq\': \'3\'}",
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        async: true,
                        success: function (msg) {
                            //onSubmit(msg);
                            //alert(msg);
                            //0 : 성공
                            //1 : �?�미지급
                            //2 : 대�?�?아님
                            //-1 : 알수없는 오류 실패 
                        },
                        error: function (xhr, status, error) {
                            //alert(xhr.responseText);
                        }
                    });
    }
}

function isLogin() {

    var rtn = false;
    var ckLogin = fnGetStrCookie("WZ_GLOBAL_SECURE");
    if (ckLogin == "" || ckLogin == "undefined" || ckLogin == null) {
        rtn = false
    }
    else
        rtn = true;

    return rtn;
}

function fnGetStrCookie(sName) {
    var aRec;
    var aCook = document.cookie.split("; ");

    for (var i = 0; i < aCook.length; i++) {
        aRec = aCook[i].split("=");
        if (sName.toLowerCase() == unescape(aRec[0].toLowerCase())) return fnGetRealContent(aRec);
    }

    return "";
}

function fnGetRealContent(aRec) {

    if (aRec.length > 2) {
        var strContents = aRec[1];
        for (var i = 2; i < aRec.length; i++) {
            strContents = strContents + "=" + aRec[i];

        }
        return strContents;


    }
    return aRec[1];
}