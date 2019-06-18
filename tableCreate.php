<?php
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

// sql to create table
$sql = "CREATE TABLE accounts (

id INT(4) UNSIGNED PRIMARY KEY,
firstName VARCHAR(200) NOT NULL,
lastName VARCHAR(200) NOT NULL,
accessRight INT(10) NOT NULL,
password VARCHAR(100) NOT NULL,
hash VARCHAR(32) NOT NULL



)";

if ($conn->query($sql) === TRUE) {
    echo "Table donor created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
