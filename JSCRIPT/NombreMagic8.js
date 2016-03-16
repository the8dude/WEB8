var btn1 = document.querySelector("button");
var btn2 = document.querySelector("#btn2");

var textBox1 = document.querySelector("input");

 
 var NM = Math.floor((Math.random() * 100) + 1);
 console.log(NM);

btn1.addEventListener("click", function ()
{

 if (textBox1.value < NM)
    {
        alert("Plus grand... Réessayez");                   
    }

else if (textBox1.value > NM)
    {
        alert("Plus petit...  Réessayez");
    }
 

 if (textBox1.value == NM)
 {
 	alert("Félicitation vous avez trouvé nombre magique !!!!")
 }

});

btn2.addEventListener("click", function ()
{
	location.reload();
});

