<?php 

function create_menu($menuname) {
	
		echo "<select name='$menuname' class='selection'>";
		foreach ($larray as $l) {
			if ($current_location == $l) {
				echo "<option value='$l' selected>$l</option>";
			} else {
				echo "<option value='$l'>$l</option>";
			}
		}
		echo "</select>";
	}
	
function get_major() {
	
	$id = $_COOKIE['loginUserID'];
	