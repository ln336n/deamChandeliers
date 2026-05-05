<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>Our Collection</header>

<nav>
<a href="index.php">Home</a>
<a href="products.php">Products</a>
<a href="cart.php">Cart</a>
<a href="about.php">About</a>
</nav>

<div class="products">

<?php
$products = [
    "Crystal Elegance",
    "Modern Glow",
    "Vintage Gold",
    "Diamond Light",
    "Luxury Halo"
];

foreach ($products as $p) {
    echo "
    <div class='card'>
        <img src='https://via.placeholder.com/200'>
        <h3>$p</h3>
        <a href='product.php?name=$p'><button>View</button></a>
    </div>";
}
?>

</div>

</body>
</html>
