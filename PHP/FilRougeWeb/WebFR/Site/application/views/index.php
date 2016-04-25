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
	<!-- CSS Woothemes Gros carousel -->
	<link rel="stylesheet" href="<?=base_url("woothemes/flexslider.css")?>" />
	<!-- JS jQuery -->
	<script src="<?=base_url("jscript/jquery.js")?>"></script>
	<!-- CSS Petit carousel -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
				
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
	  				<button class="span buttonnav">Percussions</button>
	  				<button class="span buttonnav">Cordes</button>
	  				<button class="span buttonnav">Vent</button>	  				
	  				<button class="span buttonnav">Accessoires</button>		
	  				<button class="span buttonnav"><a href="<?=site_url("System/contact")?>" class="hypertexte" id="contact">Contact</a></button>
	  			</div>

	  		</div>
	  		<div class="mdl-cell mdl-cell--2-col sansmargin"></div>
		</div>
	</div>




	<!-- CODE DU BODY BIENVENUE + CAROUSEL + CAROUSEL PRODS -->
	<!-- CODE DU BODY BIENVENUE + CAROUSEL + CAROUSEL PRODS -->
	<!-- CODE DU BODY BIENVENUE + CAROUSEL + CAROUSEL PRODS -->
	<!-- CODE DU BODY BIENVENUE + CAROUSEL + CAROUSEL PRODS -->
	<div class="bodyback">
		<div class="mdl-grid sanspadding">
	  		<div class="mdl-cell mdl-cell--2-col sansmargin"></div>
	  		<div class="mdl-cell mdl-cell--8-col sansmargin">
	  			<!-- CODE DU BODY BIENVENUE -->
	  			<!-- CODE DU BODY BIENVENUE -->
	  			<div class="body1">

	  				<div class="sans margin h2">
	  					<h2>Bienvenue à la maison!</h2>
	  				</div>	
	  				<br>
					<div id="body1div1">Vous trouverez chez nous tous les instruments de musique, équipements de studio,<br>  d'éclairage thomann et de sonorisation, 
					toutes les plus grandes marques et<br>  produits équivalents, ainsi qu'une tonne d'autres services gratuits pour musiciens!</div>
					<br>
					<div id="body1div2">Les frais de port sont gratuits à partir de 49 €.<br> Dans le cas contraire, ils ne sont que de 4,80 € par commande.<br> Tous les prix incluent thomann 20% de TVA.</div>
					<br><br>
	  			</div>

	  			<!-- CODE DU BODY GRAND CAROUSEL -->
	  			<!-- CODE DU BODY GRAND CAROUSEL -->

	  			<div class="body2">
	  					<br><br>
	  					<div class="flexslider carousel">
						  	<ul class="slides">
							    <li>
							      <img src="<?=base_url("Image/gibson.jpg")?>" height="262px" width="330px" />
							      <p class="flex-caption">→ Guitare Electrique Gibson</p>
							    </li>
							    <li>
							      <img src="<?=base_url("Image/fender.jpg")?>" height="262px" width="330px" />
							      <p class="flex-caption">→ Guitare Electrique Fender</p>
							    </li>
					    	</ul>
						</div>

	  			</div>

	  			<!-- CODE DU BODY PETIT CAROUSEL -->
	  			<!-- CODE DU BODY PETIT CAROUSEL -->
	  			<div class="body2">

	  					<div class="flexslider2">
						  <ul class="slides">
						    <li>
						    	<div class="divproduits">
									<img src="<?=base_url("Image/produits/gibson_sg.jpg")?>" width="90%" height="90%" class="produits"/>
								</div>
							      	<p class="flex-caption2">
							      		<span class="titre">Guitare Electrique Gibson</span><br><span class="description">SG Standard 2016 HP HC</span>
							      		<br>
							      		<span class="prix">2.640 €</span>

							      	</p>
						    </li>
						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/gibson_medium.jpg")?>" width="90%" height="90%" class="produits">
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Cordes Guitare Electrique Gibson</span><br><span class="description">Cordes → MEDIUM</span>
							      		<br>
							      		<span class="prix">24 €</span>

							      	</p>
						    </li>


						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/gibson_lespaul.jpg")?>" width="90%" height="90%" class="produits">
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Guitare Electrique Gibson</span><br><span class="description">LP Syudio Fadded 2016 HP SE</span>
							      		<br>
							      		<span class="prix">1.176 €</span>

							      	</p>
						    </li>
						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/gibson_soft.jpg")?>" width="90%" height="90%" class="produits">
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Cordes Guitare Electrique Gibson</span><br><span class="description">Cordes → SOFT</span>
							      		<br>
							      		<span class="prix">21,60 €</span>

							      	</p>
						    </li>


						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/steinway_b211.jpg")?>" width="90%" height="90%" class="produits">
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Piano Steinway & Sons</span><br><span class="description">Modèle B-211</span>
							      		<br>
							      		<span class="prix">25.500 €</span>

							      	</p>
						    </li>
						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/andexinger_liftomatic.jpg")?>" width="90%" height="90%" class="produits">
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Banc Piano Andexinger</span><br><span class="description">Bench Lift O Matic</span>
							      		<br>
							      		<span class="prix">600 €</span>

							      	</p>
						    </li>


						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/rampone_2006.jpg")?>" width="90%" height="90%" class="produits">
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Saxophone Tampone & Cazzani</span><br><span class="description">Modèle 2006/TV/OTS Two Voices</span>
							      		<br>
							      		<span class="prix">2.880 €</span>

							      	</p>
						    </li>
						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/forestone_anche.jpg")?>" width="90%" height="90%" class="produits">
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Anche Forestone</span><br><span class="description">Unfiled Alto Sax M, F3.5</span>
							      		<br>
							      		<span class="prix">30 €</span>

							      	</p>
						    </li>


						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/fender_strato.jpg")?>" width="90%" height="90%" class="produits">
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Guitare Electrique Fender</span><br><span class="description">Road Worn Stratocaster OWT</span>
							      		<br>
							      		<span class="prix">1.260 €</span>

							      	</p>
						    </li>
						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/fender_regular.jpg")?>" width="90%" height="90%" class="produits">
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Cordes Guitare Electrique Fender</span><br><span class="description">250R</span>
							      		<br>
							      		<span class="prix">24 €</span>

							      	</p>
						    </li>


						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/mediator_souple.jpg")?>" width="90%" height="90%" class="produits"/>
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Médiator Dunlop x10</span><br><span class="description">Souples 0.50 mm</span>
							      		<br>
							      		<span class="prix">1,20 €</span>

							      	</p>
						    </li>
						    <li>
						    	<div class="divproduits">
							      <img src="<?=base_url("Image/produits/mediator_rigide.jpg")?>" width="90%" height="90%" class="produits">
							    </div>
							      <p class="flex-caption2">
							      		<span class="titre">Médiator Dunlop x10</span><br><span class="description">Rigides 1.14 mm</span>
							      		<br>
							      		<span class="prix">1,20 €</span>

							      	</p>
						    </li>
						    <!-- items mirrored twice, total of 12 -->
						  </ul>
						</div>

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
						  		<a href="<?=site_url("client/index")?>" class="hypertextefooter"><div class="private"><i class="material-icons">https</i>Accès Commercial</div></a>
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


<script defer src="<?=base_url("woothemes/jquery.flexslider.js")?>"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>

<script>


$(document).ready(function() {

	// Fonction Grand Carousel
		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide"
		  });
		});	

		$('.center').slick({
		  centerMode: true,
		  centerPadding: '60px',
		  slidesToShow: 3,
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        slidesToShow: 3
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        slidesToShow: 1
		      }
		    }
		  ]
		});


	// Fonction Petit Carousel
		$(window).load(function() {
		  $('.flexslider2').flexslider({
		    animation: "slide",
		    animationLoop: false,
		    itemWidth: 210,
		    itemMargin: 5,
		    minItems: 2,
		    maxItems: 4
		  });
		});
		
});
</script>