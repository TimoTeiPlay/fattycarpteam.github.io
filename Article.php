<!-- 112<!DOCTYPE HTML> -->
<html lang="pl">
<head>
<link rel="stylesheet" href="fattycarp.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Cantarell|Judson|Staatliches&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cantarell|Exo+2|Farro|Rajdhani|Signika&display=swap" rel="stylesheet">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title> FattyCarp</title>

<style>
</style>	 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script>
$(document).ready(function(){

	$('.menuIMG').click(function(){
   		$('#menu').slideToggle('slow');
	});
});
</script> 
</head>
<body>
<div class="desktopWrapper">
<ul class="desktop">
  <li><a href="index.html">Home</a></li>
  <li><a href="index.html">Nasz Team</a></li>
  <li><a href="index.html">Relacje</a></li>
  <li><a href="index.html">Kontakt</a></li> 
  <li><a href="https://www.facebook.com/FattyCarpTeam/" target="_blank"target="_blank"><div class="colorFacebook">Facebook</div></a></li> 
  <li><a href="https://www.youtube.com/channel/UCDS2n-efSwLXVFQUa5e4TXA" target="_blank"><div class="colorYoutube">YouTube</div></a></li>
</ul>
</div>
<div class="menuIMG">
<div class="topMenu">
<img src="menubutton.png" style="max-width:12%;display:block;float:right;margin-right:1%;margin-top:3px;height:90%;cursor: pointer;"></div>
<div id="menu">
<ul class="menuFrame">
  <a href="index.html"> <li>Home</li></a>
  <a href="index.html"> <li>Nasz Team</li></a>
  <a href="index.html"> <li>Relacje</li></a>
  <a href="index.html"> <li>Kontakt</li></a>
  <a href="https://www.facebook.com/FattyCarpTeam/"target="_blank"><li><div class="colorFacebook">Facebook</div></li></a>
  <a href="https://www.youtube.com/channel/UCDS2n-efSwLXVFQUa5e4TXA" target="_blank"> <li><div class="colorYoutube">YouTube</div></li></a>
</ul>
</div>
</div>
<div class="container">

<div class="ContentText">
<h1> Tytuł artykułu </h1>
<div class="dateText">10.10.2019</div>
<div class="counterText"><?php include "counter.php"; ?></div>
<div class="ContentTextMiddle">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in est massa. Donec ac elementum sapien, a dictum magna. Nunc faucibus eu est rutrum vestibulum. Aliquam nisl metus, mollis in justo sed, iaculis auctor tellus. Nullam tristique ultricies sem eu convallis.

</div>
</div>

<div class="kontaktFrame">
<div class="kontaktOption">
Email fattycarpteam@gmail.com
</div>
<div class="kontaktOption">
Team Leader: 123-321-123
</div>
<div id="kontaktOptionIMG">
<a href="https://www.youtube.com/channel/UCDS2n-efSwLXVFQUa5e4TXA"><img src="youtube.png"  style="max-width:220px;max-height:100px;"> </a>
<a href="https://www.facebook.com/FattyCarpTeam/"><img src="facebook.png"  style="max-width:220px;max-height:78px; margin-bottom:1%; margin-left:2%;"> </a>
</div>
</div>
</div>
</body>
</html>