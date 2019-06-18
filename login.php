<?php
session_start();

// Escape email to protect against SQL injections
$id = $mysqli->escape_string($_POST['id']);
$result = $mysqli->query("SELECT * FROM accounts WHERE id='$id'");
// $user_data = mysqli_fetch_array($result);
$accessRight = $mysqli->query("SELECT accessRight FROM accounts WHERE id='$id'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that ID doesn't exist!";
    header("location: error.php");
}
else { // User exists


    $user = $result->fetch_assoc();
    if ( password_verify($_POST['password'], $user['password']) ) {
      $_SESSION['id'] = $user['id'];
      $_SESSION['accessRight'] = $user['accessRight'];
      $_SESSION['logged_in'] = true;

      // while($row = $result->fetch_assoc()) {
      //     $_SESSION['accessRight'] = $row["accessRight"];
      //   }




        header("location: menu.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}
