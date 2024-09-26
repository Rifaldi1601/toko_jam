<?php

include "../koneksi.php";
$nama_facebook = $_POST['facebook'];
$nama_instagram = $_POST['instagram'];
$nama_wa = $_POST['wa'];
$nama_notelp = $_POST['no_telp'];
$nama_alamat = $_POST['alamat'];
$nama_email = $_POST['email'];

// Memperbaiki query dengan menambahkan kurung tutup yang hilang
$tambah = mysqli_query($koneksi, "INSERT INTO kontak (facebook, instagram, wa, no_telp, alamat, email) VALUES ('$nama_facebook', '$nama_instagram', '$wa', '$nama_notelp', '$nama_alamat', '$nama_email)");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    window.location.href='../?page=kontak';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Ditambahkan ');
    window.location.href='../?page=tambah-kontak';
    </script>";
}
