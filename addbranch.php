<?php 
session_start();
if(!isset($_SESSION['adminlogged']))
{
  header("location:index.html");
}
include 'database.php';


if (isset($_POST)) {
    $branchname=$_POST['branchname'];
    $amount=$_POST['amount'];
   
}
//insert new
$sql= "INSERT INTO branch (branch_name, amount) VALUES ('$branchname', '$amount')";
if ($conn->query($sql) === true) { ?>

<script type="text/javascript">
            alert('Branch Added');
            window.location.href = "admin.php";
        </script>
    
<?php } else {
        echo "<script>alert('Error: ' . $sql . '<br>' . $conn->error')</script>";
    }


    ?>