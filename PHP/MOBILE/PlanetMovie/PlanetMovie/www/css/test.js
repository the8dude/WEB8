$(document).ready(function () {

	$("#textBox1").bind( "change", function(event, ui) {
 	
		console.log("ok");

	 	var cle = 'f33cd318f5135dba306176c13104506a';
		var titreDuFilm = encodeURI($("#textBox1").val());
		var apiURL = 'http://api.themoviedb.org/3/search/movie?api_key=' + cle + '&query=' + titreDuFilm;
		console.log(apiURL)
		$.ajax({
			url: apiURL,
			success: function (result) 
			{
				
				$.mobile.changePage( "#page2", { transition: "slide", changeHash: false });
				AfficheResult(result);
			},
			error: function (request,error) 
			{
				alert('Une erreur est survenue, vous devez saisir un texte');
			}
		});



	});


	//vide le textBox en cliquand sur home
	$(".home").click(function() {

		$("#textBox1").val('');
	});

	//vide le textBox en cliquand sur back page2
	$("#back1").click(function() {

		$("#textBox1").val('');
	});

	//AFFICHAGE DES INFOS EN PAGE 3
	$(document).on('pagebeforeshow', '#page3', function(){
		$('#detailsFilm').empty();
		$.each(listeDesFilms, function(i, ligne) {
			if(ligne.id == idDuFilm) {
				console.log(ligne);
				$('#detailsFilm').append('<li><img src="https://image.tmdb.org/t/p/w185/'+ligne.poster_path+'"></li>');
				$('#detailsFilm').append('<li>Titre: '+ligne.original_title+'</li>');
				$('#detailsFilm').append('<li>Date de sortie'+ligne.release_date+'</li>');
				$('#detailsFilm').append('<li>Popularité : '+ligne.popularity+'</li>');
				$('#detailsFilm').append('<li>Popularité : '+ligne.vote_average+'</li>');
				$('#detailsFilm').listview('refresh');
			}
		});
	});


});


	//AFFICHE LES RESULTS DE LA RECHERCHE
	var listeDesFilms = null;

	function AfficheResult(result){
		$('#listeFilms').empty();
		listeDesFilms = result.results;
		$.each(result.results, function(i, ligne) 
		{
			codeHTML = '<li>';
			codeHTML += '<a href="#page3" data-id="' + ligne.id + '" data-transition="slide">';
			codeHTML += '<img src="https://image.tmdb.org/t/p/w185/'+ligne.poster_path+'"/>';
			codeHTML += '<h3>' + ligne.title + '</h3>';
			codeHTML += '<p>' + ligne.vote_average + '/10</p>';
			codeHTML += '</a>';
			codeHTML += '</li>';
			$('#listeFilms').append(codeHTML);
	 	});
	 	$('#listeFilms').listview('refresh');

	 		// AJOUT DE L'ID
	 		$(document).on('vclick', '#listeFilms li a', function(){
				 idDuFilm = $(this).attr('data-id');
				 console.log("ok");
				 //$.mobile.changePage( "#page3", { transition: "slide", changeHash: false });
			});

	}

	var idDuFilm = null;
