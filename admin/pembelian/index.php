 <!-- Container Fluid-->
 <div class="container" id="container-wrapper">


     <!-- Row -->
     <div class="row">
         <!-- Datatables -->
         <div class="col-lg-12">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 </div>
                 <div class="table-responsive p-3">

                     <table class="table align-items-center table-flush" id="dataTable">
                         <thead class="thead-light">
                             <tr>
                                 <th>No</th>
                                 <th>Nama Pelanggan</th>
                                 <th>Tanggal</th>
                                 <th>Status</th>
                                 <th>Total</th>
                                 <th style="text-align: center">Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM pembelian 
                                JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan
                                 ORDER BY id_pembelian DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
                             <tr>

                                 <td><?php echo $no++ ?></td>
                                 <td> <?php echo $data['nama_pelanggan'] ?></td>
                                 <td> <?php echo $data['tanggal_pembelian'] ?></td>
                                 <td> <?php echo $data['status'] ?></td>
                                 <td><?php echo "Rp. ".$data['total_pembelian']; ?></td>

                                 <td>
                                     <div class="table-data-feature">

                                         <?php if ($data['status'] == "Pending" || $data['status'] == "Produk di Terima") : ?>
                                         <a class="btn btn-outline-primary btn-block"
                                             href="?page=pembelian/detail&id_pembelian=<?php echo $data['id_pembelian']; ?>">Detail</a>
                                         <?php endif; ?>


                                         <?php if ($data['status'] == "Menunggu Konfirmasi" || $data['status'] == "Sedang di Kirim"): ?>

                                         <a class="btn btn-outline-primary"
                                             href="?page=pembelian/detail&id_pembelian=<?php echo $data['id_pembelian']; ?>">Detail</a>

                                         &nbsp;

                                         <a class="btn btn-outline-success"
                                             href="?page=pembelian/pembayaran&id_pembelian=<?php echo $data['id_pembelian'] ?>">Bayar</a>
                                         <?php endif; ?>

                                 </td>

                             </tr>
                             <?php } ?>
                         </tbody>

                     </table>
                 </div>
             </div>
         </div>

     </div>
     <!--Row-->


 </div>
 <!---Container Fluid-->