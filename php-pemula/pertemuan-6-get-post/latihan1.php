<?php
// !variable scope / lingkup variable

$x = 10;

function tampilX()
{
  global $x;
  echo $x;
  // !variable x ini hanya ada didalam lingkup function (local), jika kita ingin mengambil variable yang ada di luar function, maka harus menggunakan keyword global

  // ?jadi variable ada 2 : local & global
}

tampilX();

// ! GET : untuk mengirimkan data dalam bentuk URL dan juga form(tapi datanya akan terlihat di pencarian, sedangkan post datanya tidak terlihat)
// !POST : untuk mengirimkan data dalam bentuk form
