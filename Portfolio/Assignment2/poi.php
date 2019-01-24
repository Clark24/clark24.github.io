<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/main.css" />
<title>Harrogate Tourism | Points of Interest</title>

<?php
//Make connection to database
include 'init.php';
include 'navigation.html';
//Display heading
echo "<h1>Points of Interest</h1>"; ?>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<?php
echo " Filter by:";
?>
<a href="poi.php?cat=Spa"> Spa</a>
<a href="poi.php?cat=Gardens"> / Gardens</a>
<a href="poi.php?cat=Club"> / Club</a>
<?php
echo " Sort by:";
?>
<a href="poi.php?sort=alpha"> Alphabetical</a>
<a href="poi.php?sort=alpharev"> / Reverse Alphabetical</a>
<?php
if ($_GET['sort']== 'alpharev'){
    $query= "SELECT * FROM `Points of Interest` ORDER BY Name DESC";
} else if ($_GET['sort']== 'alpha'){
    $query= "SELECT * FROM `Points of Interest` ORDER BY Name ASC";
} else {
    if (empty($_GET['cat'])){
        $query= "SELECT * FROM `Points of Interest`";
	}else{
	    echo '<br> <a href="poi.php">Reset</a>';
	    $cat=$_GET['cat'];
	    $query= "SELECT * FROM `Points of Interest` WHERE Category = '$cat'";
	}
    
}

    
	
$result =mysqli_query($connection, $query);	

//Use a while loop to iterate through your $result array and display
//each field wrapped in appropriate HTML table tags.

echo "<br> <table id='myTable' border='2'><thead></thead>";
echo "<tbody>";
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr></td><td>$row[Name]</td>";
    echo "<td>$row[Description]</td>";
    echo '<td><img src="/Assignment2/images/'.$row['ImageName'] . '"  />';
    
    if (isset($_SESSION['user'])){ 
       echo '<td><a href= "poi.php?id='.$row[poiID].'">Add to Favourites</a></td></tr>';
        
            } else {
                echo '<td> Login to gain favourite capability </td>';
                }
  
}

if (isset($_GET['id'])){
    $_SESSION['fav'][]= $_GET['id'];
    echo '<br> added poiID '.$_GET['id'].' to favourites';
    } 
echo "</tbody> </table>";


?>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
