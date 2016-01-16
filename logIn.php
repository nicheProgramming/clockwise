<?php
    require 'functions.php';
    
    $password = $_POST["lpassword"];
    $email = trim($_POST["lemail"]);
    
    $row = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM userInfo WHERE email='$email'"));
    $username = $row['userName'];
    if($row['password']==($password))
    {
        startSession();
        $_SESSION['userName'] = $username;
        header("Location: main.php");
        
    }
    else if($row['password']!=($password)){
        //Echoes won't appear unless the page is NOT redirected.
        // echo "<script type='text/javascript'>document.getElementById('logIn').display = 'none';</script>";
        // echo "Your login info was incorrect<br>";
        sleep(10);
        header("Location: index.php"); 
    }
   //If the email does not exist.
    else if(count($row) <= 1){
        // echo "<html><head><script type='text/javascript'>alert('Your login info is incorrect.')</script></head></html>";
        // sleep(10);
        header("Location: index.php"); 
    }
?>