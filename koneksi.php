 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_artstation";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
	die("Error Connection: ".mysqli_connect_error());
}
?> 