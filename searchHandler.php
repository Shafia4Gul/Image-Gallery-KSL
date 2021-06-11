<?php
	session_start();
	
		if(!isset($_SESSION["upassword"])){
	
		header("Location: loginForm.php?msg=Direct Access in Unauthorized");
	}
?>

<?php
session_start();
include("includes/dbconfig.php");

$Sname=$_POST['Sname'];
$Semail=$_POST['Semail'];
$Sdob=$_POST['Sdob'];
$Sgender=$_POST['Sgender'];

if ($Sname!="")
{
	$sql="Select * from user_info where name='$Sname'";
}
elseif ($Semail!="")
{
	$sql="Select * from user_info where email='$Semail'";
}
elseif ($Sdob!="")
{
	$sql="Select * from user_info where dob='$Sdob'";
}
elseif ($Sgender!="")
{
	$sql="Select * from user_info where gender='$Sgender'";
}

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
if ($row["name"]!="")
	{
	$_SESSION["Semail"]=$row["email"];
	$_SESSION["Sname"]=$row["name"];
	$_SESSION["Sdob"]=$row["dob"];
	$_SESSION["Sgender"]=$row["gender"];
	header ("Location:searchedAccount.php");
	}
else
	{header ("Location:home.php?msg=Incorrect email or password. Try again");}
?>