

<?php
	require_once('session.php');
?>
	
	
	
	
<?php
include('connect.php');

$idto = $_GET['id'];
$member = $_SESSION['SESS_MEMBER_ID'];
mysqli_query($connection,"INSERT INTO friends(member_id,datetime,status,friends_with) VALUES('$member',now(),'unconf','$idto') ")or die(mysql_error());

?>

<html>


<body>
<div class="facebox">
<?php
								$member_id = $_SESSION['SESS_MEMBER_ID'];
								$post = mysqli_query($connection,"SELECT * FROM members WHERE member_id='$member_id'")or die(mysql_error());
								while($row = mysqli_fetch_array($post)){
									echo '
									
										<div class="pic2"><img src="'.$row['profImage'].'" alt="" height="70" width="70" border="0" class="left_bt" /></div>								
										<div class="pi">'.$row['FirstName']." ".$row['LastName'].'</div>
										
										<div class="message3">Your friend request has been sent, just wait for the confirmation</div>
									';
									
								}
								
							?>
							</div>
</body>
</html>