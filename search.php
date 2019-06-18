<?php
session_start();
if ($_SESSION['tab'] == 1) {
$id = $mysqli->escape_string($_POST['id']);
$result = $mysqli->query("SELECT * FROM staff WHERE id LIKE '%$id%'");
if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
  }
else {
  htmlStartP1();
  Echo "<th>id</th>";
  Echo "<th>First Name</th>";
  Echo "<th>Last Name</th>";
  htmlStartP2();
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["id"]. "</td><td>". $row["firstname"]. "</td><td>" . $row["lastname"] . "</td></tr>";
    }
  htmlEnd();
  }

}
if ($_SESSION['tab'] == 3) {
$id = $mysqli->escape_string($_POST['id']);
$result = $mysqli->query("SELECT * FROM collection WHERE comment LIKE '%$id%'");
if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Item with that comment doesn't exist!";
    echo $_SESSION['message'];
  }
else {
  htmlStartP1();
  table();
  htmlStartP2();
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["newID"]. "</td><td>". $row["class"]. "</td><td>" . $row["classSequenceNumber"] .
       "</td><td>". $row["shortTitle"]. "</td><td>". $row["comment"]. "</td><td>". $row["originalOwner"].
       "</td><td>". $row["dateOfCreation"]. "</td><td>". $row["receiptNumber"]. "</td><td>". $row["itemsCondition"].
       "</td><td>". $row["donor"]. "</td><td>". $row["owner"]. "</td><td>". $row["itemStatus"]. "</td><td>". $row["dateReceived"].
       "</td><td>". $row["inputBy"]. "</td><td>". $row["period"]. "</td><td>". $row["loanNumber"].
       "</td><td>". $row["building"]. "</td><td>". $row["room"]. "</td></tr>";

      // echo "<tr> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "</tr>"; <td> </td>
    }
  htmlEnd();
  }

}

if ($_SESSION['tab'] == 4) {
$id = $mysqli->escape_string($_POST['id']);
$result = $mysqli->query("SELECT * FROM collection WHERE shortTitle LIKE '%$id%'");
if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Item with that Short Title doesn't exist!";
    echo $_SESSION['message'];
    // header("location: ../error.php");
  }
else {
  htmlStartP1();
  table();
  htmlStartP2();
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["newID"]. "</td><td>". $row["class"]. "</td><td>" . $row["classSequenceNumber"] .
       "</td><td>". $row["shortTitle"]. "</td><td>". $row["comment"]. "</td><td>". $row["originalOwner"].
       "</td><td>". $row["dateOfCreation"]. "</td><td>". $row["receiptNumber"]. "</td><td>". $row["itemsCondition"].
       "</td><td>". $row["donor"]. "</td><td>". $row["owner"]. "</td><td>". $row["itemStatus"]. "</td><td>". $row["dateReceived"].
       "</td><td>". $row["inputBy"]. "</td><td>". $row["period"]. "</td><td>". $row["loanNumber"].
       "</td><td>". $row["building"]. "</td><td>". $row["room"]. "</td></tr>";

    }
  htmlEnd();
  }

}



if ($_SESSION['tab'] == 5) {
$id = $mysqli->escape_string($_POST['id']);
$result = $mysqli->query("SELECT * FROM collection WHERE newID LIKE '%$id%'");
if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Item with that New ID doesn't exist!";
    echo $_SESSION['message'];
    // header("location: ../error.php");
  }
else {
  htmlStartP1();
  table();
  htmlStartP2();
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["newID"]. "</td><td>". $row["class"]. "</td><td>" . $row["classSequenceNumber"] .
       "</td><td>". $row["shortTitle"]. "</td><td>". $row["comment"]. "</td><td>". $row["originalOwner"].
       "</td><td>". $row["dateOfCreation"]. "</td><td>". $row["receiptNumber"]. "</td><td>". $row["itemsCondition"].
       "</td><td>". $row["donor"]. "</td><td>". $row["owner"]. "</td><td>". $row["itemStatus"]. "</td><td>". $row["dateReceived"].
       "</td><td>". $row["inputBy"]. "</td><td>". $row["period"]. "</td><td>". $row["loanNumber"].
       "</td><td>". $row["building"]. "</td><td>". $row["room"]. "</td></tr>";

     }
  htmlEnd();
  }

}

