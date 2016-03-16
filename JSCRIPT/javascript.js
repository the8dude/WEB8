/*
alert("<b>LA BASE !!!!</b>");
*/

/*
console.log("coucou");
document.write("<b>fuckfuckfuck</b>");
document.write("<b>fuckfuckfuck</b> <br>");

var age = 35;
document.write("<b>Votre âge est </b>" + age);
*/

/*
window.alert(age);
window.alert("chaîne de caractères");
window.alert(age + "chaîne de caractères");
*/

// var reponse1 = window.prompt("Saisissez votre nom");
// var reponse2 = window.prompt("Saisissez votre couleur préférée","pas de préférence");


// document.write("<br>" +reponse1 + "<br>" +reponse2)


/*
var reponse1 = window.prompt("Entrez votre nom");
var reponse2 = window.prompt("Entrez votre prénom");



if (window.confirm("Etes-vous un homme ?") == true)
{
	alert("Bonjour Monsieur" + reponse1 + " " + reponse2 + "\n\nBienvenue sur notre sitre web !");
} 


else
{
	(window.confirm("Etes-vous une femme ?") == true) 
		{
	alert("Bonjour Madame " + reponse1 + " " + reponse2 + "\n\nBienvenue sur notre sitre web !");

		}
}
*/

// var compt=1;
// //  while (compt<5) {
// //  if (compt == 4)
// //  break;
// // document.write ("ligne : " + compt + "<BR>");
// //  compt++;
// //  }
// //  document.write("fin de la boucle <br><br>");

// while (compt<5) {
// if (compt == 3){
// compt++
// continue;
// }
// document.write ("ligne : " + compt + "<br />");
// compt++;
// }
// document.write("fin de la boucle");

var n = 0;
var i = -1;

//window.confirm("souhaitez vous continuer?");

var reponse = window.prompt("Saisissez le prénom N°" + (n+=1) + "\n\nou Clic sur Annuler pour arrêter la saisie");
console.log(reponse);
i++;
//
while (reponse != "" && reponse != null)
{
	reponse = window.prompt("Saisissez le prénom N°" + (n+=1) + "\n\nou Clic sur Annuler pour arrêter la saisie");
	console.log(reponse);

	i++
	
}
console.log(i);
