<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>Secure Checkout</header>

<nav>
<a href="index.php">Home</a>
<a href="products.php">Products</a>
<a href="cart.php">Cart</a>
<a href="about.php">About</a>
</nav>

<?php
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<div style="text-align:center;">

<form action="process_order.php" method="post">
    <input type="text" name="card" placeholder="Card Number"><br>
    <input type="text" name="exp" placeholder="MM/YY"><br>
    <input type="text" name="cvv" placeholder="CVV"><br>
    <button type="submit">Place Order</button>
</form>

</div>

<footer>© Dream Chandeliers</footer>

</body>
</html>
