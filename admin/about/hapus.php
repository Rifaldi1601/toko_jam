<?php

include "../koneksi.php";

// Mendapatkan id_tim dari parameter URL
$id_about = $_GET['id_about'];

// Membuat query untuk menghapus data berdasarkan id_tim
$hapus = mysqli_query($koneksi, "DELETE FROM about WHERE id_about = '$id_about'");


if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href='../?page=about/index';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus');
    window.location.href='../?page=about/index';
    </script>";
}
