<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan produk</title>
</head>

<body>

    <center style="margin-bottom: 30px;">
        <h2>Laporan produk</h2>
        <?php echo date('D,d M Y', strtotime($_POST['tgl_mulai'])) ?> 
        s/d 
        <?php echo date('D,d M Y', strtotime($_POST['tgl_mulai'])) ?>
    </center>
    <table border="1" style="border-collapse: collapse; width:85%;
    text-align:center;">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>nama_produk</th>
            <th>Foto Produk</th>
            <th>Isi Wisata</th>
            <th>Harga produk</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include "../../koneksi.php";
            $no = 1;
            $laporan = mysqli_query($koneksi,"SELECT * FROM produk
            JOIN kategori ON produk.id_kategori=kategori.id_kategori
            WHERE tgl_wisata BETWEEN '$_POST[tgl_mulai]' AND  '$_POST[tgl_sampai]' ORDER BY id_produk DESC");
            while ($data= mysqli_fetch_array($laporan)) {
          ?>
            <td> <?php echo $no++ ?></td>
            <td><?php echo $data['nama_kategori']?></td>
            <td><?php echo $data['nama_produk']?></td>
            <td> <img width="100" src="../../admin/uploads/<?php echo $data['foto_produk']?>" alt="">
            </td>
            <td><?php echo substr($data['isi_produk'],0,50)?></td>
            <td>Rp.<?= number_format($data['harga_produk' ]);  ?></td>           
            
            <?php } ?>
        </tbody>
    </table>
<br><br><br>
<div style="position:absolute; right: 70px;">

    padang, <?= date('d M Y') ?>
    <br><br><br>
    pimpinan
</div>
<script>
    window.print()
</script>
</body>
</html>