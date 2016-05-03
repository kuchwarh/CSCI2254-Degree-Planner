<?php include('dbconn.php');

    $slot = $_REQUEST['slot'];
 	$id = $_COOKIE['loginUserID'];

	$dbc = connect_to_db('gonzalyz');
	$query = "select c.title, r.id from class_cats as c, reqs as r, plan as p
	          where c.id = r.class_cat and p.student = '$id' and p.req = r.id and p.slot = '$slot'
	          and p.req is not null";
	
	$result = perform_query($dbc, $query);
	
	
	$fields = array();
	while ($obj = mysqli_fetch_object($result)) {
		$fields[] = $obj;
	}
	echo json_encode($fields);
	disconnect_from_db($dbc, $result);
	
	?>