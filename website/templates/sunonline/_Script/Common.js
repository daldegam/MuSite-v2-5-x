var news = {
    el : "tbl_news",
    action : function(el){
        if(!el){
            var table = document.getElementById(this.el);
        } else {
            this.el = el;
            var table = document.getElementById(this.el);
        }
        var tbody = table.getElementsByTagName("tbody")[0];
        var rows = tbody.childNodes;
        if(tbody.getElementsByTagName("tr").length == 0){
            news.none(tbody); //Not Find Data
            return false;
        }
        for(var i=0; i<rows.length; i++){
            if(rows[i].nodeType != 1 && rows[i].nodeName != "TR") continue;
            if(rows[i].getElementsByTagName("th").length > 0 && rows[i].getElementsByTagName("td").length == 0){
                news.open(rows,i);
            }
        }
        /*
        Preview
        ex)
        news.count = number;
        news.action();
        */
        if(Number(this.count)){
            news.view(rows,(this.count*2)-2);
        }
    },
    close : function(el){
        for(var i=0; i<el.length; i++){
            if(el[i].nodeType != 1 && el[i].nodeName != "TR") continue;
            if(el[i].getElementsByTagName("th").length > 0 && el[i].getElementsByTagName("td").length == 0){
                el[i].className = "";
            } else {
                el[i].style.display = "none";
            }
        }
    },
    open : function(el,n){
        el[n].onclick = function(){
            news.nextSibling(this);
            if(this.className == "on"){
                this.className = "";
                news.next.style.display = "none";
            } else {
                news.close(el);
                this.getElementsByTagName("th")[1].style.color = "";
                this.className = "on";
                news.next.style.display = "";
            }
            news.iframe(news.next);
        }
        el[n].onmouseover = function(){
            if(this.className != "on") this.className = "over";
        }
        el[n].onmouseout = function(){
            if(this.className != "on") this.className = "";
        }
    },
    view : function(el,n){
        for(var i=0; i<el.length; i++){
            if(el[i].nodeType != 1 && el[i].nodeName != "TR") continue;
            if(n == 0){
                el[i].getElementsByTagName("th")[1].style.color = "";
                el[i].className = "on";
                news.nextSibling(el[i]);
                news.next.style.display = "";
                news.iframe(news.next);
                break;
            } else {
                n--;
            }
        }
    },
    none : function(el){
        var tr = document.createElement("tr");
        var td = document.createElement("td");
        var text = document.createTextNode("Not Find Data!");
        td.className = "no-data";
        td.colSpan = "3";
        td.appendChild(text);
        tr.appendChild(td);
        el.appendChild(tr);
    },
    nextSibling : function(el){
        news.next = el;
        for(var i=0; i<100; i++){
            news.next = news.next.nextSibling;
            if(news.next.nodeType == 1) break;
        }
    },
    iframe : function(el){
        if(typeof el.getElementsByTagName("iframe")[0] == "object"){
            var ifmID = el.getElementsByTagName("iframe")[0].id;
            var resizeFunc = function(){
                var height = document.getElementById(ifmID).contentWindow.document.body.scrollHeight;
                document.getElementById(ifmID).style.height = height + "px";
            }
            if(Number(this.count)){
                var loadFunc = window.onload;
                document.getElementById(ifmID).onload = function(){
                    resizeFunc();
                }
                if(typeof window.onload == "function"){
                    window.attachEvent("onload", loadFunc);
                }
            } else {
                resizeFunc();
            }
        }
    }
};


