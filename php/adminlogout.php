<?php

	setcookie('adminUserID', '', time()-3600, '/');
	
	header("Location: ../adminlogin.html");