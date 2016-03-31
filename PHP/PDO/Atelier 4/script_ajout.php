<html>
<head>
	<title>Atelier 4 PDO</title>
	<meta charset="utf-8">
</head>
<body>

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

	$db = new PDO("mysql:host=localhost;dbname=sites", "root", "");
	$db->query("INSERT INTO liens(id, titre, webmaster, url, description, theme, date, affichage) VALUES('', '$titre', '$webmaster', '$url', '$description', '$theme', '', '$visible')");
	
	header('Location: http://127.0.0.1/PDO/Atelier%204/liste.php');
	
	?>

</body>
</html>