<?php 

include('dbconn.php');

$id = $_COOKIE['loginUserID'];

$dbc = connect_to_db('gonzalyz');

$query = "select p.req, c.title, s.semester, s.year
					  from class_cats as c, reqs as r, slots as s, plan as p
					  where p.student = '$id'
                      and p.req = r.id
                      and r.class_cat = c.id
                      and p.slot = s.id";

$result = perform_query($dbc, $query);
    
$core_table = array();	// put the rows as objects in an array

while ( $obj = mysqli_fetch_object( $result ) ) {
		$core_table[] = $obj;
	}


echo json_encode($core_table);
