$(document).ready(function() {

	$.ajax({
		url: "php/showstudents.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var name = item.first_name + " " + item.last_name;
				var id = item.id;
				$("#students").append($("<option></option>").val(id).html(name));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}

	}); 

});