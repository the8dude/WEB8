<html>
<head>

	<title>Atelier 4 PDO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.blue_grey-red.min.css" />
	<script defer src="https://code.getmdl.io/1.1.2/material.min.js"></script>

	<link rel="stylesheet" href="ajout.css" />

</head>

<body>

	<!-- Connexion à la base de données -->
	<?php 
  $id = $_GET["id"];
  $db = new PDO("mysql:host=localhost;charset=utf8;dbname=sites", "root", "");
  $requete = $db->prepare("select * from liens where id=" . $id);
  $requete->execute();
  $ligne = $requete->fetch(PDO::FETCH_OBJ);
	?>

	

	<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--3-col"></div>

  		<div class="mdl-cell mdl-cell--6-col">
  			<div class="div0">
  				<h2>Formulaire</h2>  					
  			</div>
  			<hr />
  			
      <div class="divform">

        <form method="post" action="script_modifier.php" id="form2">

        <!-- cacher l'ID appelé -->
        <input type="hidden" name="id" value="<?=$id?>">
        
        <div class="label">Titre</div>
        <div><input class="textBox" type="text" name="titre" id="titre" value="<?=$ligne->titre?>" /></div>
        <br>

        <div class="label">Description</div>
        <div><textarea class="textArea" name="description"  id="description" value="<?=$ligne->description?>"></textarea></div>
        <br>

        <div class="label">URL</div>
        <div><input class="textBox" type="text" name="url" id="url" value="<?= $ligne->url ?>" /></div>
        <br>

        <div class="label">Thème</div>
        <div>
          <select name="theme" class="select" id="choix">
            <option value="actualite">Actualité</option>
            <option value="musique">Musique</option>
            <option value="sport">Sport</option>
            <option valu="sciences">Sciences</option>
            <option value="cinema">Cinéma</option>
            <option value="divers">Divers</option>
          </select>
        </div>
        <br>

        <div class="label">Webmaster</div>
        <div><input class="textBox" type="text" name="webmaster" id="webmaster" value="<?=$ligne->webmaster?>"/></div>
        <br>

        <div>
          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
          <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="visible" checked>
          <span class="mdl-checkbox__label label">Visible</span>
          </label>        
        </div>
        <br>

        <div>
          <button type="submit" class="mdl-button mdl-js-button mdl-button--raised btn">VALIDER</button>
        </div>
        
        </form>

      </div>
  			
			<hr />
      <div id="retour"><a href="liste.php" id="retour">Retour à la liste</a></div>
			
			<hr />
  				
  		</div>

  		<div class="mdl-cell mdl-cell--3-col"></div>
	</div>

</body>
</html>