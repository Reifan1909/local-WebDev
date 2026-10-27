<?php
function namaUser($waktu = "datang", $nama = "Boss")
{
  return "$waktu, $nama";
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
  <h1>Selamat <?= namaUser("pagi") ?></h1>
</body>

</html>