<?php
if(isset($_POST['sub']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
$q="insert into login (username,password) values ('$username','$password')";
mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="i.php" method="post">
  First name:<br>
  <input type="text" name="username" value="Mickey">
  <br>
  Last name:<br>
  <input type="password" name="password" value="Mouse">
  <br><br>
  <input type="submit" name="sub" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
