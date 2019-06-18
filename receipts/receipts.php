<?php
session_start();
$servername = "cs2s";
$username = "oscar.reid";
$password = "6wfCwA7O";
$dbname = "oscarreid_YAMdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SESSION['receipt'] == 1) {

$id = $mysqli->escape_string($_POST['id']);
$donorNumber = $mysqli->escape_string($_POST['donorNumber']);
$date = $mysqli->escape_string($_POST['date']);
$noItems = $mysqli->escape_string($_POST['noItems']);
$description = $mysqli->escape_string($_POST['description']);

$sql = "INSERT INTO receipts (receiptID, donorNumber, dateRecieved, numberOfItems, shortDescription)
VALUES ('$id', '$donorNumber', '$date', '$noItems', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. Last inserted ID is: " . $id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



} elseif ($_SESSION['receipt'] == 2) {

  $id = $mysqli->escape_string($_POST['id']);
  //$result = $mysqli->query("SELECT * FROM staff WHERE id='$id'");
  $result = $mysqli->query("SELECT * FROM receipts WHERE receiptID LIKE '%$id%'");

  if ( $result->num_rows == 0 ){ // User doesn't exist
      $_SESSION['message'] = "No loans with that ID exist!";
      header("location: error.php");
  }
  else {
    htmlStartP1();
    Echo "<th>Receipt ID</th>";
    Echo "<th>Donor Number</th>";
    Echo "<th>Date Recieved</th>";
    Echo "<th>Number of Items</th>";
    Echo "<th>Short Description</th>";
    htmlStartP2();
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["receiptID"]. "</td><td>". $row["donorNumber"]. "</td><td>" . $row["dateReceived"] .
       "</td><td>". $row["numberOfItems"]. "</td><td>" . $row["shortDescription"] . "</td></tr>";
    }
    htmlEnd();
  }




}

?>

<?php


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
