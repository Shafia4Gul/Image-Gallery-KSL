<?php
	session_start();
	include 'functionsUpdate.php';
		if(!isset($_SESSION["upassword"])){
	
		header("Location: loginForm.php?msg=Direct Access in Unauthorized");
	}
?>

<html>
     <head>
        <?=template_header('Update Setting')?>
     <style>
ul{
	list-style-type: none;
	padding: 30px 0;
	width: 200px;
	height: 100%;
}
ul li{
	padding: 15px;
	border-bottom: 1px solid rgba(0,0,0,0.05);
	border-top: 1px solid rgba(225,225,225,0.05);
	
}
</style>
	</head>
	<body>
<div class="content home">
<h2>Upadte Settings</h2>
	<form action="settingHandler.php" method="POST">
	<label>Enter New Password</label>
	<input type="password" name="Npassword"autofocus><br><br>
	<input type="submit" value="update"></input>
	</form>
	</body>
</html>