<?php
include ("koneksi.php");

	if(isset($_POST['submit']))
	{
		$IdBarang=$_POST['IdBarang'];
		$NamaBarang=$_POST['NamaBarang'];
		$Keterangan=$_POST['Keterangan'];
		$Satuan=$_POST['Satuan'];
		$IdPengguna=$_POST['IdPengguna'];
		$IdSupplier=$_POST['IdSupplier'];

		$submit = mysqli_query($conn, "INSERT INTO barang (IdBarang, NamaBarang, Keterangan,Satuan, IdPengguna, IdSupplier) 
			VALUES ('$IdBarang', '$NamaBarang', '$Keterangan', '$Satuan', '$IdPengguna', '$IdSupplier')");
	}

	

	header("location:list_barang.php");
?>