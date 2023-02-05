<?php
include('koneksi.php');
$hapus=mysqli_query($conn, "DELETE from barang WHERE IdBarang='" . $_GET['IdBarang'] . "'");
if($hapus){
	header("location:list_barang.php");
} else {
	echo "Gagal Hapus Data";
}
?>