<?php include("dbconn.php");
	
	$student = $_POST['students'];
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Degree Planner: View Plan</title>	
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

	<fieldset>
	<legend>Unassigned Requirements</legend>
		<div id='unassigned_reqs'>
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select c.title, r.number
					  from class_cats as c, reqs as r, enroll as e
					  where e.student = '$student'
					  and c.id = r.class_cat
					  and e.field = r.field
					  and r.id not in (select req 
									  from plan
									  where student = e.student
									  and req is not null)
					  and r.id not in (select req
					  				   from aps
					  				   where student = e.student)";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			foreach ($reqs as $req) {
				if ($req->number > 1) {
					for ($i = 1; $i <= $req->number; $i++) {
						echo $req->title . " " . $i . "<br>";
					};
				} else {
					echo $req->title . "<br>";
				};
			};
		?>
		</div>
	</fieldset>
	
	<fieldset>
	<legend>Advanced Placement Credits</legend>
		<div id='ap_reqs'>
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select c.title
					  from class_cats as c,reqs as r
					  inner join aps as a
					  on r.id = a.req
	 				  where a.student = '$student'
	 				  and r.class_cat = c.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			foreach ($reqs as $req) {
				echo $req->title . "<br>";
			};
		?>
		</div>
	</fieldset>
	
	<fieldset>
	<legend>First Year, Fall</legend>
		Course 1:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 1
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 2:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 2
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 3:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 3
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 4:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 4
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 5:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 5
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 6:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 6
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
	</fieldset>
	
	<fieldset>
	<legend>First Year, Spring</legend>
		Course 1:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 7
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 2:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 8
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 3:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 9
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 4:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 10
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 5:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 11
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 6:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 12
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
	</fieldset>
	
	<fieldset>
	<legend>Second Year, Fall</legend>
		Course 1:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 13
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 2:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 14
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 3:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 15
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 4:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 16
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 5:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 17
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 6:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 18
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
	</fieldset>
	
	<fieldset>
	<legend>Second Year, Fall</legend>
		Course 1:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 19
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 2:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 20
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 3:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 21
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 4:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 22
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 5:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 23
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 6:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 24
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
	</fieldset>
	
	<fieldset>
	<legend>Third Year, Fall</legend>
		Course 1:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 25
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 2:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 26
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 3:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 27
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 4:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 28
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 5:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 29
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 6:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 30
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
	</fieldset>
	
	<fieldset>
	<legend>Third Year, Spring</legend>
		Course 1:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 31
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 2:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 32
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 3:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 33
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 4:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 34
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 5:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 35
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 6:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 36
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
	</fieldset>

	<fieldset>
	<legend>Fourth Year, Fall</legend>
		Course 1:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 37
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 2:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 38
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 3:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 39
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 4:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 40
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 5:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 41
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 6:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 42
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
	</fieldset>
	
	<fieldset>
	<legend>Fourth Year, Spring</legend>
		Course 1:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 43
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 2:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 44
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 3:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 45
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 4:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 46
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 5:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 47
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
		<br>
		Course 6:
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select class_cats.title
					  from reqs, class_cats
	  				  where reqs.id in (select req
				 				   		from plan
				 					    where slot = 48
				  				   		and student = '$student')
				  	  and reqs.class_cat = class_cats.id";
			$result = perform_query($dbc, $query);
			$reqs = array();
			while ($obj = mysqli_fetch_object($result)) {
				$reqs[] = $obj;
			};
			if (empty($reqs)) {
				echo "No plan";
			} else {
				foreach ($reqs as $req) {
					echo $req->title . "<br>";
				};
			};
		?>
	</fieldset>
	
</body>
</html>
				