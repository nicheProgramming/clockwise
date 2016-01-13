<?php
    
    //Obsolete?
    //$usersInGame = [];

    $con = connect();
    
    function connect() {
        new mysqli(getenv('IP'), getenv('C9_USER'), "", "test", 3306);
        if (mysqli_connect_errno($mysqli)) {
            trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
        }
    }
    
    function rollDice() {
        $die1 = rand(1,6);
        $die2 = rand(1,6);
        $die3 = rand(1,6);
        $die4 = rand(1,6);
        $die5 = rand(1,6);
        $roll = $die1 + $die2 + $die3 + $die4 + $die5;
        return $roll;
    }
    
    function turn($player, $playerScore) {
        $roll = rollDice();
        $mod = $roll % 2;
        
        if($roll >= 20 && $mod == 0) {
    		$playerScore--;
    	} else if($roll >= 20 && $mod != 0) {
    		$playerScore++;
    	} else if($roll <= 19 && $mod == 0) {
    		$playerScore++;
    	} else if($roll <= 19 && $mod != 0) {
    		$playerScore--;
    	}
        echo $player . " rolled " . $roll . ", changing his score to " . $playerScore . ".";
    }
    
    function isLoggedIn() {
        if($_SESSION == null && $_SERVER['PHP_SELF'] != '/index.php') {
            echo "<script>alert('session = null')</script>";
            header("Location: index.php");
        } else if($_SESSION != null && $_SERVER['PHP_SELF'] == '/index.php') {
            header("Location: main.php");
        }
    }
    
    function makeTable() { 
        $uniqNum1 = "gamedb_" . uniqid();
        $uniqNum2 = "gamedb_" . uniqid();
        $con = $GLOBALS['con'];
        //The line below is confirmed to work. 
        //$tableGen = mysqli_query($con,"CREATE TABLE apple(name varchar(20))");
        $tableGen = mysqli_query($con,"CREATE TABLE ".$uniqNum1."(player1name varchar(20))");
        $uniqUsedCheck = mysqli_query($con, "SELECT * FROM ".$uniqNum1);
        if ($uniqUsedCheck != true) {
            $GLOBALS['uniqUsed'] = $uniqNum1;
        } else {
            $GLOBALS['uniqUsed'] = $uniqNum2;
        }
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
        $con;
        $retrieve = mysqli("SELECT * FROM '$tableName'");
        echo $retrieve;
    }
    
    function startSession() {
        session_start();
    }
?>