var media = {
    el : "ssl_wrap",
    action : function(){
        var el = document.getElementById(this.el);
        var thumb = el.getElementsByTagName("dt");
        var original = el.getElementsByTagName("dd");
        for(var i=0; i<thumb.length; i++){
            var button = original[i].getElementsByTagName("a")[0];
            button.count = i;
            button.onclick = function(){
                media.layer(this.count);
                return false;
            }
        }
    },
    layer : function(num){
        var el = document.getElementById(this.el).getElementsByTagName("dd")[num].getElementsByTagName("a")[0].href;
        var image = new Image();
        var maxwidth = 622;
        var maxheight = 466;
        media.resize = 0;
        image.src = el;
        if(image.width<1){
            setTimeout("media.layer('"+num+"')",10);
            return false;
        }
        if(image.width > maxwidth){ 
            image.height = image.height / (image.width / maxwidth);
            image.width = maxwidth;
            media.resize = 1;
        }
        if(image.height > maxheight){
            image.width = image.width / (image.height / maxheight);
            image.height = maxheight;
            media.resize = 1;
        }
        if(!document.getElementById("layerBack")){
            layer.open(el,640,535,num,image.width,image.height);
        } else {
            layer.write(el,num,image.width,image.height);
        }
    }
}

var layer = {
    open : function(el,w,h,num,img_w,img_h){
        var ifmback = document.createElement("div");
        ifmback.id = "layerBack";
        ifmback.style.position = "absolute";
        ifmback.style.left = "0";
        ifmback.style.top = "0";
        ifmback.style.zIndex = "1000";
        ifmback.style.filter = "alpha(opacity=78)";
        ifmback.style.MozOpacity = "0.78";
        ifmback.style.opacity = "0.78";
        ifmback.style.backgroundColor = "#000";
        ifmback.style.width = (document.body.clientWidth<990) ? "990px" : parseInt(document.body.clientWidth) + "px";
        ifmback.style.height = parseInt(document.documentElement.scrollHeight) + "px";
        document.body.appendChild(ifmback);
        ifmback.onclick = layer.close;

        
        var ifmcontent = document.createElement("div");
        ifmcontent.id = "layercontents";
        ifmcontent.style.position = "absolute";
        ifmcontent.style.backgroundColor = "#b1b1b6";
        ifmcontent.style.border = "3px solid #878794";
        ifmcontent.style.left = (parseInt(document.body.clientWidth)/2) - (parseInt(w)/2) + "px";
        ifmcontent.style.top = ((parseInt(document.documentElement.clientHeight)/2) + (parseInt(document.documentElement.scrollTop))) - (parseInt(h)/2) + "px";
        ifmcontent.style.zIndex = "5000";
        ifmcontent.frameBorder = "0";
        ifmcontent.style.width = w + "px";
        ifmcontent.style.height = h + "px";
        ifmcontent.style.margin = "0";
        document.body.appendChild(ifmcontent);

        layer.write(el,num,img_w,img_h);

        window.onresize = function(){
            ifmback.style.width = (document.body.clientWidth<990) ? "990px" : parseInt(document.body.clientWidth) + "px";
            ifmback.style.height = parseInt(document.documentElement.scrollHeight) + "px";
            ifmcontent.style.left = (parseInt(document.body.clientWidth)/2) - (parseInt(w)/2) + "px";
            ifmcontent.style.top = ((parseInt(document.documentElement.clientHeight)/2) + (parseInt(document.documentElement.scrollTop))) - (parseInt(h)/2) + "px";
        }
    },
    write : function(img_n,num,img_w,img_h){
        if(!document.getElementById("MediaImage")){
            var strLayer = "";
                strLayer += "<p class=\"maximize\" id=\"MediaMaximize\" style=\"display:none;\"><a target=\"_blank\" id=\"MediaMaximizeLink\"><img src=\"http://image.webzen.com/Global/SUN/common/btn/bt_maximize.gif\" alt=\"Maximize\"></a></p>";
                strLayer += "<p class=\"slide\">";
                strLayer += "    <img src=\"http://image.webzen.com/Global/SUN/common/btn/bt_previmage.gif\" alt=\"Prev Image\" style=\"display:none;\" id=\"MediaPrev\" />";
                strLayer += "    <img src=\"http://image.webzen.com/Global/SUN/common/btn/bt_nextimage.gif\" alt=\"Next Image\" style=\"display:none;\" id=\"MediaNext\" />";
                strLayer += "    <img src=\"http://image.webzen.com/Global/SUN/common/btn/bt_close.gif\" alt=\"CLOSE\" onclick=\"layer.close();\" />";
                strLayer += "</p>";
                strLayer += "<table width=\"100%\" class=\"viewimage\"><tr><td><img alt=\"\" id=\"MediaImage\" style=\"display:none;\" /></td></tr></table>";
            document.getElementById("layercontents").innerHTML = strLayer;
        }
        var el = document.getElementById(media.el);
        var thumb = el.getElementsByTagName("dt");
        var MaximizeElement = document.getElementById("MediaMaximize");
        var MaximizeLinkElement = document.getElementById("MediaMaximizeLink");
        var PrevElement = document.getElementById("MediaPrev");
        var NextElement = document.getElementById("MediaNext");
        var ImageElement = document.getElementById("MediaImage");
        if(media.resize == 1){
            MaximizeElement.style.display = "inline";
            MaximizeLinkElement.setAttribute("href",img_n);
        } else {
            MaximizeElement.style.display = "none";
        }
        if(num != 0){
            PrevElement.style.display = "inline";
            PrevElement.onclick = function(){ layer.prev(num); }
        } else { PrevElement.style.display = "none"; }
        if(num != thumb.length -1){
            NextElement.style.display = "inline";
            NextElement.onclick = function(){ layer.next(num); }
        } else { NextElement.style.display = "none"; }
        ImageElement.style.display = "inline";
        ImageElement.setAttribute("src",img_n);
        ImageElement.setAttribute("width",img_w);
        ImageElement.setAttribute("height",img_h);
    },
    close : function(){
        document.body.removeChild(document.getElementById("layercontents"));
        document.body.removeChild(document.getElementById("layerBack"));
        window.onresize = function(){};
    },
    prev : function(num){
        num = parseInt(num) - 1;
        media.layer(num);
    },
    next : function(num){
        num = parseInt(num) + 1;
        media.layer(num);
    }
};


