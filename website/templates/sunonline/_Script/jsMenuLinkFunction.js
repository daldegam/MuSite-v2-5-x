// Domain Info
var __blnDev = (location.href.indexOf("http://lc-")==0);
var __blnBeta = (location.href.indexOf("http://new-")==0);
var __blnLive = true;

var __strHostPreFix = "http://";
var __strHostPreFix2 = "http://";

if (__blnDev){__strHostPreFix = "http://lc-";__blnLive = false;}
if (__blnBeta){__strHostPreFix = "http://new-";__blnLive = false;}
if (__blnLive){__strHostPreFix2 = "https://"}

var __DOMAIN_TOP = "webzen.com";
var __DOMAIN_IMAGE = "image.webzen.com";
var __DOMAIN_PORTAL = __strHostPreFix + "www.webzen.com";
var __DOMAIN_MEMBER = __strHostPreFix + "member.webzen.com";
var __DOMAIN_FORUM = __strHostPreFix + "forum.webzen.com";
var __DOMAIN_ARCHLORD = __strHostPreFix + "archlord.webzen.com";
var __DOMAIN_SUNONLINE = __strHostPreFix + "sunonline.webzen.com";
var __DOMAIN_ITEMSHOP = __strHostPreFix + "itemshop.sunonline.webzen.com";
var __DOMAIN_UPLOAD = __strHostPreFix + "upload.webzen.com";
var __DOMAIN_FILES = __strHostPreFix + "files.webzen.com";
var __DOMAIN_PAYMENT = __strHostPreFix + "payment.webzen.com";


// Message Info
var TEXT11 = "Please enter a vaild user ID.";
var TEXT12 = "The user ID must be a combination of alphabetic characters and numbers.";
var TEXT13 = "The user ID must consist of minimum 4 and maximum 20 characters.";
var TEXT14 = "The user ID cannot only contain numbers.";
var TEXT15 = "You have entered a filtered/blocked user ID string.";
var TEXT16 = "Please enter a valid password.";
var TEXT17 = "The password may only contain characters or numbers.";
var TEXT18 = "We recommended that you use a combination of alphabetic characters and numbers.";
var TEXT19 = "The password must consist of minimum 6 and maximum 20 characters.";
var TEXT20 = "Using 4 consecutive entries of letters or numbers are restricted. (ie.. 1,2,3,4 : ABCD)";
var TEXT21 = "Using 4 consecutive entries of the same characters are restricted. (ie.. 1111 : AAAA)";
var TEXT22 = "You cannot use the password which has at least 4 duplicate character string from the user ID.";
var TEXT27 = "The user ID and password must be differ.";
var TEXT29 = "You can cancel your account termination.";
var TEXT30 = "You have terminated your Webzen account. You may re-sign up within 90 days from the termination date.";
var TEXT31 = "You have terminated your Webzen account.";
var TEXT32 = "You have entered an invalid information or your account doesn't exist. Please try again.";
var TEXT33 = "Illegal access.";
var TEXT34 = "Five (5) failed login attempts. Your account is temporarily disabled, and you must wait at least 10 minutes before you try again. Please ensure that you have entered the correct user ID and password. If the problem continues, contact us at global_admin@webzen.com.";
var TEXT35 = "Unable to login to our website. IP address restrictions may be applied."
var TEXT37 = "Unexpected error has occurred please try again."
var TEXT49 = "failed login.Please try again."
var TEXT51 = "It is a situation of user ID limitation"
var TEXT61 = 'Please enter Character name.'
var TEXT62 = 'Please enter Guild name.'
var TEXT63 = 'Please enter Item name.'

// Page Info
var arrMenu = new Array();

arrMenu[0] = new Array();
arrMenu[0][0] = { Seq: 0, Text: MENU00, link: "/" };

// News
arrMenu[1] = new Array();
arrMenu[1][0] = { Seq: 10, Text: MENU10, link: "/News/Notice/" };
arrMenu[1][1] = { Seq: 11, Text: MENU11, link: "/News/Notice/" };
arrMenu[1][2] = { Seq: 12, Text: MENU12, link: "/News/Event/" };

