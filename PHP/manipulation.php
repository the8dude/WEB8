<html>
<head>
	<title>Manipulations sur les fichiers</title>
	<meta charset="utf-8">
</head>

<style>
	.compteur
	{
		color: red;
		width: 240px;
		font-weight: bold;
		font: 28px;
		background-color: black;
		text-align: center;
	}
</style>

<body>

	<?php 

	if (file_exists("essai.txt")) /* Vérification si fichier existant */
	{
		$fp = fopen("essai.txt","r"); /* Ouverture en lecture seule */
	}
 	else 
	{
 		echo "Fichier introuvable !";
 		exit();
	}
	/* Boucle jusqu'a la fin du fichier */
	while (!feof($fp))
	{
 	$enr = fgets ($fp,4096); /* Lecture de la ligne */
 	echo "<a href='$enr'>$enr<a><br />"; 
	}

	?>

	<br><br><br><br><br>

	<?php
// On ouvre le fichier moncompteur.txt
$fichier = fopen("moncompteur.txt","r+");
// on lit le nombre indiqué dans ce fichier dans la variable
$visiteurs = fgets($fichier,255);
// on ajoute 1 au nombre de visiteurs
$visiteurs++;
// on se positionne au début du fichier
fseek($fichier,0);
// on écrit le nouveau nombre dans le fichier
fputs($fichier,$visiteurs);
// on referme le fichier moncompteur.txt
fclose($fichier);
// on indique sur la page le nombre de visiteurs
print("<div class='compteur'>$visiteurs personnes sont passées par ici</div>");
	?>



	<?php

	$fp = fopen("essai.txt","a"); /* Ouverture en écriture seul */
	fputs($fp,"<br>Bonjour tout le monde !!!!"); /* Ecriture de la variable */
	fclose($fp); /* Fermeture du fichier */ 

	?>


</body>
</html>