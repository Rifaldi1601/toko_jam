<h1>Detail Pembelian</h1>

<?php 
	
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


  <div class="row m-t-30">
  <strong>
			<?php echo " Nama Pelanggan : ".$detail['nama_pelanggan']; ?>
			<br>
			<?php echo"Total Pembelian : Rp. " .$detail['total_pembelian']; ?>
		</strong>

		 <p>
		 	<?php echo "Telepon : " .$detail['telepon']; ?>
		 	<br>
		 	<?php echo "E-Mail : " .$detail['email'] ?>
		 	<br>
		 	<?php echo "Alamat : " .$detail['alamat']; ?>
		 </p>

      <div class="col-md-12">
		<div class="table-responsive m-b-40">
		<table class="table table-borderless table-data3">
			<thead class="thead light">
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
			<?php while($data = $ambil->fetch_assoc()) { ?>
			
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $data['nama_produk']; ?></td>
					<td><?php echo "Rp. " .$data['harga_produk'];  ?></td>
					<td><?php echo $data['jumlah']; ?></td>
					<td><?php echo "Rp. ".$data['harga_produk']*$data['jumlah']; ?></td>
				</tr>
			<?php $no++; ?>
			<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</div>