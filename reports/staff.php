<?php
/* Main page with two forms: sign up and log in */
require '../db.php';
session_start();
$_SESSION['tab'] = 12;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Staff</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <a href="../menu.php" class="btn btn-info navbar-fixed-top" role="button">Back</a>
</br>
</br>
  <?php
  require '../search.php';
  ?>






  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      if (isset($_POST['login'])) { //user logging in

          require '../search.php';

      }

      elseif (isset($_POST['register'])) { //user registering

          require 'register.php';

      }
  }
  ?>


</body>
</html>
