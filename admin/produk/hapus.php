<?php

include "../koneksi.php";

// Mendapatkan id_kategori dari parameter URL
$id_produk = $_GET['id_produk'];

// Membuat query untuk menghapus data berdasarkan id_kategori
$hapus = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk = '$id_produk'");

if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href='../?page=produk/index';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus');
    window.location.href='../?page=produk/index';
    </script>";
}
