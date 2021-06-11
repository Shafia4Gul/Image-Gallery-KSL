
<?php

$con= mysqli_connect("localhost" , "root", "");
			mysqli_select_db($con,'comments');
	 
$find_comments = mysqli_query($con , "SELECT * FROM comments");
$i=0;
while($row = mysqli_fetch_assoc($find_comments))
{
	
	$comments_name = $row['name'];
	$comments = $row['comment'];
	
	
	echo "new comment added to your post";
	echo "</br>";
	echo "$comments_name  comments $comments on your  post <p> " ;
	$i++;
}
    
	echo "$i people commented on your   post";

?>
<html>
</br>
</br>
<img src="pic.png" width="150px" height="150px">
<form action="post_comment.php" method="POST">
<input type="text" name="name" placeholder="your Name" required> 
</br>
</br>
<textarea name="comment" cols="25" rows="2" placeholder="enter a comment" required>  </textarea>
</br>
<input type="submit" value= "comment" >
</html>
