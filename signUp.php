<?php
    require 'functions.php';
    
    $userName = trim($_POST["suserName"]);
    $userName = htmlspecialchars($userName);
    $password = $_POST["spassword"];
    $email = trim($_POST["semail"]);
    
    echo $userName . "<br>";
    echo $password . "<br>";
    echo $email . "<br>";
    
    //We should also run a check to see if the submitted email is already registered.
    
    //Adds user to database.
    $signUp = mysqli_query($con, "INSERT INTO userInfo (userName,password,email) VALUES ('$userName', '$password', '$email')");
    
    if (results != false) {
        echo "<script>alert('You have succsessfully made an account.')</script>";
        header("Location: main.php");
    }
?>