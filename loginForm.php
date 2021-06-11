<!doctype html>

<html lang="en">
 <head>

		    <link rel="stylesheet" type="text/css" href="style.css"/> 

    </head>
    <script language="javascript">
		function validate(){
			alert("I am here. In next statment I will change the color of the 'regText' text");
			document.getElementById('regText').style.color="#FF0000";
			document.getElementById('card').style.boxShadow="5px 10px #EEEEEE";
			return false;
		}
	</script>
	<?php
include 'functionsLoginForm.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM images ORDER BY uploaded_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 
<?=template_header('Gallery')?>
  <body>
<div class="content home">
	<h2>LOGIN FORM</h2>

 
 
            <span style="color:red;text-align:center;"><?php if(isset($_GET["msg"])) {echo $_GET["msg"];} ?> </span>

                    	                  
                        
                        <form action="loginForm.php" method="post">
						
						<table cellpadding="10px">
						
                            
                                <tr><td><label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label></td>
									<td><input type="email" id="email_address" class="form-control" name="email" autofocus></td></tr>
                                <tr><td><label for="password" class="col-md-4 col-form-label text-md-right">Password</label></td>
                                    <td><input type="password" id="password" class="form-control" name="password"></td></tr>
                                    <tr><td><div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div></td></tr>
                                </div>
                            </div>

                                <tr><td><input type="submit" class="btn btn-primary" value="Login" name="loginbtn"></input></td>
                                <td><a href="#" class="btn btn-link">Forgot Your Password?</a></td></tr>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
             <?php //<input type="submit" value="Sign up" onclick="document.location.href='signup.php'" class="btn btn-primary"></input>?>
    
  
	<?=template_footer()?>
</div>
  </body>
</html>

<?php
session_start();
include("includes/dbconfig.php");
if (isset($_POST['loginbtn'])) {

$email = $_POST["email"];
$password = $_POST["password"];
$sql="Select * from user_info where email='$email' AND password='$password'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

if ($row["email"]!="")
	{
	$_SESSION["email"]=$row["email"];
	$_SESSION["upassword"]=$row["password"];
	$_SESSION["name"]=$row["name"];
	$_SESSION["dob"]=$row["dob"];
	$_SESSION["gender"]=$row["gender"];
	$_SESSION["likepost"]=$row["likepost"];
	header('Location:home.php?msg=You are successfully logged in');

	 echo  "<script> 
            alert('You are successfully logged in');
            window.location.href = 'home.php';
         </script>";
	}

else
	{header ("Location:loginForm.php?msg=Incorrect email or password. Try again");}
}
?>