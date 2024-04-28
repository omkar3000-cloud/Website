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
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>

            <?php if (isset($_SESSION['loggedIn'])){
                ?><li><a href="PHP_Site/account.php">Account</a></li><?php
            }
            else{
                ?><li><a href="PHP_Site/log_in.php">Account</a></li><?php
            }?>

            <li><a href="contact.php">Contact</a></li> <!--ADD PHOTO HERE-->
            <li><a class="active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li> 
         </ul>
        
        </div>
     </section> 

    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i= class="far fa-times-circle"></i></a></td>
                    <td><img src="Images/Products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirt</td>
                    <td>2499</td>
                    <td><input type="number" value="1"></td>
                    <td>2499</td>
                </tr>
                <tr>
                    <td><a href="#"><i= class="far fa-times-circle"></i></a></td>
                    <td><img src="Images/Products/f2.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirt</td>
                    <td>1999</td>
                    <td><input type="number" value="1"></td>
                    <td>1999</td>
                </tr>
                <tr>
                    <td><a href="#"><i= class="far fa-times-circle"></i></a></td>
                    <td><img src="Images/Products/f3.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirt</td>
                    <td>1599</td>
                    <td><input type="number" value="1"></td>
                    <td>1599</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>APPLY COUPON</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>Rs.:-6,097</td>
                </tr>
           <tr>
            <td>Shipping</td>
            <td>Free</td>
           </tr>
           <tr>
            <td><strong>Total</strong></td>
            <td><STRONG>Rs.:-6,097</STRONG></td>
           </tr>
            </table>
            <button class="normal">Proceed to Checkout</button>
        </div>
    </section>

    <footer class="section-p1">

    </footer>
        <script src="script.js"></script>
    </body>
    </html>