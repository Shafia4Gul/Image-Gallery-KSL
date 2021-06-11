<?php
session_start();

include("includes/dbconfig.php");


if (isset($_POST['signupbtn'])) {

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
if($name!="" && $email!="" && $password!="" && $dob!="" && $gender!="")
{
$sql="insert into user_info (name,email,password,dob,gender) values('$name','$email','$password','$dob','$gender')";
$result = mysqli_query($con,$sql);


//  if ($run) 
//	{
	$_SESSION["name"]=$row["name"];
	$_SESSION["email"]=$row["email"];
	$_SESSION["password"]=$row["password"];

header('Location:loginForm.php?msg=Successfully registered.');
    exit();	
/*	}
	else
	{
header('Location:loginForm.php');
    exit;	}*/

}
/*else
{
	echo '<script type="text/javascript">;';
	echo 'alert("All fields are required to proceed");';
	echo 'document.location = "signup.php";';
	echo '</script>';
	
}*/
}
?>
<!DOCTYPE html>
<?php
include 'functionsLoginForm.php';
?>
<html>
<head>
<?=template_header('SignUp')?>

</head>
<body>
<form action="signup.php" method="POST">
<div class="content home">
<table cellpadding="10px">

	<h2>REGISTRATION FORM</h2>

	<tr><td><label>Name</label></td>
		<td><input type="text"  name="name" autofocus></td></tr>
	<tr><td><label>Email</label></td>
		<td><input type="email" name="email"autofocus></td></tr>
	<tr><td><label>Password</label></td>
		<td><input type="password" name="password"autofocus></td></tr>
	<tr><td><label>DOB</label></td>
		<td><input type="date" name="dob"autofocus></td></tr>

	<table>
	<tr>
	<td><label>Gender</label></td>
	<td>
	<input type="radio" name="gender" value="male">
	<label for="male">Male</label><br>
	<input type="radio" name="gender" value="female">
	<label for="female">Female</label><br>
	<td>
	<tr>
	</table>
	
	<input type="submit" value="signup" name="signupbtn"></input>
</table>	
</form>

</div>
</body>
</html>