<?php
session_start();
include 'koneksi.php';

$namaPengguna = $_POST['NamaPengguna'];
$password = $_POST['Password'];

$login = mysqli_query($conn, "select * from pengguna where 
NamaPengguna = '$namaPengguna' 
and Password = '$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($data['IdAkses']=="AR01"){
		$_SESSION['NamaPengguna'] = $namaPengguna;
		$_SESSION['IdAkses'] = "AR01";
		header("location:all_list.php");
		
	} else if($data['IdAkses']=="AR02"){
		$_SESSION['NamaPengguna'] = $namaPengguna;
		$_SESSION['IdAkses'] = "AR02";
		header("location:list_barang.php");
		
	}else if($data['IdAkses']=="AR03"){
		$_SESSION['NamaPengguna'] = $namaPengguna;
		$_SESSION['IdAkses'] = "AR03";
		header("location:list_pengguna.php");
		
	} else if($data['IdAkses']=="AR04"){
		$_SESSION['NamaPengguna'] = $namaPengguna;
		$_SESSION['IdAkses'] = "AR04";
		header("location:list_karyawan.php");
		
	}else if($data['IdAkses']=="AR05"){
		$_SESSION['NamaPengguna'] = $namaPengguna;
		$_SESSION['IdAkses'] = "AR05";
		header("location:list_penjualan.php");
		
	}else if($data['IdAkses']=="AR06"){
		$_SESSION['NamaPengguna'] = $namaPengguna;
		$_SESSION['IdAkses'] = "AR06";
		header("location:list_pembelian.php");
		
	} else if($data['IdAkses']=="AR07"){
		$_SESSION['NamaPengguna'] = $namaPengguna;
		$_SESSION['IdAkses'] = "AR07";
		header("location:list_penjualan.php");
		
	}else if($data['IdAkses']=="AR08"){
		$_SESSION['NamaPengguna'] = $namaPengguna;
		$_SESSION['IdAkses'] = "AR08";
		header("location:list_barang.php");
		
	} else if($data['IdAkses']=="AR09"){
		$_SESSION['NamaPengguna'] = $namaPengguna;
		$_SESSION['IdAkses'] = "AR09";
		header("location:list_keuangan.php");
		
	}else if($data['IdAkses']=="AR10"){
		$_SESSION['NamaPengguna'] = $namaPengguna;
		$_SESSION['IdAkses'] = "AR10";
		header("location:list_barang.php");
		
	}else {
		header("location:index.php?pesan=gagal");
	}
}else {
		header("location:index.php?pesan=gagal");
}
?>