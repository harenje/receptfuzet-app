<?php 
include("connection.php");

$itemToDelete = $_POST['id'];
$sql_statement = "DELETE FROM receptek WHERE receptek.recept_id = '$itemToDelete'";


if ($link){
	$result = mysqli_query($link,$sql_statement);
	if ($result){
		echo "Törölt recept" . $itemToDelete . "<br>";
		
	}else {
		echo "Error with SQl" . mysqli_error($link);
	}
	
}else{
	echo "Error connecting". mysqli_connect_error();
}

?>
<a href = 'recipes.php'><button class="btn btn-outline-success" type="submit">Vissza</button></a>