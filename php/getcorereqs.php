<?php include('dbconn.php');

 	$id = $_COOKIE['loginUserID'];

	$dbc = connect_to_db('gonzalyz');
	$query = "select c.title, r.id
					  from class_cats as c, reqs as r, enroll as e
					  where e.student = '$id'
					  and c.id = r.class_cat
					  and e.field = r.field
					  and r.id not in (select req 
									  from plan
									  where student = e.student
									  and req is not null)
					  and r.id not in (select req
					  				   from aps
					  				   where student = e.student)";
	
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
	
	?>