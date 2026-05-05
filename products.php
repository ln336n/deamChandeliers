<?php include 'config.php'; ?>

<header>Our Collection</header>

<div class="products">

<?php
$products = [
    "Crystal Elegance",
    "Modern Glow",
    "Vintage Gold",
    "Diamond Light",
    "Luxury Halo"
];

foreach ($products as $p) {
    echo "
    <div class='card'>
        <img src='https://via.placeholder.com/200'>
        <h3>$p</h3>
        <a href='product.php?name=$p'><button>View</button></a>
    </div>";
}
?>

</div>