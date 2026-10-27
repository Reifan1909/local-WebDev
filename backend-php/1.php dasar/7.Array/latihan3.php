<?php
$mahasiswa = [
  ["repan", "240069", "Sistem Informasi", "repan@gmail.com"],
  ["pawzan", "240070", "Sistem Informasi", "pawzan@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs1) : ?>
      <li>Nama : <?= $mhs1[0]; ?></li>
      <li>Nim : <?= $mhs1[1]; ?></li>
      <li>Jurusan : <?= $mhs1[2]; ?></li>
      <li>Email : <?= $mhs1[3]; ?></li>
      <br>
    <?php endforeach; ?>
  </ul>
</body>

</html>