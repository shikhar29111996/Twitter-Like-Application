
<?php
				 
			include('connect.php');
			$messages =  $_SESSION['SESS_MEMBER_ID'];
			$remarksby = $_SESSION['SESS_MEMBER_ID'];
			//mysql_query("INSERT INTO like(like, likeby) VALUES ('$messages_id','$likeby')");
			$sql="INSERT INTO likes (remarks, remarksby)
VALUES
('$messages','$remarksby')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
			header("location: profile.php");
			exit();
			
			mysql_close($con);
			
			?>