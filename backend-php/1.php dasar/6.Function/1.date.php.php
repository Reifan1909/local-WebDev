<?php
// date untuk tanggal
// echo date('l/d-M-Y');

// time
// UNIX Timestamp / EPOCH time
// detik yg sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date('l d M Y', time() + 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanggal, tahun
// echo mktime(0, 0, 0, 9, 19, 2006);
// echo date('l', mktime(0, 0, 0, 9, 19, 2006));

// strtotime
// echo strtotime("19 sep 2006");
echo date("l", strtotime("19 sep 2006"));
