<?php include ("header.php");
	  include("connection.php");?>

<h1>Találatok:</h1>

<div>
<?php

if (isset($_POST['submit-search'])){
	$search = mysqli_real_escape_string($link, $_POST['receptKeres']);
	$sql_statement = "SELECT * FROM receptek WHERE recept_nev LIKE '%$search%'";
	$result = mysqli_query($link, $sql_statement);
	$queryResult = mysqli_num_rows($result);
	
	if ($queryResult > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<div class='searchContainer'> 
				  <h3>".$row['recept_nev']."</h3>
				  <p><strong>Hozzávalók:</strong> ".$row['recept_hozzavalok']."</p>
				  <p><strong>Leírás:</strong> ".$row['recept_leiras']."</p>
				  </div>";
				  
		
		}
		
	}else{
		echo "<div class='alert alert-danger' style='width: 300px;' role='alert'>
				Nincs találat a keresésre!
				</div>";
	}
	
}


?>
</div>
<a href = 'recipes.php'><button class="btn btn-outline-success" type="submit">Vissza</button></a>



<?php include ("footer.php"); ?>