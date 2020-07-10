<?php
$em=$_POST['em'];
$pass=$_POST['pass'];
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'db');

$q="insert into login (email,password) values ('$em','$pass')";

mysqli_query($con,$q);


mysqli_close($con);
?>

