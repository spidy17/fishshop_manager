<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
if(isset($_POST['filter']))
{
$ser=$_POST['se'];
$q="select * from employee where concat(idEmp,Emp_Name) like '%$ser%'";
$result=filtert($q);
}

function filtert($q)
{
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
$result=mysqli_query($con,$q);
return $result;
}
?>

<?php
session_start();
ini_set( "display_errors", 0);

if(!isset($_SESSION['username']))

('location:http://localhost/index.php');
?>


<?php
if(isset($_POST['displaybutton']))
{
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');

$query="select * from employee";
$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);
mysqli_close($con);
}
?>

<?php
if(isset($_POST['asc']))
{
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');

$query="SELECT * FROM Customer ORDER BY Name";
$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);
mysqli_close($con);
}
?>

<?php
if(isset($_POST['asce']))
{
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');

$query="SELECT * FROM Customer ORDER BY City";
$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);
mysqli_close($con);
}
?>


<?php
if(isset($_POST['desce']))
{
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');

$query="SELECT * FROM Customer ORDER BY City desc";
$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);
mysqli_close($con);
}
?>

<?php
if(isset($_POST['desc']))
{
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');

$query="SELECT * FROM Customer ORDER BY Name desc";
$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);
mysqli_close($con);
}
?>

<?php
if(isset($_POST['subs']))
{
$id=$_POST['no'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$dept=$_POST['dept'];
$salary=$_POST['salary'];


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'db');

$q="insert into employee (idEmp,Emp_Name,Emp_Address,Emp_PhnNum,Emp_deptName 
,Salary ) values ($id,'$name','$address',$phone,'$dept',$salary)";

$r="select * from employee where idEmp='$id'";
$result=mysqli_query($con,$q);

$res=mysqli_query($con,$r);

$nume=mysqli_num_rows($res);

mysqli_close($con);
}
?>


<?php

$id=$_GET['id'];
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'db');

$q="delete from employee where idEmp=$id";
mysqli_query($con,$q);
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <style>

    .row{
      height:50px;
      margin-bottom: 10px;
}

#fo{
padding-left:120px;
width:auto;

      
      
    }
  </style>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

<script> 
function validateform()
{  
  

var id=document.myform.no.value;  
var name=document.myform.name.value;
var address=document.myform.address.value;
var phone=document.myform.phone.value;
var dept=document.myform.dept.value;
var salary=document.myform.salary.value;
  

 
if (name==null || name==""){

  alert("Name can't be blank");  
  return false;  
}

else if(!(isNaN(name)))
{
alert("name should contain only letters");
return false;
}


else if((isNaN(id)))
{
alert("id should not have characters");
return false;
}

else if(id==null || id=="")
{
alert("id can't be blank");  
  return false;
}

else if(address==null || address=="")
{
alert("address can't be blank");  
  return false;
}

else if(phone==null || phone=="")
{
alert("phone number can't be blank");  
  return false;
}

else if(phone.length<10){  
  alert("phone no must be 10 characters long.");  
  return false;  
  }


else if(dept==null || dept=="")
{
alert("department can't be blank");  
  return false;
}

else if(salary==null || salary=="")
{
alert("salary can't be blank");  
  return false;
}

else
{

<?php
global $nume;
if($nume==1)?>
alert("id shud be unique");

return false;

}
}

</script>
  <nav class="navbar navbar-expand navbar-dark bg-primary static-top">

    <a class="navbar-brand mr-1" href="index.php">Hello &nbsp; <?php echo $_SESSION['username']; ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
   
    



      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      
 
      
      <li class="nav-item active">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Customers</span></a>
      </li>
 <li class="nav-item active">
        <a class="nav-link" href="employees.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Employees</span></a>
      </li>

 <li class="nav-item active">
        <a class="nav-link" href="fish.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Fish</span></a>
      </li>
<li class="nav-item active">
        <a class="nav-link" href="fishhistory.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Fishhistory</span></a>
      </li>
    </ul>



    <div id="content-wrapper">

      <div class="container-fluid">

   <div class="row">
  <div class="col-md-2">
<div class="formpost">
<form action="employees.php" id="formid" method="post">

      <button type="submit" class="btn btn-success" name="displaybutton">Show Data</button>

</div>

  </div>
  <div class="col-md-2">

         <button type="button" class="btn btn-success" data-target="#mymodel" data-toggle="modal">Add Data</button>
  </div>

  
</form>


  <div class="col-md-2">

            <form action="employees.php" method="post">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="se">
    
  </div>

  

  <div class="col-md-2">
 

     <button class="btn btn-secondary my-2 my-sm-0" name="filter" type="submit">Search</button>
    </div>
</form>

<div class="col-md-2">

      </div>

    <div class="col-md-2">

      </div>
</div>     




        <!--customers-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            EMPLOYEE DETAILS    </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                     <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Dept Name</th>
                 <th>Salary</th>
<th>Delete</th>
<th>Update</th>
                  </tr>
                </thead>
                <tfoot>

                  <tr>
                   <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Dept Name</th>
                    <th>Salary</th>
                    <th>Delete</th>
<th>Update</th>

                   
                  </tr>
                </tfoot>
                <tbody>

<?php
global $result;
while($row=mysqli_fetch_array($result)):?>
                  <tr>
                    <td><?php echo $row['idEmp'];?></td>
                    <td><?php echo $row['Emp_Name'];?></td>
                    <td><?php echo $row['Emp_Address'];?></td>
                    <td><?php echo $row['Emp_PhnNum'];?></td>
                    <td><?php echo $row['Emp_deptName'];?></td>
                    <td><?php echo $row['Salary'];?></td>
  <td> <button class="btn btn-danger" name="tdel"> <a href="employees.php?id=<?php echo $row['idEmp'];?>" class="text-white">Delete</a></button></td>
<td><button class="btn btn-success" > <a href="employeeupd.php?id=<?php echo $row['idEmp'];?>" class="text-white">Update</a></button></td>
                  </tr>
                  
                  
             
               </tbody>
<?php endwhile;?>
              </table>



            </div>
          </div>
          

        

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright � Fish Supplier 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">�</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to Logout?.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

 <div class="modal fade" id="mymodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD DATA OF Employees</h5>
         
        </div>
        <div class="modal-body"><form action="employees.php" name="myform" onsubmit="return validateform()" method="post">
<div id="fo">
   Id:<br>
  <input type="number" name="no">
  <br>
   Name:<br>
  <input type="text" name="name">
  <br>
   Address:<br>
  <input type="text" name="address">
  <br>
  Phone No:<br>
  <input type="number" name="phone">
  <br>
  Department Name:<br>
  <input type="text" name="dept">
  <br> 
  Salary:<br>
  <input type="number" name="salary">
  <br>
<br>
 <button type="submit" class="btn btn-success" name="subs">SUBMIT</button>
</form> </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
     
        </div>
      </div>
    </div>
  </div>


 





  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 

 

</body>

</html>
