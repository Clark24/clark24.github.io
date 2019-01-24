<?php include 'init.php';?>
<form method="POST">
		      <legend>	Update Information for:</legend>
		      <select name= "id">
		      	<?php
		      	$query= "SELECT * FROM `Points of Interest`";
		      	$result =mysqli_query($connection, $query);
		      	
		      	while ($row = mysqli_fetch_assoc($result)){
		      		echo "<option value=".$row['poiID'].">".$row['Name']."</option>";
		      	}
		      	?>
		      	</select>
		      	<input type="submit" value="Submit" name="updateid"  />
</form>

		   <?php
		   
		   if(isset($_POST['updateid'])){
		   	
		   	$query = "SELECT * FROM `Points of Interest` WHERE poiID  = " . $_POST['id'].";";
		   	$result =mysqli_query($connection, $query);
		   	$row =mysqli_fetch_array($result);
		   	
		   	echo '
		   	<form method="POST" action="update.php">
		   	<input type ="hidden" name = "id" value = "'.$row['poiID'].'">
		   	<label for="name">Name: </label>
		   	<input type="text" name="name" value="'.$row['Name'].'"/><br />
		   	<label for="cat">Category: </label>
		   	<input type="text" name="cat"  value="'.$row['Category'].'"/><br />
		   	<label for="descr">Description: </label>
		   	<input type="text" name="descr"  value="'.$row['Description'].'"/><br />
		   	<label for="imgname">Image Name:</label>
		   	<input type="text" name="imgname"  value="'.$row['ImageName'].'"/><br />
		   	<input type="submit" value="Submit" name="update"  />
		   	</form>
		  ';
		   	
		   }

?>