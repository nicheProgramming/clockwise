var pTurn = 1;
var p1score = 3;
var p2score = 3;
var p3score = 3;
var p4score = 3;
var p5score = 3;
var p6score = 3;
var p1alive = true;
var p2alive = true;
var p3alive = true;
var p4alive = true;
var p5alive = true;
var p6alive = true;
var gameOver = false;

function valSign() {
    var x = document.forms["signUp"]["userName"].value;
    var y = document.forms["signUp"]["password"].value;
    var z = document.forms["signUp"]["email"].value;
    if (x == null || x == "" || y == null || y == "" || z == null || z == "") {
        alert("You have not entered all the neccessary information to make an account.");
        return false;
    }
}

function valLog() {
    var y = document.forms["logIn"]["password"].value;
    var z = document.forms["logIn"]["email"].value;
    if (y == null || y == "" || z == null || z == "") {
        alert("You have not entered all the neccessary information to log in.");
        return false;
    }
}

function logOut() {
	window.location = "endSession.php";
}

function loadGame() {
	window.location = "game.php";
}

function home() {
	window.location = "main.php";
}

function roll() {
    if(gameOver == false) {
        if((pTurn == 1 && p1alive == true) || (pTurn == 2 && p2alive == true) || (pTurn == 3 && p3alive == true) || (pTurn == 4 && p4alive == true) || (pTurn == 5 && p5alive == true) || (pTurn == 6 && p6alive == true)) {
            var die1 = Math.floor((Math.random() * 6) + 1);
            var die2 = Math.floor((Math.random() * 6) + 1);
            var die3 = Math.floor((Math.random() * 6) + 1);
            var die4 = Math.floor((Math.random() * 6) + 1);
            var die5 = Math.floor((Math.random() * 6) + 1);
            var total = die1 + die2 + die3 + die4 +die5;
            document.getElementById("die1").innerHTML = die1;
            document.getElementById("die2").innerHTML = die2;
            document.getElementById("die3").innerHTML = die3;
            document.getElementById("die4").innerHTML = die4;
            document.getElementById("die5").innerHTML = die5;
            document.getElementById("total").innerHTML = total;
            score(total);
            endTurn();
        } else {
            endTurn();
        }
    } else {
        alert("Game is over.");
    }
}
function populateBoard() {
    document.getElementById("p1score").innerHTML = "Player 1: " + p1score;
    document.getElementById("p2score").innerHTML = "Player 2: " + p2score;
    document.getElementById("p3score").innerHTML = "Player 3: " + p3score;
    document.getElementById("p4score").innerHTML = "Player 4: " + p4score;
    document.getElementById("p5score").innerHTML = "Player 5: " + p5score;
    document.getElementById("p6score").innerHTML = "Player 6: " + p6score;
    if(p1score <= 0) {
        document.getElementById("p1score").style.display = 'none';
        document.getElementById("log").innerHTML = 'Player 1 was eliminated.<br>';
        p1alive = false;
    }
    if (p2score <= 0) {
        document.getElementById("p2score").style.display = 'none';
        document.getElementById("log").innerHTML = 'Player 2 was eliminated.<br>';
        p2alive = false;
    } 
    if (p3score <= 0) {
        document.getElementById("p3score").style.display = 'none';
        document.getElementById("log").innerHTML = 'Player 3 was eliminated.<br>';
        p3alive = false;
    } 
    if (p4score <= 0) {
        document.getElementById("p4score").style.display = 'none';
        document.getElementById("log").innerHTML = 'Player 4 was eliminated.<br>';
        p4alive = false;
    } 
    if (p5score <= 0) {
        document.getElementById("p5score").style.display = 'none';
        document.getElementById("log").innerHTML = 'Player 5 was eliminated.<br>';
        p5alive = false;
    } 
    if (p6score <= 0) {
        document.getElementById("p6score").style.display = 'none';
        document.getElementById("log").innerHTML = 'Player 6 was eliminated.<br>';
        p6alive = false;
    }
}

