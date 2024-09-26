<?php
include "../koneksi.php";

// Mengambil data dari form
$id_about = $_POST['id_about']; // ID tim yang akan diupdate
$tentang = $_POST['tentang'];


// Menangani upload file foto
if ($_FILES['gambar_about']['name'] == '') {
    $namafile = $_POST['gambar_about_lama'];
} else {
    $namafile = $_FILES['gambar_about']['name'];
    $namaSementara = $_FILES['gambar_about']['tmp_name'];
    move_uploaded_file($namaSementara, '../uploads/' . $namafile);
}

// Melakukan query update ke database
$update = mysqli_query($koneksi, "UPDATE about SET tentang='$tentang',gambar_about='$namafile' WHERE id_about='$id_about'");


// Menampilkan pesan berdasarkan hasil query
if ($update) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../?page=about/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../?page=about/index';
    </script>";
}
