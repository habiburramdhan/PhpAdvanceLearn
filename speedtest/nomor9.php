<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen</title>
</head>
<body>

    <form action="" method="post">
      <label for="jumlah">Masukan Jumlah:</label>
      <input type="number" id="jumlah" name="jumlah" required>
      <button type="submit">Hitung</button>
    </form>
    

<?php
function pecahanUang($jumlah) {
  $uangKertas = array(
    100000 => 0,
     20000 => 0,
      5000 => 0,
       500 => 0
  );

  krsort($uangKertas);

  foreach ($uangKertas as $nilaiUang => &$jumlahUang) {
    while ($jumlah >= $nilaiUang) {
      $jumlah -= $nilaiUang;
      $jumlahUang++;
    }
  }

  return $uangKertas;
}

if (isset($_POST['jumlah'])) {
  $jumlah = (int) $_POST['jumlah']; // konversi ke integer
  $hasil = pecahanUang($jumlah);

  echo "Untuk $jumlah, Anda memerlukan: <br>";
  foreach ($hasil as $nilaiUang => $jumlahUang) {
    if ($jumlahUang > 0) {
      echo "- $nilaiUang : $jumlahUang <br>";
    }
  }
}
?>
</body>
</html>