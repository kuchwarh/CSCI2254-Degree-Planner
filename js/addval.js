function checkFirst() {

	var first = document.getElementById("firstname").value;
	var message = null;
	
	if (first == null || first == "") {
		message = "Please enter a first name."};	
	
	document.getElementById("firstnameError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("firstname").addEventListener("blur", checkFirst, false);

function checkLast() {

	var last = document.getElementById("lastname").value;
	var message = null;
	
	if (last == null || last == "") {
		message = "Please enter a last name."};	
	
	document.getElementById("lastnameError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("lastname").addEventListener("blur", checkLast, false);

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

	checkFirst();
	checkLast();
	checkName();
	checkPassword();
	checkSchool();

	if (checkFirst() && checkLast() && checkName() && checkPassword() && checkSchool()) {
		return true;}
	else {
		event.preventDefault();
		return false;
	}

};

document.getElementById("addform").addEventListener("submit", function(){validate(event)}, false);