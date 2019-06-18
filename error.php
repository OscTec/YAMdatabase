<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Error</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
<div class="col-sm-10">
<!-- <div class="form"> -->
    <h1>Error</h1>
    <p>
    <?php
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];
    else:
        header( "location: index.php" );
    endif;



    // if ($_SESSION['logged_in'] == true){
    //     Echo "<a href="menu.php" class="btn btn-info" role="button">Home</a>;"
    //
    // } else {
    //     Echo "<a href="index.php" class="btn btn-info" role="button">Login</a>;"
    //
    //
    // }



  ?>
      <a href="index.php" class="btn btn-info" role="button">Home</a>
      </p>
    <!-- <a href="index.php" class="btn btn-info" role="button">Home</a> -->
    <!-- <a href="index.php"><button class="button button-block"/>Home</button></a> -->
</div>
</div>
</body>
</html>
