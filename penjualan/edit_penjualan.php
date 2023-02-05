<?php
include_once 'koneksi.php';
if(count($_POST)>0) {
	mysqli_query($conn, "UPDATE penjualan set JumlahPenjualan='$_POST[JumlahPenjualan]', HargaPenjualan='$_POST[HargaPenjualan]', IdPengguna='$_POST[IdPengguna]', IdBarang='$_POST[IdBarang]', IdPelanggan='$_POST[IdPelanggan]' WHERE IdPenjualan = '$_GET[IdPenjualan]'");
	$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM penjualan WHERE IdPenjualan='" . $_GET['IdPenjualan'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
   <head>
        <title>Update Data Penjualan</title>
   </head>
   <body>
   <h3>Update Data Penjualan</h3>
   <form name="frmUser" method="post" action="">
   <div>
   <?php 
   if(isset($message)) { 
   header("location:list_penjualan.php");
   }
   ?> 
   </div>
   
   <table border="0" width="100%" cellspacing="1" cellpadding="0">
   <tr>
		<td width="9%">Id Penjualan:</td>
		<td width="91%"><input type="text" name="IdPenjualan" class="txtField" value="<?php echo $row['IdPenjualan']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Jumlah Penjualan</td>
		<td width="91%"><input type="text" name="JumlahPenjualan"  value="<?php echo $row['JumlahPenjualan']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Harga Penjualan</td>
		<td width="91%"><input type="text" name="HargaPenjualan" class="txtField" value="<?php echo $row['HargaPenjualan']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Id Pengguna</td>
		<td width="91%"><input type="text" name="IdPengguna" class="txtField" value="<?php echo $row['IdPengguna']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Id Barang</td>
		<td width="91%"><input type="text" name="IdBarang" class="txtField" value="<?php echo $row['IdBarang']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Id Pelanggan</td>
		<td width="91%"><input type="text" name="IdPelanggan" class="txtField" value="<?php echo $row['IdPelanggan']; ?>"></td>
   </tr>
   
   <tr>
		<td>&nbsp;</td>
		<td>
		    <input type="submit" name="submit" value="Submit" class="buttom">
		</td>
	</tr>
   
   </form>
   </body>
</html>

