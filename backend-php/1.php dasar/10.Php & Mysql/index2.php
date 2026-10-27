<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Nim</th>
    </tr>

    <?php $no = 1 ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $no ?></td>
        <td>
          <a href="">Edit</a> |
          <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $mhs["gambar"]; ?>" alt="" width="100px"></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["nim"]; ?></td>
      </tr>
      <?php $no++; ?>
    <?php endforeach; ?>


  </table>
</body>

</html>