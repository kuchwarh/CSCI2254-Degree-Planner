<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Class Planner</title>
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="getcorereqs.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
                
                $('#stuff').addClass('hidden');
            
            
                  $('#addAP').click(function() {
                $('#stuff').toggleClass('hidden');
		  });
            
            });   
  	</script>
	<style>
	    .hidden {
	        display: none;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        include('dbconn.php');
        $student = $_COOKIE['loginUserID'];
    ?>
    <div>
    <h1 style="position:relative"> Course Planner </h1>
    <br>
    <div>
    <div>
        <fieldset id="leftbox" style="float: left; width: 25%; position: relative; left: 15%">
            <p><b> Unassigned Requirements </b></p>
            <div id="unassignedreqs" style=" overflow: scroll; border-width: 2px; border-style: solid; height: 100px; width: 300px" >
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select c.title, r.number
					  from class_cats as c, reqs as r, enroll as e where e.student = '$student' and c.id = r.class_cat and e.field = r.field
					  and r.id not in (select req from plan where student = e.student and req is not null)
					  and r.id not in (select req from aps where student = e.student)";
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
            <br>
            <br>
            <p><b> Requirements with AP Credit </b></p>
            <div id="APreqs"style=" overflow: scroll; border-width: 2px; border-style: solid; height: 100px; width: 300px">
            <div id='ap_reqs'>
		<?php
			$dbc = connect_to_db('gonzalyz');
			$query = "select c.title from class_cats as c,reqs as r
					  inner join aps as a on r.id = a.req
	 				  where a.student = '$student' and r.class_cat = c.id";
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
            </div>
            <br>
            <br>
            <button id="addAP"> Add AP Credits </button>
        </fieldset>
    </div>
    <div style="float:left; width:40%; position: relative; left: 15%">
        <fieldset id= "mainbox">
        <form method= "POST" action= "classupdate.php">
            <div> <!-- For Each Semester -->
            <span id="semester"><b> First Year, Fall</b></span><br>
                <fieldset id="courses">
                    Course 1: <select id="f1c1" name="f1c1">
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    Course 2: <select id="f1c2" name="f1c2">
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    Course 3: <select id="f1c3" >
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    Course 4: <select id="f1c4" >
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    Course 5: <select id="f1c5" >
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    Course 6: <select id="f1c6" >
                    <option value="">&nbsp;</option></select>
            
                </fieldset>
            </div>
                <br>
                <br>
            
                <div> <!-- For Each Semester -->
                <span id="semester"><b> First Year, Spring</b></span><br>
                <fieldset id="courses">
                
                    <div id="reqs">    
                        Course 1: <select id="s1c1" >
                                    <option value="">&nbsp;</option>
                                </select>
            
                    </div>
                    Course 2: <select id="s1c2" >
                            <option value="">&nbsp;</option>
                    </select>
                    <br>
                    Course 3: <select id="s1c3" >
                           <option value="">&nbsp;</option>
                    </select>
                    <br>
                    Course 4: <select id="s1c4" >
                            <option value="">&nbsp;</option>
                    </select>
                    <br>
                    Course 5: <select id="s1c5" >
                            <option value="">&nbsp;</option>
                    </select>
                    <br>
                    Course 6: <select id="s1c6" >
                            <option value="">&nbsp;</option>
                    </select>
                </fieldset>
                </div>
                <br>
                <br>
            
                <div> <!-- For Each Semester -->
                <span id="semester"><b> Second Year, Fall</b></span><br>
                <fieldset id="courses">
                
                    <div id="reqs">    
                        Course 1: <select id="f2c1" >
                            <option value="">&nbsp;</option>
                                </select>
                    </div>
                    Course 2: <select id="f2c2" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 3: <select id="f2c3" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 4: <select id="f2c4" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 5: <select id="f2c5" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 6: <select id="f2c6" >
                            <option value="">&nbsp;</option>
                                </select>
                </fieldset>
                </div>
                <br>
                <br>
            
                <div> <!-- For Each Semester -->
                <span id="semester"><b> Second Year, Spring</b></span><br>
                <fieldset id="courses">
                
                    <div id="reqs">    
                        Course 1: <select id="s2c1" >
                           <option value="">&nbsp;</option>
                                </select>
                    </div>
                    Course 2: <select id="s2c2" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 3: <select id="s2c3" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 4: <select id="s2c4" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 5: <select id="s2c5" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 6: <select id="s2c6" >
                            <option value="">&nbsp;</option>
                                </select>
                </fieldset>
                </div>
                <br>
                <br>
            
                <div> <!-- For Each Semester -->
                <span id="semester"><b> Third Year, Fall</b></span><br>
                <fieldset id="courses">
                
                    <div id="reqs">    
                        Course 1: <select id="f3c1" >
                           <option value="">&nbsp;</option>
                                </select>
                    </div>
                    Course 2: <select id="f3c2" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 3: <select id="f3c3" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 4: <select id="f3c4" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 5: <select id="f3c5" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 6: <select id="f3c6" >
                            <option value="">&nbsp;</option>
                                </select>
                </fieldset>
                </div>
                <br>
                <br> 
            
                <div> <!-- For Each Semester -->
                <span id="semester"><b> Third Year, Spring</b></span><br>
                <fieldset id="courses">
                
                    <div id="reqs">    
                        Course 1: <select id="s3c1" >
                           <option value="">&nbsp;</option>
                                </select>
                    </div>
                    Course 2: <select id="s3c2" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 3: <select id="s3c3" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 4: <select id="s3c4" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 5: <select id="s3c5" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 6: <select id="s3c6" >
                           <option value="">&nbsp;</option>
                                </select>
                </fieldset>
                </div>
                <br>
                <br>
            
                <div> <!-- For Each Semester -->
                <span id="semester"><b> Fourth Year, Fall</b></span><br>
                <fieldset id="courses">
                
                    <div id="reqs">    
                        Course 1: <select id="f4c1" >
                            <option value="">&nbsp;</option>
                                </select>
                    </div>
                    Course 2: <select id="f4c2" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 3: <select id="f4c3" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 4: <select id="f4c4" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 5: <select id="f4c5" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 6: <select id="f4c6" >
                            <option value="">&nbsp;</option>
                                </select>
                </fieldset>
                </div>
                <br>
                <br>
            
                <div> <!-- For Each Semester -->
                <span id="semester"><b> Fourth Year, Spring</b></span><br>
                <fieldset id="courses">
                
                    <div id="reqs">    
                        Course 1: <select id="s4c1" >
                          <option value="">&nbsp;</option>
                                </select>
                    </div>
                    Course 2: <select id="s4c2" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 3: <select id="s4c3" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 4: <select id="s4c4" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 5: <select id="s4c5" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    Course 6: <select id="s4c6" >
                           <option value="">&nbsp;</option>
                                </select>
                </fieldset>
                </div>
                <br>
                <br>
            <input type= "submit" name="update" id="update" value="Update Course Plan">        
        </form> 
        </fieldset>
    </div>
    </div>
            
    <span id="stuff" style="position: absolute; top: 300px; right: 550px; background-color: orange">
    <fieldset id="apadd" name="apadd" style="border:0px">
        <form method="POST"  action="addap.php">
            <h2>Update AP Credit</h2>
            <br>
            <b>AP Credit:<b> <input type= "text" name="apcredit" id="apcredit">
            <br>
            <b>Requirement Fulfilled:<b>
            <select id="aps" name="aps">
                <option value="">&nbsp;</option>
            </select>
            <br>
            <br>
            <br>
            <input type="submit" name="formsubmit" id="formsubmit" value="Update AP Credit"  />
            <br>
            <br>
        </form>
    </fieldset>
    </span>
</body>
</html>



    