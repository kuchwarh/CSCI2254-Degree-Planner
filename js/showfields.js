$(document).ready(function() {

	$.ajax({
		url: "php/showfields.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var name = item.name;
				var type = item.type;
				$("#fields").append($("<option></option>").val(id).html(name + " " + type));
				})		
			},
		async: true,
		dataType: "json"
	
	});
	
});