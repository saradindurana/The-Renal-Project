<?php
session_start();
if(!isset($_SESSION['adminlogged']))
{
  header("location:index.html");
}
$branch=$_GET['branch'];
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add staff</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Add staff</h1>
      <form action='savestaff.php?b=<?php echo $branch ?>' method="post">
      <div class="txt_field">
      <font size="4"
          face="verdana"
          color="green">
            Branch
        </font>
      <?php 
      echo  "<input type='text' required name='branch' value= '$branch' readonly>";
      ?>  
    </div>
        <div class="txt_field">
          <input type="text" required name="username">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password">
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="text" required name="email">
          <span></span>
          <label>email</label>
        </div>
        <div class="txt_field">
          <input type="text" required name="phone">
          <span></span>
          <label>Phone</label>
        </div>
        <input type="submit" value="Add staff" class="allbtn">
      
      </form>
    </div>

  </body>
</html>