// Guides
arrMenu[2] = new Array();
arrMenu[2][0] = { Seq: 20, Text: MENU20, link: "/GameGuide/?nfc=2&nsc=1" };
arrMenu[2][1] = { Seq: 21, Text: MENU21, link: "/GameGuide/?nfc=2&nsc=1" };
arrMenu[2][2] = { Seq: 22, Text: MENU22, link: "/GameGuide/?nfc=2&nsc=2" };
arrMenu[2][3] = { Seq: 23, Text: MENU23, link: "/GameGuide/?nfc=2&nsc=3" };
arrMenu[2][4] = { Seq: 24, Text: MENU24, link: "/GameGuide/?nfc=2&nsc=4" };
arrMenu[2][5] = { Seq: 25, Text: MENU25, link: "/GameGuide/?nfc=2&nsc=5" };

//BEGINNER'S GUIDES
//arrMenu[2][1] = new Array();
//arrMenu[2][1][0] = { Seq: 210, Text: MENU210, link: "/GameGuide/?nfc=2&nsc=1&ndc=1" };
//arrMenu[2][1][1] = { Seq: 211, Text: MENU211, link: "/GameGuide/?nfc=2&nsc=1&ndc=1" };

//BASIC GUIDES
arrMenu[2][1] = new Array();
arrMenu[2][1][0] = { Seq: 7, Text: MENU210, link: "/GameGuide/?nfc=2&nsc=1&ndc=7" };
arrMenu[2][1][1] = { Seq: 7, Text: MENU211, link: "/GameGuide/?nfc=2&nsc=1&ndc=7" };
arrMenu[2][1][2] = { Seq: 1, Text: MENU212, link: "/GameGuide/?nfc=2&nsc=1&ndc=1" };
arrMenu[2][1][3] = { Seq: 2, Text: MENU213, link: "/GameGuide/?nfc=2&nsc=1&ndc=2" };
arrMenu[2][1][4] = { Seq: 3, Text: MENU214, link: "/GameGuide/?nfc=2&nsc=1&ndc=3" };
arrMenu[2][1][5] = { Seq: 4, Text: MENU215, link: "/GameGuide/?nfc=2&nsc=1&ndc=4" };
arrMenu[2][1][6] = { Seq: 6, Text: MENU216, link: "/GameGuide/?nfc=2&nsc=1&ndc=6" };
arrMenu[2][1][7] = { Seq: 8, Text: MENU217, link: "/GameGuide/?nfc=2&nsc=1&ndc=8" };


//GAME INFO
arrMenu[2][2] = new Array();
arrMenu[2][2][0] = { Seq: 220, Text: MENU220, link: "/GameGuide/?nfc=2&nsc=2&ndc=1" };
arrMenu[2][2][1] = { Seq: 220, Text: MENU221, link: "/GameGuide/?nfc=2&nsc=2&ndc=1" };
arrMenu[2][2][2] = { Seq: 221, Text: MENU222, link: "/GameGuide/?nfc=2&nsc=2&ndc=2" };

//GAME SYSTEM
arrMenu[2][3] = new Array();
arrMenu[2][3][0] = { Seq: 230, Text: MENU230, link: "/GameGuide/?nfc=2&nsc=3&ndc=1" };
arrMenu[2][3][1] = { Seq: 230, Text: MENU231, link: "/GameGuide/?nfc=2&nsc=3&ndc=1" };
arrMenu[2][3][2] = { Seq: 231, Text: MENU232, link: "/GameGuide/?nfc=2&nsc=3&ndc=2" };
arrMenu[2][3][3] = { Seq: 232, Text: MENU233, link: "/GameGuide/?nfc=2&nsc=3&ndc=3" };
arrMenu[2][3][4] = { Seq: 233, Text: MENU234, link: "/GameGuide/?nfc=2&nsc=3&ndc=4" };
arrMenu[2][3][5] = { Seq: 234, Text: MENU235, link: "/GameGuide/?nfc=2&nsc=3&ndc=5" };
arrMenu[2][3][6] = { Seq: 235, Text: MENU236, link: "/GameGuide/?nfc=2&nsc=3&ndc=6" };
arrMenu[2][3][7] = { Seq: 236, Text: MENU237, link: "/GameGuide/?nfc=2&nsc=3&ndc=7" };
arrMenu[2][3][8] = { Seq: 237, Text: MENU238, link: "/GameGuide/?nfc=2&nsc=3&ndc=8" };
arrMenu[2][3][9] = { Seq: 238, Text: MENU239, link: "/GameGuide/?nfc=2&nsc=3&ndc=9" };
arrMenu[2][3][10] = { Seq: 239, Text: MENU239_1, link: "/GameGuide/?nfc=2&nsc=3&ndc=10" };
arrMenu[2][3][11] = { Seq: 2391, Text: MENU239_2, link: "/GameGuide/?nfc=2&nsc=3&ndc=11" };
arrMenu[2][3][12] = { Seq: 2392, Text: MENU239_3, link: "/GameGuide/?nfc=2&nsc=3&ndc=12" };
arrMenu[2][3][13] = { Seq: 2393, Text: MENU239_4, link: "/GameGuide/?nfc=2&nsc=3&ndc=13" };


