
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>HOME</title>
</head>
<body>
 
<center><h1>Data Barang</h1></center>
<center><p>Menampilkan isi database Barang </p></center>
<a href="add_barang.php">Input Data Barang(+)</a><br><br>
 
<table border = "1" class="table table-bordered table-striped table-hover">
<tr>
<th>No</th>
<th>Id Barang</th>
<th>Nama Barang</th>
<th>Keterangan</th>
<th>Satuan</th>
<th>Id Pengguna</th>
<th>Id Suppier</th>
<th>Action</th>
</tr>
 
<?php
include_once 'koneksi.php';
	$no=1;
// menampilkan seluruh isi database
$query ="select * from barang";
$hasil = mysqli_query($conn, $query);

while($data = mysqli_fetch_array($hasil))
{
  ?>
  <tr>
  <td><?=$no++;?></td>
  <td><?php echo $data['IdBarang'] ?></td>
  <td><?php echo $data['NamaBarang'] ?></td>
  <td><?php echo $data['Keterangan'] ?></td>
  <td><?php echo $data['Satuan']?></td>
  <td><?php echo $data['IdPengguna']?></td>
  <td><?php echo $data['IdSupplier']?></td>
  <td align="center">
    	<a href="edit_barang.php?hal=edi_barangt&IdBarang=<?=$data['IdBarang']?>">Edit |</a>
		<a href='delete_barang.php?IdBarang=<?php echo $data['IdBarang']; ?> ' onclick="javascript: return confirm('Anda yakin akan hapus data?')"> Delete</a>    </td> 
  </tr>
<?php } ?>
</table>
</body>
</html>