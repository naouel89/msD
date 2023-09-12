<?php
session_start();

if (!isset($_SESSION['cartItems'])) {
    $_SESSION['cartItems'] = [];
}

$burgerName = $_POST['burgerName'];
$burgerPrice = floatval($_POST['burgerPrice']);
$quantity = floatval($_POST['quantity']);
$totalPrice = $burgerPrice * $quantity;

$cartItem = ['name' => $burgerName, 'price' => $totalPrice];
array_push($_SESSION['cartItems'], $cartItem);

header('Location: resto.php');
?>
