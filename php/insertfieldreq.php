<?php include("dbconn.php");

	$field = $_POST['fields'];
	$title = $_POST['fieldreqtitle'];
	$number = $_POST['fieldreqnumber'];
	
	$dbc = connect_to_db('gonzalyz');
	$insertcat = "insert into class_cats (title) values ('$title')";
	perform_query($dbc, $insertcat);
	
	$getid = "select max(id) from class_cats where title = '$title'";
	$result = perform_query($dbc, $getid);
	$row = mysqli_fetch_array($result);
	$id = $row['max(id)'];
	
	$insertreq = "insert into reqs (field, class_cat, number) values ('$field', 
				  '$id', '$number')";
	perform_query($dbc, $insertreq);
	
	echo "<script>alert('Field of study requirement successfully added.');
		window.location.href='../adminhome.html#four';
		</script>";