<?php 
session_start();
//Set up the database access credentials
$hostname = 'localhost'; 
$username = 'root'; 
$password = ''; 
$databaseName = 'c3449827'; 
//Open the database connection - exit with error message otherwise 
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");
?>
