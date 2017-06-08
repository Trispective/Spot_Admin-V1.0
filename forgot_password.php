<!DOCTYPE html>
<html >
<head>
<style>
h1
{
   position: absolute;
   bottom: 0px; 
}
</style>
<link rel="stylesheet" type="text/css" href="style.css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Login </title>
</head>

<body>
<div class="image">
<img id="logo" src="logo.png" alt="" style="width:150px;height:130px;">

<h1> Spot </h1>
</div>


<a class = "link" href="login.php" style= "padding-left:800px;"> Log in </a> 
<a class = "link" href="editaccount.html" style= "padding-left:650px;"> Edit account </a>

<div id="text">
<div class = "header">
<a class = "link" href="index.php"> Home </a>
&nbsp;&nbsp;&nbsp;
<a class = "link" href="signup.html"> Sign up new restaurant </a>
&nbsp;&nbsp;&nbsp;
<a class = "link" href="contactus.html"> Contact us </a>
</div>
<br>
<h2 style= "color: #FF1493;"> Reset Password </h2>
		<br>
<form action="change.php" method="POST">
		<h3 style= " padding-left:120px"> Please enter your email address: </h3>
<input type="text" name="email" placeholder="Email" Required/> 
		<br><br>
<input type="submit" name="ForgotPassword" value=" Request Reset "/>

</form>
			<div>
 <?php if(isset($_GET['message']))
  echo $_GET['message'];
  ?>
</div> 

</div>
</body>
</html>