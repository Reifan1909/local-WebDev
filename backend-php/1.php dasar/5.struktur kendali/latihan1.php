<?php
// perulangan
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .warna-tr {
      background-color: gray;
    }
  </style>
</head>

<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php
    for ($i = 1; $i <= 3; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= 5; $j++) {
        echo "<td>$i, $j</td>";
      }
      echo "</tr>";
    }
    ?>

  </table>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) { ?>
      <tr>
        <?php for ($j = 1; $j <= 5; $j++) { ?>
          <td><?= "$i, $j" ?></td>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>

  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <tr>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
          <td><?= "$i, $j" ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>

  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <?php if ($i % 2 == 1) : ?>
        <tr class="warna-tr">
        <?php else : ?>
        <tr>
        <?php endif; ?>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
          <td><?= "$i, $j" ?></td>
        <?php endfor; ?>
        </tr>
      <?php endfor; ?>
  </table>
</body>

</html>