//CHARACTERS
arrMenu[2][4] = new Array();
arrMenu[2][4][0] = { Seq: 240, Text: MENU240, link: "/GameGuide/?nfc=2&nsc=4&ndc=1" };
arrMenu[2][4][1] = { Seq: 240, Text: MENU241, link: "/GameGuide/?nfc=2&nsc=4&ndc=1" };
arrMenu[2][4][2] = { Seq: 241, Text: MENU242, link: "/GameGuide/?nfc=2&nsc=4&ndc=2" };
arrMenu[2][4][3] = { Seq: 242, Text: MENU243, link: "/GameGuide/?nfc=2&nsc=4&ndc=3" };
arrMenu[2][4][4] = { Seq: 243, Text: MENU244, link: "/GameGuide/?nfc=2&nsc=4&ndc=4" };
arrMenu[2][4][5] = { Seq: 244, Text: MENU245, link: "/GameGuide/?nfc=2&nsc=4&ndc=5" };

//GUIDE MOVIES
//CHARACTERS
arrMenu[2][5] = new Array();
arrMenu[2][5][0] = { Seq: 250, Text: MENU250, link: "/GameGuide/?nfc=2&nsc=5&ndc=1" };
arrMenu[2][5][1] = { Seq: 250, Text: MENU251, link: "/GameGuide/?nfc=2&nsc=5&ndc=1" };
arrMenu[2][5][2] = { Seq: 251, Text: MENU252, link: "/GameGuide/?nfc=2&nsc=5&ndc=2" };
arrMenu[2][5][3] = { Seq: 252, Text: MENU253, link: "/GameGuide/?nfc=2&nsc=5&ndc=3" };
arrMenu[2][5][4] = { Seq: 253, Text: MENU254, link: "/GameGuide/?nfc=2&nsc=5&ndc=4" };
arrMenu[2][5][5] = { Seq: 254, Text: MENU255, link: "/GameGuide/?nfc=2&nsc=5&ndc=5" };
arrMenu[2][5][6] = { Seq: 255, Text: MENU256, link: "/GameGuide/?nfc=2&nsc=5&ndc=6" };
arrMenu[2][5][7] = { Seq: 256, Text: MENU257, link: "/GameGuide/?nfc=2&nsc=5&ndc=7" };


// Forum
arrMenu[3] = new Array();
arrMenu[3][0] = { Seq: 30, Text: MENU30, link: __DOMAIN_FORUM };
arrMenu[3][1] = { Seq: 31, Text: MENU31, link: __DOMAIN_FORUM + "/VideoForum/" };
arrMenu[3][2] = { Seq: 32, Text: MENU32, link: __DOMAIN_FORUM + "/forum114-sun.aspx" };
arrMenu[3][3] = { Seq: 33, Text: MENU33, link: "/Community/FanSite/" };

// Media
arrMenu[4] = new Array();
arrMenu[4][0] = { Seq: 40, Text: MENU40, link: "/Media/ScreenShot/" };
arrMenu[4][1] = { Seq: 41, Text: MENU41, link: "/Media/ScreenShot/" };
arrMenu[4][2] = { Seq: 42, Text: MENU42, link: "/Media/WallPaper/" };
arrMenu[4][3] = { Seq: 43, Text: MENU43, link: "/Media/ConceptArt/" };

