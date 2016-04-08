<html>
<head>

	<title>Atelier 4 PDO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.blue_grey-red.min.css" />
	<script defer src="https://code.getmdl.io/1.1.2/material.min.js"></script>

	<link rel="stylesheet" href="<?=base_url("css/liste.css")?>" />
	
	<script src="<?=base_url("jscript/jquery.js")?>"></script>

</head>

<body>

	<div id="div1">
		<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--3-col"></div>

  		<div class="mdl-cell mdl-cell--6-col">
  			<div class="div0">
  				<h2><?=$titre?></h2>  					
  			</div>
  			<hr />
  			<!-- Création du tableau affichant les éléments de la DB -->
			<table class="mdl-data-table mdl-shadow--2dp  mdl-js-data-table table">
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
			<?php foreach ($liste->result() as $ligne): ?>
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

							
							<button class="mdl-button mdl-js-button mdl-button--raised btn btn_details" data-id="<?= $ligne->id ?>">
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
  					<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab btn2 btn_ajout">
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

<script>
$(document).ready(function() {


	$(".btn_details").click(function() {
		var id = $(this).data("id");
		$("#div1").load("<?=site_url("liens/details")?>/" + id);
			
	});

	$(".btn_ajout").click(function() {
		$("#div1").load("<?=site_url("liens/ajout")?>");
			
	});

	

});
</script>
