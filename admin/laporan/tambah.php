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
                      <form action="produk/proses_tambah.php" method="POST" enctype="multipart/form-data">

                          <div class="form-group mb-3">
                              <label for="">Nama Kategori</label>
                              <select name="id_kategori" id="" class="form-control">
                                  <?php

                                    $query = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                                    while ($data =  mysqli_fetch_array($query)) {
                                    ?>
                                      <option value="<?php echo $data['id_kategori'] ?>"> <?php echo $data['nama_kategori'] ?></option>
                                  <?php } ?>
                              </select>
                          </div>

                          <div class="form-group mb-3">
                              <label for="">nama produk</label>
                              <input type="text" name="nama_produk" class="form-control" required>
                          </div>
                          <div class="form-group mb-3">
                              <label for="">Foto Produk</label>
                              <input type="file" name="foto_produk" class="form-control" required>
                          </div>

                          <div class="form-group mb-3">
                              <label for="">Isi produk</label>
                              <textarea id="summernote" name="isi_produk" class="form-control" required></textarea>
                          </div>
                          <div class="form-group mb-3">
                              <label for="">harga produk</label>
                              <input type="number" name="harga_produk" class="form-control" required>
                          </div>

                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>

          </div>

      </div>

  </div>
  <!---Container Fluid-->