function fnGoList(PageName) 
{
    var frm = document.forms["form1"];
    frm.action = PageName;
    frm.submit();
}

function trim(str) {
  return str.replace(/(^\s+)|(\s+)$/,"");
}

function fnLoginAlert() {
    alert("Please sign-in to your account.");
}

function fnChkBlank(str) {
    if (str == "" || str.split(" ").join("") == ""){
        return true;
    }
    else{
        return false;
    }
}

function fnCutLength(str,lengths) {
    var len = 0;
    var newStr = '';

    for (var i=0;i<str.length; i++)
    {
        var n = str.charCodeAt(i);
        var nv = str.charAt(i);
        if ((n>= 0)&&(n<256))
            len ++;
        else
            len += 2;

        if (len>lengths)
            break;
        else
            newStr = newStr + nv;
    }
    return newStr;
}

function fnChkLength(str) {
    var len = 0;
    var newStr = '';

    for (var i=0;i<str.length; i++)
    {
        var n = str.charCodeAt(i);
        var nv = str.charAt(i);    
        if ((n>= 0)&&(n<256)) {
            len ++;
        } 
        else {
            len += 2;
        }
    }
    return len;
}

function fnValidateEmpty(objField, strMessage)
{
    var objReplace = objField.value.replace(/(^\s*)|(\s*$)/g, "");
    
    if (objReplace == "")
    {
        if (strMessage != "")
        {
            alert(strMessage);
            if(objField.type != "hidden")
                objField.focus();
        }
        objField.value = objReplace;
        return false;
    }
    
    return true;
}

function fnValidateSize(objField, strMessage, intSize, bitByte, bitCheck)
{
    var objReplace = objField.value.replace(/(^\s*)|(\s*$)/g, "");
    var intLength, intChrCode, strblnResult
    
    intLength = 0;
    
    if (bitByte)
    {
        for (var i=0; i<objReplace.length; i++)
        {
            intChrCode = objReplace.charCodeAt(i);
            if ((intChrCode>=0) && (intChrCode < 256))
                intLength ++;
            else
                intLength += 2;
        }
    }
    else
    {
        intLength = objReplace.length;
    }

    if (bitCheck == 1)
    {
        if (intLength > intSize)
            blnResult = true;
        else
            blnResult = false;
    }
    else
    {
        if (intLength < intSize)
            blnResult = true;
        else
            blnResult = false;
    }

    if (blnResult)
    {
        if (strMessage != "")
        {
            alert(strMessage);
            if(objField.type != "hidden")
                objField.focus();
        }
        objField.value = objReplace;
        return false;
    }
    
    return true;
}

function fnValidateRadio(ele){
    var intChk = 0;
    var objEle = document.getElementsByName(ele);

    for(var i = 0; i < objEle.length; i++){
        if(objEle[i].checked){
            intChk += 1;
            break;
        }
    }

    if (intChk == 0){
        return false;
    }
    else{
        return true;
    }
}

function fnIsNumeric(objNumber)
{
    var temp = new String(objNumber)

    if(temp.search(/\D/) != -1)
    {
        return false;
    }

    return true;
}

function fnIsValidEmail(strEmail)
{
    var str = strEmail;
    var at = "@";
    var dot = ".";
    var lat = str.indexOf(at);
    var lstr = str.length;
    var ldot = str.indexOf(dot);

    if(str.indexOf(at) ==-1) {return false;}

    if(str.indexOf(at)==-1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr){return false;}

    if(str.indexOf(at)==-1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr){return false;}

    if(str.indexOf(at,(lat+1))!=-1) {return false;}

    if(str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){return false;}

    if(str.indexOf(dot,(lat+2))==-1){return false;}

    if(str.indexOf(" ")!=-1) {return false;}

    var iChars = "*|,\":<>[]{}`\';()$#%";

    for (var i = 0; i < str.lengrh; i++)
    {
        if(iChars.indexOf(str.charAt(i)) != -1)
        return false;
    }

    return true;
}

function fnValidateEmptyPrint(divName, objField, strMessage)
{
    var objReplace = objField.value.replace(/(^\s*)|(\s*$)/g, "");
    
    if (objReplace == "")
    {
        if (strMessage != "")
        {
            document.getElementById(divName).innerHTML = strMessage;
            box.color(divName);
            input.error(objField);
            //if(objField.type != "hidden")
                //objField.focus();
        }
        objField.value = objReplace;
        return false;
    }
    
    document.getElementById(divName).style.display = "none";

    return true;
}

function fnGetBrowser() {
    var strUA, strBName, intI;
    strUA = window.navigator.userAgent.toLowerCase();

    this.isIE = false;
    this.isFF = false;
    this.isNS = false;
    this.isOP = false;
    this.isSF = false;
    this.isCR = false;
    this.version = null;

    strBName = "msie";
    if ((intI = strUA.indexOf(strBName)) >= 0) {
        this.isIE = true;
        this.version = parseFloat(strUA.substr(intI + strBName.length));
        return;
    }
    strBName = "firefox/";
    if ((intI = strUA.indexOf(strBName)) >= 0) {
        this.isFF = true;
        this.version = parseFloat(strUA.substr(intI + strBName.length));
        return;
    }
    
    strBName = "minfefiled/";
    if ((intI = strUA.indexOf(strBName)) >= 0) {
        this.isFF = true;
        this.version = parseFloat(strUA.substr(intI + strBName.length));
        return;
    }
    strBName = "namoroka/";
    if ((intI = strUA.indexOf(strBName)) >= 0) {
        this.isFF = true;
        this.version = parseFloat(strUA.substr(intI + strBName.length));
        return;
    }
    
    strBName = "netscape/";
    if ((intI = strUA.indexOf(strBName)) >= 0) {
        this.isNS = true;
        this.version = parseFloat(strUA.substr(intI + strBName.length));
        return;
    }
    strBName = "opera/";
    if ((intI = strUA.indexOf(strBName)) >= 0) {
        this.isOP = true;
        this.version = parseFloat(strUA.substr(intI + strBName.length));
        return;
    }
    strBName = "safari/";
    if ((intI = strUA.indexOf(strBName)) >= 0) {
        this.isSF = true;
        this.version = parseFloat(strUA.substr(intI + strBName.length));
        return;
    }
    strBName = "chrome/";
    if ((intI = strUA.indexOf(strBName)) >= 0) {
        this.isCR = true;
        this.version = parseFloat(strUA.substr(intI + strBName.length));
        return;
    }
}

function raiseEnterAction(ev,btn)
{
    var evt_code = (window.netscape) ? ev.which : event.keyCode;
    /* FF = ev.which, IE = keyCode */
    if(evt_code == 13) 
    {
        self.focus();
        document.getElementById(btn).click();
        return false;
    }

    return true;
}

var General =
{
    StringToHex: function (str) {
        var hex = '';
        for (var i = 0; i < str.length; i++) {
            hex += '' + str.charCodeAt(i).toString(16);
        }
        return hex;
    }

}
