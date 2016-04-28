$(document).ready(function() {

	$.ajax({
		url: "php/majorupdate.php",
		success: function(data) {
			console.log(data);
			$.each(data, function(i, item) {
				var id = item.id;
				var name = item.name;
				$("#major1").append($("<option></option>").val(id).html(name));
				$("#major2").append($("<option></option>").val(id).html(name));
				})		
			},
		async: true,
		dataType: "json"
	
	});	

});
