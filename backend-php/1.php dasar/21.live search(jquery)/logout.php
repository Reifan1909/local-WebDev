<?php
session_start();

$_SESSION = []; // opsional
session_unset(); // opsional
session_destroy(); // untuk menhapus semua session

// hapus cookie
setcookie('id', '', time() - 3600); // time bebas angkanya, 3600 sesuai dg dokumentasi php
setcookie('key', '', time() - 3600);

header("Location: index.php");
