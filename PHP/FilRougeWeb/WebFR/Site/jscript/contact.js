var verifnom = new RegExp ("^[a-zA-Z]+$");
var verifemail = /^[a-zA-Z0-9]{2,}@[a-zA-Z0-9]{2,}\.[a-z]{2,4}$/;
var verifobjet =  new RegExp ("^[a-zA-Z0-9]+$");
var verifmessage =  new RegExp ("^[a-zA-Z0-9.-_ /éèàù&?,.;:!¨^$€*\n]{10,}$");

var nom = $("#nom");
var email = $("#email");
var objet =  $("#objet");
var message =$("#message");
var submit =  $("#submit");
var reset =$("#reset");

var form1 = $("#form1");

var errornom = $("#errornom");
var erroremail = $("#erroremail");
var errorobjet =  $("#errorobjet");
var errormessage =$("#errormessage");

errornom.hide();
erroremail.hide();
errorobjet.hide();
errormessage.hide();

nom.on("input", function() 
{
	if (verifnom.test(nom.val())==true)
	{
		console.log("ok");
		nom.css("borderColor", "#29ABE2");
		errornom.hide();
	}
	else
	{
		nom.css("borderColor", "#660000");
	}
		
});

email.on("input", function() 
{
	if (verifemail.test(email.val())==true)
	{
		console.log("ok");
		email.css("borderColor", "#29ABE2");
		erroremail.hide();
	}
	else
	{
		email.css("borderColor", "#660000");
	}
		
});

objet.on("input", function() 
{
	if (verifobjet.test(objet.val())==true)
	{
		console.log("ok");
		objet.css("borderColor", "#29ABE2");
		errorobjet.hide();
	}
	else
	{
		objet.css("borderColor", "#660000");
	}
		
});

message.on("input", function() 
{
	if (verifmessage.test(message.val())==true)
	{
		console.log("ok");
		message.css("borderColor", "#29ABE2");
		errormessage.hide();
	}
	else
	{
		message.css("borderColor", "#660000");
	}
		
});

reset.click(function ()
{

	nom.css("borderColor", "#383838");
	email.css("borderColor", "#383838");
	objet.css("borderColor", "#383838");
	message.css("borderColor", "#383838");
	errornom.hide();
	erroremail.hide();
	errorobjet.hide();
	errormessage.hide();

});

form1.submit(function (evt)
{
			console.log("submit");
			
	if (nom.val() == "") 
		{
			errornom.show();
			evt.preventDefault();
		}
	else if (verifnom.test(nom.val())==false)
		{
			evt.preventDefault();
			errornom.show();
		} 
	else 
		{
			errornom.hide();
		}


	if (email.val() == "") 
		{
			erroremail.show();
			evt.preventDefault();
		}
	else if (verifemail.test(email.val())==false)
		{
			evt.preventDefault();
			erroremail.show();
		}
	else
		{
			erroremail.hide();
		}


	if (objet.val() == "") 
		{
			errorobjet.show();
			evt.preventDefault();
		}
	else if (verifobjet.test(objet.val())==false)
		{
			evt.preventDefault();
			errorobjet.show();
		} 
	else
		{
			errorobjet.hide();
		}


	if (message.val() == "") 
		{
			errormessage.show();
			evt.preventDefault();
		}
	else if (verifmessage.test(message.val())==false)
		{
			evt.preventDefault();
			errormessage.show();
		}
	else
		{
			errormessage.hide();
		}
});