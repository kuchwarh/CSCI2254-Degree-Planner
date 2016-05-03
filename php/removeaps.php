<?php include("dbconn.php");

	$id = $_COOKIE['loginUserID'];
	
	$req = $_POST['curraps'];
	
	$dbc = connect_to_db('gonzalyz');
	$change1 = "delete from aps where req = '$req' and student = '$id'";
	perform_query($dbc, $change1);
	
	header("Location: classplanner.php");