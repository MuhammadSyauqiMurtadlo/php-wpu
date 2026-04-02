<?php
// !koneksi ke databse
$conn = mysqli_connect("localhost", "root", "", "pemain_bola");
// ?urutan parameter nya :nama host - username mysql - password - nama database

// !ambil data dari table striker / query data striker
$result = mysqli_query($conn, "SELECT * FROM striker");
// ?urutan parameter nya (ada 2) : koneksi ke database - query

// !ambil data (fetch) striker dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() //mengembalikan keduanya
// mysql_fetch_object()

// while ($str = mysqli_fetch_array($result)) {
//   var_dump($str);
// }
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
      <th>Nama</th>
      <th>Nomer Punggung</th>
      <th>Club</th>
      <th>Asal Negara</th>
      <th>Kontrak</th>
    </tr>
    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["no_punggung"]; ?></td>
        <td><?= $row["club"]; ?></td>
        <td><?= $row["asal_negara"]; ?></td>
        <td><?= $row["kontrak"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endwhile ?>
  </table>
</body>

</html>