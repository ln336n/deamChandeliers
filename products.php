<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>Our Collection</header>

<nav>
<a href="index.php">Home</a>
<a href="products.php">Products</a>
<a href="cart.php">Cart</a>
<a href="about.php">About</a>
<a href="logout.php">Logout</a>
</nav>

<div class="products">

<?php
$products = [
    [
        "Crystal Elegance",
        "$1,985",
        [
            "https://italianconceptusa.com/cdn/shop/products/25252-856078.jpg?v=1656132052",
            "https://www.lyfairs.com/cdn/shop/files/5_e15bcc49-261c-40b3-b375-93142c235bbd_525x700.jpg?v=1730280868",
            "https://grandlight.com/wp-content/uploads/2016/06/Maria-Theresa-Collection-Extra-Large-Crystal-Chandelier-69503.jpg"
        ]
    ],
    [
        "Modern Glow",
        "$5,999",
        [
            "https://i0.wp.com/myaashis.com/wp-content/uploads/2022/11/Luxury-Crystal-Chandelier-LED-Ceiling-Lamp-Flush-Mount-Modern-Pendant-Lighting-Fixtures-for-Living-Room-Bar_950ae8d1-e755-404f-a677-5ec3cfc9bcfa.jpg?fit=%2C&ssl=1",
            "https://i5.walmartimages.com/seo/FINE-MAKER-Luxury-K9-Crystal-Ceiling-Lamp-Fixture-LED-Chandelier-Pendant-Lamp-80cm_bdbeb6a5-6aab-41bb-9214-f8e7cf2140e7.8b53da0becbad829704018e7755f4280.jpeg",
            "https://www.dhresource.com/webp/m/0x0/f2/albu/g10/M00/0D/E4/rBVaVl0UJpmAPz3kAAEHbKarq94458.jpg"
        ]
    ],
    [
        "Vintage Gold",
        "$16,999",
        [
            "https://mobileimages.lowes.com/productimages/864cf37f-77d6-46bd-9668-3281e7a7d9d8/65606279.jpg?size=pdhz",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1vGFIAFWg1B-Cnw5vOe-k06AwmPtYduo2GXsJ7SPrkg&s",
            "https://m.media-amazon.com/images/I/71EiCdmEhXL._AC_UF894,1000_QL80_.jpg"
        ]
    ],
    [
        "Diamond Light",
        "$1,257",
        [
            "https://morsale.com/cdn/shop/products/S63a6950e0f36416a957e415171e0f0a2G.jpg?v=1743471473",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe8DRVE64H9Zh7rVC5kuqfjJ2J8tRWWRx0LA&s",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwdZ10sEP7nuaeHjG9VH2MtlU6OFvH0EzgEg&s"
        ]
    ],
    [
        "Luxury Halo",
        "$3,688",
        [
            "https://www.avenila.com/cdn/shop/products/luxury-modern-gold-crystal-chandelier-lighting-for-living-room-881724_600x.jpg?v=1580379773",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQy9nm_-2AU0SfKenAPae04bHATlv09V1ukog&s",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfVCRYkMfIxh3_bLD-feCMobFmvVJAnn9Xbg&s"
        ]
    ]
];

foreach ($products as $p) {
    echo "
    <div class='card'>
        <img src='{$p[2][0]}'>
        <h3>{$p[0]}</h3>
        <p class='price'>{$p[1]}</p>
        <a href='product.php?name={$p[0]}&img1={$p[2][0]}&img2={$p[2][1]}&img3={$p[2][2]}'><button>View</button></a>
    </div>";
}
?>

</div>

<footer>© Dream Chandeliers</footer>

</body>
</html>
