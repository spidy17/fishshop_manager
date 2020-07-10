<?php
session_start();
if(isset($_POST['sub']))
{
$username=$_POST['us'];
$password=$_POST['pass'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
$q="select * from login where username='$username' && password='$password'";


$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

}

if($num==1)
{
$_SESSION['username']=$username;
header('location:http://localhost/boots/index.php');
}

else
{

header('location:http://localhost/login.php');

if(strlen($password)<4)
echo "pass shud contaon";

echo "pass shud contaon";
}


?>