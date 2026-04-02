<?php
$mahasiswa = [["Syauqi", "2202041082", "Informatika", "sauki084@gmail.com"], ["Syauqi", "2202041082", "Informatika", "sauki084@gmail.com"]];
// !ini adalah array di dalam array
// !caranya yaitu kita bisa menggunakan kurung kotak

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
  <h1>Daftar Mahasiswa</h1>

  <!-- <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li><?= $mhs; ?></li>
    <?php endforeach; ?>
  </ul> -->

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><?= $mhs[0]; ?></li>
      <li><?= $mhs[1]; ?></li>
      <li><?= $mhs[2]; ?></li>
      <li><?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>