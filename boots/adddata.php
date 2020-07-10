<?php

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$postal=$_POST['postal'];
$phone=$_POST['phone'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'db');

$q="insert into customer (Name,Email,Address,City,PostalCode,Phone) values ('$name','$email','$address','$city','$postal','$phone')";

mysqli_query($con,$q);


mysqli_close($con);
?>