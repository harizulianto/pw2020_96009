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
      <th>Nama</th>     
      <th>Aksi</th>
    </tr>
    <!-- bungkus tabel dengan perulangan data -->
    <?php 
    $i=1;
    foreach ($siswa as $s) : ?> 
    <tr>
      <td><?= $i++; ?></td> 
      <td><img src="img/<?= $s['gambar']; ?>"></td>     
      <td><?= $s['nama']; ?></td>     
      <td><a href="detil.php?id=<?= $s['ids']; ?>">Lihat Detil</a></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>