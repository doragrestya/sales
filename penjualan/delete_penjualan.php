<?php
include('koneksi.php');
$hapus=mysqli_query($conn, "DELETE from penjualan WHERE IdPenjualan='" . $_GET['IdPenjualan'] . "'");
if($hapus){
	header("location:list_penjualan.php");
} else {
	echo "Gagal Hapus Data";
}
?>