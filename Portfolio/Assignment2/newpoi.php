<form method="POST" action="addpoi.php">
         <fieldset>
	      <legend>	Add New Point of interest</legend>
		   <label for="name">Name: </label>
		   <input type="text" name="name" value="<?php if (isset( $_SESSION['newpoi']['name'])){echo $_SESSION['newpoi']['name'];}?>"/><br />
		   <label for="cat">Category: </label>
		   <input type="text" name="cat"  value="<?php if (isset($_SESSION['newpoi']['name'])){echo $_SESSION['newpoi']['cat'];}?>"/><br />
		   <label for="descr">Description: </label>
		   <input type="text" name="descr"  value="<?php if (isset($_SESSION['newpoi']['descr'])){echo $_SESSION['newpoi']['descr'];}?>"/><br />
		   <label for='imgname'>Image Name:</label>
		   <input type="text" name="imgname"  value="<?php if (isset($_SESSION['newpoi']['imgname'])){echo $_SESSION['newpoi']['imgname'];}?>"/><br />
		   <input type="submit" value="Submit" name="update"  />
      	</fieldset>
      </form>

</body>
</html>