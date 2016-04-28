$(document).ready(function() {

	$.ajax({
		url: "php/minorupdate.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var name = item.name;
				$("#minor1").append($("<option></option>").val(id).html(name));
				$("#minor2").append($("<option></option>").val(id).html(name));
				})		
			},
		async: true,
		dataType: "json"
	
	});	

});