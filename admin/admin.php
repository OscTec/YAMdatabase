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

if ($_SESSION['admin'] == 1) {

$id = $mysqli->escape_string($_POST['id']);
$sal = $mysqli->escape_string($_POST['sal']);
$firstName = $mysqli->escape_string($_POST['firstName']);
$surName = $mysqli->escape_string($_POST['surName']);
$accessRight = $mysqli->escape_string($_POST['accessRight']);

$sql = "INSERT INTO staff (id, salutation, firstName, lastName, accessRight)
VALUES ('$id', '$sal', '$firstName', '$surName', '$accessRight')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. Last inserted ID is: " . $id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



} elseif ($_SESSION['admin'] == 2) {

  $id = $mysqli->escape_string($_POST['id']);

  $sql = "DELETE FROM accounts WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . $conn->error;
  }

  $conn->close();


}

?>
