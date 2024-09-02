<?php 

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];


$merge = array_merge($bil1, $bil2);

$unique = array_unique($merge);

sort($unique);

echo "Hasil : ";

echo implode(', ', $unique);