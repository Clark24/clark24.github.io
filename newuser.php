<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/main.css" />
<?php include 'init.php';?>
 <?php require 'navigation.html'; ?>
<title>Harrogate Tourism | Sign up</title>
<form method="POST" action="insertRecord.php">
         <fieldset>
	      <legend>	Enter User Details	</legend>
		   <label for="fname">First Name: </label>
		   <input type="text" name="fname" value="<?php if (isset( $_SESSION['newuser']['fname'])){echo $_SESSION['newuser']['fname'];}?>"/><br />
		   <label for="lname">Last Name: </label>
		   <input type="text" name="lname"  value="<?php if (isset($_SESSION['newuser']['lname'])){echo $_SESSION['newuser']['lname'];}?>"/><br />
		   <label for="email">Email: </label>
		   <input type="text" name="email"  value="<?php if (isset($_SESSION['newuser']['email'])){echo $_SESSION['newuser']['email'];}?>"/><br />
		   <label for='age'>Age Range:</label>
		   <select name= "age">
		       		   <option value="18-25">18-25</option>
		       		   <option value="26-35">26-35</option>
		       		   <option value="36-45">36-45</option>
		       		   </select>
		   <label for="age">Password: </label>
		   <input type="text" name="pass" value="<?php if (isset($_SESSION['newuser']['pass'])){echo$_SESSION['newuser']['pass'];}?>"/><br />
		   <input type="checkbox" name="agree" value="agree"> I Agree to the terms and conditions<br>
		   <br>
		  	<input type="submit" value="Submit" name="submit"  />
      	</fieldset>
      </form>
      <?php
		   if (isset ($_SESSION['errorreg'])){
        echo  $_SESSION['errorreg'];
      }
      
      
      
      ?>