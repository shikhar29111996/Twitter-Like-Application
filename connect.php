
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db');

	$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die(mysqli_error($connection));
	mysqli_select_db($connection,DB_NAME) or die(mysqli_error($connection));
	
?>
<?php
	  $con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($connection));
  }
	
?>