var layertemp = {
    open : function(el,w,h){
        var ifmback = document.createElement("iframe");
        ifmback.src = "/_Common/layerBack.html";
        ifmback.id = "ifmBack";
        ifmback.style.position = "absolute";
        ifmback.style.left = "0";
        ifmback.style.top = "0";
        ifmback.style.zIndex = "1000";
        ifmback.style.filter = "alpha(opacity=78)";
        ifmback.style.MozOpacity = "0.78";
        ifmback.style.opacity = "0.78";
        ifmback.style.backgroundColor = "#000";
        ifmback.frameBorder = "0";
        ifmback.width = (document.body.clientWidth<860) ? "860px" : parseInt(document.body.clientWidth) + "px";
        ifmback.height = parseInt(document.documentElement.scrollHeight) + "px";
        ifmback.style.margin = "0";
        document.body.appendChild(ifmback);

        var ifmcontent = document.createElement("iframe");
        ifmcontent.src = el;
        ifmcontent.id = "ifmcontents";
        ifmcontent.style.position = "absolute";
        ifmcontent.style.left = (parseInt(document.body.clientWidth)/2) - (parseInt(w)/2) + "px";
        ifmcontent.style.top = ((parseInt(document.documentElement.clientHeight)/2) + (parseInt(document.documentElement.scrollTop))) - (parseInt(h)/2) + "px";
        ifmcontent.style.zIndex = "1000";
        ifmcontent.allowTransparency = "true";
        ifmcontent.style.backgroundColor = "transparent";
        ifmcontent.frameBorder = "0";
        ifmcontent.width = w;
        ifmcontent.height = h;
        ifmcontent.style.margin = "0";
        document.body.appendChild(ifmcontent);

        window.onresize = function(){
            ifmback.width = (document.body.clientWidth<860) ? "860px" : parseInt(document.body.clientWidth) + "px";
            ifmback.height = parseInt(document.documentElement.scrollHeight) + "px";
            ifmcontent.style.left = (parseInt(document.body.clientWidth)/2) - (parseInt(w)/2) + "px";
            ifmcontent.style.top = ((parseInt(document.documentElement.clientHeight)/2) + (parseInt(document.documentElement.scrollTop))) - (parseInt(h)/2) + "px";
        }
    },
    close : function(){
        document.body.removeChild(document.getElementById("ifmcontents"));
        document.body.removeChild(document.getElementById("ifmBack"));
        window.onresize = function(){};
    }
};


