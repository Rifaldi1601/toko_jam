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
					             <th>E-Mail</th>
					             <th>Telepon</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM pelanggan ORDER BY id_pelanggan DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
                                 <tr>

                                     <td><?php echo $no++ ?></td>
                                     <td> <?php echo $data['nama_pelanggan'] ?></td>
                                     <td> <?php echo $data['email'] ?></td>
                                     <td> <?php echo $data['telepon'] ?></td>

                                     <td>
                                         <a href="?page=pelanggan/ubah&id_pelanggan=<?php echo $data['id_pelanggan'] ?>
                                         " class="btn btn-success"> <i class="fa fa-edit"></i></a>

                                         <a href="pelanggan/hapus.php?id_pelanggan=<?php echo $data['id_pelanggan'] ?>"
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