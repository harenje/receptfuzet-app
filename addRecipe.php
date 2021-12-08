
<div id="wrapper">
	
	<form name ="recipeForm" id="paper" method="POST" action="updateDatabase.php">

		<div id="margin">Recept neve: <input id="title" type="text" name="receptNev" required
		oninvalid="this.setCustomValidity('Recept neve nem maradhat üresen!')" 
		onchange="this.setCustomValidity('')"></div>
		<textarea placeholder="Hozzávalók..."id="text" name="receptHozzavalok" rows="1" style="overflow:hidden;overflow-y: scroll; word-wrap: break-word; resize:vertical; height: 30px; "required
		oninvalid="this.setCustomValidity('Recept hozzávalóit meg kell adni!')" 
		onchange="this.setCustomValidity('')"></textarea>
		<textarea placeholder="Recept leírása..." id="text" name="receptLeiras" rows="4" style="overflow:hidden; word-wrap: break-word; resize:vertical; height: 260px; "required
		oninvalid="this.setCustomValidity('Recept leírása nem maradhat üresen!')" 
		onchange="this.setCustomValidity('')"></textarea>  
		<button class="btn btn-outline-success" type="submit" id="gomb">Mentés</button>
		
	</form>

</div>


