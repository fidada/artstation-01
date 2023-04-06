<?php
require 'koneksi.php';
$sql = "SELECT * FROM tbl_transaction";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.css"></script>
	<title>Data Transaction</title>
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
        <h1>TRANSACTION DATA</h1>
        <a href="forminsert_item.html"></a>
        <table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th>ID Transaction</th>
				<th>ID Item</th>
				<th>Name Item</th>
				<th>ID Customer</th>
				<th>Name Customer</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total Payment</th>
			</tr>
			<?php while ($row = mysqli_fetch_assoc($result)):?>
			<tr>
				<td><?= $row['id_transaction']?></td>
				<td><?= $row['id_item']?></td>
				<td><?= $row['name_item']?></td>
				<td><?= $row['id_customer']?></td>
				<td><?= $row['name_customer']?></td>
				<td><?= $row['quantity']?></td>
				<td><?= $row['price']?></td>
				<td><?= $row['total_payment']?></td>
			</tr>
			<?php endwhile?>
		</table>
		</div>
	</div>
</body>
</html>