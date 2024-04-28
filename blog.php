<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

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
            <li><a href="shop.php">Shop</a></li>
            <li><a class="active" href="blog.php">Blog</a></li>

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

    <section id="page-header" class="blog-header">
      
      <h2>#readmore</h2>
     
      <p><b>Read all case studies about our products</b></p>
     

    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blof-img" style="margin-top: 25px;">
                <img src="Images\Blog\b1.jpg" alt="">
            </div>
            <div class="blog-details" style="padding: 5px;">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>
                </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blof-img" style="margin-top: 25px;">
                <img src="Images/Blog/b2.jpg" alt="">
            </div>
            <div class="blog-details" style="padding: 5px;">
                <h4>How to Style a Quiff</h4>
                <p>
                </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/04</h1>
        </div>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blof-img" style="margin-top: 25px;">
                <img src="Images/Blog/b3.jpg" alt="">
            </div>
            <div class="blog-details" style="padding: 5px;">
                <h4>Must-have Skater Girl Items</h4>
                <p>
                </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>12/01</h1>
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