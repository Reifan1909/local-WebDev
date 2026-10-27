<?php

class Produk
{
  // property
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  // method
  public function getLabel()
  {
    return "$this->judul, $this->penulis"; // this untuk mengakses variable diluar function
  }
}

// $produk1 = new Produk();
// $produk1->judul = "sejarah";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "sejarah";
// $produk2->tambahProperti = "wkwkw"; // properti yg tidak ada diatas juga akan jalan
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Yanto";
$produk3->penerbit = "Shonen jump";
$produk3->harga = 20000;

// echo "Komik : $produk3->judul ditulis oleh $produk3->penulis";
// echo "<br>";

// echo $produk3->getLabel();


$produk4 = new Produk();
$produk4->judul = "Mobile Legends";
$produk4->penulis = "Anto";
$produk4->penerbit = "Moontoon";
$produk4->harga = 450000;

// panggil method
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo "<br>";

// jika tanpa method
echo "Game : " . "$produk2->judul, $produk2->penulis";
