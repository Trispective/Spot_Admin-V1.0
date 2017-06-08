

<!DOCTYPE html>
<html >
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript">
function checkname()
{
var ResName = $("#ResName").val(); 
if(!ResName == "")
{
$.post('check.php',{ResName:ResName},
function(response)
{
document.getElementById("name_status").innerHTML= response;
});
}
}

function checkemail()
{
var UserEmail = $("#UserEmail").val(); 
if(!UserEmail == "")
{
$.post('check.php',{UserEmail:UserEmail},
function(response)
{
document.getElementById("email_status").innerHTML= response;
});
}
}

function checkABN()
{
var ABN = $("#ABN").val(); 
if(!ABN == "")
{
$.post('check.php',{ABN:ABN},
function(response)
{
document.getElementById("ABN_status").innerHTML= response;
});
}
}

function checkphone()
{
var phone_no = $("#phone_no").val(); 
if(!phone_no == "")
{
$.post('check.php',{phone_no:phone_no},
function(response)
{
document.getElementById("phone_status").innerHTML= response;
});
}
}

function checkpostcode()
{
var postcode = $("#postcode").val();
if(!postcode == "")
{ 
$.post('check.php',{postcode:postcode},
function(response)
{
document.getElementById("postcode_status").innerHTML= response;
});
}
}


function check_all()
{
 var namehtml=document.getElementById("name_status").innerHTML;
 var emailhtml=document.getElementById("email_status").innerHTML;
 var ABNhtml = document.getElementById("ABN_status").innerHTML;
 var phonehtml = document.getElementById("phone_status").innerHTML;
 var postcodehtml = document.getElementById("postcode_status").innerHTML; 
 
var n = namehtml.substr(0, namehtml.indexOf("<")).trim();
var e = emailhtml.substr(0, emailhtml.indexOf("<")).trim();
var a = ABNhtml.substr(0, ABNhtml.indexOf("<")).trim();
var p = phonehtml.substr(0, phonehtml.indexOf("<")).trim();
var post = postcodehtml.substr(0, postcodehtml.indexOf("<")).trim();

 if((n=="")&&(e=="")&&(a=="")&&(p=="")&&(post==""))
 {
  return true;
 }
 else
 {
 document.getElementById("form_status").innerHTML= "Please complete all the fields";
 //document.getElementById("form_status").innerHTML= n;
  return false;
 }
}
</script>

  <title> Business Registration </title>
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
<a class = "link" href="sign_up.php" style="color:#4EB0AC;"> Business Registration </a>
&nbsp;&nbsp;
<a class = "link" href="about_us.php"> About us </a>
&nbsp;&nbsp;
<a class = "link" href="contact_us.php" style="float: right;"> Contact us </a>
<br><br><br><br>

<h3> Business Registration </h3>
<div class="text">
<form name="RegistrationForm" action="registration_exc.php" method="post" onsubmit="return check_all();">
		<Table>
		<tr>
		<td><h4> Restaurant name: </h4> </td>
		<td><input type="text" name="ResName" id="ResName" class="textfield" required onblur="checkname();"  > </td>
		</tr>
		<tr>
		<td></td>
		<td> 	 <span id="name_status" class="err"></span> </td>
		</tr>
		<tr>
		<td><h4>Email:</h4></td>
		<td><input type="text" name="UserEmail" id="UserEmail" class="textfield" required onblur="checkemail();"></td>
		</tr>
		<tr>
		<td></td>
		<td> 	 <span id="email_status" class="err"></span> </td>
		</tr>
		<tr>
		<td><h4>password:</h4></td>
		<td><input type="password" name="password" class="textfield" required></td>
		</tr>
		<tr>
		<td><h3 style="	margin-left: 0px;">Restaurant information: </h3></td>
		<td></td>
		</tr>
		<tr>
		<td><h4>Australian Business Number (ABN):</h4></td>
		<td><input type="text" name="ABN" id="ABN" class="textfield" required onblur="checkABN();"></td>
		</tr>
		<tr>
		<td></td>
		<td> 	 <span id="ABN_status" class="err"></span> </td>
		</tr>
		<tr>
		<td><h4>Phone number:</h4></td>
		<td><input type="text" name="phone_no" id="phone_no" class="textfield" required onblur="checkphone();"></td>
		</tr>
		<tr>
		<td></td>
		<td> 	 <span id="phone_status" class="err"></span> </td>
		</tr>
		<tr>
		<td><h4>Store number:</h4></td>
		<td><input type="text" name="st_no" class="textfield" required></td>
		</tr>
		<tr>
		<td><h4>Street name:</h4></td>
		<td><input type="text" name="st_name" class="textfield" required></td>
		</tr>
		<tr>
		<td><h4>Suburb:</h4></td>
		<td><input type="text" name="suburb" class="textfield" required></td>
		</tr>
		<tr>
		<td><h4>Postcode:</h4></td>
		<td><input type="text" name="postcode" id="postcode" class="textfield" required onblur="checkpostcode();"></td>
		</tr>
		<tr>
		<td></td>
		<td> 	 <span id="postcode_status" class="err"></span> </td>
		</tr>
		</table>
		<br><br>
		<span id="form_status" class="err"></span>
		<br><br>
		<input type="submit" name="submit" value="submit" class="sub">

</div>

</body>
</html>