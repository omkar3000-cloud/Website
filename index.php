<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script src="https://kit.fontawesome.com/86d66a328c.js"></script>   
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <a href="#"><img src=""  class="logo" alt=""></a> <!--ADD PHOTO HERE-->

        <div>
         <ul id="navbar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>

            <?php if (isset($_SESSION['loggedIn'])){
                ?><li><a href="PHP_Site/account.php">Account</a></li><?php
            }
            else{
                ?><li><a href="PHP_Site/log_in.php">Account</a></li><?php
            }?>

            <li><a href="contact.php">Contact</a></li> <!--ADD PHOTO HERE-->
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li> 
         </ul>
        
        </div>
     </section> 

    <section id="hero">
      <h4>Trade-in-offer</h4>
      <h2>Super value deals</h2>
      <h1>On all products</h1>
      <p>Save more with coupons upto 60% off</p>
      <a href="shop.php"><button>Shop Now</button></a>

    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="Images/Features/f4.png"alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="Images/Features/f2.png"alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="Images/Features/f3.png"alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="Images/Features/f5.png"alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="Images/Features/f1.png"alt="">
            <h6>Chat With Us</h6>
        </div>
        <div class="fe-box">
            <img src="Images/Features/f6.png"alt="">
            <h6>24x7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="Images/Products/f1.jpg" alt="" onclick="window.location.href='sproduct.php';">
                <div class="des" onclick="window.location.href='sproduct.php';">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i> 
                    </div>
                    <h4>₹2499</h4>
                </div>
                <a href=""#><i class="fal fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Images/Products/f2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i> 
                    </div>
                    <h4>₹1999</h4>
                </div>
                <a href=""#><i class="fal fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Images/Products/f3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i> 
                    </div>
                    <h4>₹1599</h4>
                </div>
                <a href=""#><i class="fal fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Images/Products/f4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i> 
                    </div>
                    <h4>₹1599</h4>
                </div>
                <a href=""#><i class="fal fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Images/Products/f5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i> 
                    </div>
                    <h4>₹1599</h4>
                </div>
                <a href=""#><i class="fal fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Images/Products/f6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut Jacket</h5>
                    <div class="star">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i> 
                    </div>
                    <h4>₹2999</h4>
                </div>
                <a href=""#><i class="fal fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Images/Products/f7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut Trouser</h5>
                    <div class="star">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i> 
                    </div>
                    <h4>₹1799</h4>
                </div>
                <a href=""#><i class="fal fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Images/Products/f8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i> 
                    </div>
                    <h4>₹2299</h4>
                </div>
                <a href=""#><i class="fal fa-cart-shopping"></i></a>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <img src="Images\Banners\b1.jpg">
        <h2><span>Up to 70% Off - All Items</span></h2>
        <a href="contact.php"><button class="normal">Explore More</button></a>
    </section>

 

    <section id="sm-banner" class="section-p1">

<div class="banner-box" style="margin-top: 20px;">
    <h4>Crazy Deals</h4>
    <h2>Shop Now!!</h2>
    <span>The Best Classic Dress is on SALE!!!</span>
    <a href="shop.php"><button class="white">Learn More</button></a>
</div>
<div class="banner-box banner-box2">
    <h4>Spring/Summer</h4>
    <h2>Upcoming Season</h2>
    <span>The Best Classic Dress is on SALE!!!</span>
    <a href="shop.php"><button class="white">Collection</button></a>
</div>

    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -40%OFF</h3>
        </div>
        <div class=" banner-box banner-box2">
            <h2>New Footwear Collection</h2>
            <h3>2024</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>TSHIRTS</h2>
            <h3>New Trendy Designs</h3>
        </div>
    </section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up for NewsLetters</h4>
        <p>Get Emails about latest <span>Offers and Sales.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email Address">
        <button class="normal">Sign Up</button>
    </div>
</section>

<footer class="section-p1">

</footer>
    <script src="script.js"></script>
</body>
</html>