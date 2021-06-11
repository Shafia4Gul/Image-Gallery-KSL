<?php
$con= mysqli_connect("localhost" , "root", "");
			mysqli_select_db($con,'likesystem');
$thumbup = $_POST["likeonpost"];
		$s= "INSERT INTO `postlike`(`id`,  `likeonpost`) VALUES (''  , '1'  )";
	mysqli_query($con , $s);	
	header("location: index.php");
	
?>