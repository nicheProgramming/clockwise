<?php

    $usersInGame = [];

    function connect() {
        new mysqli(getenv('IP'), getenv('C9_USER'), "", "test", 3306);
        if (mysqli_connect_errno($mysqli)) {
            trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
        } 
    }

    //$con = connect();
    $con = new mysqli(getenv('IP'), getenv('C9_USER'), "", "test", 3306);
    
    function startSession() {
        session_start();
    }
    
    function isLoggedIn() {
        if($_SESSION == null && $_SERVER['PHP_SELF'] != '/index.php') {
            //echo "<script>alert('session = null')</script>";
            header("Location: index.php");
        } else if($_SESSION != null && $_SERVER['PHP_SELF'] == '/index.php') {
            header("Location: main.php");
        } else if($_SESSION != null && $_SERVER['PHP_SELF'] != '/index.php') {
            return;
        }
    }
    
    //What is this here for?
    function testTable() {
        $con = $GLOBALS['con'];
        $conTest = mysqli_query($con, "SELECT ");
    }
    
    function makeTable() { 
        $uniqNum1 = "gamedb_" . uniqid();
        $uniqNum2 = "gamedb_" . uniqid();
        $con = $GLOBALS['con'];
        //The line below is confirmed to work. 
        //$tableGen = mysqli_query($con,"CREATE TABLE apple(name varchar(20))");
        
        //This should also initialize score, and maybe store player UNs.
        $tableGen = mysqli_query($con,"CREATE TABLE ".$uniqNum1."(
            player1name VARCHAR(30),
            player1score INT,
            player2name VARCHAR(30),
            player2score INT,
            player3name VARCHAR(30),
            player3score INT,
            player4name VARCHAR(30),
            player4score INT,
            player5name VARCHAR(30),
            player5score INT,
            player6name VARCHAR(30),
            player6score INT)");
        $uniqUsedCheck = mysqli_query($con, "SELECT * FROM ".$uniqNum1);
        if ($uniqUsedCheck != true) {
            $GLOBALS['uniqUsed'] = $uniqNum1;
        } else {
            $GLOBALS['uniqUsed'] = $uniqNum2;
        }
            //We need to implement a version of this into out gen Query
            //To fix conercase name conflict. 
            /*
            ELSE '$uniqNum2'(
            player1name varchar(30),
            player2name varchar(30),
            player3name varchar(30),
            player4name varchar(30),
            player5name varchar(30),
            player6name varchar(30)
            );*/
        //addUserToGame($uniqNum1);
        $tableGen;
        //genPhp();
    }
    
    function genPHP() {
        $fName = $GLOBALS['usedUniq'] + '.php';
        $fh = fopen($fName,'w');
        fwrite($fh, $gameContents);
        fclose($fh);
        header("Location: ". $fName);
    }
    
    //Obsolete?
    function addUserToGame($tableName) {
        $con = $GLOBALS['con'];
        
    }
    
    function joinGame() {
        $con = $GLOBALS['con'];
        $numPlayersInGame = mysqli_query($con, "SELECT * FROM testGame WHERE playersInGame > 0;");
        
        return $numPlayersInGame;
    }
    
?>