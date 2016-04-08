<html>
<head>

	<title>Atelier 4 PDO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.blue_grey-red.min.css" />
	<script defer src="https://code.getmdl.io/1.1.2/material.min.js"></script>

	<!-- <link rel="stylesheet" href="http://127.0.0.1/CodeIgniter/ci2/css/details.css" /> -->
	<link rel="stylesheet" href="<?=base_url("css/details.css")?>" />

</head>

<body>

	<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--3-col"></div>

  		<div class="mdl-cell mdl-cell--6-col">
  			<div class="div0">
  				<h2><?=$titre?></h2>  					
  			</div>
  			<hr />
  			
  			<table class="mdl-data-table mdl-shadow--2dp  mdl-js-data-table">
				
				<tbody>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte">Titre</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="label"><?=$ligne->titre?></div>
						</td>
					</tr>				

					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte">Description</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="label"><?=$ligne->description?></div>
						</td>
					</tr>

					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte">URL</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div><a class="label" href="<?=$ligne->url?>"><?= $ligne->url ?></a></div>
						</td>
					</tr>	

					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte">Webmaster</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="label"><?=$ligne->webmaster?></div>
						</td>
					</tr>	

					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte">Thème</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="label"><?=$ligne->theme?></div>
						</td>
					</tr>	

					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte">Date</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="label"><?=$ligne->date?></div>
						</td>
					</tr>

					<tr>
						<td>
							<a href="<?= site_url("liens/modifier/".$ligne->id) ?>">
								<button class="mdl-button mdl-js-button mdl-button--raised btn">
									MODIFIER  							
								</button>
							</a>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<a href="<?= site_url("liens/script_supprimer/".$ligne->id) ?>">
								<button class="mdl-button mdl-js-button mdl-button--raised btn">
									SUPPRIMER
								</button>
							</a>
						</td>
					</tr>		

				</tbody>

			</table>
        	
      
  			
			<hr />
      <div id="retour"><a href="<?=site_url("liens/liste")?>" id="retour">Retour à la liste</a></div>
			
			<hr />
  				
  		</div>

  		<div class="mdl-cell mdl-cell--3-col"></div>
	</div>

</body>
</html>
