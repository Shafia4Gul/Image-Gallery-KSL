<?php
	session_start();
	
		if(!isset($_SESSION["upassword"])){
	
		header("Location: loginForm.php?msg=Direct Access in Unauthorized");
	}
?>

<?php
isset($_POST['upload'])
?>