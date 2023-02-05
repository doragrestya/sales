<!DOCTYPE html>
<html>
<head>
	<title>Data Penjualan</title>
</head>
<body>
<h2>Input Data Penjualan</h2>
<form method="POST" action="process_penjualan.php">
<table border="0" width="100%" cellspacing="1" cellpadding="0">
	<tr>
		<td width="9%">Id Penjualan</td>
		<td width="91%"><input type="text" name="IdPenjualan" size="20"></td>
	</tr>

	<tr>
		<td width="9%">Jumlah Penjualan</td>
		<td width="91%"><input type="text" name="JumlahPenjualan" size="20"></td>
	</tr>

	<tr>
		<td width="9%">Harga Penjualan</td>
		<td width="91%"><input type="text" name="HargaPenjualan" size="20"></td>
	</tr>
	
	<tr>
		<td width="9%">Id Pengguna</td>
		<td width="91%"><input type="text" name="IdPengguna" size="20"></td>
	</tr>
	
	<tr>
		<td width="9%">Id Barang</td>
		<td width="91%"><input type="text" name="IdBarang" size="20"></td>
	</tr>
	
	<tr>
		<td width="9%">Id Pelanggan</td>
		<td width="91%"><input type="text" name="IdPelanggan" size="20"></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" name="submit" value="Submit">
			<input type="reset" name="reset" value="Reset">
		</td>
	</tr>
	
</table>
</form>
</body>
</html>