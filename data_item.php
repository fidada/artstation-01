<?php
require 'koneksi.php';
$sql = "SELECT * FROM tbl_item";
$result = mysqli_query($conn, $sql);
// include 'koneksi.php';
// $db_artstation = new database;
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
        <a href="tambah_ti"></a>
        <table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th>ID Item</th>
				<th>Item Name</th>
				<th>Category</th>
				<th>Brand</th>
				<th>Price</th>
			</tr>
			<?php while ($row = mysqli_fetch_assoc($result)):?>
			<tr>
				<td><?= $row['id_item']?></td>
				<td><?= $row['name_item']?></td>
				<td><?= $row['category_item']?></td>
				<td><?= $row['brand_item']?></td>
				<td><?= $row['price']?></td>
			</tr>
			<?php endwhile?>
		</table>
		</div>
	</div>
</body>
</html>