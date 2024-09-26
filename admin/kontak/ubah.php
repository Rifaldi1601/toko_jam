<?php

// Mendapatkan id_kontak dari parameter URL
$id_kontak = $_GET['id_kontak'];

// Mengambil data kontak berdasarkan id_kontak
$ubah = mysqli_query($koneksi, "SELECT * FROM kontak WHERE id_kontak = '$id_kontak'");
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
                    <form action="kontak/proses_ubah.php" method="POST">
                        <input type="hidden" name="id_kontak" value="<?php echo $data['id_kontak']; ?>">

                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="<?php echo $data['facebook']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Instagram</label>
                            <input type="text" class="form-control" name="instagram" value="<?php echo $data['instagram']; ?>" required>

                        </div>

                        <div class="form-group">
                            <label for="">WhatsApp</label>
                            <input type="text" class="form-control" name="wa" value="<?php echo $data['wa']; ?>" required>

                        </div>

                        <div class="form-group">
                            <label for="">No Hp</label>
                            <input type="text" class="form-control" name="no_telp" value="<?php echo $data['no_telp']; ?>" required>

                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea class="form-control" name="alamat" required><?php echo $data['alamat']; ?></textarea>

                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>" required>

                        </div>

                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
<!---Container Fluid-->