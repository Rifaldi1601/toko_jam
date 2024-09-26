<?php
include "../koneksi.php";

// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];



$namafile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
move_uploaded_file($namaSementara, '../uploads/' . $namafile);


// Melakukan query update ke database
$tambah = mysqli_query($koneksi, "INSERT INTO user ( username, password, nama_lengkap, foto) VALUES ( '$username', '$password', '$nama_lengkap', '$namafile')");

// Menampilkan pesan berdasarkan hasil query
if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambah');
    window.location.href='../?page=login/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambah');
    window.location.href='../?page=login/index';
    </script>";
}
