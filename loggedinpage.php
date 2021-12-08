<?php

session_start();
$error = "";

if (array_key_exists("id",$_COOKIE) && $_COOKIE['id']){
    $_SESSION['id'] = $_COOKIE['id'];
}



include("header.php");

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Menü</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="loggedinpage.php">Új recept</a>
      <a class="nav-item nav-link" href="recipes.php">Receptek</a>
      <a href = 'index.php?logout=1'><button class="btn btn-outline-success" type="submit">Kijelentkezés</button></a>
    </div>
  </div>
</nav>
<div class = "container-fluid" id = "containerLoggedIn">
    
	<?php include ("textareanote.php");
	      include ("header.php");
		  include ("addRecipe.php");?>	
	
</div>

</div>



 <div class="bottomContainer">
    <a class="footer-link" href="mailto:harajdadoni@gmail.com">KAPCSOLAT</a> 
    <a class="footer-link" href="https://www.linkedin.com/">LinkedIn</a>
    <a class="footer-link" href="https://twitter.com/">Twitter</a>
    <p style="color:black;">© 2021 Donat Harajda.</p>
  </div>



<?php
include("footer.php");
?>