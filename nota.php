<?php 
	session_start();
	$koneksi = new mysqli("localhost", "root", "","toko_jam");
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets_login/css/global.css">

    <title>Store Casio</title>
  </head>
  <body>


  <br>
 
<!-- KONTEN -->

<div class="container">
	<h1>Halaman Nota</h1>

	<?php 
		$id_pembelian = $_GET['id_pembelian'];
	$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
							  ON pembelian.id_pelanggan = pelanggan.id_pelanggan
							  WHERE pembelian.id_pembelian = '$_GET[id_pembelian]'");

	$detail = $ambil->fetch_assoc();
	

 ?>

 <pre>
 	<?php
 	 //print_r($detail);
	 ?>
 </pre>

<strong>
	<br>
	<?php echo"Total Pembayaran : Rp. " .$detail['total_pembelian'] ." (Termasuk Ongkir)"; ?>
	<br>
	<?php echo "Ongkos Kirim : Rp. " .$detail['tarif']; ?>
</strong>

 <p>
 	<?php echo " Nama Pelanggan : ".$detail['nama_pelanggan']; ?>
 	<br>
 	<?php echo "Telepon : " .$detail['telepon']; ?>
 	<br>
 	<?php echo "E-Mail : " .$detail['email'] ?>
 	<br>
	<?php echo "Alamat Pengiriman : " .$detail['alamat']; ?>
 </p>

  <div class="row m-t-30">
      <div class="col-md-12">
		<div class="table-responsive m-b-40">
		<table class="table table-borderless table-data3">
			<thead class="thead-light">
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>SubTotal</th>
				</tr>
			</thead>

			<tbody>
			<?php $no = 1; ?>
			<?php $ambil = $koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON 
											pembelian_produk.id_produk = produk.id_produk
											WHERE pembelian_produk.id_pembelian = '$_GET[id_pembelian]'"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $pecah['nama_produk']; ?></td>
					<td><?php echo "Rp. " .$pecah['harga_produk'];  ?></td>
					<td><?php echo $pecah['jumlah']; ?></td>
					<td><?php echo "Rp. ".$pecah['harga_produk']*$pecah['jumlah']; ?></td>
				</tr>
			<?php $no++; ?>
			<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</div>
</div>

<div class="container">

	<div class="row">
		<div class="col-md-6">
			<div class="alert alert-primary" role="alert">
					<h6 class="alert-heading">PETUNJUK PEMBAYARAN</h6>
					<hr>
					<p>
					Silahkan Melakukan Transaksi Pembayaran Sebesar Rp. <?php echo number_format($detail['total_pembelian']); ?>
					<br>
					Ke Rekening <strong>109-122-1113-543 - BANK BRI </strong>
					<br>
					<strong>Store Casio</strong>
				</p>
			</div>
		</div>
	</div>
	
</div>
  

  
<!-- KONTEN -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>