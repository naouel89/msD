<?php
session_start();

if (!isset($_SESSION['cartItems'])) {
    $_SESSION['cartItems'] = [];
}

$cartItems = $_SESSION['cartItems'];

$cartItemsHTML = '';
$cartTotalAmount = 0;

foreach ($cartItems as $item) {
    $cartItemsHTML .= '<li>' . $item['name'] . ' - ' . number_format($item['price'], 2) . ' €</li>';
    $cartTotalAmount += $item['price'];
}

echo $cartItemsHTML;
?>
