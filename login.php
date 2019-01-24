<?php
//include init.php
include 'init.php';
//Gather details submitted from the $_POST array and store in local vars
$pass=md5($_POST['password']);
$username=$_POST['username'];

//build query to SELECT records from the users table WHERE
//the username AND password in the table are equal to those entered.
 $query= "SELECT * FROM users WHERE Username = '$username' AND Password = '$pass' ";
echo $pass;
//run query and store result
$result =mysqli_query($connection, $query);

//check result and generate session variables
if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['user']=$username;
    $_SESSION['fav'] = array();
    $_SESSION['admin']=$row[Admin];
    unset($_SESSION['error']);
    unset($_SESSION['userfalse']);
   header ('location:ISDwk9.php');
   // check if useris registed if no results
} else {
    $query= "SELECT Username FROM users WHERE Username = '$username'";
    $result =mysqli_query($connection, $query);
    unset($_SESSION['error']);
    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['userfalse']=$username;
        $_SESSION['error']= 'Password not recognised';
        header ('location: ISDwk9.php');
        } else {
            $_SESSION['userfalse']=$username;
            $_SESSION['error']= 'Username is unregisterd';
            header ('location: ISDwk9.php'); 
    }
} 

?>
