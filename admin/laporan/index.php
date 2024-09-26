<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan</h4>
                    <form action="" method="POST" id="myForm">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl_mulai">Tanggal Mulai</label>
                                    <?php if (isset($_POST['tgl_mulai'])):  ?>

                                        <input type="date" value="<?php echo $_POST['tgl_mulai'] ?>" 
                                        name="tgl_mulai" class="form-control" id="tgl_mulai">
                                    <?php else : ?>
                                        <input type="date" name="tgl_mulai" class="form-control" id="tgl_mulai">
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl_sampai">Tanggal Sampai</label>
                                    <?php if (isset($_POST['tgl_sampai'])):  ?>

                                        <input type="date" value="<?php echo $_POST['tgl_sampai'] ?>" 
                                        name="tgl_sampai" class="form-control" id="tgl_sampai">
                                    <?php else : ?>
                                        <input type="date" name="tgl_sampai" class="form-control" id="tgl_sampai">
                                    <?php endif ?>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group" style="margin-top: 27px;">
                                    <button class="btn btn-primary" type="submit" name="filter">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button onclick="cetak()" class="btn btn-dark">
                                        <i class="fa fa-print"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <script>
                        function cetak() {
                            // Ambil nilai dari input tanggal
                            var tglMulai = document.getElementById('tgl_mulai').value;
                            var tglSampai = document.getElementById('tgl_sampai').value;

                            // Cek apakah kedua tanggal sudah diisi
                            if (tglMulai === "" || tglSampai === "") {
                                alert("Silakan isi kedua tanggal terlebih dahulu.");
                            } else {
                                // Jika kedua tanggal sudah diisi, lakukan cetak
                                $('#myForm').attr('action', 'laporan/print.php');
                                $('#myForm').attr('target', '_blank');
                                $('#myForm').submit();
                            }
                        }
                    </script>




                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            id="basic-datatables"
                            class="display table table-striped table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>nama_produk</th>
                                    <th>Foto Produk</th>
                                    <th>Isi Wisata</th>
                                    <th>Harga produk</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                if (isset($_POST['filter'])) {
                                    $query = mysqli_query($koneksi, "SELECT * FROM produk 
                                 JOIN kategori ON produk.id_kategori=kategori.id_kategori
                                WHERE nama_produk BETWEEN '$_POST[tgl_mulai]' AND '$_POST[tgl_sampai]' ORDER BY id_produk DESC");
                                } else {
                                    $query = mysqli_query($koneksi, "SELECT * FROM produk 
                                 JOIN kategori ON produk.id_kategori=kategori.id_kategori
                                 ORDER BY id_produk DESC");
                                }

                                while ($data =  mysqli_fetch_array($query)) {
                                ?>
                                    <tr>

                                        <td><?php echo $no++ ?></td>
                                        <td> <?php echo $data['nama_kategori'] ?></td>
                                        <td> <?php echo $data['nama_produk'] ?></td>
                                        <td class="text-center"> <img width="100" src="../admin/uploads/<?php
                                         echo $data['foto_produk'] ?>" alt=""></td>
                                         <td> <?php echo substr($data['isi_produk'], 0, 50)  ?></td>
                                        <td>Rp.<?= number_format($data['harga_produk' ]);  ?></td>
                                        
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