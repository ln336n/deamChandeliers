<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Product</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>Product Details</header>

<nav>
<a href="index.php">Home</a>
<a href="products.php">Products</a>
<a href="cart.php">Cart</a>
<a href="about.php">About</a>
</nav>

<?php $name = $_GET['name']; ?>

<h2 style="text-align:center;"><?php echo $name; ?></h2>

<div style="text-align:center;">
<img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" width="300"><br><br>
<img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85" width="300"><br><br>

<form method="post">
    <input type="hidden" name="product" value="<?php echo $name; ?>">
    <button type="submit" name="add">Add to Cart</button>
</form>
</div>

<?php
if (isset($_POST['add'])) {
    $_SESSION['cart'][] = $name;
    echo "<p style='text-align:center;color:gold;'>Added to cart!</p>";
}
?>

<footer>© Dream Chandeliers</footer>

</body>
</html>
