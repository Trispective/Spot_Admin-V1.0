

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
//check if the restaurant is already exist or not.
if(isset($_POST['ResName']))
{
// $name=$_POST['res_name'];

 $checkdata=" SELECT * FROM restaurant WHERE name='".$_POST['ResName']."'";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "This restaurant has been registared in the application.";
 }
else
{
echo " ";
}
 exit();
}
//check if the email is already exist or not.
if(isset($_POST['UserEmail']))
{
 $emailId=$_POST['UserEmail'];

       if(!preg_match("/[a-zA-Z0-9]+[a-zA-Z0-9\._-]*@[a-zA-Z0-9_-]+\.[a-z]+/", $emailId))
     { 
      echo "Invalid email address ";
      }
    else
      {
 $checkdata=" SELECT email FROM business WHERE email='$emailId' ";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "Email is already exist";
 }
  	else
{
echo " ";
}
 	}

 exit();
}

if(isset($_POST['ABN']))
{
$ABN = $_POST['ABN'];

if(!preg_match("/^[0-9]{11}$/", $ABN)) 
	{
  echo "Invalid ABN number ";
    }
    else
    {
    echo " ";
    }
     exit();
}

if(isset($_POST['phone_no']))
{
$phone_no = $_POST['phone_no'];

if(!preg_match("/^[0-9]{10}$/", $phone_no)) 
	{
  echo "Invalid phone number ";
    }
    else
    {
    echo " ";
    }
     exit();
}

if(isset($_POST['postcode']))
{
$postcode = $_POST['postcode'];

if(!preg_match("/^[0-9]{4}$/", $postcode)) 
	{
  echo "Invalid postcode number ";
    }
    else
    {
    echo " ";
    }
     exit();
}
// check the email address for contact form
if(isset($_POST['contactEmail']))
{
 $emailId=$_POST['contactEmail'];

       if(!preg_match("/[a-zA-Z0-9]+[a-zA-Z0-9\._-]*@[a-zA-Z0-9_-]+\.[a-z]+/", $emailId))
     { 
      echo "Please enter a correct email address ";
      }
  	else
{
echo " ";
}
 exit();
}
?>