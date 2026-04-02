<?php
// !variable SUPERGLOBAL merupakan array associative
// variable SUPERGLOBAL : $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV

// $_GET["nama"] = "Muhammad Syauqi Murtadlo";
// ?kita juga bisa menampilkan $_GET langsung lewat pencarian caranya kita beri tanda tanya (?) kemudian key dan value, jika ingin menambahkan data lagi bisa kita beri tanda &
// var_dump($_GET);
// !TANDA TANYA (?) ARTINYA KITA AKAN MENGIRIMKAN DATA



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
    "nama" => "Mas Jazuli",
    "nim" => "0011223344",
    "jurusan" => "Ilmu Hadist",
    "email" => "jazuli123@gmail.com",
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
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li>
        <a href="latihan3.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
          <?= $mhs["nama"]; ?></a>
        <!-- ini artinya kita telah mengirimkan data ke latihan3.php, setelah mengirim tugas kita adalah menangkap data di file latihan3.php -->
      </li>
      <!-- KITA AKAN PINDAH KE FILE latihan3.php sekaligus mengirim data -->

    <?php endforeach; ?>
  </ul>
</body>

</html>