<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$con=mysqli_connect("localhost", "root", "102030Ab", "spot_db");
if (mysqli_connect_errno())
	{
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
    }
else
{
	$username = mysqli_real_escape_string($con, $_POST['name']);
	$password = mysqli_real_escape_string($con, $_POST['password']); 
	$login_query = "SELECT * FROM admin WHERE name = '$username' AND password = '$password' ";
	$result1 = mysqli_query($con,$login_query);
	$num1 = mysqli_num_rows($result1);
	if($num1 == 1)
	{
		$activation_query= "SELECT * FROM restaurant WHERE active=1";
		if ($result2 = mysqli_query($con, $activation_query))
			{
				while(list($id, $name, $location) = mysqli_fetch_row($result2))
					{
						echo "$id, $name, $location <br>";
					}
		//		while ($row = mysqli_fetch_array($result2))
		//			{
		//				echo "resturant name";
		//				mysqli_free_result($result2);
		//			}
		//		
			}
	}
	else
	{
		echo "Wrong Username or Password";
		mysqli_close($con);
        }
}
?>
