<?php include("dbconn.php");

	$id = $_COOKIE['loginUserID'];

	$dbc = connect_to_db('gonzalyz');
	$query = "select fields_of_study.id, fields_of_study.name from fields_of_study, enroll 
			where enroll.student = '$id' and enroll.field = fields_of_study.id and 
			enroll.current = true and fields_of_study.type = 'minor'";
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