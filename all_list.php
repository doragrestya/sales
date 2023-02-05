
<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME</title>
    <meta charset="UTF-8">
    <meta name="description">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">DATA SALES TEAM 5</h1>
    </header>
    <div id="contents">
       <a href="barang/list_barang.php"><h3> Data Barang </h3></a>
	   <table border = "1" class="table table-bordered table-striped table-hover">
	   <tr>
	      <th>Id Barang</th>
		  <th>Nama Barang</th>
		  <th>Keterangan</th>
		  <th>Satuan</th>
		  <th>Id Pengguna</th>
		  <th>Id Suppier</th>
	   </tr>
	   
	   <?php
		// menampilkan seluruh isi database
		$query ="select * from barang";
		$hasil = mysqli_query($conn, $query);

		while($data = mysqli_fetch_array($hasil))
		{
		?>
			<tr>
				<td><?php echo $data['IdBarang'] ?></td>
				<td><?php echo $data['NamaBarang'] ?></td>
				<td><?php echo $data['Keterangan'] ?></td>
				<td><?php echo $data['Satuan']?></td>
				<td><?php echo $data['IdPengguna']?></td>
				<td><?php echo $data['IdSupplier']?></td>
			</tr>
		<?php } ?>
    </div>
	</table>
	
	
    <a href="penjualan/list_penjualan.php"><h3> Data Penjualan </h3></a>
	<table border = "1" class="table table-bordered table-striped table-hover">
       <tr>
			<th>No</th>
			<th>Id penjualan</th>
			<th>Jumlah Penjualan</th>
			<th>Harga Penjualan</th>
			<th>Id Pengguna</th>
			<th>Id Barang</th>
			<th>Id Pelanggan</th>
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
		<?php } ?>
	</table>
	
    <a href="pembelian/list_pembelian.php"><h3> Data Pembelian </h3></a>
	   <table border = "1" class="table table-bordered table-striped table-hover">
	   <tr>
	        <th>No</th>
			<th>Id pembelian</th>
			<th>Jumlah pembelian</th>
			<th>Harga Beli</th>
			<th>Id Pengguna</th>
			<th>Id Barang</th>
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
			</tr>
		<?php } ?>
    </div>
	</table>
	
	
	<a href="logout.php"><h3> LogOut </h3></a>

    <footer>
        <br><br><center><b>TEAM 5 | INTRODUCTION DATA AND INFORMATION MANAGEMENT | BINUSIAN 2023</b></center>
    </footer>
</body>
</html>