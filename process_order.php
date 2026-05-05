<?php
session_start();

$valid_card = "123456789";
$valid_exp = "09/30";
$valid_cvv = "999";

if (
    $_POST['card'] === $valid_card &&
    $_POST['exp'] === $valid_exp &&
    $_POST['cvv'] === $valid_cvv
) {
    $_SESSION['cart'] = [];
    echo "Order placed successfully!";
} else {
    echo "Invalid payment information.";
}
?>
