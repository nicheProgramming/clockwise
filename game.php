<!DOCTYPE html>
<html>
<head>
    <?php require('overlay.php');?>
    <?php require('functions.php');?>
    <link rel="stylesheet" type="text/css" href="test.css">
    <script src="test.js"></script>
</head>

<body>
    <!-- Obsolete.
    <button onClick="rollDice();"> Roll Dice </button>
    <div id="numbers">No dice have been rolled.</div>-->
    <form action="roll.php" method='post'>
        <input type="submit" name="submit">
    </form>
    <!--Is it possible to refresh certain elements individually?-->
    <div id="scoreBox">
        <div id="p1score" class="pScore"></div>
        <div id="p2score" class="pScore"></div>
        <div id="p3score" class="pScore"></div>
        <div id="p4score" class="pScore"></div>
        <div id="p5score" class="pScore"></div>
        <div id="p6score" class="pScore"></div>
    </div>
    <button onClick="home();">Home</button>
    <?php isLoggedIn(); makeTable();/*array_push($usersInGame, $_SESSION['userName']); echo implode(',', $usersInGame);*/ ?>
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