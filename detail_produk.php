 <!-- Product Details Section Begin -->
 <section class="product-details spad">
     <div class="container">
         <div class="row">
             <?php
        $slug = $_GET ['slug'];
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM produk 
                    WHERE slug='$slug'");
                    $data =  mysqli_fetch_array($query);
                    ?>
             <div class="col-lg-6 col-md-6">
                 <div class="product__details__pic">
                     <div class="product__details__pic__item">
                         <img class="product__details__pic__item--large"
                             src="admin/uploads/<?php echo $data['foto_produk'] ?>" alt="">
                     </div>
                     <div class="product__details__pic__slider owl-carousel">
                         <img data-imgbigurl="admin/uploads/<?php echo $data['foto_produk'] ?>"
                             src="admin/uploads/<?php echo $data['foto_produk'] ?>" alt="">
                         
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6">
                 <div class="product__details__text">
                     <h3><?php echo $data['nama_produk'] ?></h3>
                     <div class="product__details__rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <span>(18 reviews)</span>
                     </div>
                     <div class="product__details__price">Rp.<?= number_format($data['harga_produk' ]);  ?></div>
                     <p><?php echo $data['isi_produk']  ?></p>
                     <div class="product__details__quantity">
                         <div class="quantity">
                             <div class="pro-qty">
                                 <input type="text" value="1">
                             </div>
                         </div>
                     </div>
                     <a href="beli.php?id=<?= $data['id_produk']; ?>" class="primary-btn">ADD TO CARD</a>
                     <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                     <ul>
                         <li><b>Availability</b> <span>In Stock</span></li>
                         <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                         <li><b>Weight</b> <span>0.5 kg</span></li>
                         <li><b>Share on</b>
                             <div class="share">
                                 <a href="<?php echo $k['facebook']?>"><i class="fa fa-facebook"></i></a>
                                 <a href="<?php echo $k['instagram']?>"><i class="fa fa-instagram"></i></a>
                                 <a href="<?php echo $k['wa']?>"><i class="fa fa-whatsapp"></i></a>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-12">
                 <div class="product__details__tab">
                     <ul class="nav nav-tabs" role="tablist">
                         <li class="nav-item">
                             <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                 aria-selected="true">Description</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                 aria-selected="false">Information</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                 aria-selected="false">Reviews <span>(1)</span></a>
                         </li>
                     </ul>
                     <div class="tab-content">
                         <div class="tab-pane active" id="tabs-1" role="tabpanel">
                             <div class="product__details__tab__desc">
                                 <h6>Products Infomation</h6>
                                 <p><?php echo $data['isi_produk']  ?></p>
                                 <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                     ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                     elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                     porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                     nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                     Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
                                     porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
                                     sed sit amet dui. Proin eget tortor risus.</p>
                             </div>
                         </div>
                         <div class="tab-pane" id="tabs-2" role="tabpanel">
                             <div class="product__details__tab__desc">
                                 <h6>Products Infomation</h6>
                                 <p><?php echo $data['isi_produk']  ?></p>
                                 <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                     ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                     elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                     porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                     nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                             </div>
                         </div>
                         <div class="tab-pane" id="tabs-3" role="tabpanel">
                             <div class="product__details__tab__desc">
                                 <h6>Products Infomation</h6>
                                 <p><?php echo $data['isi_produk']  ?></p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Product Details Section End -->