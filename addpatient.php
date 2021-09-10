<?php 
session_start();
if(!isset($_SESSION['stafflogged']))
{
  header("location:index.html");
}
include 'database.php';


if (isset($_POST)) {
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $date_of_admission=date('y-m-d',strtotime($_POST['date_of_admission']));
   
}
//insert new
$q="INSERT INTO patient (name, phone, age) VALUES ('$name', '$phone', '$age') ";
mysqli_query($conn,$q);
$q="select * from datepatient where date_of_admission='$date_of_admission' ";
$result=mysqli_query($conn,$q);
$count1=mysqli_num_rows($result);
$details_array = array();
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    array_push($details_array, $row);
}
if($count1>0){
    $count=$details_array[0]['patient_no']+1;
    $q="UPDATE datepatient  SET `patient_no`=$count WHERE date_of_admission='$date_of_admission'";
    mysqli_query($conn,$q);
}
else{
    $q2="INSERT INTO datepatient (date_of_admission, patient_no) VALUES ('$date_of_admission', 1) ";
    mysqli_query($conn,$q2);
}
?>
<script type="text/javascript">
            alert('Patient Added');
            window.location.href = "staff.php";
        </script>
