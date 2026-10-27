<?php

class Produk
{
  // property
  public $judul,
    $penulis,
    $penerbit;

  private $harga;
  protected $diskon = 0;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // jika ingin menampilkan property PRIVATE, maka function letak di class yg sama
  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
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
  public $jmlHal;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHal = $jmlHal;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHal} Hal"; // penerapan overriding
    return $str;
  }
}

class Game extends Produk
{
  public $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam";
    return $str;
  }

  // jika ingin menampilkan property PROTECTED, maka function letak di class yg sama atau di class CHILD
  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
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



$produk1 = new Komik("Naruto", "Yanto", "Shonen jump", 20000, 100); // masuk ke __construct

$produk2 = new Game("Mobile Legends", "Anto", "Moontoon", 45000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
