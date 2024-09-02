<?php
function hitungKarakter($kalimat) {
  $panjangKalimat = strlen($kalimat);
  if ($panjangKalimat > 50) {
    $kalimat = substr($kalimat, 0, 50) . "...";
  }
  return $kalimat;
}

// Contoh penggunaan
$kalimat = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique consectetur labore suscipit esse quisquats querat consum";
$kalimatTerpotong = hitungKarakter($kalimat);
echo $kalimatTerpotong;
?>