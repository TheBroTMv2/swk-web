<?php 
//ob_start(); // auf manchen Servern kann es erforderlich sein, diese Zeile zu entkommenieren
include("wdw_suche/search_config.php");
if (isset($_GET["q"]) && $_GET["q"] != "") {	
	$search_anzeige = stripslashes(htmlspecialchars($_GET["q"], ENT_COMPAT, "utf-8", false)); // PHP 5.4
} else {
	$search_anzeige = $value;
}


?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
<html>
<head>
<meta name="robots" content="all" /> 
<link rel="stylesheet" type="text/css" href="wdw_suche/wdw_suche.css" />
<script src="wdw_suche/wdw_suche.js" type="text/javascript"></script>
<style>
html, body, div, p, h1, h2, h3, ul, ol, span, table, td, form, img, li, pre {
	margin:  0;
	padding: 0;
	border: 0;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
}
body {
	-webkit-text-size-adjust:none;
	-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;
	font-size: 90.01%;
	margin: 1em;
	background: #fff;
}
h1 {
	font-size: 1.2em;
	line-height: 1.6em;
	margin: 1em 0;
	color: #111;
}
h3 {
	font-size: .9em;
	line-height: 1.6em;
	margin: 1.4em 0 0 0;
	color: #111;
}
</style>
	<meta charset="utf-8">
	<meta name="description" content="Wir arbeiten momentan an einer kompletten Überarbeitung unserer Internetpräsenz.">
	<meta name="keywords" content="Schriesheimer Weinkeller,Schriesheim,Weinhandel,Wein,Weinkeller,Baden-Württemberg,Region,Einzelhandel">
	<link rel="shortcut icon" href="img/favicon.png">
	<style type="text/css">
@media (max-width: 767px){
}
    </style>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Schriesheimer WEINKELLER</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="wdw_suche/wdw_suche.js" type="text/javascript"> </script>
</head>

<body>
	<?php require("nav.php"); ?>
	<div class="row main1">
		<div class="col-sm-5 col-md-7 col-md-offset-1 col-xs-9">
			<h1 class="h11">Schriesheimer WEINKELLER</h1>
			

		</div>
		<div class="col-xs-4 col-md-3 ">
			<h2 class="h11">Beispielüberschrift 2</h2>
			<p>Hier an der Seite kann man z.B: Neuigkeiten anzeigen lassen oder ein Bewertungsfeed etc. <img class="img-responsive pull-right imgspacer img-rounded" src="img/bordeaux-150955.png" width="180px" alt="404 Weinflasche not found ;-)"/>
			</p><br/>
		</div>
	</div>
	<div class="row">
		<div class="footer11 col-xs-18 col-sm-4 text-center ">
			<p class="footer1">
				<h3>Footer 1</h3>
			</p>
		</div>
		<div class="col-xs-18 col-sm-4 text-center footer11">
			<p class="footer2">
				<h3>Footer 2</h3>
			</p>
		</div>
		<!-- Optional: Setze die Floats der XS-Spalten zurück, falls ihr Inhalt nicht gleich hoch ist -->
		<div class="clearfix visible-xs-block"></div>
		<div class="col-xs-18 col-sm-4 text-center footer11">
			<p class="footer3">
				<h3>Social Media</h3>
				<!--<div class="fb-page" data-href="https://www.facebook.com/Schriesheimer-Weinkeller-2013185778937160/" data-tabs="timeline" data-width="350" data-height="320" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Schriesheimer-Weinkeller-2013185778937160/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Schriesheimer-Weinkeller-2013185778937160/">Schriesheimer Weinkeller</a></blockquote></div>-->
			</p>
		</div>
	</div>	
	<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- <script src="js/bootstrap.js"></script> -->
	<script src="js/bootstrap-3.3.7.js"></script>
	
	<div id="fb-root"></div>
	<script>
		( function ( d, s, id ) {
			var js, fjs = d.getElementsByTagName( s )[ 0 ];
			if ( d.getElementById( id ) ) return;
			js = d.createElement( s );
			js.id = id;
			js.src = 'https://connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.10&appId=414054425405713';
			fjs.parentNode.insertBefore( js, fjs );
		}( document, 'script', 'facebook-jssdk' ) );
	</script>
</body>

</html>