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
            <li><a href="../index.php">Home</a></li>
            <li><a href="../shop.php">Shop</a></li>
            <li><a href="../blog.php">Blog</a></li>
            <li><a class="active" href="sign_up.php">Account</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li><a href="../cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li> 
         </ul> 
        
        </div>
     </section>  


    <h2 class="centered-title" style="padding: 4px;">Sign up</h2>

    <div class="first">
    <form method="post" action="process_the_registration.php" style="padding: 20px;">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>

        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <input type="submit" value="Register">
    </form>
</div>
<div class="second" style="padding-right: 10px;">
    <img src='..\Images\Sign_up\rack11.jpg' alt="rack">
</div>


</body>
</html>
