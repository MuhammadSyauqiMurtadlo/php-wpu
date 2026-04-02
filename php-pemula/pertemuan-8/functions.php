<?php
// !koneksi ke databse
$conn = mysqli_connect("localhost", "root", "", "pemain_bola");
// ?urutan parameter nya :nama host - username mysql - password - nama database

function query($query)
{
  global $conn;
  // todo variable conn yg ada didalam function ini tidak bisa mengambil variable conn yg ada diluar function, cara nya agar bisa mengambil variable yg ada diluar fanction yaitu dengan memberi global didalam fanction
  $result = mysqli_query($conn, $query);
  // ?urutan parameter nya (ada 2) : koneksi ke database - query
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
