<?php include 'config.php'; ?>

<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "rutgersbuyer1" && $password == "chandelierbuyer1") {
    $_SESSION['user'] = $username;
    header("Location: checkout.php");
} else {
    echo "Invalid login";
}
?>