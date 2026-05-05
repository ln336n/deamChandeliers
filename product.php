<?php include 'config.php'; ?>

<?php
$name = $_GET['name'];
?>

<h2><?php echo $name; ?></h2>

<img src="https://via.placeholder.com/200"><br>
<img src="https://via.placeholder.com/200"><br>

<form method="post">
    <input type="hidden" name="product" value="<?php echo $name; ?>">
    <button type="submit" name="add">Add to Cart</button>
</form>

<?php
if (isset($_POST['add'])) {
    $_SESSION['cart'][] = $name;
    echo "Added to cart!";
}
?>

<a href="products.php">Back</a>