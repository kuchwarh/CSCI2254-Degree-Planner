<?php include("dbconn.php");

	$username = $_POST['username'];
	$password = $_POST['password'];
	$school = $_POST['school'];
	
	function checkname($name) {
		$dbc = connect_to_db('gonzalyz');
		$result = perform_query($dbc, "select * from students where username = '$name'");
		$matches = mysqli_num_rows($result);
		disconnect_from_db($dbc, $result);
		return ($matches == 1);
	};
	
	if (checkname($username) > 0) {
		echo "<script>alert('Username in use.');
		window.location.href='../adminhome.html';
		</script>";
	} else {
	
	$dbc = connect_to_db('gonzalyz');
	$insertstud = "insert into students (username, password, school) values ('$username', sha1('$password'), '$school')";
	perform_query($dbc, $insertstud);
	
	$getslots = "select id from slots";
	$result = perform_query($dbc, $getslots);
	$slots = array();
	while ($obj = mysqli_fetch_object($result)) {
		$slots[] = $obj;
	};
	
	function getID($name) {
		$dbc = connect_to_db('gonzalyz');
		$result = perform_query($dbc, "select id from students where username = '$name'");
		$row = mysqli_fetch_array($result);
		return $row['id'];
	};
	$studid = getID($username);
	
	foreach ($slots as $slot) {
		$insertslot = "insert into plan (slot, student) values ('$slot->id', '$studid')";
		perform_query($dbc, $insertslot);
	};
	
	echo "<script>alert('Student successfully signed-up.');
		window.location.href='../adminhome.html';
		</script>";
	
	};