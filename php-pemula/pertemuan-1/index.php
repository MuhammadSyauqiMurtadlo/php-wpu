<?php
// ?PHP Dasar - Sintaks PHP

// !Standar Output : echo, print, print_r, var_dump

echo "Muhammad Syauqi Murtadlo";
print "Syauqi Murtadlo";
var_dump("Syauqi Murtadlo");



// !Penulisan Sintaks PHP :
// ! PHP di dalam HTML (ini yang disarankan) -> HTML biarkan HTML dan PHP biarkan PHP
// ! HTML di dalam PHP (ini yang tidak disarankan)


// !Variabel dan Tipe Data
// Variabel
$nama = "Syauqi";
echo "Halo, Nama Saya $nama";

// !Operator Aritmatika : * - + / %
$x = 10;
$y = 20;
echo $x * $y;


// !Operator Penggabung String / concatenation / concat (.)
$nama_depan = "Syauqi";
$nama_belakang = "Murtadlo";
echo $nama_depan . " " . $nama_belakang;

// !Operator Assignment : =, +=, *=, /=, %=, .=
$x = 5;
$x += 6;
echo "ini adalah $x ";

// !Operator Perbandingan : <, >, <=, >=, ==, !=
var_dump(1 > 5);
var_dump(1 == "1");

// !Operator Identitas : ===, !=
var_dump(1 === "1");

// !Operator Logika : &&, ||, !=
$a = 30;
var_dump($a > 20 || $a % 2 == 0);
?>
<!-- PHP di dalam HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Halo, Selamat Datang <?php echo "Syauqi Murtado"; ?></h1>

  <!-- HTML di dalam PHP -->
  <?php echo "<h1>Halo, selamat datang syauqi</h1>" ?>
</body>

</html>