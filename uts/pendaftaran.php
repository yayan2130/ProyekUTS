<!DOCTYPE html>
<html>
<head>
	<title>PENDAFTARAN</title>
	<link rel="stylesheet" type="text/css" href="utscss.css">
</head>
<body>
<!-- header -->
<header class="headertext" align="center">Veteran Esport</header>
<!-- Menu -->
<ul>
	<li><a href="home.html">HOME</a></li>
	<li><a class="active" href="pendaftaran.php">PENDAFTARAN</a></li>
	<li><a href="anggota.php">ANGGOTA</a></li>
	<li><a href="berita.php">BERITA</a></li>
</ul>
<!-- content -->
<div align="center">
<h1 align="center" style="font-size: 40px">PENDAFTARAN</h1>
<p align="center">Silahkan mengisi form dibawah</p>
	<form class="pendaftan" method="POST" action="submit.php">
		<p>Nama Lengkap : <br><br> <input type="text" name="nama"></p>
		<p>NPM : <br><br> <input type="text" name="npm"></p>
		<p>Jurusan : <br><br> <input type="text" name="jurusan"></p>
			<input class="submit" type="submit" name="submit" value="kirim"> 
			<input type="reset" name="reset" value="ulang">
</div>
</body>
</html>