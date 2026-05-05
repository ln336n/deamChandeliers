<?php include 'config.php'; ?>

<h2>Your Cart</h2>

<?php
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        echo "<p>$item</p>";
    }
} else {
    echo "Cart is empty.";
}
?>

<a href="checkout.php">Proceed to Checkout</a>