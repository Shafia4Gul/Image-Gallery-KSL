<?php
	session_start();
	
		if(!isset($_SESSION["upassword"])){
	
		header("Location: loginForm.php?msg=Direct Access in Unauthorized");
	}
?>
<?php
	include 'functions.php';
	include("includes/dbconfig.php");
?>

<!doctype html>
<html lang="en">
<head>
	<title>My Home</title>
	<link rel="stylesheet" href="home1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	
	<?=template_header('Home')?>
</head>
<body>
<div class="content home">
<h2>Home</h2>
<section class="header" >
    <h1>Welcome to Image Gallery</h1>
    <p>Here You can create gallery of your own </p>
    <a class="btn-bgstroke" href="index.php">Click to Create One!!</a></br>
	<div class="socials" align="right">
	<a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
    <a href="https://mobile.twitter.com/login"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    
	</div>
</section>

</div>
  </body>
</html>