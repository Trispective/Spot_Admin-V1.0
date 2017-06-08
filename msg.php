<!DOCTYPE html>
<html >
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Spot </title>

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


<a class = "link" href="logout.php"  style="float: right;"> Logout </a> 
<a class = "link" href="control_panel.php"> Control panel </a> 
&nbsp;&nbsp;
<a class = "link" href="msg.php" style="color:#4EB0AC;"> Send a message  </a>
&nbsp;&nbsp;
<a class = "link" href="edit_account.php"> Edit account </a> 
<br><br><br><br>
<h3> Send a message to your coustomers </h3>
<div class="text">
<form method="post" name="contact_form" action="msg.php">

		<h4>Title:</h4>
  	<input type="text" name="title" id="title" style="margin-left: 50px;" required>
	  	
   <h4> Message:</h4>
    <textarea name="message" id="message" placeholder="Please enter your text here.." style="margin-left: 50px; width: 600px; height:120px;" required></textarea>
    <br><br>		
    <input type="submit" value="submit" name="submit" class="sub" style="margin-left: 50px;">
</form>
</div>
</body>
</html>