<?php 

    session_start();
        
    $_SESSION['errMessage'] = "";

    $_SESSION['loggedIn'] = False;
    session_destroy();
    
    header("location:log_in.php");
    
?>