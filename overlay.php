<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <script src="test.js"></script>
</head>

<body>
    <div id="userInfo">
        <?php session_start(); echo "Welcome, " . $_SESSION['userName'] . "!"; ?>
    </div>
    <button id="logOut" onCLick="logOut()">Log Out</button>
</body>
</html>