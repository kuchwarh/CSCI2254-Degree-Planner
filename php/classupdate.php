<?php include("dbconn.php");

	$id = $_COOKIE['loginUserID'];
	
	//-------------------------------
	if (!isset($_POST['f1c1']) || $_POST['f1c1'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f1c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=1 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f1c2']) || $_POST['f1c2'] == "") {
	    $req2 = null;
	} else {
	    $req2 = $_POST['f1c2'];
	};
	
	$change2 = "update plan set req = $req2 where student= $id and slot=2";
	perform_query($dbc, $change2);

//-----------------------
	if (!isset($_POST['f1c3']) || $_POST['f1c3'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f1c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=3 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f1c4']) || $_POST['f1c4'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f1c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=4";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f1c5']) || $_POST['f1c5'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f1c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=5 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f1c6']) || $_POST['f1c6'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f1c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=6 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c1']) || $_POST['s1c1'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s1c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=7 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c2']) || $_POST['s1c2'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s1c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=8 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c3']) || $_POST['f1c3'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s1c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=9 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c4']) || $_POST['s1c4'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s1c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=10 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c5']) || $_POST['s1c5'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s1c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=11 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c6']) || $_POST['s1c6'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s1c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=12 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c1']) || $_POST['f2c1'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f2c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=13 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c2']) || $_POST['f2c2'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f2c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=14 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c3']) || $_POST['f2c3'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f2c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=15 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c4']) || $_POST['f2c4'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f2c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=16 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c5']) || $_POST['f2c5'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f2c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=17 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c6']) || $_POST['f2c6'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f2c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=18 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c1']) || $_POST['s2c1'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s2c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=19 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c2']) || $_POST['s2c2'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s2c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=20 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c3']) || $_POST['s2c3'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s2c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=21 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c4']) || $_POST['s2c4'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s2c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=22 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c5']) || $_POST['s2c5'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s2c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=23 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c6']) || $_POST['s2c6'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s2c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=24 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c1']) || $_POST['f3c1'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f3c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=25 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c2']) || $_POST['f3c2'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f3c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=26 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c3']) || $_POST['f3c3'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f3c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=27 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c4']) || $_POST['f3c4'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f3c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=28 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c5']) || $_POST['f3c5'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f3c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=29 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c6']) || $_POST['f3c6'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f3c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=30 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c1']) || $_POST['s3c1'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s3c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=31 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c2']) || $_POST['s3c2'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s3c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=32 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c3']) || $_POST['s3c3'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s3c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=33 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c4']) || $_POST['s3c4'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s3c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=34 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c5']) || $_POST['s3c5'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s3c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=35 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c6']) || $_POST['s3c6'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s3c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=36 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c1']) || $_POST['f4c1'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f4c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=37 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c2']) || $_POST['f4c2'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f4c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=38 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c3']) || $_POST['f4c3'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f4c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=39 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c4']) || $_POST['f4c4'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f4c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=40 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c5']) || $_POST['f4c5'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f4c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=41 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c6']) || $_POST['f4c6'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['f4c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=42 ";
	perform_query($dbc, $insertap);

//-----------------------

	if (!isset($_POST['s4c1']) || $_POST['s4c1'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s4c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=43 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s4c2']) || $_POST['s4c2'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s4c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=44 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s4c3']) || $_POST['s4c3'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s4c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=45 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s4c4']) || $_POST['s4c4'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s4c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=46 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s4c5']) || $_POST['s4c5'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s4c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=47 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s4c6']) || $_POST['s4c6'] == "") {
	    $req = null;
	} else {
	    $req = $_POST['s4c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req where student= $id and slot=48 ";
	perform_query($dbc, $insertap);

//-----------------------


	echo "<script>
		window.location.href='classplanner.php';
		</script>";