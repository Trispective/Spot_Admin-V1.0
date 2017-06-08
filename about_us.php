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
?>


<!DOCTYPE html>
<html >
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> About us </title>
</head>

<body>
<div id="logo" >
<img src="logo.png" style="width:150px;height:130px;">

<h1> Spot </h1>
<h2> A social media app for food. </h2>
<br>
<a href="">
<img src="app.png" style="width:250px;height:90px;">
</a>
<br><br><br>
</div>


<a class = "link" href="index.html"> Home </a>
&nbsp;&nbsp;
<a class = "link" href="sign_up.php"> Business Registration </a>
&nbsp;&nbsp;
<a class = "link" href="about_us.php" style="color:#4EB0AC;"> About us </a>
&nbsp;&nbsp;
<a class = "link" href="contact_us.php" style="float: right;"> Contact us </a>


<br><br><br><br>
<h3> About Spot </h3>
<div class="text">
<?php
/*	//Create query
$qry="SELECT about_us FROM info WHERE id=1";
	$result = mysql_query($qry);
if($result)
{
			while($info = mysql_fetch_array( $result )) 
			{ 
Print "<p>".$info['about_us']."</p>";
}
}
else
echo "There are no about us text.";
*/
?>
</div>
</body>
</html>