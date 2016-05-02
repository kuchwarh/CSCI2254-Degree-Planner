<?php include("dbconn.php"); 
	
	$dbc = connect_to_db('gonzalyz');
	$query = "select id, first_name, last_name from students";
	$result = perform_query($dbc, $query);
	$students = array();
	while ($obj = mysqli_fetch_object($result)) {
		$students[] = $obj;
	};
	
	echo json_encode($students);
	disconnect_from_db($dbc, $result);