<?<?php 

function koneksi()
{
  return mysqli_connect('localhost','root','','pw2020_96009');  
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  
  //jika datanya hanya 1
  if (mysqli_num_rows($result) == 1){
    return mysqli_fetch_assoc($result);
  }

  // jika datanya banyak
  $rows = []; // buat array kosong
  while($row = mysqli_fetch_assoc($result))
  {    
    $rows[]=$row;
  }  

  return $rows;
}

?>