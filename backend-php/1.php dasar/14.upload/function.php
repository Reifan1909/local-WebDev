<?php

// koneksi
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query); // $query nya dari pemangggil
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $nim = htmlspecialchars($data["nim"]);
  $nama = htmlspecialchars($data["nama"]);
  // $gambar = htmlspecialchars($data["gambar"]);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false; //insertnya tidak akan dijalankan, karna false = 0
  }



  $query = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$gambar')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{
  // name, size, error, tmp_name itu bawaan, bisa cek di var_dump
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yg diupload
  if ($error === 4) { // 4 = file belum di input
    echo "<script>
            alert('pilih gambar terlebih dahulu!')
          </script>";
    return false;
  }

  // cek apaklah yg diup adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile); // explode untuk memisahkan extensi menjadi array yg terpecah
  $ekstensiGambar = strtolower(end($ekstensiGambar)); // strtolower memaksa menjjadi huruh=f kecil; end untuk mengambil array paling akhir

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) { // in_array buat cek apakah ada string didalam array
    echo "<script>
            alert('yang anda upload bukan gambar!')
          </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) { // 1mb
    echo "<script>
            alert('ukuran gambar terlalu besar!')
          </script>";
    return false;
  }

  // lolos pengecekan, tinggal upload
  // generate nama gambar baru
  $namaFileBaru = uniqid(); // generate karakter random
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;

  $id = $data["id"];
  $nim = htmlspecialchars($data["nim"]);
  $nama = htmlspecialchars($data["nama"]);
  $gambarLama = $data["gambarLama"];

  // cek apakah user pilih gambarBaru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }


  $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', gambar='$gambar' WHERE id=$id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%'";

  return query($query);
}
