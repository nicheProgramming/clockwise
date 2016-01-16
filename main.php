<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <script src="test.js"></script>
    <?php
    require('functions.php');
    require('overlay.php');
    isLoggedin();
    ?>
    <title>Clockwise</title>
</head>

<body>
    <button onClick="loadGame()">Game</button>
</body>
</html>