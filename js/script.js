/* Author:*/
	$(function() {
	/* To do
	commented out div and hide/show in tabHome to try and  get jQuery UI dialog working*/
		$("#MessToday").hide();

		var $usmtabs = $( "#tabs" ).tabs();
		
		$("#Contacttab2").click(function() { // bind click event to link
		//	alert("testit clicked");
			//$("#tabs").tabs('select', 5);
				$("#tabs").tabs('url', 6, "tabContactUs.php").tabs("select", 6); // switch to ContactUs
			return false;
		});
	/*			$("#MessToday").dialog({
					autoOpen: false, show: "blind", hide: explode 
				});*/
	/*	$("#aBottomBoxClose").click(function() {
			$("#MessToday").hide();
		}); */
		
	/*	$( "#eventaccordion" ).accordion({
				header: "h3"//, 
				//autoheight: false 
		});*/
		
	// Font size management from http://www.shopdev.co.uk/blog/text-resizing-with-jquery/	  
	// Reset Font Size
	  var originalFontSize = $('html').css('font-size');
		$(".resetFont").click(function(){
		$('html').css('font-size', originalFontSize);
	  });
	  // Increase Font Size
	  $(".increaseFont").click(function(){
		var currentFontSize = $('html').css('font-size');
		var currentFontSizeNum = parseFloat(currentFontSize, 10);
		var newFontSize = currentFontSizeNum*1.2;
		$('html').css('font-size', newFontSize);
		return false;
	  });
	  // Decrease Font Size
	  $(".decreaseFont").click(function(){
		var currentFontSize = $('html').css('font-size');
		var currentFontSizeNum = parseFloat(currentFontSize, 10);
		var newFontSize = currentFontSizeNum*0.8;
		$('html').css('font-size', newFontSize);
		return false;
	  });
	});
	


		







