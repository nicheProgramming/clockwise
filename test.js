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

//Should refresh a div. 
function reloadF(div){
    //hidePlayer();
    
    var container = document.getElementById(div);
    var content = container.innerHTML;
    container.innerHTML= content;
}

function hidePlayer() {
    //Should run a for loop to check each player's score. 
    //If it's 0 or below, hide the score box. 
    for(i=0;1<7;i++) {
        
        document.getElementById("p" + i + "score").style.display = 'none';
    
    }
}