<?php include("dbconn.php");


if (!isset($_POST['username']) or !isset($_POST['password'])
	or (0 == checklogin($_POST['username'], $_POST['password']))) {
		echo "<script>alert('Incorrect username or password.');
		window.location.href='../adminlogin.html';
		</script>";
		
} else {
	
	setcookie('loginUserID', getID($_POST['username']));
		
	header("Location: adminhome.html");
		
};

function checklogin($name, $password) {
	$dbc = connect_to_db('gonzalyz');
	$encodepw = sha1($password);
	$result = perform_query($dbc, "select * from admins where username = '$name' and password = '$encodepw'");
	$matches = mysqli_num_rows($result);
	disconnect_from_db($dbc, $result);
	return ($matches == 1);
};

function getID($name) {
	$dbc = connect_to_db('gonzalyz');
	$result = perform_query($dbc, "select id from admins where username = '$name'");
	$row = mysqli_fetch_array($result);
	disconnect_from_db($dbc, $result);
	return $row['id'];
};