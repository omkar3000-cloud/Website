<?php
session_start();

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    $user_passwd = $_SESSION['password'];

    $stmt = mysqli_query($conn, "DELETE FROM users WHERE user_password='$user_passwd';") or die("Query Failed");

    session_abort();

    $conn->close();

    header("location:log_in.php"); 

}

?>

