<?php
include ("koneksi.php");

	if(isset($_POST['submit']))
	{
		$IdPenjualan=$_POST['IdPenjualan'];
		$JumlahPenjualan=$_POST['JumlahPenjualan'];
		$HargaPenjualan=$_POST['HargaPenjualan'];
		$IdPengguna=$_POST['IdPengguna'];
		$IdBarang=$_POST['IdBarang'];
		$IdPelanggan=$_POST['IdPelanggan'];

		$submit = mysqli_query($conn, "INSERT INTO penjualan (IdPenjualan, JumlahPenjualan, HargaPenjualan, IdPengguna, IdBarang, IdPelanggan) 
			VALUES ('$IdPenjualan', '$JumlahPenjualan', '$HargaPenjualan', '$IdPengguna', '$IdBarang', '$IdPelanggan')");
	}

	

	header("location:list_penjualan.php");
?>