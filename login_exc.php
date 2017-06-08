<?php
	//Start session
	session_start();
	
	$DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
    $DB_DATABASE = 'spot_db';
	
	
	//Connect to mysql server
	$con = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
	if(!$con) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db($DB_DATABASE);
	if(!$db) {
		die("Unable to select database". mysql_error());
	}
	else
	//echo("database selected");
	
		//Sanitize the POST values

	//Create query
	$qry="SELECT * FROM admin WHERE user_email='".$_POST['email']."'AND password='".$_POST['password']."'";
	$result = mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful

			$member = mysql_fetch_assoc($result);
			$_SESSION['MEMBER_ID'] = $member['id'];
			$_SESSION['FIRST_NAME'] = $member['name'];

			header("location: control_panel.php");
			exit();
		}
		else 
		{
			//Login failed
			$msg = "incorrect username or password";
			 header("location: login.php?msg=$msg");
		}
	}else {
		die("Query failed");
	}
?>
