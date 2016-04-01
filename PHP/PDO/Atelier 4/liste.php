<html>
<head>

	<title>Atelier 4 PDO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.blue_grey-red.min.css" />
	<script defer src="https://code.getmdl.io/1.1.2/material.min.js"></script>

	<link rel="stylesheet" href="liste.css" />

</head>

<body>

	<!-- Connexion à la base de données -->
	<?php 
	$db = new PDO("mysql:host=localhost;charset=utf8;dbname=sites", "root", "");
	$requete = $db->query("select * from liens where affichage='oui'");
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
	?>

	
	<div>
		<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--3-col"></div>

  		<div class="mdl-cell mdl-cell--6-col">
  			<div class="div0">
  				<h2>Sommaire</h2>  					
  			</div>
  			<hr />
  			<!-- Création du tableau affichant les éléments de la DB -->
			<table class="mdl-data-table mdl-shadow--2dp  mdl-js-data-table">
				<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">
						Titre
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						URL
					</th>
					<th>
						
					</th>
				</tr>
				</thead>

				<tbody>
			<?php foreach ($tableau as $ligne): ?>
				<tr>
					<!-- Titre -->
					<td class="mdl-data-table__cell--non-numeric">
						<?= $ligne->titre ?>
					</td>
					<!-- Lien vers le site -->
					<td class="mdl-data-table__cell--non-numeric">
						<a href="<?=$ligne->url?>"><?= $ligne->url ?></a>
					</td>
					<!-- Bouton de détails -->
					<td class="alignbtn">

						<a href="details.php?id=<?=$ligne->id?>">
							<button class="mdl-button mdl-js-button mdl-button--raised btn">
							DETAILS	  							
							</button>
						</a>

					</td>

				</tr>
				
			<?php endforeach; ?>
				</tbody>
			</table>
			<hr />
				<div class="div1">
  					<span class="texte">Ajouter un enregistrement</span>
  					<a href="ajout.php">
  					<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab btn2">
  					<i class="material-icons">add</i>
  					</a>
					</button>
  				</div>
  			<hr />
  		</div>

  		<div class="mdl-cell mdl-cell--3-col"></div>
	</div>
	</div>


</body>
</html>