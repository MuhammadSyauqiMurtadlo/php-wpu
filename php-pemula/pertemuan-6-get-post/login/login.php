<?php
// !cek apakah tombol sudah ditekan apa belum
if (isset($_POST["submit"])) {
  // !cek username & password
  if ($_POST["username"] == "syauqi murtadlo" && $_POST["password"] == "081233970793") {
    // !jika benar, redirect ke halaman admin
    header("Location: admin.php");
    exit;
  } else {
    // !jika salah, tampilkan pesan kesalahan
    $error = true;
  }
}
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
  <h1>Login Admin</h1>

  <?php if (isset($error)) : ?>
    <p style="color: red; font-style:italic">Username / Password salah</p>
  <?php endif; ?>

  <ul>
    <form action="" method="post">
      <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <button type="submit" name="submit">Login</button>
      </li>
      <!-- atribut for pada tag label dan atribut id pada tag input itu digunakan agar antara label dan input bisa terhubung -->
    </form>
  </ul>
</body>

</html>