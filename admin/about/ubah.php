<?php

// Mendapatkan id_kategori dari parameter URL
$id_about = $_GET['id_about'];

// Mengambil data kategori berdasarkan id_kategori
$ubah = mysqli_query($koneksi, "SELECT * FROM about WHERE id_about = '$id_about'");
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
                    <form action="about/proses_ubah.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_about" value="<?php echo $data['id_about'] ?>">

                        <div class="form-group mb-3">
                            <label for="">Tentang</label>
                            <textarea type="text" name="tentang" class="form-control" ><?php echo $data['tentang']; ?> </textarea>

                        </div>

                        <div class="form-group mb-3">
                            <label for="">gambar about</label>
                            <img width="100" src="uploads/<?php echo $data['gambar_about'] ?>" alt="">
                            <input type="hidden" name="gambar_about_lama" value="<?php echo $data['gambar_about'] ?>" id="">
                            <input type="file" name="gambar_about" class="form-control" value="<?php echo $data['gambar_about'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
<!---Container Fluid-->