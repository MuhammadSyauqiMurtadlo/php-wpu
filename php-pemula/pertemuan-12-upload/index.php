<?php
require 'functions.php';

$player = query("SELECT * FROM striker");
//? ORDER BY id ASC = digunakan untuk mengurutkan data yang ada di dalam table

// tombol cari ditekan
if (isset($_POST["cari"])) {
  $player = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemain Bola</title>
</head>

<body>
  <h1>Pemain Bola</h1>

  <a href="tambah.php">Tambah Pemain Bola</a>
  <br><br>

  <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari !</button>
  </form>
  <!-- atribut 'autofocus' digunakan ketika halaman di refresh, maka cursor pencarian akan otomatis langsung muncul -->
  <!-- atribut 'autocomplete' digunakan untuk menghilangkan history pencarian -->
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Nama</th>
      <th>Gambar</th>
      <th>Nomer Punggung</th>
      <th>Club</th>
      <th>Asal Negara</th>
      <th>Kontrak</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($player as $row) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah anda yakin ingin menghapusnya ?')">hapus</a>
        </td>
        <td><?= $row["nama"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="70" height="50"></td>
        <td><?= $row["no_punggung"]; ?></td>
        <td><?= $row["club"]; ?></td>
        <td><?= $row["asal_negara"]; ?></td>
        <td><?= $row["kontrak"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>