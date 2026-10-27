<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Yanto", "Shonen jump", 20000, 100); // masuk ke __construct
// $produk2 = new Game("Mobile Legends", "Anto", "Moontoon", 45000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// cara 1
// new App\Service\User(); // cara manggil class nya
// new App\Produk\User(); // cara manggil class nya

// cara 2 - memberikan alias
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
new ProdukUser();
