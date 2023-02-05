<?php
include('koneksi.php');
$hapus=mysqli_query($conn, "DELETE from pembelian WHERE IdPembelian='" . $_GET['IdPembelian'] . "'");
if($hapus){
	header("location:list_pembelian.php");
} else {
	echo "Gagal Hapus Data";
}
?>