<?php include("dbconn.php");

	$title = $_POST['corereqtitle'];
	$number = $_POST['corereqnumber'];
	
	$dbc = connect_to_db('gonzalyz');
	$insertcat = "insert into class_cats (title) values ('$title')";
	perform_query($dbc, $insertcat);
	
	$insertreq = "insert into reqs (field, class_cat, number) values (1, 
				  (select id from class_cats where title = '$title'), $number)";
	perform_query($dbc, $insertreq);
	
	echo "<script>alert('Core requirement successfully added.');
		window.location.href='../adminhome.html';
		</script>";