$(document).ready(function() {
	$("#showreqs").click(function() {

		$.ajax({
			url: "php/viewfieldreqs.php",
			data: {fields : $('#fields').val()},
			success: function(data) {
				$("#reqs").empty();
				$("#reqs").append("<tr><th>Requirement</th></tr>");
				$.each(data, function(i, item) {
					var title = item.title;
					var number = item.number;
					$("#reqs").append("<tr><td>" + title + "</td>   </tr>");
					})		
				},
			async: true,
			dataType: "json",
			error: function(req, err) {console.log(err);}
	
		}); 

	});

});