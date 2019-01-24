<?php
// connect to database
include "init.php";
// grab the id for the row of the fav
$id = $_GET['id'];
// reassign the session to 0 for the selected id
$key = array_search($id, $_SESSION['fav']);
$_SESSION['fav'][$key] = 0;
header('location:fav.php');


?>