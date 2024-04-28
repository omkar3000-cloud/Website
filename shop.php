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

    <section id="page-header">
      
      <h2><span style="color: #ef3636;">Mind Blowing Deals</span></h2>
     
      <p>Save more with coupons upto 60% off</p>

      <img src="Images\Banners\b2.jpg">

    </section>

    <section id="product1" class="section-p1" style="margin-top: 130px">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="Images/Products/f1.jpg" alt="">
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
            <div class="pro">
                <img src="Images/Products/n5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Blue Shirt</h5>
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
                <img src="Images/Products/n6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Grey Shorts</h5>
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
                <img src="Images/Products/n7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Brown Shirtr</h5>
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
                <img src="Images/Products/n8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Black Shirt(Half)</h5>
                    <div class="star">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i> 
                    </div>
                    <h4>₹2799</h4>
                </div>
                <a href=""#><i class="fal fa-cart-shopping"></i></a>
            </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
<a href="#">1</a>
<a href="#">2</a>
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