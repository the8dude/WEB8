var btn1 = document.querySelector("button");
var btn2 = document.querySelector("#btn2");
var lbl1 = document.querySelector("#lbl1");
var textBox1 = document.querySelector("input");

 
 var NM = Math.floor((Math.random() * 100) + 1);
 console.log(NM);

btn1.addEventListener("click", function ()
{

	if (textBox1.value < NM)
	    {
	        lbl1.innerHTML = "Plus grand... Réessayez";
	        textBox1.value = "";
			textBox1.focus();                   
			lbl1.style.color="white";
			setTimeout (function()
			{
				lbl1.style.color="#607D8B";
			 	console.log("interval");
			}, 2000);
	    }

	else if (textBox1.value > NM)
	    {
	        lbl1.innerHTML = "Plus petit...  Réessayez";
	        textBox1.value = "";
			textBox1.focus();
			lbl1.style.color="white";
			setTimeout (function()
			{
				lbl1.style.color="#607D8B";
			 	console.log("interval");
			}, 2000);
	    }
	 

	


	if (textBox1.value == NM)
		{
			lbl1.style.color="white";
			lbl1.innerHTML = "Félicitation vous avez trouvé !!!!";
			textBox1.value = "";
			
		}

	

	

});

btn2.addEventListener("click", function ()
{
	location.reload();
});

