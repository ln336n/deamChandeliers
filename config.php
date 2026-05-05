<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_set_cookie_params([
    'lifetime' => 0, 
    'path' => '/',
    'secure' => false,
    'httponly' => true,
    'samesite' => 'Lax'
]);

session_start();

if (!isset($_SESSION['tab_active'])) {
    $_SESSION['cart'] = [];
    $_SESSION['tab_active'] = true;
}


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$conn = @new mysqli("localhost", "root", "", "dream_chandeliers");

if ($conn->connect_error) {
    $conn = null;
}
?>
