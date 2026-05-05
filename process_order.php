<?php
include 'config.php';

$card = $_POST['card'];
$exp = $_POST['exp'];
$cvv = $_POST['cvv'];

$product = !empty($_SESSION['cart']) ? implode(", ", $_SESSION['cart']) : "None";
$user = isset($_SESSION['user']) ? $_SESSION['user'] : "guest";

if ($conn) {
    $sql = "INSERT INTO orders (username, product, card_number)
            VALUES ('$user', '$product', '$card')";
    $conn->query($sql);
}


session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Successful</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .success-hero {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtvDWcJ8JyrE1XdSEp0DZEG_jcswoOO6ZMgQ&s');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .success-box {
            background: rgba(0, 0, 0, 0.75);
            padding: 40px;
            border: 1px solid gold;
            text-align: center;
            width: 400px;
        }
        .success-box h2 {
            color: gold;
            margin-bottom: 20px;
        }
        .success-box a button {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="success-hero">
    <div class="success-box">
        <h2>Congratulations! Your order has been placed.</h2>

        <a href="index.php"><button>Return to Home</button></a>
        <a href="products.php"><button>Browse More Products</button></a>
        <a href="about.php"><button>About Us</button></a>
    </div>
</div>

</body>
</html>
