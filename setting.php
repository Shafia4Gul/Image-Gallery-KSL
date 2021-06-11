<?php
include 'functionsUpdate.php';
	session_start();
	
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

 a {
	
	width: 100px;
    padding: 0px 20px;
    text-decoration: none;
    color: black;
    font-weight: bold;
}
 a i {
    padding: 2px 8px 0 0;
}
 a:hover {
    color: blue;
}
</style>
</head>
<body>
<div class="content home">
<h2>Upadte Setting</h2>
<form action="settingHandler.php" method="POST">
	<ul style= "none">
	<li><a href="updateName.php"><i class="fas fa-user-alt"></i>Name</a></li>
    <li><a href="updatePassword.php"><i class="fas fa-user-alt"></i>Password</a></li>
	<li><a href="updateDOB.php"><i class="fas fa-user-alt"></i>D.O.B</a></li>
	<li><a href="deleteAccount.php"><i class="fas fa-user-alt"></i>Delete?</a></li>
	</ul>
</form>
</div>
</body>
</html>

