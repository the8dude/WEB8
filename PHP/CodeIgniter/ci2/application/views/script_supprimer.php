	<?php 

	$id = $_GET["id"];
	$db = new PDO("mysql:host=localhost;charset=utf8;dbname=sites", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$requete = $db->prepare("DELETE FROM liens WHERE id=" . $id);
	$requete->execute();
	
	header('Location: liste.php');
	
	?>
