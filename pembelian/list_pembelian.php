
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>DATA pembelian</title>
</head>
<body>
 
<center><h1>Data pembelian</h1></center>
<center><p>Menampilkan isi database pembelian </p></center>
<a href="add_pembelian.php">Input Data pembelian(+)</a><br><br>
 
<table border = "1" class="table table-bordered table-striped table-hover">
<tr>
<th>No</th>
<th>Id pembelian</th>
<th>Jumlah pembelian</th>
<th>Harga Beli</th>
<th>Id Pengguna</th>
<th>Id Barang</th>
<th>Action</th>
</tr>
 
<?php
include_once 'koneksi.php';
	$no=1;
// menampilkan seluruh isi database
$query ="select * from pembelian";
$hasil = mysqli_query($conn, $query);

while($data = mysqli_fetch_array($hasil))
{
  ?>
  <tr>
  <td><?=$no++;?></td>
  <td><?php echo $data['IdPembelian'] ?></td>
  <td><?php echo $data['JumlahPembelian'] ?></td>
  <td><?php echo $data['HargaBeli'] ?></td>
  <td><?php echo $data['IdPengguna']?></td>
  <td><?php echo $data['IdBarang']?></td>

  <td align="center">
    	<a href="edit_pembelian.php?hal=edit_pembelian&IdPembelian=<?=$data['IdPembelian']?>">Edit |</a>
		<a href='delete_pembelian.php?IdPembelian=<?php echo $data['IdPembelian']; ?> ' onclick="javascript: return confirm('Anda yakin akan hapus data?')"> Delete</a>    </td> 
  </tr>
<?php } ?>
</table>
</body>
</html>