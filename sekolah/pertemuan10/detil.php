<?<?php 
require 'functions.php';
// ambil id dari url
$id = $_GET['id'];
// query siswa berdasarkan id
$s = query("SELECT * FROM siswa WHERE ids = $id");
//var_dump($siswa['nama']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detil Siswa</title>
</head>
<body>
  <h3>Detail Siswa</h3>
  <ul>
    <li><img src="img/<?= $s['gambar']; ?>"></li>
    <li>NIS : <?= $s['nis']; ?></li>
    <li>Nama : <?= $s['nama']; ?></li>
    <li>Email : <?= $s['email']; ?></li>
    <li>Jurusan : <?= $s['jurusan']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="latihan3.php">Kembali</a></li>
  </ul>
  
</body>
</html>