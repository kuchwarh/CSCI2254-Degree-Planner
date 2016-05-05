<?php include("dbconn.php");

	$id = $_COOKIE['loginUserID'];

	$dbc = connect_to_db('gonzalyz');
	$query = "select id, name from fields_of_study where type = 'major' and 
			 id not in (select fields_of_study.id from fields_of_study, enroll 
			 			where enroll.student = '$id' and enroll.field = fields_of_study.id 
			 			and current = true and fields_of_study.type = 'major')
			 order by name";
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