function snb_layer(strmenu,idname){
    if(strmenu.className == "off"){
        strmenu.className = "on";
        document.getElementById(idname).style.display="block";
    } else {
        strmenu.className = "off";
        document.getElementById(idname).style.display="none";
    }
}


var input = {
    login : function(el){
        el.className = "";
        el.onblur = function(){
            if(el.value=="") el.className = "on";
        }
    },
    search : function(el,elClass){
        el.className = elClass + " on";
        el.onblur = function(){
            if(this.value=="") this.className = elClass;
        }
    }
}


var select = {
    action : function(el,state){
        // state = 0 or 1
        var SelectElement = document.getElementById(el.id);
        var ListElement = SelectElement.getElementsByTagName("ul")[0];
        var ActionElement = ListElement.getElementsByTagName("a");
        if(ListElement.style.display == "block"){
            select.close(ListElement);
            return false;
        } else {
            ListElement.style.display = "block";
        }

        var strSelected = SelectElement.getElementsByTagName("a")[0];
        strSelected.focus();
        for(var i=0; i<ActionElement.length; i++){
            if(strSelected.firstChild.nodeValue == ActionElement[i].firstChild.nodeValue){
                select.elementClass = ActionElement[i];
                select.elementClass.className = "selected";
                ActionElement[i].onclick = function(){
                    return false;
                }
            } else {
                ActionElement[i].onclick = function(){
                    if(this.href.indexOf("javascript")>-1){
                        eval(this.href);
                    } else if(this.href == "" || this.href.indexOf("#")>-1){
                    } else if(this.target == "_blank"){
                        window.open(this.href);
                    } else {
                        location.href(this.href);
                    }
                    if(state==1){
                        strSelected.firstChild.nodeValue = this.firstChild.nodeValue;
                    }
                    return false;
                }
            }
            ActionElement[i].onmouseover = function(){
                select.elementClass.className = "";
                this.className = "selected";
                select.elementClass = this;
            }
        }

        SelectElement.onmouseover = function(){ strSelected.onblur = function(){}}
        SelectElement.onmouseout = function(){ strSelected.onblur = function(){ select.close(ListElement); }}

    },
    close : function(el){
        select.elementClass.className = "";
        el.style.display = "none";
        return false;
    }
}


var flash = {
    param : { url:"", w:"", h:"", wmode:"window", base:"./", vars:"" },
    TopMainVisual : function(){
        this.param.url = "http://image.webzen.com/Global/SUN/swf/index_110106.swf";
            this.param.w = "990";
            this.param.h = "339";
            this.param.wmode = "transparent";
            this.param.base = "http://image.webzen.com/Global/SUN/swf/";
            this.param.vars = "culture=" + fnGetCookie('CurrentCulture');
            flash.write(this.param.url,this.param.w,this.param.h,this.param.wmode,this.param.base,this.param.vars);
    },
    TopSubNavi : function(){
        this.param.url = "http://image.webzen.com/Global/SUN/swf/sub_index_110106.swf";
            this.param.w = "990";
            this.param.h = "239";
            this.param.wmode = "transparent";
            this.param.base = "http://image.webzen.com/Global/SUN/swf/";
            this.param.vars = "culture=" + fnGetCookie('CurrentCulture');
            flash.write(this.param.url,this.param.w,this.param.h,this.param.wmode,this.param.base,this.param.vars);
    },
    MainPromotion : function(el){
        if(el){
            this.param.url = "http://image.webzen.com/Global/SUN/swf/mainBanner.swf?xmlLocation=" + el + "";
        } else {
            this.param.url = "http://image.webzen.com/Global/SUN/swf/mainBanner.swf";
        }
            this.param.w = "510";
            this.param.h = "162";
            this.param.wmode = "transparent";
            this.param.base = "./";
            flash.write(this.param.url,this.param.w,this.param.h,this.param.wmode,this.param.base,this.param.vars);
    },
    write : function(url,w,h,wmode,base,vars){
        strObject =    "<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0\" id=\"obj_flash\" width=\"" + w + "\" height=\"" + h + "\">\n";
        strObject += "    <param name=\"allowScriptAccess\" value=\"always\" />\n";
        strObject += "    <param name=\"quality\" value=\"high\" />\n";
        strObject += "    <param name=\"movie\" value=\"" + url + "\" />\n";
        strObject += "    <param name=\"wmode\" value=\"" + wmode + "\" />\n";
        strObject += "    <param name=\"base\" value=\"" + base + "\" />\n";
        strObject += "  <param name=\"flashvars\" value=\"" + vars + "\" />\n";
        strObject += "    <embed src=\"" + url + "\" width=\"" + w + "\" height=\"" + h + "\" quality=\"high\" wmode=\"" + wmode + "\" base=\"" + base + "\" flashvars=\"" + vars + "\" allowScriptAccess=\"always\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" />\n";
        strObject += "</object>\n";
        document.write(strObject);
    }
};


