// function message()
// {
// 	document.write("Welcome on this page");
// }

// function exemple(texte)
// {
// 	alert(texte);
// }

// function Exemplebis(Texte1, Texte2)
// {
// 	document.write(Texte1, Texte2);
// }


var nombre = prompt("Entrez un nombre");;
var cube;
function cube(nombre)
{
	cube = nombre*nombre*nombre;
}
cube(nombre);
document.write("Le cube de" + " " + nombre + " " + "est égal à" + " " + cube)
document.write("<br>")




var nombre1 = prompt("Entrez un 1er nombre");
var nombre2 = prompt("Entrez un 2ème nombre");;
var produit;
function produit(nombre1,nombre2)
{
	produit = nombre1*nombre2;
}
produit(nombre1,nombre2);
document.write("Le produit de" + " " + nombre1 + " " + "x" + " " + nombre2 + " " + "est égal à" + " " + produit)





function image() {
    var img = document.createElement('img');
    img.src = "http://www.snut.fr/wp-content/uploads/2015/12/image-de-papillon.jpg";
    document.body.appendChild(img);
}
document.write("<br><br>")

if (confirm("Souhaitez-vous afficher l'image ?") == true)
{
	image();
}
else
{
	alert("Tant pis!!!!")
}


