<?php

require 'pfunction.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan</title>
</head>

<body>
  <table border="1" cellspadding="10" cellspacing="0">

    <tr>
      <th>No</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nim</th>
      <th>Nama</th>
    </tr>

    <?php $no = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?= $no; ?></td>
        <td>
          <a href="">Edit</a> |
          <a href="">Hapus</a>
        </td>
        <td><img width="100px" src="img/<?= $row["gambar"]; ?>" alt=""></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
      </tr>
      <?php $no++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>