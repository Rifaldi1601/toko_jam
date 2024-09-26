 <!-- Container Fluid-->
 <div class="container" id="container-wrapper">


     <!-- Row -->
     <div class="row">
         <!-- Datatables -->
         <div class="col-lg-12">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <a href="?page=user/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                 </div>
                 <div class="table-responsive p-3">

                     <table class="table align-items-center table-flush" id="dataTable">
                         <thead class="thead-light">
                             <tr>
                                 <th>No</th>
                                 <th>username</th>
                                 <th>password</th>
                                 <th>nama_lengkap</th>
                                 <th>foto</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
                                 <tr>

                                     <td><?php echo $no++ ?></td>
                                     <td> <?php echo $data['username'] ?></td>
                                     <td> <?php echo $data['password'] ?></td>
                                     <td> <?php echo $data['nama_lengkap'] ?></td>
                                     <td class="text-center"> <img width="100" src="uploads/<?php echo $data['foto'] ?>" alt=""></td>


                                     <td>
                                         <a href="?page=user/ubah&id_user=<?php echo $data['id_user'] ?>
                                         " class="btn btn-success"> <i class="fa fa-edit"></i></a>

                                         <a href="user/hapus.php?id_user=<?php echo $data['id_user'] ?>"
                                             class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus tim ini?')">
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