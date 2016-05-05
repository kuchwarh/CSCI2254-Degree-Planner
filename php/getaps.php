<?php include("dbconn.php");

	$id = $_COOKIE['loginUserID'];

	$dbc = connect_to_db('gonzalyz');
	$query = "select reqs.id, class_cats.title from aps, reqs, class_cats
			  where aps.student = '$id' and aps.req = reqs.id
			  and reqs.class_cat = class_cats.id
			  order by class_cats.title";
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