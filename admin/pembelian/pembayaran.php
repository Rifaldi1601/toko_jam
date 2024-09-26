
	<div class="main-content " style="margin-top: 100px;">
        <div class="section__content section__content--p30">
          <div class="container-fluid">

          	<?php 

          		$id_pembelian = $_GET['id_pembelian'];
          		$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_pembelian='$id_pembelian'");
          		$pecah = $ambil->fetch_assoc();

          		//echo "<pre>".print_r($pecah)."<pre>";

          	?>


          	 <div class="row">
              
              <div class="col-lg-8">
                <section class="card">
                  <div class="card-body text-secondary">
                  	<table class="table table-top-campaign">
                  	 <h3 class="title-3 m-b-30">Info Pembayaran</h3>
                  		<tbody>

                  			<tr>
                  				<td>Nama</td>
                  				<td><?= $pecah['nama']; ?></td>
                  			</tr>

                  			<tr>
                  				<td>Bank Pengiriman</td>
                  				<td><?= $pecah['bank']; ?></td>
                  			</tr>	
                  			
                  			<tr>
                  				<td>Jumlah Pembayaran</td>
                  				<td><?php echo "Rp." .number_format($pecah['jumlah']); ?></td>
                  			</tr>

                  			<tr>
                  				<td>Tanggal Pembayaran</td>
                  				<td><?= $pecah['tanggal']; ?></td>
                  			</tr>
                  		</tbody>
                  	</table>
                  </div>
                </section>
              </div>
              <div class="col">
                <section class="card">
                  <div class="card-body text-secondary">
                  	<img width="250px" height="180px" align="left" src="../foto_bukti/<?= $pecah['bukti']; ?>">
                  </div>
                </section>
              </div>
              
            </div>

            <form method="POST">
            <div class="row">
            	<div class="col-lg-12">
            		<section class="card">
            			<div class="card-body text-secondary">
            				<label>Ubah Status</label>
            				<select class="form-control" name="status">
            					<option value="Sedang di Kirim">Sedang di Kirim</option>
            					<option value="Produk di Terima">Produk di Terima</option>
            				</select>
            				<br>
            				<button class="btn btn-success" name="konfirmasi">Konfirmasi</button>
            			</div>
            		</section>
            	</div>
            </div>
            </form>
          </div>
        </div>
    </div>
</div>


	<?php 
		if (isset($_POST['konfirmasi'])) {
			$status = $_POST['status'];

			$koneksi->query("UPDATE pembelian SET status = '$status' WHERE id_pembelian='$id_pembelian'");
			echo "<script>alert('Data Pembelian Berhasil di Update');</script>";
			echo "<script>location = 'index.php?halaman=pembayaran';</script>";
		}
		

	?>
