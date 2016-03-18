var textSociete = document.querySelector("#societe");
var textContact = document.querySelector("#contact");
var textAdresse = document.querySelector("#adresse");
var textCP = document.querySelector("#codepostal");
var textVille = document.querySelector("#ville");
var textEmail = document.querySelector("#email");
var textTel = document.querySelector("#tel");
var selectChoix = document.querySelector("#choix");
var textProjet = document.querySelector("#projet");
var btnEnvoyer = document.querySelector("#envoyer");
var btnEffacer = document.querySelector("#effacer");

var textSociete2 = document.querySelector("#societe2");
var textContact2 = document.querySelector("#contact2");
var textCP2 = document.querySelector("#codepostal2");
var textVille2 = document.querySelector("#ville2");
var textEmail2 = document.querySelector("#email2");

var form1 = document.querySelector("#form1");


var societe =  new RegExp ("^[a-zA-Z0-9]+$");
var contact = new RegExp ("^[a-zA-Z]+$");
var cp = new RegExp ("^[0-9][0-9AB][0-9]{3}$");
var ville = new RegExp ("^[a-zA-Z]+$");
var email = new RegExp ("^[a-zA-Z0-9]{2,}@{1,1}[a-zA-Z0-9]{2,}.{1,1}[a-z]{2,4}$");


function verif1()
{
	if (societe.test(textSociete.value)==true)
	{
		console.log("ok");
		textSociete.style.borderColor="green";
	}
	else
	{
		textSociete.style.borderColor="red";

	}
	if (textSociete.value == "")
	{
		textSociete.style.borderColor="#607D8B";
	}

}

function verif2()
{
	if (contact.test(textContact.value)==true)
	{
		console.log("ok");
		textContact.style.borderColor="green";
	}
	else
	{
		textContact.style.borderColor="red";

	}
	if (textContact.value == "")
	{
		textContact.style.borderColor="#607D8B";
	}

}

function verif3()
{
	if (cp.test(textCP.value)==true)
	{
		console.log("ok");
		textCP.style.borderColor="green";
	}
	else
	{
		textCP.style.borderColor="red";

	}
	if (textCP.value == "")
	{
		textCP.style.borderColor="#607D8B";
	}

}

function verif4()
{
	if (ville.test(textVille.value)==true)
	{
		console.log("ok");
		textVille.style.borderColor="green";
	}
	else
	{
		textVille.style.borderColor="red";

	}
	if (textVille.value == "")
	{
		textVille.style.borderColor="#607D8B";
	}

}

function verif5()
{
	if (email.test(textEmail.value)==true)
	{
		console.log("ok");
		textEmail.style.borderColor="green";
	}
	else
	{
		textEmail.style.borderColor="red";

	}
	if (textEmail.value == "")
	{
		textEmail.style.borderColor="#607D8B";
	}

}

textSociete.addEventListener("input",verif1);
textContact.addEventListener("input",verif2);
textCP.addEventListener("input",verif3);
textVille.addEventListener("input",verif4);
textEmail.addEventListener("input",verif5);


selectChoix.addEventListener("change", function()
{
	console.log(selectChoix.selectedIndex);
		
	
	if (selectChoix.selectedIndex > 0) 
	{
		var texte = selectChoix.options[selectChoix.selectedIndex].value;
		textProjet.value += texte + "\n";
	}

});

btnEffacer.addEventListener("click", function ()
{

	textSociete.style.borderColor="#607D8B";
	textContact.style.borderColor="#607D8B";
	textCP.style.borderColor="#607D8B";
	textVille.style.borderColor="#607D8B";
	textEmail.style.borderColor="#607D8B";
	textSociete2.style.color = "#607D8B"
	textContact2.style.color = "#607D8B"
	textCP2.style.color = "#607D8B"
	textVille2.style.color = "#607D8B"
	textEmail2.style.color = "#607D8B"

});

form1.addEventListener("submit", function (evt)
{
			console.log("submit");
			
	if (textSociete.value == "") 
		{
			textSociete2.style.color = "#80213C"
			evt.preventDefault();
		}
	else
		{
			textSociete2.style.color = "#607D8B"
		}

	if (textContact.value == "") 
		{
			textContact2.style.color = "#80213C"
			evt.preventDefault();
		}
	else
		{
			textContact2.style.color = "#607D8B"
		}

	if (textCP.value == "") 
		{
			textCP2.style.color = "#80213C"
			evt.preventDefault();
		}
	else
		{
			textCP2.style.color = "#607D8B"
		}

	if (textVille.value == "") 
		{
			textVille2.style.color = "#80213C"
			evt.preventDefault();
		}
	else
		{
			textVille2.style.color = "#607D8B"
		}

	if (textEmail.value == "") 
		{
			textEmail2.style.color = "#80213C"
			evt.preventDefault();
		}
	else
		{
			textEmail2.style.color = "#607D8B"
		}
			
});