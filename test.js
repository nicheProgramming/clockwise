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

function reload(){
        var container = document.getElementById("yourDiv");
        var content = container.innerHTML;
        container.innerHTML= content;
}
