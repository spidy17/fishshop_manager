<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
if(isset($_POST['filter']))
{
$ser=$_POST['se'];
$q="select * from fish where concat(id,type) like '%$ser%'";
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

$query="select * from fish";
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

$query="SELECT * FROM fish ORDER BY id";
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

$query="SELECT * FROM fish ORDER BY stock";
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

$query="SELECT * FROM fish ORDER BY stock desc";
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

$query="SELECT * FROM fish ORDER BY id desc";
$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);
mysqli_close($con);
}
?>

<?php
if(isset($_POST['subst']))
{
$id=$_POST['id'];
$type=$_POST['type'];
$price=$_POST['price'];
$stock=$_POST['stock'];




$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');

$q="insert into fish (id,type,price,stock) values ($id,'$type',$price,$stock)";

$result=mysqli_query($con,$q);


$r="select * from fish where id='$id'";
$res=mysqli_query($con,$r);

$nume=mysqli_num_rows($res);
mysqli_close($con);
}
?>

<?php

$id=$_GET['id'];
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'db');

$q="delete from fish where id=$id";
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
var id=document.myform.id.value;  
var type=document.myform.type.value;
var price=document.myform.price.value;
var stock=document.myform.stock.value;
 
if (id==null || id==""){

  alert("id can't be blank");  
  return false;  
}

else if((isNaN(id)))
{
alert("id should not have characters");
return false;
}

else if(type==null || type==""){

  alert("fish type can't be blank");  
  return false;  
}

else if(!(isNaN(type)))
{
alert("fish type should be string");
return false;
}

else if(price==null || price=="")
{
alert("price can't be blank");  
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
<form action="fish.php" id="formid" method="post">

      <button type="submit" class="btn btn-success" name="displaybutton">Show Data</button>
</form>
</div>
  </div>

  <div class="col-md-2">
         <button type="button" class="btn btn-success" data-target="#mymodel" data-toggle="modal">Add Data</button>
  </div>



  <div class="col-md-2">
       <form action="fish.php"  method="post">
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
            FISH DETAILS    </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Fish ID <form action="fish.php" method="post"><button type="submit" class="btn btn-link" name="asc"><i class="fa fa-arrow-up" aria-hidden="true"></i></i></button><button type="submit" class="btn btn-link" name="desc"><i class="fa fa-arrow-down" aria-hidden="true"></i></i></button></th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Stock<button type="submit" class="btn btn-link" name="asce"><i class="fa fa-arrow-up" aria-hidden="true"></i></i></button><button type="submit" class="btn btn-link" name="desce"><i class="fa fa-arrow-down" aria-hidden="true"></i></i></th></form>
                 
<th colspan="2">Operations</th>
                   
                  </tr>
                </thead>
                <tfoot>

                  <tr>
                    <th>Fish ID</th>
                    <th>Fish Type</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th colspan="2">Operations</th>
                   
                  </tr>
                </tfoot>
                <tbody>

<?php
global $result;
while($row=mysqli_fetch_array($result)):?>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['stock'];?></td>
                
                     <td> <button class="btn btn-danger" name="tdel"> <a href="fish.php?id=<?php echo $row['id'];?>" class="text-white">Delete</a></button></td>
<td> <button class="btn btn-success" name="fishform"> <a href="fishform.php?id=<?php echo $row['id'];?>" class="text-white">Update</a></button></td>
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
            <span>Copyright © Fish Supplier 2019</span>
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
            <span aria-hidden="true">×</span>
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
          <h5 class="modal-title" id="exampleModalLabel">ADD DATA OF CUSTOMER</h5>
         
        </div>
        <div class="modal-body"><form action="fish.php" name="myform" onsubmit="return validateform()" method="post">
<div id="fo">
   Id:<br>
  <input type="number" name="id">
  <br>
   Type:<br>
  <input type="text" name="type">
  <br>
  Price:<br>
  <input type="number" name="price">
  <br>
  Stock:<br>
  <input type="number" name="stock">
  <br> 

<br>
 <button type="submit" class="btn btn-success" name="subst">SUBMIT</button>
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
