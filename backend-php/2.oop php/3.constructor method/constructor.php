<?php

class Produk
{
  // property
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  // function yg otomatis jalan tanpa dipanggil
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
    return "$this->judul, $this->penulis"; // this untuk mengakses variable diluar function
  }
}

$produk1 = new Produk("Naruto", "Yanto", "Shonen jump", 20000); // masuk ke __construct

$produk2 = new Produk("Mobile Legends", "Anto", "Moontoon", 45000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();


// notes : seteleh panah (->) tidak perlu menuliskan $ pada variable