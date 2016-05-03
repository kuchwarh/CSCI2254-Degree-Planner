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
	    $req2=null;
	} else {
	    $req2 = $_POST['f1c2'];
	};
	
	if ($req2==null){
	    $change2= "update plan set req = NULL where student= $id and slot=2 ";
	    } else{
	$change2 = "update plan set req = $req2 where student= $id and slot=2";
	};
	perform_query($dbc, $change2);

//-----------------------
	if (!isset($_POST['f1c3']) || $_POST['f1c3'] == "") {
<<<<<<< Updated upstream
	    $req3 = null;
=======
<<<<<<< HEAD
	    $req3=null;
=======
	    $req3 = null;
>>>>>>> origin/master
>>>>>>> Stashed changes
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
	    $req4=null;
	} else {
	    $req4 = $_POST['f1c4'];
	};
	
	if ($req4==null){
	    $change4= "update plan set req = NULL where student= $id and slot=4 ";
	    } else{
	$change4 = "update plan set req = $req4 where student= $id and slot=4";
	};
	perform_query($dbc, $change4);

//-----------------------
	if (!isset($_POST['f1c5']) || $_POST['f1c5'] == "") {
	    $req5=null;
	} else {
	    $req5 = $_POST['f1c5'];
	};
	
	if ($req5==null){
	    $change5= "update plan set req = NULL where student= $id and slot=5 ";
	    } else{
	$change5 = "update plan set req = $req5 where student= $id and slot=5";
	};
	perform_query($dbc, $change5);

//-----------------------
	if (!isset($_POST['f1c6']) || $_POST['f1c6'] == "") {
	    $req6=null;
	} else {
	    $req6 = $_POST['f1c6'];
	};
	
	if ($req6==null){
	    $change6= "update plan set req = NULL where student= $id and slot=6 ";
	    } else{
	$change6 = "update plan set req = $req6 where student= $id and slot=6";
	};
	perform_query($dbc, $change6);
//-----------------------
	if (!isset($_POST['s1c1']) || $_POST['s1c1'] == "") {
	    $req7=null;
	} else {
	    $req7 = $_POST['s1c1'];
	};
	
if ($req7==null){
	    $change7= "update plan set req = NULL where student= $id and slot=7 ";
	    } else{
	$change7 = "update plan set req = $req7 where student= $id and slot=7";
	};
	perform_query($dbc, $change7);

//-----------------------
	if (!isset($_POST['s1c2']) || $_POST['s1c2'] == "") {
	    $req8=null;
	} else {
	    $req8 = $_POST['s1c2'];
	};
	
	if ($req8==null){
	    $change8= "update plan set req = NULL where student= $id and slot=8 ";
	    } else{
	$change8 = "update plan set req = $req8 where student= $id and slot=8";
	};
	perform_query($dbc, $change8);
//-----------------------
	if (!isset($_POST['s1c3']) || $_POST['f1c3'] == "") {
	    $req9=null;
	} else {
	    $req9 = $_POST['s1c3'];
	};
	if ($req9==null){
	    $change9= "update plan set req = NULL where student= $id and slot=9 ";
	    } else{
	$change9 = "update plan set req = $req9 where student= $id and slot=9";
	};
	perform_query($dbc, $change9);

//-----------------------
	if (!isset($_POST['s1c4']) || $_POST['s1c4'] == "") {
	    $req10=null;
	} else {
	    $req10 = $_POST['s1c4'];
	};
	
	if ($req10==null){
	    $change10= "update plan set req = NULL where student= $id and slot=10 ";
	    } else{
	$change10 = "update plan set req = $req10 where student= $id and slot=10";
	};
	perform_query($dbc, $change10);
//-----------------------
	if (!isset($_POST['s1c5']) || $_POST['s1c5'] == "") {
	    $req11=null;
	} else {
	    $req11 = $_POST['s1c5'];
	};
	
	if ($req11==null){
	    $change11= "update plan set req = NULL where student= $id and slot=11 ";
	    } else{
	$change11 = "update plan set req = $req11 where student= $id and slot=11";
	};
	perform_query($dbc, $change11);
