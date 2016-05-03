<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Class Planner</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/getcorereqs.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
                
                $('#stuff').addClass('hidden');
            
            
                  $('#addAP').click(function() {
                $('#stuff').toggleClass('hidden');
		  		});
		  		
		  		$('#cancel').click(function() {
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
            <button id="addAP"> Add AP Credits </button>
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
                    <select id="f1c3" >
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 4:</h4>
                    <select id="f1c4" >
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 5:</h4>
                    <select id="f1c5" >
                    <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 6:</h4>
                    <select id="f1c6" >
                    <option value="">&nbsp;</option></select>
                </div>
        </div>
        </section>

		<section class='wrapper style1'>
		<div class='tab'>
                <h3>First Year, Spring</h3>                
                    <div style='width: 90%;'>    
                	<h4>Course 1:</h4>
                	<select id="s1c1" >
                                    <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 2:</h4><select id="s1c2" >
                            <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 3:</h4><select id="s1c3" >
                           <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 4:</h4><select id="s1c4" >
                            <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 5:</h4><select id="s1c5" >
                            <option value="">&nbsp;</option>
                    </select>
                    <br>
                    <h4>Course 6:</h4><select id="s1c6" >
                            <option value="">&nbsp;</option>
                    </select>
                </div>
			</div>
			</section>
			
		<section class='wrapper style2'>
		<div class='tab'>
                <h3>Second Year, Fall</h3>
                <div style='width: 90%'>    
                    <h4>Course 1:</h4><select id="f2c1" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 2:</h4><select id="f2c2" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 3:</h4><select id="f2c3" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 4:</h4><select id="f2c4" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 5:</h4><select id="f2c5" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 6:</h4><select id="f2c6" >
                            <option value="">&nbsp;</option>
                                </select>
                </div>
        </div>
        </section>        
			
		<section class='wrapper style1'>
		<div class='tab'>
				<h3>Second Year, Spring</h3>
				<div style="width: 90%">
					<h4>Course 1:</h4><select id="s2c1" >
						   <option value="">&nbsp;</option>
								</select>
					<br>
					<h4>Course 2:</h4><select id="s2c2" >
							<option value="">&nbsp;</option>
								</select>
					<br>
					<h4>Course 3:</h4><select id="s2c3" >
							<option value="">&nbsp;</option>
								</select>
					<br>
					<h4>Course 4:</h4><select id="s2c4" >
							<option value="">&nbsp;</option>
								</select>
					<br>
					<h4>Course 5:</h4><select id="s2c5" >
							<option value="">&nbsp;</option>
								</select>
					<br>
					<h4>Course 6:</h4><select id="s2c6" >
							<option value="">&nbsp;</option>
								</select>
				</div>
		</div>
		</section>
        
        <section class='wrapper style2'>
		<div class='tab'>
                <h3>Third Year, Fall</h3>
                <div style="width: 90%">    
                	<h4>Course 1:</h4><select id="f3c1" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 2:</h4><select id="f3c2" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 3:</h4><select id="f3c3" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 4:</h4><select id="f3c4" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 5:</h4><select id="f3c5" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 6:</h4><select id="f3c6" >
                            <option value="">&nbsp;</option>
                                </select>
                </div>
        </div>
        </section>
            
        <section class='wrapper style1'>
		<div class='tab'>
                <h3>Third Year, Spring</h3>
                <div style="width: 90%;">    
                    <h4>Course 1:</h4><select id="s3c1" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 2:</h4><select id="s3c2" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 3:</h4><select id="s3c3" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 4:</h4><select id="s3c4" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 5:</h4><select id="s3c5" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 6:</h4><select id="s3c6" >
                           <option value="">&nbsp;</option>
                                </select>
                </div>
        </div>
        </section>
            
    	<section class='wrapper style2'>
		<div class='tab'>
                <h3>Fourth Year, Fall</h3>
                <div style="width: 90%">    
                    <h4>Course 1:</h4><select id="f4c1" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 2:</h4><select id="f4c2" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 3:</h4><select id="f4c3" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 4:</h4><select id="f4c4" >
                           <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 5:</h4><select id="f4c5" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 6:</h4><select id="f4c6" >
                            <option value="">&nbsp;</option>
                                </select>
                </div>
        </div>
        </section>
        
        <section class='wrapper style1'>
		<div class='tab'>
                <h3>Fourth Year, Spring</h3>
                <div style='width: 90%;'>    
                   <h4>Course 1:</h4><select id="s4c1" >
                          <option value="">&nbsp;</option>
                                </select>
                	<br>
                    <h4>Course 2:</h4><select id="s4c2" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 3:</h4><select id="s4c3" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 4:</h4><select id="s4c4" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 5:</h4><select id="s4c5" >
                            <option value="">&nbsp;</option>
                                </select>
                    <br>
                    <h4>Course 6:<h4><select id="s4c6" >
                           <option value="">&nbsp;</option>
                                </select>
                </div>
           </div>
           </section>
           <section class="wrapper style2 special">
            <input type= "submit" name="update" id="update" value="Update Course Plan"> 
            <br>
           </section>       
        </form> 
    </div>
    </div>
            
    <span id="stuff" class="wrapper style2">
    <div id="apadd" name="apadd">
        <form method="POST"  action="addap.php">
            <br>
            <h2>Update AP Credit</h2>
            <br>
            <h4>AP Credit:</h4> <input type= "text" name="apcredit" id="apcredit">
            <br>
            <h4>Requirement Fulfilled:</h4>
            <select id="aps" name="aps">
                <option value="">&nbsp;</option>
            </select>
            <br>
            <input type="button" id="cancel" value="Cancel" class="button"/>
            <input type="submit" name="formsubmit" id="formsubmit" value="Update AP Credit" style="float:right"/>
            <br>
        </form>
    </div>
    </span>
</body>
</html>



    