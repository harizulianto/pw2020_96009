<?php 
  require 'functions.php';
  // Tampung ke variabel siswa
  $siswa = query("SELECT * FROM siswa");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Daftar Siswa</title>
</head>
<body>
  <h3>Daftar Siswa </h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th># </th>
      <th>Gambar</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <!-- bungkus tabel dengan perulangan data -->
    <?php 
    $i=1;
    foreach ($siswa as $s) : ?> 
    <tr>
      <td><?= $i++; ?></td> 
      <td><img src="img/<?= $s['gambar']; ?>"></td>
      <td><?= $s['nis']; ?></td>
      <td><?= $s['nama']; ?></td>
      <td><?= $s['email']; ?></td>
      <td><?= $s['jurusan']; ?></td>
      <td>
      <a href="">Ubah</a> |
      <a href="">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>