//-----------------------
	if (!isset($_POST['s1c6']) || $_POST['s1c6'] == "") {
	    $req12=null;
	} else {
	    $req12 = $_POST['s1c6'];
	};
	
	if ($req12==null){
	    $change12= "update plan set req = NULL where student= $id and slot=12 ";
	    } else{
	$change12 = "update plan set req = $req12 where student= $id and slot=12";
	};
	perform_query($dbc, $change12);

//-----------------------
	if (!isset($_POST['f2c1']) || $_POST['f2c1'] == "") {
	    $req13=null;
	} else {
	    $req13 = $_POST['f2c1'];
	};
	
	if ($req13==null){
	    $change13= "update plan set req = NULL where student= $id and slot=13 ";
	    } else{
	$change13 = "update plan set req = $req13 where student= $id and slot=13";
	};
	perform_query($dbc, $change13);

//-----------------------
	if (!isset($_POST['f2c2']) || $_POST['f2c2'] == "") {
	    $req14=null;
	} else {
	    $req14 = $_POST['f2c2'];
	};
	
	if ($req14==null){
	    $change14= "update plan set req = NULL where student= $id and slot=14 ";
	    } else{
	$change14 = "update plan set req = $req14 where student= $id and slot=14";
	};
	perform_query($dbc, $change14);
//-----------------------
	if (!isset($_POST['f2c3']) || $_POST['f2c3'] == "") {
	    $req15=null;
	} else {
	    $req15 = $_POST['f2c3'];
	};
	
	if ($req15==null){
	    $change15= "update plan set req = NULL where student= $id and slot=15 ";
	    } else{
	$change15 = "update plan set req = $req15 where student= $id and slot=15";
	};
	perform_query($dbc, $change15);
//-----------------------
	if (!isset($_POST['f2c4']) || $_POST['f2c4'] == "") {
	    $req16=null;
	} else {
	    $req16 = $_POST['f2c4'];
	};
	
	if ($req16==null){
	    $change16= "update plan set req = NULL where student= $id and slot=16 ";
	    } else{
	$change16 = "update plan set req = $req16 where student= $id and slot=16";
	};
	perform_query($dbc, $change16);

//-----------------------
	if (!isset($_POST['f2c5']) || $_POST['f2c5'] == "") {
	    $req17=null;
	} else {
	    $req17 = $_POST['f2c5'];
	};
	
	if ($req17==null){
	    $change17= "update plan set req = NULL where student= $id and slot=17 ";
	    } else{
	$change17 = "update plan set req = $req17 where student= $id and slot=17";
	};
	perform_query($dbc, $change17);

//-----------------------
	if (!isset($_POST['f2c6']) || $_POST['f2c6'] == "") {
	    $req18=null;
	} else {
	    $req18 = $_POST['f2c6'];
	};
	
	if ($req18==null){
	    $change18= "update plan set req = NULL where student= $id and slot=18 ";
	    } else{
	$change18 = "update plan set req = $req18 where student= $id and slot=18";
	};
	perform_query($dbc, $change18);

//-----------------------
	if (!isset($_POST['s2c1']) || $_POST['s2c1'] == "") {
	    $req19=null;
	} else {
	    $req19 = $_POST['s2c1'];
	};
	
	if ($req19==null){
	    $change19= "update plan set req = NULL where student= $id and slot=19 ";
	    } else{
	$change19 = "update plan set req = $req19 where student= $id and slot=19";
	};
	perform_query($dbc, $change19);

//-----------------------
	if (!isset($_POST['s2c2']) || $_POST['s2c2'] == "") {
	    $req20=null;
	} else {
	    $req20 = $_POST['s2c2'];
	};
	
	if ($req20==null){
	    $change20= "update plan set req = NULL where student= $id and slot=20 ";
	    } else{
	$change20 = "update plan set req = $req20 where student= $id and slot=20";
	};
	perform_query($dbc, $change20);

