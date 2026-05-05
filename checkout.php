<?php include 'config.php'; ?>

<?php
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Enter Payment Details</h2>

<form action="process_order.php" method="post">
    Card Number: <input type="text" name="card"><br>
    Expiry: <input type="text" name="exp"><br>
    CVV: <input type="text" name="cvv"><br>
    <button type="submit">Place Order</button>
</form>