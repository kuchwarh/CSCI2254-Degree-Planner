<?php include("dbconn.php"); 
	
	$dbc = connect_to_db('gonzalyz');
	$query = "select username from students";
	$result = perform_query($dbc, $query);
	$usernames = array();
	while ($obj = mysqli_fetch_object($result)) {
		$usernames[] = $obj;
	};
	
	echo json_encode($usernames);
	disconnect_from_db($dbc, $result);