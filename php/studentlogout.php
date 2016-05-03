<?php

	setcookie('loginUserID', '', time()-3600, '/');
	
	header("Location: ../studentlogin.html");