<?php
				  if (isset($_GET['id']))
	{
			$con = mysql_connect("127.0.0.1", "root", "");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("db", $con);
			$comment_id = $_GET['id'];
			
			mysql_query("DELETE FROM comment WHERE comment_id='$comment_id'");
			header("location: profile.php");
			exit();
			
			mysql_close($con);
			}
			?>