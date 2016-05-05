<?php include("dbconn.php");

	$dbc = connect_to_db('gonzalyz');
	$query = "select id, name, type from fields_of_study where type in ('major', 'minor') order by type, name";
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