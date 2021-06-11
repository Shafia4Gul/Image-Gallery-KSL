<?php
include 'functionsSearch.php';
	session_start();
	
		if(!isset($_SESSION["upassword"])){
	
		header("Location: loginForm.php?msg=Direct Access in Unauthorized");
	}
?>

<html>
<head>
<?=template_header('Search')?>
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
<form action="searchHandler.php" method="POST">

	<h2>SEARCH by</h2>
	<ul>
	<li><a href="searchName.php"><i class="fas fa-user-alt"></i>Name</a></li><br>
	<li><a href="searchEmail.php"><i class="fas fa-user-alt"></i>Email</a></li><br>
	<li><a href="searchDOB.php"><i class="fas fa-user-alt"></i>DOB</a></li><br>
	<li><a href="searchGender.php"><i class="fas fa-user-alt"></i>Gender</a></li><br>
    </ul>
</form>
</body>
</html>