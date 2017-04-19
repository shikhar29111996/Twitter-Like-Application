<?php include('connect.php')?>
<?php

	//Start session
	session_start();
	
	

	
	
	
	
	//Array to store validation errors
	$errmsg_arr = array();
	
		//Validation error flag
	$errflag = false;
	
		//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	
	//Sanitize the POST values
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$login = clean($_POST['login']);
	$password = clean($_POST['password2']);
	$cpassword = clean($_POST['cpassword']);
	$address = clean($_POST['address']);
	$cnumber = clean($_POST['cnumber']);
	$email = clean($_POST['email']);
	$gender = clean($_POST['gender']);
	//$bdate = clean($_POST['bdate']);
	
	$propic = clean($_POST['propic']);
	$bday=$_POST['month'] . "/" . $_POST['day'] . "/" . $_POST['year'];
  	$month=$_POST['month'];
	$day=$_POST['day'];
	$year=$_POST['year'];
	//Input Validations
	
	
	
			if($fname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	
	
	
	
	
	
	/*if($bdate == '') {
		$errmsg_arr[] = 'birthdate field is  missing';
		$errflag = true;
	}*/
		if($lname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	
	if($month == '') {
		$errmsg_arr[] = 'month field is  missing';
		$errflag = true;
	}
	if($day == '') {
		$errmsg_arr[] = 'day field is  missing';
		$errflag = true;
	}
	if($year == '') {
		$errmsg_arr[] = 'year field is  missing';
		$errflag = true;
	}
	if($gender == '') {
		$errmsg_arr[] = 'gender field is  missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr[] = 'email field is  missing';
		$errflag = true;
	}
	if($cnumber == '') {
		$errmsg_arr[] = 'contactnumber field is  missing';
		$errflag = true;
	}
	if($address == '') {
		$errmsg_arr[] = 'address field is  missing';
		$errflag = true;
	}

	if($lname == '') {
		$errmsg_arr[] = 'Last name missing';
		$errflag = true;
	}
	if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM members WHERE UserName='$login'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'UserName already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}

//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO members(UserName, Password, FirstName, LastName, Address, ContactNo, Url, Birthdate, Gender, profImage, curcity, month, day, year) VALUES('$login','$password','$fname','$lname','$address','$cnumber','$email','$bday','$gender','$propic','$address','$month','$day','$year')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
	$errmsg_arr[] = 'Success You can now log-in to bookface';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
		
		session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $member['profImage'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			session_write_close();
			
		header("location: signup-success.php");
		exit();
	}else {
		die("Query failed");
	}








?>