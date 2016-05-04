<?php include('dbconn.php');

	$id = $_COOKIE['loginUserID'];
	$dbc = connect_to_db('gonzalyz');

	if(!empty($_POST['semester'])){
		
		$allreqs = array();
		
		foreach($_POST['semester'] as $idd){
			if (!($idd == "")) {
				$arr = explode (", ", $idd);
				$allreqs[] = $arr[2];
				
				$courses = "select * from plan 
							where student = '$id' and slot in (select id from slots 
															   where semester = '$arr[0]' 
															   and year = '$arr[1]') 
							and req is not null";
				$result = perform_query($dbc, $courses);
			
				$currplan = "select req from plan
							 where student = '$id' and slot in (select id from slots 
															   where semester = '$arr[0]' 
															   and year = '$arr[1]') 
							and req is not null";
				$getcurrplan = perform_query($dbc, $currplan);
				$currplans = array();
				while ($obj = mysqli_fetch_object($getcurrplan)) {
					$currplans[] = $obj;
				};
			
				$inslot = false;
				foreach ($currplans as $plan) {
					if ($arr[2] == $plan->req) {
						$inslot = true;
					};
				};
			
				if (!$inslot) {
					if (mysqli_num_rows($result) == 6) {
						echo "<script>alert('You cannot have more than 6 courses per semester.');
							  window.location.href='../studenthome.html#three';
							  </script>";
					} else {
						
						$allplanned = "select req from plan
									   where student = '$id'
									   and req is not null";
						$getallplanned = perform_query($dbc, $allplanned);
						$allplans = array();
						while ($obj = mysqli_fetch_object($getallplanned)) {
							$allplans[] = $obj;
						};
						
						foreach ($allplans as $plan) {
							$found = false;
							if ($arr[2] == $plan->req) {
								$found = true;
							};
							if ($found) {
								$remove = "update plan set req = null where student = '$id' and req = '$plan->req'";
								perform_query($dbc, $remove);
							};
						};
						
						$getslot = "select min(id) from slots 
									where id not in (select slot from plan 
													 where student = '$id' 
													 and req is not null) 
									and semester = '$arr[0]' and year = '$arr[1]'";
						$slotresult = perform_query($dbc, $getslot);
						$row = mysqli_fetch_array($slotresult);
						$slot = $row['min(id)'];
						$update = "update plan set req = '$arr[2]' 
								   where slot = '$slot'";
						perform_query($dbc, $update);					
					};
				};
			};
		};

		$allplanned = "select req from plan
					   where student = '$id'
					   and req is not null";
		$getallplanned = perform_query($dbc, $allplanned);
		$allplans = array();
		while ($obj = mysqli_fetch_object($getallplanned)) {
			$allplans[] = $obj;
		};
		
		foreach ($allplans as $plan) {
			$found = false;
			foreach ($allreqs as $req) {
				if ($plan->req == $req) {
					$found = true;
				};
			};
			if (!$found) {
				$remove = "update plan set req = null where student = '$id' and req = '$plan->req'";
				perform_query($dbc, $remove);
			};
		};
		
   };

	if(!empty($_POST['count'])){
		
		$allaps = array();
	
		foreach($_POST['count'] as $apid){
			$allaps[] = $apid;
		
     		$currapsquery = "select req from aps where student = '$id'";
			$getcurraps = perform_query($dbc, $currapsquery);
			$curraps = array();
			while ($obj = mysqli_fetch_object($getcurraps)) {
				$curraps[] = $obj;
			};
			
			$found = false;
			foreach ($curraps as $ap) {
				if ($ap->req == $apid) {
					$found = true;
				};
			};
			
			if (!$found) {
				$insert = "insert into aps (req, student) values ('$apid', '$id')";
				perform_query($dbc, $insert);
			};    
		};
		
		$alllisted = "select req from aps
					  where student = '$id'";
		$getalllisted = perform_query($dbc, $alllisted);
		$alllists = array();
		while ($obj = mysqli_fetch_object($getalllisted)) {
			$alllists[] = $obj;
		};
		
		foreach ($alllists as $listed) {
			$found = false;
			foreach ($allaps as $ap) {
				if ($listed->req == $ap) {
					$found = true;
				};
			};
			if (!$found) {
				$remove = "delete from aps where student = '$id' and req = '$listed->req'";
				perform_query($dbc, $remove);
			};
		};		
	};
   
   	header("Location: ../studenthome.html#three");