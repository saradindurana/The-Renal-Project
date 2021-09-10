<?php
session_start();
include 'database.php';
if (isset($_POST)) {
    $username=$_POST['username'];
    $password=$_POST['password'];
}
$q="select * from admin where username='$username' and password='$password' ";
$result=mysqli_query($conn,$q);
$count1=mysqli_num_rows($result);
$q="select * from staff where username='$username' and password='$password' ";
$result=mysqli_query($conn,$q);
$count2=mysqli_num_rows($result);
$q="select * from doctor where username='$username' and password='$password' ";
$result=mysqli_query($conn,$q);
$count3=mysqli_num_rows($result);
if($count1>0){
    $_SESSION['adminlogged']='yes';
    header("Location: admin.php"); 
exit();
}
else if($count2>0){
    $_SESSION['stafflogged']='yes';
    header("Location: staff.php?username=$username"); 
}
else if($count3>0){
    $_SESSION['doctorlogged']='yes';
    header("Location: doctor.php?doctorname=$username"); 
}
else{
    echo "no user found, try checking password and username";
}
?>