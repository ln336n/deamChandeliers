<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .cart-item {
            display: flex;
            align-items: center;
            background: #1a1a1a;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid gold;
        }
        .cart-item img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-right: 20px;
        }
        .cart-total {
            font-size: 24px;
            color: gold;
            margin-top: 20px;
            text-align: center;
        }
        .cart-buttons {
            text-align: center;
            margin-top: 20px;
        }
        .cart-buttons button {
            margin: 5px;
        }
    </style>
</head>
<body>

<header>Your Cart</header>

<nav>
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="cart.php">Cart</a>
    <a href="about.php">About</a>
	<a href="logout.php">Logout</a>
</nav>

<div class="container">

<?php

$products = [
    "Crystal Elegance" => [
        "price" => 1985,
        "img" => "https://italianconceptusa.com/cdn/shop/products/25252-856078.jpg?v=1656132052"
    ],
    "Modern Glow" => [
        "price" => 5999,
        "img" => "https://i0.wp.com/myaashis.com/wp-content/uploads/2022/11/Luxury-Crystal-Chandelier-LED-Ceiling-Lamp-Flush-Mount-Modern-Pendant-Lighting-Fixtures-for-Living-Room-Bar_950ae8d1-e755-404f-a677-5ec3cfc9bcfa.jpg?fit=%2C&ssl=1"
    ],
    "Vintage Gold" => [
        "price" => 16999,
        "img" => "https://mobileimages.lowes.com/productimages/864cf37f-77d6-46bd-9668-3281e7a7d9d8/65606279.jpg?size=pdhz"
    ],
    "Diamond Light" => [
        "price" => 1257,
        "img" => "https://morsale.com/cdn/shop/products/S63a6950e0f36416a957e415171e0f0a2G.jpg?v=1743471473"
    ],
    "Luxury Halo" => [
        "price" => 3688,
        "img" => "https://www.avenila.com/cdn/shop/products/luxury-modern-gold-crystal-chandelier-lighting-for-living-room-881724_600x.jpg?v=1580379773"
    ]
];


if (isset($_POST['clear'])) {
    $_SESSION['cart'] = [];
}

$total = 0;

if (!empty($_SESSION['cart'])) {

    foreach ($_SESSION['cart'] as $item) {

        if (isset($products[$item])) {
            $price = $products[$item]["price"];
            $img = $products[$item]["img"];
            $total += $price;

            echo "
            <div class='cart-item'>
                <img src='$img'>
                <div>
                    <h3>$item</h3>
                    <p style='color:gold;'>$" . number_format($price) . "</p>
                </div>
            </div>";
        }
    }

    echo "<div class='cart-total'>Total: $" . number_format($total) . "</div>";

} else {
    echo "<p>Cart is empty.</p>";
}
?>

<div class="cart-buttons">
    <form method='post'>
        <button type='submit' name='clear'>Clear Cart</button>
    </form>

    <a href='checkout.php'><button>Proceed to Checkout</button></a>
</div>

</div>

<footer>© Dream Chandeliers</footer>

</body>
</html>


