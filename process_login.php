<?php
session_start();

$valid_username = "admin";
$valid_password = "1234";

if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
    $_SESSION['user'] = $_POST['username'];
    header("Location: checkout.php");
    exit();
} else {
    echo "Invalid login.";
}
?>
