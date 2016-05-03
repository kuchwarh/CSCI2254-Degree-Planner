<?php 

include('dbconn.php');

$id = $_COOKIE['loginUserID'];

$dbc = connect_to_db('gonzalyz');

//$query = "SELECT class_cats.title, reqs.number FROM `class_cats`, `reqs` WHERE reqs.class_cat = class_cats.id and reqs.field=1;";


$query = "select c.title, r.number, r.id
					  from class_cats as c, reqs as r, enroll as e
					  where e.student = '$id'
					  and c.id = r.class_cat
					  and e.field = r.field
                      and r.field = '1'
					  and r.id not in (select req 
									  from plan
									  where student = e.student
									  and req is not null)
					  and r.id not in (select req
					  				   from aps
					  				   where student = e.student)";
$result = perform_query($dbc, $query);
    
$core_table = array();	// put the rows as objects in an array

while ( $obj = mysqli_fetch_object( $result ) ) {
		$core_table[] = $obj;
	}


echo json_encode($core_table);
