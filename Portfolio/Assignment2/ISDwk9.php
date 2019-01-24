<title>Harrogate Tourism | Log in</title>
<html>
 <link type='text/css' rel='stylesheet' href='main.css' />
   <head></head>
<body>
   <?php
//include init.php so session vars can be used
include 'init.php';

// if user is set go to home otherwise display login form with the error message
if (isset($_SESSION['user'])){
    include 'home.php';
     } else {
     include 'loginform.php';
      if (isset ($_SESSION['error'])){
       
        echo "<br>".$_SESSION['error'];
      }
     }
	?>
	
</body>
 </html>