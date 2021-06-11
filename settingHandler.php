<?php
	session_start();
	
		if(!isset($_SESSION["upassword"])){
	
		header("Location: loginForm.php?msg=Direct Access in Unauthorized");
	}
?>

<?php
session_start();
include("includes/dbconfig.php");

$name=$_POST['Nname'];
$email=$_POST['Nemail'];
$password=$_POST['Npassword'];
$dob=$_POST['Ndob'];

$email = $_SESSION['email'];

$sql="Select email from user_info where email='$email' AND password='$password'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
	if($name!="")
	{
		$sql="update user_info SET name='$name' where email='$email'";
	}
	elseif($dob!="")
	{
		$sql="update user_info SET dob='$dob' where email='$email'";
	}
	elseif($password!="")
	{
		$sql="update user_info SET password='$password' where email='$email'";
	}
	elseif($email!="")
	{
		$sql="update user_info SET email='$email' where email='$email'";
	}
if (mysqli_query($con,$sql))
{
	header ("Location:home.php");
}

?>
