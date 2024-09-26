<?php

include "../koneksi.php";

// Mendapatkan id_kontak dari parameter URL
$id_kontak = $_GET['id_kontak'];

// Membuat query untuk menghapus data berdasarkan id_kontak
$hapus = mysqli_query($koneksi, "DELETE FROM kontak WHERE id_kontak = '$id_kontak'");


if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href='../?page=kontak';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus');
    window.location.href='../?page=kontak';
    </script>";
}
