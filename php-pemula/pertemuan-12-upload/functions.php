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

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

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

function upload()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar diupload
  if ($error === 4) {
    echo "<script>
    alert('pilih gambar terlebih dahulu');
    </script>";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
    alert('yang anda upload bukan gambar');
    </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
    alert('ukuran gambar terlalu besar'); 
    </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
  return $namaFileBaru;
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
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }
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

function cari($keyword)
{
  $query = "SELECT * FROM striker WHERE
             nama LIKE '%$keyword%' OR
             no_punggung LIKE '%$keyword%' OR
             club LIKE '%$keyword%' OR
             asal_negara LIKE '%$keyword%' OR
             kontrak LIKE '%$keyword%'
              ";
  return query($query);
}
