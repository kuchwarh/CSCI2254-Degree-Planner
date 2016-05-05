<?php include("dbconn.php");

	$field = $_REQUEST['fields'];
	
	$dbc = connect_to_db('gonzalyz');
	$query = "select class_cats.title, reqs.number 
			  from class_cats, reqs, fields_of_study 
			  where reqs.class_cat = class_cats.id 
			  and reqs.field = fields_of_study.id 
			  and fields_of_study.id = '$field'
			  order by class_cats.title";
	$result = perform_query($dbc, $query);
	$reqs = array();
	while ($obj = mysqli_fetch_object($result)) {
		$reqs[] = $obj;
	};
	
	echo json_encode($reqs);
	disconnect_from_db($dbc, $result);