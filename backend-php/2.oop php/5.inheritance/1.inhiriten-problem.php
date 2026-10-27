<?php

class Produk
{
  // property
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHal,
    $waktuMain,
    $type;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $waktuMain = 0, $type = "type") // nilai default opsional
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHal = $jmlHal;
    $this->waktuMain = $waktuMain;
    $this->type = $type;
  }

  // method
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    // Komik : Naruto | Yanto, Shonen jump (Rp. 20000) - 100 Hal
    $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga}) -";

    if ($this->type === "komik") {
      $str .= "{$this->jmlHal} Hal";
    } else if ($this->type === "game") {
      $str .= "{$this->waktuMain} Jam";
    }
    return $str;
  }
}


class CetakInfoProduk
{
  public function cetak(Produk $produk) // object-type(membuat object menjadi typedata sendiri dg class)
  {
    // boleh pake kurung kurawal /tidak
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

// problemnya ada di parameter kosong(0) yg banyak jika datanya banyak yg beda
$produk1 = new Produk("Naruto", "Yanto", "Shonen jump", 20000, 100, 0, "komik"); // masuk ke __construct

$produk2 = new Produk("Mobile Legends", "Anto", "Moontoon", 45000, 0, 50, "game");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

echo "<br>";
// Komik : Naruto | Yanto, Shonen jump (Rp. 20000) - 100 Hal
// Game : Mobile Legends | Anto, Moonton (Rp. 45000) - 50 Jam

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();








// notes : seteleh panah (->) tidak perlu menuliskan $ pada variable