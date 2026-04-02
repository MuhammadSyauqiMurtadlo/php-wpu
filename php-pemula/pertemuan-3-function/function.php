<?php
function salam($waktu = "Datang", $nama = "Admin")
{
  return "Selamat $waktu $nama";
  // !function biasanya itu mengembalikan nilai
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Function</title>
</head>

<body>
  <h1><?= salam("Pagi, ", "Syauqi"); ?></h1>
  <!-- JIKA PARAMETER DI ATAS INI KOSONG, MAKA YANG KELUAR ADALAH PARAMETER DEFAULT NYA ($waktu = "Datang", $nama = "Admin") -->
</body>

</html>