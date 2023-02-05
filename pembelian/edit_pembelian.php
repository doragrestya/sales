<?php
include_once 'koneksi.php';
if(count($_POST)>0) {
	mysqli_query($conn, "UPDATE pembelian set JumlahPembelian='$_POST[JumlahPembelian]', HargaBeli='$_POST[HargaBeli]', IdPengguna='$_POST[IdPengguna]', IdBarang='$_POST[IdBarang]' WHERE IdPembelian = '$_GET[IdPembelian]'");
	$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM pembelian WHERE IdPembelian='" . $_GET['IdPembelian'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
   <head>
        <title>Update Data Pembelian</title>
   </head>
   <body>
   <h3>Update Data Pembelian</h3>
   <form name="frmUser" method="post" action="">
   <div>
   <?php 
   if(isset($message)) { 
   header("location:list_pembelian.php");
   }
   ?> 
   </div>
   
   <table border="0" width="100%" cellspacing="1" cellpadding="0">
   <tr>
		<td width="9%">Id Pembelian:</td>
		<td width="91%"><input type="text" name="IdPembelian" class="txtField" value="<?php echo $row['IdPembelian']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Jumlah Pembelian</td>
		<td width="91%"><input type="text" name="JumlahPembelian"  value="<?php echo $row['JumlahPembelian']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Harga Pembelian</td>
		<td width="91%"><input type="text" name="HargaBeli" class="txtField" value="<?php echo $row['HargaBeli']; ?>"></td>
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
		<td>&nbsp;</td>
		<td>
		    <input type="submit" name="submit" value="Submit" class="buttom">
		</td>
	</tr>
   
   </form>
   </body>
</html>

