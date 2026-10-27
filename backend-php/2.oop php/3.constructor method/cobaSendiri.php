<?php

class Mobil
{

  public $namaMobil,
    $mesinMobil,
    $harga;

  public function __construct($namaMobil = "Nama Mobil", $mesinMobil = "0000cc", $harga = 0)
  {
    $this->namaMobil = $namaMobil;
    $this->mesinMobil = $mesinMobil;
    $this->harga = $harga;
  }

  public function labelIklan()
  {
    return "harga mobil $this->namaMobil adalah $this->harga";
  }
}

$mobilAvanza = new Mobil("Avanza", "1500cc", 290000000);
$mobilInova = new Mobil("Inova", "2500cc", 590000000);

echo $mobilAvanza->labelIklan();
