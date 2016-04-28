<?php include("dbconn.php");

	$id = $_COOKIE['loginUserID'];

	$dbc = connect_to_db('gonzalyz');
	$query = "select id, name from fields_of_study where type = 'major'";
	$result = perform_query($dbc, $query);
	if ( mysqli_num_rows( $result ) == 0 ) {
		die("bad query $query");
	};
	$fields = array();
	while ($obj = mysqli_fetch_object($result)) {
		$fields[] = $obj;
	}
	echo json_encode($fields);
	disconnect_from_db($dbc, $result);



//function get_major1($thisid) {
	
//	$dbc = connect_to_db('gonzalyz');
//	$query = "select fields_of_study.id from fields_of_study, enroll 
//			  where enroll.student = '$thisid' and enroll.field = fields_of_study.id
//			  and fields_of_study.type = 'major' and enroll.current = true limit 1";
//	$result = perform_query($dbc, $query);
//	$row = mysqli_fetch_array($result);
//	disconnect_from_db($dbc, $result);
//	return $row['id'];
//}