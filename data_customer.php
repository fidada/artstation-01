<?php
require 'koneksi.php';
$sql = "SELECT * FROM tbl_customer";
$result = mysqli_query($conn, $sql);
// include 'koneksi.php';
// $db_artstation = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.css"></script>
	<title>Data Customer</title>
</head>
<body>
		<div class="nav">
			<a href="index.php">Home</a>
			<a href="data_item.php">Item Data</a>
			<a href="data_customer.php">Customer Data</a>
			<a href="data_transaction.php">Transaction Data</a>
		</div>
    <div class="all">

		<!-- <div class="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="data_item.php">Item Data</a></li>
				<li><a href="data_customer.php">Customer Data</a></li>
				<li><a href="data_transaction.php">Transaction Data</a></li>
			</ul>
		</div> -->
		
		<div class="box" style="margin: 50px;">
        <h1>CUSTOMER'S DATA</h1>
        <table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th>ID Customer</th>
				<th>Customer's Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Address</th>
			</tr>
			<?php while ($row = mysqli_fetch_assoc($result)):?>
			<tr>
				<td><?= $row['id_customer']?></td>
				<td><?= $row['name_customer']?></td>
				<td><?= $row['phone']?></td>
				<td><?= $row['email']?></td>
				<td><?= $row['address']?></td>
			</tr>
			<?php endwhile?>
		</table>
		</div>
	</div>
</body>
</html>