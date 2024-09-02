<?php

$pembelian = 130000;

$day = date("l");

$totalBayar = 0;

if ($pembelian > 100000) {
    if ($day == "Tuesday") {
        $totalBayar = ($pembelian - ($pembelian - 7 / 100));
        $totalBayar -= ($pembelian - ($pembelian - 5 / 100));
    } else {
        $totalBayar = ($pembelian - ($pembelian - 7 / 100));
    }
} else {
    $totalBayar = $pembelian;
}

echo "Tanggal hari ini: " . $day . "<br>";
echo "Total pembelanjaan: " . number_format($pembelian, 0, '.', '.') . "<br>";
echo "Total yang harus dibayar: " . number_format($totalBayar, 0, '.', '.');