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
    
    <div id="scoreBox">
        <div id="p1score" class="pScore">
            <?php
                //Sudo code:
                //If query p1score != null, {
                //  echo p1name . p1score;
                //} else {
                //  echo "<script>hidePlayer(player1);</script>";
                //}
                $p1score = mysqli_query($con, "SELECT * FROM testGame WHERE player1score > 0");
                // echo $p1score;
            ?>
        </div>
        <div id="p2score" class="pScore">
            <?php
                $p2score = mysqli_query($con, "SELECT * FROM testGame WHERE player1score > 0");
                // echo $p2score;
            ?>
        </div>
        <div id="p3score" class="pScore">
            <?php
                $p3score = mysqli_query($con, "SELECT * FROM testGame WHERE player1score > 0");
                // echo $p3score;
            ?>
        </div>
        <div id="p4score" class="pScore">
            <?php
                $p4score = mysqli_query($con, "SELECT * FROM testGame WHERE player1score > 0");
                // echo $p4score;
            ?>
        </div>
        <div id="p5score" class="pScore">
            <?php
                $p5score = mysqli_query($con, "SELECT * FROM testGame WHERE player1score > 0");
                // echo $p5score;
            ?>
        </div>
        <div id="p6score" class="pScore">
            <?php
                $p6score = mysqli_query($con, "SELECT * FROM testGame WHERE player1score > 0");
                // echo $p6score;
            ?>
        </div>
    </div>
    
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
</body>
</html>