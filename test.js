/*var p1score = 3;
var p2score = 3;
var p3score = 3;
var p4score = 3;
var p5score = 3;
var p6score = 3;*/

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

//Obsolete.
/*
function rollDice(currentPlayerScore) {
	
	var d1 = Math.floor((Math.random() * 6) + 1);
	var d2 = Math.floor((Math.random() * 6) + 1);
	var d3 = Math.floor((Math.random() * 6) + 1);
	var d4 = Math.floor((Math.random() * 6) + 1);
	var d5 = Math.floor((Math.random() * 6) + 1);
	
	var roll = d1 + d2 + d3 + d4 + d5;
	var mod = roll % 2;

	document.getElementById("numbers").innerHTML = roll;
	
	//Mod == 0 means even.
	if(roll >= 20 && mod == 0) {
		
		currentPlayerScore--;
		
	} else if(roll >= 20 && mod != 0) {
		
		currentPlayerScore++;
		
	} else if(roll <= 19 && mod == 0) {
		
		currentPlayerScore++;
		
	} else if(roll <= 19 && mod != 0) {
		
		currentPlayerScore--;
		
	}
	
}

//Updates the scoreboard after each turn.
function updateScore() {
	
	//Hides score box.
	document.getElementsByClassName("pScore").display = "none";
	
	//Unhides score box for alive players.
	if(turnCheck().indexOf("player1") >= -1) {
		
		document.getElementById("p1score").display = "inline";
		
	} else if(turnCheck().indexOf("player2") >= -1) {
		
		document.getElementById("p2score").display = "inline";
		
	} else if(turnCheck().indexOf("player3") >= -1) {
		
		document.getElementById("p3score").display = "inline";
		
	} else if(turnCheck().indexOf("player4") >= -1) {
		
		document.getElementById("p4score").display = "inline";
		
	} else if(turnCheck().indexOf("player5") >= -1) {
		
		document.getElementById("p5score").display = "inline";
		
	} else if(turnCheck().indexOf("player6") >= -1) {
		
		document.getElementById("p6score").display = "inline";
		
	}
}*/