//-----------------------
	if (!isset($_POST['s2c3']) || $_POST['s2c3'] == "") {
	    $req21=null;
	} else {
	    $req21 = $_POST['s2c3'];
	};
	
	if ($req21==null){
	    $change21= "update plan set req = NULL where student= $id and slot=21 ";
	    } else{
	$change21 = "update plan set req = $req21 where student= $id and slot=21";
	};
	perform_query($dbc, $change21);

//-----------------------
	if (!isset($_POST['s2c4']) || $_POST['s2c4'] == "") {
	    $req22=null;
	} else {
	    $req22 = $_POST['s2c4'];
	};
	
    if ($req22==null){
	    $change22= "update plan set req = NULL where student= $id and slot=22 ";
	    } else{
	$change22 = "update plan set req = $req22 where student= $id and slot=22";
	};
	perform_query($dbc, $change22);

//-----------------------
	if (!isset($_POST['s2c5']) || $_POST['s2c5'] == "") {
	    $req23=null;
	} else {
	    $req23 = $_POST['s2c5'];
	};
	
	if ($req23==null){
	    $change23= "update plan set req = NULL where student= $id and slot=23 ";
	    } else{
	$change23 = "update plan set req = $req23 where student= $id and slot=23";
	};
	perform_query($dbc, $change23);

//-----------------------
	if (!isset($_POST['s2c6']) || $_POST['s2c6'] == "") {
	    $req24=null;
	} else {
	    $req24 = $_POST['s2c6'];
	};
	
    if ($req24==null){
	    $change24= "update plan set req = NULL where student= $id and slot=24 ";
	    } else{
	$change24 = "update plan set req = $req24 where student= $id and slot=24";
	};
	perform_query($dbc, $change24);

//-----------------------
	if (!isset($_POST['f3c1']) || $_POST['f3c1'] == "") {
	    $req25 = null;
	} else {
	    $req25 = $_POST['f3c1'];
	};
	
	if ($req25==null){
	    $change25= "update plan set req = NULL where student= $id and slot=25 ";
	    } else{
	$change25 = "update plan set req = $req25 where student= $id and slot=25";
	};
	perform_query($dbc, $change25);
//-----------------------
	if (!isset($_POST['f3c2']) || $_POST['f3c2'] == "") {
	    $req26 = null;
	} else {
	    $req26 = $_POST['f3c2'];
	};
	
	if ($req26==null){
	    $change26= "update plan set req = NULL where student= $id and slot=26 ";
	    } else{
	$change26 = "update plan set req = $req26 where student= $id and slot=26";
	};
	perform_query($dbc, $change26);

//-----------------------
	if (!isset($_POST['f3c3']) || $_POST['f3c3'] == "") {
	    $req27 = null;
	} else {
	    $req27 = $_POST['f3c3'];
	};
	
	if ($req27==null){
	    $change27= "update plan set req = NULL where student= $id and slot=27 ";
	    } else{
	$change27 = "update plan set req = $req27 where student= $id and slot=27";
	};
	perform_query($dbc, $change27);

//-----------------------
	if (!isset($_POST['f3c4']) || $_POST['f3c4'] == "") {
	    $req28 = null;
	} else {
	    $req28 = $_POST['f3c4'];
	};
	
	if ($req28==null){
	    $change28= "update plan set req = NULL where student= $id and slot=28 ";
	    } else{
	$change28 = "update plan set req = $req28 where student= $id and slot=28";
	};
	perform_query($dbc, $change28);

//-----------------------
	if (!isset($_POST['f3c5']) || $_POST['f3c5'] == "") {
	    $req29 = null;
	} else {
	    $req29 = $_POST['f3c5'];
	};
	
	if ($req29==null){
	    $change29= "update plan set req = NULL where student= $id and slot=29 ";
	    } else{
	$change29 = "update plan set req = $req29 where student= $id and slot=29";
	};
	perform_query($dbc, $change29);

//-----------------------
	if (!isset($_POST['f3c6']) || $_POST['f3c6'] == "") {
	    $req30 = null;
	} else {
	    $req30 = $_POST['f3c6'];
	};
	
	if ($req30==null){
	    $change30= "update plan set req = NULL where student= $id and slot=30 ";
	    } else{
	$change30 = "update plan set req = $req30 where student= $id and slot=30";
	};
	perform_query($dbc, $change30);

