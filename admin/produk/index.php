 <!-- Container Fluid-->
 <div class="container" id="container-wrapper">


     <!-- Row -->
     <div class="row">
         <!-- Datatables -->
         <div class="col-lg-12">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <a href="?page=produk/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                 </div>
                 <div class="table-responsive p-3">

                     <table class="table align-items-center table-flush" id="dataTable">
                         <thead class="thead-light">
                             <tr>
                                 <th>No</th>
                                 <th>Nama Kategori</th>
                                 <th>Nama Produk</th>
                                 <th>Foto Produk</th>
                                 <th>Isi Produk</th>
                                 <th>harga Produk</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php

                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM produk 
                                 JOIN kategori ON produk.id_kategori=kategori.id_kategori
                                 ORDER BY id_produk DESC");
                                while ($data =  mysqli_fetch_array($query)) {
                                ?>
                                 <tr>

                                     <td><?php echo $no++ ?></td>
                                     <td> <?php echo $data['nama_kategori'] ?></td>
                                     <td> <?php echo $data['nama_produk'] ?></td>
                                     <td class="text-center"> <img width="100" src="uploads/<?php echo $data['foto_produk'] ?>" alt=""></td>
                                     <td> <?php echo $data['isi_produk'] ?></td>
                                     <td>Rp.<?= number_format($data['harga_produk' ]);  ?></td>
                                    
                                    

                                     <td>

                                         <a href="?page=produk/ubah&id_produk=<?php echo $data['id_produk'] ?>
                                         " class="btn btn-success"> <i class="fa fa-edit"></i></a>

                                         <a href="produk/hapus.php?id_produk=<?php echo $data['id_produk'] ?>"
                                             class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus wisata ini?')">
                                             <i class="fa fa-trash"></i></a>
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