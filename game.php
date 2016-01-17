<!DOCTYPE html>
<html>
<head>
    <?php 
        require('overlay.php');
        require('functions.php');
        $con = $GLOBALS['con'];
    ?>
    <link rel="stylesheet" type="text/css" href="test.css">
    <script src="test.js">
        // var runner = setInterval(reloadF('scoreBox'),1000);
        // runner;
    </script>
</head>

<body>
    
    <button onClick="reload(scoreBox)">Refresh Score</button>
    
    <button onClick="home();">Home</button>

    <?php 
    isLoggedIn(); 
    /*makeTable();
    array_push($usersInGame, $_SESSION['userName']); 
    echo implode(',', $usersInGame);*/ 
    ?>
    <div id="rules">
        Clockwise is a game of chance.
        <ul>
            <li>You need at least two players, and no more than six.</li>
            <li>The oldest player goes first.</li>
            <li>Each player starts off with three points.</li>
            <li>Get seven points to win.</li>
            <li>If you hit zero points, you lose.</li>
            <li>If you roll 20 or more, odd numbers will give you a point and even numbers will lose you a point.</li>
            <li>If you roll less than 20, even numbers will give you points odd numbers subtract points.</li>
        </ul>
    </div>
    
    <div id="scoreBox">
        <div id="p1score" class="pScore">
            <?php
                //Sudo code:
                //If query p1score != null, {
                //  echo p1name . p1score;
                //} else {
                //  echo "<script>hidePlayer(player1);</script>";
                //}
                $p1 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `testGame` WHERE `pNum` = 1"));
                $pName1 = $p1['pName'];
                $pScore1 = $p1['pScore'];
                echo $pName1 .": ". $pScore1;
            ?>
        </div>
        <div id="p2score" class="pScore">
            <?php
                $p2 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `testGame` WHERE `pNum` = 2"));
                $pName2 = $p2['pName'];
                $pScore2 = $p2['pScore'];
                echo $pName2 .": ". $pScore2;
            ?>
        </div>
        <div id="p3score" class="pScore">
            <?php
                $p3 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `testGame` WHERE `pNum` = 3"));
                $pName3 = $p3['pName'];
                $pScore3 = $p3['pScore'];
                if($pName3 == '') {
                    echo "No player";
                } else {
                    echo $pName3 .": ". $pScore3;
                }
            ?>
        </div>
        <div id="p4score" class="pScore">
            <?php
                $p4 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `testGame` WHERE `pNum` = 4"));
                $pName4 = $p4['pName'];
                $pScore4 = $p4['pScore'];
                if($pName4 == '') {
                    echo "No player";
                } else {
                    echo $pName4 .": ". $pScore4;
                }
            ?>
        </div>
        <div id="p5score" class="pScore">
            <?php
                $p5 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `testGame` WHERE `pNum` = 5"));
                $pName5 = $p5['pName'];
                $pScore5 = $p5['pScore'];
                if($pName5 == '') {
                    echo "No player";
                } else {
                    echo $pName5 .": ". $pScore5;
                }
            ?>
        </div>
        <div id="p6score" class="pScore">
            <?php
                $p6 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `testGame` WHERE `pNum` = 6"));
                $pName6 = $p6['pName'];
                $pScore6 = $p6['pScore'];
                if($pName6 == '') {
                    echo "No player";
                } else {
                    echo $pName6 .": ". $pScore6;
                }
            ?>
        </div>
    </div>
</body>
</html>