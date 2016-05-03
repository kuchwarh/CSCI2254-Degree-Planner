<?php include('dbconn.php');

// 	$id = $_COOKIE['loginUserID'];

	$dbc = connect_to_db('gonzalyz');
	$query = "select title from class_cats where id in (select reqs.class_cat from reqs inner 
	        join fields_of_study on reqs.field = fields_of_study.id where fields_of_study.type = 'core' and school 
	        is null)";
	
	$result = perform_query($dbc, $query);
	if ( mysqli_num_rows( $result ) == 0 ) {
		die("bad query $query");
	};
	
	
	$fields = array();
	while ($obj = mysqli_fetch_object($result)) {
		$fields[] = $obj;
	}
	disconnect_from_db($dbc, $result);