<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';

    }

}
?>
<body>

  <div class="container">

    <h2>YAM Database Login</h2>
    <form class="form-horizontal" action="index.php" method="post" autocomplete="off">
      <div class="form-group">
        <label class="control-label col-sm-2" for="id">Staff ID:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter Staff ID" required autocomplete="off" name="id"/>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="password">Password:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="password" placeholder="Enter your password" name="password">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button class="btn btn-default" name="login" />Log In</button>
        </div>
      </div>
    </form>
  </div>


</body>
</html>
