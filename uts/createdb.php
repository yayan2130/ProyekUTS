<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ves";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$sql = "CREATE TABLE dbves
(
id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAMA VARCHAR(50) NOT NULL,
NPM VARCHAR(15) NOT NULL,
JURUSAN VARCHAR(30) NOT NULL
);";

if (mysqli_query($conn,$sql)){
	echo "database created successfully";
}else{
	echo "Error creating database : ". mysqli_error($conn);
}

mysqli_close($conn);
 ?>
