<?php
session_start();

if(isset($_SESSION['username'])){
    header("location: welcome.php");
include_once("Homepage.html");
include_once("Azurlane.html");
include_once("AttackonTitan.html");
include_once("AhoGirl.html");
include_once("About.html");
include_once("Danshi Kokousei no Nichijou.html");
include_once("Kancolle.html");
include_once("Kimi ni Todoke.html");
include_once("MobPsycho.html");
include_once("Movie.html");
include_once("OnGoing.html");
include_once("Shigatsu.html");
include_once("Shiki.html");
include_once("Sumber.html");
include_once("Thirteen terrors.html");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AniTV</title>
<style type="text/css">
#apDiv1 {
    position: absolute;
    width: 1920px;
    height: 1080px;
    z-index: 1;
    background-image: url(Background.png);
    background-color: #333333;
}
#apDiv2 {
    position: absolute;
    width: 1920px;
    height: 204px;
    z-index: 2;
    background-color: #666666;
    font-size: 60px;
    font-family: "Comic Sans MS", cursive;
    font-style: normal;
    font-weight: bolder;
    color: #0FF;
    text-align: center;
    left: 9px;
    top: -32px;
}
#apDiv3 {
    position: absolute;
    width: 1920px;
    height: 86px;
    z-index: 3;
    top: 1005px;
    background-color: #666666;
    text-align: center;
    font-size: x-large;
    font-family: "Lucida Console", Monaco, monospace;
    font-style: normal;
    line-height: normal;
    font-weight: bold;
    color: #0FF;
    border: thick none #FF0;
}
#apDiv4 {
    position: absolute;
    width: 200px;
    height: 817px;
    z-index: 4;
    left: 176px;
    top: 158px;
}
#apDiv5 {
    position: absolute;
    width: 200px;
    height: 815px;
    z-index: 1;
    left: 273px;
    top: 184px;
    background-color: #999999;
}
#apDiv6 {
    position: absolute;
    width: 1148px;
    height: 815px;
    z-index: 2;
    left: 474px;
    top: 183px;
    background-color: #999999;
}
#apDiv5 p {
    text-align: center;
}
#Borderbawah {
    text-align: center;
    font-family: "Comic Sans MS", cursive;
    font-size: x-large;
    font-style: normal;
    line-height: normal;
    font-weight: bold;
    font-variant: normal;
    color: #3CF;
}
#apDiv7 {
    position: absolute;
    width: 1920px;
    height: 33px;
    z-index: 1;
    left: -473px;
    top: -23px;
    background-color: #000000;
}
.subjudul {
    text-align: center;
    font-size: large;
    color: #09F;
    font-weight: bold;
}
.judul2 {
    font-weight: bold;
    color: #FFF;
}
.Linkborder {
    font-family: "Lucida Console", Monaco, monospace;
    border: medium dotted #FF0;
}
#Link {
    text-align: center;
    border: medium dotted #FF0;
}
a:link {
    color: #0FF;
    text-decoration: none;
}
a:visited {
    color: #0FF;
    text-decoration: none;
}
a:hover {
    color: #0FF;
    text-decoration: none;
}
a:active {
    color: #0FF;
    text-decoration: none;
}
.Judul {
    text-align: center;
}
.JudulBeranda {
    text-align: center;
    border: medium solid #FC0;
    background-color: #FF0;
    font-family: "Comic Sans MS", cursive;
    font-size: xx-large;
    font-style: normal;
    font-weight: bold;
    color: #309;
    text-decoration: blink;
}
.Text {
    color: #0FF;
    font-size: xx-large;
    font-family: "Comic Sans MS", cursive;
    text-align: left;
}
.Awalteks {
    font-weight: bold;
    font-size: 100px;
    color: #0FF;
}
.Themaid {
    font-size: x-large;
    font-family: "Comic Sans MS", cursive;
    text-align: justify;
    color: #0FF;
}
#apDiv8 {
    position: absolute;
    width: 240px;
    height: 277px;
    z-index: 3;
    left: 13px;
    top: 700px;
}
</style>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('Ongoing (2).png','Completed (2)2.png','Movie(2)2.png','Completed22.png','Movie22.png','Ongoing.png')">
<div id="apDiv1">
  <div id="apDiv5">
    <p><a href="OnGoing.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','Ongoing.png',1)"><img src="Ongong (2).png" width="209" height="209" id="Image4" /></a></p>
    <p>&nbsp;</p>
    <p><a href="Completed.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','Completed22.png',1)"><img src="Completed (2).png" name="Image5" width="209" height="209" id="Image5" /></a></p>
    <p>&nbsp;</p>
    <p><a href="Movie.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','Movie22.png',1)"><img src="Movie (2).png" name="Image3" width="209" height="209" id="Image3" /></a></p>
  </div>
  <div id="apDiv6">
    <div id="apDiv7"><br />
    </div>
    <p class="JudulBeranda">Selamat Datang di AniTV.com</p>
    <p><span class="Awalteks"><img src="BerandaImg.png" width="400" height="275" align="left" />A</span><span class="Text">niTV.com adalah website penyedia film dan anime subtitle Indonesia. Website ini menyediakan info dan berita terbaru tentang anime dan movie.</span></p>
    <p>&nbsp;</p>
    <p class="JudulBeranda">AKAN RILIS!!! HORROR MOVIE THE MAID</p>
    <p class="Text"><img src="The Maid.jpg" width="512" height="288" align="left" /></p>
    <p class="Themaid">Film horor slasher asal Thailand ini mengisahkan sesosok arwah jahat   yang menghantui kehidupan seorang asisten rumah tangga bernama Joy. Ia diterima sebagai ART untuk seorang keluarga bangsawan. Awalnya   Joy tak merasakan ada yang aneh kala bekerja. Hingga semakin lama, ia   merasakan banyak keanehan yang terjadi di rumah megah tersebut. </p>
  </div>
  <div id="apDiv8">
    <p><img src="Majo-no-Tabitabi-PV-2_compressed.jpg" width="239" height="146" align="left" /><a href="https://www.instagram.com/tekno_it/"><img src="ImageBackground.png" width="240" height="103" border="0" /></a></p>
    <p>&nbsp;</p>
  </div>
</div>
<div id="apDiv2">
  <p><a href="Homepage.html">Ani<span class="judul2">TV</span>.com</a><br />
<span class="subjudul">info seputar Film dan Anime Subtitle Indonesia</span></p>
</div>
<div class="Linkborder" id="apDiv3"><br />
<span id="Link"><a href="Homepage.html">Home</a></span> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="Link"><a href="About.html">About</a></span>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span id="Link"><a href="Sumber.html">Sumber</a></span></div>
</body>
</html>