// Shop
arrMenu[5] = new Array();
arrMenu[5][0] = { Seq: 50, Text: MENU50, link: "/ItemShop/Catalog/" };
arrMenu[5][1] = { Seq: 51, Text: MENU51, link: "/ItemShop/Catalog/" };

arrMenu[5][2] = { Seq: 52, Text: MENU52, link: __DOMAIN_ITEMSHOP + "/Main/Main_SUN.asp?AccessUrl=/GameShop/SUNShopMainFrm.asp" };
//arrMenu[5][2] = { Seq: 52, Text: MENU52, link: "javascript:alert('Service will be available.');"};
arrMenu[5][3] = { Seq: 53, Text: MENU53, link: "/GameGuide/?nfc=2&nsc=1&ndc=6" };
arrMenu[5][4] = { Seq: 54, Text: MENU54, link: "" };

// Ranking
arrMenu[6] = new Array();
arrMenu[6][0] = { Seq: 60, Text: MENU60, link: "/Ranking/ACHallofFame.aspx" };
arrMenu[6][1] = { Seq: 61, Text: MENU61, link: "/Ranking/ACHallofFame.aspx" };
arrMenu[6][2] = { Seq: 62, Text: MENU62, link: "/Ranking/LevelTop500.aspx" };
arrMenu[6][3] = { Seq: 63, Text: MENU63, link: "/Ranking/Guild.aspx" };

arrMenu[6][1] = new Array();
arrMenu[6][1][0] = { Seq: 610, Text: MENU610, link: "/Ranking/ACHallofFame.aspx" };
arrMenu[6][1][1] = { Seq: 611, Text: MENU611, link: "/Ranking/ACHallofFame.aspx" };
arrMenu[6][1][2] = { Seq: 612, Text: MENU612, link: "/Ranking/ACTop100.aspx" };

arrMenu[6][2] = new Array();
arrMenu[6][2][0] = { Seq: 620, Text: MENU620, link: "/Ranking/LevelTop500.aspx" };

arrMenu[6][3] = new Array();
arrMenu[6][3][0] = { Seq: 630, Text: MENU630, link: "/Ranking/Guild.aspx" };

// Etc
arrMenu[7] = new Array();
arrMenu[7][0] = { Seq: 70, Text: MENU70, link: "" };
arrMenu[7][1] = { Seq: 71, Text: MENU71, link: "" };
arrMenu[7][2] = { Seq: 72, Text: MENU72, link: "" };
arrMenu[7][3] = { Seq: 73, Text: MENU73, link: "" };
arrMenu[7][4] = { Seq: 74, Text: MENU74, link: "" };
arrMenu[7][5] = { Seq: 75, Text: MENU75, link: "/_HTML/ActivexInstall.aspx" };

arrMenu[8] = new Array();
arrMenu[8][0] = { Seq: 80, Text: MENU80, link: __DOMAIN_PORTAL + "/_HTML/Download.aspx" };
arrMenu[8][1] = { Seq: 81, Text: MENU81, link: __DOMAIN_PORTAL + "/_HTML/Download.aspx" };

arrMenu[9] = new Array();
arrMenu[9][0] = { Seq: 80, Text: "SIGN UP", link: __DOMAIN_PORTAL };
arrMenu[9][1] = { Seq: 80, Text: "SIGN UP", link: __DOMAIN_MEMBER + "/Account/Join/registAccount.aspx" };

var _naviLoginSts = false;
function setNavLoginSts(blnSts)
{
    _naviLoginSts = blnSts;
}

function getNavLoginSts()
{
    return _naviLoginSts;
}

