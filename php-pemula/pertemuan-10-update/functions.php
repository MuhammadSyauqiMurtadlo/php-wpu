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

function tambah($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $nama = htmlspecialchars($data["nama"]);
  $gambar = htmlspecialchars($data["gambar"]);
  $no_punggung = htmlspecialchars($data["no_punggung"]);
  $club = htmlspecialchars($data["club"]);
  $asal_negara = htmlspecialchars($data["asal_negara"]);
  $kontrak = htmlspecialchars($data["kontrak"]);
  // !htmlspecialchars() digunakan agar users yang mengetik kan tag html tidak terbaca

  // query insert data
  $query = "INSERT INTO striker
              VALUES ('', '$nama', '$gambar', '$no_punggung', '$club', '$asal_negara', '$kontrak');
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM striker WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $gambar = htmlspecialchars($data["gambar"]);
  $no_punggung = htmlspecialchars($data["no_punggung"]);
  $club = htmlspecialchars($data["club"]);
  $asal_negara = htmlspecialchars($data["asal_negara"]);
  $kontrak = htmlspecialchars($data["kontrak"]);
  // !htmlspecialchars() digunakan agar users yang mengetik kan tag html tidak terbaca

  // query insert data
  $query = "UPDATE striker SET
               nama = '$nama',
               gambar = '$gambar',
               no_punggung = '$no_punggung',
               club = '$club',
               asal_negara = '$asal_negara',
               kontrak = '$kontrak'
               WHERE id = $id
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
