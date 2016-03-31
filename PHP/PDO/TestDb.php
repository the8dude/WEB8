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

 	<?php echo $li->titre ?><br />
 	<?php echo $li->webmaster ?><br />
 	<?php echo $li->description ?><br />
 	<?php echo $li->url ?><br />
 	<?php echo $li->theme ?><br /><br />

 	<?php
 	}
 	?>

 </body>
 </html>