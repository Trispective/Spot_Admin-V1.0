


<?php

$msg=" ";
if(isset($_POST['submit']))
{
$myemail = 'malak.alateeq@gmail.com';//<-----Put Your email address here.
$name = $_POST['name'];
$email_address = $_POST['contactEmail'];
$message = $_POST['message'];
$title="Spot website";

$to = $myemail;
$email_subject = "Spot website: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email_address\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
$msg= " Thanks for contacting us! We'll get back to you as soon as possible." ;
//redirect to the 'thank you' page
//header('Location: contact_us.php');
}
?>


<!DOCTYPE html>
<html >
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Contact us </title>
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript"> 
  function checkemail()
{
var contactEmail = $("#contactEmail").val(); 
if(!contactEmail == "")
{
$.post('check.php',{contactEmail:contactEmail},
function(response)
{
document.getElementById("email_status").innerHTML= response;
});
}
}
function check_all()
{
 var emailhtml=document.getElementById("email_status").innerHTML;

var e = emailhtml.substr(0, emailhtml.indexOf("<")).trim();

 if((e==""))
 {
  return true;
 }
 else
 {
 document.getElementById("form_status").innerHTML= "Please complete all the fields";
  return false;
 }
}
</script>

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
<a class = "link" href="about_us.php"> About us </a>
&nbsp;&nbsp;
<a class = "link" href="contact_us.php" style="float: right; color:#4EB0AC;"> Contact us </a>

<br><br><br><br>
<h3> Contact us </h3>
<div class="text">
<div class="msg"> <?php echo $msg ?> </div>
<form method="post" name="contact_form" action="contact_us.php" onsubmit="return check_all();">

		<h4>Your Name:</h4>
  	<input type="text" name="name" style="margin-left: 50px;" required >

	<h4> Email Address:</h4>
    <input type="text" name="contactEmail" id="contactEmail" style="margin-left: 50px;" required onblur="checkemail();">

	 <span id="email_status" class="err"></span>
	  	
   <h4> Message:</h4>
    <textarea name="message" placeholder="Please enter your text here.." style="margin-left: 50px; width: 600px; height:120px;" required></textarea>
    <br><br>		
    <span id="form_status" class="err"></span>
     <br><br>
    <input type="submit" value="submit" name="submit" class="sub" style="margin-left: 50px;">
</form>
</div>
</body>
</html>