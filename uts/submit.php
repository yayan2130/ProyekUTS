
<?php 

	include "koneksi.php";
	include "pendaftaran.php";
	
	$nama  = $_POST['nama'];
	$npm  = $_POST['npm'];
  	$jurusan  = $_POST['jurusan'];

  	$sql  = "INSERT INTO dbves (nama, npm, jurusan) VALUES ('$nama', '$npm', '$jurusan')";
  	mysqli_query($koneksi,$sql) or die ("Koneksi gagal");

 ?>
