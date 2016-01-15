<?php
    require 'functions.php';
    //require 'index.php';
    
    
    $password = $_POST["lpassword"];
    $email = trim($_POST["lemail"]);
    
    //echo $email . "<br>";
    //echo $password . "<br>";
    
    $row = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM userInfo WHERE email='$email'"));
    // $row = mysqli_fetch_array($res);
    $username = $row['userName'];
    if($row['password']==($password))
    {
        startSession();
        $_SESSION['userName'] = $username;
        header("Location: main.php");
        
    }
    else if($row['password']!=($password)){
        //sleep is running, the echoes are not working.
        echo "<script type='text/javascript'>document.getElementById('logIn').display = 'none';</script>";
        echo "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
        // sleep(10);
        //header("Location: index.php"); 
    }
   //if the email does not exist
    else if(count($row) <= 1){
        echo "<html><head><script type='text/javascript'>alert('Your login info is incorrect.')</script></head></html>";
        sleep(10);
        header("Location: index.php"); 
    }
?>