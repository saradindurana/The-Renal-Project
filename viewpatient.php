<?php
include 'database.php';
$query = 'SELECT * FROM patient';

$result = mysqli_query($conn, $query);
$patient_array = array();
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    array_push($patient_array, $row);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Branch details</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>

<body>

    <table class="table table-sm table-info">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //display patient table


            for ($i = 0; $i < sizeof($patient_array); $i++) {
                echo "<tr>";
                echo "<td>" . $patient_array[$i]['name'] . "</td>";
                echo "<td>" . $patient_array[$i]['phone'] . "</td>";
                echo "<td>" . $patient_array[$i]['age'] . "</td>";
                
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>