/****************************************************************
* Item Layer Popup
****************************************************************/
var itemLayerTemp = "";

//Item Layer Create & Content Load
function itemLayerCreate(layerId, ItemId)
{
    var obj = document.createElement('div');
    obj.setAttribute('id',layerId);
    obj.className = 'iteminfolayer';
    div = document.body.appendChild(obj);
    $("#"+layerId).load("/ItemShop/Catalog/ItemDetail.aspx?sIK="+ItemId);
    return div;
}

//Item Layer Open
function itemLayerOpen(e, ItemId)
{
    var x = e.pageX ? e.pageX : (document.documentElement.scrollLeft-250) + event.clientX;
    var y = e.pageY ? e.pageY : document.documentElement.scrollTop + event.clientY;

    var layerId = "itemlayer" + ItemId;
    var div = document.getElementById(layerId);
    if(div == null)
    {
        div = itemLayerCreate(layerId, ItemId);
        //alert(div.id + " Created!");
    }

    div.style.left = x + "px";
    div.style.top = y + "px";

    if(itemLayerTemp == "")
    {
        itemLayerTemp = layerId;
    }
    else
    {
        itemLayerClose(itemLayerTemp);
        itemLayerTemp = layerId;
    }

    document.getElementById(layerId).style.display="block";
}

//Item Layer Close
function itemLayerClose(layerId)
{
    document.getElementById(layerId).style.display="none";
}

//Item Layer Remove
function itemLayerRemove(layerId) {
    itemLayerTemp = "";
    var div = document.getElementById(layerId);
    div.parentNode.removeChild(div);
}

function fnGetCookie( name ) {
    var nameOfCookie = name + "=";
    var x = 0;
    while ( x <= document.cookie.length )
    {
        var y = (x+nameOfCookie.length);
        if ( document.cookie.substring( x, y ) == nameOfCookie ) {
            if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
                endOfCookie = document.cookie.length;
            return unescape( document.cookie.substring( y, endOfCookie ) );
        }
        x = document.cookie.indexOf( " ", x ) + 1;
        if ( x == 0 )
            break;
    }
    return "";
}

function fnSetCookie(name, value, ExpireDate) {
    var todayDate = new Date();
    todayDate.setDate( todayDate.getDate() + ExpireDate );
    document.cookie = name + "=" + escape( value ) + "; path=/;domain=webzen.com;expires=" + todayDate.toGMTString() + ";"
    //document.cookie = name + "=" + escape( value ) + ";path=/;expires=" + todayDate.toGMTString() + ";"
}

function fnSetDomainCookie(name, value, expiredays)
{
    var todayDate = new Date();
    todayDate.setDate(todayDate.getDate() + expiredays);
    document.cookie = name + "=" + escape(value) + "; path=/; domain=webzen.com; expires=" + todayDate.toGMTString() + ";"
}
