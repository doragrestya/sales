<!DOCTYPE html>
<html>
<head>
<title>Halaman Administrator</title>
</head>
<?php
session_start();
if($_SESSION['IdAkses']==""){
	header("location:index.php?pesan=gagal");
}
?>
<div class="container">
	<h1 align="center">Data Barang</h1>
	<h5 align="center">@doragrestya</h5>
	<a href="create.php">Tambah(+)</a>
<table width="50%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
	<tr align="center">
		<td bgcolor="#99CCFF">No</td>
		<td bgcolor="#99CCFF">Id Barang</td>
		<td bgcolor="#99CCFF">Nama Barang</td>
		<td bgcolor="#99CCFF">Keterangan</td>
		<td bgcolor="#99CCFF">Satuan</td>
		<td bgcolor="#99CCFF">IdPengguna</td>
		<td bgcolor="#99CCFF">IdSupplier</td>
		<td bgcolor="#99CCFF">Aksi</td>
	</tr>

	<?php
	include("koneksi.php");
	$no=1;
	$tampil=mysqli_query($conn,"SELECT * from barang");
	while($data=mysqli_fetch_array($tampil)) :
    ?>
    <tr>
    <td><?=$no++;?></td>
    <td><?=$data['IdBarang'] ?></td>
    <td><?=$data['NamaBarang'] ?></td>
    <td><?=$data['Keterangan'] ?></td>
    <td><?=$data['Satuan'] ?></td>
	<td><?=$data['IdPengguna'] ?></td>
    <td><?=$data['IdSupplier'] ?></td>
    <td align="center">
    	<a href="edit.php?hal=edit&IdBarang=<?=$data['IdBarang']?>">Edit</a>
    	<a href="hapus.php?IdBarang=<?=$data['IdBarang']?>">Delete</a>
    </td>
    </tr>

    <?php endwhile;
	
?>
</table>
</div>

</body>
</html>