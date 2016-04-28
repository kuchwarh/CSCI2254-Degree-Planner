$(document).ready(function() {

	$.ajax({
		url: "php/majorupdate.php",
		success: function(data) {
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
	
	$.ajax({
		url: "php/getmajors.php",
		success: function(data) {
			
			if (data.length > 1) {
				$("#major1").append($("<option></option>").val(data[0].id).html(data[0].name).attr('selected', true));
				$("#major2").append($("<option></option>").val(data[1].id).html(data[1].name).attr('selected', true));
				} else {
					if (data.length > 0) {
						$("#major1").append($("<option></option>").val(data[0].id).html(data[0].name).attr('selected', true));
					};
				};
	
			},
		async: true,
		dataType: "json"
	
	});	

});