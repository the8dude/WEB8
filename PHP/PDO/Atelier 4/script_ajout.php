<?php
		
		$titre = $_POST['titre'];
		$description = $_POST['description'];
		$url = $_POST['url'];
		$theme = $_POST['theme'];
		$webmaster = $_POST['webmaster'];
		$visible = (!empty($_POST['visible']))?1:0;

	?>

	<!-- Connexion à la base de données -->
	<?php 

	$db = new PDO("mysql:host=localhost;charset=utf8;dbname=sites", "root", "");
	$db->query("INSERT INTO liens(id, titre, webmaster, url, description, theme, date, affichage) VALUES('', '$titre', '$webmaster', '$url', '$description', '$theme', '', '$visible')");
	
	header('Location: liste.php');
	
	?>