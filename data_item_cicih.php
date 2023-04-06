<?php
// require 'koneksi.php';
// $sql = "SELECT * FROM tbl_item";
// $result = mysqli_query($conn, $sql);
include "koneksi.php";
$db_artstation = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.css"></script>
	<title>Data Item</title>
</head>
<body>
	<div class="nav">
			<a href="index.php">Home</a>
			<a href="data_item.php">Item Data</a>
			<a href="data_customer.php">Customer Data</a>
			<a href="data_transaction.php">Transaction Data</a>
	</div>
    <div class="all">

		<div class="box" style="margin: 50px;">
        <h1>ART ITEM</h1>
        <a href="tambah_item.php"></a>
        <table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th>No</th>
				<th>Nama Lapangan</th>
				<th>Harga Lapangan</th>
			</tr>
					<?php
						$no = 1;
						foreach ($db_futsal->tampillapangan() as $x ) {
					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $x ['nama_lapangan'];?></td>
						<td><?php echo $x ['harga'];?></td>
					</tr>
					<?php }?>
		</table>
		</div>
	</div>
</body>
</html>