<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="utscss.css">
</head>
<body>
	
<!-- header -->
<header class="headertext" align="center">Veteran Esport</header>
<!-- Menu -->
<ul>
	<li><a href="home.html">HOME</a></li>
	<li><a href="pendaftaran.php">PENDAFTARAN</a></li>
	<li><a class="active" href="anggota.php">ANGGOTA</a></li>
	<li><a href="berita.php">BERITA</a></li>
</ul>
<br>
<table align="center" id="anggota">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>NPM</th>
		<th>Jurusan</th>
	</tr>
	<?php 

	$koneksi=mysqli_connect("localhost","root","","ves");

	$sql = "SELECT id,NAMA,NPM,JURUSAN FROM dbves";
	$hasil = $koneksi->query($sql);

	if($hasil->num_rows>0)
	{
		while ($row=$hasil->fetch_assoc()) {
			echo "<tr><td>".$row["id"]."</td><td>".$row["NAMA"]."</td><td>".$row["NPM"]."</td><td>".$row["JURUSAN"]."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "no data";
	}
	$koneksi->close();

	?>
</table>
</body>
</html>