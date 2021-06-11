<?php
session_start();
include("includes/dbconfig.php");
$sql="Select * from user_info";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);
print_r $row;
?>