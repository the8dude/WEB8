<html>
<head>

	<title>Atelier 4 PDO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.blue_grey-red.min.css" />
	<script defer src="https://code.getmdl.io/1.1.2/material.min.js"></script>

	<link rel="stylesheet" href="ajout.css" />

</head>

<body>

	<!-- Connexion à la base de données -->
	<?php 
	$db = new PDO("mysql:host=localhost;dbname=sites", "root", "");
	?>

	

	<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--3-col"></div>

  		<div class="mdl-cell mdl-cell--6-col">
  			<div class="div0">
  				<h2>Formulaire</h2>  					
  			</div>
  			<hr />
  			<div class="label">Titre</div>
  			<div><input class="textBox" type="text" name="titre" id="titre" placeholder="Entrez le titre"/></div>
  			<br>

  			<div class="label">Description</div>
  			<div><textarea class="textArea" name="description"  id="description" placeholder="Description du site"></textarea></div>
  			<br>

  			<div class="label">URL</div>
  			<div><input class="textBox" type="text" name="url" id="url" placeholder="Entrez l'adresse URL du site"/></div>
  			<br>

  			<div class="label">Thème</div>
  			<div>
  				<select name="choix" class="select" id="choix">
			  		<option value="actualite">Actualité</option>
			  		<option value="musique">Musique</option>
					<option value="sport">Sport</option>
					<option valu="sciences">Sciences</option>
					<option value="cinema">Cinéma</option>
					<option value="divers">Divers</option>
				</select>
			</div>
			<br>

  			<div class="label">Webmaster</div>
  			<div><input class="textBox" type="text" name="webmaster" id="webmaster" placeholder="Entrez une adresse mail"/></div>
  			<br>

  			<div>
  				<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
  				<input type="checkbox" id="checkbox-2" class="mdl-checkbox__input checkBox">
  				<span class="mdl-checkbox__label">Visible</span>
				</label>
			</div>
			<br>
  			<div>
  				<button class="mdl-button mdl-js-button mdl-button--raised btn">
				VALIDER	  							
				</button>
  			</div>
  			
			<hr />
			<a href="liste.php" class="label">Retour à la liste</a>
			
  				
  		</div>

  		<div class="mdl-cell mdl-cell--3-col"></div>
	</div>

</body>
</html>