<?php
usleep(400000); // delay 0.4 detik untuk mencoba animasi loader

require '../function.php';
$keyword = $_GET["keyword"]; // dari script.js ajax
$query =  "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%'";
$mahasiswa = query($query);

?>

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