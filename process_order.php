<?php include 'config.php'; ?>

<?php
$card = $_POST['card'];
$exp = $_POST['exp'];
$cvv = $_POST['cvv'];

$product = implode(",", $_SESSION['cart']);
$user = $_SESSION['user'];

$sql = "INSERT INTO orders (username, product, card_number)
VALUES ('$user', '$product', '$card')";

if ($conn) {
    $conn->query($sql);
}

echo "<h2>Congratulations! Your order has been placed.</h2>";

session_destroy();
?>
