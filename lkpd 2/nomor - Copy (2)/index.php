<?php
function hitungTotalBayar($totalPembelian, $tanggalPembelian)
{
    $hariIni = date('l', strtotime($tanggalPembelian));

    $diskon = 0;

    if ($hariIni == "Tuesday") {
        $diskon = 0.05; 
    }

    if ($totalPembelian > 100000) {
        $diskon = 0.07; 
    }

    $totalDiskon = $totalPembelian * $diskon;

    $totalBayar = $totalPembelian - $totalDiskon;

    return $totalBayar;
}

$totalPembelian = 130000; 
$tanggalPembelian = '29';
$totalBayar = hitungTotalBayar($totalPembelian, $tanggalPembelian);

$hariIni = date('l', strtotime($tanggalPembelian));

echo "Tanggal pembelian: <strong>$tanggalPembelian</strong><br>";
echo "Total pembelanjaan: <strong>Rp" . number_format($totalPembelian, 0, ',', '.') . "</strong><br>";
echo "Total yang harus dibayar: <strong>Rp" . number_format($totalBayar, 0, ',', '.') . "</strong>";
?>