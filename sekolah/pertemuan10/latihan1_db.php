<?php 
  
  $conn = mysqli_connect('localhost','root','','pw2020_96009');
  //var_dump($conn); //--> test
  $query = mysqli_query($conn,"select * from siswa");
  //var_dump($query); // test
  //$row = mysqli_fetch_row($query); // array numerik
  //$row = mysqli_fetch_assoc($query); // array associate - field tabel
  //$row = mysqli_fetch_array($query); // array numerik + array associate
  //var_dump($row); // test
  $rows = []; // buat array kosong
  while($row = mysqli_fetch_assoc($query)){
    // loop disini
    $rows[]=$row;
  }

  // Tampung ke variabel siswa
  $siswa = $rows;
  //var_dump($siswa);
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