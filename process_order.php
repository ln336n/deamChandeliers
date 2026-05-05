<?php
session_start();

// Clear cart after order
$_SESSION['cart'] = [];

echo "Order placed successfully!";
?>
