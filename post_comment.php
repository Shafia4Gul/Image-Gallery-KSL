<?php
$con= mysqli_connect("localhost" , "root", "");
			mysqli_select_db($con,'comments');
			
$name = $_POST["name"];
$comment=$_POST["comment"];
$comment_length=strlen($comment);
if($comment_length > 100)
{
	
	header("location: c_index.php?error=1");
	
}
else
	{
		$s= "INSERT INTO `comments` (`id`, `name`, `comment` ) VALUES ('', '$name' , '$comment' ) " ;
	mysqli_query($con , $s);	
	header("location: index.php");
	}
?>