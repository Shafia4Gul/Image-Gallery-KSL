<?php

	session_start();
	//Logout
	$_SESSION["uName"]="";
	session_destroy();
	header ("Location: loginForm.php?msg=succesfuly Deleted account");
	
?>