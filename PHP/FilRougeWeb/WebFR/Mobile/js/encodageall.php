<?php 
	header('Content-Type: application/json; charset=utf8');
	$db = new PDO("mysql:host=127.0.0.1;dbname=filrouge;charset=utf8", "root", ""); //Base de donnée locale à l'ordinateur XAMPP
	// $db = new PDO("mysql:host=localhost;dbname=dude", "root", ""); //Base de donnée bienvu.net
	// $sql= "select * from article where AppelationArticle like '%$mot%'";
	// echo $sql;
	// $requete = $db->query($sql);
	$requete = $db->query("select * from article");

	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);

	// var_dump($tableau);
	echo json_encode($tableau);
?>