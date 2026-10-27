<?php

// $conn = mysqli_connect("localhost", "root", "", "phpdasar");
// if (isset($_POST["submit"])) {
//   $nim = $_POST["nim"];
//   $nama = $_POST["nama"];
//   $gambar = $_POST["gambar"];

//   $query = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$gambar')";
//   mysqli_query($conn, $query);

//   // cek data berhasil ditambahklan/tidak
//   if (mysqli_affected_rows($conn) > 0) {
//     echo "Berhasil";
//   } else {
//     echo " gagal";
//     echo "<br>";
//     echo mysqli_error($conn);
//   }
// }

require 'function.php';

if (isset($_POST["submit"])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('Data Berhasil Ditambahkan');
      document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
      alert('Data Gagal Ditambahkan');
      document.location.href = 'index.php';
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="" method="post">

    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" required>
      </li>
      <li>
        <label for="nim">Nim : </label>
        <input type="text" id="nim" name="nim" required>
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" id="gambar" name="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>
    </ul>

  </form>
</body>

</html>