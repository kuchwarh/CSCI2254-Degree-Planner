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
	    $req3;
	} else {
	    $req3 = $_POST['f1c3'];
	};
	
	if ($req3 == null) {
	    $change3 = "update plan set req = NULL where student= $id and slot=3 ";
	} else {
	    $change3 = "update plan set req = $req3 where student= $id and slot=3 ";
	};
	perform_query($dbc, $change3);

//-----------------------
	if (!isset($_POST['f1c4']) || $_POST['f1c4'] == "") {
	    $req4 = null;
	} else {
	    $req4 = $_POST['f1c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req4 where student= $id and slot=4";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f1c5']) || $_POST['f1c5'] == "") {
	    $req5 = null;
	} else {
	    $req5 = $_POST['f1c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req5 where student= $id and slot=5 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f1c6']) || $_POST['f1c6'] == "") {
	    $req6 = null;
	} else {
	    $req6 = $_POST['f1c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req6 where student= $id and slot=6 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c1']) || $_POST['s1c1'] == "") {
	    $req7 = null;
	} else {
	    $req7 = $_POST['s1c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req7 where student= $id and slot=7 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c2']) || $_POST['s1c2'] == "") {
	    $req8 = null;
	} else {
	    $req8 = $_POST['s1c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req8 where student= $id and slot=8 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c3']) || $_POST['f1c3'] == "") {
	    $req9 = null;
	} else {
	    $req9 = $_POST['s1c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req9 where student= $id and slot=9 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c4']) || $_POST['s1c4'] == "") {
	    $req10 = null;
	} else {
	    $req10 = $_POST['s1c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req10 where student= $id and slot=10 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c5']) || $_POST['s1c5'] == "") {
	    $req11 = null;
	} else {
	    $req11 = $_POST['s1c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req11 where student= $id and slot=11 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s1c6']) || $_POST['s1c6'] == "") {
	    $req12 = null;
	} else {
	    $req12 = $_POST['s1c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req12 where student= $id and slot=12 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c1']) || $_POST['f2c1'] == "") {
	    $req13 = null;
	} else {
	    $req13 = $_POST['f2c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req13 where student= $id and slot=13 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c2']) || $_POST['f2c2'] == "") {
	    $req14 = null;
	} else {
	    $req14 = $_POST['f2c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req14 where student= $id and slot=14 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c3']) || $_POST['f2c3'] == "") {
	    $req15 = null;
	} else {
	    $req15 = $_POST['f2c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req15 where student= $id and slot=15 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c4']) || $_POST['f2c4'] == "") {
	    $req16 = null;
	} else {
	    $req16 = $_POST['f2c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req16 where student= $id and slot=16 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c5']) || $_POST['f2c5'] == "") {
	    $req17 = null;
	} else {
	    $req17 = $_POST['f2c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req17 where student= $id and slot=17 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f2c6']) || $_POST['f2c6'] == "") {
	    $req18 = null;
	} else {
	    $req18 = $_POST['f2c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req18 where student= $id and slot=18 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c1']) || $_POST['s2c1'] == "") {
	    $req19 = null;
	} else {
	    $req19 = $_POST['s2c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req19 where student= $id and slot=19 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c2']) || $_POST['s2c2'] == "") {
	    $req20 = null;
	} else {
	    $req20 = $_POST['s2c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req20 where student= $id and slot=20 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c3']) || $_POST['s2c3'] == "") {
	    $req21 = null;
	} else {
	    $req21 = $_POST['s2c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req21 where student= $id and slot=21 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c4']) || $_POST['s2c4'] == "") {
	    $req22 = null;
	} else {
	    $req22 = $_POST['s2c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req22 where student= $id and slot=22 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c5']) || $_POST['s2c5'] == "") {
	    $req23 = null;
	} else {
	    $req23 = $_POST['s2c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req23 where student= $id and slot=23 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s2c6']) || $_POST['s2c6'] == "") {
	    $req24 = null;
	} else {
	    $req24 = $_POST['s2c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req24 where student= $id and slot=24 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c1']) || $_POST['f3c1'] == "") {
	    $req25 = null;
	} else {
	    $req25 = $_POST['f3c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req25 where student= $id and slot=25 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c2']) || $_POST['f3c2'] == "") {
	    $req26 = null;
	} else {
	    $req26 = $_POST['f3c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req26 where student= $id and slot=26 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c3']) || $_POST['f3c3'] == "") {
	    $req27 = null;
	} else {
	    $req27 = $_POST['f3c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req27 where student= $id and slot=27 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c4']) || $_POST['f3c4'] == "") {
	    $req28 = null;
	} else {
	    $req28 = $_POST['f3c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req28 where student= $id and slot=28 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c5']) || $_POST['f3c5'] == "") {
	    $req29 = null;
	} else {
	    $req29 = $_POST['f3c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req29 where student= $id and slot=29 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f3c6']) || $_POST['f3c6'] == "") {
	    $req30 = null;
	} else {
	    $req30 = $_POST['f3c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req30 where student= $id and slot=30 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c1']) || $_POST['s3c1'] == "") {
	    $req31 = null;
	} else {
	    $req31 = $_POST['s3c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req31 where student= $id and slot=31 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c2']) || $_POST['s3c2'] == "") {
	    $req32 = null;
	} else {
	    $req32 = $_POST['s3c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req32 where student= $id and slot=32 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c3']) || $_POST['s3c3'] == "") {
	    $req33 = null;
	} else {
	    $req33 = $_POST['s3c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req33 where student= $id and slot=33 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c4']) || $_POST['s3c4'] == "") {
	    $req34 = null;
	} else {
	    $req34 = $_POST['s3c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req34 where student= $id and slot=34 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c5']) || $_POST['s3c5'] == "") {
	    $req35 = null;
	} else {
	    $req35 = $_POST['s3c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req35 where student= $id and slot=35 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s3c6']) || $_POST['s3c6'] == "") {
	    $req36 = null;
	} else {
	    $req36 = $_POST['s3c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req36 where student= $id and slot=36 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c1']) || $_POST['f4c1'] == "") {
	    $req37 = null;
	} else {
	    $req37 = $_POST['f4c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req37 where student= $id and slot=37 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c2']) || $_POST['f4c2'] == "") {
	    $req38 = null;
	} else {
	    $req38 = $_POST['f4c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req38 where student= $id and slot=38 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c3']) || $_POST['f4c3'] == "") {
	    $req39 = null;
	} else {
	    $req39 = $_POST['f4c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req39 where student= $id and slot=39 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c4']) || $_POST['f4c4'] == "") {
	    $req40 = null;
	} else {
	    $req40 = $_POST['f4c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req40 where student= $id and slot=40 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c5']) || $_POST['f4c5'] == "") {
	    $req41 = null;
	} else {
	    $req41 = $_POST['f4c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req41 where student= $id and slot=41 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['f4c6']) || $_POST['f4c6'] == "") {
	    $req42 = null;
	} else {
	    $req42 = $_POST['f4c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req42 where student= $id and slot=42 ";
	perform_query($dbc, $insertap);

//-----------------------

	if (!isset($_POST['s4c1']) || $_POST['s4c1'] == "") {
	    $req43 = null;
	} else {
	    $req43 = $_POST['s4c1'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req43 where student= $id and slot=43 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s4c2']) || $_POST['s4c2'] == "") {
	    $req44 = null;
	} else {
	    $req44 = $_POST['s4c2'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req44 where student= $id and slot=44 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s4c3']) || $_POST['s4c3'] == "") {
	    $req45 = null;
	} else {
	    $req45 = $_POST['s4c3'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req45 where student= $id and slot=45 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s4c4']) || $_POST['s4c4'] == "") {
	    $req46 = null;
	} else {
	    $req46 = $_POST['s4c4'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req46 where student= $id and slot=46 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s4c5']) || $_POST['s4c5'] == "") {
	    $req47 = null;
	} else {
	    $req47 = $_POST['s4c5'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req47 where student= $id and slot=47 ";
	perform_query($dbc, $insertap);

//-----------------------
	if (!isset($_POST['s4c6']) || $_POST['s4c6'] == "") {
	    $req48 = null;
	} else {
	    $req48 = $_POST['s4c6'];
	};
	
	$dbc = connect_to_db('gonzalyz');
	$insertap = "update plan set req = $req48 where student= $id and slot=48 ";
	perform_query($dbc, $insertap);

//-----------------------


	echo "<script>
		window.location.href='classplanner.php';
		</script>";