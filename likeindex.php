<?php

$con= mysqli_connect("localhost" , "root", "");
$v=	mysqli_select_db($con,'likesystem');
			
$find_likes = mysqli_query($con , "SELECT * FROM postlike");
$i=0;
while($row = mysqli_fetch_assoc($find_likes))
{
	
	$likes_name = $row['name'];
	$likes = $row['likeonpost'];
	
	
	echo "$likes_name  likes your  post <p> " ;
	$i++;
}
    
	echo "$i people like  post";

?>

<html>
</br>
</br>
<img src="pic.png" width="150px" height="150px">
<form action="like_post.php" method="POST">
<input type="text" name="name" placeholder="your Name" required > 
</br>
 
<input type="submit" value= "like" >
</html>
