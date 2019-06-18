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
date_default_timezone_set("GB");

$class = $mysqli->escape_string($_POST['class']);
$classSequenceNumber = $mysqli->escape_string($_POST['classSequenceNumber']);
$shortTitle = $mysqli->escape_string($_POST['shortTitle']);
$comment = $mysqli->escape_string($_POST['comment']);
$originalOwner = $mysqli->escape_string($_POST['originalOwner']);
// $dateOfCreation = $mysqli->escape_string($_POST['dateOfCreation']);
$dateOfCreation = date("d-m-Y-h:i:sa");
$receiptNumber = $mysqli->escape_string($_POST['receiptNumber']);
$itemsCondition = $mysqli->escape_string($_POST['itemsCondition']);
$donor = $mysqli->escape_string($_POST['donor']);
$owner = $mysqli->escape_string($_POST['owner']);
$itemStatus = $mysqli->escape_string($_POST['itemStatus']);
$dateReceived = $mysqli->escape_string($_POST['dateReceived']);
// $inputBy = $mysqli->escape_string($_POST['inputBy']);
$inputBy = $_SESSION['id'];
$period = $mysqli->escape_string($_POST['period']);
$loanNumber = $mysqli->escape_string($_POST['loanNumber']);
$building = $mysqli->escape_string($_POST['building']);
$room = $mysqli->escape_string($_POST['room']);
$id = $mysqli->escape_string($_POST['id']);


$sql = "INSERT INTO collection (class, classSequenceNumber, shortTitle, comment, originalOwner, dateOfCreation, receiptNumber, itemsCondition, donor,
owner, itemStatus, dateReceived, inputBy, period, loanNumber, building, room, newID)
VALUES ('$class', '$classSequenceNumber', '$shortTitle', '$comment', '$originalOwner', '$dateOfCreation', '$receiptNumber', '$itemsCondition', '$donor'
, '$owner', '$itemStatus', '$dateReceived', '$inputBy', '$period', '$loanNumber', '$building', '$room', '$id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. Last inserted ID is: " . $id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>
