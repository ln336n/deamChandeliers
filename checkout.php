<?php
include 'config.php';

// Redirect to login if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Product prices
$prices = [
    "Crystal Elegance" => 1985,
    "Modern Glow" => 5999,
    "Vintage Gold" => 16999,
    "Diamond Light" => 1257,
    "Luxury Halo" => 3688
];

// Calculate total
$total = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        if (isset($prices[$item])) {
            $total += $prices[$item];
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .checkout-hero {
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
        .checkout-box {
            background: rgba(0, 0, 0, 0.75);
            padding: 40px;
            border: 1px solid gold;
            width: 350px;
            text-align: center;
        }
        .checkout-box input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
        }
        .checkout-box button {
            width: 100%;
        }
        .total {
            color: gold;
            font-size: 22px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<header>Checkout</header>

<nav>
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="cart.php">Cart</a>
    <a href="about.php">About</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="checkout-hero">
    <div class="checkout-box">

        <h2>Enter Payment Details</h2>

        <p class="total">Total: $<?php echo number_format($total); ?></p>

        <form action="process_order.php" method="post">
            <input type="text" name="card" placeholder="Card Number" required><br>
            <input type="text" name="exp" placeholder="Expiry (MM/YY)" required><br>
            <input type="text" name="cvv" placeholder="CVV" required><br>
            <button type="submit">Place Order</button>
        </form>

    </div>
</div>

<footer>© Dream Chandeliers</footer>

</body>
</html>

</body>
</html>
