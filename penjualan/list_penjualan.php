
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>DATA PENJUALAN</title>
</head>
<body>
 
<center><h1>Data penjualan</h1></center>
<center><p>Menampilkan isi database penjualan </p></center>
<a href="add_penjualan.php">Input Data penjualan(+)</a><br><br>
 
<table border = "1" class="table table-bordered table-striped table-hover">
<tr>
<th>No</th>
<th>Id penjualan</th>
<th>Jumlah Penjualan</th>
<th>Harga Penjualan</th>
<th>Id Pengguna</th>
<th>Id Barang</th>
<th>Id Pelanggan</th>
<th>Action</th>
</tr>
 
<?php
include_once 'koneksi.php';
	$no=1;
// menampilkan seluruh isi database
$query ="select * from penjualan";
$hasil = mysqli_query($conn, $query);

while($data = mysqli_fetch_array($hasil))
{
  ?>
  <tr>
  <td><?=$no++;?></td>
  <td><?php echo $data['IdPenjualan'] ?></td>
  <td><?php echo $data['JumlahPenjualan'] ?></td>
  <td><?php echo $data['HargaPenjualan'] ?></td>
  <td><?php echo $data['IdPengguna']?></td>
  <td><?php echo $data['IdBarang']?></td>
  <td><?php echo $data['IdPelanggan']?></td>

  <td align="center">
    	<a href="edit_penjualan.php?hal=edit_penjualan&IdPenjualan=<?=$data['IdPenjualan']?>">Edit |</a>
		<a href='delete_penjualan.php?IdPenjualan=<?php echo $data['IdPenjualan']; ?> ' onclick="javascript: return confirm('Anda yakin akan hapus data?')"> Delete</a>    </td> 
  </tr>
<?php } ?>
</table>
</body>
</html>