<?php

// !ARRAY ASSOCIATIVE ITU DEFINISINYA SAMA SEPERTI ARRAY NUMERIK, KECUALI KEY-NYA ADALAH STRING YANG KITA BUAT SENDIRI:
$mahasiswa = [
  [
    "nama" => "Syauqi",
    "nim" => "2202041082",
    "jurusan" => "Informatika",
    "email" => "sauki084@gmail.com",
    "gambar" => "syauqi.jpg"
  ],
  [
    "nama" => "Syauqi",
    "nim" => "2202041082",
    "jurusan" => "Informatika",
    "email" => "sauki084@gmail.com",
    "gambar" => "ronaldo.jpg"
  ]
];
// echo $mahasiswa[1]["alamat"];
// !ini namanya array associative
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>DAFTAR MAHASISWA</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>" width="100" height="100">
      </li>
      <li>Nama :<?= $mhs["nama"]; ?></li>
      <li>NIM :<?= $mhs["nim"]; ?></li>
      <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
      <li>Email :<?= $mhs["email"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>