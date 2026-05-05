<?php
$conn = new mysqli("localhost", "root", "", "dream_chandeliers");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
?>