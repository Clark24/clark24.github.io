<?php
include 'init.php';
unset($_SESSION['error']);
  $_SESSION['newpoi'] = array('name' => $_POST['name'], 'imgname' => $_POST['imgname'], 'descr' => $_POST['descr'], 'cat' => $_POST['cat']);
if (empty($_POST['name'])){
        $_SESSION['error']= "Please enter a name";
        header ('location: admin.php');  
      
        
    } else if (empty($_POST['imgname'])){
        $_SESSION['error']= "Please enter a ImageName";
        header ('location: admin.php');   
        
        
    } else if (empty($_POST['descr'])){
        $_SESSION['error']= "Please enter a description";
        header ('location: admin.php');   
        
        
    } else if (empty($_POST['cat'])){
        $_SESSION['error']= "Please enter a Category";
        header ('location: admin.php');   
    }
    
    if (empty($_SESSION['error'])){
        //asssign form values to local variables
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $imgname=mysqli_real_escape_string($connection,$_POST['imgname']);
        $descr=mysqli_real_escape_string($connection,$_POST['descr']);
        $cat =mysqli_real_escape_string($connection,$_POST['cat']);
        
        $query = "INSERT INTO `c3449827`.`Points of Interest` (`Name` ,`Category` ,`Description` ,`ImageName`) VALUES ('$name', '$cat', '$descr', '$imgname');";
        mysqli_query($connection, $query);
        header ('location: home.php');
     }


?>