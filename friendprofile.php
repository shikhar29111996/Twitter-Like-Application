<?php
	require('session.php');
		$userid = $_GET['id'];
?>
<html>
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
<head><title>Profile</title></head>

<link href="home.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="img/icon.png" type="image" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
$("#shadow").fadeOut();

	$("#cancel_hide").click(function(){
        $("#").fadeOut("slow");
        $("#shadow").fadeOut();
		
   });
      });
   </script>
<style type="text/css">
<!--
body {
	background-image: url(images/New%20Picture.jpg);
	background-repeat: repeat-x;
}
.style1 {font-weight: bold}
-->
</style>
</body>
<div class="main">
<div id="shadow" class="popup"></div>

<div class="lefttop1">
  <div class="lefttopleft"><img src="img/logo1.png" width="150" height="40" /></div>
   <div class="propic">
<?php
include('connect.php');
$member_id = $_SESSION['SESS_MEMBER_ID'];
					$post = mysqli_query($connection,"SELECT * FROM members WHERE member_id = '$userid'")or die(mysql_error());
					$row = mysqli_fetch_array($post); 

?>
	<img src="<?php echo $row['profImage'];?>" alt="" height="140"  width="140" border="0" class="left_bt" />
</div>
<ul id="sddm1">
	
	<li><a href="Home.php"><img src="img/wal.png" width="17" height="17" border="0" /> &nbsp;Wall</a>
	</li>
	<li>
	<?php $id = $row['member_id'];
			echo "<a href='profilefriends.php?action=view&id=".$id."'><img src=img/message.png width=17 height=17 border=0 />"."&nbsp;&nbsp;Info"."</a>"  ?>
		</li>	
	<li><?php $id = $row['member_id'];
			echo "<a href='friendsphoto.php?action=view&id=".$id."'><img src=img/photos.png width=17 height=17 border=0 />"."&nbsp;&nbsp;Photos"?>(<?php
$result = mysqli_query($connection,"SELECT * FROM photos WHERE member_id='$userid'");
	
	$numberOfRows = mysqli_num_rows($result);	
	
	echo '<font color="red">' . $numberOfRows . '</font>'; 
	?>)</a>
	
	<li><hr width="150"></li>
	<li>
	</ul>
	<div class="friend">
	<ul id="sddm1">
	<li><a href=""><img src="img/friends.png" width="16" height="12" border="0" /> &nbsp;Friends
	
	(<?php
$member_id=$userid;

$result = mysqli_query($connection,"SELECT * FROM friends WHERE  friends_with = '$id' and  member_id!= '$id' and status = 'conf'    OR member_id = '$id' and friends_with != '$id' and status = 'conf'  ");
	
	$numberOfRows = mysqli_num_rows($result);	
	echo '<font color="Red">' . $numberOfRows. '</font>';
	?>)
	</a>
	</li>
	</ul>
	<ul id="sddm1">
  <?php
							
							
								$member_id=$userid;							
								$post = mysqli_query($connection,"SELECT * FROM friends WHERE  friends_with = '$id' and  member_id!= '$id' and status = 'conf'    OR member_id = '$id' and friends_with != '$id' and status = 'conf'  ")or die(mysqli_error($connection));
								
								$num_rows  =mysqli_num_rows($post);
							
							if ($num_rows != 0 ){

								while($row = mysqli_fetch_array($post)){
				
								$myfriend = $row['member_id'];
								$member_id=$userid;
								
									if($myfriend == $member_id){
									
										$myfriend1 = $row['friends_with'];
										$friends = mysqli_query($connection,"SELECT * FROM members WHERE member_id = '$myfriend1'")or die(mysqli_error($connection));
										$friendsa = mysqli_fetch_array($friends);
									
										echo '<li> <a href=friendprofile.php?id='.$friendsa["member_id"].' style="text-decoration:none;"><img src="'. $friendsa['profImage'].'" height="50" width="50"></li><br><li>'.$friendsa['FirstName'].' '.$friendsa['LastName'].' </a> </li>';
										
									}else{
										
										$friends = mysqli_query($connection,"SELECT * FROM members WHERE member_id = '$myfriend'")or die(mysqli_error($connection));
										$friendsa = mysqli_fetch_array($friends);
										
									echo '<li> <a href=friendprofile.php?id='.$friendsa["member_id"].' style="text-decoration:none;"><img src="'. $friendsa['profImage'].'" height="50" width="50"></li><br><li>'.$friendsa['FirstName'].' '.$friendsa['LastName'].' </a> </li>';
										
									}
								}
								}else{
									echo 'You don\'t have friends </li>';
								}
						
							
							?>
							</ul>
							
							<ul id="sddm1">
							<li><hr width="150"></li>
							</ul>
