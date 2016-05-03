<?php 

include('dbconn.php');

$id = $_COOKIE['loginUserID'];

$dbc = connect_to_db('gonzalyz');

$query = "select c.title, r.id
					  from class_cats as c,reqs as r
					  inner join aps as a
					  on r.id = a.req
	 				  where a.student = '$id'
	 				  and r.class_cat = c.id";
$result = perform_query($dbc, $query);
    
$core_table = array();	// put the rows as objects in an array

while ( $obj = mysqli_fetch_object( $result ) ) {
		$core_table[] = $obj;
	}


echo json_encode($core_table);
