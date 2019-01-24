<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/main.css" />
<title>Harrogate Tourism | Favourites</title>
<?php include 'init.php';?>
<?php 
if (isset($_SESSION['user'])){ 
	require 'navigation.html';
	
	if (empty($_SESSION['fav'])){
		echo "No favourites added";
			}else{
				if (count($_SESSION['fav']>0)){
					// grab into fav array from session
					$fav = array_values($_SESSION['fav']);
					
					//ensure only one of each id
					$fav = array_unique($fav, $sort_flags= SORT_NUMERIC);
					
					//makes into a string
					$fave = implode(",", $fav);
					$query= "SELECT * FROM `Points of Interest` WHERE `poiID` IN ($fave)";
					$result =mysqli_query($connection, $query);
					
					echo "<br> <table border='2'><thead><tr><th>Name</th><th>Description</th><th>Image</th><th>delete</th></tr></thead>";
					echo "<tbody>";
					// if favourites is empty display message otherwise show faves
					if ($fave ==0){
						echo "<tr><td>No favourites added</td></tr>";
						
					}else{
						while ($row = mysqli_fetch_assoc($result)){
							echo "<tr><td>$row[Name]</td>";
							echo "<td>$row[Description]</td>";
							echo '<td><img src="/Assignment2/images/'.$row['ImageName'] . '"  />';
							echo "<td><a href=clear1fav.php?id=".$row['poiID'].">Clear Favourite</a></td></tr>";
							
						}
						
					}
			echo "</tbody></table>";
			echo '<a href="clearfav.php">Clear All Favourites</a>';
					
				}
	 }
	
} else {
	header('location:ISDwk9.php');
	
}
?>
