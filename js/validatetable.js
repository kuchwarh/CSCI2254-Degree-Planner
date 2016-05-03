$(document).ready(function() {

	function checkTable(event) {

		var table = document.getElementById("viewcore");
		var inputs = table.getElementsByTagName("input");
	
		for (var i = 0; i < inputs.length; i += 2) {
			var check = inputs[i];
			var select = inputs [i + 1];
		
			if (!(check.value == "") || !(check.value == null)) {
				if (!(select.value == "") || !(select.value == null)) {
					alert("Requirements cannot be marked as AP credit and planned for a semester.");
					event.preventDefault();
					return false;
				} else {
					return true;
				};
			};
		
		};

	};

	document.getElementById("att_form").addEventListener("submit", function(){checkTable(event)}, false);

});