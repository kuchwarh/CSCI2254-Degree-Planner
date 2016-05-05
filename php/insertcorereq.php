<?php include("dbconn.php");

	$title = $_POST['corereqtitle'];
	$number = $_POST['corereqnumber'];
	
	$dbc = connect_to_db('gonzalyz');
	
	for ($i = 1; $i <= $number; $i++) {
		$insertcat = "insert into class_cats (title) values ('" . $title . " " . $i . "')";
		perform_query($dbc, $insertcat);
	
		$getid = "select max(id) from class_cats where title = '" . $title . " " . $i . "'";
		$result = perform_query($dbc, $getid);
		$row = mysqli_fetch_array($result);
		$id = $row['max(id)'];
	
		$insertreq = "insert into reqs (field, class_cat, number) values (1, 
					  '$id', 1)";
		perform_query($dbc, $insertreq);
	};
	
	echo "<script>alert('Core requirement successfully added.');
		window.location.href='../adminhome.html#three';
		</script>";