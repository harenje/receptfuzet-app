
<?php

session_start();


if (array_key_exists("id",$_COOKIE) && $_COOKIE['id']){
    $_SESSION['id'] = $_COOKIE['id'];
}

if (array_key_exists("id",$_SESSION)){
    include("connection.php");
    $id=mysqli_real_escape_string($link,$_SESSION['id']);	
    
	$sql_statement = "SELECT * FROM receptek";
	$result = mysqli_query($link,$sql_statement);
	
	
	
}
else{

    header("Location: loggedinpage.php");

}



?>

<?php include("header.php");?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Menü</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <form id ="searchForm" action="searchForRecipe.php" method="post"></form>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="loggedinpage.php">Új recept</a>
      <a class="nav-item nav-link" href="recipes.php">Receptek</a>
      <a href = 'index.php?logout=1'><button class="btn btn-outline-success" type="submit">Kijelentkezés</button></a>
	  <input class="form-control mr-sm-2" type="text" name="receptKeres" form="searchForm" placeholder="Kedvenc receptem keresése.." aria-label="Search" style="margin-left:10px; width:280px;">
	  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit-search" form="searchForm" style="margin-left:10px;">Keresés</button>
  
	   
    </div>
  </div>
</nav>
<h1 style="text-align:center; font-family: Georgia, sans-serif; font-size: 5em; letter-spacing: -2px;">Receptjeim</h1>


<?php
	while($rows = mysqli_fetch_assoc($result)){
		
?>

<table class="table table-hover table-dark"  style="width:1000px; margin:0 auto;"> 
<form action="deleteItem.php" method="post" id="deleteForm"></form>
  <tr class="header">
	<td >
		<input type="hidden" name="id" form="deleteForm" value="<?php echo $rows['recept_id'];?>"></input><?php echo ($rows['recept_nev']);?><button type="submit" form="deleteForm">Törlés</button>
	</td>
  </tr>
  <tr>
    <td><strong>Hozzávalók:</strong> <?php echo $rows['recept_hozzavalok'];?></td>
  </tr>
  <tr>
    <td><strong>Leírás: </strong><?php echo $rows['recept_leiras'];?></td>
  </tr>
	<?php }?>
</table>








<?php
include("footer.php");
?>