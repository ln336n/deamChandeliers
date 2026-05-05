<?php
session_start();

// Try connecting (for XAMPP)
$conn = @new mysqli("localhost", "root", "", "dream_chandeliers");

// If connection fails (like on Render), don't crash site
if ($conn->connect_error) {
    $conn = null;
}
?>
