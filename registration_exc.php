<?php
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
	//echo("database selected");
	
		//Sanitize the POST values
		
		$name=$_POST['ResName'];
		$email=$_POST['UserEmail'];
		$pass=$_POST['password'];
		$ABN=$_POST['ABN'];
		$phone_no=$_POST['phone_no'];
		$loc=$_POST['loc'];
		$suburb=$_POST['suburb'];
		$postcode=$_POST['postcode'];
		
		//Create query
	$qry="insert into business (email, password) values('$email','$pass')";
	$result=mysql_query($qry);
	
	$qry2="select id from business WHERE email = '$email'";
	$busID = mysql_query($qry2);
	
		//Check whether the query was successful or not
	if($busID) {
			while($info = mysql_fetch_array( $busID )) 
			{ 
				echo $info["id"];
		$qry3="insert into restaurant (name, location, phone_number, postcode, suburb, active, ABN, business_id) values('$name','$loc','$phone_no','$postcode','$suburb','no','$ABN', '$info[id]')";
		$result3=mysql_query($qry3);
			}
				}
	
	//Check whether the query was successful or not
	if($result3) {
		header("location: registration_comp.html");
		}
		else echo "There was an error when inserting information.";
		?>