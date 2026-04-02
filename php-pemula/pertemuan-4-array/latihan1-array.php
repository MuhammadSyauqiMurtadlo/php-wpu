<?php
// !Array : variable yang dapat memiliki banyak nilai
// ! elemen pada array boleh memiliki tipe data yang berbeda
// !Array juga disebut pasangan antara key dan value (key-nya adalah index yang dimulai dari 0)
// ? ini namanya array numerik karena index nya menggunakan angka

// cara lama :
$hari = array("senin", "selasa", "rabu");

// cara baru :
$bulan = ["januari", "februari", "maret"];

// menampilkan array bisa menggunakan var_dump & print_r()

var_dump($hari);
echo "<br>";
print_r($bulan); //!kalau print aja itu seperti echo

// menampilkan 1 element pada array
echo "<br>";
echo $bulan[1];
echo "</br>";

// menambahkan element baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
