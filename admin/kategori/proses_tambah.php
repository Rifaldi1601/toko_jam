<?php

session_start();
$_SESSION['save_succes'] = 'Data Berhasil ditambahkan';

include "../koneksi.php";
// Mengambil data dari form
$nama_kategori = $_POST['nama_kategori'];


$tambah = mysqli_query($koneksi, "INSERT INTO kategori (nama_kategori ) VALUES 
             ('$nama_kategori')");

if ($tambah == TRUE) {
    echo "<script>
                          
                            window.location.href='../?page=kategori/index'
                            </script>";
} else {
    echo "<script>
                         
                            window.location.href='../?page=tambah-kategori/index'
                            </script>";
}
