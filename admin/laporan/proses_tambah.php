<?php
include "../koneksi.php";

// Mengambil data dari form
$id_kategori = $_POST['id_kategori'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$isi_produk = $_POST['isi_produk'];
$slug = str_replace('+', '-', urlencode($nama_produk));



$namafile = $_FILES['foto_produk']['name'];
$namaSementara = $_FILES['foto_produk']['tmp_name'];
move_uploaded_file($namaSementara, '../uploads/' . $namafile);


$tambah = mysqli_query($koneksi, "INSERT INTO produk 
(id_kategori, nama_produk, harga_produk, isi_produk, foto_produk,slug) 
VALUES ('$id_kategori', '$nama_produk', '$harga_produk', '$isi_produk', '$namafile', '$slug')");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambah');
    window.location.href='../?page=wisata/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambah');
    window.location.href='../?page=wisata/index';
    </script>";
}
