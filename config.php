<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$conn = @new mysqli("localhost", "root", "", "dream_chandeliers");

if ($conn->connect_error) {
    $conn = null;
}
?>
