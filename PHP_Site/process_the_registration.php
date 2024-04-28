<?php
session_start();

include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_passwd = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];


    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $user_passwd;
    $_SESSION['address'] = $address;
    $_SESSION['phone'] = $phone;
    $_SESSION['loggedIn'] = "True";

    $stmt = mysqli_query($conn, "INSERT INTO users(user_fullname, user_email, user_password, user_address, user_phone_number) VALUES ('$name', '$email', '$user_passwd', '$address', '$phone');") or die("Query Failed");

    $conn->close();

    header("location:account.php");
}

?>



<!-- // Connect to database 
    $dsn = "mysql:host=localhost;dbname=user_db";
    $username = "root";
    $password = "";



    $pdo_connection = new PDO($dsn, $username, $password) -->