$(document).ready(function() {

var div0 = $(".div0");
var div3 = $(".div3");


	div3.hide();

	div0.click(function()
	{
		div3.slideToggle();	
	});

	$(".text").mouseenter(function()
		{
			$(this).css('background-color', '#D6E3BC');
			
		});

	$(".text").mouseleave(function()
		{
			$(this).css('background-color', '#77933C');
		});


	$(".text").click(function() 
		{
			div3.slideUp();
		});

});
