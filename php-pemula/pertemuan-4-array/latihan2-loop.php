<?php
// !pengulangan pada array menggunakan for / foreach

$angka = [3, 2, 15, 38, 98, 65, 20];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
      transition: 1s;

    }

    .kotak:hover {
      transform: rotate(360deg);
      border-radius: 50%;
    }

    .clear {
      clear: both;
    }
  </style>
</head>

<body>
  <!-- Loop menggunakan For -->
  <?php for ($i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?= $angka[$i]; ?></div>
  <?php } ?>

  <div class="clear"></div>
  <!-- Loop menggunakan Foreach -->
  <!-- foreach adalah pengulagan khusus array -->
  <?php foreach ($angka as $a) { ?>
    <div class="kotak"><?= $a; ?></div>
  <?php }; ?>

  <div class="clear"></div>

  <?php foreach ($angka as $a) :  ?>
    <div class="kotak"><?= $a; ?></div>
  <?php endforeach; ?>


</body>

</html>