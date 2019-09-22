<!-- 112<!DOCTYPE HTML> -->
<html lang="pl">
<head>
<link rel="stylesheet" href="fattycarp.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Cantarell|Judson|Staatliches&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cantarell|Exo+2|Farro|Rajdhani|Signika&display=swap" rel="stylesheet">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title> Relacje-Rusiec</title>

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
<a href="Article.php"><div class="ArticleTittleFrame">
Tytuł Artykułu<?php include "counter.php"; ?>
</div></a> 
<div class="ArticleTittleFrame">
</div>
<div class="ArticleTittleFrame">
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