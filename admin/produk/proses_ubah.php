<?php
include "../koneksi.php";

// Mengambil data dari form
$id_produk = $_POST['id_produk']; // ID wisata yang akan diupdate
$id_kategori = $_POST['id_kategori'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$isi_produk = $_POST['isi_produk'];

// Menangani upload file foto
if ($_FILES['foto_produk']['name'] == '') {
    $namafile = $_POST['foto_lama'];
} else {
    $namafile = $_FILES['foto_produk']['name'];
    $namaSementara = $_FILES['foto_produk']['tmp_name'];
    move_uploaded_file($namaSementara, '../uploads/' . $namafile);
}

$update = mysqli_query($koneksi, "UPDATE produk SET id_kategori='$id_kategori', 
nama_produk='$nama_produk', harga_produk='$harga_produk', isi_produk='$isi_produk', 
foto_produk='$namafile' WHERE id_produk='$id_produk'");

// Menampilkan pesan berdasarkan hasil query
if ($update) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../?page=produk/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../?page=produk/index';
    </script>";
}
