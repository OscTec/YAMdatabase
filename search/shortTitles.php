<?php
/* Main page with two forms: sign up and log in */
require '../db.php';
session_start();
$_SESSION['tab'] = 4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Short Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">

    <h2>YAM Database Short Title Search</h2>
    <form class="form-horizontal" action="shortTitles.php" method="post" autocomplete="off">
      <div class="form-group">
        <label class="control-label col-sm-2" for="id">Short Title:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter part of a Short Title" required autocomplete="off" name="id"/>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button class="btn btn-default" name="search" />Search</button>
          <a href="../menu.php" class="btn btn-info" role="button">Back</a>

        </div>
      </div>
    </form>
  </div>



  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      if (isset($_POST['search'])) { //user logging in

          require '../search.php';

      }

  }
  ?>


</body>
</html>
