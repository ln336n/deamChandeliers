<!DOCTYPE html>
<html>
<head>
<title>About</title>
<link rel="stylesheet" href="style.css">
<style>
    .about-hero {
        background-image: url('https://images.pexels.com/photos/13232333/pexels-photo-13232333.jpeg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 0;
    }

    .about-box {
        background: rgba(0, 0, 0, 0.75);
        padding: 40px;
        border: 1px solid gold;
        max-width: 750px;
        text-align: center;
    }

    .about-box h2, .about-box h3 {
        color: gold;
        margin-bottom: 15px;
    }

    .contact-section {
        margin-top: 40px;
        padding-top: 20px;
        border-top: 1px solid gold;
    }

    .contact-section p {
        margin: 8px 0;
    }
</style>
</head>
<body>

<header>About Dream Chandeliers</header>

<nav>
<a href="index.php">Home</a>
<a href="products.php">Products</a>
<a href="cart.php">Cart</a>
<a href="about.php">About</a>
<a href="logout.php">Logout</a>
</nav>

<div class="about-hero">
    <div class="about-box">
        <h2>Our Story</h2>
        <p>
            Dream Chandeliers is a luxury lighting brand inspired by modern elegance and timeless craftsmanship. 
            Each chandelier is designed to be more than lighting — it is a centerpiece of art and sophistication.
        </p>

        <p>
            From grand crystal installations to minimalist modern designs, our collections are curated to elevate 
            any living space into a luxurious experience.
        </p>

        <h3>Our Mission</h3>
        <p>
            Our mission is to illuminate homes with artistry, innovation, and timeless beauty.  
            We strive to create lighting that inspires emotion, transforms spaces, and reflects the unique style  
            of every customer who chooses Dream Chandeliers.
        </p>

        <div class="contact-section">
            <h3>Contact Us</h3>
            <p>Email: rutgers@dreamchandeliers.com</p>
            <p>Phone: 973-353-5205</p>
            <p>Address: 195 University Ave, Newark, NJ 07102</p>
            <p>Business Hours: Mon–Fri, 9 AM – 6 PM</p>
        </div>
    </div>
</div>

<footer>© Dream Chandeliers</footer>

</body>
</html>
