<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="exo.css" />

</head>

<body>
	
<table class='bordure'>
		<tr>
			<th class='bordure firstcolrow'>
				<!--zone vide-->
			</th>

<!-- Création de la première ligne -->

<?php for ($i=0; $i<13; $i++) {	?>

<th class='bordure firstcolrow'> 

<?= $i ?> </th> <?php } ?> </tr>

<!--Création du corps de la table

Boucle de création du contenu de la table  -->

<?php for ($i=0; $i<13; $i++) { ?>		

<!-- Création de la première colonne -->

	<tr>
		<th class='bordure firstcolrow'> <?= $i ?> </th>

<!-- //Remplissage de la table -->
<?php for ($j=0; $j<13; $j++) { ?>

<td class='bordure text'> <?= $i*$j ?> </td>

<?php } ?> </tr> <?php } ?>

	</table>
</body>
</html>