$(document).ready(function(){

	$("#content").load("indexContent.html");

	$(window).bind('hashchange', function() {
 		var getUrlHash = window.location.hash;

		if(getUrlHash=="#index"){
			$("#content").load("indexContent.html");
		}
		if(getUrlHash=="#about"){
			$("#content").load("about.html");
		}
		if(getUrlHash=="#product"){
			$("#content").load("product.html");
		}
		if(getUrlHash=="#product_Tube_self-ballasted_T5"){
			$("#content").load("product_info.html");
			
		}



	});//end hashchange

})//end document.ready()




