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
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="shop.php">Shop</a></li>
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


     <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="Images/Products/f1.jpg" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="Images/Products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="Images/Products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="Images/Products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="Images/Products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / T-Shirts</h6>
            <h4>Men's Fashion T Shirt</h4>
            <h2>₹2499</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <p>This Tshirt is made from a substantial fabric constructed from 100% cotton
                Featuring a taped nexk and shoulder and is available in a range of colours.
                It offers it all in the ultimate head-turning package
            </p>
        </div>
     </section>

     <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="Images/Products/n1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Light Blue Shirt</h5>
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
                <img src="Images/Products/n2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Grey Shirt</h5>
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
                <img src="Images/Products/n3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>White Shirt</h5>
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
                <img src="Images/Products/n4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Patchy Design Shirt</h5>
                    <div class="star">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i> 
                    </div>
                    <h4>₹3599</h4>
                </div>
                <a href=""#><i class="fal fa-cart-shopping"></i></a>
            </div>
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

<script>
    var MainImg= document.getElementById("MainImg");
    var smallimg=document.getElementsByClassName("small-img");

    smallimg[0].onclick =function() {
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick =function() {
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick =function() {
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick =function() {
        MainImg.src = smallimg[3].src;
    }
</script>
    <script src="script.js"></script>
</body>
</html> 