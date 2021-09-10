<?php
session_start();
if(!isset($_SESSION['adminlogged']))
{
  header("location:index.html");
}
?><!DOCTYPE html>
<!-- Admin home in page -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Welcome admin!!</title>
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
          <a class="nav-link" href="viewdoctors.php">Doctors <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="viewbranch.php">Branches</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="viewadmin.php">Admins</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="logout.php">Log Out</a>
      
    </span>
    </div>
  </nav>
  <div class="center">
    <h1>Welcome Admin</h1>
    <button class="allbtn" data-target="#branchmodal" data-toggle="modal">Add Branch</button>
    <button class="allbtn" data-target="#doctormodal" data-toggle="modal">Add doctor</button>
    <button class="allbtn" data-target="#adminmodal" data-toggle="modal">Add Admin</button>
  </div>
    <div class="modal" id="branchmodal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-center text-primary">Add Branch</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="addbranch.php" method="POST">
              <div class="form-group">
                <label for="branchname">Branchname:</label>
                <input type="text" name="branchname" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="amount">Amount Per Patient:</label>
                <input type="number" name="amount" class="form-control" required>
              </div>
              <div class="modal-footer">
                <input class="allbtn" type="submit" value="Add Branch">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- doctor modal -->
    <div class="modal" id="doctormodal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-center text-primary">Add Doctor</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="adddoctor.php" method="POST">
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" required>
              </div>
              <div class="modal-footer">
                <input class="allbtn" type="submit" value="Add Doctor">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- admin modal -->
<div class="modal" id="adminmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="text-center text-primary">Add Admin</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="addadmin.php" method="POST">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control" required>
          </div>
          <div class="modal-footer">
            <input class="allbtn" type="submit" value="Add Admin">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>

</html>