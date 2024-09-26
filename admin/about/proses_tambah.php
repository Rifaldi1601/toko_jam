<?php
include "../koneksi.php";

// Mengambil data dari form
$tentang = $_POST['tentang'];




$namafile = $_FILES['gambar_about']['name'];
$namaSementara = $_FILES['gambar_about']['tmp_name'];
move_uploaded_file($namaSementara, '../uploads/' . $namafile);


// Melakukan query update ke database
$tambah = mysqli_query($koneksi, "INSERT INTO about ( tentang, gambar_about) VALUES ( '$tentang', '$namafile')");

// Menampilkan pesan berdasarkan hasil query
if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambah');
    window.location.href='../?page=about/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambah');
    window.location.href='../?page=about/index';
    </script>";
}
