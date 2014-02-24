function extraiScript(texto){
	var ini=0
	while(ini!=-1){
		ini=texto.indexOf('<script',ini)
		if(ini>=0){
			ini=texto.indexOf('>',ini)+1
			var fim=texto.indexOf('</script>',ini)
			codigo=texto.substring(ini,fim)
			eval(codigo)
		}
	}
}

function Verify(url,div,tipo){
	var ajax=null
	if(window.ActiveXObject)
		ajax=new ActiveXObject('Microsoft.XMLHTTP')
	else if(window.XMLHttpRequest)
		ajax=new XMLHttpRequest()
	if(ajax !=null){
		var cache=new Date().getTime()
		ajax.open(tipo,url+"&cache="+cache,true)
		ajax.onreadystatechange=function status(){
		if(ajax.readyState==4){
			if(ajax.status==200){
				document.getElementById(div).innerHTML=ajax.responseText
				var texto=unescape(ajax.responseText.replace(/\+/g," "))
				extraiScript(texto)
			}
		} else
			document.getElementById(div).innerHTML='<img src="templates/ja_sanidine_free/images/ajax2.gif" alt="" />'
		}
		ajax.send(null)
	}
}