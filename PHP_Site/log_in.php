<?php session_start(); ?>



<!DOCTYPE html>
<html>

<link rel="stylesheet" href="../style.css">

<head>
    <title>Registration Form</title>
</head>
<body style="background-color: #BED7DC;">
    <section id="header">
        <a href="#"><img src=""  class="logo" alt=""></a>

        <div>
         <ul id="navbar">
         <li><a><form method="post" action="sign_up.php" style="float: right;">
                <button type="submit" style="background: none; border: none; padding: 0; font: inherit;  font-weight: 600; cursor: pointer;">Sign Up</button>
            </form></a></li>

            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

            <li><a href="../index.php">Home</a></li>
            <li><a href="../shop.php">Shop</a></li>
            <li><a href="../blog.php">Blog</a></li>
            <li><a class="active" href="log_in.php">Account</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li><a href="../cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li> 
         </ul> 
        
        </div>
     </section>  


    <h2 class="centered-title" style="padding: 5px;">Log in</h2>

    <form method="post" action="process_logging_in.php" style="padding: 20px;font-size: 18px;">
        <label for="email">Enter your email address:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Enter your password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Log in" style="font-size: 18px;">
    </form>

    <p style="color:red; padding-left: 10px;"> <?php 
    if (isset($_SESSION['errMessage'])){
        echo $_SESSION['errMessage'];
        unset($_SESSION['errMessage']);
    }
    ?> </p>

    <img src="..\Images\Log_in\model banner test.png" style="border-radius: 1%; padding-left: 80px;">
    <img src="..\Images\Log_in\sun_shot_test.png" style="border-radius: 1%; padding-left: 260px;">

</body>
</html>
