<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Class Planner</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/getcorereqs.js"></script>
	<script type="text/javascript" src="../js/populateaps.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
                
                $('#apadd').addClass('hidden');
                $('#apremove').addClass('hidden');
            
            
                $('#addAP').click(function() {
               		$('#apadd').toggleClass('hidden');
		  		});
		  		
		  		$('#cancel').click(function() {
		  			$('#apadd').toggleClass('hidden');
		  		});
		  		
		  		 $('#removeAP').click(function() {
               		$('#apremove').toggleClass('hidden');
		  		});
		  		
		  		$('#removecancel').click(function() {
		  			$('#apremove').toggleClass('hidden');
		  		});
            
            });   
  	</script>
</head>
<body>

	<script>
		if (document.cookie.indexOf('loginUserID') < 0) {
			alert("Please log in.");
			window.location.href='../studentlogin.html';
		};
	</script>

    <?php
        include('dbconn.php');
        $student = $_COOKIE['loginUserID'];
    ?>
    
    <header id="header">
		<h1>Degree Planner</h1>
		<a href="../studenthome.html">Home</a>
		<a href="studentlogout.php">Log Out</a>
	</header>
    
    <div id="left">
    	<section class="wrapper style1">
		<div class='tab'>
            <h3>Unassigned Requirements</h3>
            <div style="overflow: scroll; height: 112px;">
            <?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select c.title, r.number
					  from class_cats as c, reqs as r, enroll as e where e.student = '$student' and c.id = r.class_cat and e.field = r.field
					  and r.id not in (select req from plan where student = e.student and req is not null)
					  and r.id not in (select req from aps where student = e.student)
					  order by c.title";
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
		    </div>
		</section>
		
		<section class="wrapper style2">
		<div class='tab'>
            <h3>Requirements with AP Credit</h3>
            <div id="APreqs" style="overflow: scroll; height: 110px;">
			<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select c.title from class_cats as c,reqs as r
					  inner join aps as a on r.id = a.req
	 				  where a.student = '$student' and r.class_cat = c.id
	 				  order by c.title";
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
		<br>
			<button id="removeAP">Remove AP Credits</button>
            <button id="addAP" style="float: right; margin-right: 60px">Add AP Credits</button>
        </div>
        </section>
        
    </div>
    <div id="right">
        
        <form method= "POST" action= "classupdate.php">
        <section class='wrapper style2'>
		<div class='tab'>
        	<h3>First Year, Fall</h3>
        		<div style="width: 90%;">
                    <h4>Course 1:</h4>
                    <select id="f1c1" name="f1c1">
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 2:</h4>
                    <select id="f1c2" name="f1c2">
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 3:</h4>
                    <select id="f1c3" name="f1c3">
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 4:</h4>
                    <select id="f1c4" name="f1c4">
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 5:</h4>
                    <select id="f1c5" name="f1c5">
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 6:</h4>
                    <select id="f1c6" name="f1c6">
                    <option value="">&nbsp;</option></select>
                </div>
        </div>
        </section>

		<section class='wrapper style1'>
		<div class='tab'>
                <h3>First Year, Spring</h3>                
                    <div style='width: 90%;'>    
                	<h4>Course 1:</h4>
                	<select id="s1c1" name="s1c1">
                                    <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 2:</h4><select id="s1c2" name="s1c2">
                            <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 3:</h4><select id="s1c3" name="s1c3">
                           <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 4:</h4><select id="s1c4" name="s1c4">
                            <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 5:</h4><select id="s1c5" name="s1c5">
                            <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 6:</h4><select id="s1c6" name="s1c6">
                            <option value="">&nbsp;</option>
                    </select>
                </div>
			</div>
			</section>
			
		<section class='wrapper style2'>
		<div class='tab'>
                <h3>Second Year, Fall</h3>
                <div style='width: 90%'>    
                    <h4>Course 1:</h4><select id="f2c1" name="f2c1">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 2:</h4><select id="f2c2" name="f2c2">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 3:</h4><select id="f2c3" name="f2c3">
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 4:</h4><select id="f2c4" name="f2c4">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 5:</h4><select id="f2c5" name="f2c5">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 6:</h4><select id="f2c6" name="f2c6">
                            <option value="">&nbsp;</option>
                                </select>
                </div>
        </div>
        </section>        
			
		<section class='wrapper style1'>
		<div class='tab'>
				<h3>Second Year, Spring</h3>
				<div style="width: 90%">
					<h4>Course 1:</h4><select id="s2c1" name="s2c1">
						   <option value="">&nbsp;</option>
								</select>
					<br>
					<h4>Course 2:</h4><select id="s2c2" name="s2c2">
							<option value="">&nbsp;</option>
								</select>
					<br>
					<h4>Course 3:</h4><select id="s2c3" name="s2c3">
							<option value="">&nbsp;</option>
								</select>
					<br>
					<h4>Course 4:</h4><select id="s2c4" name="s2c4">
							<option value="">&nbsp;</option>
								</select>
					<br>
					<h4>Course 5:</h4><select id="s2c5" name="s2c5">
							<option value="">&nbsp;</option>
								</select>
					<br>
					<h4>Course 6:</h4><select id="s2c6" name="s2c6">
							<option value="">&nbsp;</option>
								</select>
				</div>
		</div>
		</section>
        
        <section class='wrapper style2'>
		<div class='tab'>
                <h3>Third Year, Fall</h3>
                <div style="width: 90%">    
                	<h4>Course 1:</h4><select id="f3c1" name="f3c1">
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 2:</h4><select id="f3c2" name="f3c2">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 3:</h4><select id="f3c3" name="f3c3">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 4:</h4><select id="f3c4" name="f3c4">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 5:</h4><select id="f3c5" name="f3c5">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 6:</h4><select id="f3c6" name="f3c6">
                            <option value="">&nbsp;</option>
                                </select>
                </div>
        </div>
        </section>
            
        <section class='wrapper style1'>
		<div class='tab'>
                <h3>Third Year, Spring</h3>
                <div style="width: 90%;">    
                    <h4>Course 1:</h4><select id="s3c1" name="s3c1">
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 2:</h4><select id="s3c2" name="s3c2">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 3:</h4><select id="s3c3" name="s3c3">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 4:</h4><select id="s3c4" name="s3c4">
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 5:</h4><select id="s3c5" name="s3c5">
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 6:</h4><select id="s3c6" name="s3c6">
                           <option value="">&nbsp;</option>
                                </select>
                </div>
        </div>
        </section>
            
    	<section class='wrapper style2'>
		<div class='tab'>
                <h3>Fourth Year, Fall</h3>
                <div style="width: 90%">    
                    <h4>Course 1:</h4><select id="f4c1" name="f4c1">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 2:</h4><select id="f4c2" name="f4c2">
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 3:</h4><select id="f4c3" name="f4c3">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 4:</h4><select id="f4c4" name="f4c4">
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 5:</h4><select id="f4c5" name="f4c5">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 6:</h4><select id="f4c6" name="f4c6">
                            <option value="">&nbsp;</option>
                                </select>
                </div>
        </div>
        </section>
        
        <section class='wrapper style1' style="margin-bottom: 7em">
		<div class='tab'>
                <h3>Fourth Year, Spring</h3>
                <div style='width: 90%;'>    
                   <h4>Course 1:</h4><select id="s4c1" name="s4c1">
                          <option value="">&nbsp;</option>
                                </select>
                	<br>
                    <h4>Course 2:</h4><select id="s4c2" name="s4c2">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 3:</h4><select id="s4c3" name="s4c3">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 4:</h4><select id="s4c4" name="s4c4">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 5:</h4><select id="s4c5" name="s4c5">
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 6:</h4><select id="s4c6" name="s4c6">
                           <option value="">&nbsp;</option>
                                </select>
                </div>
           </div>
           </section>
           <section id="submitsection" class="wrapper style2 special">
            <input type= "submit" name="update" id="update" value="Update Course Plan"> 
            <br>
           </section>       
        </form> 
    </div>

    <div id="apadd">            
        <form id="addform" method="POST"  action="addap.php">
        <section id="stuff" class="wrapper style2">
            <br>
            <h2>Add AP Credit</h2>
            <br>
            <h4>AP Credit:</h4> <input type= "text" name="apcredit" id="apcredit">
            <br>
            <h4>Requirement Fulfilled:</h4>
            <select id="aps" name="aps">
                <option value="">&nbsp;</option>
            </select>
            <div id="addError" class="error"></div>
            <br>
            <input type="button" id="cancel" value="Cancel" class="button"/>
            <input type="submit" name="formsubmit" id="formsubmit" value="Update AP Credit" style="float:right"/>
            <br>
        </section>
        </form>
    </div>
    
    <div id="apremove">            
        <form id="removeform" method="POST" action="removeaps.php">
        <section id="stuff2" class="wrapper style2">
            <br>
            <h2>Remove AP Credit</h2>
            <br>
            <h4>Requirement to Remove:</h4>
            <select id="curraps" name="curraps">
                <option value="">&nbsp;</option>
            </select>
            <div id="removeError" class="error"></div>
            <br>
            <input type="button" id="removecancel" value="Cancel" class="button"/>
            <input type="submit" name="removesubmit" id="removesubmit" value="Remove AP Credit" style="float:right"/>
            <br>
        </section>
        </form>
    </div>
    
</body>
</html>



    