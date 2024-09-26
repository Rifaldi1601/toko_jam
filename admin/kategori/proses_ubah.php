<?php

session_start();
$_SESSION['update_succes'] = 'Data Berhasil diubah';

include "../koneksi.php";

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];


$ubah = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE
             id_kategori='$id_kategori'");

if ($ubah) {
    echo "<script>
                            alert('Berita Berhasil Diubah');
                            window.location.href='../?page=kategori/index'
                            </script>";
} else {
    echo "<script>
                            alert('Berita Gagal Diubah);
                            window.location.href='../?page=tambah-kategori/index'
                            </script>";
}
