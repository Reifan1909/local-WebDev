<?php
// array

// cara lama
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["januari", "februari"];
$arr = [123, "tulisan", false]; // bebas mau menggabung tipe data

// menampilkan array
// var_dump() atau print_r()   ->  biasanya untuk debug

// var_dump($hari);
// echo "<br><br>";
// print_r($hari);
// echo "<br><br>";

// menampilkan 1 elemen
// echo $arr[0];

// menambah elemen pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br><br>";
var_dump($hari);
