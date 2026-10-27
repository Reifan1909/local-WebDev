<!-- jika user memaksa langsung membuka link latihan2.php -->
<?php
// cek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["alamat"]) || !isset($_GET["foto"])) {
  // redirect >> paksa kembali ke halaman latihan1.php
  header("Location: latihan1.php");
  exit; // wajib agar script dibawahnya tidak dieksekusi
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>
  <ul>
    <li>
      <img src="img/<?= $_GET["foto"]; ?>" alt="" style="width: 100px; height: 100px;">
    </li>
    <li>Nama: <?= $_GET["nama"]; ?></li>
    <li>Nim : <?= $_GET["nim"]; ?></li>
    <li>Alamat: <?= $_GET["alamat"]; ?></li>
  </ul>

  <br><br>
  <a href="latihan1.php">Kembali</a>
</body>

</html>