<?php include('connect.php')?>
<?php


 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

$messages = clean($_POST['message']);
$poster =clean($_POST['poster']);

$sql="INSERT INTO comment (comment,date_created, member_id)
VALUES
('$messages','".strtotime(date("Y-m-d H:i:s"))."','$poster')";

if (!mysqli_query($connection,$sql))
  {
  die('Error: ' . mysqli_error());
  }
header("location: Home.php");
exit();



?>
