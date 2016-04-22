<html>

<head>
	<title>Village Green</title>
	<meta charset="utf-8">
	<!-- CSS Material Design -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.blue_grey-red.min.css" />
	<script defer src="https://code.getmdl.io/1.1.2/material.min.js"></script>
	<!-- CSS Perso -->
	<link rel="stylesheet" href="<?=base_url("css/index.css")?>" />
	<link rel="stylesheet" href="<?=base_url("css/comliste.css")?>" />
	<!-- JS jQuery -->
	<script src="<?=base_url("jscript/jquery.js")?>"></script>
	
				
</head>

<body>

	<div>

	<!-- CODE DU HEADER LOGO + BOUTONS + SEARCH -->
	<!-- CODE DU HEADER LOGO + BOUTONS + SEARCH -->
	<!-- CODE DU HEADER LOGO + BOUTONS + SEARCH -->
	<!-- CODE DU HEADER LOGO + BOUTONS + SEARCH -->
	<div class="headerback">
		<div class="mdl-grid header sanspadding">
	  		<div class="mdl-cell mdl-cell--2-col sansmargin"></div>
	  		<div class="mdl-cell mdl-cell--8-col sansmargin">

	  			<div class="header1">

	  				<div class="mdl-grid">

					  	<div class="mdl-cell mdl-cell--4-col sansmargin">
					  		<img src="<?=base_url("Image/logo2.png")?>" id="logo">					  							  
					  	</div>


						<div class="mdl-cell mdl-cell--4-col header1size">
							  	
					  		<div class="header2size">
					  			<div class="buttonsheader">Se Connecter <img src="<?=base_url("Icone/web.png")?>" height="28px" width="28px"></div>
						  		<div class="buttonsheader">Panier <img src="<?=base_url("Icone/commerce.png")?>" height="28px" width="28px"></div>
							  	<div class="searcheader">
									<input type="text" class="searchinput" placeholder="Rechercher un produit"/> <img src="<?=base_url("Icone/search.png")?>" height="28px" width="28px">
								</div>
					  		</div>
	  					
	  					</div>

					</div>

	  			</div>

	  			<div class="header3">
	  				<button class="span buttonnav"><a href="<?=site_url("System/index")?>" class="hypertexte" id="accueil">Accueil</a></button>
	  				<button class="span buttonnav">Fournisseurs</button>
	  				<button class="span buttonnav">Rubriques</button>
	  				<button class="span buttonnav">Sous Rubriques</button>
	  				<button class="span buttonnav"><a href="<?=site_url("System/comliste")?>" class="hypertexte" id="accueil">Produits</a></button>
	  				<button class="span buttonnav"><a href="<?=site_url("System/commercial")?>" class="hypertexte" id="contact">TDB</a></button>
	  			</div>

	  		</div>
	  		<div class="mdl-cell mdl-cell--2-col sansmargin"></div>
		</div>
	</div>




	<!-- CODE DU BODY CONTACT -->
	<!-- CODE DU BODY CONTACT -->
	<!-- CODE DU BODY CONTACT -->
	<!-- CODE DU BODY CONTACT -->
	<div class="bodyback">
		<div class="mdl-grid sanspadding">
	  		<div class="mdl-cell mdl-cell--2-col sansmargin"></div>
	  		<div class="mdl-cell mdl-cell--8-col sansmargin">
	  			
	  			<div class="bodyliste">
	  		<table>
	  			<tr>
	  				<div id="centrage">
	  					<td>
			  				<form>
					  		<select name="choix" class="select" id="choix">
					  			<option value="Choisissez">Choisissez</option>
					  			<option value="" disabled></option>
								<option value="all">TOUS LES PRODUITS</option>
					  			<option value="" disabled></option>
					  			<option value="" >Instruments à cordes</option>
					  			<option value="1110"> → Cordes pincées</option>
					  			<option value="1120"> → Cordes frappées</option>
					  			<option value="1130"> → Cordes frottées</option>
					  			<option value="" disabled></option>
					  			<option value="">Instruments à vent</option>
					  			<option value="1210"> → Vent biseau</option>
					  			<option value="1220"> → Vent anche</option>
					  			<option value="1230"> → Vent cuivres</option>
					  			<option value="" disabled></option>
								<option value="" >Instruments à percussions</option>
								<option value="1310"> → Percussions clavier</option>
								<option value="1320"> → Percussions peaux</option>
								<option value="" disabled></option>
								<option value="" >Accessoires</option>
								<option value="2010"> → Accessoires instruments à cordes</option>
								<option value="2020"> → Accessoires instruments à vent</option>
								<option value="2030"> → Accessoires instruments à percussions</option>
								
					  		</select>
					  		<input type="submit" class="submit" value="CHERCHER"/>
					  		</form>
						</td>
						<td>
					  			<a href="<?= site_url("system/ajout") ?>" class="hypertexte">
									<button class="mdl-button mdl-js-button mdl-button--raised btnajout">
										AJOUTER
									</button>							
								</a>
						</td>
					</div>

			  	</tr>
			</table>

	  		<table class="  mdl-shadow--2dp  mdl-js-data-table tableliste">
				<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric titre" id="photo">
						Photo 
					</th>
					<th class="mdl-data-table__cell--non-numeric titre">
						Produit
					</th>
					<th class="mdl-data-table__cell--non-numeric titre">
						PU TTC
					</th>
					<th class="mdl-data-table__cell--non-numeric titre">
						Stock
					</th>

					<th>
						
					</th>
				</tr>
				</thead>

		  		<tbody>
				<?php foreach ($liste as $ligne): ?>
					<tr>
						<!-- Photo -->
						<td class="mdl-data-table__cell--non-numeric">
							<img src="<?= base_url($ligne->PhotoArticle) ?>" class="picsize"/>
						</td>
						<!-- AppelationArticle -->
						<td class="mdl-data-table__cell--non-numeric texte">
							<?= $ligne->AppelationArticle ?>
						</td>
						<!-- PUHT -->
						<td class="mdl-data-table__cell--non-numeric texte">
							<?= $ligne->PUHTArticle*1.20 ?> €
						</td>
						<!-- Quantité -->
						<td class="stock texte">
							<?= $ligne->QteStockArticle ?>
						</td>
						<!-- Bouton de détails -->
						<td class="alignbtn">								
							<a href="<?= site_url("system/comdetails/".$ligne->RefArticle) ?>">								
								<button class="mdl-button mdl-js-button mdl-button--raised btn">
								DETAILS	  							
								</button>
							</a>

						</td>

					</tr>
					
				<?php endforeach; ?>

				</tbody>
			</table>
	  				

	  			</div>



	  		<div class="mdl-cell mdl-cell--2-col"></div>
		</div>
	</div>
	



	<!-- CODE DU FOOTER LOGOS MARQUES + INFOS -->
	<!-- CODE DU FOOTER LOGOS MARQUES + INFOS -->
	<!-- CODE DU FOOTER LOGOS MARQUES + INFOS -->
	<!-- CODE DU FOOTER LOGOS MARQUES + INFOS -->
	<div class="footerback">
		<div class="mdl-grid sanspadding">
	  		<div class="mdl-cell mdl-cell--2-col sansmargin"></div>
	  		<div class="mdl-cell mdl-cell--8-col sansmargin">
	  			<div class="footer1">
	  				<div class="footerlogo">
	  					<div>
	  						<h1>Marques Populaires</h1>
	  					</div>
	  					<span><img src="<?=base_url("Image/marques/andexinger.jpg")?>" width="234px" height="60px"/></span>
	  					<span><img src="<?=base_url("Image/marques/gibson.jpg")?>" /></span>
	  					<span><img src="<?=base_url("Image/marques/forestone.jpg")?>" width="262px" height="60px"/></span><br><br>
	  					<span><img src="<?=base_url("Image/marques/fender.jpg")?>" width="165px" height="60px"/></span>
	  					<span><img src="<?=base_url("Image/marques/rampone.jpg")?>" width="262px" height="60px"/></span>
	  					<span><img src="<?=base_url("Image/marques/steinway.jpg")?>" width="164px" height="60px"/></span>
	  				</div>
	  			</div>
	  		</div>
	  		<div class="mdl-cell mdl-cell--2-col"></div>
		</div>

		<div class="mdl-grid sanspadding">
	  		<div class="mdl-cell mdl-cell--2-col sansmargin"></div>
	  		<div class="mdl-cell mdl-cell--8-col sansmargin">
	  			<div class="footer2">
	  				<div class="mdl-grid sanspadding">
					  <div class="mdl-cell mdl-cell--2-col footercolonne">
					  	<div>Contact</div>
						  	<div class="footerinfos">
						  		<br>
						  		Village Green 
						  		<br><br>
						  		<img src="<?=base_url("Icone/map.png")?>" width="40" height="40px"/>	<br>88 rue Rock'n'Roll<br>88 888 MusicLand
						  		<br><br>
						  		<img src="<?=base_url("Icone/cellphone.png")?>" width="40" height="40px"/>	<br>08.888.888.88
						  		<br><br>
						  		<img src="<?=base_url("Icone/mail.png")?>" width="40" height="40px"/>	<br>contact@villagegreen.com
						  		<br><br><br><br>
						  	</div>
					  	</div>

					  <div class="mdl-cell mdl-cell--2-col footercolonne">
					  	<div>Garanties</div>
					  	<div class="footerinfos">
					  		<br>
					  		<img src="<?=base_url("Icone/money1.png")?>" width="40px" height="40px"/>	Paypal
					  		<br><br>
					  		<img src="<?=base_url("Icone/money2.png")?>" width="40px" height="40px"/>	Mastercard
					  		<br><br>
					  		<img src="<?=base_url("Icone/money3.png")?>" width="40px" height="40px"/>	Visa
					  	</div>
					  </div>

					  <div class="mdl-cell mdl-cell--2-col footercolonne">
					  	<div>Catalogues</div>
					  	<div class="footerinfos">
					  		<br>
					  		Instruments à cordes
					  		<br><br>
					  		Instruments à vent
					  		<br><br>
					  		Instruments à percussions
					  		<br><br>
					  		Accessoires
					  	</div>
					  </div>

					  <div class="mdl-cell mdl-cell--2-col footercolonne">
					  	<div>Suivez-nous</div>
						  	<div class="footerinfos">
						  		<br>
						  		<img src="<?=base_url("Icone/social1.png")?>" width="40px" height="40px"/>	Google+
						  		<br><br>
						  		<img src="<?=base_url("Icone/social2.png")?>" width="40px" height="40px"/>	Facebook
						  		<br><br>
						  		<img src="<?=base_url("Icone/social3.png")?>" width="40px" height="40px"/>	Instagram
						  		<br><br>
						  		<img src="<?=base_url("Icone/social4.png")?>" width="40px" height="40px"/>	Twitter
						  		<br><br>
						  		<br><br>
						  		<br><br>
						  		<br><br>
						  		<br><br>
						  		<br><br>
						  		<a href="<?=site_url("System/commercial")?>" class="hypertextefooter"><div class="private"><i class="material-icons">https</i>Accès Commercial</div></a>
						  		<br><br>
						  		<br><br>
						  	</div>
					  	</div>
					  </div>
					  
					</div>
	  			</div>
	  		</div>
	  		<div class="mdl-cell mdl-cell--2-col sansmargin"></div>
		</div>
	</div>

	</div>

</body>

</html>
