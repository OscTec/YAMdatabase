<?php
/* Main page with two forms: sign up and log in */
require '../db.php';
session_start();
if ($_SESSION['accessRight'] == 3){
$_SESSION['admin'] = 2;
} else {
  $_SESSION['message'] = "You don't have the right to be here!";
  header("location: ../error.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete Staff</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">

    <h2>YAM Database Delete User</h2>
    <form class="form-horizontal" action="amendStaff.php" method="post" autocomplete="off">
      <div class="form-group">
      <label class="control-label col-sm-2" for="id">ID:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" placeholder="Enter a ID Number to Delete" name="id">
      </div>
    </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button class="btn btn-default" name="delete" />Delete</button>
          <a href="../menu.php" class="btn btn-info" role="button">Back</a>

        </div>
      </div>
    </form>
  </div>








  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      if (isset($_POST['delete'])) { //user logging in

          require 'admin.php';

      }

      elseif (isset($_POST['register'])) { //user registering

          require 'register.php';

      }
  }
  ?>


</body>
</html>
