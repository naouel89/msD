<?php
session_start();

if (!isset($_SESSION['cartItems'])) {
    $_SESSION['cartItems'] = [];
}

$cartItems = $_SESSION['cartItems'];

$cartTotalAmount = 0;

foreach ($cartItems as $item) {
    $cartTotalAmount += $item['price'];
}

echo 'Total: ' . number_format($cartTotalAmount, 2) . ' €';
?>
