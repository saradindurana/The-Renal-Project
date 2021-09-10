<?php
session_start();
if(!isset($_SESSION['doctorlogged']))
{
  header("location:index.html");
}

?>
<!DOCTYPE html>
<!-- doctor home page -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Welcome Doctor  </title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
 <style>
     .chart-container{
         width: 640px;
         height: auto;
     }
 </style>
  
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Welcome Doctor</a>
    <span class="navbar-text">
        <a href="logout.php">Log Out</a>
      
    </span>
  </nav>
  <center>
    <div class="chart-container">
     <canvas id="mycanvas"></canvas>
     <script src="patientchart.js"></script>
    </div>
    </center>
</body>

</html>