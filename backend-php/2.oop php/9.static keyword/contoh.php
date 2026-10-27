<?php

// CONTOH 1

// class ContohStatic
// {
//   public static $angka = 1;

//   public static function halo()
//   {
//     // return "halo" . $this->angka ." kali"; // tidak bisa, ganti this dengan self::
//     return "halo " . self::$angka++ . " kali"; // tidak bisa, ganti this dengan self
//   }
// }

// // cara memanggil static
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


// CONTOH 2

class Contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "halo " . self::$angka++ . " kali <br>";
  }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";

// ketika $angka menggunakan static, maka akan lanjut halo 4 kali, tidak mulai dari 1
$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
