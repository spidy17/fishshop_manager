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
$username=$_POST['us'];
$password=$_POST['pass'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
$q="select * from login where username='$username' && password='$password'";


$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);



if($num==1)
{
$_SESSION['username']=$username;
header('location:http://localhost/boots/index.php');
}

else
{
$message="in";
echo "<script type='text/javascript'>alert('invalid login details');</script>";
}


}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<style>
.rt{
margin-bottom:30px;
color:white;
background-color:red;
margin-left:20px;
margin-right:20px;
}
</style>

  </head>
  <body background="img1/f3.jpg">
      
<script>
function validateform()
{  
var id=document.myform.us.value;  
var type=document.myform.pass.value;

if (id==null || id==""){

  alert("enter username");  
  return false;  
}

else if (type==null || type==""){

  alert("enter password");  
  return false;  
}






}
</script>
 <div class="modal-dialogue csa text-center">

    <div class="row">
    <div class="col-md-4 main-section ">


        <div class="modal-content">

        <div class="col-4 user-img">
            <img src="img1/logo.png">
        </div>
        <b class="rt">ADMIN LOGIN</b>
        <div class="col-12 form-input ">
            <form action="login.php" name="myform" onsubmit="return validateform()"method="post">
                <div class="form-group">
                        
                    <input type="text" class="form-control us"  placeholder="Enter Username" name="us" id="username">
                    </div>

                    <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter Password" name="pass" id="password">


                            </div>
        
              <button type="submit" name="sub" class="btn btn-success">Login</button>



</div>        

</form>
 
            </div>
        </div>
        </div>
    </div>
    </div>
 

  </body>
  </html>