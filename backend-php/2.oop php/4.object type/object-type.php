<?php

class Produk
{
  // property
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) // nilai default opsional
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // method
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
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


$produk1 = new Produk("Naruto", "Yanto", "Shonen jump", 20000); // masuk ke __construct

$produk2 = new Produk("Mobile Legends", "Anto", "Moontoon", 45000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);


// notes : seteleh panah (->) tidak perlu menuliskan $ pada variable