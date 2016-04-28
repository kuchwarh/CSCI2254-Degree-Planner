function checkName() {

	var name = document.getElementById("username").value;
	var message = null;
	
	if (name == null || name == "") {
		message = "Please enter your username."};	
	
	document.getElementById("nameError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("username").addEventListener("blur", checkName, false);

function checkPassword() {

	var name = document.getElementById("password").value;
	var message = null;
	
	if (name == null || name == "") {
		message = "Please enter your password."};	
	
	document.getElementById("passwordError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("password").addEventListener("blur", checkPassword, false);

function validate(event) {

	checkName();
	checkPassword();

	if (checkName() && checkPassword()) {
		return true;}
	else {
		event.preventDefault();
		return false;
	}

};

document.getElementById("logform").addEventListener("submit", function(){validate(event)}, false);