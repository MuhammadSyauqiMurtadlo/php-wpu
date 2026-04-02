<?php
require 'functions.php';
// cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {

  // var_dump($_POST);
  // var_dump($_FILES);
  // die;
  // ?$_POST itu digunakan untuk mengatur string, sedangkan $_FILES itu digunakan untuk mengatur file





  // cek apakah data berhasil di tambahkan atau tidak
  // ?jika data lebih dari 0, maka data berhasil di tambahkan
  if (tambah($_POST) > 0) {
    echo "
    <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'index.php';
    </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal ditambahkan');
      document.location.href = 'index.php';
    </script>
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pemain Bola</title>
</head>

<body>
  <h1>Tambah Pemain Bola</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required>
        <!-- for itu pasangan nya dengan id -->
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar" required>
      </li>
      <li>
        <label for="no_punggung">Nomer Punggung : </label>
        <input type="text" name="no_punggung" id="no_punggung" required>
      </li>
      <li>
        <label for="club">Club : </label>
        <input type="text" name="club" id="club" required>
      </li>
      <li>
        <label for="asal_negara">Asal Negara : </label>
        <input type="text" name="asal_negara" id="asal_negara" required>
      </li>
      <li>
        <label for="kontrak">Kontrak : </label>
        <input type="text" name="kontrak" id="kontrak" required>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Pemain</button>
      </li>
    </ul>
  </form>
</body>

</html>