if ($_SESSION['tab'] == 6) {
$id = $mysqli->escape_string($_POST['id']);
$result = $mysqli->query("SELECT * FROM collection WHERE building LIKE '%$id%'");
if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "No Items in that Building";
    echo $_SESSION['message'];
  }
else {
  htmlStartP1();
  table();

  htmlStartP2();
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["newID"]. "</td><td>". $row["class"]. "</td><td>" . $row["classSequenceNumber"] .
       "</td><td>". $row["shortTitle"]. "</td><td>". $row["comment"]. "</td><td>". $row["originalOwner"].
       "</td><td>". $row["dateOfCreation"]. "</td><td>". $row["receiptNumber"]. "</td><td>". $row["itemsCondition"].
       "</td><td>". $row["donor"]. "</td><td>". $row["owner"]. "</td><td>". $row["itemStatus"]. "</td><td>". $row["dateReceived"].
       "</td><td>". $row["inputBy"]. "</td><td>". $row["period"]. "</td><td>". $row["loanNumber"].
       "</td><td>". $row["building"]. "</td><td>". $row["room"]. "</td></tr>";

      // echo "<tr> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "</tr>"; <td> </td>
    }
  htmlEnd();
  }

}


if ($_SESSION['tab'] == 7) {
$id = $mysqli->escape_string($_POST['id']);
$result = $mysqli->query("SELECT * FROM collection WHERE classSequenceNumber LIKE '%$id%'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "No Items with that Class Sequence Number exist!";
    echo $_SESSION['message'];
  }
else {
  htmlStartP1();
  table();

  htmlStartP2();
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["newID"]. "</td><td>". $row["class"]. "</td><td>" . $row["classSequenceNumber"] .
       "</td><td>". $row["shortTitle"]. "</td><td>". $row["comment"]. "</td><td>". $row["originalOwner"].
       "</td><td>". $row["dateOfCreation"]. "</td><td>". $row["receiptNumber"]. "</td><td>". $row["itemsCondition"].
       "</td><td>". $row["donor"]. "</td><td>". $row["owner"]. "</td><td>". $row["itemStatus"]. "</td><td>". $row["dateReceived"].
       "</td><td>". $row["inputBy"]. "</td><td>". $row["period"]. "</td><td>". $row["loanNumber"].
       "</td><td>". $row["building"]. "</td><td>". $row["room"]. "</td></tr>";

    }
  htmlEnd();
  }

}

