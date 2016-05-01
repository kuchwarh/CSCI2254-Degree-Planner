<?php include("dbconn.php");

	$field = $_POST['fields'];
	$title = $_POST['fieldreqtitle'];
	$number = $_POST['fieldreqnumber'];
	
	$dbc = connect_to_db('gonzalyz');
	$insertcat = "insert into class_cats (title) values ('$title')";
	perform_query($dbc, $insertcat);
	
	$insertreq = "insert into reqs (field, class_cat, number) values ('$field', 
				  (select id from class_cats where title = '$title'), '$number')";
	perform_query($dbc, $insertreq);
	
	echo "<script>alert('Field of study requirement successfully added.');
		window.location.href='../adminhome.html';
		</script>";