  <!-- Blog Details Hero Begin -->
  <section class="blog-details-hero set-bg" data-setbg="admin/uploads/logo.3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>Casio Shop</h2>
                        <ul>
                            <li>Home</li>
                            <li>About</li>
                            <li>September 18, 2024</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                            <?php
                            $no = 1;
                            $kategori1 = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                            while ($k1 = mysqli_fetch_array($kategori1)) {
                            ?>
                                <li><a href="index.php?nama_kategori=<?= $k1['nama_kategori'] ?>"
                           class="dropdown-item"><?php echo $k1['nama_kategori'] ?></a></li>
                           <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM about ORDER BY id_about DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="admin/uploads/logo.1.jpg" alt="">
                        <p><?php echo $data['tentang'] ?></p>
                    </div>
                    <?php } ?>
                    <div class="blog__details__content">
                        <div class="row">
                        <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="admin/uploads/<?php echo $data['foto'] ?>" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6><?php echo $data['nama_lengkap'] ?></h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> Watch</li>
                                        <li><span>Tags:</span> All, Trending, Watch, casio, jam_tangan_pria&wanita</li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="<?php echo $k['facebook']?>"><i class="fa fa-facebook"></i></a>
                                        <a href="<?php echo $k['instagram']?>"><i class="fa fa-instagram"></i></a>
                                        <a href="<?php echo $k['wa']?>"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->