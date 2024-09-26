<style>
    .team-item img
     {
        width: 100%;
        /* Membuat lebar gambar selalu mengikuti lebar kontainer */
        height: 250px;
        /* Menentukan tinggi tetap untuk semua gambar */
        object-fit: cover;
        /* Memotong gambar agar sesuai dengan ukuran kontainer tanpa mengubah proporsi */
    }
</style>
<?php

$kontak = mysqli_query($koneksi, " SELECT * FROM kontak");
$k = mysqli_fetch_array($kontak);
?>
   
 <!-- Hero Section Begin -->
 <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                             <?php
                            $no = 1;
                            $kategori1 = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                            while ($k1 = mysqli_fetch_array($kategori1)) {
                            ?>
                           <li><a href="index.php?nama_kategori=<?= $k1['nama_kategori'] ?>"
                           class="dropdown-item"><?php echo $k1['nama_kategori'] ?> </a></li>
                           
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <a href="https://api.whatsapp.com/send/?phone=6282392195763&text=Halo%2C+saya+ingin+memesan+jam+tangan+casio+&type=phone_number&app_absent=0">
                                <i class="fa fa-whatsapp"></i>
                                </a>
                          
                            </div>
                            <div class="hero__search__phone__text">
                                <h5><?php echo $k['no_telp']?></h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="admin/uploads/logo.4.jpg">
                        <div class="hero__text">
                            <span>G-SHOCK</span>
                            <h2>CASIO <br />100% Original</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="https://api.whatsapp.com/send/?phone=6282392195763&text=Halo%2C+saya+ingin+memesan+jam+tangan+casio+&type=phone_number&app_absent=0" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                <?php

                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM produk 
                JOIN kategori ON produk.id_kategori=kategori.id_kategori
                ORDER BY id_produk DESC");
                while ($data =  mysqli_fetch_array($query)) {
                ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="admin/uploads/<?php echo $data['foto_produk'] ?>">
                            <h5><a href="#"><?php echo $data['nama_produk'] ?></a></h5>
                            <a href="detail-<?php echo $data['slug']?>"
                            class="btn btn-primary rounded-pill " style="margin-top: 7px;">details</a>
                            <a href="beli.php?id=<?= $data['id_produk']; ?>" class="btn btn-primary">Beli Produk</a>
                        </div>
                     
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul><li class="active" data-filter="*">All</li>
                         <?php
                            $no = 1;
                            $kategori = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                            while ($k = mysqli_fetch_array($kategori)) {
                            ?>
                           <li><a href="index.php?nama_kategori=<?= $k['nama_kategori'] ?>"
                           class="dropdown-item"><?php echo $k['nama_kategori'] ?> </a>
                           
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            <?php
            $nama_kategori =  isset($_GET['nama_kategori']) ? $_GET['nama_kategori'] : null;

            if($nama_kategori) {
           $queryproduk = mysqli_query($koneksi, "SELECT * FROM produk
           JOIN kategori ON produk.id_kategori=kategori.id_kategori
             where nama_kategori = '$nama_kategori'
             ORDER BY id_produk DESC");
            }else{
           $queryproduk = mysqli_query($koneksi, "SELECT * FROM produk
           JOIN kategori ON produk.id_kategori=kategori.id_kategori
            ORDER BY id_produk DESC");
            }    
            while ($produk = mysqli_fetch_array($queryproduk)) {
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="admin/uploads/<?php echo $produk['foto_produk'] ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="beli.php?id=<?= $produk['id_produk']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $produk['nama_produk'] ?></a></h6>
                            <h5>Rp.<?= number_format($produk['harga_produk' ]);  ?></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="admin/uploads/logo.5.jpg" alt="">
                        <a href="https://api.whatsapp.com/send/?phone=6282392195763&text=Halo%2C+saya+ingin+memesan+jam+tangan+casio+&type=phone_number&app_absent=0" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="admin/uploads/logo.4.jpg" alt="">
                        <a href="https://api.whatsapp.com/send/?phone=6282392195763&text=Halo%2C+saya+ingin+memesan+jam+tangan+casio+&type=phone_number&app_absent=0" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


