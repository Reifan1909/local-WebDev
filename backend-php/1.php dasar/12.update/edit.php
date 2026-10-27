<?php
require 'function.php';

if (isset($_POST["submit"])) {
  if (edit($_POST) > 0) {
    echo "<script>
      alert('Data Berhasil Diedit');
      document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
      alert('Data Gagal Diedit');
      document.location.href = 'index.php';
    </script>";
  }
}

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
</head>

<body>
  <h1>Edit Data Mahasiswa</h1>
  <form action="" method="post">

    <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" required value="<?= $mhs['nama']; ?>">
      </li>
      <li>
        <label for="nim">Nim : </label>
        <input type="text" id="nim" name="nim" required value="<?= $mhs['nim']; ?>">
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" id="gambar" name="gambar" required value="<?= $mhs['gambar']; ?>">
      </li>
      <li>
        <button type="submit" name="submit">Edit Data</button>
      </li>
    </ul>

  </form>
</body>

</html>