function winCheck() {
    if(p1score == 7) {
        alert("Player 1 won!");
        document.getElementById("log").innerHTML = 'Player 1 won!<br>'; 
        gameOver = true;
    }
    if(p2score == 7) {
        alert("Player 2 won!");
        document.getElementById("log").innerHTML = 'Player 2 won!<br>'; 
        gameOver = true;
    }
    if(p3score == 7) {
        alert("Player 3 won!");
        document.getElementById("log").innerHTML = 'Player 3 won!<br>'; 
        gameOver = true;
    }
    if(p4score == 7) {
        alert("Player 4 won!");
        document.getElementById("log").innerHTML = 'Player 4 won!<br>'; 
        gameOver = true;
    }
    if(p5score == 7) {
        alert("Player 5 won!");
        document.getElementById("log").innerHTML = 'Player 5 won!<br>'; 
        gameOver = true;
    }
    if(p6score == 7) {
        alert("Player 6 won!");
        document.getElementById("log").innerHTML = 'Player 6 won!<br>'; 
        gameOver = true;
    }
    if(p1alive == true && p2alive != true && p3alive != true && p4alive != true && p5alive != true && p6alive != true) {
        alert("Player 1 won!");
        document.getElementById("log").innerHTML = 'Player 1 won!<br>'; 
        gameOver = true;
    }
    if(p1alive != true && p2alive == true && p3alive != true && p4alive != true && p5alive != true && p6alive != true) {
        alert("Player 2 won!");
        document.getElementById("log").innerHTML = 'Player 2 won!<br>'; 
        gameOver = true;
    }
    if(p1alive != true && p2alive != true && p3alive == true && p4alive != true && p5alive != true && p6alive != true) {
        alert("Player 3 won!");
        document.getElementById("log").innerHTML = 'Player 3 won!<br>'; 
        gameOver = true;
    }
    if(p1alive != true && p2alive != true && p3alive != true && p4alive == true && p5alive != true && p6alive != true) {
        alert("Player 4 won!");
        document.getElementById("log").innerHTML = 'Player 4 won!<br>'; 
        gameOver = true;
    }
    if(p1alive != true && p2alive != true && p3alive != true && p4alive != true && p5alive == true && p6alive != true) {
        alert("Player 5 won!");
        document.getElementById("log").innerHTML = 'Player 5 won!<br>'; 
        gameOver = true;
    }
    if(p1alive != true && p2alive != true && p3alive != true && p4alive != true && p5alive != true && p6alive == true) {
        alert("Player 6 won!");
        document.getElementById("log").innerHTML = 'Player 6 won!<br>'; 
        gameOver = true;
    }
}

