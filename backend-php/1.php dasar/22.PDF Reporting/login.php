<?php
session_start();
require 'function.php';

// cek cookie - tidak aman
// if (isset($_COOKIE["login"])) {
//   if ($_COOKIE["login"] == true) {
//     $_SESSION["login"] = true;
//   }
// }

// cek cookie - aman
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM user WHERE id=$id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan useename
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

// cek sesion
if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}


if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");


  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION["login"] = true;

      // cek remember me
      if (isset($_POST["remember"])) {
        // buat cookie - tidak aman
        // setcookie('login', 'true', time() + 60); // 3 parameter(nama, isi, waktu[detik])

        // buat cookie - aman
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username'], time() + 60));
      }

      header("Location: index.php");
      exit;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
</head>

<body>
  <h1>Halamana Login</h1>

  <form action="" method="post">
    <ul>
      <li>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <label for="remember">Ingat Saya</label>
        <input type="checkbox" name="remember" id="remember">
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
      <?php if (isset($error)) : ?>
        <p style="font-style: italic; color: red;">username / password salah!</p>
      <?php endif; ?>
    </ul>
  </form>
</body>

</html>