<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">DataTables.Net</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Tables</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Datatables</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic</h4>
                    </div>
                    <!-- Datatables -->
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    <a href="?page=kategori/tambah" class="btn btn-success"> <i class="fa fa-plus"></i>
                                        Tambah Data </a>
                                      
                                </h6>
                            </div>
                            <div class="table-responsive p-3">
                                <table class="table align-items-center table-flush" id="dataTable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                            $no = 1;
                            $kategori = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                            while ($k = mysqli_fetch_array($kategori)) {
                            ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $k['nama_kategori'] ?></td>
                                            <td>
                                                <a href="?page=kategori/ubah&id_kategori=<?= $k['id_kategori'] ?>"
                                                    class="btn btn-success"><i class="fa fa-pencil-alt"></i></a>
                                                <a onclick="return confirm('Yakin ingin Hapus Data')"
                                                    href="kategori/hapus.php?id_kategori=<?= $k['id_kategori'] ?>"
                                                    class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['save_succes'])) : ?>
<script>
Swal.fire({
  position: "center",
  icon: "success",
  title: "<?= $_SESSION['save_succes'] ?>",
  showConfirmButton: false,
  timer: 1500
});
</script>
<?php
 unset($_SESSION['save_succes']);
endif;
?>

<?php if(isset($_SESSION['update_succes'])) : ?>
<script>
Swal.fire({
  position: "center",
  icon: "success",
  title: "<?= $_SESSION['update_succes'] ?>",
  showConfirmButton: false,
  timer: 1500
});
</script>
<?php
 unset($_SESSION['update_succes']);
endif;
?>