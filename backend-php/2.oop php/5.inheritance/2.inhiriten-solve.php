<?php

class Produk
{
  // property
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHal,
    $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $waktuMain = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHal = $jmlHal;
    $this->waktuMain = $waktuMain;
  }

  // method
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";

    return $str;
  }
}

// penerapan inheriten
class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga}) - {$this->jmlHal} Hal";
    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga}) - {$this->waktuMain} Jam";
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



$produk1 = new Komik("Naruto", "Yanto", "Shonen jump", 20000, 100, 0); // masuk ke __construct

$produk2 = new Game("Mobile Legends", "Anto", "Moontoon", 45000, 0, 50);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

echo "<br>";
// Komik : Naruto | Yanto, Shonen jump (Rp. 20000) - 100 Hal
// Game : Mobile Legends | Anto, Moonton (Rp. 45000) - 50 Jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();








// notes : seteleh panah (->) tidak perlu menuliskan $ pada variable