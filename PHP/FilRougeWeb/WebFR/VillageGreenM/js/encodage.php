<?php 
	header('Content-Type: application/json; charset=utf8');
	
	$mot = $_GET["query"];

	$db = new PDO("mysql:host=localhost;dbname=dude;charset=utf8", "dude", "280886Dd"); //Base de donnée locale à l'ordinateur XAMPP
	// $db = new PDO("mysql:host=localhost;dbname=dude", "root", ""); //Base de donnée bienvu.net
	// $sql= "select * from article where AppelationArticle like '%$mot%'";
	// echo $sql;
	// $requete = $db->query($sql);
	$requete = $db->query("select * from article where AppelationArticle like '%$mot%' ");

	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);

	// var_dump($tableau);
	echo json_encode($tableau);
?>