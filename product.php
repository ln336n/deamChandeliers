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
<a href="logout.php">Logout</a>
</nav>

<?php
$name = $_GET['name'] ?? "Unknown Product";
$img1 = $_GET['img1'] ?? "";
$img2 = $_GET['img2'] ?? "";
$img3 = $_GET['img3'] ?? "";
?>

<h2 style="text-align:center;"><?php echo $name; ?></h2>

<div style="text-align:center;">
    <?php if ($img1) echo "<img src='$img1' width='300' style='margin:15px;'><br>"; ?>
    <?php if ($img2) echo "<img src='$img2' width='300' style='margin:15px;'><br>"; ?>
    <?php if ($img3) echo "<img src='$img3' width='300' style='margin:15px;'><br>"; ?>
</div>

<form method="post" style="text-align:center;">
    <button name="add">Add to Cart</button>
</form>

<?php
if (isset($_POST['add'])) {
    $_SESSION['cart'][] = $name;
    echo "<p style='text-align:center;color:gold;'>Added to cart!</p>";
}
?>

<footer>© Dream Chandeliers</footer>

</body>
</html>