function score(geck) {
    if(pTurn == 1){
        if(geck % 2 == 0 && geck >= 20){
            p1score--;
            document.getElementById("log").innerHTML = 'Player 1 lost a point.<br>'; 
        }
        else if(geck % 2 == 1&& geck < 20){
            p1score--;
            document.getElementById("log").innerHTML = 'Player 1 lost a point.<br>'; 
        }
        else if(geck % 2 == 0 && geck < 20){
            p1score++;
            document.getElementById("log").innerHTML = 'Player 1 got a point.<br>'; 
        }
        else if(geck% 2 == 1&& geck >= 20){
            p1score++;
            document.getElementById("log").innerHTML = 'Player 1 got a point.<br>'; 
        }
    }
    else if(pTurn == 2){
        if(geck % 2 == 0 && geck >= 20){
            p2score--;
            document.getElementById("log").innerHTML = 'Player 2 lost a point.<br>';  
        }
        else if(geck% 2 == 1&& geck < 20){
            p2score--;
            document.getElementById("log").innerHTML = 'Player 2 lost a point.<br>';  
        }
        else if(geck % 2 == 0 && geck < 20){
            p2score++;
            document.getElementById("log").innerHTML = 'Player 2 got a point.<br>'; 
        }
        else if(geck% 2 == 1&& geck >= 20){
            p2score++;
            document.getElementById("log").innerHTML = 'Player 2 got a point.<br>';
        }
    }
    else if(pTurn == 3){
        if(geck % 2 == 0 && geck >= 20){
            p3score--;
            document.getElementById("log").innerHTML = 'Player 3 lost a point.<br>'; 
        }
        else if(geck% 2 == 1&& geck < 20){
            p3score--;
            document.getElementById("log").innerHTML = 'Player 3 lost a point.<br>';
        }
        else if(geck % 2 == 0 && geck < 20){
            p3score++;
            document.getElementById("log").innerHTML = 'Player 3 got a point.<br>';
        }
        else if(geck% 2 == 1&& geck >= 20){
            p3score++;
            document.getElementById("log").innerHTML = 'Player 3 got a point.<br>';
        }
    }
    else if(pTurn == 4){
        if(geck % 2 == 0 && geck >= 20){
            p4score--;
            document.getElementById("log").innerHTML = 'Player 4 lost a point.<br>';
        }
        else if(geck % 2 == 1&& geck < 20){
            p4score--;
            document.getElementById("log").innerHTML = 'Player 4 lost a point.<br>';
        }
        else if(geck % 2 == 0 && geck < 20){
            p4score++;
            document.getElementById("log").innerHTML = 'Player 4 got a point.<br>';
        }
        else if(geck % 2 == 1&& geck >= 20){
            p4score++;
            document.getElementById("log").innerHTML = 'Player 4 got a point.<br>';
        }
    }
    else if(pTurn == 5){
        if(geck % 2 == 0 && geck >= 20){
            p5score--;
            document.getElementById("log").innerHTML = 'Player 5 lost a point.<br>';
        }
        else if(geck% 2 == 1&& geck < 20){
            p5score--;
            document.getElementById("log").innerHTML = 'Player 5 lost a point.<br>';
        }
        else if(geck % 2 == 0 && geck < 20){
            p5score++;
            document.getElementById("log").innerHTML = 'Player 5 got a point.<br>';
        }
        else if(geck% 2 == 1&& geck >= 20){
            p5score++;
            document.getElementById("log").innerHTML = 'Player 5 got a point.<br>';
        }
    }
    else if(pTurn == 6){
        if(geck % 2 == 0 && geck >= 20){
            p6score--;
            document.getElementById("log").innerHTML = 'Player 6 lost a point.<br>';
        }
        else if(geck% 2 == 1&& geck < 20){
            p6score--;
            document.getElementById("log").innerHTML = 'Player 6 lost a point.<br>';
        }
        else if(geck % 2 == 0 && geck < 20){
            p6score++;
            document.getElementById("log").innerHTML = 'Player 6 got a point.<br>';
        }
        else if(geck% 2 == 1&& geck >= 20){
            p6score++;
            document.getElementById("log").innerHTML = 'Player 6 got a point.<br>';
        }
    }
    populateBoard();
}

function endTurn() {
    pTurn++;
    if(pTurn == 1 && p1alive == false) {
        pTurn++;
    }
    if(pTurn == 2 && p2alive == false) {
        pTurn++;
    }
    if(pTurn == 3 && p3alive == false) {
        pTurn++;
    }
    if(pTurn == 4 && p4alive == false) {
        pTurn++;
    }
    if(pTurn == 5 && p5alive == false) {
        pTurn++;
    }
    if(pTurn == 6 && p6alive == false) {
        pTurn++;
    } 
    if(pTurn <= 6) {
        document.getElementById("turn").innerHTML = "It's player " + pTurn + "'s turn.";
    }
    else if(pTurn > 6 && p1alive == true) {
        pTurn = 1;
        document.getElementById("turn").innerHTML = "It's player " + pTurn + "'s turn.";
    }
    else if(pTurn > 6 && p2alive == true) {
        pTurn = 2;
        document.getElementById("turn").innerHTML = "It's player " + pTurn + "'s turn.";
    }
    else if(pTurn > 6 && p3alive == true) {
        pTurn = 3;
        document.getElementById("turn").innerHTML = "It's player " + pTurn + "'s turn.";
    }
    else if(pTurn > 6 && p4alive == true) {
        pTurn = 4;
        document.getElementById("turn").innerHTML = "It's player " + pTurn + "'s turn.";
    }
    else if(pTurn > 6 && p5alive == true) {
        pTurn = 5;
        document.getElementById("turn").innerHTML = "It's player " + pTurn + "'s turn.";
    }
    else if(pTurn > 6 && p6alive == true) {
        pTurn = 6;
        document.getElementById("turn").innerHTML = "It's player " + pTurn + "'s turn.";
    }
    winCheck();
}