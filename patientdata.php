<?php
//setting header to json
header('Content-Type: application/json');

//database
include 'database.php';

//query to get data from the table
$query = "SELECT date_of_admission, patient_no FROM datepatient";

//execute query
$result = mysqli_query($conn, $query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//now print the data
print json_encode($data);