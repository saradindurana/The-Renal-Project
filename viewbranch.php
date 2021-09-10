<?php
session_start();
if(!isset($_SESSION['adminlogged']))
{
  header("location:index.html");
}
include 'database.php';
$query = 'SELECT * FROM branch';

$result = mysqli_query($conn, $query);
$branch_array = array();
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    array_push($branch_array, $row);
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
                <th scope="col">Branchname</th>
                <th scope="col">Amount Per Patient</th>
                <th scope="col">Add Staff</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //display branch table


            for ($i = 0; $i < sizeof($branch_array); $i++) {
                echo "<tr>";
                echo "<td>" . $branch_array[$i]['branch_name'] . "</td>";
                echo "<td>" . $branch_array[$i]['amount'] . "</td>";
                $b_name=$branch_array[$i]['branch_name'];
                echo "<td> <a href='addstaff.php?branch=$b_name'><input type='button' name= 'edit' value='add staff'></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>