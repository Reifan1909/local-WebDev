<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

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
  <style>
    .loader {
      width: 20px;
      position: absolute;
      top: 144px;
      left: 250px;
      display: none;
    }
  </style>
</head>

<body>
  <a href="logout.php">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>
  <h1>Daftar Mahasiswa</h1>
  <a href="tambah.php">Tambah Data</a>

  <br><br>
  <form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="Searching" autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombolCari">Cari!</button>

    <img src="img/loader.gif" class="loader">

  </form>
  <br>

  <div id="container">
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
  </div>

  <!-- wajib dahulukan jquery, bisa juga tarok di head -->
  <script src="js/jquery-4.0.0.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>