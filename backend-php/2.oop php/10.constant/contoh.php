<?php

// cara 1
define('NAMA', 'Reifan'); // name pake HURUF BESAR untuk membedakan dengan variable
echo NAMA; // tanpa $
echo "<br>";

// cara 2
const UMUR = 32;
echo UMUR; // tanpa $
echo "<hr>";

// contoh pd OOP
class Coba
{
  const NAMA = 'Fauzan';
}
echo Coba::NAMA;


// magic constants
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";

function coba()
{
  return __FUNCTION__;
}
echo coba();
echo "<br>";

class Tes
{
  public $kelas = __CLASS__;
}
$obj = new Tes;
echo $obj->kelas;
