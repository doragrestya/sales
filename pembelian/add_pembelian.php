<!DOCTYPE html>
<html>
<head>
	<title>Data Pembelian</title>
</head>
<body>
<h2>Input Data Pembelian</h2>
<form method="POST" action="process_pembelian.php">
<table border="0" width="100%" cellspacing="1" cellpadding="0">
	<tr>
		<td width="9%">Id Pembelian</td>
		<td width="91%"><input type="text" name="IdPembelian" size="20"></td>
	</tr>

	<tr>
		<td width="9%">Jumlah Pembelian</td>
		<td width="91%"><input type="text" name="JumlahPembelian" size="20"></td>
	</tr>

	<tr>
		<td width="9%">Harga Pembelian</td>
		<td width="91%"><input type="text" name="HargaBeli" size="20"></td>
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