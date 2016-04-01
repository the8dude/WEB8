<?php
		
		$id = $_POST["id"];
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
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$requete = $db->prepare("UPDATE liens SET titre=:titre ,description=:description ,url=:url ,theme=:theme ,webmaster=:webmaster ,affichage=:visible WHERE id=" . $id);

	$requete->bindParam(":titre", $titre);
	$requete->bindParam(":description", $description);
	$requete->bindParam(":url", $url);
	$requete->bindParam(":theme", $theme);
	$requete->bindParam(":webmaster", $webmaster);
	$requete->bindParam(":visible", $visible);
	
	$requete->execute();

	header('Location: liste.php');
	
	?>