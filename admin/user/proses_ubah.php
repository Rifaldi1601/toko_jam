<?php
include "../koneksi.php";

// Mengambil data dari form
$id_user = $_POST['id_user']; // ID tim yang akan diupdate
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];

// Menangani upload file foto
if ($_FILES['foto']['name'] == '') {
    $namafile = $_POST['foto_lama'];
} else {
    $namafile = $_FILES['foto']['name'];
    $namaSementara = $_FILES['foto']['tmp_name'];
    move_uploaded_file($namaSementara, '../uploads/' . $namafile);
}

// Melakukan query update ke database
$update = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', nama_lengkap='$nama_lengkap', foto='$namafile' WHERE id_user='$id_user'");


// Menampilkan pesan berdasarkan hasil query
if ($update) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../?page=user/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../?page=user/index';
    </script>";
}
