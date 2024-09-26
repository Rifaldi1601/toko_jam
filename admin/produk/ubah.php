<?php

// Mendapatkan id_kategori dari parameter URL
$id_produk = $_GET['id_produk'];

// Mengambil data kategori berdasarkan id_kategori
$ubah = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$id_produk'");
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
                    <form action="produk/proses_ubah.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id_produk" value="<?php echo $data['id_produk'] ?>">

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
                            <label for="">nama_produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="<?php echo $data['nama_produk']; ?>">

                        </div>
                        <div class="form-group mb-3">
                            <label for="">harga Produk</label>
                            <input type="number" name="harga_produk" class="form-control" value="<?php echo $data['harga_produk'] ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Isi Produk</label>
                            <textarea name="isi_produk" class="form-control" required><?php echo $data['isi_produk'] ?></textarea>
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Foto produk</label>
                            <img width="100" src="../uploads/<?php echo $data['foto_produk'] ?>" alt="">
                            <input type="hidden" name="foto_lama" value="<?php echo $data['foto_produk'] ?>">
                            <input type="file" name="foto_produk" class="form-control"
                                value="<?php echo $data['foto_produk'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
<!---Container Fluid-->