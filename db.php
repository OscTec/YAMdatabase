<?php
/* Database connection settings */
$host = "cs2s";
$user = "redacted";
$pass = "redacted";
$db = "oscarreid_YAMdatabase";
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
