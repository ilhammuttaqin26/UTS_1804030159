<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<link href="style_ilhamm.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a {
	font-size:25px;
	text-decoration:none;
	color:#900;
	font-family: 'Oswald', sans-serif;
}
a:hover{
	color:#006;
	transition:0.8s;
	}
#footer a{
	color:#FFF;
	font-size:medium;
	}
#footer a:hover{
	color:#f33;
	transition:0.5s;
	}
</style>
</head>

<body>
	<div id="utama_ilhammuttaqin">
	  <div id="header_ilhammuttaqin"><h1>UTS WEB PROGRAMMING</h1></div>
      <div id="menu_kiri_ilhammuttaqin">
      
        <a href="index.php?id=beranda"><div class="menu_ilhammuttaqin">Beranda</div></a>
        <a href="index.php?id=myprofil"><div class="menu_ilhammuttaqin">My Profile</div></a>
        <a href="index.php?id=guestbook"><div class="menu_ilhammuttaqin">Guest Book</div></a>
      	
      </div>
      <div id="konten_ilhammuttaqin"> <?php include "isi.php"; ?></div>
      <div id="footer_ilhammuttaqin" align="center">@2020 <a href="https://www.instagram.com/ilhammtqnn/">ilhammttqnn</div>
	</div>
</body>
</html>