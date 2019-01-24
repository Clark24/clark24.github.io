<?php
include 'init.php';
 $id=$_GET['id'];
$query = "DELETE FROM  `Points of Interest` WHERE  `poiID` = $id" ;
echo $query;
mysqli_query($connection, $query);
header ('location: home.php');
?>