<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="Description" content="MuOnline Shop, powered by Leandro Daldegam" />
<meta name="Keywords" content="MuOnline, Private Servers, Mu, MuDKT, DKT, MuServer, MuGlobal, MuChina, MuKorea, Mu Servers, Top Servers, Mu Online, Itens, Shop, MuShop, MuOnline Shop" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Leandro Daldegam" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" href="templates/refresh/images/Refresh.css" type="text/css" />
<title>{#TITLE_SITE}</title>
<script type="text/javascript" src="templates/refresh/jquery-1.4.2.js"></script>
<script type="text/javascript" src="templates/refresh/ajax.js"></script>
<link type="text/css" rel="stylesheet" href="templates/refresh/images/fancybox/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="templates/refresh/images/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="templates/refresh/images/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
		
		<!--header -->
		<div id="header">&nbsp;</div>
        
<!-- menu -->	
		<div  id="menu">
			<ul>
                <li <?php echo ($_GET['page'] == "home" || (!isset($_GET['page'])) ? "id=\"current\"" : null) ?>><a href="?page=home">Inicio</a></li>
                <li <?php echo ($_GET['page'] == "paneluser" ? "id=\"current\"" : null) ?>><a href="?page=paneluser">Painel</a></li>
                <li <?php echo ($_GET['page'] == "register" ? "id=\"current\"" : null) ?>><a href="?page=register">Cadastro</a></li>
                <li <?php echo ($_GET['page'] == "downloads" ? "id=\"current\"" : null) ?>><a href="?page=downloads">Downloads</a></li>
                <li <?php echo ($_GET['page'] == "rankings" ? "id=\"current\"" : null) ?>><a href="?page=rankings">Rankings</a></li>
                <li <?php echo ($_GET['page'] == "vips" ? "id=\"current\"" : null) ?>><a href="?page=vips">Vips</a></li>
                <li><a href="{#SHOPPING_LINK}">Shop</a></li>
                <li <?php echo ($_GET['page'] == "home" ? "id=\"current\"" : null) ?>><a href="?page=contact">Fale Conosco</a></li>			  	
			</ul>
		</div>