<?php
session_start();
unset($_SESSION['cartItems']);
header('Location: resto.php');
?>
