<?php 
include 'init.php';
$name=mysqli_real_escape_string($connection,$_POST['name']);
$imgname=mysqli_real_escape_string($connection,$_POST['imgname']);
$descr=mysqli_real_escape_string($connection,$_POST['descr']);
$cat =mysqli_real_escape_string($connection, $_POST['cat']);
$id = $_POST['id'];

$query = "UPDATE `Points of Interest`  SET `Name` = '$name', `Category` = '$cat', `Description` = '$descr',`ImageName` = '$imgname' WHERE `poiID` = $id";
echo $query;
mysqli_query($connection, $query);
header('location:admin.php');

?>
