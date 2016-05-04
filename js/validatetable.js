$(document).ready(function() {

	function checkTable(event) {

		var table = document.getElementById("viewcore");
		var checks = document.getElementsByName("count[]");
		console.log(checks);
		var selects = table.getElementsByTagName("select");
		console.log(selects);
	
		var overlap = false;
		for (var i = 0; i < checks.length; i++) {
			var check = checks[i];
			console.log(check.checked);
			var select = selects[i];
			console.log(select.value);
			
			if (check.checked && !(select.value == "")) {
				overlap = true;
			};
		};
			
		if (overlap) {				
				alert("Requirements cannot be marked as AP credit and planned for a semester.");
				event.preventDefault();
				return false;
		} else {
			return true;
		};

	};

	document.getElementById("att_form").addEventListener("submit", function(){checkTable(event)}, false);

});