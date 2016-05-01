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

function validate(event) {

	checkCoreReqTitle();
	checkCoreReqNumber();

	if (checkCoreReqTitle() && checkCoreReqNumber()) {
		return true;}
	else {
		event.preventDefault();
		return false;
	}

};

document.getElementById("addcoreform").addEventListener("submit", function(){validate(event)}, false);