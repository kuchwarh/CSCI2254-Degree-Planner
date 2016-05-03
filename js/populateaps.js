$(document).ready(function() {

	function checkReq() {

		var req = document.getElementById("curraps").value;
		var message = null;
	
		if (req == null || req == "") {
			message = "Please select a requirement."};	
	
		document.getElementById("removeError").innerHTML = message;
	
		if (message == null) {
			return true;}
		else {return false;};
	
	};

	document.getElementById("curraps").addEventListener("blur", checkReq, false);
	
	function validate(event) {

		checkReq();

		if (checkReq()) {
			return true;}
		else {
			event.preventDefault();
			return false;
		}

	};

	document.getElementById("removeform").addEventListener("submit", function(){validate(event)}, false);
	
	
	function checkReq2() {

		var req = document.getElementById("aps").value;
		var message = null;
	
		if (req == null || req == "") {
			message = "Please select a requirement."};	
	
		document.getElementById("addError").innerHTML = message;
	
		if (message == null) {
			return true;}
		else {return false;};
	
	};

	document.getElementById("aps").addEventListener("blur", checkReq2, false);
	
	function validate2(event) {

		checkReq2();

		if (checkReq2()) {
			return true;}
		else {
			event.preventDefault();
			return false;
		}

	};

	document.getElementById("addform").addEventListener("submit", function(){validate2(event)}, false);
	

	$.ajax({
		url: "../php/getaps.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				var type = item.type;
				$("#curraps").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json"
	
	});
	
});