if ($_SESSION['tab'] == 2) {
$id = $mysqli->escape_string($_POST['id']);
$result = $mysqli->query("SELECT * FROM donorOwners WHERE numberID='$id'");
if ( $result->num_rows == 0 ){ // User doesn't exist
  $_SESSION['message'] = "Donor with that ID doesn't exist!";
  echo $_SESSION['message'];
  }
else {
  htmlStartP1();
  Echo "<th>id</th>";
  Echo "<th>First Name</th>";
  Echo "<th>Last Name</th>";
  Echo "<th>Telephone</th>";
  htmlStartP2();
   while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["numberID"]. "</td><td>". $row["firstName"]. "</td><td>" . $row["surname"] . "</td><td>". $row["telephone"]. "</td></tr>";
   }
  htmlEnd();
  }

}

 if ($_SESSION['tab'] == 8) {
  $id = $mysqli->escape_string($_POST['id']);
  $result = $mysqli->query("SELECT * FROM class");
  if ( $result->num_rows == 0 ){ // User doesn't exist
      $_SESSION['message'] = "User with that email doesn't exist!";
      header("location: error.php");
    }
  else {
    htmlStartP1();
    Echo "<th>Name</th>";
    Echo "<th>Class ID</th>";
    Echo "<th>Database Name</th>";
    Echo "<th>Reference Code</th>";
    Echo "<th>Contents</th>";
    htmlStartP2();
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["className"]. "</td><td>". $row["class"]. "</td><td>" . $row["databaseName"]. "</td><td>" . $row["referenceCode"]. "</td><td>" . $row["contents"]."</td></tr>";

        // echo "<tr> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "</tr>"; <td> </td>
    }
    htmlEnd();
  }
}

  if ($_SESSION['tab'] == 9) {
    $id = $mysqli->escape_string($_POST['id']);
    $result = $mysqli->query("SELECT * FROM loans");
    if ( $result->num_rows == 0 ){ // User doesn't exist
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
      }
    else {
      htmlStartP1();
      Echo "<th>Loan ID</th>";
      Echo "<th>Loan Type</th>";
      Echo "<th>Loan Status</th>";
      Echo "<th>Loan Comment</th>";
      Echo "<th>Loan Expiry</th>";
      htmlStartP2();
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>". $row["loanSerialNumber"]. "</td><td>". $row["loanType"]. "</td><td>" .
           $row["loanStatus"]. "</td><td>" . $row["loanComment"]. "</td><td>" . $row["loanExpiry"]."</td></tr>";

      }
      htmlEnd();
    }
}

if ($_SESSION['tab'] == 10) {
  $id = $mysqli->escape_string($_POST['id']);
  $result = $mysqli->query("SELECT * FROM donorOwners");
  if ( $result->num_rows == 0 ){ // User doesn't exist
      $_SESSION['message'] = "User with that email doesn't exist!";
      header("location: error.php");
    }
  else {
    htmlStartP1();
    Echo "<th>Donor ID</th>";
    Echo "<th>First Name</th>";
    Echo "<th>Last Name</th>";
    Echo "<th>Telephone</th>";
    htmlStartP2();
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["numberID"]. "</td><td>". $row["firstName"]. "</td><td>" .
         $row["surname"]. "</td><td>" . $row["telephone"]. "</td></tr>";

    }
    htmlEnd();
  }
}

if ($_SESSION['tab'] == 11) {
  $id = $mysqli->escape_string($_POST['id']);
  $result = $mysqli->query("SELECT * FROM receipts");
  if ( $result->num_rows == 0 ){ // User doesn't exist
      $_SESSION['message'] = "User with that email doesn't exist!";
      header("location: error.php");
    }
  else {
    htmlStartP1();
    Echo "<th>Receipt ID</th>";
    Echo "<th>Donor Number</th>";
    Echo "<th>Date Recieved</th>";
    Echo "<th>Number of Items</th>";
    Echo "<th>Description</th>";
    htmlStartP2();
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["receiptID"]. "</td><td>". $row["donorNumber"]. "</td><td>" .
         $row["dateRecieved"]. "</td><td>" . $row["numberOfItems"]. "</td><td>" . $row["shortDescription"]."</td></tr>";

    }
    htmlEnd();
  }
}

if ($_SESSION['tab'] == 12) {
  $id = $mysqli->escape_string($_POST['id']);
  $result = $mysqli->query("SELECT * FROM staff");
  if ( $result->num_rows == 0 ){ // User doesn't exist
      $_SESSION['message'] = "User with that email doesn't exist!";
      header("location: error.php");
    }
  else {
    htmlStartP1();
    Echo "<th>Salutation</th>";
    Echo "<th>First Name</th>";
    Echo "<th>Last Name</th>";
    Echo "<th>ID</th>";
    htmlStartP2();
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["salutation"]. "</td><td>". $row["firstName"]. "</td><td>" .
         $row["lastName"]. "</td><td>" . $row["id"]. "</td></tr>";

    }
    htmlEnd();
  }
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
