<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

if (isset($_POST["submit"])) {

  if (tambah($_POST) > 0) {
    echo "<script>
      alert('Data Berhasil Ditambahkan');
      document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
      alert('Data Gagal Ditambahkan');
      document.location.href = 'index.php';
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>
  <!-- tambah enctype untuk input type file, sehingga panggil gambar harus menggunakan $_FILES -->
  <form action="" method="post" enctype="multipart/form-data">

    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" required>
      </li>
      <li>
        <label for="nim">Nim : </label>
        <input type="text" id="nim" name="nim" required>
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <!-- type data jadi file -->
        <input type="file" id="gambar" name="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>
    </ul>

  </form>
</body>

</html>