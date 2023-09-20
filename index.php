<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    /* Reset default browser styles */
    body,
    h1,
    h2,
    h3,
    p,
    ul,
    li {
        margin: 0;
        padding: 0;
        list-style: none;
        color: black;
    }

    /* Global styles */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.5;
        background-color: #f2f2f2;
        color: #d0caca;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Navigation bar */
    header {
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    nav ul {
        display: flex;
        justify-content: center;
        padding: 10px 0;
    }

    nav ul li {
        margin: 0 10px;
    }

    nav ul li a {
        text-decoration: none;
        color: #333333;
    }

    nav ul li a:hover {
        color: #ff5500;
    }

    nav ul li a.active {
        color: #ff5500;
        font-weight: bold;
    }

    nav ul li a:hover span {
        text-decoration: underline;
    }

    /* nav ul li a:hover:before {
        content: "> ";
    }

    nav ul li a:hover:after {
        content: " <";
    }

    nav ul li a:hover span:before {
        content: "[ ";
    }

    nav ul li a:hover span:after {
        content: " ]";
    } */
    nav ul li a.active {
            color: #ff5500;
            font-weight: bold;
        }


    /* Hero section */
    .hero {
        background-image: url('./pic1.png');
        background-size: cover;
        background-position: center;
        min-height: 90vh;
        /* Use min-height instead of height to allow content to expand */
        display: flex;
        align-items: center;
        justify-content: center;
        /* Center the content horizontally */
        text-align: center;
        /* Center the content vertically */
    }

    .hero h1 span {
        color: #ff5500;
    }

    .hero h1 {
        font-size: 40px;
        color: black;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 20px;
        color: black;
        margin-bottom: 30px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff5500;
        color: #ffffff;
        text-decoration: none;
        border-radius: 4px;
    }

    .btn:hover {
        background-color: #ff7733;
    }

    /* Featured clothing section */
    .featured-clothing {
        background-color: #ffffff;
        padding: 20px;
        margin-top: 30px;
        opacity: 0.8;
    }

    .featured-clothing h2 {
        font-size: 28px;
        color: #333333;
        margin-bottom: 10px;
    }

    .featured-clothing h3 {
        font-size: 24px;
        color: #ff5500;
        margin-bottom: 10px;
    }

    /* Media Queries for Responsive Design */

    /* Small devices (mobile phones) */
    @media only screen and (max-width: 600px) {
        .hero h1 {
            font-size: 30px;
        }

        .hero p {
            font-size: 16px;
        }

        .btn {
            font-size: 14px;
        }

        .featured-clothing h2 {
            font-size: 24px;
        }

        .featured-clothing h3 {
            font-size: 20px;
        }
    }

    /* Medium devices (tablets) */
    @media only screen and (min-width: 601px) and (max-width: 992px) {
        .hero h1 {
            font-size: 36px;
        }
    }
</style>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="./index.php" class="active">Home</a></li>
                <li><a href="./About.html">About Us</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <?php if (isset($user)): ?>
        
        <li><a href="#">Hello <?= htmlspecialchars($user["name"]) ?></a></li>
        
        <li><a href="logout.php">Log out</a></li>
        
    <?php else: ?>
        
        <li><a href="login.php">Log in</a> </li>
        <li><a href="signup.html">Sign up</a></li>
        
    <?php endif; ?>
    
            </ul>
        </nav>
    </header>
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to <span>Mero Clothes !</span></h1>
            <p>(Find Your Perfect Pair)</p>
            <div class="featured-clothing">
                <h2>Featured Clothes</h2>
                <h3>Antarikshya Customs</h3>
                <p>Experience ultimate comfort and style with the new Antarikshya Customs. Designed with cutting-edge
                    technology and premium materials, these clothes will elevate your performance and keep you looking
                    trendy.</p>
                <a href="./shop.html" class="btn">Shop Now</a>
            </div>
        </div>
    </section>
</body>

</html>

</body>

</html>