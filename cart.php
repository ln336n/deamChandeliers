<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>Your Cart</header>

<nav>
<a href="index.php">Home</a>
<a href="products.php">Products</a>
<a href="cart.php">Cart</a>
<a href="about.php">About</a>
</nav>

<div style="text-align:center;">

<?php
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        echo "<p>$item</p>";
    }
} else {
    echo "<p>Cart is empty.</p>";
}
?>

<br>
<a href="checkout.php"><button>Proceed to Checkout</button></a>

</div>

<footer>© Dream Chandeliers</footer>

</body>
</html>
