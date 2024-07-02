<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Invoice Bill</title>
	<style>
		table {
			width: 100%;
			border-collapse: collapse;
		}

		th,
		td {
			border: 1px solid black;
			text-align: center;
			padding: 8px;
		}

		th {
			background-color: #f2f2f2;
		}
	</style>
</head>

<body>
	<h2>
		<center>INVOICE BILL</center>
	</h2>
	<hr />
	<table>
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga Produk</th>
			<th>Jumlah Produk</th>
			<th>Sub Total</th>
		</tr>
		<?php
		$no = 1;
		$total = 0;
		foreach ($pesanan as $row):
			$subtotal = $row->jumlah * $row->harga;
			$total += $subtotal;
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?= $row->nama_brg ?></td>
				<td>Rp. <?= number_format($row->harga, 0, ',', '.') ?></td>
				<td><?= number_format($row->jumlah, 0, ',', '.') ?></td>
				<td>Rp. <?= number_format($subtotal, 0, ',', '.') ?></td>
			</tr>
		<?php endforeach; ?>
		<tr>
			<td colspan="4"><strong></strong></td>
			<td><strong>Rp. <?= number_format($total, 0, ',', '.') ?></strong></td>
		</tr>
	</table>
</body>

</html>