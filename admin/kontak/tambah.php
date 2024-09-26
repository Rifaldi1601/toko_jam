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
                      <form action="kontak/proses_tambah.php" method="POST">
                          <div class="form-group">
                              <label for="">Facebook</label>
                              <input type="text" name="facebook" class="form-control" required>
                          </div>
                          <div class="form-group">
                              <label for="">Instagram</label>
                              <input type="text" name="instagram" class="form-control" required>
                          </div>
                          <div class="form-group">
                              <label for="">WhatsApp</label>
                              <input type="text" name="wa" class="form-control" required>
                          </div>
                          <div class="form-group">
                              <label for="">No Hp</label>
                              <input type="text" name="no_telp" class="form-control" required>
                          </div>

                          <div class="form-group">
                              <label for="">Alamat</label>
                              <textarea name="alamat" class="form-control" required></textarea>
                          </div>
                          <div class="form-group">
                              <label for="">Email</label>
                              <input type="text" name="email" class="form-control" required>
                          </div>

                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>

          </div>

      </div>

  </div>
  <!---Container Fluid-->