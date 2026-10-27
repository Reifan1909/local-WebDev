<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

// pagination
$jumlahDataPerHalaman = 4;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); // ceil untuk membulatkan keatas
$halamanAktif = (isset($_GET['halaman'])) ? ($_GET['halaman']) : 1; // if else

$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman"); // LIMIT index-ke, jumlah data yg tampil

// // tombol cari diklik
// if (isset($_POST["cari"])) {
//   $mahasiswa = cari($_POST["keyword"]);
// }

// PR
// tombol cari diklik DAN keyword tidak kosong
$sedangCari = false;
if (isset($_POST["cari"])) {
  if (trim($_POST["keyword"])) {
    $mahasiswa = cari($_POST["keyword"]);
    $sedangCari = true; // Tandai bahwa pencarian sedang aktif
  } else {
    // Jika input kosong, reset ke halaman 1 normal
    header("Location: index.php");
    exit;
  }
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
  <a href="logout.php">Logout</a>
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
        <td><?= $no + $awalData ?></td>
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

    <tr>
      <?php if (!$sedangCari) : ?>
        <td colspan="5" style="text-align: center;">
          Hal:

          <!-- tombol back -->
          <?php if ($halamanAktif > 1) : ?>
            <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
          <?php endif; ?>

          <!-- nomor halaman -->
          <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if ($i == $halamanAktif) : ?>
              <a style="font-weight: bold; color: red;" href="index.php?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php else : ?>
              <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php endif; ?>
          <?php endfor; ?>

          <!-- tombol next -->
          <?php if ($halamanAktif < $jumlahHalaman) : ?>
            <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
          <?php endif; ?>
        </td>
      <?php endif; ?>
    </tr>
  </table>
</body>

</html>