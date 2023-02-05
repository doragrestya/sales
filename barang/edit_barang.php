<?php
include_once 'koneksi.php';
if(count($_POST)>0) {
	mysqli_query($conn, "UPDATE barang set NamaBarang='$_POST[NamaBarang]', Keterangan='$_POST[Keterangan]', Satuan='$_POST[Satuan]', IdPengguna='$_POST[IdPengguna]', IdSupplier='$_POST[IdSupplier]' WHERE IdBarang = '$_GET[IdBarang]'");
	$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM barang WHERE IdBarang='" . $_GET['IdBarang'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
   <head>
        <title>Update Data Barang</title>
   </head>
   <body>
   <h3>Update Data Barang</h3>
   <form name="frmUser" method="post" action="">
   <div>
   <?php 
   if(isset($message)) { 
   header("location:list_barang.php");
   }
   ?> 
   </div>
   
   <table border="0" width="100%" cellspacing="1" cellpadding="0">
   <tr>
		<td width="9%">Id Barang:</td>
		<td width="91%"><input type="text" name="IdBarang" class="txtField" value="<?php echo $row['IdBarang']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Nama Barang</td>
		<td width="91%"><input type="text" name="NamaBarang"  value="<?php echo $row['NamaBarang']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Keterangan</td>
		<td width="91%"><input type="text" name="Keterangan" class="txtField" value="<?php echo $row['Keterangan']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Satuan</td>
		<td width="91%">   <input type="text" name="Satuan" class="txtField" value="<?php echo $row['Satuan']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Id Pengguna</td>
		<td width="91%"><input type="text" name="IdPengguna" class="txtField" value="<?php echo $row['IdPengguna']; ?>"></td>
   </tr>
   
   <tr>
		<td width="9%">Id Supplier</td>
		<td width="91%"><input type="text" name="IdSupplier" class="txtField" value="<?php echo $row['IdSupplier']; ?>"></td>
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