//-----------------------
	if (!isset($_POST['s3c1']) || $_POST['s3c1'] == "") {
	    $req31 = null;
	} else {
	    $req31 = $_POST['s3c1'];
	};
	
		if ($req31==null){
	    $change31= "update plan set req = NULL where student= $id and slot=31 ";
	    } else{
	$change31 = "update plan set req = $req31 where student= $id and slot=31";
	};
	perform_query($dbc, $change31);

//-----------------------
	if (!isset($_POST['s3c2']) || $_POST['s3c2'] == "") {
	    $req32 = null;
	} else {
	    $req32 = $_POST['s3c2'];
	};
	
	if ($req32==null){
	    $change32= "update plan set req = NULL where student= $id and slot=32 ";
	    } else{
	$change32 = "update plan set req = $req32 where student= $id and slot=32";
	};
	perform_query($dbc, $change32);
//-----------------------
	if (!isset($_POST['s3c3']) || $_POST['s3c3'] == "") {
	    $req33 = null;
	} else {
	    $req33 = $_POST['s3c3'];
	};
	
		if ($req33==null){
	    $change33= "update plan set req = NULL where student= $id and slot=33 ";
	    } else{
	$change33 = "update plan set req = $req33 where student= $id and slot=33";
	};
	perform_query($dbc, $change33);

//-----------------------
	if (!isset($_POST['s3c4']) || $_POST['s3c4'] == "") {
	    $req34 = null;
	} else {
	    $req34 = $_POST['s3c4'];
	};
	
		if ($req34==null){
	    $change34= "update plan set req = NULL where student= $id and slot=34 ";
	    } else{
	$change34 = "update plan set req = $req34 where student= $id and slot=34";
	};
	perform_query($dbc, $change34);

//-----------------------
	if (!isset($_POST['s3c5']) || $_POST['s3c5'] == "") {
	    $req35 = null;
	} else {
	    $req35 = $_POST['s3c5'];
	};
	
	if ($req35==null){
	    $change35= "update plan set req = NULL where student= $id and slot=35 ";
	    } else{
	$change35 = "update plan set req = $req35 where student= $id and slot=35";
	};
	perform_query($dbc, $change35);

//-----------------------
	if (!isset($_POST['s3c6']) || $_POST['s3c6'] == "") {
	    $req36 = null;
	} else {
	    $req36 = $_POST['s3c6'];
	};
	
	if ($req36==null){
	    $change36= "update plan set req = NULL where student= $id and slot=36 ";
	    } else{
	$change36 = "update plan set req = $req36 where student= $id and slot=36";
	};
	perform_query($dbc, $change36);
//-----------------------
	if (!isset($_POST['f4c1']) || $_POST['f4c1'] == "") {
	    $req37 = null;
	} else {
	    $req37 = $_POST['f4c1'];
	};
	
		if ($req37==null){
	    $change37= "update plan set req = NULL where student= $id and slot=37 ";
	    } else{
	$change37 = "update plan set req = $req37 where student= $id and slot=37";
	};
	perform_query($dbc, $change37);
//-----------------------
	if (!isset($_POST['f4c2']) || $_POST['f4c2'] == "") {
	    $req38 = null;
	} else {
	    $req38 = $_POST['f4c2'];
	};
	
	if ($req38==null){
	    $change38= "update plan set req = NULL where student= $id and slot=38 ";
	    } else{
	$change38 = "update plan set req = $req38 where student= $id and slot=38";
	};
	perform_query($dbc, $change38);
//-----------------------
	if (!isset($_POST['f4c3']) || $_POST['f4c3'] == "") {
	    $req39 = null;
	} else {
	    $req39 = $_POST['f4c3'];
	};
	
		if ($req39==null){
	    $change39= "update plan set req = NULL where student= $id and slot=39 ";
	    } else{
	$change39 = "update plan set req = $req39 where student= $id and slot=39";
	};
	perform_query($dbc, $change39);
