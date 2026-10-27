<?php
session_start();

$_SESSION = []; // opsional
session_unset(); // opsional
session_destroy(); // untuk menhapus semua session

header("Location: index.php");
