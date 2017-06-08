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
<br><br><br><br>

<h3> Login </h3>
<div class="text">
	<form name="loginForm" action="login_exc.php" method="post">
		<Table>
		<tr>
		<td><h4> Username: </h4> </td>
		<td><input type="text" placeholder="Email" name="email" class="textfield" required > </td>
		</tr>
		<td><h4>Password:</h4></td>
		<td><input type="password" placeholder="Password" name="password" class="textfield" required></td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr>
		<td></td>
		<td><input type="submit" name="submit" class="sub" value="Login" ></td>
		</tr>
		</table>
			<div>
 <?php if(isset($_GET['msg']))
  echo $_GET['msg'];
  ?>
</div> 
		<a href="Forgot_password.php">forgot your password?</a>
	

	</form>
	</div>
</body>
</html>
