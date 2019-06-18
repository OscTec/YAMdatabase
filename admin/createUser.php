<?php

// Escape all $_POST variables to protect against SQL injections
$firstName = $mysqli->escape_string($_POST['firstName']);
$lastName = $mysqli->escape_string($_POST['lastName']);
$id = $mysqli->escape_string($_POST['id']);
$accessRight = $mysqli->escape_string($_POST['accessRight']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );

// Check if user with that user already exists
$result = $mysqli->query("SELECT * FROM accounts WHERE id='$id'") or die($mysqli->error());

// We know user id exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {

    $_SESSION['message'] = 'User with this ID already exists!';
    header("location: error.php");

}
else {

    $sql = "INSERT INTO accounts (id, firstName, lastName, accessRight, password, hash) "
            . "VALUES ('$id','$firstName','$lastName','$accessRight','$password', '$hash')";

    if ( $mysqli->query($sql) ){

      echo "New record created successfully. Last inserted ID is: " . $id;

    }



}
