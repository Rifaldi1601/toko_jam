<?php  
  session_start();
  $koneksi = new mysqli("localhost", "root", "","toko_jam");

  // if (!isset($_SESSION["keranjang"])) {
  //   echo "<script>alert('Pilih Produk Dulu Baru Login');</script>";
  //       echo "<script>location='index.php';</script>";
  //  } 
 
 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets_login/css/global.css">

    <title>Store Casio</title>
  </head>
  <body>
 
<!-- KONTEN -->


  <section class="container-fluid">

      <section class="row justify-content-center">

        <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container" method="POST">
              <div class="form-group row">
                  <label for="staticEmail" >Email</label>
                  <input type="email" class="form-control"  id="staticEmail" placeholder="email@example.com" name="email">
              </div>

              <div class="form-group row">
                  <label for="inputPassword" >Password</label>
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
              </div>

              <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
              <a href="daftar.php" class="btn btn-success btn-block">Daftar</a>
          </form>
        </section>
        
      </section>
    
  </section>
<!-- KONTEN -->

<?php 

    if (isset($_POST["login"]) && empty($_SESSION["keranjang"])) {
        
         $email = $_POST["email"];
         $password = $_POST["password"];

         $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email='$email' AND password='$password'");
         $akunygcocok = $ambil->num_rows;

         if ($akunygcocok == 1) {
           $akun = $ambil->fetch_assoc();
           $_SESSION["pelanggan"] = $akun;
           echo "<script>alert('Selamat Datang di Toko Kami');</script>";
           echo "<script>location='index.php';</script>";  
         } else {
            echo "<script>alert('Anda Gagal Login, Periksa Username atau Password Anda');</script>";
            echo "<script>location='login.php';</script>";
         }

        

    } else if (isset($_POST["login"]) && isset($_SESSION["keranjang"])) {
         $email = $_POST["email"];
         $password = $_POST["password"];

         $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email='$email' AND password='$password'");
         $akunygcocok = $ambil->num_rows;

         if ($akunygcocok == 1) {
           $akun = $ambil->fetch_assoc();
           $_SESSION["pelanggan"] = $akun;
           echo "<script>alert('Selamat Datang di Toko Kami');</script>";
           echo "<script>location='checkout.php';</script>";  
         } else {
            echo "<script>alert('Anda Gagal Login, Periksa Username atau Password Anda');</script>";
            echo "<script>location='login.php';</script>";
         }
    } else {

    }

 ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>