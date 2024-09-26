<?php
include "../koneksi.php";

// Mendapatkan data dari form
$id_kontak = $_POST['id_kontak'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$wa = $_POST['wa'];
$notelp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

// Membuat query untuk mengubah data kontak

$ubah = mysqli_query($koneksi, "UPDATE kontak SET facebook = '$facebook', instagram='$instagram', wa='$wa', no_telp='$notelp', alamat='$alamat', email='$email' WHERE id_kontak='$id_kontak'");

if ($ubah) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../?page=kontak';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='edit.php?id_kontak=$id_kontak';
    </script>";
}
