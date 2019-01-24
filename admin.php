<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/main.css" />
<title>Harrogate Tourism | Admin</title>
    
<?php
//Make connection to database & include navigation panel
include 'init.php';
include 'navigation.html';
// if the user is admin show page otherwise login
if ($_SESSION['admin']==1){
echo "<h1>Admin</h1>"; 
echo " Filter by:";
?>

<a href="admin.php?cat=Spa"> Spa</a>
<a href="admin.php?cat=Gardens"> / Gardens</a>
<a href="admin.php?cat=Club"> / Club</a>

<?php echo " Sort by:"; ?>
<a href="admin.php?sort=alpha"> Alphabetical</a>
<a href="admin.php?sort=alpharev"> / Reverse Alphabetical</a>

<?php
// order by alphabetical or reverse 
if ($_GET['sort']== 'alpharev'){
    $query= "SELECT * FROM `Points of Interest` ORDER BY Name DESC";
} else if ($_GET['sort']== 'alpha'){
    $query= "SELECT * FROM `Points of Interest` ORDER BY Name ASC";
} else {
	// select the query depending upon category if none select all
    if (empty($_GET['cat'])){
        $query= "SELECT * FROM `Points of Interest`";
	}else{
	    echo '<br> <a href="admin.php">Reset</a>';
	    $cat=$_GET['cat'];
	    $query= "SELECT * FROM `Points of Interest` WHERE Category = '$cat'";
	}
    
}

    
	//run the selected query
$result =mysqli_query($connection, $query);	

//Use a while loop to iterate through your $result array and display
//each field wrapped in appropriate HTML table tags.

echo "<br> <table id='myTable' border='2'><thead></thead>";
echo "<tbody>";
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr></td><td>$row[Name]</td>";
    echo "<td>$row[Description]</td>";
    echo '<td><img src="/Assignment2/images/'.$row['ImageName'] . '"  />';
    echo '<td><a href= "deleteloc.php?id='.$row[poiID].'">Delete location</a></td></tr>';
	
}
echo "</tbody> </table>";
// form for adding a point of interest
include 'newpoi.php';

if (isset ($_SESSION['error'])){
    echo  $_SESSION['error']."<br>";
    }
include 'updatelocation.php';
} else {
	header('location:ISDwk9.php');	
}
?>
