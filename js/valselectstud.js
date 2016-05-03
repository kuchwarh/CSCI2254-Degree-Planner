function checkStudent() {

	var student = document.getElementById("students").value;
	var message = null;
	
	if (student == null || student == "") {
		message = "Please select a student."};	
	
	document.getElementById("studentsError").innerHTML = message;
	
	if (message == null) {
		return true;}
	else {return false;};
	
};

document.getElementById("students").addEventListener("blur", checkStudent, false);

function validatestud(event) {

	checkStudent();

	if (checkStudent()) {
		return true;}
	else {
		event.preventDefault();
		return false;
	}

};

document.getElementById("viewplan").addEventListener("submit", function(){validatestud(event)}, false);