      <?php
        $id_kategori = $_GET['id_kategori'];
        $ubah = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$id_kategori'");
        $u = mysqli_fetch_array($ubah);

        ?>


      <!-- Container Fluid-->
      <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Form Basics</h1>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item">Forms</li>
                  <li class="breadcrumb-item active" aria-current="page">Form Basics</li>
              </ol>
          </div>

          <div class="row">
              <div class="col-lg-6">
                  <!-- Form Basic -->
                  <div class="card mb-4">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                      </div>
                      <div class="card-body">
                          <form action="kategori/proses_ubah.php" method="post">
                              <input type="hidden" name="id_kategori" value="<?= $u['id_kategori'] ?>">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Nama Kategori</label>
                                  <input type="text" name="nama_kategori" class="form-control" value="<?= $u['nama_kategori'] ?>" required>

                              </div>

                              <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
              <!--Row-->

              <!-- Documentation Link -->
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                              target="_blank">
                              bootstrap forms documentations.</a> and <a
                              href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                              groups documentations</a></p>
                  </div>
              </div>

              <!-- Modal Logout -->
              <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <p>Are you sure you want to logout?</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                              <a href="login.html" class="btn btn-primary">Logout</a>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
          <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
          <div class="container my-auto">
              <div class="copyright text-center my-auto">
                  <span>copyright &copy; <script>
                          document.write(new Date().getFullYear());
                      </script> - developed by
                      <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
                  </span>
              </div>
          </div>
      </footer>
      <!-- Footer -->
      </div>
      </div>

      <!-- Scroll to top -->
      <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
      </a>

      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="js/ruang-admin.min.js"></script>

      </body>

      </html>