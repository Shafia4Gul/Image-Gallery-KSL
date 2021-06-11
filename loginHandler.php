<?php
session_start();
include("includes/dbconfig.php");
include 'functions.php';

//lOGIN HANDLER .PHP 

// VERIFY PROVIDED INFORMATION 

// SESSION CREATE

// REDIRECT

// HANDLE USER INPUT
$email = $_POST["email"];
$password = $_POST["password"];
$sql="Select * from user_info where email='$email' AND password='$password'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

if ($row["email"]!="")
	{
	$_SESSION["email"]=$row["email"];
	$_SESSION["upassword"]=$row["password"];
	$_SESSION["name"]=$row["name"];
	$_SESSION["dob"]=$row["dob"];
	$_SESSION["gender"]=$row["gender"];
	$_SESSION["likepost"]=$row["likepost"];
	header ("Location:home.php");
	}
else
	{header ("Location:loginForm.php?msg=Incorrect email or password. Try again");}
//if not wanted to see whether info is valid or not then move back to loginForm again by header

?>
