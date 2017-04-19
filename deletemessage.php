<?php
  require ("connect.php");  
?>  
	
<?php
	$ID =$_REQUEST['message_id'];
	mysql_query("DELETE FROM messages WHERE message_id = '$ID'")
	or die(mysql_error());  	
	header("Location: receivemessage.php");
?>