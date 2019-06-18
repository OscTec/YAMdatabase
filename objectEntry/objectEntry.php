<?php
/* Main page with two forms: sign up and log in */
require '../db.php';
session_start();
 if ($_SESSION['accessRight'] >= 2){
$_SESSION['admin'] = 1;
} else {
  $_SESSION['message'] = "You don't have the right to be here!";
  header("location: ../error.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php
echo "Today is " . date("d-m-Y") . "<br>";
 ?>

  <div class="container">

    <h2>YAM Database Add New Item</h2>
    <form class="form-horizontal" action="objectEntry.php" method="post" autocomplete="off">
      <div class="form-group">
      <label class="control-label col-sm-2" for="id">ID:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" placeholder="Enter a ID Number" name="id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="class">Class:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="class" placeholder="Enter the class" name="class">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="classSequenceNumber">Class Sequence No.:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="classSequenceNumber" placeholder="Enter the classSequenceNumber" name="classSequenceNumber">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="shortTitle">Short Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="shortTitle" placeholder="Enter a Short Title" name="shortTitle">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="comment">Comment:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="comment" placeholder="Enter a comment" name="comment">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="originalOwner">Original Owner:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="originalOwner" placeholder="Enter the Original Owner" name="originalOwner">
      </div>
    </div>
    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="dateOfCreation">Date Of Creation:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dateOfCreation" placeholder="Enter the Date Of Creation" name="dateOfCreation">
      </div>
    </div> -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="receiptNumber">Receipt No.:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="receiptNumber" placeholder="Enter the Receipt Number" name="receiptNumber">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="itemsCondition">Items Condition:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="itemsCondition" placeholder="Enter the Items Condition" name="itemsCondition">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="donor">Donor:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="donor" placeholder="Enter the Donor" name="donor">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="owner">Owner:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="owner" placeholder="Enter the Owner" name="owner">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="itemStatus">Item Status:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="itemStatus" placeholder="Enter a Item's Status" name="itemStatus">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dateReceived">Date Received:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dateReceived" placeholder="Enter Date Received" name="dateReceived">
      </div>
    </div>
    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="inputBy">Input By:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputBy" placeholder="Enter Input By" name="inputBy">
      </div>
    </div> -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="period">Period:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="period" placeholder="Enter the Period" name="period">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="loanNumber">Loan Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="loanNumber" placeholder="Enter Loan Number" name="loanNumber">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="building">Building:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="building" placeholder="Enter Building" name="building">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="room">Room:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="room" placeholder="Enter Room" name="room">
      </div>
    </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button class="btn btn-default" name="add" />Add</button>
          <a href="../menu.php" class="btn btn-info" role="button">Back</a>

        </div>
      </div>
    </form>
  </div>


  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      if (isset($_POST['add'])) { //user logging in

          require 'addItem.php';

      }

  }
  ?>


</body>
</html>
