function checkName() {

	var name = document.getElementById("username").value;
	var message = null;
	
	if (name == null || name == "") {
		message = "Please enter a username."};	
	
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
		message = "Please enter a password."};	
	
	document.getElementById("passwordError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("password").addEventListener("blur", checkPassword, false);

function checkSchool() {

	var school = document.getElementById("school").value;
	var message = null;
	
	if (school == null || school == "") {
		message = "Please enter a school."};	
	
	document.getElementById("schoolError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("school").addEventListener("blur", checkSchool, false);

function validate(event) {

	checkName();
	checkPassword();
	checkSchool();

	if (checkName() && checkPassword() && checkSchool()) {
		return true;}
	else {
		event.preventDefault();
		return false;
	}

};

document.getElementById("addform").addEventListener("submit", function(){validate(event)}, false);