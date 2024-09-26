<?php

// Mendapatkan id_kategori dari parameter URL
$id_wisata = $_GET['id_wisata'];

// Mengambil data kategori berdasarkan id_kategori
$ubah = mysqli_query($koneksi, "SELECT * FROM wisata WHERE id_wisata = '$id_wisata'");
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
                    <form action="wisata/proses_ubah.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id_wisata" value="<?php echo $data['id_wisata'] ?>">

                        <div class="form-group mb-3">
                            <label for="">Nama Kategori</label>
                            <select name="id_kategori" id="" class="form-control">
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                                while ($datakategori =  mysqli_fetch_array($query)) {
                                ?>

                                    <option value="<?php echo $datakategori['id_kategori']; ?>"
                                        <?php echo $datakategori['id_kategori'] == $data['id_kategori'] ? 'selected' : ''; ?>>
                                        <?php echo $datakategori['nama_kategori'] ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Judul wisata</label>
                            <input type="text" name="judul_wisata" class="form-control" value="<?php echo $data['judul_wisata']; ?>">

                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tanggal wisata</label>
                            <input type="date" name="tgl_wisata" class="form-control" value="<?php echo $data['tgl_wisata'] ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Isi wisata</label>
                            <textarea name="isi_wisata" class="form-control" required><?php echo $data['isi_wisata'] ?></textarea>
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Gambar wisata</label>
                            <img width="100" src="../uploads/<?php echo $data['gambar_wisata'] ?>" alt="">
                            <input type="hidden" name="foto_lama" value="<?php echo $data['gambar_wisata'] ?>">
                            <input type="file" name="gambar_wisata" class="form-control"
                                value="<?php echo $data['gambar_wisata'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
<!---Container Fluid-->