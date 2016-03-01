$(window).bind('hashchange', function() {

	var getProdhash = window.location.hash;

	if(getProdhash=="#product_Tube_self-ballasted_T5"){

		

		$("#content").load("Tube_T5.html");	
	}

	if(getProdhash=="#product_Tube_self-ballasted_T8"){
		$("#content").load("Tube_T8.html");	
	}


}) // end bind()
