
<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phpgallery';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	die ('Failed to connect to database!');
    }
}
// Template header
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<img src="logo.png" alt="Logo image"> 
            <a href="index.php"><i class="fas fa-image"></i>Gallery</a>
			<a href="home.php"><i class="fa fa-home"></i>Home</a>
			<a href="profile.php"><i class="fas fa-user-alt"></i>Profile</a>
			<a href="setting.php"><i class="fa fa-cog fa-fw"></i>Setting</a>
			<a href="search.php"><i class="fa fa-search"></i>Search</a>
            <a href="logout.php"class="btn btn-primary">Logout</a>
			
    	</div>
    </nav>
EOT;
}
// Template footer
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>
