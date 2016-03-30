<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="exo.css" />

</head>

<body>
	
<?php
	$facture = array("Janvier"=>500, "Février"=>620, "Mars"=>300, "Avril"=>130,"Mai"=>560, "Juin"=>350);
	$facture_sixmois = 0;
	foreach ($facture as $mois => $valeur) 
	{
	 	echo "Facture du mois de $mois : $valeur Euros <br/>";
	 	$facture_sixmois += $valeur;
	}

	echo "Facture total de six mois : <b>$facture_sixmois Euros</b><br/><br/><br/><br/>";
?>


<?php
	$nom = array("Franck","Laurent","Caroline","Magali","Veronique");
	sort($nom);
	for ($nb1 = 0; $nb1 <= count($nom)-1; $nb1++) 
	{
 		echo "$nom[$nb1] <br/>";
	}
?>

<br/><br/><br/>

<?php
	$nom = array("Franck","Laurent","Caroline","Magali","Veronique");
	rsort($nom);
	for ($nb1 = 0; $nb1 <= count($nom)-1; $nb1++) 
	{
 		echo "$nom[$nb1] <br/>";
	}
?>

<br/><br/><br/>

<?php
	function bonjour($prenom, $nom) 
	{
		echo "Bonjour ".$prenom." ".$nom;
	}

	bonjour("Derek", "DUMONT");
?>

<br/><br/><br/>

<?php
$date = gmdate("d-m-Y");
$gmt = gmdate("H:i");
$futur = gmdate("d-m-Y", mktime(0,0,0,date("m"),date("d")+432,date("Y")));
// on affiche le résultat dessous ----
Print("<center>Aujourd'hui nous sommes le $date et l'heure GMT est
$gmt.<br />Dans 432 jours nous serons le $futur.");
?>


</body>
</html>