<?php
session_start();
if(!isset($_SESSION['stafflogged']))
{
  header("location:index.html");
}
?>
<!DOCTYPE html>
<!-- staff home page -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Welcome </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Welcome</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="viewpatient.php">Patients <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="logout.php">Log Out</a>
      
    </span>
    </div>
  </nav>
  <div class="center">
    <h1>Welcome </h1>
    <button class="allbtn" data-target="#branchmodal" data-toggle="modal">Regster Patient</button>
  </div>
    <div class="modal" id="branchmodal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-center text-primary">Register Patient</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="addpatient.php" method="POST">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" name="age" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="age">Date of admission:</label>
                <input type="date" name="date_of_admission" class="form-control" required>
              </div>
              <div class="modal-footer">
              <input class="allbtn" type="submit" value="Register Patient">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
</body>

</html>