//-----------------------
	if (!isset($_POST['f4c4']) || $_POST['f4c4'] == "") {
	    $req40 = null;
	} else {
	    $req40 = $_POST['f4c4'];
	};
	
	if ($req40==null){
	    $change40= "update plan set req = NULL where student= $id and slot=40 ";
	    } else{
	$change40 = "update plan set req = $req40 where student= $id and slot=40";
	};
	perform_query($dbc, $change40);

//-----------------------
	if (!isset($_POST['f4c5']) || $_POST['f4c5'] == "") {
	    $req41 = null;
	} else {
	    $req41 = $_POST['f4c5'];
	};
	
	if ($req41==null){
	    $change41= "update plan set req = NULL where student= $id and slot=41 ";
	    } else{
	$change41 = "update plan set req = $req41 where student= $id and slot=41";
	};
	perform_query($dbc, $change41);


//-----------------------
	if (!isset($_POST['f4c6']) || $_POST['f4c6'] == "") {
	    $req42 = null;
	} else {
	    $req42 = $_POST['f4c6'];
	};
	
	if ($req42==null){
	    $change42= "update plan set req = NULL where student= $id and slot=42 ";
	    } else{
	$change42 = "update plan set req = $req42 where student= $id and slot=42";
	};
	perform_query($dbc, $change42);

//-----------------------

	if (!isset($_POST['s4c1']) || $_POST['s4c1'] == "") {
	    $req43 = null;
	} else {
	    $req43 = $_POST['s4c1'];
	};
	
	if ($req43==null){
	    $change43= "update plan set req = NULL where student= $id and slot=43 ";
	    } else{
	$change43 = "update plan set req = $req43 where student= $id and slot=43";
	};
	perform_query($dbc, $change43);


//-----------------------
	if (!isset($_POST['s4c2']) || $_POST['s4c2'] == "") {
	    $req44 = null;
	} else {
	    $req44 = $_POST['s4c2'];
	};
	
	if ($req44==null){
	    $change44= "update plan set req = NULL where student= $id and slot=44 ";
	    } else{
	$change44 = "update plan set req = $req44 where student= $id and slot=44";
	};
	perform_query($dbc, $change44);


//-----------------------
	if (!isset($_POST['s4c3']) || $_POST['s4c3'] == "") {
	    $req45 = null;
	} else {
	    $req45 = $_POST['s4c3'];
	};
	
	if ($req45==null){
	    $change45= "update plan set req = NULL where student= $id and slot=45 ";
	    } else{
	$change45 = "update plan set req = $req45 where student= $id and slot=45";
	};
	perform_query($dbc, $change45);


//-----------------------
	if (!isset($_POST['s4c4']) || $_POST['s4c4'] == "") {
	    $req46 = null;
	} else {
	    $req46 = $_POST['s4c4'];
	};
	
	if ($req46==null){
	    $change46= "update plan set req = NULL where student= $id and slot=46 ";
	    } else{
	$change46 = "update plan set req = $req46 where student= $id and slot=46";
	};
	perform_query($dbc, $change46);


//-----------------------
	if (!isset($_POST['s4c5']) || $_POST['s4c5'] == "") {
	    $req47 = null;
	} else {
	    $req47 = $_POST['s4c5'];
	};
	
	if ($req47==null){
	    $change47= "update plan set req = NULL where student= $id and slot=47 ";
	    } else{
	$change47 = "update plan set req = $req47 where student= $id and slot=47";
	};
	perform_query($dbc, $change47);


//-----------------------
	if (!isset($_POST['s4c6']) || $_POST['s4c6'] == "") {
	    $req48 = null;
	} else {
	    $req48 = $_POST['s4c6'];
	};
	if ($req48==null){
	    $change48= "update plan set req = NULL where student= $id and slot=48 ";
	    } else{
	$change48 = "update plan set req = $req48 where student= $id and slot=48";
	};
	perform_query($dbc, $change48);


//-----------------------


	echo "<script>
		window.location.href='classplanner.php';
		</script>";