Variable Superglobals
<!-- $_GET & $_POST -->

<?php
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
  <title>GET</title>
</head>

<body>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&alamat=<?= $mhs["alamat"]; ?>&foto=<?= $mhs["foto"]; ?>">Data Mahasiswa - <?= $mhs["nama"]; ?></a></li>
    </ul>
  <?php endforeach; ?>

</body>

</html>