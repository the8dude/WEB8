	<?php 

	$id = $_GET["id"];
	$db = new PDO("mysql:host=localhost;charset=utf8;dbname=sites", "root", "");
	$requete = $db->prepare("DELETE FROM liens WHERE id=" . $id);
	$requete->execute();
	
	header('Location: liste.php');
	
	?>
