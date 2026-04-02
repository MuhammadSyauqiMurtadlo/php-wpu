<?php
require 'functions.php';

$player = query("SELECT * FROM striker");

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
          <a href="">ubah</a> |
          <a href="">hapus</a>
        </td>
        <td><?= $row["nama"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="70"></td>
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