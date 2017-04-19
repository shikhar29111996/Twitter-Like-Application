<?php include('connect.php');?>	
<?php include('session.php');?>	
<?php
if (isset($_POST['save'])){
$stats=$_POST['stats'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$user=$_POST['userid'];
$current=$_POST['curcity'];
$interested=$_POST['Interested'];
$language=$_POST['language'];
$college=$_POST['college'];
$highschool=$_POST['highschool'];
$contactNo=$_POST['contactNo'];
$aboutme=$_POST['aboutme'];
$gender=$_POST['gender'];

$bday=$_POST['BirthDay'];

mysql_query("UPDATE members SET Stats='$stats',ContactNo='$contactNo',LastName='$lastname',FirstName='$firstname',Address='$current', Interested='$interested', language='$language', college='$college', highschool='$highschool',  aboutme='$aboutme', Gender='$gender',Birthdate='$bday' WHERE member_id='$user'");


echo"<script type='text/javascript'>alert('save');
window.location='editprofile.php';
</script>";

}
?> 
