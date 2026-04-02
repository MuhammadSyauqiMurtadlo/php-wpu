<?php
// !mengecek apakah tidak ada data di $_GET
if (
  !isset($_GET["nama"]) ||
  !isset($_GET["nim"]) ||
  !isset($_GET["jurusan"]) ||
  !isset($_GET["email"]) ||
  !isset($_GET["gambar"])
) {
  // redirect
  header("Location: latihan2.php");
  exit;
}
// !ini akan menolak dan akan melempar kembali ke latihan2.php


// (!isset : belum pernah dibuat)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h1>MAHASISWA</h1>
  <ul>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nim"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><img src="img/<?= $_GET["gambar"]; ?>" width="100" height="100"></li>
    <!-- jadi fungsi $_GET adalah menangkap data yang telah dikirimkan oleh latihan2.php -->

    <!-- METODE REQUEST GET ADALAH METODE MENGIRIMKAN DATA DENGAN MENGGUNAKAN URL YANG KEMUDIAN DATA ITU KITA TANGKAP DENGAN VARIABLE SUPERGLOBAL YAITU $_GET -->
  </ul>
  <a href="latihan2.php">kembali ke daftar mahasiswa</a>
</body>

</html>