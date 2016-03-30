 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
 	
	<title> testDb.php </title>

 </head>

 <body>

 	<?php

	$db = new PDO("mysql:host=127.0.0.1;dbname=sites", "root", "");
	 
	
	$result = $db-> query("select * from liens");

	$liens = $result->fetchAll(PDO::FETCH_OBJ);

	$result->closeCursor();

	?>

 	<?php
 	foreach ($liens as $li) {
 	?>

 	 echo $li->titre . "\t";
 	 echo $li->webmaster <br />
 	 echo $li->description<br />
 	 echo $li->url<br />
 	 echo $li->theme<br /><br />

 	
 	}
 	?>

 </body>
 </html>