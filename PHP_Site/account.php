<?php session_start() ?>

<link rel="stylesheet" href="../style.css">

<!DOCTYPE html>
<html>
<head>
    <title>My Account </title> 
</head>
<body style="background-color: #BED7DC;">

    <section id="header">
        <a href="#"><img src=""  class="logo" alt=""></a>

        <div>
         <ul id="navbar">

        <li><a>         
            <form method="post" action="log_out.php">
            <button type="submit" style="background: none; border: none; padding-right: 14px; font: inherit;  font-weight: 600; cursor: pointer;">Log Out</button>   
            </form>
</a></li>

        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>



            <li><a href="../index.php">Home</a></li>
            <li><a href="../shop.php">Shop</a></li>
            <li><a href="../blog.php">Blog</a></li>
            <li><a class="active" href="account.php">Account</a></li>
            <li><a href="../contact.php">Contact</a></li>

            <li><a><form method="post" action="process_the_deletion.php" style="float: right;">
                <button type="submit" style="background: none; border: none; padding: 0; font: inherit;  font-weight: 600; cursor: pointer;">Delete Account</button>
            </form></a></li>

         </ul> 
        
        </div>
     </section>  

    
    <h2 class="centered-title" style="padding: 5px;">My Account</h2>
    <?php
    $user_passwd = $_SESSION['password']; 
    $dotPassword = str_repeat("*", strlen($user_passwd)); ?>


    <p style="font-weight: 600; padding-left: 10px;  font-size: 20px;">Name: <?php echo $_SESSION['name'] ?> <br><br>
    Email: <?php echo $_SESSION['email'] ?> <br><br>
    Address: <?php echo $_SESSION['address'] ?> <br><br>
    Phone: <?php echo $_SESSION['phone'] ?> <br></p>  

<span id="password" style="font-weight: 600; padding-left: 10px; font-size: 20px; color: #465b52;">Password: <?php echo $dotPassword?></span>

<button id="togglePasswordButton" onclick="revealPassword()">Show Password</button>

<script>
function revealPassword() {
    var passwordSpan = document.getElementById("password");
    var toggleButton = document.getElementById("togglePasswordButton");

    if (passwordSpan.textContent === "Password: <?php echo $dotPassword?>") {
        passwordSpan.textContent = "Password: <?php echo $user_passwd?>";
        toggleButton.textContent = "Hide Password";
    } else {
        passwordSpan.textContent = "Password: <?php echo $dotPassword?>";
        toggleButton.textContent = "Show Password";
    }
}
</script>

</body>
</html>
