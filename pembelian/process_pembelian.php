<?php
include ("koneksi.php");

	if(isset($_POST['submit']))
	{
		$IdPembelian=$_POST['IdPembelian'];
		$JumlahPembelian=$_POST['JumlahPembelian'];
		$HargaBeli=$_POST['HargaBeli'];
		$IdPengguna=$_POST['IdPengguna'];
		$IdBarang=$_POST['IdBarang'];

		$submit = mysqli_query($conn, "INSERT INTO Pembelian (IdPembelian, JumlahPembelian, HargaBeli, IdPengguna, IdBarang) 
			VALUES ('$IdPembelian', '$JumlahPembelian', '$HargaBeli', '$IdPengguna', '$IdBarang')");
	}

	

	header("location:list_pembelian.php");
?>