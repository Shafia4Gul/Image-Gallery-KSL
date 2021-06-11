<?php
	session_start();
	
		if(!isset($_SESSION["upassword"])){
	
		header("Location: loginForm.php?msg=Direct Access in Unauthorized");
	}
?>

<?php
session_start();
include("includes/dbconfig.php");

$lemail = $_SESSION["email"];
$lpassword = $_SESSION["upassword"];
$sql="delete from user_info where email='$lemail'";

if( !mysqli_query($con,$sql));
{
	session_destroy();
	header ("Location: loginForm.php?msg=Account Deleted succesfuly");
	
}


?>