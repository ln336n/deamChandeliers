<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
<style>
    .login-hero {
        background-image: url('https://media.craiyon.com/2025-07-12/LdlhypT7SGaP1OLtNn324Q.webp');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-box {
        background: rgba(0, 0, 0, 0.75);
        padding: 40px;
        border: 1px solid gold;
        width: 350px;
        text-align: center;
    }

    .login-box input {
        width: 90%;
        padding: 10px;
        margin: 10px 0;
    }

    .login-box button {
        width: 100%;
    }
</style>
</head>
<body>

<header>Login</header>

<nav>
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="cart.php">Cart</a>
    <a href="about.php">About</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="login-hero">
    <div class="login-box">
        <h2>Please Log In</h2>

        <form action="process_login.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</div>

<footer>© Dream Chandeliers</footer>

</body>
</html>
