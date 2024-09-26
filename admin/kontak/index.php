 <!-- Container Fluid-->
 <div class="container" id="container-wrapper">


     <!-- Row -->
     <div class="row">
         <!-- Datatables -->
         <div class="col-lg-12">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <a href="?page=kontak/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                 </div>
                 <div class="table-responsive p-3">

                     <table class="table align-items-center table-flush" id="dataTable">
                         <thead class="thead-light">
                             <tr>
                                 <th>No</th>
                                 <th>Facebook</th>
                                 <th>Instagram</th>
                                 <th>WhatsApp</th>
                                 <th>No Hp</th>
                                 <th>Alamat</th>
                                 <th>Email</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM kontak ORDER BY id_kontak DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
                                 <tr>
                                     <td><?php echo $no++ ?></td>
                                     <td> <?php echo $data['facebook'] ?></td>
                                     <td> <?php echo $data['instagram'] ?></td>
                                     <td> <?php echo $data['wa'] ?></td>
                                     <td> <?php echo $data['no_telp'] ?></td>
                                     <td> <?php echo substr($data['alamat'], 0, 50)  ?></td>
                                     <td> <?php echo $data['email'] ?></td>

                                     <td>
                                         <a href="?page=kontak/ubah&id_kontak=<?php echo $data['id_kontak'] ?>
                                         " class="btn btn-success"> <i class="fa fa-edit"></i></a>

                                         <a href="kontak/hapus.php?id_kontak=<?php echo $data['id_kontak'] ?>"
                                             class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kontak ini?')">
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