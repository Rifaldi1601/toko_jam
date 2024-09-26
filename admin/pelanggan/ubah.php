<?php

// Mendapatkan id_kategori dari parameter URL
$id_user = $_GET['id_user'];

// Mengambil data kategori berdasarkan id_kategori
$ubah = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
$data = mysqli_fetch_array($ubah);
?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                    <form action="user/proses_ubah.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">

                        <div class="form-group mb-3">
                            <label for="">username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>">

                        </div>
                        <div class="form-group mb-3">
                            <label for="">password</label>
                            <input type="text" name="password" class="form-control" value="<?php echo $data['password']; ?>">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data['nama_lengkap']; ?>">

                        </div>


                        <div class="form-group mb-3">
                            <label for="">Foto</label>
                            <img width="100" src="uploads/<?php echo $data['foto'] ?>" alt="">
                            <input type="hidden" name="foto_lama" value="<?php echo $data['foto'] ?>" id="">
                            <input type="file" name="foto" class="form-control" value="<?php echo $data['foto'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
<!---Container Fluid-->