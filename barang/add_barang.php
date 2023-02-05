<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
</head>
<body>
<h2>Input Data Barang</h2>
<form method="POST" action="process_barang.php">
<table border="0" width="100%" cellspacing="1" cellpadding="0">
	<tr>
		<td width="9%">IdBarang</td>
		<td width="91%"><input type="text" name="IdBarang" size="20"></td>
	</tr>

	<tr>
		<td width="9%">Nama Barang</td>
		<td width="91%"><input type="text" name="NamaBarang" size="20"></td>
	</tr>

	<tr>
		<td>Keterangan</td>
		<td><textarea rows="5" cols="50" name="Keterangan"></textarea></td>
	</tr>
	
	<tr>
		<td width="9%">Satuan</td>
		<td width="91%"><input type="text" name="Satuan" size="20"></td>
	</tr>
	
	<tr>
		<td width="9%">IdPengguna</td>
		<td width="91%"><input type="text" name="IdPengguna" size="20"></td>
	</tr>
	
	<tr>
		<td width="9%">IdSupplier</td>
		<td width="91%"><input type="text" name="IdSupplier" size="20"></td>
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