<!-- Array asosiatif -->


<?php
// $siswa = [
//   ["Reifan", "240069", "Payakumbuh"],
//   ["Dimas", "240070", "Tebo"],
//   ["Radit", "240071", "Solok"]
// ];

$mahasiswa = [
  [
    "nama" => "Reifan",
    "nim" => "240069",
    "alamat" => "Payakumbuh",
    "foto" => "reifan.jpg"
  ],
  [
    "nama" => "Dimas",
    "nim" => "240070",
    "alamat" => "Tebo",
    "foto" => "dimas.jpg"
  ],
  [
    "nama" => "Radit",
    "nim" => "240071",
    "alamat" => "Solok",
    "foto" => "radit.jpg"
  ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pp</title>
</head>

<body>
  <!-- <?php foreach ($siswa as $sw) : ?>
  <ul>
    <li>Nama: <?= $sw[0]; ?></li>
    <li>Nisn : <?= $sw[1]; ?></li>
    <li>Alamat: <?= $sw[2]; ?></li>
  </ul>
  <?php endforeach ?> -->

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["foto"]; ?>" alt="" style="width: 100px; height: 100px;">
      </li>
      <li>Nama: <?= $mhs["nama"]; ?></li>
      <li>Nim : <?= $mhs["nim"]; ?></li>
      <li>Alamat: <?= $mhs["alamat"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>