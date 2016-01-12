<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <script src="test.js"></script>
    
    <title>Clockwise</title>
</head>

<body>
    <?php
    
    require('functions.php');
    require('overlay.php');
    isLoggedin(); 
    ?>
    <button onClick="loadGame()">Game</button>
</body>
</html>