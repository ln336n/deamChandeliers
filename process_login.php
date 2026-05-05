<?php
session_start();


$valid_username = "rutgersbuyer1";
$valid_password = "chandelierbuyer1";

if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
    $_SESSION['user'] = $_POST['username'];
    header("Location: checkout.php");
    exit();
} else {
    echo "Invalid login.";
}
?>
