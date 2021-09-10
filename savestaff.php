<?php
session_start();
if(!isset($_SESSION['adminlogged']))
{
  header("location:index.html");
}
include 'database.php';
$branchname=$_GET['b'];
if (isset($_POST)) {
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
 
}
//insert new
$sql= "INSERT INTO staff (username, email,password,phone,branch_name) VALUES ('$username', '$email', '$password','$phone','$branchname')";
if ($conn->query($sql) === true) { ?>

<script type="text/javascript">
          alert('Staff Added');
          window.location.href = "admin.php";
      </script>
  
<?php } else {
      echo "<script>alert('Error: ' . $sql . '<br>' . $conn->error')</script>";
  }


?>