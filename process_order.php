<?php
session_start();

$valid_card = "123456789";
$valid_exp = "09/30";
$valid_cvv = "999";

$payment_ok =
    isset($_POST['card'], $_POST['exp'], $_POST['cvv']) &&
    $_POST['card'] === $valid_card &&
    $_POST['exp'] === $valid_exp &&
    $_POST['cvv'] === $valid_cvv;

if ($payment_ok) {
    $_SESSION['cart'] = [];
} else {
    echo "Invalid payment information.";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Order Success</title>
<link rel="stylesheet" href="style.css">
<style>
    .success-hero {
        background-image: url('https://media.craiyon.com/2025-07-12/LdlhypT7SGaP1OLtNn324Q.webp');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .success-box {
        background: rgba(0, 0, 0, 0.75);
        padding: 40px;
        border: 1px solid gold;
        width: 400px;
        text-align: center;
        color: white;
        font-size: 20px;
    }

    .success-box h2 {
        color: gold;
        margin-bottom: 20px;
    }

    .success-box a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background: gold;
        color: black;
        text-decoration: none;
        font-weight: bold;
    }
</style>
</head>
<body>

<header>Order Complete</header>

<nav>
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="cart.php">Cart</a>
    <a href="about.php">About</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="success-hero">
    <div class="success-box">
        <h2>Order Placed Successfully!</h2>
        <p>Thank you for your purchase.</p>
        <p>Your chandelier order has been processed.</p>

        <a href="index.php">Return Home</a>
    </div>
</div>

<footer>© Dream Chandeliers</footer>

</body>
</html>
