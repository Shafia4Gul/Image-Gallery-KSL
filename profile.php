<?php
	session_start();
	include("includes/dbconfig.php");
	include 'functions.php';
?>
<?php
		if(!isset($_SESSION["upassword"])){
	
		header("Location: loginForm.php?msg=Direct Access in Unauthorized");
	}
?>

<!doctype html>
<html lang="en">
<head>
	<title>My profile</title>
	<link rel="stylesheet" href="profile.css">
	<?=template_header('Profile')?>
</head>
<body>
     <table>
	     <tr>
	        <td><img src="pic.png" width="60%"></td>
	  	 </tr>
	 </table>
	<table width="20%">
	   
		<tr>
			<td><label>Name:</label></td>
			<td><?php echo $_SESSION['name']; ?></td>
		</tr>
		<tr>
			<td><label>Email:</label></td>
			<td><?php echo $_SESSION['email']; ?></td>
		</tr>
		<tr>
			<td><label>DOB:</label></td>
			<td><?php echo $_SESSION['dob']; ?></td>
		</tr>
		<tr>
			<td><label>Gender:</label></td>
			<td><?php echo $_SESSION['gender']; ?></td>

	</table>
	</tr>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"></input>
		<input type="submit" value="UPLOAD" name="upload" class="btn btn-primary">
	</form>   
  </body>
</html>