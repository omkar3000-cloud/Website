<?php
session_start();

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $user_passwd = $_POST['password'];

    $stmt = mysqli_query($conn, "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$user_passwd';") or die("Query Failed");

    if (mysqli_num_rows($stmt) > 0){    
        while ($row = mysqli_fetch_assoc($stmt)) {
            $_SESSION['name'] = $row["user_fullname"];
            $_SESSION['email'] = $row["user_email"];
            $_SESSION['password'] = $row["user_password"];
            $_SESSION['address'] = $row["user_address"];
            $_SESSION['phone'] = $row["user_phone_number"];
            $_SESSION['loggedIn'] = True;
        }

        header("location:account.php");
    }
    else{
        $_SESSION['errMessage'] = "No such user exists, please re-check the entered email and password..."; 
        header("location:log_in.php");
    }
}

?>