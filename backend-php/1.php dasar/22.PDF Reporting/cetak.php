<!-- template -->
<?php
// require_once __DIR__ . '/vendor/autoload.php';

// $mpdf = new \Mpdf\Mpdf();
// $mpdf->WriteHTML('<h1>Hello world!</h1>');
// $mpdf->Output();
?>

<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();



$html =
  '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Nim</th>
    </tr>';

$no = 1;
foreach ($mahasiswa as $mhs) {
  $html .=
    '<tr>
        <td>' . $no . '</td>
        <td><img src="img/' . $mhs["gambar"] . '" alt="" width="100px"></td>
        <td>' . $mhs["nama"] . '</td>
        <td>' . $mhs["nim"] . '</td>
      </tr>' .
    $no++;
}

$html .=
  '</table>
</body>
</html>';



$mpdf->WriteHTML($html);
$mpdf->Output('daftar-mahasiswa.pdf', Mpdf\Output\Destination::INLINE);

?>