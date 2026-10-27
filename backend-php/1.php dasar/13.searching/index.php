<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari diklik
if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}
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
  <a href="tambah.php">Tambah Data</a>

  <br><br>
  <form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="Searching" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

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
          <a href="edit.php?id=<?= $mhs["id"]; ?>">Edit</a> |
          <a href=" hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a>
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