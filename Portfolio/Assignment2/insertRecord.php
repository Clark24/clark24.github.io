<?php
//Make connection to database
include 'init.php';
unset($_SESSION['errorreg']);
 $_SESSION['newuser'] = array('email' => $_POST['email'],'fname' => $_POST['fname'], 'lname' => $_POST['lname'], 'age' => $_POST['age'], 'pass' => $_POST['pass']);

// if form values arent empty
if (!empty($_POST['email'])&& !empty($_POST['fname'])&&!empty($_POST['lname'])&&!empty($_POST['pass'])){
    //if email is valid format
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        //Gather from $_POST[] all the data submitted and store in variables
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $fname=mysqli_real_escape_string($connection,$_POST['fname']);
        $lname=mysqli_real_escape_string($connection,$_POST['lname']);
        $age =mysqli_real_escape_string($connection,$_POST['age']);
        $pass=mysqli_real_escape_string($connection,$_POST['pass']);
        // pattern for enuring password in correct format
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*?\pN)(?=.*[^\pL\pN])/';
        
        //check if email already exists
        $checkemail = "SELECT * FROM users WHERE `Username` = '$email'";
        echo $checkemail;
        $result = mysqli_query($connection, $checkemail);
        
        while ($row = mysqli_fetch_assoc($result)){
            $count++;
            }
        
        if ($count>0){
            $_SESSION['errorreg'] ='This email is already in use';
            header ('location: newuser.php');
            
        }
        } else {
            $_SESSION['errorreg']= "Please enter a valid email";
            header ('location: newuser.php');    
            }
            
            if (empty($_SESSION['errorreg'])){
                // if password matches pattern run query
                if ( preg_match($pattern, $pass)){
                    $pass = md5($pass);
                    $query= "INSERT INTO users( `Username` , `Password` , `First Name` , `Last Name` , `Age` ) VALUES ('$email', '$pass', '$fname', '$lname','$age')";
                    mysqli_query($connection, $query);
                unset($_SESSION['errorreg']);
                header ('location: home.php');
                // otherwise set error message
                } else {
                    $_SESSION['errorreg']= "Please enter a valid password with at least one upper case letter, one lower case letter, one number, and one symbol.";
                    header ('location: newuser.php');
                    } // if emails not valid
                    
    } 
        
    } else {//
         if (empty($_POST['email'])&& empty($_POST['fname'])&&empty($_POST['lname'])&&empty($_POST['pass'])){
                    $_SESSION['errorreg']= "Please enter all fields";
                    header ('location: newuser.php');
                    
         } else if (empty($_POST['email'])){
             $_SESSION['errorreg']= "Please enter a email";
             header ('location: newuser.php');
             
         } else if (empty($_POST['fname'])){
             $_SESSION['errorreg']= "Please enter a first name";
             header ('location: newuser.php');
             
         } else if (empty($_POST['lname'])){
             $_SESSION['errorreg']= "Please enter a Last name";
             header ('location: newuser.php');  
             
         } else if (empty($_POST['pass'])){
             $_SESSION['errorreg']= "Please enter a Password";
             header ('location: newuser.php');  
             }
    }
              ?>
