<?php
/* Main page with two forms: sign up and log in */
require '../db.php';
session_start();
if ($_SESSION['accessRight'] == 3){
$_SESSION['admin'] = 1;
} else {
 $_SESSION['message'] = "You don't have the right to be here!";
 header("location: ../error.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users</title>
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
   $result = $mysqli->query("SELECT * FROM accounts");
   if ( $result->num_rows == 0 ){ // User doesn't exist
       $_SESSION['message'] = "No users exist!";
       header("location: error.php");
     }
   else {
     htmlStartP1();
     Echo "<th>ID</th>";
     Echo "<th>First Name</th>";
     Echo "<th>Last Name</th>";
     Echo "<th>Access Right</th>";
     htmlStartP2();
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>". $row["id"]. "</td><td>". $row["firstName"]. "</td><td>" . $row["lastName"]. "</td><td>" . $row["accessRight"]. "</td></tr>";
     }
     htmlEnd();

 }

?>
<?php

 function table() {
   Echo "<th>New ID</th>";
   Echo "<th>Class</th>";
   Echo "<th>Class Sequence Number</th>";
   Echo "<th>Short Title</th>";
   Echo "<th>Comment</th>";
   Echo "<th>Original Owner</th>";
   Echo "<th>Date Of Creation</th>";
   Echo "<th>Receipt Number</th>";
   Echo "<th>Items Condition</th>";
   Echo "<th>Donor</th>";
   Echo "<th>Owner</th>";
   Echo "<th>Items Status</th>";
   Echo "<th>Date Received</th>";
   Echo "<th>Input By</th>";
   Echo "<th>Time Period</th>";
   Echo "<th>Loan Number</th>";
   Echo "<th>Building</th>";
   Echo "<th>Room Number</th>";

 }


 function htmlStart() {
   Echo "<html>";
   // Echo "<b>My second test</b>";
   Echo '<table class="table table-hover">';
   Echo "<thead>";
   Echo "<tr>";
   Echo "<th>id</th>";
   Echo "<th>First Name</th>";
   Echo "<th>Last Name</th>";
   Echo "</tr>";
   Echo "</thead>";
   Echo "<tbody>";

 }

 function htmlStartP1(){
   Echo "<html>";
   // Echo "<b>My second test</b>";
   Echo '<table class="table table-hover">';
   Echo "<thead>";
   Echo "<tr>";
 }

 function htmlStartP2(){
   Echo "</tr>";
   Echo "</thead>";
   Echo "<tbody>";
 }

 function htmlEnd() {
   Echo "</tbody>";
   Echo "</table>";
   Echo "</div>";
   Echo "</html>";
 }

 ?>










</body>
</html>