// Page Move
function fnGoMenu(intDepth1, intDepth2)
{
    //Hide Menu
//    if(arrMenu[intDepth1][intDepth2].Seq == 50 || arrMenu[intDepth1][intDepth2].Seq == 51 || arrMenu[intDepth1][intDepth2].Seq == 52)
//    {
//        alert("Service will be available soon.");
//        return; 
//    }
                
    var strLink = "/default.aspx";

    try
    {
        if(typeof(arrMenu[intDepth1][intDepth2].length) == "undefined")
        {
            for(var intLoop=0; intLoop < arrMenu[intDepth1].length; intLoop++ )
            {

                if(intLoop == intDepth2)
                {
                    if(getNavLoginSts())
                    {
                        if(intDepth1 == 5 && intLoop == 4)
                        {
                            document.location.href = __DOMAIN_PAYMENT + "/Main/Main_GB_C.asp";
                            break;
                        }
                        else
                        {
                            strLink = arrMenu[intDepth1][intLoop].link;
                            document.location.href = strLink;
                            break;
                        }
                    }
                    else
                    {
                        if(intDepth1 == 5 && intLoop == 4)
                        {
                            document.location.href = __DOMAIN_MEMBER + "/Login/default.aspx?sGC=102&sRU=" + __DOMAIN_PAYMENT + "/Main/Main_GB_C.asp";
                            break;
                        }
                        else
                        {
                            strLink = arrMenu[intDepth1][intLoop].link;
                            document.location.href = strLink;
                            break;
                        }
                    }
                }
            }
        }
        else
        {
            var strMenu = String(intDepth2);
            var sMmenu = strMenu.substring(0,1);
            var sSmenu = strMenu.substring(1,2);

            for(var intLoop=0; intLoop < arrMenu[intDepth1][intDepth2].length; intLoop++ )
            {
                if(intLoop == sSmenu)
                {
                    strLink = arrMenu[intDepth1][[intDepth2]][intLoop].link;
                    document.location.href = strLink;
                    break;
                }
            }
        }
    }
    catch(e){
        document.location.href = strLink;
    }
}

// Left Menu
var old='';
function fnMenu(name)
{
    submenu=document.getElementById("guide_"+name+"").style;
    
    if(old!=submenu)
    {
        if(old!='')
        {
            old.display='none';
        }
        submenu.display='block';
        old=submenu;
    }
    else
    {
        submenu.display='none';
        old='';
    }
}

