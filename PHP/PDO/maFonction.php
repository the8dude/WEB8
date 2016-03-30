<?php
/*
Fichier maFonction.php
Bibliothèque de fonctions utiles
Auteur : Denis Le Roy / AFPA
*/
/* Fonction de formatage HTML de message */
 function writeMessage ($text)
 {
 $html = "<h1 align='center'>".$text."</h1>";
 print($html); // Affichage
 }

 ?>
