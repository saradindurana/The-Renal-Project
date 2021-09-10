<?php 
session_start();
if(!isset($_SESSION['adminlogged']))
{
  header("location:index.html");
}
include 'database.php';


if (isset($_POST)) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
   
}
//insert new
$sql= "INSERT INTO admin (username, email,password,phone) VALUES ('$username', '$email', '$password','$phone')";
if ($conn->query($sql) === true) { ?>

<script type="text/javascript">
            alert('Admin Added');
            window.location.href = "admin.php";
        </script>
    
<?php } else {
        echo "<script>alert('Error: ' . $sql . '<br>' . $conn->error')</script>";
    }


    ?>