function printLeftMenu(intDepth1, intDepth2, intDepth3)
{
    document.write("<div class=\"snb_wrap\">")
    document.write("<h2>"+arrMenu[intDepth1][0].Text+"</h2>")
    document.write("<ul class=\"snb_1dep\">")

    for(var intLoop=1; intLoop < arrMenu[intDepth1].length; intLoop++)
    {
        if(intDepth1 == 2) // Guides
        {
            var strMenu = String(intDepth2);
            var sMmenu = strMenu.substring(0,1);
            var sSmenu = strMenu.substring(1,2);
            
            document.write("<li class=\"d3_mnu\">");
            switch (intLoop)
            {
                case 1:
                    strGuidesName = MENU21; //BEGINNER'S GUIDES
                    break;
                case 2:
                    strGuidesName = MENU22; //BASIC GUIDES
                    break;
                case 3:
                    strGuidesName = MENU23;    //GAME INFO
                    break;
                case 4:
                    strGuidesName = MENU24; //GAME SYSTEM
                    break;
                case 5:
                    strGuidesName = MENU25; //CHARACTERS
                    break;
                default:
                    strGuidesName = "N/A";
                    break;
            }

            if(intDepth2 == intLoop)
            {
                document.write("<h3><a href=\"/GameGuide/\" onclick=\"fnMenu("+intLoop+"); return false;\" class=\"on\">"+strGuidesName+"</a></h3>");
            }
            else
            {
                document.write("<h3><a href=\"/GameGuide/\" onclick=\"fnMenu("+intLoop+"); return false;\" class=\"off\">"+strGuidesName+"</a></h3>");
            }

            document.write("<ul id=\"guide_"+intLoop+"\" style=\"display:none\">");               

            for(var intLoopB=1; intLoopB < arrMenu[intDepth1][intLoop].length; intLoopB++)
            {
                if (intDepth2 == 1) {
                    if (intDepth2 == intLoop && intDepth3 == arrMenu[intDepth1][intLoop][intLoopB].Seq) {
                        document.write("<li><a href=\"" + arrMenu[intDepth1][intLoop][intLoopB].link + "\" class=\"m_on\">- " + arrMenu[intDepth1][intLoop][intLoopB].Text + "</a></li>");
                    }
                    else {
                        document.write("<li><a href=\"" + arrMenu[intDepth1][intLoop][intLoopB].link + "\" class=\"m_off\">- " + arrMenu[intDepth1][intLoop][intLoopB].Text + "</a></li>");
                    }
                }
                else 
                {
                    if (intDepth2 == intLoop && intDepth3 == intLoopB) {
                        document.write("<li><a href=\"" + arrMenu[intDepth1][intLoop][intLoopB].link + "\" class=\"m_on\">- " + arrMenu[intDepth1][intLoop][intLoopB].Text + "</a></li>");
                    }
                    else {
                        document.write("<li><a href=\"" + arrMenu[intDepth1][intLoop][intLoopB].link + "\" class=\"m_off\">- " + arrMenu[intDepth1][intLoop][intLoopB].Text + "</a></li>");
                    }
                }
            }
                
            document.write("</ul>");
            document.write("</li>");
        }
        else if(intDepth1 == 6) // Ranking
        {
            var strMenu = String(intDepth2);
            var sMmenu = strMenu.substring(0,1);
            var sSmenu = strMenu.substring(1,2);
            
            if(intLoop == 1)
            {
                document.write("<li class=\"d3_mnu\">");
                switch (intLoop)
                {
                    case 1:
                        strRankingName = MENU61; //AC Ranking
                        break;
                    default:
                        strRankingName = "N/A";
                        break;
                }

                if(intDepth2 == intLoop)
                {
                    document.write("<h3><a href=\"/Ranking/\" onclick=\"fnMenu("+intLoop+"); return false;\" class=\"on\">"+strRankingName+"</a></h3>");
                    document.write("<ul id=\"guide_"+intLoop+"\" style=\"display:block\">");

                }
                else
                {
                    document.write("<h3><a href=\"/Ranking/\" onclick=\"fnMenu("+intLoop+"); return false;\" class=\"off\">"+strRankingName+"</a></h3>");
                    document.write("<ul id=\"guide_"+intLoop+"\" style=\"display:none\">");
                }

                
                for(var intLoopB=1; intLoopB < arrMenu[intDepth1][intLoop].length; intLoopB++)
                {
                    if(intDepth2 == intLoop && intDepth3 == intLoopB)
                    {
                        document.write("<li><a href=\""+arrMenu[intDepth1][intLoop][intLoopB].link+"\" class=\"m_on\">- "+arrMenu[intDepth1][intLoop][intLoopB].Text+"</a></li>");
                    }
                    else
                    {
                        document.write("<li><a href=\""+arrMenu[intDepth1][intLoop][intLoopB].link+"\" class=\"m_off\">- "+arrMenu[intDepth1][intLoop][intLoopB].Text+"</a></li>");
                    }
                }
                    
                document.write("</ul>");
                document.write("</li>");
            }
            else
            {
                if(intDepth2 == intLoop)
                {
                    document.write("<li class=\"d2_mnu\"><a href=\""+arrMenu[intDepth1][intLoop][0].link+"\" class=\"on\">"+arrMenu[intDepth1][intLoop][0].Text+"</a></li>")
                }
                else
                {
                    document.write("<li class=\"d2_mnu\"><a href=\""+arrMenu[intDepth1][intLoop][0].link+"\" class=\"off\">"+arrMenu[intDepth1][intLoop][0].Text+"</a></li>")
                }
            }
        }
        else
        {
            if(intDepth2 == intLoop)
            {
                //ë¡œê·¸ì?¸ ë?˜ì–´ ìžˆì?„ ë•Œ
                if(getNavLoginSts())
                {
                    // BUY W COIN ë©”ë‰´
                    if(intDepth1 == 5 && intLoop == 4)
                    {
                        document.write("<li class=\"d2_mnu\"><a href="+__DOMAIN_PAYMENT + "/Main/Main_GB_C.asp"+" class=\"on\">"+arrMenu[intDepth1][intLoop].Text+"</a></li>")
                    }
                    else
                    {
                        document.write("<li class=\"d2_mnu\"><a href=\""+arrMenu[intDepth1][intLoop].link+"\" class=\"on\">"+arrMenu[intDepth1][intLoop].Text+"</a></li>")
                    }
                }
                //ë¡œê·¸ì?¸ ë?˜ì–´ ìžˆì§€ ì•Šì?„ ê²½ìš°
                else
                {
                    // BUY W COIN ë©”ë‰´
                    if(intDepth1 == 5 && intLoop == 4)
                    {
                        document.write("<li class=\"d2_mnu\"><a href="+__DOMAIN_MEMBER + "/Login/default.aspx?sGC=102&sRU=" + __DOMAIN_PAYMENT + "/Main/Main_GB_C.asp"+" class=\"on\">"+arrMenu[intDepth1][intLoop].Text+"</a></li>")
                    }
                    else
                    {
                        document.write("<li class=\"d2_mnu\"><a href=\""+arrMenu[intDepth1][intLoop].link+"\" class=\"on\">"+arrMenu[intDepth1][intLoop].Text+"</a></li>")
                    }
                }    
            }
            else
            {
                //ë¡œê·¸ì?¸ ë?˜ì–´ ìžˆì?„ ê²½ìš°
                if(getNavLoginSts())
                {
                    // BUY W COIN ë©”ë‰´
                    if(intDepth1 == 5 && intLoop == 4)
                    {
                        document.write("<li class=\"d2_mnu\"><a href="+__DOMAIN_PAYMENT + "/Main/Main_GB_C.asp"+" class=\"off\">"+arrMenu[intDepth1][intLoop].Text+"</a></li>")
                    }
                    else
                    {
                        document.write("<li class=\"d2_mnu\"><a href=\""+arrMenu[intDepth1][intLoop].link+"\" class=\"off\">"+arrMenu[intDepth1][intLoop].Text+"</a></li>")
                    }
                }
                //ë¡œê·¸ì?¸ ë?˜ì–´ ìžˆì§€ ì•Šì?„ ê²½ìš°
                else
                {
                    // BUY W COIN ë©”ë‰´
                    if(intDepth1 == 5 && intLoop == 4)
                    {
                        document.write("<li class=\"d2_mnu\"><a href="+__DOMAIN_MEMBER + "/Login/default.aspx?sGC=102&sRU=" + __DOMAIN_PAYMENT + "/Main/Main_GB_C.asp"+" class=\"off\">"+arrMenu[intDepth1][intLoop].Text+"</a></li>")
                    }
                    else
                    {
                        document.write("<li class=\"d2_mnu\"><a href=\""+arrMenu[intDepth1][intLoop].link+"\" class=\"off\">"+arrMenu[intDepth1][intLoop].Text+"</a></li>")
                    }
                }            
            }
        }
    }

    document.write("</ul>")
    document.write("</div>")

    if(intDepth1 == 2 || (intDepth1 == 6 && intLoop ==1)) // Guides
    {
        submenu=document.getElementById('guide_'+intDepth2).style;

        if(old!=submenu)
        {
            if(old!='')
            {
                old.display='none';
            }
            submenu.display='block';
            old=submenu;
        }
        else
        {
            submenu.display='none';
            old='';
        }
    }
}

