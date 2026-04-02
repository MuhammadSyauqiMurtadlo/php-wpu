<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data pemain berdasarkan id
$pemain = query("SELECT * FROM striker WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {




  // cek apakah data berhasil di ubah atau tidak
  // ?jika data lebih dari 0, maka data berhasil di tambahkan
  if (ubah($_POST) > 0) {
    echo "
    <script>
      alert('data berhasil diubah');
      document.location.href = 'index.php';
    </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal diubah');
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
  <title>Ubah Pemain Bola</title>
</head>

<body>
  <h1>Ubah Pemain Bola</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $pemain["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $pemain["gambar"]; ?>">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required value="<?= $pemain["nama"]; ?>">
        <!-- for itu pasangan nya dengan id -->
      </li>
      <li>
        <label for="gambar">Gambar : </label> <br>
        <img src="img/<?= $pemain['gambar']; ?>" width="40"> <br>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <label for="no_punggung">Nomer Punggung : </label>
        <input type="text" name="no_punggung" id="no_punggung" required value="<?= $pemain["no_punggung"]; ?>">
      </li>
      <li>
        <label for="club">Club : </label>
        <input type="text" name="club" id="club" required value="<?= $pemain["club"]; ?>">
      </li>
      <li>
        <label for="asal_negara">Asal Negara : </label>
        <input type="text" name="asal_negara" id="asal_negara" required value="<?= $pemain["asal_negara"]; ?>">
      </li>
      <li>
        <label for="kontrak">Kontrak : </label>
        <input type="text" name="kontrak" id="kontrak" required value="<?= $pemain["kontrak"]; ?>">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Pemain</button>
      </li>
    </ul>
  </form>
</body>

</html>