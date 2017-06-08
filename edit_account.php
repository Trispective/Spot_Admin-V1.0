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
<a class = "link" href="msg.php"> Send a message  </a>
&nbsp;&nbsp;
<a class = "link" href="edit_account.php"  style="color:#4EB0AC;"> Edit account </a> 
<br><br><br><br>
<h3> Edit account </h3>
<div class="text">
<form method="post" name="contact_form" action="edit_account.php">

		<h4>Name:</h4>
  	<input type="text" name="name" id="name" style="margin-left: 50px;" required>
	  
	  		<h4>Password:</h4>
  	<input type="text" name="pass" id="pass" style="margin-left: 50px;" required>
	  	
   <h4> About us:</h4>
    <textarea name="message" id="message"  style="margin-left: 50px; width: 600px; height:120px;" required></textarea>
    <br><br>		
    <span id="form_status" class="err"></span>
     <br><br>
    <input type="submit" value="Save" name="Save" class="sub" style="margin-left: 50px;">
     <input type="submit" value="Cancel" name="Cancel" class="sub" style="margin-left: 80px;">
</form>
</div>
</body>
</html>