// Page Navi
function printHistory(intDepth1, intDepth2, intDepth3)
{
    var strMenu = String(intDepth2);
    var sMmenu = strMenu.substring(0,1);
    var sSmenu = strMenu.substring(1,2);

    document.write("<div class=\"locationtitle\">")
    document.write("<div class=\"location\">")
    document.write("<a href=\"/\" class=\"home\">" + arrMenu[0][0].Text + "</a>")

    if(intDepth2 == 0)
    {
        document.write(" &gt; <strong>" + arrMenu[intDepth1][0].Text + "</strong>")
        document.write("</div>")
        document.write("<h3 class=\"subtitle\">" + arrMenu[intDepth1][intDepth2].Text + "</h3>")
    }
    else if(intDepth1 == 2)  // Guides
    {
        switch (intDepth2)
        {
            case 1:
                strGuidesName = MENU21; //BEGINNER'S GUIDES
                strGuidesLink = "/GameGuide/?nfc=2&nsc=1"
                break;
            case 2 :
                strGuidesName = MENU22; //BASIC GUIDES
                strGuidesLink = "/GameGuide/?nfc=2&nsc=2"
                break;
            case 3 :
                strGuidesName = MENU23;    //GAME INFO
                strGuidesLink = "/GameGuide/?nfc=2&nsc=3"
                break;
            case 4 :
                strGuidesName = MENU24; //GAME SYSTEM
                strGuidesLink = "/GameGuide/?nfc=2&nsc=4"
                break;    
            case 5 :
                strGuidesName = MENU25; //CHARACTERS
                strGuidesLink = "/GameGuide/?nfc=2&nsc=5"
                break;
            default : 
                strGuidesName = ""   
                strGuidesLink = ""
                break;
        }

        if (intDepth3 > 0)
        {
            document.write(" &gt; <a href=\""+arrMenu[intDepth1][0].link+"\" class=\"home\"> "+ arrMenu[intDepth1][0].Text + "</a>")
            document.write(" &gt; <a href=\""+strGuidesLink+"\" class=\"home\"> "+strGuidesName+ "</a>")
        }

        if (intDepth2 == 1) 
        {
            for (var intLoop = 1; intLoop < arrMenu[intDepth1][sMmenu].length; intLoop++) {


                if (intDepth3 == arrMenu[intDepth1][sMmenu][intLoop].Seq) {
                    document.write(" &gt; <strong>" + arrMenu[intDepth1][sMmenu][intLoop].Text + "</strong>")
                    break;
                }
            }

            document.write("</div>")
            document.write("<h3 class=\"subtitle\">" + arrMenu[intDepth1][sMmenu][intLoop].Text + "</h3>")
        }
        else 
        {
            for (var intLoop = 1; intLoop < arrMenu[intDepth1][sMmenu].length; intLoop++) {
                if (intDepth3 == intLoop) {
                    document.write(" &gt; <strong>" + arrMenu[intDepth1][sMmenu][intLoop].Text + "</strong>")
                    break;
                }
            }

            document.write("</div>")
            document.write("<h3 class=\"subtitle\">" + arrMenu[intDepth1][sMmenu][intLoop].Text + "</h3>")
        }        
    }
    else if(intDepth1 == 6)  // Guides
    {
        switch (intDepth2)
        {
            case "1" :
                strRankingName = MENU61; //AC Ranking
                strRankingLink = "/Ranking/ACTop100.aspx";
                break;
            case "2" :
                strRankingName = MENU62; //Level Ranking
                strRankingLink = "/Ranking/LevelTop500.aspx"
                break;
            case "3" :
                strRankingName = MENU63;    //Guild Ranking
                strRankingLink = "/Ranking/Guild.aspx"
                break;
                
            default : 
                strRankingName = "";
                strRankingLink = "";
                break;
        }

        //if (intDepth3 > 0)
        //{
            document.write(" &gt; <a href=\""+arrMenu[intDepth1][0].link+"\" class=\"home\"> " + arrMenu[intDepth1][0].Text + "</a>")
            document.write(" &gt; <a href=\""+strRankingLink+"\" class=\"home\"> " + strRankingName+ "</a>");
        //}

        for(var intLoop=1; intLoop < arrMenu[intDepth1][sMmenu].length; intLoop++)
        {
            if(intDepth3 == intLoop)
            {
                document.write(" &gt; <strong>"+ arrMenu[intDepth1][sMmenu][intLoop].Text + "</strong>")
                break;
            }
        }

        document.write("</div>")
        document.write("<h3 class=\"subtitle\">" + arrMenu[intDepth1][sMmenu][0].Text + "</h3>")
    }
    else
    {
        document.write(" &gt; <a href=\""+arrMenu[intDepth1][0].link+"\" class=\"home\">" + arrMenu[intDepth1][0].Text + "</a>")

        for(var intLoop=1; intLoop < arrMenu[intDepth1].length; intLoop++)
        {
            if(intDepth2 == intLoop)
            {
                document.write(" &gt; <strong>"+ arrMenu[intDepth1][intLoop].Text + "</strong>")
                break;
            }
        }

        document.write("</div>")
        document.write("<h3 class=\"subtitle\">" + arrMenu[intDepth1][intDepth2].Text + "</h3>")
    }

    document.write("</div>")
}

// Page Move Forum
function fnGoForum()
{
    var strLink = __DOMAIN_FORUM + "/default.aspx";

    document.location.href = strLink;
}