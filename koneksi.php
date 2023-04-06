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
<?php 
	/*class database{
		var $host = 'localhost';
		var $name = 'root';
		var $pw = '';
		var $db = 'db_artstation';

		function _construct(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			mysqli_select_db($koneksi, $this->db);
		}
		// Koneksi item
		function tampilitem(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			$data = mysqli_query($koneksi, "SELECT * FROM tbl_item");
			while ($d = mysqli_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		// Koneksi Customer
		function showcustomer(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			$data = mysqli_query($koneksi, "SELECT * FROM tbl_customer");
			while ($d = mysql_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		// koneksi trnsksi
		function showtransaction(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			$data = mysqli_query($koneksi, "SELECT * FROM tbl_transaction");
			while ($d = mysql_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}
	}*/
?>