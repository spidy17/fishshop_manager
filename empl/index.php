<?php
session_start();
global $username;
 global $uerror;
global $num;
$uerror="mdcjhwvjhsvc";


if(isset($_POST['emp']))
{

header('location:http://localhost/empl/index.php');
}


if(isset($_POST['sub']))
{
$username=$_POST['username'];
$password=$_POST['pass'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
$q="select * from emplogin where username='$username' && password='$password'";


$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);



if($num==1)
{
$_SESSION['username']=$username;
header('location:http://localhost/boots/index1.php');
}

else
{
echo "<script type='text/javascript'>alert('invalid login details');</script>";
}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Employee Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="index.php"  name="myform" onsubmit="return validateform()" method="post">
					<span class="login100-form-title p-b-55">
					<b>	Employee  Login</b>
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

			
		
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" type="submit" name="sub">
							Login
						</button>
					</div>

					

				
				</form>
			</div>
		</div>
	</div>
	
	

	
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="js/main.js"></script>

</body>
</html>