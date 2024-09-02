<?php
function koinUang($uang) {
  $koin = array(500, 200);
  $hasilKoin = array();
  
  foreach ($koin as $value) {
    $jumlahKoin = floor($uang / $value);
    if ($jumlahKoin > 0) {
      $hasilKoin[] = "Rp. " . $value . " x " . $jumlahKoin;
      $uang -= $jumlahKoin * $value;
    }
  }
  return $hasilKoin;
}

// Contoh penggunaan
$uang = 1750;
$koinkoin = koinUang($uang);
echo "Jenis Koin untuk Uang Rp. " . $uang . ": <br>";
foreach ($koinkoin as $value) {
  echo $value . "<br>";
}
?>