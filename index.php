<!DOCTYPE html>
<html>
<head>
<script src = test.js></script>

</head>

<body>
    <?php
    require 'functions.php';
    session_start();
    isLoggedIn();
    ?>
    <div id="signUp">
    Sign up:
    <form name="signUp" action="signUp.php" onsubmit="return valSign()" method="post">
        Username: <input type="text" name="suserName"><br>
        Password: <input type="password" name="spassword"><br>
        Email: <input type="text" name="semail"><br>
        <input id="submitB" type="submit">
    </form>
    </div>
    <div id="logIn">
    Log in:
    <form name ="logIn" action="logIn.php" onsubmit="return valLog()" method="post">
        Email: <input type="text" name="lemail"><br>
        Password: <input type="password" name="lpassword"><br>
        <input type="submit">
    </form>
    </div>
</body>
</html>