$(document).ready(function() {

// Freshmen Fall Requirements
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c1").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(xhr, options, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c2").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c3").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c4").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c5").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c6").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//Freshmen Fall Courses Within the Plan
	$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 1},
		success: function(data) {
		     console.log(JSON.stringify(data));
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c1").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 2},
		success: function(data) {
		     console.log(JSON.stringify(data));
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c2").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 3},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c3").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});		
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 4},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c4").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 5},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c5").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 6},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f1c6").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//Freshman Spring Requirements
$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c1").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c2").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c3").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c4").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c5").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c6").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//Freshmen Spring Courses Within the Plan
	$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 7},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c1").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 8},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c2").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 9},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c3").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});		
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 10},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c4").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 11},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c5").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 12},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s1c6").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

//----------------------------------------------------------------------------------------------------------
//Sophomore Fall Requirements
$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c1").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c2").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c3").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c4").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c5").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c6").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//Sophomore Fall Courses Within the Plan (13-18)
	$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 13},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c1").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 14},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c2").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 15},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c3").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});		
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 16},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c4").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 17},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c5").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 18},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f2c6").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

//----------------------------------------------------------------------------------------
//Sophomore Spring Requirements
$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c1").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c2").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c3").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c4").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c5").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c6").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//Sophomore Spring Courses Within the Plan (19-24)
	$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 19},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c1").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 20},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c2").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 21},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c3").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});		
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 22},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c4").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 23},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c5").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 24},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s2c6").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

//----------------------------------------------------------------------------------------------------
// Junior Fall Requirements
$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c1").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c2").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c3").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c4").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c5").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c6").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//Junior Fall Courses Within the Plan (25-30)
	$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 25},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c1").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 26},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c2").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 27},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c3").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});		
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 28},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c4").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 29},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c5").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 30},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f3c6").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//------------------------------------------------------------------------------------------------------
//Junior Spring Requirements
$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c1").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c2").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c3").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c4").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c5").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c6").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//Junior Spring Courses Within the Plan (31-36)
	$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 31},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c1").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 32},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c2").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 33},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c3").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});		
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 34},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c4").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 35},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c5").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 36},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s3c6").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

//------------------------------------------------------------------------------------------------------
//Senior Fall
$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c1").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c2").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c3").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c4").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c5").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c6").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//Senior Fall Courses Within the Plan (37-42)
	$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 37},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c1").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 38},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c2").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 39},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c3").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});		
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 40},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c4").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 41},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c5").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 42},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#f4c6").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
//------------------------------------------------------------------------------------------------------
// Senior Spring Requirements

$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c1").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c2").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	

	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c3").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c4").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c5").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
	$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c6").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//Senior Spring Courses Within the Plan (43-48)
	$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 43},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c1").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 44},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c2").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 45},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c3").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});		
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 46},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c4").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 47},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c5").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
		$.ajax({
		url: "getcurrentplan.php",
		data: {slot : 48},
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#s4c6").append($("<option></option>").val(id).html(title).attr('selected', true));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	
//-------------------------------------------------------------------------------------------------------
//For AP Form

$.ajax({
		url: "getcorereqs.php",
		success: function(data) {
			$.each(data, function(i, item) {
				var id = item.id;
				var title = item.title;
				$("#aps").append($("<option></option>").val(id).html(title));
				})		
			},
		async: true,
		dataType: "json",
		error: function(req, err) {console.log(err);}
	
	});	
	

});