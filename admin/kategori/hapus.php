<?php
// Sisipkan File Koneksi
include "../koneksi.php";

$id_kategori = $_GET['id_kategori'];

// Query Insert ke Database
$hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id_kategori'");

// Jika Query berhasil
if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus')
    window.location.href='../?page=kategori/index'
    </script>";
    // Jika Query gagal
} else {
    echo "<script>
    alert('Data Gagal Dihapus')
    window.location.href='../?page=tambah-kategori/index'
    </script>";
}
