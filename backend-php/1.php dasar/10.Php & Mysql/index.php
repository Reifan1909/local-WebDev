<?php

// koneksi
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// ambil data
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row()     // mengembalikan array numerik
// mysqli_fetch_assoc()   // mengembalikan array associative RECOMENDED
// mysqli_fetch_array()   // mengembalikan array numerik/assoc
// mysqli_fetch_object()  // mengembalikan array object, ex: ($mhs->"nama")

// while ($mhs = mysqli_fetch_assoc($result)) {
//   var_dump($mhs["nama"]);
// }


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
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $no ?></td>
        <td>
          <a href="">Edit</a> |
          <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="100px"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nim"]; ?></td>
      </tr>
      <?php $no++; ?>
    <?php endwhile; ?>


  </table>
</body>

</html>