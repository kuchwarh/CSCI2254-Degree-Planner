function checkCoreReqTitle() {

	var title = document.getElementById("corereqtitle").value;
	var message = null;
	
	if (title == null || title == "") {
		message = "Please enter a requirement title."};	
	
	document.getElementById("corereqtitleError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("corereqtitle").addEventListener("blur", checkCoreReqTitle, false);

function checkCoreReqNumber() {

	var number = document.getElementById("corereqnumber").value;
	var message = null;
	
	var expression = /^\d+$/;
	var regex = new RegExp(expression);
	
	if (number == null || number == "" || !number.match(regex)) {
		message = "Please enter a number for the requirement."};	
	
	document.getElementById("corereqnumberError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("corereqnumber").addEventListener("blur", checkCoreReqNumber, false);

function validateAddCore(event) {

	checkCoreReqTitle();
	checkCoreReqNumber();

	if (checkCoreReqTitle() && checkCoreReqNumber()) {
		return true;}
	else {
		event.preventDefault();
		return false;
	}

};

document.getElementById("addcoreform").addEventListener("submit", function(){validateAddCore(event)}, false);


function checkField() {

	var fields = document.getElementById("fields").value;
	var message = null;
	
	if (fields == null || fields == "") {
		message = "Please choose a field."};	
	
	document.getElementById("fieldsError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("fields").addEventListener("blur", checkField, false);

function checkFieldReqTitle() {

	var title = document.getElementById("fieldreqtitle").value;
	var message = null;
	
	if (title == null || title == "") {
		message = "Please enter a requirement title."};	
	
	document.getElementById("fieldreqtitleError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("fieldreqtitle").addEventListener("blur", checkFieldReqTitle, false);

function checkFieldReqNumber() {

	var number = document.getElementById("fieldreqnumber").value;
	var message = null;
	
	var expression = /^\d+$/;
	var regex = new RegExp(expression);
	
	if (number == null || number == "" || !number.match(regex)) {
		message = "Please enter a number for the requirement."};	
	
	document.getElementById("fieldreqnumberError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("fieldreqnumber").addEventListener("blur", checkFieldReqNumber, false);

function validateFieldCore(event) {

	checkField();
	checkFieldReqTitle();
	checkFieldReqNumber();

	if (checkField() && checkFieldReqTitle() && checkFieldReqNumber()) {
		return true;}
	else {
		event.preventDefault();
		return false;
	}

};

document.getElementById("addfieldform").addEventListener("submit", function(){validateFieldCore(event)}, false);