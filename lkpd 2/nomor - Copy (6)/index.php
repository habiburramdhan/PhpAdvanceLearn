<?php
$items = [
    [
        'name' => 'Pasta Gigi',
        'price' => 18000,
        'quantity' => 1,
    ],
    [
        'name' => 'Sabun Mandi',
        'price' => 5000,
        'quantity' => 3,
    ],
    [
        'name' => 'Aloe Vera Sheet Mask',
        'price' => 15000,
        'quantity' => 4,
    ],
];

$total = 0;
foreach ($items as $item) {
    $total += $item['price'] * $item['quantity'];
}

echo "Total harga yang harus dibayar adalah Rp. " . $total;
?>