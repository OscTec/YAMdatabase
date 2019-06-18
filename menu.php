<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2>York Aircraft Museum Database</h2>
  <p>Welcome to the database activity menu. What would you like to do?</p>
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#search">Search</a></li>
    <li><a data-toggle="pill" href="#reports">Reports</a></li>
    <li><a data-toggle="pill" href="#receipts">Receipts</a></li>
    <li><a data-toggle="pill" href="#objectEntry">Object Entry</a></li>
    <li><a data-toggle="pill" href="#admin">Admin</a></li>
    <li><a data-toggle="pill" href="#logout">Log out</a></li>
  </ul>

  <div class="tab-content">
<!-- sftp://oscar.reid@cs2s.yorkdc.net:2222/home/oscar.reid/htdocs/YAMdatabase/menu.php
sftp://oscar.reid@cs2s.yorkdc.net:2222/home/oscar.reid/htdocs/YAMdatabase/search/description.php -->

    <div id="search" class="tab-pane fade in active">
      <h3>Search Menu Options</h3>
      <ul class="nav nav-pills nav-justified">
        <!-- <li><a href="search/description.php">Descriptions</a></li> -->
        <li><a href="search/donorsOwners.php">Donors</a></li>
        <li><a href="search/shortTitles.php">Short Titles</a></li>
        <li><a href="search/comments.php">Comments</a></li>
        <li><a href="search/newIDNo.php">ID No.</a></li>
        <li><a href="search/location.php">Location</a></li>
        <li><a href="search/classSequenceNumber.php">Class Sequence</a></li>
      </ul>
    </div>


    <div id="reports" class="tab-pane fade">
      <h3>Reports Menu Options</h3>
      <ul class="nav nav-pills nav-justified">
        <li><a href="reports/classes.php">Classes</a></li>
        <li><a href="reports/receipt.php">Receipt</a></li>
        <li><a href="reports/donor.php">Donor</a></li>
        <li><a href="reports/loans.php">Loans</a></li>
        <li><a href="reports/staff.php">Staff</a></li>
      </ul>
    </div>


    <div id="receipts" class="tab-pane fade">
      <h3>Receipts Menu Options</h3>
      <ul class="nav nav-pills nav-justified">
        <!-- <li><a href="receipts/manualReceipt.php">Manual Receipt</a></li> -->
        <!-- <li><a href="receipts/automaticReceipt.php">Automatic Receipt</a></li> -->
        <li><a href="receipts/addReceipt.php">Add Receipt</a></li>
        <li><a href="receipts/receiptSearch.php">Search</a></li>
      </ul>
    </div>


    <div id="objectEntry" class="tab-pane fade">
      <h3>Object Entry Menu Options</h3>
      <ul class="nav nav-pills nav-justified">
        <li><a href="objectEntry/objectEntry.php">Add Item</a></li>
      </ul>
    </div>


    <div id="admin" class="tab-pane fade">
      <h3>Admins Menu Options</h3>
      <ul class="nav nav-pills nav-justified">
        <li><a href="admin/userList.php">List Users</a></li>
        <li><a href="admin/amendStaff.php">Amend Staff</a></li>
        <li><a href="admin/addNewAccount.php">Add New User</a></li>
        <!-- <li><a href="admin/whosDoneWhat.php">Whos Done What</a></li> -->
        <!-- <li><a href="admin/lists.php">List</a></li> -->
      </ul>
    </div>


    <div id="logout" class="tab-pane fade">
      <h3>Are you sure you want to logout?</h3>
      <ul class="nav nav-pills nav-justified">
        <li><a href="logout.php">Confirm</a></li>
      </ul>
    </div>


  </div>
</div>

<p>


</body>
</html>
