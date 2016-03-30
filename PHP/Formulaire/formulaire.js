var textSociete = $("#societe");
var textContact = $("#contact");
var textAdresse = $("#adresse");
var textCP = $("#codepostal");
var textVille = $("#ville");
var textEmail = $("#email");
var textTel = $("#tel");
var selectChoix = $("#choix");
var textProjet = $("#projet");
var btnEnvoyer = $("#envoyer");
var btnEffacer = $("#effacer");

var textSociete2 = $("#societe2");
var textContact2 = $("#contact2");
var textCP2 = $("#codepostal2");
var textVille2 = $("#ville2");
var textEmail2 = $("#email2");

var form1 = $("#form1");


var societe =  new RegExp ("^[a-zA-Z0-9]+$");
var contact = new RegExp ("^[a-zA-Z]+$");
var cp = new RegExp ("^[0-9][0-9AB][0-9]{3}$");
var ville = new RegExp ("^[a-zA-Z]+$");
var email = new RegExp ("^[a-zA-Z0-9]{2,}@{1,1}[a-zA-Z0-9]{2,}.{1,1}[a-z]{2,4}$");


textSociete.change(function()
{
	if (societe.test(textSociete.val())==true)
	{
		console.log("ok");
		textSociete.css("borderColor", "green");
	}
	else
	{
		textSociete.css("borderColor", "red");

	}
	if (textSociete.val() == "")
	{
		textSociete.css("borderColor", "#607D8B");
	}

});

textContact.change(function()
{
	if (contact.test(textContact.val())==true)
	{
		console.log("ok");
		textContact.css("borderColor", "green");
	}
	else
	{
		textContact.css("borderColor", "red");

	}
	if (textContact.val() == "")
	{
		textContact.css("borderColor", "#607D8B");
	}

});

textCP.change(function()
{
	if (cp.test(textCP.val())==true)
	{
		console.log("ok");
		textCP.css("borderColor", "green");
	}
	else
	{
		textCP.css("borderColor", "red");

	}
	if (textCP.val() == "")
	{
		textCP.css("borderColor", "#607D8B");
	}

});

textVille.change(function()
{
	if (ville.test(textVille.val())==true)
	{
		console.log("ok");
		textVille.css("borderColor", "green");
	}
	else
	{
		textVille.css("borderColor", "red");

	}
	if (textVille.val() == "")
	{
		textVille.css("borderColor", "#607D8B");
	}

});

textEmail.change(function()
{
	if (email.test(textEmail.val())==true)
	{
		console.log("ok");
		textEmail.css("borderColor", "green");
	}
	else
	{
		textEmail.css("borderColor", "red");

	}
	if (textEmail.val() == "")
	{
		textEmail.css("borderColor", "#607D8B");
	}

});


selectChoix.change(function()
{
	console.log(selectChoix.val());
	if (selectChoix.val() != "Choisissez") 
	{
		textProjet.val(textProjet.val() + selectChoix.val() + "\n");
	}

		
	
	// if (selectChoix.selectedIndex > 0) 
	// {
	// 	var texte = selectChoix.options[selectChoix.selectedIndex].value;
	// 	textProjet.val() += texte + "\n";
	// }

});

btnEffacer.click(function ()
{

	textSociete.css("borderColor", "#607D8B");
	textContact.css("borderColor", "#607D8B");
	textCP.css("borderColor", "#607D8B");
	textVille.css("borderColor", "#607D8B");
	textEmail.css("borderColor", "#607D8B");
	textSociete2.hide();
	textContact2.hide();
	textCP2.hide();
	textVille2.hide();
	textEmail2.hide();

});

	textSociete2.hide();
	textContact2.hide();
	textCP2.hide();
	textVille2.hide();
	textEmail2.hide();

form1.submit(function (evt)
{
			console.log("submit");
			
	if (textSociete.val() == "") 
		{
			textSociete2.show();
			evt.preventDefault();
		}
	else if (societe.test(textSociete.val())==false)
		{
			evt.preventDefault();
			textSociete2.show();
			textSociete2.html("Caractères autorisés : lettres / chiffres")
			textSociete2.css("color", "FF6600")
		} 
	else
		{
			textSociete2.hide();
		}


	if (textContact.val() == "") 
		{
			textContact2.show();
			evt.preventDefault();
		}
	else if (contact.test(textContact.val())==false)
		{
			evt.preventDefault();
			textContact2.show();
			textContact2.html("Caractères autorisés : lettres")
			textContact2.css("color", "FF6600")
		}
	else
		{
			textContact2.hide();
		}


	if (textCP.val() == "") 
		{
			textCP2.show();
			evt.preventDefault();
		}
	else if (cp.test(textCP.val())==false)
		{
			evt.preventDefault();
			textCP2.show();
			textCP2.html("Saisissez 5 chiffres")
			textCP2.css("color", "FF6600")
		} 
	else
		{
			textCP2.hide();
		}


	if (textVille.val() == "") 
		{
			textVille2.show();
			evt.preventDefault();
		}
	else if (ville.test(textVille.val())==false)
		{
			evt.preventDefault();
			textVille2.show();
			textVille2.html("Caractères autorisés : lettres")
			textVille2.css("color", "FF6600")
		}
	else
		{
			textVille2.hide();
		}


	if (textEmail.val() == "") 
		{
			textEmail2.show();
			evt.preventDefault();
		}
	else if (email.test(textEmail.val())==false)
		{
			evt.preventDefault();
			textEmail2.show();
			textEmail2.html("Respectez le format de l'email : exemple@exmple.com")
			textEmail2.css("color", "FF6600")
		}	
	else
		{
			textEmail2.hide();
		}
			
		
});