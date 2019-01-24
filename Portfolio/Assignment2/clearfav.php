<?php 
include "init.php";
//unset session fav
unset($_SESSION['fav']); 
header ('location: fav.php');
?>