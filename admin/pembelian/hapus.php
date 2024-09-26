<?php

include "../koneksi.php";

// Mendapatkan id_tim dari parameter URL
$id_tim = $_GET['id_tim'];

// Membuat query untuk menghapus data berdasarkan id_tim
$hapus = mysqli_query($koneksi, "DELETE FROM tim WHERE id_tim = '$id_tim'");


if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href='../?page=tim';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus');
    window.location.href='../?page=tim';
    </script>";
}
