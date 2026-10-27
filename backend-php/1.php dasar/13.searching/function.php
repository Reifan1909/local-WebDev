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
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$gambar')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
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
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', gambar='$gambar' WHERE id=$id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%'";

  return query($query);
}
