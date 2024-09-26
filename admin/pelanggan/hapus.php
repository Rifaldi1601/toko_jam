<?php

include "../koneksi.php";

// Mendapatkan id_tim dari parameter URL
$id_user = $_GET['id_user'];

// Membuat query untuk menghapus data berdasarkan id_tim
$hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id_user'");


if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href='../?page=user/index';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus');
    window.location.href='../?page=user/index';
    </script>";
}