</div>							
	
  </div>
  <div class="righttop1">
       <div class="search">
       <form action="search.php" method="POST">
        <input name="search" type="text" maxlength="30" class="textfield"  value="search"/>
	
      </form>
</div>
    <div class="nav">
      <ul id="sddm">
        <li><a href="profile.php" ><?php


$result = mysqli_query($connection,"SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");
while($row = mysqli_fetch_array($result))
  {
  echo "<img width=20 height=15 alt='Unable to View' src='" . $row["profImage"] . "'>";
echo"  ";
  echo $row["FirstName"];
  echo"  ";
  echo $row["LastName"];
  }

?></a></li>
      <li><a href="Home.php">Home</a></li>
               <li><a  href="#"onmouseover="mopen('m5')" onmouseout="mclosetime()">Account</a>
          <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
</a>
        
		<a href="logout.php"><font size="2" class="font1">Logout</font></a>
        </li>
      </ul>
      <div style="clear:both"></div>
      <div style="clear:both"></div>
    </div>
  </div>
  
  </div>
  
<div class="right">


	   <div class="shout">
<h2><div class="color"><?php
$result = mysqli_query($connection,"SELECT * FROM members WHERE member_id='$userid'");
while($row = mysqli_fetch_array($result))
  {
  echo  $row["FirstName"];
  echo"  ";
  echo $row["LastName"];

  }
?>
</div>
</h2>
<div class="information">
<?php
$result = mysqli_query($connection,"SELECT * FROM members WHERE member_id='$userid'");
while($row = mysqli_fetch_array($result))
  {
  echo "Lives in: "."".$row['Address']. " | " ."Gender: ".$row['Gender']. " | " ."Born on: ".$row['Birthdate'];
  echo "</br>";
  echo "Contact No: "."".$row['ContactNo']. " | " ."Email: ".$row['Url'];
  echo "</br>";
   echo "Status: "."".$row['Stats'];
  
  }
?>
</div>
</div> 
<div class="shoutout">

		<div  class="back"><h4><class="p"><div></h4></div>
		</br>
          <form  name="form1" method="post" action="comment.php">
          <div class="comment">
            <textarea name="message" cols="45" rows="5" id="message" onclick="this.value='';"></textarea>
          </div>
          <input name="name" type="hidden" id="name" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		  <input name="poster" type="hidden" id="name" value="<?php echo $_SESSION['SESS_MEMBER_ID'];?>"/>
          <input name="name1" type="hidden" id="name" value="<?php echo $_SESSION['SESS_LAST_NAME'];?>"/>
          <input type="submit" name="btnlog" value="Post" class="greenButton" />
          </div>
        </form>
		 <div class="s"> 
	   <?php
	   

  $query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM comment WHERE member_id='$userid' ORDER BY comment_id DESC";
$result = mysqli_query($connection,$query);
			
			

while($row = mysqli_fetch_assoc($result))
{
   echo '<div class="information">';
	echo '<div class="pic1">';
			$result1 = mysqli_query($connection,"SELECT * FROM members WHERE member_id='$userid'");
while($row1 = mysqli_fetch_array($result1))
  {
	echo "<img width=40 height=40 alt='Unable to View' src='" . $row1["profImage"] . "'>";
	}
	echo '<div class="message">';
	
		$result1 = mysqli_query($connection,"SELECT * FROM members WHERE member_id='$userid'");
while($row1 = mysqli_fetch_array($result1))
  {


  echo " Posted by:<font color=#1d3162> {$row1['FirstName']}"."&nbsp;{$row1["LastName"]}</font>";
  }
	
	
	echo '</br>';
	echo "{$row['comment']}";

	echo'</br>';
	echo'</br>';
	echo'</div>';
	echo'<hr width="390">';
	echo '<div class="kkk">';
	echo'<a class="style" href="deletepost.php?id=' . $row["comment_id"] . '">delete</a>&nbsp;&nbsp;<a class="style" href="deletepost.php?id=' . $row["comment_id"] . '"><img width=20 height=20  src=img/like.png>Like</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
	echo'</div>';
	echo'</br>';
	echo'</br>';
	}
	
  echo '</div>';
  echo'</br>';
 
  ?>
  
      
	  
	 </div>
	</div>

</body>
</html>