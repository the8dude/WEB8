<html>
<head>
	<title>Réception du formulaire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="scriptform.css" />

</head>
<body class="body">
	

	<div class="forme">
		<div class="forme2 texte">
			RESULTATS DU FORMULAIRE<br>
		</div>

		<div class="forme3">
			<span>
			Société → <span><?php echo $_POST['societe'] ?></span> <br>
			</span>
			<br /><br />
			<span>
				Contact → <span><?php echo $_POST["contact"] ?></span> <br>
			</span>
			<br /><br />
			<span>
				Adresse → <span><?php echo $_POST["adresse"] ?></span> <br>
			</span>
			<br /><br />
			<span>
				Code Postal → <span><?php echo $_POST["codepostal"] ?></span> <br>
			</span>
			<br /><br />
			<span>
				Ville → <span><?php echo $_POST["ville"] ?></span> <br>
			</span>
			<br /><br />
			<span>
				Email → <span><?php echo $_POST["email"] ?></span> <br>
			</span>
			<br /><br />
			<span>
				Téléphone → <span><?php echo $_POST["tel"] ?></span> <br>
			</span>
			<br /><br />
			<span>
				Projet → <span><?php echo $_POST["projet"] ?></span> <br>
			</span>
		</div>		

	</div>


			
			




</body>
</html>