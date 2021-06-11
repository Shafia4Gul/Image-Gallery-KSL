<html>
<?php
	session_start();
	
			if(!isset($_SESSION["upassword"])){
	
		header("Location: loginForm.php?msg=Direct Access in Unauthorized");
	}
	include("includes/dbconfig.php");
	include 'functions.php';
?>
<head>
<?=template_header('Search')?>
</head>
	<table width="50%">
		<tr>
			<td><label>Name:</label></td>
			<td><?php echo $_SESSION['Sname']; ?></td>
		</tr>
		<tr>
			<td><label>Email:</label></td>
			<td><?php echo $_SESSION['Semail']; ?></td>
		</tr>
		<tr>
			<td><label>DOB:</label></td>
			<td><?php echo $_SESSION['Sdob']; ?></td>
		</tr>
		<tr>
			<td><label>Gender:</label></td>
			<td><?php echo $_SESSION['Sgender']; ?></td>

	</table>
	<br><br><br>
				
</html>