$(document).ready(function() {

	$.ajax({
		url: "getrequirements.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var name = item.name;
				$("#f1c1").append($("<option></option>").val(id).html(name));
				})		
			},
		async: true,
		dataType: "json"
	
	});	
	

});