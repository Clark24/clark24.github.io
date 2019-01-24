<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/main.css" />
<?php require 'navigation.html'; 
include 'init.php';?>
     <h3>Login</h3>
<form method="post" action="./login.php">
	<input type="text" name="username" value="<?php if (isset($_SESSION['userfalse'])){echo $_SESSION['userfalse'];}?>"/>
	<input type="password" name="password" />
	<input type="submit" name="submit" value="submit" />
</form>

<a href=newuser.php>Register</a>