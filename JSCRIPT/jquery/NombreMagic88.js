var btn1 = $("button");
var btn2 = $("#btn2");
var lbl1 = $("#lbl1");
var textBox1 = $("input");

lbl1.hide();

 
 var NM = Math.floor((Math.random() * 100) + 1);
 console.log(NM);

btn1.click(function()
{
	console.log("test");
	if (textBox1.val() < NM)
	    {
	        lbl1.html("Plus grand... Réessayez");
	        textBox1.val("");
			textBox1.focus();                   
			lbl1.fadeIn(2000).fadeOut(2000);
			
	    }

	else if (textBox1.val() > NM)
	    {
	        lbl1.html("Plus petit...  Réessayez");
	        textBox1.val("");
			textBox1.focus();
			lbl1.fadeIn(2000).fadeOut(2000);
		}
	 
	if (textBox1.val() == NM)
		{
			lbl1.fadeIn(2000);
			lbl1.html("Félicitation vous avez trouvé !!!!");
			textBox1.val("");
			
		}

});

btn2.click(function()
{
	location.reload();
});

